@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Order Details</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                    <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Ecommerce
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                    </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Order Details
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-6 col-span-12">
                                <div class="box">
                                    <div class="box-header sm:flex justify-between">
                                        <div class="box-title">
                                            Order No - <span class="text-primary">#SPK-1023</span>
                                        </div>
                                        <div>
                                            <span class="badge bg-primary/10 text-primary">
                                                Estimated delivery : 30,Nov 2022
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body !p-0">
                                        <div class="table-responsive">
                                            <table class="table whitespace-nowrap min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-start min-w-[22rem]">Item</th>
                                                        <th scope="col" class="text-start">Tracking No</th>
                                                        <th scope="col" class="text-start">Price</th>
                                                        <th scope="col" class="text-start">Quantity</th>
                                                        <th scope="col" class="text-start">Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border border-inherit border-solid">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-4">
                                                                        <span class="avatar avatar-xxl bg-light">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[0.875rem] font-semibold">
                                                                            <a href="javascript:void(0);">Orange Watch Series 4</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Dial Size:</span><span class="text-[#8c9097]">44mm</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Color:</span><span class="text-[#8c9097]">Metallic Black</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript:void(0);" class="text-primary">SPK1218153635</a></td>
                                                            <td>
                                                                <span class="text-[0.9375rem] font-semibold">$1,249</span>
                                                            </td>
                                                            <td>1</td>
                                                            <td>$1,249</td>
                                                        </tr>
                                                        <tr class="border border-inherit border-solid">
                                                            <td>
                                                                <div class="flex items-center">
                                                                    <div class="me-4">
                                                                        <span class="avatar avatar-xxl bg-light">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <div class="mb-1 text-[0.875rem] font-semibold">
                                                                            <a href="javascript:void(0);">DapZem &amp; Co Sweat Shirt</a>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Size:</span><span class="text-[#8c9097]">Large</span>
                                                                        </div>
                                                                        <div class="mb-1">
                                                                            <span class="me-1">Color:</span><span class="text-[#8c9097]">Grey<span class="badge bg-success text-white ms-3">In Offer</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        <td><a href="javascript:void(0);" class="text-primary">SPK3789423789</a></td>
                                                        <td>
                                                            <span class="text-[0.9375rem] font-semibold">$499</span>
                                                        </td>
                                                        <td>2</td>
                                                        <td>$998</td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-4">
                                                                    <span class="avatar avatar-xxl bg-light">
                                                                        <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <div class="mb-1 text-[0.875rem] font-semibold">
                                                                        <a href="javascript:void(0);">Denim Corporation Sweat Shirt</a>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Size:</span><span class="text-[#8c9097]">Large</span>
                                                                    </div>
                                                                    <div class="mb-1">
                                                                        <span class="me-1">Color:</span><span class="text-[#8c9097]">Orange<span class="badge text-white bg-info ms-3">32% Off</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    <td><a href="javascript:void(0);" class="text-primary">SPK1120324532</a></td>
                                                    <td>
                                                        <span class="text-[0.9375rem] font-semibold">$799</span>
                                                    </td>
                                                    <td>1</td>
                                                    <td>$799</td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Total Items :</div>
                                                        </td>
                                                        <td>
                                                            04
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Sub Total :</div>
                                                        </td>
                                                        <td>
                                                            $3,100
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Applied Coupon :</div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">SPKFIR</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Delivery Fees :</div>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger">+$29</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid">
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Total Saved :</div>
                                                        </td>
                                                        <td>
                                                            <span class="text-[0.875rem] font-semibold text-success">$3,799</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"></td>
                                                        <td colspan="2">
                                                            <div class="font-semibold">Total Price :</div>
                                                        </td>
                                                        <td>
                                                            <span class="text-[1rem] font-semibold">$3,129</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer border-t-0">
                                        <div class="btn-list ltr:float-right rtl:float-left">
                                            <button aria-label="button" type="button" class="ti-btn bg-primary text-white !py-1 !px-2 !font-medium" onclick="javascript:window.print();"><i class="ri-printer-line me-1 align-middle inline-block"></i>Print</button>
                                            <button aria-label="button" type="button" class="ti-btn bg-secondary text-white !py-1 !px-2 !font-medium"><i class="ri-share-forward-line me-1 align-middle inline-block"></i>Share Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            User Details
                                        </div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <div class="flex items-center border-b border-dashed p-3 flex-wrap">
                                            <div class="me-2">
                                                <span class="avatar avatar-lg avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="mb-0">Json Taylor</p>
                                                <p class="mb-0 text-[#8c9097] text-[0.75rem]">jsontaylor2135@gmail.com</p>
                                            </div>
                                            <div>
                                                <span class="badge bg-primary/10 text-primary">Prime User</span>
                                            </div>
                                        </div>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="flex items-center justify-between mb-4">
                                                <span class="text-[0.875rem] font-semibold">Delivery address :</span>
                                                <button aria-label="button" type="button" class="ti-btn bg-primary ti-btn-sm text-white"><i class="ri-pencil-line"></i></button>
                                            </div>
                                            <p class="mb-2 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">Landmark : </span>MIG-1-11</p>
                                            <p class="mb-2 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">Street : </span>Monroe Street</p>
                                            <p class="mb-2 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">City : </span>Georgetown</p>
                                            <p class="mb-2 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">State : </span>Washington,D.C</p>
                                            <p class="mb-2 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">Country : </span>USA</p>
                                            <p class="mb-0 text-[#8c9097]"><span class="font-semibold text-defaulttextcolor">Zipcode : </span>200071</p>
                                        </div>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="mb-4">
                                                <span class="text-[0.875rem] font-semibold">Send updates to :</span>
                                            </div>
                                            <p class="mb-2 text-[#8c9097]">
                                                <span class="font-semibold text-default">Phone : </span>
                                                (555)-0123-1210
                                            </p>
                                            <p class="mb-0 text-[#8c9097]">
                                                <span class="font-semibold text-default">Email : </span>
                                                jsontaylor2134@gmail.com
                                            </p>
                                        </div>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="mb-4">
                                                <span class="text-[0.875rem] font-semibold">Order Summary</span>
                                            </div>
                                            <p class="mb-2 text-[#8c9097]">
                                                <span class="font-semibold text-default">Ordered Date</span>
                                                24,Nov 2022
                                            </p>
                                            <p class="mb-2 text-[#8c9097]">
                                                <span class="font-semibold text-default">Ordered Time :</span>
                                                11:47AM
                                            </p>
                                            <p class="mb-0 text-[#8c9097]">
                                                <span class="font-semibold text-default">Payment Interface :</span>
                                                UPI
                                            </p>
                                        </div>
                                    </div>
                                    <div class="box-footer">Total
                                        <span class="text-success">294 items</span> purchased upto now
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Order Tracking
                                        </div>
                                        <div class="ms-auto text-success">#SPK1218153635</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="order-track">
                                            <div class="hs-accordion-group" data-hs-accordion-always-open>
                                                <div class="hs-accordion active" id="order-heading-one">
                                                    <a href="javascript:void(0);" class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition"
                                                    aria-controls="order-collapse-one">
                                                    <div class="flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/32.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0 text-[0.875rem]">Order Placed</p>
                                                            <span class="text-[0.6875rem] text-success">Nov 03, 2022</span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    <div id="order-collapse-one" class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="order-heading-one">
                                                    <div class="accordion-body !pt-0 !ps-8">
                                                        <div class="text-[0.6875rem]">
                                                            <p class="mb-0 ps-4">Order placed successfully by <a href="javascript:void(0);" class="font-weight-semibold text-primary">Sansa Taylor</a></p>
                                                            <span class="text-[#8c9097] opacity-[0.5] ps-4">Nov 03, 2022, 15:36</span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs-accordion active" id="order-heading-two">
                                                    <a href="javascript:void(0);" class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition"
                                                    aria-controls="order-collapse-two">
                                                    <div class="flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/ecommerce/png/33.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0 text-[0.875rem]">Picked</p>
                                                            <span class="text-[0.75rem]">Nov 03, 15:10</span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    <div id="order-collapse-two"
                                                    class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="order-heading-two">
                                                    <div class="accordion-body !pt-0 !ps-8">
                                                        <div class="text-[0.6875rem]">
                                                            <p class="mb-0 ps-4">Your order has been picked up by <span class="font-weight-semibold">Smart Good Services</span></p>
                                                            <span class="text-[#8c9097] opacity-[0.5] ps-4">Nov 03, 2022, 15:36</span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs-accordion active" id="order-heading-three">
                                                    <a href="javascript:void(0);" class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition" aria-controls="order-collapse-three">
                                                        <div class="flex mb-0">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/34.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0 text-[0.875rem]">Shipping</p>
                                                                <span class="text-[0.75rem]">Nov 03, 15:10</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div id="order-collapse-three"
                                                    class="space-y-3 hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="order-heading-three">
                                                    <div class="accordion-body !pt-0 !ps-8">
                                                        <div class="text-[0.6875rem] mb-4 ps-4">
                                                            <p class="mb-0">Arrived USA <span class="font-weight-semibold">SGS Warehouse</span></p>
                                                            <span class="text-[#8c9097] opacity-[0.5]">Nov 03, 2022, 15:36</span>
                                                        </div>
                                                        <div class="text-[0.6875rem] mb-4 ps-4">
                                                            <p class="mb-0">picked up by <span class="font-weight-semibold">SGS Agent</span> and on the way to Hyderabad</p>
                                                            <span class="text-[#8c9097] opacity-[0.5]">Nov 03, 2022, 15:36</span>
                                                        </div>
                                                        <div class="text-[0.6875rem] ps-4">
                                                            <p class="mb-0">Arrived in Hyderabad and expected Delivery is <span class="font-weight-semibold">Apr 16, 2022</span> </p>
                                                            <span class="text-[#8c9097] opacity-[0.5]">Nov 03, 2022, 15:36</span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs-accordion" id="order-heading-four">
                                                    <a href="javascript:void(0);" class="hs-accordion-toggle group pb-3 inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                                    <div class="flex mb-0">
                                                        <div class="me-2">
                                                            <span class="avatar avatar-md avatar-rounded bg-primary/10 !text-primary border !border-primary/10"><i class="fe fe-package text-[0.75rem]"></i></span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <p class="font-semibold mb-0 text-[0.875rem]">Out For Delivery</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">Nov 03, 15:10 (expected)</span>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    <div id="order-collapse-four"
                                                        class="space-y-3 hs-accordion-content hidden  w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="order-heading-four">
                                                        <div class="accordion-body !pt-0 !ps-8">
                                                            <div class="text-[0.6875rem]">
                                                                <p class="mb-0 ps-4">Your order is out for devlivery</p>
                                                                <span class="text-[#8c9097] opacity-[0.5] ps-4">Nov 03, 2022, 15:36 (expected)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs-accordion" id="order-heading-five">
                                                    <a href="javascript:void(0);" class="group inline-flex items-center gap-x-3 w-full font-semibold text-start transition">
                                                        <div class="flex mb-0">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md avatar-rounded bg-primary/10 !text-primary border !border-primary/10"><i class="fe fe-package text-[0.75rem]"></i></span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <p class="font-semibold mb-0 text-[0.875rem]">Delivered</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">Nov 03, 18:42</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!--End::row-1 -->

@endsection

@section('scripts')


@endsection