@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
      
                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Indicators</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Ui Elements
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Indicators
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <!-- Start::row-1 -->
                      <div class="grid grid-cols-12 gap-x-6">
                          <div class="col-span-12 lg:col-span-4">
                              <div class="box">
                                  <div class="box-header">
                                      <h5 class="box-title">Basic Legend Indicator</h5>
                                  </div>
                                  <div class="box-body">
                                      <div class="inline-flex items-center">
                                          <span class="w-2 h-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                          <span class="text-gray-600">Legend indicator</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 lg:col-span-4">
                              <div class="box">
                                  <div class="box-header">
                                      <h5 class="box-title">Color variations Legend Indicator</h5>
                                  </div>
                                  <div class="box-body">
                                      <div class="grid gap-y-2">
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-black/20 rounded-full me-2"></span>
                                              <span class="text-gray-600">Dark</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-gray-500 rounded-full me-2"></span>
                                              <span class="text-gray-600">Gray</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-red rounded-full me-2"></span>
                                              <span class="text-gray-600">Red</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-yellow rounded-full me-2"></span>
                                              <span class="text-gray-600">Yellow</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-green rounded-full me-2"></span>
                                              <span class="text-gray-600">Green</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-blue rounded-full me-2"></span>
                                              <span class="text-gray-600">Blue</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-indigo rounded-full me-2"></span>
                                              <span class="text-gray-600">Indigo</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-purple rounded-full me-2"></span>
                                              <span class="text-gray-600">Purple</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-pink rounded-full me-2"></span>
                                              <span class="text-gray-600">Pink</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-light rounded-full me-2"></span>
                                              <span class="text-gray-600">Light</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 lg:col-span-4">
                              <div class="box">
                                  <div class="box-header">
                                      <h5 class="box-title">Template Color variations Legend Indicator</h5>
                                  </div>
                                  <div class="box-body">
                                      <div class="grid gap-y-2">
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-primary rounded-full me-2"></span>
                                              <span class="text-gray-600">Primary</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-secondary rounded-full me-2"></span>
                                              <span class="text-gray-600">Secondary</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-warning rounded-full me-2"></span>
                                              <span class="text-gray-600">Warning</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-success rounded-full me-2"></span>
                                              <span class="text-gray-600">Success</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-info rounded-full me-2"></span>
                                              <span class="text-gray-600">Info</span>
                                          </div>
                                          <div class="inline-flex items-center">
                                              <span class="w-2 h-2 inline-block bg-danger rounded-full me-2"></span>
                                              <span class="text-gray-600">Danger</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- End::row-1 -->
            
@endsection

@section('scripts')


@endsection