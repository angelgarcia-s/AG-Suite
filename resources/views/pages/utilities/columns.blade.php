@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                <!-- Page Header -->
                <div class="block justify-between page-header md:flex">
                    <div>
                        <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Columns</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[0.813rem] ps-[0.5rem]">
                          <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                            Utilities
                            <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                          </a>
                        </li>
                        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                            Columns
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Based On Column Count</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="absolute inset-0 -top-8 -bottom-8 grid grid-cols-1 sm:grid-cols-3 gap-8">
                                        <div class="bg-stripes-primary opacity-75 w-full h-full"></div>
                                        <div class="hidden sm:block bg-stripes-primary opacity-75 w-full h-full"></div>
                                        <div class="hidden sm:block bg-stripes-primary opacity-75 w-full h-full"></div>
                                    </div>
                                    <div class="relative columns-1 sm:columns-3 gap-8">
                                        <div class="relative aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-30.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8 sm:mt-0">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-1 aspect-h-1 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-31.jpg')}}" alt="Image Description">
                                        </div>
                                        <div class="hidden sm:block relative aspect-w-16 aspect-h-9 mt-8">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Based On Column Width</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative rounded-sm overflow-auto max-h-[800px]">
                                    <div class="relative">
                                        <div class="columns-3xs gap-8 space-y-8">
                                            <div class="relative aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative aspect-w-1 aspect-h-1">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-27.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-1 aspect-h-1">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-28.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="Image Description">
                                            </div>
                                            <div class="relative hidden sm:block aspect-w-16 aspect-h-9">
                                            <img class="w-full object-cover rounded-sm" src="{{asset('build/assets/images/media/media-25.jpg')}}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

@endsection

@section('scripts')


@endsection