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
        // Verificamos que exista un plan Free
        $freePlan = Plan::where('nombre', 'Free')->first();

        if (!$freePlan) {
            // Log de error si no hay plan gratuito
            Log::error('No se encontró un plan gratuito (Free) para el registro de clientes');
        }

        return view('onboarding::register');
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

            // Para desarrollo: mostrar el error específico en lugar del mensaje genérico
            $errorMessage = env('APP_DEBUG')
                ? 'Error: ' . $e->getMessage()
                : 'Ocurrió un error inesperado. Por favor, intente nuevamente.';

            return back()
                ->withInput()
                ->withErrors(['error' => $errorMessage]);
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
