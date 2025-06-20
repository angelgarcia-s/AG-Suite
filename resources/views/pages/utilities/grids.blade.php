@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                <!-- Page Header -->
                <div class="block justify-between page-header md:flex">
                    <div>
                        <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Grids</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[0.813rem] ps-[0.5rem]">
                          <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                            Utilities
                            <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                          </a>
                        </li>
                        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                            Grids
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Column In Grid</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-4 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light">07</div>
                                        <div class="p-4 rounded-sm  bg-light">08</div>
                                        <div class="p-4 rounded-sm  bg-light">09</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Spanning Columns</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold">
                                        <div class="p-4 rounded-sm bg-light">01</div>
                                        <div class="p-4 rounded-sm bg-light">02</div>
                                        <div class="p-4 rounded-sm bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light col-span-2">04</div>
                                        <div class="p-4 rounded-sm bg-light">05</div>
                                        <div class="p-4 rounded-sm bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light col-span-2">07</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-1 -->

                <!-- Start::row-2 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Starting And Ending Lines</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-6 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold">
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-start-2 col-span-4">01</div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-start-1 col-end-3">02</div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm"></div>
                                        <div class="p-4 rounded-sm  bg-light col-end-7 col-span-2">03</div>
                                        <div class="p-4 rounded-sm  bg-light col-start-1 col-end-7">04</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Spanning Rows</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-3 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-3">01</div>
                                        <div class="p-4 rounded-sm bg-light sm:grid space-y-6 sm:space-y-0 place-content-center col-span-2">02</div>
                                        <div class="p-4 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-span-2 col-span-2">03</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End::row-2 -->

                <!-- Start::row-3 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <div class="box-title">Specifying Rows in A Grid</div>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-4 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                        <div class="p-4 rounded-sm  bg-light">07</div>
                                        <div class="p-4 rounded-sm  bg-light">08</div>
                                        <div class="p-4 rounded-sm  bg-light">09</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Starting And Ending Lines</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-rows-3 grid-flow-col gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-start-2 row-span-2">01</div>
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-end-3 row-span-2">02</div>
                                        <div class="p-4 sm:p-12 rounded-sm  bg-light sm:grid space-y-6 sm:space-y-0 place-content-center row-start-1 row-end-4">03</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- End::row-3 -->

                <!-- Start::row-4 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Gap Between Elements</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-2 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Changing Rows And Columns Independently</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 gap-x-8 gap-y-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 rounded-sm  bg-light">01</div>
                                        <div class="p-4 rounded-sm  bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm  bg-light">04</div>
                                        <div class="p-4 rounded-sm  bg-light">05</div>
                                        <div class="p-4 rounded-sm  bg-light">06</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- End::row-4 -->

                <!-- Start::row-5 -->
                <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">sm:grid space-y-6 sm:space-y-0 Element Placement</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-3 grid-rows-3 grid-flow-row-dense gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="p-4 col-span-2 rounded-sm bg-light">01</div>
                                        <div class="p-4 col-span-2 rounded-sm bg-light">02</div>
                                        <div class="p-4 rounded-sm  bg-light">03</div>
                                        <div class="p-4 rounded-sm bg-light">04</div>
                                        <div class="p-4 rounded-sm bg-light">05</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Equal Widths</h5>
                            </div>
                            <div class="box-body">
                                <div class="relative">
                                    <div class="relative rounded-sm overflow-auto">
                                      <div class="sm:grid space-y-6 sm:space-y-0 grid-cols-12 gap-4 font-mono text-defaulttextcolor text-sm text-center font-bold rounded-sm">
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                        <div class="col-span-12 sm:col-span-4 p-4 rounded-sm  bg-light">Column</div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- End::row-5 -->
                 
@endsection

@section('scripts')


@endsection