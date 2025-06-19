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
                        <h2 class="section-title-header">Características de AG Business Suite</h2>
                    </div>
                    <div class="reveal">
                        <p class="section-title-body max-w-2xl mx-auto">Descubra todas las funcionalidades que hacen de AG Business Suite la plataforma ideal para la gestión de múltiples empresas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Hero-section -->

<!-- Start::Features-section -->
<section class="section landing-features-section">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6">
                <div class="reveal">
                    <h3 class="text-2xl font-bold mb-4">Arquitectura Multitenant</h3>
                    <p class="mb-6 text-gray-500 dark:text-white/70">La arquitectura multitenant permite gestionar múltiples empresas desde una única instancia del sistema. Cada empresa tiene sus datos aislados, pero comparte la infraestructura y el código base.</p>
                    <ul class="list-disc list-inside mb-6 text-gray-500 dark:text-white/70 space-y-2">
                        <li>Gestión centralizada de múltiples empresas</li>
                        <li>Aislamiento completo de datos entre empresas</li>
                        <li>Posibilidad de compartir usuarios entre empresas</li>
                        <li>Configuraciones específicas por empresa</li>
                        <li>Módulos activables por empresa</li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="reveal">
                    <img src="{{asset('build/assets/images/landing/dashboard.png')}}" class="rounded-md" alt="Arquitectura Multitenant">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Features-section -->

<!-- Start::Features-section-2 -->
<section class="section landing-features-section bg-gray-100 dark:bg-black/20">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6 lg:order-2">
                <div class="reveal">
                    <h3 class="text-2xl font-bold mb-4">Sistema Modular</h3>
                    <p class="mb-6 text-gray-500 dark:text-white/70">AG Business Suite está diseñado con una arquitectura modular que permite activar sólo las funcionalidades necesarias para cada empresa.</p>
                    <ul class="list-disc list-inside mb-6 text-gray-500 dark:text-white/70 space-y-2">
                        <li>Módulos independientes con funcionalidad específica</li>
                        <li>Activación/desactivación según necesidades</li>
                        <li>Extensible mediante nuevos módulos personalizados</li>
                        <li>Interfaces consistentes entre módulos</li>
                        <li>Sistema de permisos granular por módulo</li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 lg:order-1">
                <div class="reveal">
                    <img src="{{asset('build/assets/images/landing/widgets.png')}}" class="rounded-md" alt="Sistema Modular">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Features-section-2 -->

<!-- Start::Features-section-3 -->
<section class="section landing-features-section">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6">
                <div class="reveal">
                    <h3 class="text-2xl font-bold mb-4">Control de Acceso Avanzado</h3>
                    <p class="mb-6 text-gray-500 dark:text-white/70">Un sistema robusto de roles y permisos que permite definir exactamente qué puede hacer cada usuario en el sistema.</p>
                    <ul class="list-disc list-inside mb-6 text-gray-500 dark:text-white/70 space-y-2">
                        <li>Roles predefinidos y personalizables</li>
                        <li>Permisos granulares por módulo y acción</li>
                        <li>Asignación de usuarios a múltiples empresas</li>
                        <li>Control de acceso a nivel de registro</li>
                        <li>Auditoría completa de acciones de usuarios</li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="reveal">
                    <img src="{{asset('build/assets/images/landing/authentication.png')}}" class="rounded-md" alt="Control de Acceso">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Features-section-3 -->

<!-- Start::Features-section-4 -->
<section class="section landing-features-section bg-gray-100 dark:bg-black/20">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6 lg:order-2">
                <div class="reveal">
                    <h3 class="text-2xl font-bold mb-4">Personalización y Flexibilidad</h3>
                    <p class="mb-6 text-gray-500 dark:text-white/70">AG Business Suite se adapta a las necesidades específicas de cada empresa con múltiples opciones de personalización.</p>
                    <ul class="list-disc list-inside mb-6 text-gray-500 dark:text-white/70 space-y-2">
                        <li>Campos personalizados en formularios</li>
                        <li>Flujos de trabajo adaptables</li>
                        <li>Dashboards configurables por usuario</li>
                        <li>Plantillas de documentos personalizables</li>
                        <li>API abierta para integraciones</li>
                    </ul>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 lg:order-1">
                <div class="reveal">
                    <img src="{{asset('build/assets/images/landing/profile.png')}}" class="rounded-md" alt="Personalización">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Features-section-4 -->

<!-- Start::Features-cards -->
<section class="section landing-features-section">
    <div class="container">
        <div class="grid grid-cols-12 justify-center">
            <div class="col-span-12 lg:col-span-6 pb-10">
                <div class="section-title reveal">
                    <h2 class="section-title-header text-center mx-auto">Más Características</h2>
                    <p class="section-title-body text-center">AG Business Suite ofrece una amplia gama de funcionalidades para satisfacer todas sus necesidades empresariales</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-graph-up-arrow text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Reportes Avanzados</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Analíticas en tiempo real, informes personalizables y exportación en múltiples formatos para tomar decisiones informadas.</p>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-cloud-arrow-up text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Almacenamiento en la Nube</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Almacene documentos, archivos y recursos en la nube con total seguridad y accesibilidad desde cualquier dispositivo.</p>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-bell text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Notificaciones y Alertas</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Sistema de notificaciones configurable para mantener informados a los usuarios sobre eventos importantes.</p>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-calendar-check text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Planificación y Calendario</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Herramientas de planificación y calendario compartido para coordinar actividades y recursos empresariales.</p>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-phone text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Diseño Responsivo</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Interfaz adaptable a cualquier dispositivo, para trabajar desde ordenadores, tablets o smartphones.</p>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-4 reveal">
                <div class="ti-card">
                    <div class="mb-5 inline-flex items-center justify-center w-14 h-14 rounded-md bg-primary/20 text-primary">
                        <i class="bi bi-translate text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Multilenguaje</h3>
                    <p class="mb-0 text-gray-500 dark:text-white/70">Soporte para múltiples idiomas, permitiendo que usuarios de diferentes regiones trabajen en su idioma preferido.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Features-cards -->

<!-- Start::Call To Action -->
<section class="section bg-primary landing-cta-section">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 text-center reveal">
                <h1 class="leading-none text-white text-3xl font-bold mb-6">¿Quiere ver todas las características en acción?</h1>
                <p class="text-white/70 mx-auto mb-6 max-w-lg">Solicite una demostración personalizada con nuestro equipo y descubra cómo AG Business Suite puede adaptarse a sus necesidades específicas.</p>
                <div class="flex flex-wrap justify-center space-x-3">
                    <button type="button" class="ti-btn ti-btn-accent">Solicitar Demo</button>
                    <button type="button" class="ti-btn bg-white !text-primary">Ver Planes</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Call To Action -->

<!-- Start::Registration-CTA -->
<section class="section bg-primary relative overflow-hidden">
    <img src="{{asset('build/assets/images/landing/shapes/1.png')}}" class="absolute -top-10 left-28 hidden xxl:block" alt="shape">
    <div class="container">
        <div class="grid grid-cols-12 gap-4 justify-center">
            <div class="col-span-12 text-center">
                <div class="space-y-6">
                    <div class="reveal">
                        <h2 class="section-title-header text-white">Comience su proceso de onboarding hoy</h2>
                    </div>
                    <div class="reveal">
                        <p class="section-title-body max-w-2xl mx-auto text-white/70">Empiece gratis y disfrute de 14 días de prueba. No se requiere tarjeta de crédito.</p>
                    </div>
                    <div class="space-x-3 section-title-buttons reveal">
                        <a href="/register/client" class="ti-btn ti-btn-secondary">Crear cuenta <i class="ri-arrow-right-line rtl:rotate-180"></i></a>
                        <a href="{{ route('login') }}" class="ti-btn bg-white/20 !text-white hover:text-white hover:bg-white/30">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Registration-CTA -->

@endsection

@section('scripts')
@endsection
