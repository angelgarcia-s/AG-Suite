<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido! - AG Business Suite</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-green-50 to-emerald-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Success Icon -->
            <div class="text-center">
                <div class="mx-auto h-16 w-16 bg-green-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-check text-white text-2xl"></i>
                </div>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    ¡Cuenta Creada!
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Tu cuenta ha sido configurada exitosamente
                </p>
            </div>

            <!-- Success Card -->
            <div class="bg-white shadow-xl rounded-lg p-8">
                <div class="text-center space-y-6">
                    <div class="space-y-2">
                        <h3 class="text-lg font-medium text-gray-900">
                            ¡Bienvenido a AG Business Suite!
                        </h3>
                        <p class="text-sm text-gray-600">
                            Tu cuenta empresarial está lista para usar. Puedes comenzar a gestionar tu negocio de inmediato.
                        </p>
                    </div>

                    <!-- Features List -->
                    <div class="space-y-3">
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-sm text-gray-700">Empresa configurada</span>
                        </div>
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-sm text-gray-700">Módulos activados</span>
                        </div>
                        <div class="flex items-center justify-center space-x-3">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="text-sm text-gray-700">Suscripción activa</span>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="pt-4">
                        <a href="{{ route('dashboard') }}"
                           class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-150 ease-in-out">
                            <i class="fas fa-tachometer-alt mr-2"></i>
                            Ir al Dashboard
                        </a>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <h4 class="text-sm font-medium text-blue-800 mb-3">
                    <i class="fas fa-lightbulb mr-2"></i>
                    Próximos pasos recomendados:
                </h4>
                <ul class="text-sm text-blue-700 space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-400 mr-2 mt-0.5 text-xs"></i>
                        Configura los datos de tu empresa
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-400 mr-2 mt-0.5 text-xs"></i>
                        Invita a tu equipo de trabajo
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-400 mr-2 mt-0.5 text-xs"></i>
                        Explora los módulos disponibles
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
