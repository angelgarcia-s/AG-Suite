<?php

namespace Modules\Core\app\Examples;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * EJEMPLO DE IMPLEMENTACIÓN: USO DEL MIDDLEWARE VALIDARMODULOACTIVO
 *
 * Este es un ejemplo de cómo utilizar el middleware ValidarModuloActivo
 * para restringir el acceso a rutas basado en los módulos habilitados para la empresa.
 */
class ValidarModuloActivoExample extends Controller
{
    /**
     * Ejemplo de configuración de rutas protegidas por módulo usando el middleware
     */
    public static function registerRoutes()
    {
        // Ejemplo para módulo de producción
        Route::middleware(['auth', 'modulo:produccion'])->prefix('produccion')->group(function () {
            Route::get('/', [self::class, 'produccionIndex'])->name('produccion.index');
            Route::get('/dashboard', [self::class, 'produccionDashboard'])->name('produccion.dashboard');
            Route::resource('/items', 'ProduccionItemController');
        });

        // Ejemplo para módulo de contabilidad
        Route::middleware(['auth', 'modulo:contabilidad'])->prefix('contabilidad')->group(function () {
            Route::get('/', [self::class, 'contabilidadIndex'])->name('contabilidad.index');
            Route::get('/reportes', [self::class, 'contabilidadReportes'])->name('contabilidad.reportes');
        });

        // Ejemplo combinando varios middlewares
        Route::middleware(['auth', 'modulo:ventas', 'can:create,App\Models\Venta'])->group(function () {
            Route::get('/ventas/nueva', [self::class, 'nuevaVenta'])->name('ventas.nueva');
        });
    }

    /**
     * Ejemplo de método en controlador
     */
    public function produccionIndex(Request $request)
    {
        // Si el usuario llega aquí, significa que su empresa tiene el módulo de producción habilitado
        return view('produccion.index');
    }

    /**
     * Ejemplo de método en controlador
     */
    public function produccionDashboard(Request $request)
    {
        return view('produccion.dashboard');
    }

    /**
     * Ejemplo de método en controlador
     */
    public function contabilidadIndex(Request $request)
    {
        return view('contabilidad.index');
    }

    /**
     * Ejemplo de método en controlador
     */
    public function contabilidadReportes(Request $request)
    {
        return view('contabilidad.reportes');
    }

    /**
     * Ejemplo de método en controlador
     */
    public function nuevaVenta(Request $request)
    {
        return view('ventas.create');
    }
}
