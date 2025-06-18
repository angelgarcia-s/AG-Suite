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
use Spatie\Permission\Models\Role;
use Carbon\Carbon;

class OnboardingService
{
    /**
     * Crear un nuevo cliente con empresa y usuario administrador
     */
    public function createClient(array $data): array
    {
        return DB::transaction(function () use ($data) {
            // 1. Crear Cliente
            $cliente = $this->createCliente($data);

            // 2. Procesar suscripción (mock en local, real en producción)
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
        return Cliente::create([
            'nombre' => $data['empresa_nombre'],
            'email' => $data['email'],
            'pais' => $data['pais'],
            'plan_id' => $data['plan_id'],
            'activo' => true,
            'fecha_registro' => now(),
        ]);
    }

    /**
     * Procesar suscripción (Mock en local, real en producción)
     */
    private function processSuscripcion(Cliente $cliente, int $planId): array
    {
        $plan = Plan::findOrFail($planId);

        if (app()->environment('local')) {
            // MOCK para desarrollo local
            $subscriptionData = [
                'stripe_id' => 'mock_stripe_' . uniqid(),
                'subscription_status' => 'active',
                'subscription_start' => now(),
                'subscription_end' => now()->addMonth(),
                'last_payment' => now(),
                'next_payment' => now()->addMonth(),
            ];

            // Actualizar cliente con datos mock
            $cliente->update($subscriptionData);

            return [
                'mock' => true,
                'status' => 'active',
                'message' => 'Suscripción simulada creada exitosamente'
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
            'activa' => true,
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
        $plan = Plan::with('modulos')->findOrFail($planId);

        // Obtener módulos básicos que vienen con el plan
        $modulosBasicos = Modulo::where('categoria', 'core')
            ->orWhere('categoria', 'basico')
            ->get();

        foreach ($modulosBasicos as $modulo) {
            $cliente->modulos()->attach($modulo->id, [
                'fecha_activacion' => now(),
                'fecha_vencimiento' => now()->addYear(), // Activar por 1 año
                'activo' => true,
                'configuracion' => json_encode([
                    'plan_inicial' => $plan->nombre,
                    'auto_renovacion' => true
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
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
