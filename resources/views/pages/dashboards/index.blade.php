@extends('layouts.master')

@section('styles')

          
@endsection

@section('content')

                  <!-- Start::page-header -->
                  <div class="md:flex block items-center justify-between my-[1.5rem] page-header-breadcrumb">
                    <div>
                      <p class="font-semibold text-[1.125rem] text-defaulttextcolor !mb-0 ">Welcome back, Json Taylor !</p>
                      <p class="font-normal text-[#8c9097] text-[0.813rem]">Track your sales activity, leads and deals here.</p>
                    </div>
                    <div class="btn-list md:mt-0 mt-2">
                      <button type="button"
                        class="ti-btn bg-primary text-white btn-wave !font-medium !me-[0.375rem] !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
                        <i class="ri-filter-3-fill  inline-block"></i>Filters
                      </button>
                      <button type="button"
                        class="ti-btn ti-btn-outline-secondary btn-wave !font-medium  !me-[0.375rem]  !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
                        <i class="ri-upload-cloud-line  inline-block"></i>Export
                      </button>
                    </div>
                  </div>
                  <!-- End::page-header -->

                  <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-9 xl:col-span-12  col-span-12">
                      <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-4 xl:col-span-4  col-span-12">
                          <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box crm-highlight-card">
                              <div class="box-body">
                                <div class="flex items-center justify-between">
                                  <div>
                                    <div class="font-semibold text-[1.125rem] text-white mb-2">Your target is incomplete</div>
                                    <span class="block text-[0.75rem] text-white"><span class="opacity-[0.7]">You have
                                        completed</span>
                                      <span class="font-semibold text-warning">48%</span> <span class="opacity-[0.7]">of the given
                                        target, you can also check your status</span>.</span>
                                    <span class="block font-semibold mt-[0.125rem]"><a class="text-white text-[0.813rem]"
                                        href="javascript:void(0);"><u>Click
                                          here</u></a></span>
                                  </div>
                                  <div>
                                    <div id="crm-main"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box">
                              <div class="box-header flex justify-between">
                                <div class="box-title">
                                  Top Deals
                                </div>
                                <div class="hs-dropdown ti-dropdown">
                                  <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem]  !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                    aria-expanded="false">
                                    <i class="fe fe-more-vertical text-[0.8rem]"></i>
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
                              <div class="box-body">
                                <ul class="list-none crm-top-deals mb-0">
                                  <li class="mb-[0.9rem]">
                                    <div class="flex items-start flex-wrap">
                                      <div class="me-2">
                                        <span class=" inline-flex items-center justify-center">
                                          <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt=""
                                            class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                        </span>
                                      </div>
                                      <div class="flex-grow">
                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">Michael Jordan
                                        </p>
                                        <p class="text-[#8c9097] text-[0.75rem]">michael.jordan@example.com</p>
                                      </div>
                                      <div class="font-semibold text-[0.9375rem] ">$2,893</div>
                                    </div>
                                  </li>
                                  <li class="mb-[0.9rem]">
                                    <div class="flex items-start flex-wrap">
                                      <div class="me-2">
                                        <span
                                          class="inline-flex items-center justify-center !w-[1.75rem] !h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full text-warning  bg-warning/10 font-semibold">
                                          EK
                                        </span>
                                      </div>
                                      <div class="flex-grow">
                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">Emigo Kiaren</p>
                                        <p class="text-[#8c9097] text-[0.75rem]">emigo.kiaren@gmail.com</p>
                                      </div>
                                      <div class="font-semibold text-[0.9375rem] ">$4,289</div>
                                    </div>
                                  </li>
                                  <li class="mb-[0.9rem]">
                                    <div class="flex items-top flex-wrap">
                                      <div class="me-2">
                                        <span class="inline-flex items-center justify-center">
                                          <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt=""
                                            class="!w-[1.75rem] !h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                        </span>
                                      </div>
                                      <div class="flex-grow">
                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">Randy Origoan
                                        </p>
                                        <p class="text-[#8c9097] text-[0.75rem]">randy.origoan@gmail.com</p>
                                      </div>
                                      <div class="font-semibold text-[0.9375rem] ">$6,347</div>
                                    </div>
                                  </li>
                                  <li class="mb-[0.9rem]">
                                    <div class="flex items-top flex-wrap">
                                      <div class="me-2">
                                        <span
                                          class="inline-flex items-center justify-center !w-[1.75rem] !h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full text-success bg-success/10 font-semibold">
                                          GP
                                        </span>
                                      </div>
                                      <div class="flex-grow">
                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">George Pieterson
                                        </p>
                                        <p class="text-[#8c9097] text-[0.75rem]">george.pieterson@gmail.com</p>
                                      </div>
                                      <div class="font-semibold text-[0.9375rem] ">$3,894</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="flex items-top flex-wrap">
                                      <div class="me-2">
                                        <span
                                          class="inline-flex items-center justify-center !w-[1.75rem] !h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full text-primary bg-primary/10 font-semibold">
                                          KA
                                        </span>
                                      </div>
                                      <div class="flex-grow">
                                        <p class="font-semibold mb-[1.4px]  text-[0.813rem]">Kiara Advain</p>
                                        <p class="text-[#8c9097] text-[0.75rem]">kiaraadvain214@gmail.com</p>
                                      </div>
                                      <div class="font-semibold text-[0.9375rem] ">$2,679</div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                            <div class="box">
                              <div class="box-header justify-between">
                                <div class="box-title">Profit Earned</div>
                                <div class="hs-dropdown ti-dropdown">
                                  <a href="javascript:void(0);" class="px-2 font-normal text-[0.75rem] text-[#8c9097]"
                                    aria-expanded="false">
                                    View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                  </a>
                                  <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">Today</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">This Week</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                        href="javascript:void(0);">Last Week</a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="box-body !py-0 !ps-0">
                                <div id="crm-profits-earned"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="xxl:col-span-8  xl:col-span-8  col-span-12">
                          <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                              <div class="box overflow-hidden">
                                <div class="box-body">
                                  <div class="flex items-top justify-between">
                                    <div>
                                      <span
                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-primary">
                                        <i class="ti ti-users text-[1rem] text-white"></i>
                                      </span>
                                    </div>
                                    <div class="flex-grow ms-4">
                                      <div class="flex items-center justify-between flex-wrap">
                                        <div>
                                          <p class="text-[#8c9097] text-[0.813rem] mb-0">Total Customers</p>
                                          <h4 class="font-semibold  text-[1.5rem] !mb-2 ">1,02,890</h4>
                                        </div>
                                        <div id="crm-total-customers"></div>
                                      </div>
                                      <div class="flex items-center justify-between !mt-1">
                                        <div>
                                          <a class="text-primary text-[0.813rem]" href="javascript:void(0);">View All<i
                                              class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                        </div>
                                        <div class="text-end">
                                          <p class="mb-0 text-success text-[0.813rem] font-semibold">+40%</p>
                                          <p class="text-[#8c9097] opacity-[0.7] text-[0.6875rem]">this month</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                              <div class="box overflow-hidden">
                                <div class="box-body">
                                  <div class="flex items-top justify-between">
                                    <div>
                                      <span
                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-secondary">
                                        <i class="ti ti-wallet text-[1rem] text-white"></i>
                                      </span>
                                    </div>
                                    <div class="flex-grow ms-4">
                                      <div class="flex items-center justify-between flex-wrap">
                                        <div>
                                          <p class="text-[#8c9097] text-[0.813rem] mb-0">Total Revenue</p>
                                          <h4 class="font-semibold text-[1.5rem] !mb-2 ">$56,562</h4>
                                        </div>
                                        <div id="crm-total-revenue"></div>
                                      </div>
                                      <div class="flex items-center justify-between mt-1">
                                        <div>
                                          <a class="text-secondary text-[0.813rem]" href="javascript:void(0);">View All<i
                                              class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                        </div>
                                        <div class="text-end">
                                          <p class="mb-0 text-success text-[0.813rem] font-semibold">+25%</p>
                                          <p class="text-[#8c9097] opacity-[0.7] text-[0.6875rem]">this month</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                              <div class="box overflow-hidden">
                                <div class="box-body">
                                  <div class="flex items-top justify-between">
                                    <div>
                                      <span
                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-success">
                                        <i class="ti ti-wave-square text-[1rem] text-white"></i>
                                      </span>
                                    </div>
                                    <div class="flex-grow ms-4">
                                      <div class="flex items-center justify-between flex-wrap">
                                        <div>
                                          <p class="text-[#8c9097] text-[0.813rem] mb-0">Conversion Ratio</p>
                                          <h4 class="font-semibold text-[1.5rem] !mb-2 ">12.08%</h4>
                                        </div>
                                        <div id="crm-conversion-ratio"></div>
                                      </div>
                                      <div class="flex items-center justify-between mt-1">
                                        <div>
                                          <a class="text-success text-[0.813rem]" href="javascript:void(0);">View All<i
                                              class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                        </div>
                                        <div class="text-end">
                                          <p class="mb-0 text-danger text-[0.813rem] font-semibold">-12%</p>
                                          <p class="text-[#8c9097] opacity-[0.7] text-[0.6875rem]">this month</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                              <div class="box overflow-hidden">
                                <div class="box-body">
                                  <div class="flex items-top justify-between">
                                    <div>
                                      <span
                                        class="!text-[0.8rem]  !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !rounded-full inline-flex items-center justify-center bg-warning">
                                        <i class="ti ti-briefcase text-[1rem] text-white"></i>
                                      </span>
                                    </div>
                                    <div class="flex-grow ms-4">
                                      <div class="flex items-center justify-between flex-wrap">
                                        <div>
                                          <p class="text-[#8c9097] text-[0.813rem] mb-0">Total Deals</p>
                                          <h4 class="font-semibold text-[1.5rem] !mb-2 ">2,543</h4>
                                        </div>
                                        <div id="crm-total-deals"></div>
                                      </div>
                                      <div class="flex items-center justify-between mt-1">
                                        <div>
                                          <a class="text-warning text-[0.813rem]" href="javascript:void(0);">View All<i
                                              class="ti ti-arrow-narrow-right ms-2 font-semibold inline-block"></i></a>
                                        </div>
                                        <div class="text-end">
                                          <p class="mb-0 text-success text-[0.813rem] font-semibold">+19%</p>
                                          <p class="text-[#8c9097]  opacity-[0.7] text-[0.6875rem]">this month</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                              <div class="box">
                                <div class="box-header !gap-0 !m-0 justify-between">
                                  <div class="box-title">
                                    Revenue Analytics
                                  </div>
                                  <div class="hs-dropdown ti-dropdown">
                                    <a href="javascript:void(0);" class="text-[0.75rem] px-2 font-normal text-[#8c9097]"
                                      aria-expanded="false">
                                      View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                    </a>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                          href="javascript:void(0);">Today</a></li>
                                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                          href="javascript:void(0);">This Week</a></li>
                                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                          href="javascript:void(0);">Last Week</a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="box-body !py-5">
                                  <div id="crm-revenue-analytics"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                          <div class="box custom-card">
                            <div class="box-header justify-between">
                              <div class="box-title">
                                Deals Statistics
                              </div>
                              <div class="flex flex-wrap gap-2">
                                <div>
                                  <input class="ti-form-control form-control-sm" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example">
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
                              <div class="overflow-x-auto">
                                <table class="table min-w-full whitespace-nowrap table-hover border table-bordered">
                                  <thead>
                                    <tr class="border border-inherit border-solid">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel1" value="" aria-label="..."></th>
                                      <th scope="col" class="!text-start !text-[0.85rem] min-w-[200px]">Sales Rep</th>
                                      <th scope="col" class="!text-start !text-[0.85rem]">Category</th>
                                      <th scope="col" class="!text-start !text-[0.85rem]">Mail</th>
                                      <th scope="col" class="!text-start !text-[0.85rem]">Location</th>
                                      <th scope="col" class="!text-start !text-[0.85rem]">Date</th>
                                      <th scope="col" class="!text-start !text-[0.85rem]">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel2" value="" aria-label="..."></th>
                                      <td>
                                        <div class="flex items-center font-semibold">
                                          <span class="!me-2 inline-flex justify-center items-center">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"
                                              class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                          </span>Mayor Kelly
                                        </div>
                                      </td>
                                      <td>Manufacture</td>
                                      <td>mayorkelly@gmail.com</td>
                                      <td>
                                        <span
                                          class="inline-flex text-info !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-info/10">Germany</span>
                                      </td>
                                      <td>Sep 15 - Oct 12, 2023</td>
                                      <td>
                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                              class="ri-download-2-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                              class="ri-edit-line"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel13" value="" aria-label="..." checked></th>
                                      <td>
                                        <div class="flex items-center font-semibold">
                                          <span class="inline-flex  justify-center items-center me-2">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"
                                              class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                          </span>Andrew Garfield
                                        </div>
                                      </td>
                                      <td>Development</td>
                                      <td>andrewgarfield@gmail.com</td>
                                      <td>
                                        <span
                                          class="inline-flex text-primary !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-primary/10">Canada</span>
                                      </td>
                                      <td>Apr 10 - Dec 12, 2023</td>
                                      <td>
                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                              class="ri-download-2-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                              class="ri-edit-line"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel4" value="" aria-label="..."></th>
                                      <td>
                                        <div class="flex items-center font-semibold">
                                          <span class="inline-flex  justify-center items-center me-2">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"
                                              class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                          </span>Simon Cowel
                                        </div>
                                      </td>
                                      <td>Service</td>
                                      <td>simoncowel234@gmail.com</td>
                                      <td>
                                        <span
                                          class="inline-flex text-danger !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-danger/10">Europe</span>
                                      </td>
                                      <td>Sep 15 - Oct 12, 2023</td>
                                      <td>
                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                              class="ri-download-2-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                              class="ri-edit-line"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel5" value="" aria-label="..." checked></th>
                                      <td>
                                        <div class="flex items-center font-semibold">
                                          <span class="inline-flex justify-center items-center me-2">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"
                                              class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                          </span>Mirinda Hers
                                        </div>
                                      </td>
                                      <td>Marketing</td>
                                      <td>mirindahers@gmail.com</td>
                                      <td>
                                        <span
                                          class="inline-flex text-warning !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-warning/10">USA</span>
                                      </td>
                                      <td>Apr 14 - Dec 14, 2023</td>
                                      <td>
                                        <div class="flex flex-row items-center !gap-2  text-[0.9375rem]">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                              class="ri-download-2-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                              class="ri-edit-line"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                      <th scope="row" class="!ps-4 !pe-5"><input class="form-check-input" type="checkbox"
                                          id="checkboxNoLabel3" value="" aria-label="..." checked></th>
                                      <td>
                                        <div class="flex items-center font-semibold">
                                          <span class="inline-flex  justify-center items-center me-2">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img"
                                              class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                                          </span>Jacob Smith
                                        </div>
                                      </td>
                                      <td>Social Plataform</td>
                                      <td>jacobsmith@gmail.com</td>
                                      <td>
                                        <span
                                          class="inline-flex text-success !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-success/10">Singapore</span>
                                      </td>
                                      <td>Feb 25 - Nov 25, 2023</td>
                                      <td>
                                        <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !m-0 !h-[1.75rem] !gap-0 !w-[1.75rem] text-[0.8rem] bg-success/10 text-success hover:bg-success hover:text-white hover:border-success"><i
                                              class="ri-download-2-line"></i></a>
                                          <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-wave !m-0 !h-[1.75rem] !gap-0 !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary"><i
                                              class="ri-edit-line"></i></a>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="box-footer">
                              <div class="sm:flex items-center">
                                <div class="text-defaulttextcolor">
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
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                      <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-12 xl:col-span-12  col-span-12">
                          <div class="box">
                            <div class="box-header justify-between">
                              <div class="box-title">
                                Leads By Source
                              </div>
                              <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                  class="flex items-center justify-center w-[1.75rem] h-[1.75rem] ! !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                  aria-expanded="false">
                                  <i class="fe fe-more-vertical text-[0.8rem]"></i>
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
                            <div class="box-body overflow-hidden">
                              <div class="leads-source-chart flex items-center justify-center">
                                <canvas id="leads-source" class="chartjs-chart w-full"></canvas>
                                <div class="lead-source-value ">
                                  <span class="block text-[0.875rem] ">Total</span>
                                  <span class="block text-[1.5625rem] font-bold">4,145</span>
                                </div>
                              </div>
                            </div>
                            <div class="grid grid-cols-4 border-t border-dashed">
                              <div class="col !p-0">
                                <div class="!ps-4 p-[0.95rem] text-center border-e border-dashed">
                                  <span class="text-[#8c9097] text-[0.75rem] mb-1 crm-lead-legend mobile inline-block">Mobile
                                  </span>
                                  <div><span class="text-[1rem]  font-semibold">1,624</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col !p-0">
                                <div class="p-[0.95rem] text-center border-e border-dashed">
                                  <span class="text-[#8c9097] text-[0.75rem] mb-1 crm-lead-legend desktop inline-block">Desktop
                                  </span>
                                  <div><span class="text-[1rem]  font-semibold">1,267</span></div>
                                </div>
                              </div>
                              <div class="col !p-0">
                                <div class="p-[0.95rem] text-center border-e border-dashed">
                                  <span class="text-[#8c9097] text-[0.75rem] mb-1 crm-lead-legend laptop inline-block">Laptop
                                  </span>
                                  <div><span class="text-[1rem]  font-semibold">1,153</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col !p-0">
                                <div class="!pe-4 p-[0.95rem] text-center">
                                  <span class="text-[#8c9097] text-[0.75rem] mb-1 crm-lead-legend tablet inline-block">Tablet
                                  </span>
                                  <div><span class="text-[1rem]  font-semibold">679</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6  col-span-12">
                          <div class="box">
                            <div class="box-header justify-between">
                              <div class="box-title">
                                Deals Status
                              </div>
                              <div class="hs-dropdown ti-dropdown">
                                <a href="javascript:void(0);" class="text-[0.75rem] px-2 font-normal text-[#8c9097]"
                                  aria-expanded="false">
                                  View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Today</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">This Week</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Last Week</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-body">
                              <div class="flex items-center mb-[0.8rem]">
                                <h4 class="font-bold mb-0 text-[1.5rem] ">4,289</h4>
                                <div class="ms-2">
                                  <span
                                    class="py-[0.18rem] px-[0.45rem] rounded-sm text-success !font-medium !text-[0.75em] bg-success/10">1.02<i
                                      class="ri-arrow-up-s-fill align-mmiddle ms-1"></i></span>
                                  <span class="text-[#8c9097] text-[0.813rem] ms-1">compared to last week</span>
                                </div>
                              </div>

                              <div class="flex w-full h-[0.3125rem] mb-6 rounded-full overflow-hidden">
                                <div class="flex flex-col justify-center rounded-s-[0.625rem] overflow-hidden bg-primary w-[21%]" >
                                </div>
                                <div class="flex flex-col justify-center rounded-none overflow-hidden bg-info w-[26%]" >
                                </div>
                                <div class="flex flex-col justify-center rounded-none overflow-hidden bg-warning w-[35%]" >
                                </div>
                                <div class="flex flex-col justify-center rounded-e-[0.625rem] overflow-hidden bg-success w-[18%]" >
                                </div>
                              </div>
                              <ul class="list-none mb-0 pt-2 crm-deals-status">
                                <li class="primary">
                                  <div class="flex items-center text-[0.813rem]  justify-between">
                                    <div>Successful Deals</div>
                                    <div class="text-[0.75rem] text-[#8c9097]">987 deals</div>
                                  </div>
                                </li>
                                <li class="info">
                                  <div class="flex items-center text-[0.813rem]  justify-between">
                                    <div>Pending Deals</div>
                                    <div class="text-[0.75rem] text-[#8c9097]">1,073 deals</div>
                                  </div>
                                </li>
                                <li class="warning">
                                  <div class="flex items-center text-[0.813rem]  justify-between">
                                    <div>Rejected Deals</div>
                                    <div class="text-[0.75rem] text-[#8c9097]">1,674 deals</div>
                                  </div>
                                </li>
                                <li class="success">
                                  <div class="flex items-center text-[0.813rem]  justify-between">
                                    <div>Upcoming Deals</div>
                                    <div class="text-[0.75rem] text-[#8c9097]">921 deals</div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="xxl:col-span-12 xl:col-span-6  col-span-12">
                          <div class="box">
                            <div class="box-header justify-between">
                              <div class="box-title">
                                Recent Activity
                              </div>
                              <div class="hs-dropdown ti-dropdown">
                                <a href="javascript:void(0);" class="text-[0.75rem] px-2 font-normal text-[#8c9097]"
                                  aria-expanded="false">
                                  View All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                </a>
                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Today</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">This Week</a></li>
                                  <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                      href="javascript:void(0);">Last Week</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="box-body">
                              <div>
                                <ul class="list-none mb-0 crm-recent-activity">
                                  <li class="crm-recent-activity-content">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] inline-flex items-center justify-center font-medium leading-[1.25rem] text-[0.65rem] text-primary bg-primary/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content text-defaultsize">
                                        <span class="font-semibold ">Update of calendar events
                                          &amp;</span><span><a href="javascript:void(0);" class="text-primary font-semibold">
                                            Added new events in next week.</a></span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">4:45PM</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content">
                                    <div class="flex items-start  text-defaultsize">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-secondary bg-secondary/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>New theme for <span class="font-semibold">Spruko Website</span> completed</span>
                                        <span class="block text-[0.75rem] text-[#8c9097]">Lorem ipsum, dolor sit amet.</span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">3 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-success bg-success/10 rounded-full">
                                          <i class="bi bi-circle-fill  text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>Created a <span class="text-success font-semibold">New Task</span> today <span
                                            class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] text-[0.65rem] inline-flex items-center justify-center font-medium bg-purple/10 rounded-full ms-1"><i
                                              class="ri-add-fill text-purple text-[0.75rem]"></i></span></span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">22 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-pink bg-pink/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>New member <span
                                            class="py-[0.2rem] px-[0.45rem] font-semibold rounded-sm text-pink text-[0.75em] bg-pink/10">@andreas
                                            gurrero</span> added today to AI Summit.</span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">Today</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-warning bg-warning/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>32 New people joined summit.</span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">22 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-info bg-info/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>Neon Tarly added <span class="text-info font-semibold">Robert Bright</span> to AI
                                          summit project.</span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">12 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-[#232323] bg-[#232323]/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>Replied to new support request <i
                                            class="ri-checkbox-circle-line text-success text-[1rem] align-middle"></i></span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">4 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="crm-recent-activity-content  text-defaultsize">
                                    <div class="flex items-start">
                                      <div class="me-4">
                                        <span
                                          class="w-[1.25rem] h-[1.25rem] leading-[1.25rem] inline-flex items-center justify-center font-medium text-[0.65rem] text-purple bg-purple/10 rounded-full">
                                          <i class="bi bi-circle-fill text-[0.5rem]"></i>
                                        </span>
                                      </div>
                                      <div class="crm-timeline-content">
                                        <span>Completed documentation of <a href="javascript:void(0);"
                                            class="text-purple underline font-semibold">AI Summit.</a></span>
                                      </div>
                                      <div class="flex-grow text-end">
                                        <span class="block text-[#8c9097] text-[0.6875rem] opacity-[0.7]">4 hrs</span>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        
          
@endsection

@section('scripts')

        <!-- JSVector Maps JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Chartjs Chart JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- CRM-Dashboard -->
        @vite('resources/assets/js/crm-dashboard.js')


@endsection