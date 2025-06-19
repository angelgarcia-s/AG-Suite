<?php

use Illuminate\Support\Facades\Route;
use Modules\Onboarding\app\Http\Controllers\OnboardingController;
use Modules\Onboarding\app\Http\Controllers\SubscriptionController;

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

// Rutas para suscripciones (requieren autenticación)
Route::middleware(['web', 'auth'])->group(function () {
    // Ver planes disponibles para upgrade
    Route::get('/subscription/planes', [SubscriptionController::class, 'planes'])
        ->name('subscription.planes');

    // Ver estado de la suscripción actual
    Route::get('/subscription/estado', [SubscriptionController::class, 'estado'])
        ->name('subscription.estado');

    // Actualizar/cambiar plan de suscripción
    Route::post('/subscription/upgrade', [SubscriptionController::class, 'upgrade'])
        ->name('subscription.upgrade');

    // Cancelar suscripción actual
    Route::post('/subscription/cancelar', [SubscriptionController::class, 'cancelar'])
        ->name('subscription.cancelar');
});
