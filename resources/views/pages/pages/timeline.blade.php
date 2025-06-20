@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Timeline</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Pages
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Timeline
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <div class="container">
                        <ul class="timeline list-none text-[0.813rem] text-defaulttextcolor">
                          <li>
                              <div class="timeline-time text-end">
                                <span class="date">FRIDAY</span>
                                <span class="time inline-block">02:31</span>
                              </div>
                              <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                              </div>
                              <div class="timeline-body">
                                  <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                      <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                          <img alt="avatar" src="{{asset('build/assets/images/faces/4.jpg')}}">
                                      </div>
                                      <div class="flex-grow">
                                          <div class="flex items-center">
                                              <div class="sm:mt-0 mt-2">
                                                  <p class="mb-0 text-[.875rem] font-semibold">Emperio</p>
                                                  <p class="mb-0 text-[#8c9097]">Project assigned by the manager all<span class="badge bg-primary/10 text-primary font-semibold mx-1">files</span>and<span class="badge bg-primary/10 text-primary font-semibold mx-1">folders</span>were included</p>
                                              </div>
                                              <div class="ms-auto">
                                                  <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                      24,Oct 2022
                                                  </span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li>
                            <div class="timeline-time text-end">
                                <span class="date">MONDAY</span>
                                <span class="time inline-block">08:47</span>
                            </div>
                            <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                            </div>
                            <div class="timeline-body">
                                <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                        <img alt="avatar" src="{{asset('build/assets/images/faces/15.jpg')}}">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center">
                                            <div class="sm:mt-0 mt-2">
                                                <p class="mb-0 text-[.875rem] font-semibold">Dwayne Bero</p>
                                                <p class="mb-0 text-[#8c9097]">Admin and other team accepted your work request</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                    30,Sep 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-time text-end">
                                <span class="date">YESTERDAY</span>
                                <span class="time inline-block">18:43</span>
                            </div>
                            <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                            </div>
                            <div class="timeline-body">
                                <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                        <img alt="avatar" src="{{asset('build/assets/images/faces/11.jpg')}}">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center">
                                            <div class="sm:mt-0 mt-2">
                                                <p class="mb-0 text-[.875rem] font-semibold">Alister Chuk</p>
                                                <p class="mb-0 text-[#8c9097]">Temporary data will be <span class="badge bg-danger/10 text-danger font-semibold mx-1">deleted</span> once dedicated time complated</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                    11,Sep 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">03:18</span>
                            </div>
                            <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                            </div>
                            <div class="timeline-body">
                                <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                        <img alt="avatar" src="{{asset('build/assets/images/faces/5.jpg')}}">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center">
                                            <div class="sm:mt-0 mt-2">
                                                <p class="mb-0 text-[.875rem] font-semibold">Melissa Blue</p>
                                                <p class="mb-0 text-[#8c9097]">Approved date for sanction of loan is verified <i class="ri-checkbox-circle-line text-success ms-1 text-[1rem] align-middle"></i></p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                    18,Sep 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">12:24</span>
                            </div>
                            <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                            </div>
                            <div class="timeline-body">
                                <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                        <img alt="avatar" src="{{asset('build/assets/images/faces/10.jpg')}}">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center">
                                            <div class="sm:mt-0 mt-2">
                                                <p class="mb-0 text-[.875rem] font-semibold">Zack Slayer</p>
                                                <p class="mb-0 text-[#8c9097]">Social network accounts are at risk check your <span class="badge bg-success/10 text-success font-semibold mx-1">login</span> details</p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                    15,Sep 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li>
                            <div class="timeline-time text-end">
                                <span class="date">TODAY</span>
                                <span class="time inline-block">04:11</span>
                            </div>
                            <div class="timeline-icon">
                                <a aria-label="anchor" href="javascript:void(0);"></a>
                            </div>
                            <div class="timeline-body">
                                <div class="flex items-start timeline-main-content flex-wrap mt-0">
                                    <div class="avatar avatar-md online me-3 avatar-rounded md:mt-0 mt-6">
                                        <img alt="avatar" src="{{asset('build/assets/images/faces/2.jpg')}}">
                                    </div>
                                    <div class="flex-grow">
                                        <div class="flex items-center">
                                            <div class="sm:mt-0 mt-2">
                                                <p class="mb-0 text-[.875rem] font-semibold">Monika Karen</p>
                                                <p class="mb-0 text-[#8c9097]">Changed the password of gmail 4 hrs ago. <span class="badge bg-secondary text-white">Update</span></p>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="ltr:float-right rtl:float-left badge !bg-light text-[#8c9097] timeline-badge whitespace-nowrap">
                                                    12,Sep 2021
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </li>
                        </ul>
                        <div class="timeline-loadmore-container text-center">
                            <button type="button" class="ti-btn ti-btn-info ti-btn-loader">
                                Loading
                                <span class="ti-spinner !h-4 !w-4" role="status"></span>
                            </button>
                        </div>
                      </div>

@endsection

@section('scripts')


@endsection