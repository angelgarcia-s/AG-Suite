<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('planes', function (Blueprint $table) {
            // Añadir campo duracion_dias si no existe
            if (!Schema::hasColumn('planes', 'duracion_dias')) {
                $table->integer('duracion_dias')->default(30)->after('precio_anual');
            }

            // Agregar campo tipo_periodo si no existe
            if (!Schema::hasColumn('planes', 'tipo_periodo')) {
                $table->string('tipo_periodo')->default('mensual')->after('duracion_dias');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('planes', function (Blueprint $table) {
            // Eliminar campos si existen
            if (Schema::hasColumn('planes', 'duracion_dias')) {
                $table->dropColumn('duracion_dias');
            }

            if (Schema::hasColumn('planes', 'tipo_periodo')) {
                $table->dropColumn('tipo_periodo');
            }
        });
    }
};
