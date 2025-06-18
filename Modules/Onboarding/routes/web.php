<?php

use Illuminate\Support\Facades\Route;
use Modules\Onboarding\app\Http\Controllers\OnboardingController;

/*
|--------------------------------------------------------------------------
| Web Routes - Onboarding Module
|--------------------------------------------------------------------------
|
| Rutas públicas para el registro de nuevos clientes SaaS
|
*/

// Rutas públicas de registro (sin autenticación)
Route::middleware(['web'])->group(function () {

    // Formulario de registro de cliente
    Route::get('/register/client', [OnboardingController::class, 'showRegisterForm'])
        ->name('onboarding.register.form');

    // Procesar registro de cliente
    Route::post('/register/client', [OnboardingController::class, 'register'])
        ->name('onboarding.register');

    // Página de éxito post-registro (opcional)
    Route::get('/register/success', [OnboardingController::class, 'success'])
        ->name('onboarding.success');
});
