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
                        <h2 class="section-title-header">Contáctenos</h2>
                    </div>
                    <div class="reveal">
                        <p class="section-title-body max-w-2xl mx-auto">Estamos aquí para ayudarle. Contáctenos para obtener más información sobre AG Business Suite.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Hero-section -->

<!-- Start::Contact-section -->
<section class="section landing-contact-section">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-6 reveal">
                <div class="box shadow-none">
                    <div class="box-body">
                        <h3 class="font-semibold text-xl dark:text-white mb-5">Formulario de Contacto</h3>
                        <form>
                            <div class="grid grid-cols-12 gap-4">
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="col-span-12">
                                    <label for="subject" class="form-label">Asunto</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Ingrese el asunto">
                                </div>
                                <div class="col-span-12">
                                    <label for="message" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Escriba su mensaje aquí"></textarea>
                                </div>
                                <div class="col-span-12">
                                    <button type="submit" class="ti-btn ti-btn-primary">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 reveal">
                <div class="box shadow-none">
                    <div class="box-body">
                        <h3 class="font-semibold text-xl dark:text-white mb-5">Información de Contacto</h3>
                        <div class="space-y-6">
                            <div class="flex space-x-3">
                                <div class="ti-icon bg-primary/10 text-primary">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold dark:text-white">Dirección</h5>
                                    <p class="text-sm text-gray-500 dark:text-white/70 mt-1">Calle Principal #123, Ciudad Empresarial, País</p>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <div class="ti-icon bg-primary/10 text-primary">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold dark:text-white">Teléfono</h5>
                                    <p class="text-sm text-gray-500 dark:text-white/70 mt-1">+34 912 345 678</p>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <div class="ti-icon bg-primary/10 text-primary">
                                    <i class="ri-mail-line"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold dark:text-white">Email</h5>
                                    <p class="text-sm text-gray-500 dark:text-white/70 mt-1">info@agsuite.com</p>
                                </div>
                            </div>
                            <div class="flex space-x-3">
                                <div class="ti-icon bg-primary/10 text-primary">
                                    <i class="ri-time-line"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-semibold dark:text-white">Horario</h5>
                                    <p class="text-sm text-gray-500 dark:text-white/70 mt-1">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8">
                            <h4 class="font-semibold text-lg dark:text-white mb-3">Síganos en</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="ti-btn ti-btn-soft-primary btn-icon"><i class="ri-facebook-line"></i></a>
                                <a href="#" class="ti-btn ti-btn-soft-primary btn-icon"><i class="ri-twitter-line"></i></a>
                                <a href="#" class="ti-btn ti-btn-soft-primary btn-icon"><i class="ri-linkedin-line"></i></a>
                                <a href="#" class="ti-btn ti-btn-soft-primary btn-icon"><i class="ri-instagram-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Contact-section -->

<!-- Start::Map-section -->
<section class="section landing-map-section p-0">
    <div class="container-fluid">
        <div class="grid grid-cols-12">
            <div class="col-span-12 reveal">
                <div class="box shadow-none border-0 rounded-none">
                    <div class="box-body p-0">
                        <iframe class="h-[400px] w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1676362414284!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Map-section -->

<!-- Start::Registration-CTA -->
<section class="section bg-gray-900">
    <div class="container">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-12 lg:col-span-8">
                <div class="space-y-4 reveal">
                    <h2 class="text-2xl font-bold text-white">¿Listo para comenzar?</h2>
                    <p class="text-white/70">Inicie su experiencia con AG-Suite y comience el proceso de onboarding hoy mismo.</p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4 text-center lg:text-right reveal">
                <div class="space-x-3">
                    <a href="/register/client" class="ti-btn ti-btn-secondary mb-2 sm:mb-0">Crear cuenta gratis</a>
                    <a href="{{ route('login') }}" class="ti-btn bg-white/20 !text-white hover:text-white hover:bg-white/30">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End::Registration-CTA -->

@endsection

@section('scripts')
<!-- INTERNAL JS -->
<script src="{{asset('build/assets/landing-bcacd1ce.js')}}"></script>
@endsection
