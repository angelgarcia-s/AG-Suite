@extends('layouts.master')

@section('styles')
 
        <!-- Gridjs CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/gridjs/theme/mermaid.min.css')}}">

@endsection

@section('content')
 
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Grid Js Tables</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Tables
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Grid Js Tables
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Basic Table
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-example1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Table With Pagination
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

                        <!-- Start:: row-3 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Table With Search
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-search"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-3 -->

                        <!-- Start:: row-4 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Table Sorting
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-sorting"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->

                        <!-- Start:: row-5 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Table Loading
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-loading"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-5 -->

                        <!-- Start:: row-6 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Wide Table
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-wide"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-6 -->

                        <!-- Start:: row-7 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Fixed Header
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-header-fixed"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-7 -->

                        <!-- Start:: row-8 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Hidden Columns
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="grid-hidden-column"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-8 -->

@endsection

@section('scripts')

        <!-- Grid JS -->
        <script src="{{asset('build/assets/libs/gridjs/gridjs.umd.js')}}"></script>

        <!-- Internal Grid JS -->
        @vite('resources/assets/js/grid.js')
        

@endsection