<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrar el OnboardingService
        $this->app->bind(
            \Modules\Onboarding\app\Services\OnboardingService::class,
            \Modules\Onboarding\app\Services\OnboardingService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Registrar las vistas del módulo Onboarding
        $this->loadViewsFrom(base_path('Modules/Onboarding/resources/views'), 'onboarding');
    }
}
