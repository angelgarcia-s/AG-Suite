<?php

return [
    'name' => 'Core',
    'description' => 'Módulo Core - Sistema base multitenant para AG Business Suite',
    'version' => '1.0.0',

    // Configuraciones específicas del módulo Core
    'multitenancy' => [
        'enabled' => true,
        'tenant_column' => 'empresa_id',
        'auto_scope' => true,
    ],

    // Configuraciones de planes y pricing
    'saas' => [
        'pricing_model' => 'hybrid', // base + additional
        'default_plan' => 'basico',
        'trial_days' => 14,
    ],

    // Configuraciones de seguridad
    'security' => [
        'force_https' => env('FORCE_HTTPS', false),
        'session_timeout' => 120, // minutos
    ],
];
