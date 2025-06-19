<?php

namespace Modules\Core\app\Traits;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Core\app\Models\EmpresaModulo;

trait HasModulos
{
    /**
     * Relación con módulos asignados a la entidad
     */
    public function modulos(): HasMany
    {
        return $this->hasMany(EmpresaModulo::class, 'empresa_id');
    }

    /**
     * Verificar si la entidad tiene un módulo específico habilitado
     *
     * @param string $nombreModulo Nombre del módulo a verificar
     * @return bool True si tiene acceso al módulo
     */
    public function tieneModulo(string $nombreModulo): bool
    {
        // Si no hay registros asociados (compatibilidad con situación actual), devolver true
        $moduloEmpresa = $this->modulos()->where('nombre_modulo', $nombreModulo)->first();

        // Si no existe el registro, permitir acceso (mantener compatibilidad)
        if (!$moduloEmpresa) {
            return true;
        }

        // Verificar si está habilitado y no ha expirado
        return $moduloEmpresa->estaActivo();
    }

    /**
     * Scope para filtrar entidades que tienen un módulo específico habilitado
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $nombreModulo Nombre del módulo a filtrar
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeConModulo($query, string $nombreModulo)
    {
        return $query->whereHas('modulos', function ($modulosQuery) use ($nombreModulo) {
            $modulosQuery->where('nombre_modulo', $nombreModulo)
                         ->where('habilitado', true)
                         ->where(function ($q) {
                             $q->whereNull('fecha_vencimiento')
                               ->orWhere('fecha_vencimiento', '>', now());
                         });
        });
    }

    /**
     * Activar un módulo para esta entidad
     *
     * @param string $nombreModulo Nombre del módulo a activar
     * @param array $config Configuración opcional del módulo
     * @param \Carbon\Carbon|null $fechaVencimiento Fecha de vencimiento opcional
     * @return EmpresaModulo El módulo activado
     */
    public function activarModulo(string $nombreModulo, array $config = null, $fechaVencimiento = null): EmpresaModulo
    {
        $modulo = $this->modulos()->updateOrCreate(
            ['nombre_modulo' => $nombreModulo],
            [
                'habilitado' => true,
                'configuracion' => $config,
                'fecha_activacion' => now(),
                'fecha_vencimiento' => $fechaVencimiento
            ]
        );

        return $modulo;
    }

    /**
     * Desactivar un módulo para esta entidad
     *
     * @param string $nombreModulo Nombre del módulo a desactivar
     * @return bool True si se desactivó correctamente
     */
    public function desactivarModulo(string $nombreModulo): bool
    {
        return $this->modulos()
            ->where('nombre_modulo', $nombreModulo)
            ->update(['habilitado' => false]);
    }
}
