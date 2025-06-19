# Sistema de Módulos por Empresa

Este documento describe el sistema implementado para gestionar la activación y desactivación de módulos por empresa, con la base para cobrar por módulos como add-ons en el futuro.

## Estructura Implementada

1. **Tabla `empresa_modulo`**
   - Relación entre empresas y módulos
   - Campos: `id`, `empresa_id`, `nombre_modulo`, `habilitado`, `configuracion`, `fecha_activacion`, `fecha_vencimiento`
   - Índices y restricciones de unicidad para optimizar consultas

2. **Modelo `EmpresaModulo`**
   - Métodos para gestionar los módulos por empresa
   - Método `estaActivo()` que verifica si un módulo está activo (habilitado y no expirado)

3. **Trait `HasModulos`**
   - Implementa toda la funcionalidad requerida para gestionar módulos
   - Incluye la relación `modulos()` con `EmpresaModulo`
   - Método `tieneModulo($nombreModulo)` que verifica si la entidad tiene acceso a un módulo específico
   - Scope `conModulo($nombreModulo)` para filtrar entidades con un módulo habilitado
   - Métodos `activarModulo()` y `desactivarModulo()` para gestionar los módulos

4. **Modelo `Empresa`**
   - Usa el trait `HasModulos` para toda la funcionalidad de módulos

5. **Middleware `ValidarModuloActivo`**
   - Middleware único para la restricción de acceso a rutas basada en módulos habilitados
   - Registrado con el alias 'modulo' en el Kernel.php
   - Se utiliza en rutas con `middleware => ['modulo:nombre_modulo']`
   - Verifica si el usuario autenticado tiene una empresa con el módulo habilitado
   - Si el módulo no está disponible, devuelve un error 403 con mensaje "Este módulo no está disponible para tu empresa"

## Uso del Trait HasModulos

El trait `HasModulos` proporciona toda la funcionalidad necesaria para gestionar módulos por empresa:

### Verificación de acceso a módulos

```php
// En un controlador
if (!auth()->user()->empresa->tieneModulo('produccion')) {
    abort(403, 'No tienes acceso al módulo de producción');
}

// En una vista Blade
@if(Auth::user()->empresa->tieneModulo('contabilidad'))
    <li><a href="{{ route('contabilidad.dashboard') }}">Contabilidad</a></li>
@endif
```

### Filtrado de empresas con un módulo específico

```php
// Obtener todas las empresas que tienen el módulo 'compras' habilitado
$empresasConCompras = Empresa::conModulo('compras')->get();

// Combinar con otras condiciones o múltiples módulos
$empresasCompletas = Empresa::conModulo('compras')
                          ->conModulo('ventas')
                          ->where('activo', true)
                          ->get();
```

### Protección de rutas con middleware

```php
// Proteger rutas específicas para el módulo de producción
Route::middleware(['auth', 'modulo:produccion'])->prefix('produccion')->group(function () {
    Route::get('/', 'ProduccionController@index');
    Route::get('/dashboard', 'ProduccionController@dashboard');
});

// Combinar con otros middlewares
Route::middleware(['auth', 'modulo:contabilidad', 'can:view-reports'])->group(function () {
    Route::get('/contabilidad/reportes', 'ContabilidadController@reportes');
});
```

## Uso Actual

Actualmente, todos los planes incluyen todos los módulos básicos. Durante el proceso de onboarding, se asignan automáticamente todos los módulos básicos a la empresa:

```php
// En OnboardingService.php
foreach ($modulosBasicos as $modulo) {
    $empresa->activarModulo(
        $modulo->nombre,
        [
            'plan_inicial' => $plan->nombre,
            'auto_renovacion' => true,
            'modulo_id' => $modulo->id
        ],
        $fechaVencimiento
    );
}
```

## Implementación de Facturación por Módulos (Futuro)

Para implementar facturación por módulos como add-ons en el futuro, sigue estos pasos:

1. **Crear un servicio de gestión de módulos**

```php
<?php

namespace Modules\Core\app\Services;

use Modules\Core\app\Models\Empresa;
use Modules\Core\app\Models\Plan;
use Carbon\Carbon;

class ModuloService
{
    /**
     * Activar un módulo específico para una empresa
     */
    public function activarModuloParaEmpresa(Empresa $empresa, string $nombreModulo, ?Carbon $fechaVencimiento = null)
    {
        // Activar el módulo para la empresa
        return $empresa->activarModulo(
            $nombreModulo,
            [
                'activado_por' => auth()->id(),
                'fecha_activacion' => now()->format('Y-m-d H:i:s'),
                'auto_renovacion' => true,
            ],
            $fechaVencimiento ?? now()->addMonth()
        );
    }
    
    /**
     * Procesar compra de un módulo add-on
     */
    public function procesarCompraModulo(Empresa $empresa, string $nombreModulo, int $duracionDias = 30)
    {
        // 1. Procesar pago (implementar integración con pasarela de pago)
        
        // 2. Activar el módulo con la duración adecuada
        $fechaVencimiento = now()->addDays($duracionDias);
        $moduloEmpresa = $this->activarModuloParaEmpresa(
            $empresa,
            $nombreModulo,
            $fechaVencimiento
        );
        
        // 3. Registrar la transacción o factura
        // ...
        
        return $moduloEmpresa;
    }
    
    /**
     * Desactivar un módulo para una empresa
     */
    public function desactivarModuloParaEmpresa(Empresa $empresa, string $nombreModulo)
    {
        return $empresa->desactivarModulo($nombreModulo);
    }
}
```

2. **Implementar controlador para la gestión de módulos**

```php
<?php

namespace Modules\Core\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Core\app\Services\ModuloService;
use Illuminate\Support\Facades\Auth;

class ModuloController extends Controller
{
    protected $moduloService;
    
    public function __construct(ModuloService $moduloService)
    {
        $this->moduloService = $moduloService;
    }
    
    /**
     * Mostrar el catálogo de módulos disponibles
     */
    public function index()
    {
        $empresa = Auth::user()->empresa;
        $modulosActivos = $empresa->modulos;
        
        // Obtener lista completa de módulos disponibles para compra
        // ...
        
        return view('modulos.index', compact('modulosActivos'));
    }
    
    /**
     * Comprar/activar un módulo para la empresa
     */
    public function comprar(Request $request)
    {
        $request->validate([
            'nombre_modulo' => 'required|string',
            'duracion_dias' => 'required|integer|min:30',
        ]);
        
        $empresa = Auth::user()->empresa;
        
        $resultado = $this->moduloService->procesarCompraModulo(
            $empresa,
            $request->nombre_modulo,
            $request->duracion_dias
        );
        
        return redirect()->route('modulos.index')
            ->with('success', "Módulo {$request->nombre_modulo} activado correctamente.");
    }
    
    /**
     * Desactivar un módulo
     */
    public function desactivar(Request $request)
    {
        $request->validate([
            'nombre_modulo' => 'required|string',
        ]);
        
        $empresa = Auth::user()->empresa;
        
        $this->moduloService->desactivarModuloParaEmpresa(
            $empresa,
            $request->nombre_modulo
        );
        
        return redirect()->route('modulos.index')
            ->with('success', "Módulo {$request->nombre_modulo} desactivado correctamente.");
    }
}
```

3. **Crear rutas para el sistema de gestión de módulos**

```php
Route::group(['middleware' => ['auth'], 'prefix' => 'modulos', 'as' => 'modulos.'], function () {
    Route::get('/', 'ModuloController@index')->name('index');
    Route::post('/comprar', 'ModuloController@comprar')->name('comprar');
    Route::post('/desactivar', 'ModuloController@desactivar')->name('desactivar');
});
```

4. **Implementar vistas y formularios para la gestión de módulos**

## Consideraciones para el Sistema de Facturación

- Crear planes base y módulos add-on con precios independientes
- Implementar sistema de notificación de expiración de módulos
- Configurar renovación automática opcional
- Implementar tracking de uso para posible facturación por consumo
- Considerar descuentos por paquetes de módulos

Estas implementaciones prepararán el sistema para una facturación avanzada por módulos como add-ons en el futuro.
