<?php

namespace Modules\Core\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmpresaModulo extends Model
{
    use HasFactory;

    protected $table = 'empresa_modulo';

    protected $fillable = [
        'empresa_id',
        'nombre_modulo',
        'habilitado',
        'configuracion',
        'fecha_activacion',
        'fecha_vencimiento'
    ];

    protected $casts = [
        'habilitado' => 'boolean',
        'configuracion' => 'array',
        'fecha_activacion' => 'datetime',
        'fecha_vencimiento' => 'datetime',
    ];

    /**
     * Relación con la empresa
     */
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }

    /**
     * Verificar si el módulo está activo actualmente
     */
    public function estaActivo(): bool
    {
        // Si no está habilitado, no está activo
        if (!$this->habilitado) {
            return false;
        }

        // Si no tiene fecha de vencimiento, está activo indefinidamente
        if (!$this->fecha_vencimiento) {
            return true;
        }

        // Verificar si la fecha de vencimiento es posterior a ahora
        return $this->fecha_vencimiento > now();
    }
}
