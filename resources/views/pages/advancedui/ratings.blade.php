@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
        
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Ratings</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Advanced Ui
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Ratings
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                      <div class="box-title">
                                            Basic Rater
                                      </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Show Some <span class="text-danger">❤</span> with rating :</p>
                                            <div id="rater-basic"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            5 star rater with steps
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Dont forget to rate the product :</p>
                                            <div id="rater-steps"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Custom messages
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Your rating is much appreciated👏 :</p>
                                            <div id="custom-messages"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Unlimited number of stars readOnly
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Thanks for rating :</p>
                                            <div id="stars-unlimited"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            5 Star rater with custom isBusyText and simulated backend
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Thanks for rating :</p>
                                            <div id="stars-busytext"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            On hover event
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Please give your valuable rating :</p>
                                            <div class="flex flex-wrap items-center">
                                                <div id="stars-hover"></div>
                                                <span class="live-rating badge bg-success/10 text-success ms-4">
                                                    1
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Clear/reset rater
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-center justify-between">
                                            <p class="text-[.875rem] mb-0 font-semibold">Thank You so much for your support :</p>
                                            <div class="flex flex-wrap items-center">
                                                <div id="rater-reset"></div>
                                                <button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-danger !ms-4" id="rater-reset-button">
                                                    <i class="ri-restart-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

@endsection

@section('scripts')

        <!-- Rater JS -->
        <script src="{{asset('build/assets/libs/rater-js/index.js')}}"></script>

        <!-- Internal Ratings JS -->
        @vite('resources/assets/js/ratings.js')
        

@endsection