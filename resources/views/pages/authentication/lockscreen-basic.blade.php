@extends('layouts.custom-master')

@section('styles')
 
      
@endsection

@section('content')

@section('error-body')
<body>
@endsection

        <div class="container">
            <div class="flex justify-center authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
              <div class="grid grid-cols-12">
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                  <div class="my-[2.5rem] flex justify-center">
                      <a href="{{url('index')}}">
                          <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                          <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                      </a>
                  </div>
                  <div class="box">
                      <div class="box-body !p-[3rem]">
                          <p class="h5 font-semibold mb-2 text-center">Lock Screen</p>
                          <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Hello Jhon !</p>
                          <div class="flex items-center mb-4">
                              <div class="leading-none">
                                  <span class="avatar avatar-md avatar-rounded">
                                      <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                  </span>
                              </div>
                              <div class="ms-4">
                                  <p class="mb-0 font-semibold text-dark">jhonslicer21@gmail.com</p>
                              </div>
                          </div>
                          <div class="grid grid-cols-12 gap-y-4">
                              <div class="xl:col-span-12 col-span-12 mb-2">
                                  <label for="lockscreen-password" class="form-label text-default">Password</label>
                                  <div class="input-group">
                                      <input type="password" class="form-control form-control-lg !rounded-s-md" id="lockscreen-password" placeholder="password">
                                      <button aria-label="button" type="button" class="ti-btn ti-btn-light !mb-0 !rounded-s-none" onclick="createpassword('lockscreen-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                  </div>
                                  <div class="mt-4">
                                      <div class="form-check !ps-0">
                                          <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                                          <label class="form-check-label text-[#8c9097] font-normal" for="defaultCheck1">
                                              Remember password ?
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="xl:col-span-12 col-span-12 grid mt-2">
                                  <a href="{{url('index')}}" class="ti-btn ti-btn-lg bg-primary text-white !font-medium">Unlock</a>
                              </div>
                          </div>
                          <div class="text-center">
                              <p class="text-[.75rem] text-[#8c9097] mt-4 mb-0">Try unlock with different methods <a class="text-success" href="javascript:void(0);"><u>Finger print</u></a> / <a class="text-success" href="javascript:void(0);"><u>Face Id</u></a></p>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
              </div>
            </div>
        </div>

@endsection

@section('scripts')

        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>


@endsection