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
        Schema::table('clientes', function (Blueprint $table) {
            // Añadir campo estado_suscripcion si no existe
            if (!Schema::hasColumn('clientes', 'estado_suscripcion')) {
                $table->string('estado_suscripcion')->default('inactiva')->after('fecha_fin_suscripcion');
            }

            // Añadir campos de seguimiento de pagos si no existen
            if (!Schema::hasColumn('clientes', 'ultimo_pago')) {
                $table->timestamp('ultimo_pago')->nullable()->after('estado_suscripcion');
            }

            if (!Schema::hasColumn('clientes', 'proximo_pago')) {
                $table->timestamp('proximo_pago')->nullable()->after('ultimo_pago');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Eliminar campos si existen
            if (Schema::hasColumn('clientes', 'estado_suscripcion')) {
                $table->dropColumn('estado_suscripcion');
            }

            if (Schema::hasColumn('clientes', 'ultimo_pago')) {
                $table->dropColumn('ultimo_pago');
            }

            if (Schema::hasColumn('clientes', 'proximo_pago')) {
                $table->dropColumn('proximo_pago');
            }
        });
    }
};
