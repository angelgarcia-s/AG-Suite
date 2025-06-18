<?php

namespace Modules\Core\app\Providers;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    protected string $moduleName = 'Core';
    protected string $moduleNameLower = 'core';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {
        // Cargar migraciones del módulo
        $this->loadMigrationsFrom(module_path($this->moduleName, 'database/migrations'));

        // Registrar configuraciones básicas del módulo
        $this->registerConfig();
    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        // Registro básico sin dependencias complejas
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'config/config.php'),
            $this->moduleNameLower
        );
    }

    /**
     * Register config.
     */
    protected function registerConfig(): void
    {
        $configPath = module_path($this->moduleName, 'config/config.php');

        if (file_exists($configPath)) {
            $this->publishes([
                $configPath => config_path($this->moduleNameLower.'.php')
            ], 'config');
        }
    }
}
