@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Notifications</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Pages
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Notifications
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <div class="container">

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6 !mx-auto">
                            <div class="xxl:col-span-2 col-span-12"></div>
                            <div class="xxl:col-span-8 xl:col-span-12 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                <ul class="list-none mb-0 notification-container">
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="leading-top">
                                                            <span class="avatar avatar-md online me-4 avatar-rounded">
                                                                <img alt="avatar" src="{{asset('build/assets/images/faces/4.jpg')}}">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Emperio</p>
                                                                    <p class="mb-0 text-[#8c9097]">Project assigned by the manager all<span class="badge bg-primary/10 text-primary font-semibold mx-1">files</span>and<span class="badge bg-primary/10 text-primary font-semibold mx-1">folders</span>were included</p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">12 mins ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        24,Oct 2022
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-md offline me-4 avatar-rounded">
                                                                <img alt="avatar" src="{{asset('build/assets/images/faces/15.jpg')}}">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Dwayne Bero</p>
                                                                    <p class="mb-0 text-[#8c9097]">Admin and other team accepted your work request</p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">17 mins ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        30,Sep 2022
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-md offline me-4 avatar-rounded">
                                                                <img alt="avatar" src="{{asset('build/assets/images/faces/11.jpg')}}">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Alister Chuk</p>
                                                                    <p class="mb-0 text-[#8c9097]">Temporary data will be <span class="badge bg-danger/10 text-danger font-semibold mx-1">deleted</span> once dedicated time complated</p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">4 hrs ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        11,Sep 2021
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="leading-none">
                                                            <span class="avatar avatar-md online me-4 avatar-rounded">
                                                                <img alt="avatar" src="{{asset('build/assets/images/faces/5.jpg')}}">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Melissa Blue</p>
                                                                    <p class="mb-0 text-[#8c9097]">Approved date for sanction of loan is verified <i class="ri-checkbox-circle-line text-success ms-1 text-[1rem] align-middle"></i></p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">5 hrs ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        18,Sep 2021
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="avatar avatar-md bg-primary online me-4 avatar-rounded !text-white">
                                                            ZS
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Zack Slayer</p>
                                                                    <p class="mb-0 text-[#8c9097]">Social network accounts are at risk check your <span class="badge bg-success/10 text-success font-semibold mx-1">login</span> details</p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">9 hrs ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        15,Sep 2021
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box un-read">
                                            <div class="box-body !p-4">
                                                <a href="javascript:void(0);">
                                                    <div class="flex items-start mt-0 flex-wrap">
                                                        <div class="avatar avatar-md online me-4 avatar-rounded">
                                                            <img alt="avatar" src="{{asset('build/assets/images/faces/2.jpg')}}">
                                                        </div>
                                                        <div class="flex-grow">
                                                            <div class="sm:flex items-center">
                                                                <div class="sm:mt-0 mt-2">
                                                                    <p class="mb-0 text-[.875rem] font-semibold">Monika Karen</p>
                                                                    <p class="mb-0 text-[#8c9097]">Changed the password of gmail 4 hrs ago. <span class="badge bg-secondary text-white">Update</span></p>
                                                                    <span class="mb-0 block text-[#8c9097] text-[0.75rem]">12 hrs ago</span>
                                                                </div>
                                                                <div class="ms-auto">
                                                                    <span class="ltr:float-right rtl:float-left badge bg-light text-[#8c9097] whitespace-nowrap">
                                                                        12,Sep 2021
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="!text-center mb-4">
                                <button type="button" class="ti-btn ti-btn-info ti-btn-loader">Loading
                                    <span class="ti-spinner !h-4 !w-4" role="status"></span>
                                </button>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 col-span-12"></div>
                        </div>
                        <!--End::row-1 -->

                      </div>

@endsection

@section('scripts')


@endsection