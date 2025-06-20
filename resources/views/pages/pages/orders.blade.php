@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Orders</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Ecommerce
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Orders
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <!-- Start::row-1 -->
                      <div class="grid grid-cols-12 gap-x-6">
                          <div class="xl:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-body flex items-center flex-wrap">
                                      <div class="flex-grow">
                                          <span class="mb-0 text-[0.875rem] text-[#8c9097]">Total number of orders placed upto now : <span class="font-semibold text-success">28</span></span>
                                      </div>
                                      <div class="hs-dropdown ti-dropdown">
                                          <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-light sm:!m-0 !mb-3 !gap-0 !font-medium"
                                            aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                          </a>
                                          <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                href="javascript:void(0);">Date</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                href="javascript:void(0);">Price</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                href="javascript:void(0);">Category</a></li>
                                          </ul>
                                        </div>
                                      <div class="flex items-center ms-2" role="search">
                                          <input class="form-control !rounded-sm me-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="ti-btn ti-btn-light !mb-0" type="submit">Search</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header block !justify-start">
                                      <div class="sm:flex block items-center w-full">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Denim Zep.Co Sweat Shirt</span>
                                              </a>
                                              <span class="block text-success">$1,299</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1203</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">13</span>
                                              <span class="font-semibold">Dec</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div><span class="text-[#8c9097] me-2">Status:</span><span class="badge bg-success/10 text-success">Shipped</span></div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header block !justify-start">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Jimmy Lolfiger Jacket</span>
                                              </a>
                                              <span class="block text-success">$499</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-2936</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">25</span>
                                              <span class="font-semibold">Nov</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div>
                                          <span class="text-[#8c9097] me-2">Status:</span>
                                          <span class="badge bg-primary/10 text-primary">Confirmed</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header block !justify-start">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Louie Phillippe Coat</span>
                                              </a>
                                              <span class="block text-success">$1,899</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1855</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-success text-white">Delivered</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block justify-between items-center">
                                      <div class="text-[0.6875rem]">
                                          <span>Delivered on:</span>
                                          <span class="font-semibold">29,Oct 2022 - 12:47PM</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Rate Product<i class="bi bi-star-fill ms-2 text-xs text-warning"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Denim Corp</span>
                                              </a>
                                              <span class="block text-success">$2,499</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1234</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-danger text-white">Cancelled</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer">
                                      <div class="ltr:float-right rtl:float-left">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-light">Buy Now</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Orange Watch</span>
                                              </a>
                                              <span class="block text-success">$249</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1645</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-success text-white">Delivered</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block justify-between items-center">
                                      <div class="text-[0.6875rem]">
                                          <span>Delivered on:</span>
                                          <span class="font-semibold">4,Nov 2022 - 10:24AM</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Rate Product<i class="bi bi-star-fill ms-2 text-xs text-warning"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Pufa Sweat Shirt</span>
                                              </a>
                                              <span class="block text-success">$2,399</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1346</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">16</span>
                                              <span class="font-semibold">Jan</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div><span class="text-[#8c9097] me-2">Status:</span><span class="badge bg-success/10 text-success">Shipped</span></div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/9.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Bluberry Co.In</span>
                                              </a>
                                              <span class="block text-success">$499</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-2936</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">19</span>
                                              <span class="font-semibold">Dec</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div><span class="text-[#8c9097] me-2">Status:</span><span class="badge bg-warning/10 text-warning">Out For Delivery</span></div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Garage &amp; Co</span>
                                              </a>
                                              <span class="block text-success">$499</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1376</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">24</span>
                                              <span class="font-semibold">Dec</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div><span class="text-[#8c9097] me-2">Status:</span><span class="badge bg-success/10 text-success">Shipped</span></div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Hadimo Smart Watch(44mm)</span>
                                              </a>
                                              <span class="block text-success">$499</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-2903</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="delivery-date text-center ms-auto">
                                              <span class="text-[1.125rem] text-primary font-bold">16</span>
                                              <span class="font-semibold">Nov</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block items-center w-full justify-between">
                                      <div>
                                          <span class="text-[#8c9097] me-2">Status:</span>
                                          <span class="badge bg-primary/10 text-primary">Confirmed</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-danger">Cancel Order</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">BMW Denim JAcket</span>
                                              </a>
                                              <span class="block text-success">$1,899</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1976</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-success text-white">Delivered</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block justify-between items-center">
                                      <div class="text-[0.6875rem]">
                                          <span>Delivered on:</span>
                                          <span class="font-semibold">04,Nov 2022 - 03:12PM</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Rate Product<i class="bi bi-star-fill ms-2 text-xs text-warning"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full ">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/16.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Totoya Watch For Kids</span>
                                              </a>
                                              <span class="block text-success">$799</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-8765</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-danger text-white">Cancelled</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer">
                                      <div class="ltr:float-right rtl:float-left">
                                          <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-light">Buy Now</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 xxl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                              <div class="box">
                                  <div class="box-header !justify-start block">
                                      <div class="sm:flex block items-center w-full">
                                          <div class="me-2">
                                              <span class="avatar bg-light avatar-md mb-1">
                                                  <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" alt="">
                                              </span>
                                          </div>
                                          <div class="flex-grow">
                                              <a href="javascript:void(0)">
                                                  <span class="text-[0.875rem] font-semibold">Garage &amp; Co</span>
                                              </a>
                                              <span class="block text-success">$249</span>
                                          </div>
                                          <div class="sm:text-center">
                                              <span class="text-[0.875rem] font-semibold">Order Id :</span>
                                              <span class="sm:block">#SPK-1645</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div class="flex items-center">
                                          <div class="orders-delivery-address">
                                              <p class="mb-1 font-semibold">Delivery Address</p>
                                              <p class="text-[#8c9097] mb-0">
                                                  mig-1-11,monroe street, georgetown, Washington D.C
                                              </p>
                                          </div>
                                          <div class="ms-auto">
                                              <span class="badge bg-success text-white">Delivered</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box-footer sm:flex block justify-between items-center">
                                      <div class="text-[0.6875rem]">
                                          <span>Delivered on:</span>
                                          <span class="font-semibold">22,Oct 2022 - 05:15PM</span>
                                      </div>
                                      <div class="sm:mt-0 mt-2">
                                          <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Rate Product<i class="bi bi-star-fill ms-2 text-xs text-warning"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--End::row-1 -->

                      <ul class="ti-pagination !px-3 !py-[0.375rem] !text-[1rem] !mb-4 flex justify-end">
                          <li class="page-item disabled">
                              <a class="page-link !px-3 !py-[0.375rem]">Previous</a>
                          </li>
                          <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">1</a></li>
                          <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">2</a></li>
                          <li class="page-item"><a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">3</a></li>
                          <li class="page-item">
                              <a class="page-link !px-3 !py-[0.375rem]" href="javascript:void(0);">Next</a>
                          </li>
                      </ul>

@endsection

@section('scripts')


@endsection