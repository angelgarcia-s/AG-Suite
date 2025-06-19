<?php

namespace Modules\Core\app\Examples;

use Illuminate\Support\Facades\Auth;

/**
 * EJEMPLO DE IMPLEMENTACIÓN: VERIFICACIÓN DE ACCESO A MÓDULOS
 *
 * Este es un ejemplo de cómo utilizar el sistema de módulos por empresa para
 * verificar si un usuario tiene acceso a un módulo específico desde controladores o vistas.
 */
class ModuloVerificacionExample
{
    /**
     * Ejemplo de verificación en un controlador
     */
    public function ejemploControlador()
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
     * Método de ejemplo que muestra cómo verificar el acceso a un módulo
     */
    public static function verificarModulo($nombreModulo)
    {
        $user = Auth::user();

        if (!$user || !$user->empresa) {
            return false;
        }

        return $user->empresa->tieneModulo($nombreModulo);
    }
}

/**
 * EJEMPLO DE USO EN UNA VISTA BLADE:
 *
 * @if(Auth::user()->empresa->tieneModulo('contabilidad'))
 *     <li><a href="{{ route('contabilidad.dashboard') }}">Contabilidad</a></li>
 * @endif
 *
 * @if(Auth::user()->empresa->tieneModulo('produccion'))
 *     <li><a href="{{ route('produccion.dashboard') }}">Producción</a></li>
 * @endif
 */
