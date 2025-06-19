<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_modulo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained('empresas')->onDelete('cascade');
            $table->string('nombre_modulo');
            $table->boolean('habilitado')->default(true);
            $table->json('configuracion')->nullable(); // Para configuraciones específicas del módulo
            $table->timestamp('fecha_activacion')->nullable();
            $table->timestamp('fecha_vencimiento')->nullable(); // Para módulos con licencia temporal
            $table->timestamps();

            // Índices para búsquedas frecuentes
            $table->index(['empresa_id', 'nombre_modulo']);
            $table->index('habilitado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_modulo');
    }
}
