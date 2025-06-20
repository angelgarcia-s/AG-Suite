@extends('layouts.custom-master')

@section('styles')
 
      
@endsection

@section('content')

@section('error-body')
<body>
@endsection

        <div class="page error-bg" id="particles-js">
            <!-- Start::error-page -->
            <div class="error-page">
                <div class="container text-defaulttextcolor text-defaultsize">
                    <div class="text-center p-5 my-auto">
                        <div class="flex items-center justify-center h-full">
                          <div class="xl:col-span-3"></div>
                            <div class="xl:col-span-6 col-span-12">
                                <p class="error-text sm:mb-0 mb-2">500</p>
                                <p class="text-[1.125rem] font-semibold mb-4">Oops 😭,The page you are looking for is not available.</p>
                                <div class="flex justify-center items-center mb-[3rem]">
                                    <div class="xl:col-span-6 w-[50%]">
                                        <p class="mb-0 opacity-[0.7]">We are sorry for the inconvenience,The page you are trying to access has been removed or never been existed.</p>
                                    </div>
                                </div>
                                <a href="{{url('index')}}" class="ti-btn bg-primary text-white font-semibold"><i class="ri-arrow-left-line align-middle inline-block"></i>BACK TO HOME</a>
                            </div>
                            <div class="xl:col-span-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Particles JS -->
        <script src="{{asset('build/assets/libs/particles.js/particles.js')}}"></script>

        <!-- Error JS -->
        @vite('resources/assets/js/error.js')
        
    
@endsection