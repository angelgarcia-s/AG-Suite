@extends('layouts.master')

@section('styles')
 
        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Tom Select Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">
      
@endsection

@section('content')
 
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Job Company Search</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Jobs
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                   Job Company Search
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">
                            <!-- Start:: row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-3 lg:col-span-5 col-span-12">
                                    <div class="box custom-box products-navigation-box">
                                        <div class="box-body !p-0">
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Industry Type</h6>
                                                <div class="px-0 py-4 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-1" checked>
                                                        <label class="form-check-label" for="c-1">
                                                            R &amp; D
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">2,712</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-2">
                                                        <label class="form-check-label" for="c-2">
                                                            Accounting
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">536</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-3" checked>
                                                        <label class="form-check-label" for="c-3">
                                                            Business Process
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">18,289</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-4" checked>
                                                        <label class="form-check-label" for="c-4">
                                                            Consulting
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">3,453</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-5">
                                                        <label class="form-check-label" for="c-5">
                                                            Administrative Support
                                                        </label>
                                                        <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">7,165</span>
                                                    </div>
                                                    <div id="hs-show-hide-industry-heading"
                                                        class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-8">
                                                            <label class="form-check-label" for="c-5">
                                                                Human Resources
                                                            </label>
                                                            <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">7,165</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-9">
                                                            <label class="form-check-label" for="c-5">
                                                              Marketing
                                                            </label>
                                                            <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">7,165</span>
                                                        </div>
                                                    </div>
                                                    <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                        href="javascript:void(0);" id="hs-show-hide-industry"
                                                        data-hs-collapse="#hs-show-hide-industry-heading">
                                                        <span class="hs-collapse-open:hidden">MORE</span>
                                                        <span class="hs-collapse-open:block hidden">MORE</span>
                                                        <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Location</h6>
                                                <div class="px-0 py-4 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="available-1" checked>
                                                        <label class="form-check-label" for="available-1">
                                                            Hyderabad
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="available-2">
                                                        <label class="form-check-label" for="available-2">
                                                            Banglore
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">2,186</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="available-3">
                                                        <label class="form-check-label" for="available-3">
                                                          Chennai
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">734</span>
                                                    </div>
                                                    <div id="hs-show-hide-location-heading"
                                                        class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-show-hide-location">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-6">
                                                            <label class="form-check-label" for="c-6">
                                                                Pune
                                                            </label>
                                                            <span class="badge bg-light text-default  ltr:float-right rtl:float-left">5,964</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="c-7">
                                                            <label class="form-check-label" for="c-7">
                                                                USA
                                                            </label>
                                                            <span class="badge bg-light text-default  ltr:float-right rtl:float-left">2,123</span>
                                                        </div>
                                                    </div>
                                                    <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                        href="javascript:void(0);" id="hs-show-hide-location"
                                                        data-hs-collapse="#hs-show-hide-location-heading">
                                                        <span class="hs-collapse-open:hidden">MORE</span>
                                                        <span class="hs-collapse-open:block hidden">MORE</span>
                                                        <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16"
                                                            height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Company Size</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="bond-1" checked>
                                                        <label class="form-check-label" for="bond-1">
                                                            0-50
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">145</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="bond-2">
                                                        <label class="form-check-label" for="bond-2">
                                                          50 - 100
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">432</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="bond-3">
                                                        <label class="form-check-label" for="bond-3">
                                                            100 - 150
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">123</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Recruiter Type</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="Recruiter-1" checked>
                                                        <label class="form-check-label" for="Recruiter-1">
                                                            Direct Company
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">13</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="Recruiter-2">
                                                        <label class="form-check-label" for="Recruiter-2">
                                                            Agency
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">67</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Job Vacancies</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="vacancies-1" checked>
                                                        <label class="form-check-label" for="vacancies-1">
                                                            0 -10
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">13</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="vacancies-2">
                                                        <label class="form-check-label" for="vacancies-2">
                                                            10 - 20
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">67</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="vacancies-3">
                                                        <label class="form-check-label" for="vacancies-2">
                                                            20 +above
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">67</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Type of Employement</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="j-1" checked>
                                                        <label class="form-check-label" for="j-1">
                                                            Full Time
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="j-2" checked>
                                                        <label class="form-check-label" for="j-2">
                                                            Part Time
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">2,186</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="j-3" checked>
                                                        <label class="form-check-label" for="j-3">
                                                          Internship
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">734</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="j-4">
                                                        <label class="form-check-label" for="j-4">
                                                            Freelancer
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">16</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input me-2 focus:!shadow-none focus:!ring-0 focus:!ring-offset-0" type="checkbox" value="" id="j-5">
                                                        <label class="form-check-label" for="j-5">
                                                            Remote Job
                                                        </label>
                                                        <span class="badge bg-light text-default  ltr:float-right rtl:float-left">1,432</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-9 lg:col-span-7 col-span-12">
                                    <div class="grid grid-cols-12 align-center mb-4">
                                        <div class="lg:col-span-12 col-span-12">
                                            <div class="inline-flex !w-full companies-search-input">
                                                <input type="text" class="form-control !rounded-e-none !border-e-0" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                                <select class="form-control !rounded-none !w-full" data-trigger name="choices-single-default" id="choices-single-default">
                                                    <option value="">All Categories</option>
                                                    <option value="Choice 1">Software Dveloper</option>
                                                    <option value="Choice 2">Web Developer</option>
                                                    <option value="Choice 3">Software Architect</option>
                                                    <option value="Choice 4">IT Hardware</option>
                                                    <option value="Choice 5">Network Engineer</option>
                                                    <option value="Choice 6">Angular Developer</option>
                                                    <option value="Choice 7">React Developer</option>
                                                </select>
                                                <input type="text" class="form-control !rounded-none !border-s-0" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                                <button aria-label="button" type="button" class="ti-btn !mb-0 ti-btn-primary-full !rounded-s-none"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <h5 class="font-semibold mb-0 flex-grow">1287 <span class="font-normal text-[1.125rem]">Companies match for your search</span> </h5>
                                                <div class="btn-group hs-dropdown ti-dropdown">
                                                    <button class="ti-btn ti-btn-outline-light border dropdown-toggle" type="button" aria-expanded="false">
                                                        Sort By <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                    </button>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Premium</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Newest</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Most Relevant</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Fresher</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Experienced</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Bond Agreement</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Flexible Shift</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Day Shift</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Spotech Technical Solutions <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Kondapur, Hyderabad, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2019</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.74rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white  shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> G Technical Solutions <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Gachibowli, Hyderabad, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2015</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.75rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(134)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white  shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Diego Technical Solutions <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Gachibowli, Chennai, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2013</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.75rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(234)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white  shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/7.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Spoteck Solutions Pvt Ltd <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Gachibowli, Banglore, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2002</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.75rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(239)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-share"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                          Share this Company
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white  shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Vehement Capital Partners <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Gachibowli, Banglore, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2017</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.75rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(239)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                            Add to Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full bg-light !text-defaulttextcolor avatar-sm">
                                                        <span><i class="bi bi-share"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                          Share this Company
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex items-center flex-wrap gap-2">
                                                <span class="avatar avatar-xl bg-white  shadow-sm border p-2 !rounded-full">
                                                    <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Wonka Industries <i class="bi bi-check-circle-fill text-success text-base"  title="Verified company"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);"><i class="bi bi-geo-alt text-[0.6875rem]"></i> Kukatpally, Hyderabad, </a>
                                                        <p class="mb-0 text-[#8c9097]">Establishment year - 2000</p>
                                                    </div>
                                                    <div class="flex items-center text-[0.75rem] text-[#8c9097]">
                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(764)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center flex-wrap gap-2">
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="No of employees"><i class="bi bi-people me-1"></i>No. of Emp : 345</a>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Vacancies : 50</a>
                                                </div>
                                                <a href="javascript:void(0);" class="ti-btn btn-wave ti-btn-primary-full">
                                                    View Profile <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="ti-pagination ltr:float-right rtl:float-left  mb-4">
                                            <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End:: row-1 -->
                        </div>

@endsection

@section('scripts')

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

@endsection