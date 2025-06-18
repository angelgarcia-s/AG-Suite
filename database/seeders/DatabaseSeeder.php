<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Core\Database\Seeders\CoreDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * Ahora usa el CoreDatabaseSeeder del módulo Core que contiene todos los seeders necesarios.
     */
    public function run(): void
    {
        $this->call([
            CoreDatabaseSeeder::class,
        ]);
    }
}
