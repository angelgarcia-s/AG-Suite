<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Seeder principal del módulo Core
     * Ejecuta todos los seeders necesarios para el funcionamiento del sistema multitenant
     */
    public function run(): void
    {
        $this->command->info('🚀 Iniciando seeders del módulo Core...');

        $this->call([
            EmpresaSaaSSeeder::class,     // Empresa matriz, planes base
            ModulosSeeder::class,         // Módulos del sistema
            RolesAndPermissionsSeeder::class, // Roles y permisos
            MultitenanciaSaaSSeeder::class,   // Datos de prueba multitenancy
        ]);

        $this->command->info('✅ Seeders del módulo Core completados');
    }
}
