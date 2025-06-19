<?php

namespace Modules\Core\app\Examples;

use Illuminate\Support\Facades\Route;

/**
 * EJEMPLO DE IMPLEMENTACIÓN: RUTAS CON RESTRICCIÓN POR MÓDULO
 *
 * Este es un ejemplo de cómo utilizar el sistema de módulos por empresa para
 * restringir el acceso a rutas específicas basadas en módulos como add-ons.
 *
 * Para implementar esto en cualquier módulo, añadir el middleware 'modulo:nombre_modulo'
 * a las rutas que requieran acceso específico a ese módulo.
 */
class ModuloRoutesExample
{
    public static function register()
    {
        // Ejemplo de rutas protegidas por módulo
        Route::group(['middleware' => ['auth', 'modulo:contabilidad']], function () {
            // Estas rutas solo serán accesibles si la empresa tiene el módulo 'contabilidad' habilitado
            Route::get('/contabilidad/dashboard', 'ContabilidadController@dashboard');
            Route::resource('/contabilidad/cuentas', 'ContabilidadController');
        });

        // Rutas para módulo de producción
        Route::group(['middleware' => ['auth', 'modulo:produccion']], function () {
            // Estas rutas solo serán accesibles si la empresa tiene el módulo 'produccion' habilitado
            Route::get('/produccion/dashboard', 'ProduccionController@dashboard');
        });

        // Múltiples módulos pueden proteger las mismas rutas
        // La verificación se hace en cadena, revisando cada módulo
        Route::group(['middleware' => ['auth', 'modulo:facturacion']], function () {
            Route::get('/facturas', 'FacturacionController@index');
        });
    }
}
