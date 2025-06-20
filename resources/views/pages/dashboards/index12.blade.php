@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Personal</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Dashboards
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Personal
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <div class="grid grid-cols-12 gap-x-6">
                          <div class="xxl:col-span-9 xl:col-span-12 col-span-12">
                              <div class="grid grid-cols-12 gap-x-6">
                                  <div class="xl:col-span-7 col-span-12">
                                      <div class="grid grid-cols-12 gap-x-6">
                                          <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                              <div class="box overflow-hidden">
                                                  <div class="box-body !p-0">
                                                      <div class="p-6">
                                                          <div class="flex items-center justify-between">
                                                              <div class="mb-4">
                                                                  <span class="block font-semibold text-[0.9375rem]">Water Tracking</span>
                                                                  <span class="text-[#8c9097] text-[0.75rem] block">87 Points</span>
                                                              </div>
                                                              <div>
                                                                  <span class="avatar bg-primary text-white">
                                                                      <i class="bi bi-droplet text-[1.125rem]"></i>
                                                                  </span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <p class="mb-0">
                                                                  <span class="text-[1.5rem] font-semibold">8.1</span>
                                                                  <span class="text-[#8c9097] text-[0.75rem] ms-1">Lt</span>
                                                              </p>
                                                              <span class="text-[#8c9097]">0.9 Lt more to reach goal</span>
                                                          </div>
                                                      </div>
                                                      <div id="waterTrack"></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                              <div class="box overflow-hidden">
                                                  <div class="box-body !p-0">
                                                      <div class="p-6">
                                                          <div class="flex items-center justify-between">
                                                              <div class="mb-4">
                                                                  <span class="block font-semibold text-[0.9375rem]">Sleep Tracking</span>
                                                                  <span class="text-[#8c9097] text-[0.75rem] block">54 Points</span>
                                                              </div>
                                                              <div>
                                                                  <span class="avatar bg-success text-white">
                                                                      <i class="bi bi-alarm text-[1.125rem]"></i>
                                                                  </span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <p class="mb-0">
                                                                  <span class="text-[1.5rem] font-semibold">5.2</span>
                                                                  <span class="text-[#8c9097] text-[0.75rem] ms-1">Hrs</span>
                                                              </p>
                                                              <span class="text-[#8c9097]">2.8 Hrs more to reach goal</span>
                                                          </div>
                                                      </div>
                                                      <div id="sleepTrack"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-5 col-span-12">
                                      <div class="box">
                                          <div class="box-body !p-0">
                                              <div class="flex flex-wrap items-center border-b border-dashed">
                                                  <div class="px-6 py-4 flex-grow border-e border-dashed">
                                                      <div class="flex items-center justify-between">
                                                          <p class="mb-0 flex-grow text-[0.875rem] font-semibold">Instagram</p>
                                                          <div class="ms-0">
                                                              <span class="avatar bg-light !text-danger"><i class="bi bi-instagram text-[1rem]"></i></span>
                                                          </div>
                                                      </div>
                                                      <p class="mb-2 text-[1.5rem] font-semibold">121K</p>
                                                      <div class="flex-between">
                                                          <span class="text-[#8c9097] text-[0.75rem]">6 min ago</span>
                                                          <span class="text-danger"><i class="bi bi-arrow-down-right me-1 text-[0.625rem]"></i>1.5%</span>
                                                      </div>
                                                  </div>
                                                  <div class="px-6 py-4 flex-grow border-b border-dashed">
                                                      <div class="flex items-center justify-between">
                                                          <p class="mb-0 flex-grow text-[0.875rem] font-semibold">Facebook</p>
                                                          <div class="ms-2">
                                                              <span class="avatar bg-light !text-warning"><i class="bi bi-facebook text-[1rem]"></i></span>
                                                          </div>
                                                      </div>
                                                      <p class="mb-2 text-[1.5rem] font-semibold">2.1K</p>
                                                      <div class="flex-between">
                                                          <span class="text-[#8c9097] text-[0.75rem]">1 hr ago</span>
                                                          <span class="text-warning"><i class="bi bi-arrow-down-right me-1 text-[0.625rem]"></i>1.9%</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="flex flex-wrap items-center">
                                                  <div class="px-6 py-4 flex-grow border-e border-dashed">
                                                      <div class="flex items-center justify-between">
                                                          <p class="mb-0 flex-grow text-[0.875rem] font-semibold">Youtube</p>
                                                          <div class="ms-1">
                                                              <span class="avatar bg-light !text-info"><i class="bi bi-youtube text-[1rem]"></i></span>
                                                          </div>
                                                      </div>
                                                      <p class="mb-2 text-[1.5rem] font-semibold">1.1M</p>
                                                      <div class="flex-between">
                                                          <span class="text-[#8c9097] text-[0.75rem]">1 day ago</span>
                                                          <span class="text-info"><i class="bi bi-arrow-up-right me-1 text-[0.625rem]"></i>1.9%</span>
                                                      </div>
                                                  </div>
                                                  <div class="px-6 py-4 flex-grow border-dashed">
                                                      <div class="flex items-center justify-between">
                                                          <p class="mb-0 flex-grow text-[0.875rem] font-semibold">Twitter</p>
                                                          <div class="ms-2">
                                                              <span class="avatar bg-light !text-purple"><i class="bi bi-twitter text-[1rem]"></i></span>
                                                          </div>
                                                      </div>
                                                      <p class="mb-2 text-[1.5rem] font-semibold">2.1K</p>
                                                      <div class="flex-between">
                                                          <span class="text-[#8c9097] text-[0.75rem]">1 week ago</span>
                                                          <span class="text-purple"><i class="bi bi-arrow-up-right me-1 text-[0.625rem]"></i>1.9%</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-4 col-span-12">
                                      <div class="grid grid-cols-12 gap-x-6">
                                          <div class="xl:col-span-12 col-span-12">
                                              <div class="box">
                                                  <div class="box-body">
                                                      <div class="flex justify-between mb-6">
                                                          <div class="me-1">
                                                              <h6 class="text-[0.9375rem] font-medium mb-1">Primary Account</h6>
                                                              <a href="javascript:void(0);" class="text-[0.75rem] text-primary opacity-[8]">Change<i class="bi bi-box-arrow-up-right text-[0.6875rem] ms-1"></i></a>
                                                          </div>
                                                          <div class="min-w-fit">
                                                              <div class="avatar bg-primary/10 !text-primary">
                                                                  <i class="ri-paypal-fill text-[1.125rem]"></i>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <p class="text-[1.5rem] font-semibold mb-4">$1,29,389.00</p>
                                                      <p class="mb-1 text-[0.875rem]">Sarah Jahn SP</p>
                                                      <div class="flex justify-between text-[#8c9097]">
                                                          <span>XXXX XXXX XXXX 1116</span>
                                                          <span>12/24</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="xl:col-span-12 col-span-12">
                                              <div class="box">
                                                  <div class="box-header justify-between">
                                                      <div class="box-title">Quick Transfer</div>
                                                      <a href="javascript:void(0);" class="text-primary">View History<i class="bi bi-box-arrow-up-right text-[0.6875rem] ms-2"></i></a>
                                                  </div>
                                                  <div class="box-body">
                                                      <div class="avatar-list-stacked mb-6">
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                          </span>
                                                          <a aria-label="anchor" class="avatar bg-light !text-defaulttextcolor avatar-rounded" href="javascript:void(0);">
                                                              <i class="ri-arrow-right-s-line text-[1.125rem]"></i>
                                                          </a>
                                                      </div>
                                                      <div class="mt-2">
                                                          <div class="mt-2">
                                                              <label class="text-[#8c9097] mb-1">Send / Receive</label>
                                                              <div class="input-group inline-flex">
                                                                  <span class="input-group-text  !border-e-0 ">Send To</span>
                                                                  <input type="text" value="11167731611" aria-label="First name" class="form-control !border-x-0 border-defaultborder">
                                                                  <button class="ti-btn ti-btn-light !mb-0" type="button">Check</button>
                                                              </div>
                                                              <label class="text-success text-[0.75rem]">Say Hii</label>
                                                          </div>
                                                          <div class="input-group mt-4 !flex-nowrap">
                                                              <span class="input-group-text !border-e-0">Amount</span>
                                                              <input type="text" value="2000" aria-label="First name" class="ti-form-control flex-auto w-full block">
                                                          </div>
                                                      </div>
                                                      <div class="flex gap-4 mt-6">
                                                          <button type="button" aria-label="button" class="ti-btn ti-btn-icon  ti-btn-primary"><i class="bi bi-arrow-down-up"></i></button>
                                                          <button type="button" class="ti-btn bg-primary text-white flex-grow">Proceed To Pay</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-8 col-span-12">
                                      <div class="grid grid-cols-12 gap-x-6">
                                          <div class="xl:col-span-12 col-span-12">
                                              <div class="box">
                                                  <div class="box-header">
                                                      <div class="box-title">
                                                          Discover
                                                      </div>
                                                  </div>
                                                  <div class="box-body">
                                                      <div class="grid grid-cols-12 md:gap-y-0 gap-y-4">
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-info !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-cash-coin text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Bills</a>
                                                          </div>
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-primary !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-shop-window text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Shopping</a>
                                                          </div>
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-warning !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-compass text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Travel</a>
                                                          </div>
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-secondary !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-gift text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Food</a>
                                                          </div>
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-danger !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-currency-bitcoin text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Stocks</a>
                                                          </div>
                                                          <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-4 text-center">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-light !border-0 !px-6 !py-4 leading-none rounded">
                                                                  <i class="bi bi-three-dots text-[1.375rem]"></i>
                                                              </a>
                                                              <a href="javascript:void(0);" class="block pt-2 text-[#8c9097] font-semibold">Others</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="xl:col-span-6 col-span-12">
                                              <div class="box">
                                                  <div class="box-header justify-between">
                                                      <div class="box-title">
                                                          Upcoming Events
                                                      </div>
                                                      <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light">View All</button>
                                                  </div>
                                                  <div class="box-body">
                                                      <ul class="list-none mb-0 personal-upcoming-events">
                                                          <li>
                                                              <div class="flex items-center">
                                                                  <div class="me-2">
                                                                      <span class="avatar avatar-rounded bg-light">
                                                                          <i class="bi bi-calendar2-heart text-[1rem] text-primary"></i>
                                                                      </span>
                                                                  </div>
                                                                  <div class="flex-grow">
                                                                      <span>Meeting with <span class="text-primary font-semibold">Umar Xai</span></span>
                                                                      <span class="block text-[#8c9097] text-[0.75rem]">2 Hours</span>
                                                                  </div>
                                                                  <div>
                                                                      <span class="badge bg-primary/10 text-primary whitespace-nowrap">11-06-2023</span>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="flex items-center">
                                                                  <div class="me-2">
                                                                      <span class="avatar avatar-rounded">
                                                                          <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                      </span>
                                                                  </div>
                                                                  <div class="flex-grow">
                                                                      <span><span class="text-primary font-semibold">Shin Map</span> Birthday Party</span>
                                                                      <span class="block text-[#8c9097] text-[0.75rem]">5 Hours</span>
                                                                  </div>
                                                                  <div>
                                                                      <span class="badge bg-success/10 text-success whitespace-nowrap">15-06-2023</span>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="flex items-center">
                                                                  <div class="me-2">
                                                                      <span class="avatar avatar-rounded bg-light">
                                                                          <i class="bi bi-compass text-[1rem] text-pink"></i>
                                                                      </span>
                                                                  </div>
                                                                  <div class="flex-grow">
                                                                      <span>Holiday Trip To Italy</span>
                                                                      <span class="block text-[#8c9097] text-[0.75rem]">1 Week</span>
                                                                  </div>
                                                                  <div>
                                                                      <span class="badge bg-danger/10 text-danger whitespace-nowrap">20-06-2023</span>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="flex items-center">
                                                                  <div class="me-2">
                                                                      <span class="avatar avatar-rounded bg-light">
                                                                          <i class="bi bi-balloon-heart text-[1rem] text-success"></i>
                                                                      </span>
                                                                  </div>
                                                                  <div class="flex-grow">
                                                                      <span>Wedding Anniversary</span>
                                                                      <span class="block text-[#8c9097] text-[0.75rem]">1 Day</span>
                                                                  </div>
                                                                  <div>
                                                                      <span class="badge bg-secondary/10 text-secondary whitespace-nowrap">24-07-2023</span>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="flex items-center">
                                                                  <div class="me-2">
                                                                      <span class="avatar avatar-rounded">
                                                                          <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                      </span>
                                                                  </div>
                                                                  <div class="flex-grow">
                                                                      <span>Meeting with <span class="text-primary font-semibold">Irav Ert</span></span>
                                                                      <span class="block text-[#8c9097] text-[0.75rem]">45 Minutes</span>
                                                                  </div>
                                                                  <div>
                                                                      <span class="badge bg-warning/10 text-warning whitespace-nowrap">15-06-2023</span>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="xl:col-span-6 col-span-12">
                                              <div class="box">
                                                  <div class="box-header justify-between">
                                                      <div class="box-title">
                                                          Recent Messages
                                                      </div>
                                                      <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">View All</button>
                                                  </div>
                                                  <div class="box-body">
                                                      <div class="avatar-list-stacked mb-6">
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                          </span>
                                                          <span class="avatar avatar-rounded">
                                                              <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                          </span>
                                                          <a aria-label="anchor" class="avatar bg-light !text-defaulttextcolor avatar-rounded" href="javascript:void(0);">
                                                              <i class="ri-arrow-right-s-line text-[1.125rem]"></i>
                                                          </a>
                                                      </div>
                                                      <div class="flex items-center justify-between">
                                                          <div class="font-semibold">Messages</div>
                                                          <div><i class="ri-check-double-line me-1 align-middle text-[#8c9097] inline-flex"></i>Mark as read</div>
                                                      </div>
                                                      <div class="mt-6">
                                                          <ul class="list-none mb-0 personal-messages-list">
                                                              <li>
                                                                  <div class="flex flex-wrap items-center">
                                                                      <div class="me-2">
                                                                          <span class="avatar avatar-rounded">
                                                                              <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="flex-grow">
                                                                          <span class="font-semibold block">Elin Misk</span>
                                                                          <span class="text-[0.75rem] text-[#8c9097] block text-truncate message">Hello there! How are you doing? Call me when...</span>
                                                                      </div>
                                                                      <div class="text-end">
                                                                          <span class="block text-[#8c9097] text-[0.75rem]">2 min</span>
                                                                          <span class="badge bg-primary !rounded-full text-white">2</span>
                                                                      </div>
                                                                  </div>
                                                              </li>
                                                              <li>
                                                                  <div class="flex flex-wrap items-center">
                                                                      <div class="me-2">
                                                                          <span class="avatar avatar-rounded">
                                                                              <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="flex-grow">
                                                                          <span class="font-semibold block">Shakira Shen</span>
                                                                          <span class="text-[0.75rem] text-[#8c9097] block text-truncate message">I would like to discuss about that assets...</span>
                                                                      </div>
                                                                      <div class="text-end">
                                                                          <span class="block text-[#8c9097] text-[0.75rem]">9:43Pm</span>
                                                                      </div>
                                                                  </div>
                                                              </li>
                                                              <li>
                                                                  <div class="flex flex-wrap items-center">
                                                                      <div class="me-2">
                                                                          <span class="avatar bg-primary/10 !text-primary avatar-rounded">
                                                                              <i class="ri-user-line text-[1.125rem]"></i>
                                                                          </span>
                                                                      </div>
                                                                      <div class="flex-grow">
                                                                          <span class="font-semibold block">Sebastian</span>
                                                                          <span class="text-[0.75rem] text-[#8c9097] block text-truncate message">Shall we go to the cafe at downtown...</span>
                                                                      </div>
                                                                      <div class="text-end">
                                                                          <span class="block text-[#8c9097] text-[0.75rem]">Yesterday</span>
                                                                          <span class="badge bg-primary !rounded-full text-white">2</span>
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
                          </div>
                          <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                              <div class="grid grid-cols-12 gap-x-6">
                                  <div class="xxl:col-span-12 xl:col-span-4 col-span-12">
                                      <div class="box">
                                          <div class="box-body">
                                              <div class="flex items-start justify-between mb-6">
                                                  <div>
                                                      <span class="block text-[0.9375rem] font-semibold">My Profile</span>
                                                      <span class="block text-[0.75rem] text-[#8c9097]">67% Completed - <a href="javascript:void(0);" class="text-center text-primary">Click Here<i class="bi bi-box-arrow-up-right text-[0.625rem] ms-2 align-middle"></i></a></span>
                                                  </div>
                                                  <div>
                                                      <div class="hs-dropdown ti-dropdown">
                                                          <a aria-label="anchor" href="javascript:void(0);"
                                                            class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
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
                                              </div>
                                              <div class="text-center mb-4">
                                                  <div class="mb-4">
                                                      <span class="avatar avatar-xxl avatar-rounded circle-progress p-1">
                                                          <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                      </span>
                                                  </div>
                                                  <div>
                                                      <h5 class="font-semibold !mb-0 text-[1.25rem]">Json Taylor</h5>
                                                      <p class="text-[.8125rem] text-[#8c9097]">jsontaylor345@gmail.com</p>
                                                  </div>
                                              </div>
                                              <div class=" text-center">
                                                  <a href="{{url('profile')}}" class="ti-btn ti-btn-primary !me-[0.375rem] !font-medium !py-1 !px-2 !text-[0.75rem]">
                                                      Edit Profile
                                                  </a>
                                                  <a href="{{url('profile')}}" class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem]">
                                                      View Profile
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xxl:col-span-12 xl:col-span-4 col-span-12">
                                      <div class="box">
                                          <div class="box-header justify-between">
                                              <div class="box-title">My Goals</div>
                                              <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">View All</button>
                                          </div>
                                          <div class="box-body">
                                              <ul class="list-none personal-goals-list mb-0">
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-rounded bg-secondary/10 !text-secondary">
                                                                  <i class="bi bi-globe2 text-[1.125rem]"></i>
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <div class="flex items-center justify-between mb-2">
                                                                  <span class="block font-semibold">Maldives Trip</span>
                                                                  <span class="block text-secondary">80%</span>
                                                              </div>
                                                              <div class="progress progress-animate progress-xs" >
                                                                  <div class="progress-bar progress-bar-striped !bg-secondary w-[80%]"></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-rounded bg-warning/10 !text-warning">
                                                                  <i class="bi bi-balloon-heart text-[1.125rem]"></i>
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <div class="flex items-center justify-between mb-2">
                                                                  <span class="block font-semibold">Savings For Birthday</span>
                                                                  <span class="block text-warning">90%</span>
                                                              </div>
                                                              <div class="progress progress-animate progress-xs" >
                                                                  <div class="progress-bar progress-bar-striped !bg-warning w-[90%]"></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-rounded bg-primary/10 !text-primary">
                                                                  <i class="bi bi-lightning text-[1.125rem]"></i>
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <div class="flex items-center justify-between mb-2">
                                                                  <span class="block font-semibold">Join Guitar Class</span>
                                                                  <span class="block text-primary">80%</span>
                                                              </div>
                                                              <div class="progress progress-animate progress-xs" >
                                                                  <div class="progress-bar progress-bar-striped bg-primary w-[40%]"></div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xxl:col-span-12 xl:col-span-4 col-span-12">
                                      <div class="box">
                                          <div class="box-header justify-between">
                                              <div class="box-title">
                                                  Favourite Contacts
                                              </div>
                                              <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]">View All</button>
                                          </div>
                                          <div class="box-body">
                                              <ul class="list-none personal-favourite-contacts mb-0">
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar">
                                                                  <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="rounded-md">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <span class="font-semibold block mb-1">Kiara Advain</span>
                                                              <span class="text-[#8c9097] block text-[0.75rem]">+(72)-8765700876</span>
                                                          </div>
                                                          <div>
                                  <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                  <div class="hs-dropdown ti-dropdown">
                                                                  <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-[#8c9097] !text-[0.8rem] !py-1 !px-2  !font-medium"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots text-[0.8rem]"></i>
                                                                  </a>
                                                                  <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Another Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Something Else Here</a></li>
                                                                  </ul>
                                                              </div>
                                </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar">
                                                                  <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" class="rounded-md">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <span class="font-semibold block mb-1">Jason Mama</span>
                                                              <span class="text-[#8c9097] block text-[0.75rem]">+(72)-234226333</span>
                                                          </div>
                                                          <div>
                                  <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                  <div class="hs-dropdown ti-dropdown">
                                                                  <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-[#8c9097] !text-[0.8rem] !py-1 !px-2  !font-medium"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots text-[0.8rem]"></i>
                                                                  </a>
                                                                  <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Another Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Something Else Here</a></li>
                                                                  </ul>
                                                              </div>
                                </div>
                                                      </div>
                                                  </li>
                                                  <li>
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar">
                                                                  <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" class="rounded-md">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <span class="font-semibold block mb-1">Stuart Edward</span>
                                                              <span class="text-[#8c9097] block text-[0.75rem]">+(11)-16743256</span>
                                                          </div>
                                                          <div>
                                  <a aria-label="anchor" href="javascript:void(0);" class="text-danger me-2"><i class="bi bi-heart-fill"></i></a>
                                  <div class="hs-dropdown ti-dropdown">
                                                                  <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-[#8c9097] !text-[0.8rem] !py-1 !px-2  !font-medium"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots text-[0.8rem]"></i>
                                                                  </a>
                                                                  <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Another Action</a></li>
                                                                    <li class="!mb-0"><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                        href="javascript:void(0);">Something Else Here</a></li>
                                                                  </ul>
                                                              </div>
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
        
@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- HRM Dashboard JS -->
        @vite('resources/assets/js/personal-dashboard.js')


@endsection 