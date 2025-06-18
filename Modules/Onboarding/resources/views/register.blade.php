<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - AG Business Suite</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full space-y-8">
            <!-- Header -->
            <div class="text-center">
                <div class="mx-auto h-12 w-12 bg-indigo-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-building text-white text-xl"></i>
                </div>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Únete a AG Business Suite
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Gestiona tu negocio de forma inteligente y escalable
                </p>
            </div>

            <!-- Formulario -->
            <div class="bg-white shadow-xl rounded-lg p-8">
                @if($errors->any())
                    <div class="mb-6 bg-red-50 border border-red-200 rounded-md p-4">
                        <div class="flex">
                            <i class="fas fa-exclamation-circle text-red-400 mr-3 mt-0.5"></i>
                            <div>
                                <h3 class="text-sm font-medium text-red-800">
                                    Por favor corrige los siguientes errores:
                                </h3>
                                <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('onboarding.register') }}" class="space-y-6">
                    @csrf

                    <!-- Plan seleccionado -->
                    <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-4">
                        <label for="plan_id" class="block text-sm font-medium text-indigo-800 mb-2">
                            <i class="fas fa-crown mr-2"></i>Plan Seleccionado
                        </label>
                        <select name="plan_id" id="plan_id" required
                                class="w-full border border-indigo-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            <option value="">Selecciona un plan</option>
                            @foreach($planes as $plan)
                                <option value="{{ $plan->id }}"
                                        {{ (old('plan_id', $selectedPlan?->id) == $plan->id) ? 'selected' : '' }}>
                                    {{ $plan->nombre }} - ${{ number_format($plan->precio_mensual, 0) }}/mes
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Información Personal -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-user mr-2 text-gray-400"></i>Nombre
                            </label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Tu nombre">
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-user mr-2 text-gray-400"></i>Apellido
                            </label>
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Tu apellido">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-envelope mr-2 text-gray-400"></i>Correo Electrónico
                        </label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                               placeholder="tu@empresa.com">
                    </div>

                    <!-- Información de la Empresa -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="empresa_nombre" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-building mr-2 text-gray-400"></i>Nombre de la Empresa
                            </label>
                            <input type="text" name="empresa_nombre" id="empresa_nombre" value="{{ old('empresa_nombre') }}" required
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Mi Empresa S.A.">
                        </div>

                        <div>
                            <label for="pais" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-flag mr-2 text-gray-400"></i>País
                            </label>
                            <select name="pais" id="pais" required
                                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="">Selecciona tu país</option>
                                <option value="MX" {{ old('pais') == 'MX' ? 'selected' : '' }}>🇲🇽 México</option>
                                <option value="CO" {{ old('pais') == 'CO' ? 'selected' : '' }}>🇨🇴 Colombia</option>
                                <option value="US" {{ old('pais') == 'US' ? 'selected' : '' }}>🇺🇸 Estados Unidos</option>
                            </select>
                        </div>
                    </div>

                    <!-- Contraseña -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-lock mr-2 text-gray-400"></i>Contraseña
                            </label>
                            <input type="password" name="password" id="password" required
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Mínimo 8 caracteres">
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-lock mr-2 text-gray-400"></i>Confirmar Contraseña
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required
                                   class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                   placeholder="Repite tu contraseña">
                        </div>
                    </div>

                    <!-- Términos y Condiciones -->
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input type="checkbox" name="terms" id="terms" required
                                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="text-gray-700">
                                    Acepto los <a href="#" class="text-indigo-600 hover:text-indigo-500">términos y condiciones</a>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input type="checkbox" name="privacy" id="privacy" required
                                       class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="privacy" class="text-gray-700">
                                    Acepto la <a href="#" class="text-indigo-600 hover:text-indigo-500">política de privacidad</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Botón de Registro -->
                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                            <i class="fas fa-rocket mr-2"></i>
                            Crear Mi Cuenta y Comenzar
                        </button>
                    </div>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            ¿Ya tienes una cuenta?
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Inicia sesión aquí
                            </a>
                        </p>
                    </div>
                </form>
            </div>

            <!-- Benefits Footer -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-shield-alt text-green-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">100% Seguro</h3>
                    <p class="text-xs text-gray-500">Datos protegidos con encriptación SSL</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-cloud text-blue-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">En la Nube</h3>
                    <p class="text-xs text-gray-500">Accede desde cualquier dispositivo</p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-headset text-purple-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-900">Soporte 24/7</h3>
                    <p class="text-xs text-gray-500">Estamos aquí para ayudarte</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Validación en tiempo real de contraseñas
        document.getElementById('password_confirmation').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmation = this.value;

            if (confirmation && password !== confirmation) {
                this.setCustomValidity('Las contraseñas no coinciden');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html>
