<?php

namespace Modules\Core\app\Examples;

use Modules\Core\app\Models\Empresa;
use Illuminate\Support\Facades\Auth;

/**
 * EJEMPLO DE IMPLEMENTACIÓN: USO DEL TRAIT HASMODULOS
 *
 * Este es un ejemplo que muestra cómo utilizar el Trait HasModulos
 * para verificar y filtrar empresas según los módulos habilitados.
 */
class HasModulosExample
{
    /**
     * Ejemplo de verificación de módulo para usuario actual
     */
    public function ejemploVerificacionUsuario()
    {
        $user = Auth::user();

        // Verificar si el usuario tiene acceso al módulo 'contabilidad'
        if (!$user->empresa->tieneModulo('contabilidad')) {
            abort(403, 'No tienes acceso al módulo de contabilidad');
        }

        // El código continúa si tiene acceso...
        return view('contabilidad.dashboard');
    }

    /**
     * Ejemplo de filtrado de empresas por módulo
     */
    public function ejemploFiltrarEmpresas()
    {
        // Obtener todas las empresas que tienen el módulo 'compras' habilitado
        $empresasConCompras = Empresa::conModulo('compras')->get();

        // Obtener empresas que tienen habilitados varios módulos
        $empresasCompletas = Empresa::conModulo('compras')
                                  ->conModulo('ventas')
                                  ->conModulo('inventario')
                                  ->get();

        // Combinar con otras condiciones
        $empresasEspecificas = Empresa::where('activo', true)
                                    ->conModulo('marketing')
                                    ->orderBy('nombre')
                                    ->get();

        return [
            'empresasConCompras' => $empresasConCompras,
            'empresasCompletas' => $empresasCompletas,
            'empresasEspecificas' => $empresasEspecificas,
        ];
    }
}

/**
 * EJEMPLO DE USO EN UNA VISTA BLADE:
 *
 * @if(Auth::user()->empresa->tieneModulo('contabilidad'))
 *     <li><a href="{{ route('contabilidad.dashboard') }}">Contabilidad</a></li>
 * @endif
 *
 * @foreach(Empresa::conModulo('inventario')->get() as $empresa)
 *     <li>{{ $empresa->nombre }} tiene módulo de inventario</li>
 * @endforeach
 */
