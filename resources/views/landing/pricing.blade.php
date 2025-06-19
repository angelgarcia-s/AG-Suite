@extends('layouts.landing-master')

@section('styles')
@endsection

@section('content')

<!-- Start::Hero-section -->
<section class="section section-bg landing-banner relative">
    <img src="{{asset('build/assets/images/landing/shapes/1.png')}}" class="absolute -top-10 left-28 hidden xxl:block" alt="shape">
    <img src="{{asset('build/assets/images/landing/shapes/2.png')}}" class="absolute top-1/3 left-0" alt="shape">
    <div class="container">
        <div class="grid grid-cols-12 justify-center">
            <div class="col-span-12 text-center">
                <div class="section-title space-y-6">
                    <div class="reveal">
                        <h2 class="section-title-header">Planes y Precios</h2>
                    </div>
                    <div class="reveal">
                        <p class="section-title-body max-w-2xl mx-auto">Elija el plan que mejor se adapte a las necesidades de su negocio. Todos incluyen actualizaciones y soporte técnico.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Hero-section -->

<!-- Start::Pricing-switch -->
<section class="section landing-pricing-section py-10">
    <div class="container">
        <div class="grid grid-cols-12 justify-center mb-10">
            <div class="col-span-12 text-center reveal">
                <div class="inline-flex p-1.5 bg-gray-100 dark:bg-black/20 rounded-md">
                    <button type="button" id="monthly-btn" class="py-1 px-4 rounded-md bg-white dark:bg-black/20 text-primary shadow-sm">Mensual</button>
                    <button type="button" id="yearly-btn" class="py-1 px-4 rounded-md">Anual (20% descuento)</button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 xl:grid-cols-12 xxl:grid-cols-10 xxl:col-start-2 gap-6">
            <!-- Plan Emprendedor -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 reveal">
                <div class="ti-pricing-card !shadow-none">
                    <div class="ti-pricing-card-header">
                        <div>
                            <div class="mb-0.5">
                                <span class="text-base font-medium text-gray-500 dark:text-white/70">Emprendedor</span>
                            </div>
                            <div>
                                <span class="mb-0.5 price-section" id="emprendedor-price">
                                    <p class="text-4xl font-semibold mb-1">$25</p>
                                </span>
                                <span class="text-gray-500 dark:text-white/70 text-xs period-text">Por mes</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="w-full ti-btn ti-btn-outline-primary">Elegir Plan</button>
                        </div>
                    </div>
                    <div class="ti-pricing-card-body !py-6">
                        <ul class="list-unstyled space-y-3.5">
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">1 Empresa</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">5 Usuarios</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">2 GB Almacenamiento</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Módulos Básicos</span>
                            </li>
                            <li class="flex items-center opacity-50">
                                <span class="text-gray-500 dark:text-white/30"><i class="ri-close-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/30">Soporte 24/7</span>
                            </li>
                            <li class="flex items-center opacity-50">
                                <span class="text-gray-500 dark:text-white/30"><i class="ri-close-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/30">Personalización</span>
                            </li>
                            <li class="flex items-center opacity-50">
                                <span class="text-gray-500 dark:text-white/30"><i class="ri-close-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/30">API Acceso</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Plan Profesional -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 reveal">
                <div class="ti-pricing-card !shadow-none">
                    <div class="ti-pricing-card-header">
                        <div>
                            <div class="mb-0.5">
                                <span class="text-base font-medium text-gray-500 dark:text-white/70">Profesional</span>
                            </div>
                            <div>
                                <span class="mb-0.5 price-section" id="profesional-price">
                                    <p class="text-4xl font-semibold mb-1">$99</p>
                                </span>
                                <span class="text-gray-500 dark:text-white/70 text-xs period-text">Por mes</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="w-full ti-btn ti-btn-outline-primary">Elegir Plan</button>
                        </div>
                    </div>
                    <div class="ti-pricing-card-body !py-6">
                        <ul class="list-unstyled space-y-3.5">
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">5 Empresas</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">25 Usuarios</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">10 GB Almacenamiento</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Todos los Módulos</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Soporte 8/5</span>
                            </li>
                            <li class="flex items-center opacity-50">
                                <span class="text-gray-500 dark:text-white/30"><i class="ri-close-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/30">Personalización</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">API Acceso Básico</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Plan Business -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 reveal">
                <div class="ti-pricing-card !shadow-none popular-pricing">
                    <div class="ti-pricing-card-header">
                        <div>
                            <span class="text-white text-xs py-0.5 px-2.5 rounded-sm inline-block bg-success mb-4">Más Popular</span>
                            <div class="mb-0.5">
                                <span class="text-base font-medium text-gray-500 dark:text-white/70">Business</span>
                            </div>
                            <div>
                                <span class="mb-0.5 price-section" id="business-price">
                                    <p class="text-4xl font-semibold mb-1">$199</p>
                                </span>
                                <span class="text-gray-500 dark:text-white/70 text-xs period-text">Por mes</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="w-full ti-btn ti-btn-primary">Elegir Plan</button>
                        </div>
                    </div>
                    <div class="ti-pricing-card-body !py-6">
                        <ul class="list-unstyled space-y-3.5">
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">10 Empresas</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">100 Usuarios</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">50 GB Almacenamiento</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Módulos Premium</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Soporte 24/7</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Personalización Básica</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">API Acceso Completo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Plan Enterprise -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 reveal">
                <div class="ti-pricing-card !shadow-none">
                    <div class="ti-pricing-card-header">
                        <div>
                            <div class="mb-0.5">
                                <span class="text-base font-medium text-gray-500 dark:text-white/70">Enterprise</span>
                            </div>
                            <div>
                                <span class="mb-0.5">
                                    <p class="text-4xl font-semibold mb-1">Consultar</p>
                                </span>
                                <span class="text-gray-500 dark:text-white/70 text-xs">Planes Personalizados</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="button" class="w-full ti-btn ti-btn-outline-primary">Contactar</button>
                        </div>
                    </div>
                    <div class="ti-pricing-card-body !py-6">
                        <ul class="list-unstyled space-y-3.5">
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Empresas Ilimitadas</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Usuarios Ilimitados</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Almacenamiento Ilimitado</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Todos los Módulos Premium</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Soporte Dedicado 24/7</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Personalización Avanzada</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary"><i class="ri-checkbox-circle-line text-base me-4"></i></span>
                                <span class="text-gray-500 dark:text-white/70">Integraciones a Medida</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Pricing-switch -->

<!-- Start::FAQ-section -->
<section class="section landing-features-section bg-gray-100 dark:bg-black/20">
    <div class="container">
        <div class="grid grid-cols-12 justify-center">
            <div class="col-span-12 lg:col-span-6 pb-10">
                <div class="section-title reveal">
                    <h2 class="section-title-header text-center mx-auto">Preguntas Frecuentes</h2>
                    <p class="section-title-body text-center">Respuestas a las dudas más comunes sobre nuestros planes y precios</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6 reveal">
                <!-- FAQ 1 -->
                <div class="ti-accordion accordion bordered-accordion" id="bordered-accordion">
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-1">
                            <button class="ti-accordion-button" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                ¿Puedo cambiar de plan en cualquier momento?
                            </button>
                        </h2>
                        <div id="collapse-1" class="ti-accordion-collapse collapse show" aria-labelledby="heading-1" data-hs-accordion-body="#bordered-accordion">
                            <div class="ti-accordion-body">
                                Sí, puede actualizar su plan en cualquier momento. La actualización se aplica inmediatamente y se prorratea el costo. Para bajar de categoría, el cambio se aplicará al final del ciclo de facturación actual para evitar pérdida de datos o funcionalidad.
                            </div>
                        </div>
                    </div>
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-2">
                            <button class="ti-accordion-button collapsed" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                ¿Qué formas de pago aceptan?
                            </button>
                        </h2>
                        <div id="collapse-2" class="ti-accordion-collapse collapse" aria-labelledby="heading-2" data-hs-accordion-body="#bordered-accordion">
                            <div class="ti-accordion-body">
                                Aceptamos tarjetas de crédito/débito (Visa, Mastercard, American Express), transferencias bancarias y PayPal. Para planes Enterprise, también ofrecemos opciones de facturación personalizadas.
                            </div>
                        </div>
                    </div>
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-3">
                            <button class="ti-accordion-button collapsed" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                ¿Ofrecen descuentos para organizaciones sin fines de lucro?
                            </button>
                        </h2>
                        <div id="collapse-3" class="ti-accordion-collapse collapse" aria-labelledby="heading-3" data-hs-accordion-body="#bordered-accordion">
                            <div class="ti-accordion-body">
                                Sí, ofrecemos descuentos especiales para organizaciones educativas, sin fines de lucro y startups. Póngase en contacto con nuestro equipo de ventas para obtener más información y verificar la elegibilidad.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 reveal">
                <!-- FAQ 2 -->
                <div class="ti-accordion accordion bordered-accordion" id="bordered-accordion-2">
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-4">
                            <button class="ti-accordion-button" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                ¿Qué significa "usuarios" en los planes?
                            </button>
                        </h2>
                        <div id="collapse-4" class="ti-accordion-collapse collapse show" aria-labelledby="heading-4" data-hs-accordion-body="#bordered-accordion-2">
                            <div class="ti-accordion-body">
                                Un usuario es cualquier persona con acceso al sistema, independientemente de su nivel de permisos. Cada usuario tiene sus propias credenciales y puede estar asignado a múltiples empresas según su función.
                            </div>
                        </div>
                    </div>
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-5">
                            <button class="ti-accordion-button collapsed" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                ¿Hay algún contrato a largo plazo?
                            </button>
                        </h2>
                        <div id="collapse-5" class="ti-accordion-collapse collapse" aria-labelledby="heading-5" data-hs-accordion-body="#bordered-accordion-2">
                            <div class="ti-accordion-body">
                                No exigimos contratos a largo plazo para nuestros planes estándar. Puede cancelar en cualquier momento. Los planes anuales ofrecen un descuento significativo, pero se pagan por adelantado. Los planes Enterprise pueden incluir términos personalizados.
                            </div>
                        </div>
                    </div>
                    <div class="ti-accordion-item">
                        <h2 class="ti-accordion-header" id="heading-6">
                            <button class="ti-accordion-button collapsed" type="button" data-hs-accordion="collapse" data-hs-accordion-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                ¿Qué soporte técnico ofrecen?
                            </button>
                        </h2>
                        <div id="collapse-6" class="ti-accordion-collapse collapse" aria-labelledby="heading-6" data-hs-accordion-body="#bordered-accordion-2">
                            <div class="ti-accordion-body">
                                Todos los planes incluyen soporte técnico. El nivel y los horarios de disponibilidad varían según el plan: Emprendedor (correo electrónico), Profesional (correo y chat 8/5), Business (correo, chat y teléfono 24/7) y Enterprise (soporte dedicado con tiempos de respuesta garantizados).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::FAQ-section -->

<!-- Start::Comparison-section -->
<section class="section landing-services-section">
    <div class="container">
        <div class="grid grid-cols-12 justify-center">
            <div class="col-span-12 lg:col-span-6 pb-10">
                <div class="section-title reveal">
                    <h2 class="section-title-header text-center mx-auto">Comparación de Planes</h2>
                    <p class="section-title-body text-center">Vea en detalle las características disponibles en cada plan</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12 reveal">
                <div class="table-responsive">
                    <table class="ti-custom-table ti-custom-table-head">
                        <thead>
                            <tr>
                                <th scope="col" class="min-w-[200px]">Característica</th>
                                <th scope="col">Emprendedor</th>
                                <th scope="col">Profesional</th>
                                <th scope="col">Business</th>
                                <th scope="col">Enterprise</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="font-medium">Empresas</td>
                                <td>1</td>
                                <td>5</td>
                                <td>10</td>
                                <td>Ilimitadas</td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Usuarios</td>
                                <td>5</td>
                                <td>25</td>
                                <td>100</td>
                                <td>Ilimitados</td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Almacenamiento</td>
                                <td>2 GB</td>
                                <td>10 GB</td>
                                <td>50 GB</td>
                                <td>Ilimitado</td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Módulos Core</td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">CRM</td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Ventas e Inventario</td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Contabilidad</td>
                                <td><i class="ri-close-line text-danger"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Recursos Humanos</td>
                                <td><i class="ri-close-line text-danger"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Reportes Avanzados</td>
                                <td><i class="ri-close-line text-danger"></i></td>
                                <td><i class="ri-close-line text-danger"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                                <td><i class="ri-check-line text-success"></i></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">API Acceso</td>
                                <td><i class="ri-close-line text-danger"></i></td>
                                <td>Básico</td>
                                <td>Completo</td>
                                <td>Completo + Dedicada</td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">Soporte Técnico</td>
                                <td>Email</td>
                                <td>Email + Chat 8/5</td>
                                <td>Email + Chat + Tel 24/7</td>
                                <td>Dedicado</td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-medium">SLA</td>
                                <td>No</td>
                                <td>No</td>
                                <td>Sí</td>
                                <td>Personalizado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Comparison-section -->

<!-- Start::Call To Action -->
<section class="section bg-primary landing-cta-section">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 text-center reveal">
                <h1 class="leading-none text-white text-3xl font-bold mb-6">¿No está seguro de qué plan elegir?</h1>
                <p class="text-white/70 mx-auto mb-6 max-w-lg">Consulte con nuestros expertos para encontrar la solución perfecta para su negocio, o comience con una prueba gratuita sin compromiso.</p>
                <div class="flex flex-wrap justify-center space-x-3">
                    <button type="button" class="ti-btn ti-btn-accent">Prueba Gratuita 14 Días</button>
                    <button type="button" class="ti-btn bg-white !text-primary">Contactar con Ventas</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Call To Action -->

@endsection

@section('scripts')
<script>
    // Script para cambiar entre precios mensuales y anuales
    document.addEventListener('DOMContentLoaded', function() {
        const monthlyBtn = document.getElementById('monthly-btn');
        const yearlyBtn = document.getElementById('yearly-btn');
        const empPrice = document.getElementById('emprendedor-price');
        const profPrice = document.getElementById('profesional-price');
        const busPrice = document.getElementById('business-price');
        const periodTexts = document.querySelectorAll('.period-text');

        monthlyBtn.addEventListener('click', function() {
            monthlyBtn.classList.add('bg-white', 'dark:bg-black/20', 'text-primary', 'shadow-sm');
            yearlyBtn.classList.remove('bg-white', 'dark:bg-black/20', 'text-primary', 'shadow-sm');

            empPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$25</p>';
            profPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$99</p>';
            busPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$199</p>';

            periodTexts.forEach(text => {
                text.textContent = 'Por mes';
            });
        });

        yearlyBtn.addEventListener('click', function() {
            yearlyBtn.classList.add('bg-white', 'dark:bg-black/20', 'text-primary', 'shadow-sm');
            monthlyBtn.classList.remove('bg-white', 'dark:bg-black/20', 'text-primary', 'shadow-sm');

            empPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$240</p><span class="text-success text-xs">Ahorro $60</span>';
            profPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$950</p><span class="text-success text-xs">Ahorro $238</span>';
            busPrice.innerHTML = '<p class="text-4xl font-semibold mb-1">$1,910</p><span class="text-success text-xs">Ahorro $478</span>';

            periodTexts.forEach(text => {
                text.textContent = 'Por año';
            });
        });
    });
</script>

<!-- Start::Registration-CTA -->
<section class="section bg-primary relative overflow-hidden">
    <img src="{{asset('build/assets/images/landing/shapes/1.png')}}" class="absolute -top-10 left-28 hidden xxl:block" alt="shape">
    <div class="container">
        <div class="grid grid-cols-12 gap-4 justify-center">
            <div class="col-span-12 text-center">
                <div class="space-y-6">
                    <div class="reveal">
                        <h2 class="section-title-header text-white">Inicie su proceso de onboarding</h2>
                    </div>
                    <div class="reveal">
                        <p class="section-title-body max-w-2xl mx-auto text-white/70">Elija el plan que mejor se adapte a sus necesidades y comience a utilizar AG-Suite hoy mismo.</p>
                    </div>
                    <div class="space-x-3 section-title-buttons reveal">
                        <a href="/register/client" class="ti-btn ti-btn-secondary">Registrarse ahora <i class="ri-arrow-right-line rtl:rotate-180"></i></a>
                        <a href="{{ route('login') }}" class="ti-btn bg-white/20 !text-white hover:text-white hover:bg-white/30">Acceder a mi cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Registration-CTA -->
@endsection
