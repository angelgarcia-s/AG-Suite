<?php

namespace Modules\Onboarding\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Modules\Core\app\Models\Plan;
use Modules\Core\app\Models\Cliente;
use Modules\Core\app\Services\SubscriptionService;

class SubscriptionController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
        $this->middleware('auth');
    }

    /**
     * Mostrar planes disponibles para cambio/upgrade
     */
    public function planes()
    {
        $user = Auth::user();
        $cliente = $this->getClienteFromUser($user);

        if (!$cliente) {
            return redirect()->route('dashboard')
                ->with('error', 'No se encontró información de cliente para tu cuenta.');
        }

        // Obtener todos los planes disponibles
        $planes = Plan::where('activo', true)->orderBy('precio_mensual')->get();
        $planActual = $cliente->plan;

        return view('onboarding::subscription.planes', compact('planes', 'planActual', 'cliente'));
    }

    /**
     * Mejorar/cambiar el plan de suscripción
     */
    public function upgrade(Request $request): RedirectResponse
    {
        // Validar request
        $validated = $request->validate([
            'plan_id' => 'required|exists:planes,id',
        ]);

        // Obtener cliente del usuario actual
        $user = Auth::user();
        $cliente = $this->getClienteFromUser($user);

        if (!$cliente) {
            return redirect()->back()
                ->with('error', 'No se encontró información de cliente asociada a tu cuenta.');
        }

        // Obtener plan
        $plan = Plan::findOrFail($validated['plan_id']);

        // Realizar suscripción
        try {
            // Determinar si es renovación o upgrade
            $renovacion = $request->input('renovacion', false);

            $this->subscriptionService->suscribirAPlan($cliente, $plan, $renovacion);

            return redirect()->route('dashboard')
                ->with('success', "¡Felicidades! Has actualizado tu plan a {$plan->nombre}.");

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error al procesar la suscripción: ' . $e->getMessage());
        }
    }

    /**
     * Mostrar estado de la suscripción actual
     */
    public function estado()
    {
        $user = Auth::user();
        $cliente = $this->getClienteFromUser($user);

        if (!$cliente) {
            return redirect()->route('dashboard')
                ->with('error', 'No se encontró información de cliente para tu cuenta.');
        }

        $suscripcionActiva = $this->subscriptionService->tieneSuscripcionActiva($cliente);

        return view('onboarding::subscription.estado', compact('cliente', 'suscripcionActiva'));
    }
      /**
     * Cancelar suscripción actual
     */
    public function cancelar(Request $request): RedirectResponse
    {
        // Obtener cliente del usuario actual
        $user = Auth::user();
        $cliente = $this->getClienteFromUser($user);

        if (!$cliente) {
            return redirect()->back()
                ->with('error', 'No se encontró información de cliente asociada a tu cuenta.');
        }

        try {
            // Validar motivo de cancelación (opcional)
            $motivo = $request->input('motivo');

            // Usar el servicio para cancelar la suscripción
            $cliente = $this->subscriptionService->cancelarSuscripcion($cliente, $motivo);

            return redirect()->route('dashboard')
                ->with('success', 'Tu suscripción ha sido cancelada. Tendrás acceso hasta el ' .
                    $cliente->fecha_fin_suscripcion->format('d/m/Y') . '.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error al cancelar la suscripción: ' . $e->getMessage());
        }
    }

    /**
     * Obtener cliente a partir del usuario autenticado
     */
    private function getClienteFromUser($user)
    {
        return Cliente::where('email', $user->email)->first();
    }
}
