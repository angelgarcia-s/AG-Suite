@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Reviews</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Pages
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Reviews
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">
                            <!-- Start::row-1 -->
                            <div class="max-w-6xl mx-auto reviews-container">
                                <div class="grid grid-cols-12 sm:gap-x-6 gap-y-4">
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Json Taylor</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CEO OF NORJA</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>12 days ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Json Taylor</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Melissa Blue</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">MANAGER CHO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>7 days ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Melissa Blue</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Kiara Advain</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CEO OF EMPIRO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>2 days ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Kiara Advain</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Jhonson Smith</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CHIEF SECRETARY MBIO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>16 hrs ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Jhonson Smith</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Dwayne Stort</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CEO ARMEDILLO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>22 days ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Dwayne Stort</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Jasmine Kova</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">AGGENT AMIO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>26 days ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Jasmine Kova</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Dolph MR</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CEO MR BRAND</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>1 month ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Dolph MR</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Brenda Simpson</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CEO AIBMO</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-half-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>1 month ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Brenda Simpson</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="flex items-center mb-4">
                                                    <span class="avatar avatar-md avatar-rounded me-4">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                    </span>
                                                    <div>
                                                        <p class="mb-0 font-semibold text-[.875rem] text-primary">Julia Sams</p>
                                                        <p class="mb-0 text-[.625rem] font-semibold text-[#8c9097]">CHIEF SECRETARY BHOL</p>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <span class="text-[#8c9097]">- Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum autem quaerat distinctio  -- <a href="javascript:void(0);" class="font-semibold text-[.6875rem] text-primary" >Read More</a></span>
                                                </div>
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-[#8c9097]">Rating : </span>
                                                        <span class="text-warning block ms-1">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ltr:float-right rtl:float-left text-[0.75rem] font-semibold text-[#8c9097] text-end">
                                                        <span>2 month ago</span>
                                                        <span class="block font-normal text-[0.75rem] text-success"><i>Julia Sams</i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination  mb-4 justify-end">
                                        <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--End::row-1 -->
                        </div>
        
@endsection

@section('scripts')


@endsection