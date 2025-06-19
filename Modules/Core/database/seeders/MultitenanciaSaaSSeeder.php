<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Modules\Core\app\Models\Cliente;
use Modules\Core\app\Models\Empresa;
use Modules\Core\app\Models\Modulo;
use Modules\Core\app\Models\Plan;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class MultitenanciaSaaSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Obtener la empresa matriz ya creada (debe haber sido creada por EmpresaSaaSSeeder)
        $empresaMatriz = Empresa::where('nombre', 'AG Business Suite')->first();

        if (!$empresaMatriz) {
            $this->command->error('❌ Error: No se encontró la empresa matriz. Ejecute EmpresaSaaSSeeder primero.');
            return;
        }

        // Verificar que existe el Super Admin (creado por EmpresaSaaSSeeder)
        $superAdmin = User::where('email', 'admin@agbusinesssuite.com')->first();

        if (!$superAdmin) {
            // Si no existe, crear Super Administrador (fallback)
            $superAdmin = User::create([
                'name' => 'Super Administrador',
                'email' => 'admin@agbusinesssuite.com',
                'password' => Hash::make('password123'),
                'tipo_usuario' => 'super_admin',
                'empresa_id' => $empresaMatriz->id,
                'activo' => true,
                'email_verified_at' => now(),
            ]);
        }

        // 2. Crear cliente de prueba
        $planProfesional = Plan::where('slug', 'profesional')->first();

        $cliente = Cliente::firstOrCreate(
            ['email' => 'contacto@restauranteroabc.com'],
            [
                'plan_id' => $planProfesional->id,
                'nombre' => 'Grupo Restaurantero ABC',
                'telefono' => '+52 55 1234 5678',
                'direccion' => 'Av. Reforma 123, Ciudad de México',
                'contacto' => 'Carlos Mendoza',
                'fecha_inicio_suscripcion' => Carbon::now()->toDateString(),
                'fecha_fin_suscripcion' => Carbon::now()->addYear()->toDateString(),
                'activo' => true,
                'metadata' => [
                    'industria' => 'Restaurantes',
                    'tamaño' => 'Mediana empresa',
                    'notas' => 'Cliente piloto para testing del sistema'
                ],
            ]
        );

        // 3. Asignar módulos al cliente (solo módulos disponibles en la nueva estructura)
        $modulosBasicos = Modulo::whereIn('slug', [
            'productos', 'dashboard'
        ])->get();

        foreach ($modulosBasicos as $modulo) {
            $cliente->modulos()->attach($modulo->id, [
                'activo' => true,
                'fecha_activacion' => Carbon::now()->toDateString(),
                'fecha_vencimiento' => Carbon::now()->addYear()->toDateString(),
                'configuracion' => json_encode(null),
            ]);
        }

        // 4. Crear empresas del cliente
        $empresaCentro = Empresa::firstOrCreate(
            [
                'cliente_id' => $cliente->id,
                'nombre' => 'Restaurante Centro'
            ],
            [
                'pais' => 'México',
                'ciudad' => 'Ciudad de México',
                'direccion' => 'Centro Histórico, CDMX',
                'telefono' => '+52 55 1111 2222',
                'email' => 'centro@restauranteroabc.com',
                'rfc' => 'RAB123456789',
                'timezone' => 'America/Mexico_City',
                'moneda' => 'MXN',
                'activo' => true,
                'configuracion' => [
                    'horario_operacion' => '09:00-22:00',
                    'capacidad' => 100,
                    'tipo' => 'Restaurante principal'
                ],
            ]
        );

        $empresaNorte = Empresa::firstOrCreate(
            [
                'cliente_id' => $cliente->id,
                'nombre' => 'Restaurante Norte'
            ],
            [
                'pais' => 'México',
                'ciudad' => 'Monterrey',
                'direccion' => 'Zona Norte, Monterrey, NL',
                'telefono' => '+52 81 3333 4444',
                'email' => 'norte@restauranteroabc.com',
                'rfc' => 'RAN987654321',
                'timezone' => 'America/Mexico_City',
                'moneda' => 'MXN',
                'activo' => true,
                'configuracion' => [
                    'horario_operacion' => '10:00-23:00',
                    'capacidad' => 80,
                    'tipo' => 'Sucursal'
                ],
            ]
        );

        // 5. Crear usuarios para las empresas
        $usuarios = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan.perez@restauranteroabc.com',
                'empresa_id' => $empresaCentro->id,
                'tipo' => 'Gerente General'
            ],
            [
                'name' => 'María López',
                'email' => 'maria.lopez@restauranteroabc.com',
                'empresa_id' => $empresaCentro->id,
                'tipo' => 'Cajera'
            ],
            [
                'name' => 'Ana García',
                'email' => 'ana.garcia@restauranteroabc.com',
                'empresa_id' => $empresaNorte->id,
                'tipo' => 'Gerente Sucursal'
            ],
        ];

        foreach ($usuarios as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => Hash::make('password123'),
                    'tipo_usuario' => 'empresa',
                    'empresa_id' => $userData['empresa_id'],
                    'activo' => true,
                    'email_verified_at' => now(),
                ]
            );
        }

        $this->command->info('✅ Datos del sistema multitenant creados exitosamente:');
        $this->command->info('🏢 Empresa Matriz: AG Business Suite (Super Admin)');
        $this->command->info('📧 Super Admin: admin@agbusinesssuite.com / password123');
        $this->command->info('🏢 Cliente: Grupo Restaurantero ABC');
        $this->command->info('🏪 Empresas: Restaurante Centro, Restaurante Norte');
        $this->command->info('👥 Usuarios: Juan Pérez, María López, Ana García');
        $this->command->info('📦 Módulos: 5 módulos CORE + 1 negocio creados, 2 asignados al cliente demo');
    }
}
