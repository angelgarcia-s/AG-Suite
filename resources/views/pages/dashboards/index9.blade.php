@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> HRM</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Dashboards
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                HRM
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box hrm-main-card primary">
                                        <div class="box-body">
                                            <div class="flex items-start">
                                                <div class="me-4">
                                                    <span class="avatar bg-primary !text-white">
                                                        <i class="ri-team-line text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <span class="font-semibold text-[#8c9097] block mb-1">Total
                                                        Employees</span>
                                                    <h5 class="font-semibold mb-1 text-[1.25rem]">22,124</h5>
                                                    <p class="mb-0">
                                                        <span class="badge bg-primary/10 text-primary">This Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="text-[0.875rem] font-semibold text-success">+1.03%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box hrm-main-card secondary">
                                        <div class="box-body">
                                            <div class="flex items-start">
                                                <div class="me-4">
                                                    <span class="avatar bg-secondary !text-white">
                                                        <i class="ri-user-unfollow-line text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <span class="font-semibold text-[#8c9097] block mb-1">Employees In
                                                        Leave</span>
                                                    <h5 class="font-semibold mb-1 text-[1.25rem]">528</h5>
                                                    <p class="mb-0">
                                                        <span class="badge bg-secondary/10 text-secondary">This Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="text-[0.875rem] font-semibold text-success">+0.36%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box  hrm-main-card warning">
                                        <div class="box-body">
                                            <div class="flex items-start">
                                                <div class="me-4">
                                                    <span class="avatar bg-warning !text-white">
                                                        <i class="ri-service-line text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <span class="font-semibold text-[#8c9097] block mb-1">Total
                                                        Clients</span>
                                                    <h5 class="font-semibold mb-1 text-[1.25rem]">8,289</h5>
                                                    <p class="mb-0">
                                                        <span class="badge bg-warning/10 text-warning">This Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="text-[0.875rem] font-semibold text-danger">-1.28%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                    <div class="box hrm-main-card danger">
                                        <div class="box-body">
                                            <div class="flex items-start">
                                                <div class="me-4">
                                                    <span class="avatar bg-danger !text-white">
                                                        <i class="ri-contacts-line text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <span class="font-semibold text-[#8c9097] block mb-1">New Leads</span>
                                                    <h5 class="font-semibold mb-1 text-[1.25rem]">1,453</h5>
                                                    <p class="mb-0">
                                                        <span class="badge bg-danger/10 text-danger">This Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="text-[0.875rem] font-semibold text-success">+4.25%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="box-title">Applicants Summary</div>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 md:gap-y-0 gap-y-3">
                                                <div
                                                    class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                                    <div class="flex items-start">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-rounded bg-light !text-primary">
                                                                <i class="ti ti-files text-[1.125rem]"></i>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="block mb-1 text-[#8c9097]">New Applicants</span>
                                                            <h6 class="font-semibold mb-0 text-[1rem]">2,981</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                                    <div class="flex items-start">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-rounded bg-light !text-secondary">
                                                                <i class="ti ti-file-check text-[1.125rem]"></i>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="block mb-1 text-[#8c9097]">Selected
                                                                Candidates</span>
                                                            <h6 class="font-semibold mb-0 text-[1rem]">2,981</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12">
                                                    <div class="flex items-start">
                                                        <div class="me-3">
                                                            <span class="avatar avatar-rounded bg-light !text-warning">
                                                                <i class="ti ti-file-dislike text-[1.125rem]"></i>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="block mb-1 text-[#8c9097]">Rejected
                                                                Candidates</span>
                                                            <h6 class="font-semibold mb-0 text-[1rem]">2,981</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-7 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between items-center sm:flex block">
                                    <div class="box-title sm:mb-0 mb-2">
                                        Performance By Category
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm" role="group" aria-label="Basic example">
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1W</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1M</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">6M</button>
                                            <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary-full !rounded-s-none !text-white">1Y</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="performanceReport"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6 col-span-12">
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Jobs Summary
                                    </div>
                                </div>
                                <div class="box-body !p-6">
                                    <div id="jobs-summary"></div>
                                </div>
                                <div class="box-footer !py-6 !px-4 !mt-2">
                                    <div class="grid xxxl:grid-cols-4 grid-cols-4">
                                        <div class="col p-0">
                                            <div class="text-center">
                                                <span class="text-[#8c9097] text-[0.75rem] mb-1 hrm-jobs-legend published inline-block ms-2">Published
                                                </span>
                                                <div><span class="text-[1rem] font-semibold">1,624</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="text-center">
                                                <span class="text-[#8c9097] text-[0.75rem] mb-1 hrm-jobs-legend private inline-block ms-2">Private
                                                </span>
                                                <div><span class="text-[1rem] font-semibold">1,267</span></div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="text-center">
                                                <span class="text-[#8c9097] text-[0.75rem] mb-1 hrm-jobs-legend closed inline-block ms-2">Closed
                                                </span>
                                                <div><span class="text-[1rem] font-semibold">1,153</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="text-center">
                                                <span class="text-[#8c9097] text-[0.75rem] mb-1 hrm-jobs-legend onhold inline-block ms-2">On Hold
                                                </span>
                                                <div><span class="text-[1rem] font-semibold">1,153</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Upcoming Events</div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-none timeline-widget mb-0 my-5">
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold text-primary">02</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Mon</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-start justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]">10:00AM<span class="badge bg-primary/10 text-primary ms-2">Announcement</span></p>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097]">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Month</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Year</a></li>
                                                              </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold text-primary">15</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Sun</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-start justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">National holiday - Vero Jayanti</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]"><span class="badge text-warning bg-warning/10">Holiday</span></p>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097]">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Month</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Year</a></li>
                                                              </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold text-primary">23</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Mon</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-start justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">John pup birthday - Team Member</p>
                                                        <p class="mb-4 text-[0.75rem] leading-none text-[#8c9097]">09:00AM<span class="badge text-success bg-success/10 ms-2">Birthday</span></p>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]">04:00PM<span class="badge text-primary bg-primary/10 ms-2">Announcement</span></p>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097]">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Month</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Year</a></li>
                                                              </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold text-primary">31</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Tue</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-start justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">National Holiday - Dolore Ipsum</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]"><span class="badge text-warning bg-warning/10">Holiday</span></p>
                                                    </div>
                                                    <div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="text-[1rem] text-[#8c9097]">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Week</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Month</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Year</a></li>
                                                              </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Clients</div>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">Client</th>
                                                    <th scope="col" class="text-start">Mail</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-t border-defaultborder">
                                                    <th scope="col">
                                                        <div class="flex items-center leading-none">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="avatar avatar-rounded me-4 !mb-0">
                                                            <div>
                                                                <span class="block font-semibold mb-1">Diana Aise</span>
                                                                <span class="block text-[#8c9097] text-[0.75rem] text-start">C.E.O</span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>diana.1116@demo.com</td>
                                                    <td>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-outline-light text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium">
                                                                Active <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Active</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">In Active</a></li>
                                                              </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-t border-defaultborder">
                                                    <th scope="row">
                                                        <div class="flex items-center leading-none">
                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="" class="avatar avatar-rounded me-4 !mb-0">
                                                            <div>
                                                                <span class="block font-semibold mb-1">Rose Mary</span>
                                                                <span class="block text-[#8c9097] text-[0.75rem] text-start">C.E.O</span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>rose756@demo.com</td>
                                                    <td>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-outline-light text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium">
                                                                Active <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Active</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">In Active</a></li>
                                                              </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-t border-defaultborder">
                                                    <th scope="row">
                                                        <div class="flex items-center leading-none">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="" class="avatar avatar-rounded me-4 !mb-0">
                                                            <div>
                                                                <span class="block font-semibold mb-1">Gretchen Iox</span>
                                                                <span class="block text-[#8c9097] text-[0.75rem] text-start">Manager</span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>gretchen.1.25@demo.com</td>
                                                    <td>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-outline-light text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium">
                                                                Active <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Active</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">In Active</a></li>
                                                              </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-t border-defaultborder">
                                                    <th scope="row">
                                                        <div class="flex items-center leading-none">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" class="avatar avatar-rounded me-4 !mb-0">
                                                            <div>
                                                                <span class="block font-semibold mb-1">Gray Noal</span>
                                                                <span class="block text-[#8c9097] text-[0.75rem] text-start">Manager</span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>gray12gray@demo.com</td>
                                                    <td>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-outline-light text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium">
                                                                Active <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Active</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">In Active</a></li>
                                                              </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border-t border-defaultborder">
                                                    <th scope="row" class="border-bottom-0">
                                                        <div class="flex items-center leading-none">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="avatar avatar-rounded me-4 !mb-0">
                                                            <div>
                                                                <span class="block font-semibold mb-1">Isa Bella</span>
                                                                <span class="block text-[#8c9097] text-[0.75rem] text-start">C.E.O</span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="border-bottom-0">isa158@demo.com</td>
                                                    <td class="border-bottom-0">
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-outline-light text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium">
                                                                Active <i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">Active</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                    href="javascript:void(0);">In Active</a></li>
                                                              </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between flex-wrap">
                                    <div class="box-title">
                                      Bills Summary
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div class="me-3">
                                            <input class="ti-form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a href="javascript:void(0);"
                                              class="ti-btn ti-btn-primary !bg-primary !text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                              aria-expanded="false">
                                              Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                  href="javascript:void(0);">New</a></li>
                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                  href="javascript:void(0);">Popular</a></li>
                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                  href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                          </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover whitespace-nowrap table-bordered min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">S.No</th>
                                                    <th scope="col" class="text-start">Invoice ID</th>
                                                    <th scope="col" class="text-start">Client</th>
                                                    <th scope="col" class="text-start">Due Date</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Amount</th>
                                                    <th scope="col" class="text-start">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>1</td>
                                                    <td>#INV111611</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Rena Mark</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">renamark123@demo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        14-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success text-white">Paid</span>
                                                    </td>
                                                    <td>
                                                        $9,523
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>2</td>
                                                    <td>#INV111611</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Xong Yun</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">xongyun2134@gmail.com</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        14-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning text-white">Pending</span>
                                                    </td>
                                                    <td>
                                                        $8,243
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>3</td>
                                                    <td>#INV147852</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Kane William</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">william154@demo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        16-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary text-white">Overdue</span>
                                                    </td>
                                                    <td>
                                                        $5,234
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>4</td>
                                                    <td>#INV753159</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Stewart Rem</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">remstew092@demo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        21-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success text-white">Paid</span>
                                                    </td>
                                                    <td>
                                                        $7,546
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>5</td>
                                                    <td>#INV369874</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Elliot Yun</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">eiiliot000@demo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        18-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary text-white">Overdue</span>
                                                    </td>
                                                    <td>
                                                        $7,541
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>6</td>
                                                    <td>#INV123456</td>
                                                    <td>
                                                        <div class="flex items-center leading-none">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold mb-1">Gretchen Xio</span>
                                                                <span class="text-[#8c9097] text-[0.75rem]">gretchenxio999@demo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        20-05-2023
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning text-white">Pending</span>
                                                    </td>
                                                    <td>
                                                      $2,541
                                                    </td>
                                                    <td>
                                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-info/10 text-info hover:bg-info hover:text-white hover:border-info"><i
                                                              class="ri-pencil-line"></i></a>
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-danger/10 text-danger hover:bg-danger hover:text-white hover:border-danger"><i
                                                              class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="sm:flex items-center">
                                      <div class="text-defaulttextcolor/70">
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
                                      </div>
                                      <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="ti-pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link !text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    
@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- HRM Dashboard JS -->
        @vite('resources/assets/js/hrm-dashboard.js')
        

@endsection