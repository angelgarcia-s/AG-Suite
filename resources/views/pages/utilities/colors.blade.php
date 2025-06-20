@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Colors</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Utilities
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                               Colors
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Background Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-8 grid-cols-1 sm:grid-cols-4  items-center">
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-primary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-primary</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-secondary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-secondary</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-warning mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-warning</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-info mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-info</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-success mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-success</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-danger mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-danger</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-light mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-light</code></p>
                                        </div>
                                        <div class="p-4 col-span-1">
                                            <div class="m-2 bg-black mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-dark</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Border Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-8 grid-cols-1 sm:grid-cols-4  items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 border border-primary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-primary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-secondary mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-secondary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-warning mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-warning</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-info mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-info</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-success mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-success</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-danger mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-danger</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-light mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-light</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 border border-black mx-auto color-container"></div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>border-dark</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Background Opacity
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid sm:grid-cols-5 items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success  bg-opacity-100 text-white mx-auto color-container">100%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-75 text-white  mx-auto color-container">75%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-75</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-50 text-black  mx-auto color-container">50%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-50</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-25 text-black  mx-auto color-container">25%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-25</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 bg-success bg-opacity-10 text-black  mx-auto color-container">10%</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>bg-opacity-10</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                            Text Colors
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid md:grid-cols-9 grid-cols-1 sm:grid-cols-4 items-center">
                                        <div class="p-4 col">
                                            <div class="m-2 text-primary font-semibold text-[.875rem] text-center">primary</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-primary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-secondary font-semibold text-[.875rem] text-center">secondary</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-secondary</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-warning font-semibold text-[.875rem] text-center">warning</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-warning</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-info font-semibold text-[.875rem] text-center">info</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-info</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-success font-semibold text-[.875rem] text-center">success</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-success</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-danger font-semibold text-[.875rem] text-center">danger</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-danger</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-light bg-black text-white font-semibold text-[.875rem] text-center">light</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>.text-light</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-dark font-semibold text-[.875rem] text-center">dark</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-dark</code></p>
                                        </div>
                                        <div class="p-4 col">
                                            <div class="m-2 text-[#8c9097] font-semibold text-[.875rem] text-center">muted</div>
                                            <p class="pb-0 mb-0 font-semibold text-center"><code>text-muted</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Text Opacity
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid sm:grid-cols-4 items-center">
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-100 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>100% opacity</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-75 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-75</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-50 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-50</code></p>
                                                </div>
                                                <div class="p-4 col">
                                                    <div class="m-2 text-primary text-opacity-25 font-semibold text-[.875rem] text-center">Opacity-100</div>
                                                    <p class="pb-0 mb-0 font-semibold text-center"><code>text-opacity-25</code></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-5 -->
                    <h6 class="mb-4">Other Colors:</h6>
                    <div class="grid  gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-blue/10">blue-100</div>

                                    <div class="flex-grow p-4 bg-blue/20">blue-200</div>

                                    <div class="flex-grow p-4 bg-blue/30">blue-300</div>

                                    <div class="flex-grow p-4 bg-blue/40">blue-400</div>

                                    <div class="flex-grow p-4 bg-blue/50">blue-500</div>

                                    <div class="flex-grow p-4 bg-blue/60 text-white">blue-600</div>

                                    <div class="flex-grow p-4 bg-blue/70 text-white">blue-700</div>

                                    <div class="flex-grow p-4 bg-blue/80 text-white">blue-800</div>

                                    <div class="flex-grow p-4 bg-blue/90 text-white">blue-900</div>

                                    <div class="flex-grow p-4 bg-blue text-white">blue</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-indigo/10">indigo-100</div>

                                    <div class="flex-grow p-4 bg-indigo/20">indigo-200</div>

                                    <div class="flex-grow p-4 bg-indigo/30">indigo-300</div>

                                    <div class="flex-grow p-4 bg-indigo/40">indigo-400</div>

                                    <div class="flex-grow p-4 bg-indigo/50">indigo-500</div>

                                    <div class="flex-grow p-4 bg-indigo/60 text-white">indigo-600</div>

                                    <div class="flex-grow p-4 bg-indigo/70 text-white">indigo-700</div>

                                    <div class="flex-grow p-4 bg-indigo/80 text-white">indigo-800</div>

                                    <div class="flex-grow p-4 bg-indigo/90 text-white">indigo-900</div>

                                    <div class="flex-grow p-4 bg-indigo text-white">indigo</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-purple/10">purple-100</div>

                                    <div class="flex-grow p-4 bg-purple/20">purple-200</div>

                                    <div class="flex-grow p-4 bg-purple/30">purple-300</div>

                                    <div class="flex-grow p-4 bg-purple/40">purple-400</div>

                                    <div class="flex-grow p-4 bg-purple/50">purple-500</div>

                                    <div class="flex-grow p-4 bg-purple/60 text-white">purple-600</div>

                                    <div class="flex-grow p-4 bg-purple/70 text-white">purple-700</div>

                                    <div class="flex-grow p-4 bg-purple/80 text-white">purple-800</div>

                                    <div class="flex-grow p-4 bg-purple/90 text-white">purple-900</div>

                                    <div class="flex-grow p-4 bg-purple text-white">purple</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-pink/10">pink-100</div>

                                    <div class="flex-grow p-4 bg-pink/20">pink-200</div>

                                    <div class="flex-grow p-4 bg-pink/30">pink-300</div>

                                    <div class="flex-grow p-4 bg-pink/40">pink-400</div>

                                    <div class="flex-grow p-4 bg-pink/50">pink-500</div>

                                    <div class="flex-grow p-4 bg-pink/60 text-white">pink-600</div>

                                    <div class="flex-grow p-4 bg-pink/70 text-white">pink-700</div>

                                    <div class="flex-grow p-4 bg-pink/80 text-white">pink-800</div>

                                    <div class="flex-grow p-4 bg-pink/90 text-white">pink-900</div>

                                    <div class="flex-grow p-4 bg-pink text-white">pink</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-red/10">red-100</div>

                                    <div class="flex-grow p-4 bg-red/20">red-200</div>

                                    <div class="flex-grow p-4 bg-red/30">red-300</div>

                                    <div class="flex-grow p-4 bg-red/40">red-400</div>

                                    <div class="flex-grow p-4 bg-red/50">red-500</div>

                                    <div class="flex-grow p-4 bg-red/60 text-white">red-600</div>

                                    <div class="flex-grow p-4 bg-red/70 text-white">red-700</div>

                                    <div class="flex-grow p-4 bg-red/80 text-white">red-800</div>

                                    <div class="flex-grow p-4 bg-red/90 text-white">red-900</div>

                                    <div class="flex-grow p-4 bg-red text-white">red</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-orange/10">orange-100</div>

                                    <div class="flex-grow p-4 bg-orange/20">orange-200</div>

                                    <div class="flex-grow p-4 bg-orange/30">orange-300</div>

                                    <div class="flex-grow p-4 bg-orange/40">orange-400</div>

                                    <div class="flex-grow p-4 bg-orange/50">orange-500</div>

                                    <div class="flex-grow p-4 bg-orange/60 text-white">orange-600</div>

                                    <div class="flex-grow p-4 bg-orange/70 text-white">orange-700</div>

                                    <div class="flex-grow p-4 bg-orange/80 text-white">orange-800</div>

                                    <div class="flex-grow p-4 bg-orange/90 text-white">orange-900</div>

                                    <div class="flex-grow p-4 bg-orange text-white">orange</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-yellow/10">yellow-full</div>

                                    <div class="flex-grow p-4 bg-yellow/20">yellow-200</div>

                                    <div class="flex-grow p-4 bg-yellow/30">yellow-300</div>

                                    <div class="flex-grow p-4 bg-yellow/40">yellow-400</div>

                                    <div class="flex-grow p-4 bg-yellow/50">yellow-500</div>

                                    <div class="flex-grow p-4 bg-yellow/60 text-white">yellow-600</div>

                                    <div class="flex-grow p-4 bg-yellow/70 text-white">yellow-700</div>

                                    <div class="flex-grow p-4 bg-yellow/80 text-white">yellow-800</div>

                                    <div class="flex-grow p-4 bg-yellow/90 text-white">yellow-900</div>

                                    <div class="flex-grow p-4 bg-yellow text-white">yellow</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-green/10">green-100</div>

                                    <div class="flex-grow p-4 bg-green/20">green-200</div>

                                    <div class="flex-grow p-4 bg-green/30">green-300</div>

                                    <div class="flex-grow p-4 bg-green/40">green-400</div>

                                    <div class="flex-grow p-4 bg-green/50">green-500</div>

                                    <div class="flex-grow p-4 bg-green/60 text-white">green-600</div>

                                    <div class="flex-grow p-4 bg-green/70 text-white">green-700</div>

                                    <div class="flex-grow p-4 bg-green/80 text-white">green-800</div>

                                    <div class="flex-grow p-4 bg-green/90 text-white">green-900</div>

                                    <div class="flex-grow p-4 bg-green text-white">green</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-[#12c2c2]/10">teal-100</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/20">teal-200</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/30">teal-300</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/40">teal-400</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/50">teal-500</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/60 text-white">teal-600</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/70 text-white">teal-700</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/80 text-white">teal-800</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2]/90 text-white">teal-900</div>

                                    <div class="flex-grow p-4 bg-[#12c2c2] text-white">teal</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-cyan/10">cyan-100</div>

                                    <div class="flex-grow p-4 bg-cyan/20">cyan-200</div>

                                    <div class="flex-grow p-4 bg-cyan/30">cyan-300</div>

                                    <div class="flex-grow p-4 bg-cyan/40">cyan-400</div>

                                    <div class="flex-grow p-4 bg-cyan/50">cyan-500</div>

                                    <div class="flex-grow p-4 bg-cyan/60 text-white">cyan-600</div>

                                    <div class="flex-grow p-4 bg-cyan/70 text-white">cyan-700</div>

                                    <div class="flex-grow p-4 bg-cyan/80 text-white">cyan-800</div>

                                    <div class="flex-grow p-4 bg-cyan/90 text-white">cyan-900</div>

                                    <div class="flex-grow p-4 bg-cyan text-white">cyan</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-body xl:flex">
                                    <div class="flex-grow p-4 bg-gray-100">gray-100</div>

                                    <div class="flex-grow p-4 bg-gray-200">gray-200</div>

                                    <div class="flex-grow p-4 bg-gray-300">gray-300</div>

                                    <div class="flex-grow p-4 bg-gray-400">gray-400</div>

                                    <div class="flex-grow p-4 bg-gray-500">gray-500</div>

                                    <div class="flex-grow p-4 bg-gray-600 text-white">gray-600</div>

                                    <div class="flex-grow p-4 bg-gray-700 text-white">gray-700</div>

                                    <div class="flex-grow p-4 bg-gray-800 text-white">gray-800</div>

                                    <div class="flex-grow p-4 bg-gray-900 text-white">gray-900</div>

                                    <div class="flex-grow p-4 bg-gray-900 text-white">gray</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->
                    
@endsection

@section('scripts')


@endsection              