<?php

namespace Modules\Onboarding\app\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Modules\Core\app\Models\Cliente;
use Modules\Core\app\Models\Empresa;
use Modules\Core\app\Models\Plan;
use Modules\Core\app\Models\Modulo;
use Modules\Core\app\Services\SubscriptionService;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class OnboardingService
{
    protected $subscriptionService;

    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    /**
     * Crear un nuevo cliente con empresa y usuario administrador
     */
    public function createClient(array $data): array
    {
        return DB::transaction(function () use ($data) {
            // Obtener el plan gratuito
            $freePlan = Plan::where('nombre', 'Free')->firstOrFail();

            // Asegurar que data tenga plan_id (usar Free si no se especifica)
            if (empty($data['plan_id'])) {
                $data['plan_id'] = $freePlan->id;
            }

            // 1. Crear Cliente
            $cliente = $this->createCliente($data);

            // 2. Asignar plan gratuito (siempre en registro inicial)
            $subscriptionData = $this->processSuscripcion($cliente, $data['plan_id']);

            // 3. Crear Empresa
            $empresa = $this->createEmpresa($cliente, $data);

            // 4. Crear Usuario Administrador
            $user = $this->createUserAdmin($empresa, $cliente, $data);

            // 5. Asignar Rol de SuperAdminEmpresa
            $this->assignRole($user);

            // 6. Activar Módulos según Plan
            $this->activateModulesForPlan($cliente, $data['plan_id']);

            // 7. Enviar Email de Bienvenida (opcional)
            $this->sendWelcomeEmail($user, $cliente, $empresa);

            return [
                'success' => true,
                'cliente' => $cliente,
                'empresa' => $empresa,
                'user' => $user,
                'subscription' => $subscriptionData,
                'message' => '¡Bienvenido a AG Business Suite! Tu cuenta ha sido creada exitosamente.'
            ];
        });
    }

    /**
     * Crear Cliente
     */
    private function createCliente(array $data): Cliente
    {
        $now = now();

        return Cliente::create([
            'nombre' => $data['empresa_nombre'],
            'email' => $data['email'],
            'pais' => $data['pais'],
            'plan_id' => $data['plan_id'],
            'activo' => true,
            'fecha_inicio_suscripcion' => $now,
            'fecha_fin_suscripcion' => null, // Se establecerá al asignar el plan
            'estado_suscripcion' => 'pendiente', // Se actualizará al asignar el plan
        ]);
    }

    /**
     * Procesar suscripción utilizando el SubscriptionService
     */
    private function processSuscripcion(Cliente $cliente, int $planId): array
    {
        // Buscar plan Free para prueba gratuita
        $freePlan = Plan::where('nombre', 'Free')->first();

        if (!$freePlan) {
            throw new \Exception('No se encontró el plan gratuito (Free) para registrar al cliente.');
        }

        // Aplicar plan gratuito usando el servicio de suscripción
        $clienteActualizado = $this->subscriptionService->asignarPruebaGratuita($cliente);

        // Preparar datos de retorno
        $subscriptionData = [
            'estado_suscripcion' => $clienteActualizado->estado_suscripcion,
            'fecha_inicio_suscripcion' => $clienteActualizado->fecha_inicio_suscripcion,
            'fecha_fin_suscripcion' => $clienteActualizado->fecha_fin_suscripcion,
            'ultimo_pago' => $clienteActualizado->ultimo_pago,
            'proximo_pago' => $clienteActualizado->proximo_pago,
            'plan_id' => $freePlan->id,
            'plan_nombre' => $freePlan->nombre,
        ];

        if (app()->environment('local')) {
            return [
                'mock' => true,
                'status' => 'active',
                'message' => 'Suscripción de prueba gratuita creada exitosamente',
                'data' => $subscriptionData
            ];
        } else {
            // TODO: Implementar integración real con Laravel Cashier + Stripe
            // $customer = $cliente->createAsStripeCustomer();
            // $subscription = $cliente->newSubscription('default', $plan->stripe_price_id)->create();

            throw new \Exception('Integración con Stripe no implementada en producción');
        }
    }

    /**
     * Crear Empresa
     */
    private function createEmpresa(Cliente $cliente, array $data): Empresa
    {
        return Empresa::create([
            'cliente_id' => $cliente->id,
            'nombre' => $data['empresa_nombre'],
            'pais' => $data['pais'],
            'moneda' => $this->getCurrencyByCountry($data['pais']),
            'timezone' => $this->getTimezoneByCountry($data['pais']),
            'activo' => true,
        ]);
    }

    /**
     * Crear Usuario Administrador
     */
    private function createUserAdmin(Empresa $empresa, Cliente $cliente, array $data): User
    {
        return User::create([
            'empresa_id' => $empresa->id,
            'cliente_id' => $cliente->id,
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo_usuario' => 'empresa',
            'activo' => true,
            'email_verified_at' => now(), // Auto-verificar en registro
        ]);
    }

    /**
     * Asignar Rol SuperAdminEmpresa
     */
    private function assignRole(User $user): void
    {
        $role = Role::where('name', 'SuperAdminEmpresa')->first();

        if ($role) {
            $user->assignRole($role);
        }
    }

    /**
     * Activar módulos según el plan
     */
    private function activateModulesForPlan(Cliente $cliente, int $planId): void
    {
        $plan = Plan::findOrFail($planId);

        // Obtener la empresa asociada al cliente
        $empresa = $cliente->empresas()->first();

        if (!$empresa) {
            throw new \Exception('No hay empresa asociada para activar los módulos');
        }

        // Obtener módulos básicos que vienen con el plan
        $modulosBasicos = Modulo::where('categoria', 'core')
            ->orWhere('categoria', 'basico')
            ->get();

        // Fecha de vencimiento basada en la duración del plan
        $fechaVencimiento = now()->addDays($plan->duracion_dias ?? 365);

        foreach ($modulosBasicos as $modulo) {
            // Activar el módulo para la empresa
            $empresa->activarModulo(
                $modulo->nombre, // Nombre del módulo
                [
                    'plan_inicial' => $plan->nombre,
                    'auto_renovacion' => true,
                    'modulo_id' => $modulo->id
                ],
                $fechaVencimiento
            );
        }

        // Compatibilidad con la estructura anterior
        foreach ($modulosBasicos as $modulo) {
            $cliente->modulos()->syncWithoutDetaching([$modulo->id => [
                'fecha_activacion' => now(),
                'fecha_vencimiento' => $fechaVencimiento,
                'activo' => true,
                'configuracion' => json_encode([
                    'plan_inicial' => $plan->nombre,
                    'auto_renovacion' => true
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]]);
        }
    }

    /**
     * Enviar email de bienvenida
     */
    private function sendWelcomeEmail(User $user, Cliente $cliente, Empresa $empresa): void
    {
        // TODO: Implementar envío de email de bienvenida
        // Mail::to($user->email)->send(new WelcomeClientMail($user, $cliente, $empresa));
    }

    /**
     * Obtener ciudad predeterminada por país
     */
    private function getCiudadByPais(string $country): string
    {
        return match($country) {
            'MX' => 'Ciudad de México',
            'CO' => 'Bogotá',
            'US' => 'New York',
            default => 'Ciudad de México'
        };
    }

    /**
     * Obtener moneda por país
     */
    private function getCurrencyByCountry(string $country): string
    {
        return match($country) {
            'MX' => 'MXN',
            'CO' => 'COP',
            'US' => 'USD',
            default => 'MXN'
        };
    }

    /**
     * Obtener timezone por país
     */
    private function getTimezoneByCountry(string $country): string
    {
        return match($country) {
            'MX' => 'America/Mexico_City',
            'CO' => 'America/Bogota',
            'US' => 'America/New_York',
            default => 'America/Mexico_City'
        };
    }
}
