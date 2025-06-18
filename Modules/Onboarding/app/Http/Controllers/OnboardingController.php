<?php

namespace Modules\Onboarding\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Modules\Core\app\Models\Plan;
use Modules\Onboarding\app\Http\Requests\RegisterClientRequest;
use Modules\Onboarding\app\Services\OnboardingService;

class OnboardingController extends Controller
{
    protected OnboardingService $onboardingService;

    public function __construct(OnboardingService $onboardingService)
    {
        $this->onboardingService = $onboardingService;
    }

    /**
     * Mostrar formulario de registro de cliente
     */
    public function showRegisterForm(Request $request): View
    {
        // Obtener plan seleccionado desde la landing (opcional)
        $selectedPlanId = $request->get('plan_id');

        // Obtener todos los planes disponibles
        $planes = Plan::where('activo', true)->orderBy('precio_mensual')->get();

        // Si hay un plan preseleccionado, verificar que existe
        $selectedPlan = null;
        if ($selectedPlanId) {
            $selectedPlan = $planes->firstWhere('id', $selectedPlanId);
        }

        return view('onboarding::register', compact('planes', 'selectedPlan'));
    }

    /**
     * Procesar registro de cliente
     */
    public function register(RegisterClientRequest $request): RedirectResponse
    {
        try {
            // Crear cliente completo usando el servicio
            $result = $this->onboardingService->createClient($request->validated());

            if ($result['success']) {
                // Login automático del usuario creado
                Auth::login($result['user']);

                // Establecer contexto de tenant
                app()->instance('current_tenant', $result['empresa']);

                // Redireccionar al dashboard con mensaje de éxito
                return redirect()
                    ->route('dashboard')
                    ->with('success', $result['message']);
            }

            return back()->withErrors(['error' => 'Error al crear la cuenta. Intente nuevamente.']);

        } catch (\Exception $e) {
            // Log del error para debugging
            Log::error('Error en registro de cliente: ' . $e->getMessage(), [
                'data' => $request->validated(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()
                ->withInput()
                ->withErrors(['error' => 'Ocurrió un error inesperado. Por favor, intente nuevamente.']);
        }
    }

    /**
     * Página de confirmación post-registro (opcional)
     */
    public function success(): View
    {
        return view('onboarding::success');
    }
}
