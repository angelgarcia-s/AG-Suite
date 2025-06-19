<?php

namespace Modules\Core\app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidarModuloActivo
{
    /**
     * Verifica si la empresa del usuario autenticado tiene activado un módulo específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $nombreModulo
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $nombreModulo): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Super Admin siempre tiene acceso a todos los módulos
        if ($user->esSuperAdmin()) {
            return $next($request);
        }

        // Verificar si el usuario tiene una empresa asignada
        if (!$user->empresa) {
            abort(403, 'No tienes una empresa asignada');
        }

        // Verificar si la empresa tiene el módulo habilitado
        if (!$user->empresa->tieneModulo($nombreModulo)) {
            abort(403, "Este módulo no está disponible para tu empresa");
        }

        return $next($request);
    }
}
