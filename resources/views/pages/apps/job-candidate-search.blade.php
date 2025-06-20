@extends('layouts.master')

@section('styles')
  
        <!-- Nouislider CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/nouislider/nouislider.min.css')}}">

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Job Candidate Search</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Jobs
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                   Job Candidate Search 
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xxl:col-span-3 xl:col-span-4 col-span-12">
                                    <div class="box custom-box products-navigation-box">
                                        <div class="box-body !p-0">
                                            <div class="!p-6 border-b">
                                                <h6 class="font-semibold mb-0">Categories</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="c-1" checked>
                                                        <label class="form-check-label" for="c-1">
                                                            R &amp; D
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">2,712</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="c-2">
                                                        <label class="form-check-label" for="c-2">
                                                            Accounting
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">536</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="c-3" checked>
                                                        <label class="form-check-label" for="c-3">
                                                            Business Process
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">18,289</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="c-4" checked>
                                                        <label class="form-check-label" for="c-4">
                                                            Consulting
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">3,453</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="c-5">
                                                        <label class="form-check-label" for="c-5">
                                                            Administrative Support
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">7,165</span>
                                                    </div>
                                                    <div id="hs-show-hide-categeories-heading"
                                                        class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-show-hide-categeories">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="c-6">
                                                            <label class="form-check-label" for="c-6">
                                                                Human Resources
                                                            </label>
                                                            <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">7,165</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="c-7">
                                                            <label class="form-check-label" for="c-7">
                                                              Marketing
                                                            </label>
                                                            <span class="badge bg-light text-defaulttextcolor  ltr:float-right rtl:float-left">7,165</span>
                                                        </div>
                                                    </div>
                                                    <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                        href="javascript:void(0);" id="hs-show-hide-categeories"
                                                        data-hs-collapse="#hs-show-hide-categeories-heading">
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
                                                <h6 class="font-semibold mb-0">Availability</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="available-1" checked>
                                                        <label class="form-check-label" for="available-1">
                                                            Immediate
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="available-2">
                                                        <label class="form-check-label" for="available-2">
                                                            30 Days
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">2,186</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="available-3">
                                                        <label class="form-check-label" for="available-3">
                                                          3 Months
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">734</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Bond Agreement</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="bond-1" checked>
                                                        <label class="form-check-label" for="bond-1">
                                                            1 Year
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="bond-2">
                                                        <label class="form-check-label" for="bond-2">
                                                            2 Years
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="bond-3">
                                                        <label class="form-check-label" for="bond-3">
                                                            3 Years
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Languages</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="languages-1" checked>
                                                        <label class="form-check-label" for="languages-1">
                                                            English
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">13</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="languages-2">
                                                        <label class="form-check-label" for="languages-2">
                                                            Hindi
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">67</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="languages-3">
                                                        <label class="form-check-label" for="languages-3">
                                                            Telugu
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">58</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Job Type</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="j-1" checked>
                                                        <label class="form-check-label" for="j-1">
                                                            Full Time
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">512</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="j-2" checked>
                                                        <label class="form-check-label" for="j-2">
                                                            Part Time
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">2,186</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="j-3" checked>
                                                        <label class="form-check-label" for="j-3">
                                                          Internship
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">734</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="j-4">
                                                        <label class="form-check-label" for="j-4">
                                                            Freelancer
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">16</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="j-5">
                                                        <label class="form-check-label" for="j-5">
                                                            Remote Job
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">1,432</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Salary Range</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div id="nonlinear"></div>
                                                    <div class="flex mt-4">
                                                        <div class="font-semibold h6 mb-0">$<span id="lower-value"></span></div>
                                                        &nbsp; -- &nbsp;
                                                        <div class="font-semibold h6 mb-0">$<span id="upper-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Qualification</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="q-1">
                                                        <label class="form-check-label" for="q-1">
                                                            All Education Levels
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">16,563</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="q-2" checked>
                                                        <label class="form-check-label" for="q-2">
                                                            10th Pass and Above
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">15,234</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="q-3">
                                                        <label class="form-check-label" for="q-3">
                                                            12th Pass and Above
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">6,278</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="q-4" checked>
                                                        <label class="form-check-label" for="q-4">
                                                            Diploma and Graduate
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">4,531</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="q-5">
                                                        <label class="form-check-label" for="q-5">
                                                            Post Graduate
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">2,405</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4 border-b">
                                                <h6 class="font-semibold mb-0">Experience</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="e-1" checked>
                                                        <label class="form-check-label" for="e-1">
                                                            Fresher
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">23,156</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="e-2">
                                                        <label class="form-check-label" for="e-2">
                                                            Less than 1 year
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">15,632</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="e-3" checked>
                                                        <label class="form-check-label" for="e-3">
                                                            Less than 2 year
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">15,032</span>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="e-4" checked>
                                                        <label class="form-check-label" for="e-4">
                                                            More than 3 years
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">7,154</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <h6 class="font-semibold mb-0">Skills</h6>
                                                <div class="px-2 py-3 pb-0">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="s-1" checked>
                                                        <label class="form-check-label" for="s-1">
                                                            HTML5
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">23,156</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="s-2" checked>
                                                        <label class="form-check-label" for="s-2">
                                                            Javascript
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">15,632</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="s-3">
                                                        <label class="form-check-label" for="s-3">
                                                            PHP
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">15,032</span>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="s-4" checked>
                                                        <label class="form-check-label" for="s-4">
                                                            CSS3
                                                        </label>
                                                        <span class="badge bg-light text-default font-500 ltr:float-right rtl:float-left">7,154</span>
                                                    </div>
                                                    <div id="hs-show-hide-skills-heading"
                                                        class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="s-5">
                                                            <label class="form-check-label" for="s-5">
                                                                Tailwind
                                                            </label>
                                                            <span class="badge bg-light !text-defaulttextcolor font-500 ltr:float-right rtl:float-left">5,946</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="s-6">
                                                            <label class="form-check-label" for="s-6">
                                                                Angular
                                                            </label>
                                                            <span class="badge bg-light !text-defaulttextcolor font-500 ltr:float-right rtl:float-left">3,267</span>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" type="checkbox" value="" id="s-7">
                                                            <label class="form-check-label" for="s-7">
                                                                React
                                                            </label>
                                                            <span class="badge bg-light !text-defaulttextcolor font-500 ltr:float-right rtl:float-left">578</span>
                                                        </div>
                                                    </div>
                                                    <a class="ecommerce-more-link text-success hs-collapse-toggle inline-flex items-center gap-x-2"
                                                        href="javascript:void(0);" id="hs-show-hide-skills"
                                                        data-hs-collapse="#hs-show-hide-skills-heading">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                                    <div class="grid grid-cols-12 gap-6 items-center mb-6">
                                        <div class="lg:col-span-12 col-span-12">
                                            <div class="inline-flex !w-full companies-search-input">
                                                <input type="text" class="form-control !rounded-e-none border-e-0" aria-label="Text input with segmented dropdown button" placeholder="Enter your keyword here">
                                                <select class="form-control !rounded-none" data-trigger name="choices-single-default" id="choices-single-default">
                                                    <option value="">All Categories</option>
                                                    <option value="Choice 1">Software Dveloper</option>
                                                    <option value="Choice 2">Web Developer</option>
                                                    <option value="Choice 3">Software Architect</option>
                                                    <option value="Choice 4">IT Hardware</option>
                                                    <option value="Choice 5">Network Engineer</option>
                                                    <option value="Choice 6">Angular Developer</option>
                                                    <option value="Choice 7">React Developer</option>
                                                </select>
                                                <input type="text" class="form-control !rounded-none border-x-0" aria-label="Text input with segmented dropdown button" placeholder="Search by location">
                                                <select class="form-control !rounded-none" data-trigger id="choices-single-default1">
                                                    <option value="Choice 1">Fresher</option>
                                                    <option value="Choice 2">1 Year Exp</option>
                                                    <option value="Choice 3">2 Year Exp</option>
                                                    <option value="Choice 4">3 Year Exp</option>
                                                    <option value="Choice 5">4 Year Exp</option>
                                                    <option value="Choice 6">5+ Years Exp</option>
                                                </select>
                                                <button type="button" aria-label="button" class="ti-btn ti-btn-primary-full !mb-0 !rounded-s-none"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="sm:flex items-center">
                                                <h5 class="font-semibold mb-0 flex-grow">1287 <span class="font-normal text-[1.125rem]">Candidates match your job search</span> </h5>
                                                <div class="btn-group hs-dropdown ti-dropdown">
                                                    <button class="ti-btn ti-btn-light border dropdown-toggle" type="button" aria-expanded="false">
                                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
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
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg ">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Brenda Simpson <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="sm:flex gap-2">
                                                        <a href="javascript:void(0);">Software Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Kondapur, Hyderabad</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
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
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> Graduate</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> flexible-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-clock text-[#8c9097] me-1"></i> Immediate Joinee</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                            </div>
                                            <div class="flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span> <span class="font-semibold"  title="Current"> $2,300</span> - <span class="font-semibold"  title="Expected"> $3,678</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Hindi, Telugu</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">HTML</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">CSS</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">Javascript</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="hs-tooltip-toggle badge badge-md !rounded-full bg-info/10 text-info">
                                                            <i class="bi bi-hand-thumbs-up me-1"></i>1 year bond accepted
                                                            <span class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip">
                                                                1 year bond accepted
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg !rounded-full">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Dwayne Stort <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="sm:flex gap-2">
                                                        <a href="javascript:void(0);">Web Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Hyderabad</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(35)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> Post Graduate</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> flexible-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 10 Days</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                            </div>
                                            <div class="flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span> <span class="font-semibold"  title="Current"> $3,600</span> - <span class="font-semibold"  title="Expected"> $4,700</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Telugu</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">React</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">React Native</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="hs-tooltip-toggle badge badge-md !rounded-full bg-info/10 text-info">
                                                            <i class="bi bi-hand-thumbs-up me-1"></i>2 year bond accepted
                                                            <span class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip">
                                                                2 year bond accepted
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg !rounded-full">
                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Jasmine Kova <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);">Python Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Chennai</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(56)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> MBA</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> Day-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 30 Days</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Avg at English</a>
                                            </div>
                                            <div class="flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span> <span class="font-semibold"  title="Current"> $4,300</span> - <span class="font-semibold"  title="Expected"> $5,000</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Hindi</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">Python</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">Java</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">React</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 5 Years</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg !rounded-full">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Kiara Advain <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="flex gap-2">
                                                        <a href="javascript:void(0);">Java Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Banglore</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(13)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> MBA</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> Day-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 30 Days</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                            </div>
                                            <div class="sm:flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span><span class="font-semibold"  title="Expected"> $3,678</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Hindi, Telugu</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">Java</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default">Core Java</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="hs-tooltip-toggle badge badge-md !rounded-full bg-info/10 text-info">
                                                            <i class="bi bi-hand-thumbs-up me-1"></i>2 year bond accepted
                                                            <span class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip">
                                                                2 year bond accepted
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Fresher</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg !rounded-full">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Json Taylor <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="sm:flex gap-2">
                                                        <a href="javascript:void(0);">Angular Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Nellore</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(18)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> MCA</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> flexible-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 15 Days</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Fluent at English</a>
                                            </div>
                                            <div class="sm:flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span> <span class="font-semibold"  title="Current"> $3,600</span> - <span class="font-semibold"  title="Expected"> $4,700</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Telugu</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">Angular</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">Advanced Java</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="javascript:void(0);" class="hs-tooltip-toggle badge badge-md !rounded-full bg-info/10 text-info">
                                                            <i class="bi bi-hand-thumbs-up me-1"></i>2 year bond accepted
                                                            <span class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm" role="tooltip">
                                                                2 year bond accepted
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 5 Years</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                        <span><i class="bi bi-download"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Download Resume
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-heart"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        Whislist
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                        <span><i class="bi bi-eye"></i></span>
                                                        <span
                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                            role="tooltip">
                                                        View Profile
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="sm:flex mb-3 items-center">
                                                <span class="avatar avatar-lg !rounded-full">
                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="" class="!rounded-full">
                                                </span>
                                                <div class="ms-2">
                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="{{url('job-candidate-details')}}"> Diego Sanch <i class="bi bi-check-circle-fill text-success text-base"  title="Verified candidate"></i></a></h5>
                                                    <div class="sm:flex gap-2">
                                                        <a href="javascript:void(0);">AWS Developer</a>
                                                        <p class="mb-0 text-xs text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Kukatpally, Hyderabad</p>
                                                    </div>
                                                    <div class="flex items-center text-xs text-[#8c9097]">
                                                        <p class="text-xs mb-0">Ratings : </p>
                                                        <div class="min-w-fit ms-2">
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                        </div>
                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                            <span>(13)</span>
                                                            <span>Ratings</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popular-tags mb-4">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> MBA</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> Day-shift</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 30 Days</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                            </div>
                                            <div class="flex items-center">
                                                <p class="mb-0 flex-grow"><span class="text-[#8c9097]">Package (Yearly) :</span><span class="font-semibold"  title="Expected"> $8,900</span> </p>
                                                <p class="mb-0"><span class="text-[#8c9097]"> Languages :</span> <span class="font-semibold"> English, Hindi, Telugu</span></p>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center gap-3">
                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                <div class="popular-tags flex-grow">
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">AWS Lambda</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">Athena</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor">Linux</a>
                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary">More</a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Fresher</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="ti-pagination mb-4 justify-end">
                                        <li class="page-item disabled">
                                            <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">
                                                Prev
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link px-3 py-[0.375rem] text-primary" href="javascript:void(0);">
                                                next
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End::row-1 -->
                            
                        </div>
                        
@endsection

@section('scripts')

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- noUiSlider JS -->
        <script src="{{asset('build/assets/libs/nouislider/nouislider.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/wnumb/wNumb.min.js')}}"></script>

        <!-- Search Candidate JS -->
        @vite('resources/assets/js/job-search-candidate.js')


@endsection