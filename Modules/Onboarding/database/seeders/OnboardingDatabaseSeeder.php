<?php

namespace Modules\Onboarding\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Database\Seeders\ModulosSeeder;
use Modules\Core\Database\Seeders\RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Permission;

class OnboardingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('🚀 Configurando módulo de Onboarding...');

        // 1. Registrar el módulo en el sistema
        $this->registrarModulo();

        // 2. Crear los permisos específicos del módulo
        $this->registrarPermisos();

        // 3. Crear datos iniciales para el módulo
        $this->crearDatosIniciales();

        $this->command->info('✅ Módulo de Onboarding configurado correctamente');
    }

    /**
     * Registra el módulo de Onboarding en el sistema
     */
    private function registrarModulo(): void
    {
        $modulosSeeder = new ModulosSeeder();

        $modulosSeeder->agregarModulo([
            'nombre' => 'Onboarding',
            'slug' => 'onboarding',
            'descripcion' => 'Proceso de bienvenida y configuración inicial para nuevos clientes',
            'categoria' => 'Core',
            'icono' => 'user-plus',
            'orden' => 6,
            'activo' => true,
            'configuracion' => [
                'pasos_personalizables' => true,
                'flujos_diferentes_por_plan' => true,
                'cuestionario_inicial' => true,
                'verificacion_email' => true,
                'tutorial_interactivo' => true
            ]
        ]);
    }

    /**
     * Registra los permisos específicos para el módulo de Onboarding
     */
    private function registrarPermisos(): void
    {
        // 1. Registrar los permisos estándar para el módulo
        $permissionSeeder = new RolesAndPermissionsSeeder();
        $permissionSeeder->agregarPermisosModulo(
            'onboarding',
            'proceso de onboarding',
            'core'
        );

        // 2. Registrar permisos específicos adicionales del módulo
        $permisosEspecificos = [
            'onboarding-reset' => [
                'description' => 'Reiniciar proceso de onboarding para un cliente',
                'category' => 'Sistema Core',
                'orden' => 10
            ],
            'onboarding-personalizar-flujo' => [
                'description' => 'Personalizar los pasos del flujo de onboarding',
                'category' => 'Sistema Core',
                'orden' => 10
            ],
            'onboarding-saltar-paso' => [
                'description' => 'Omitir un paso específico del onboarding',
                'category' => 'Sistema Core',
                'orden' => 10
            ]
        ];

        foreach ($permisosEspecificos as $nombre => $datos) {
            Permission::updateOrCreate(
                ['name' => $nombre],
                [
                    'description' => $datos['description'],
                    'category' => $datos['category'],
                    'orden' => $datos['orden']
                ]
            );
        }
    }

    /**
     * Crea los datos iniciales necesarios para el funcionamiento del módulo
     */
    private function crearDatosIniciales(): void
    {
        // Aquí se crearían los datos iniciales necesarios para el módulo
        // Por ejemplo:
        // - Pasos predefinidos del proceso de onboarding
        // - Plantillas de mensajes de bienvenida
        // - Recursos/Materiales para el onboarding

        $this->command->info('📋 Datos iniciales del módulo creados');
    }
}
