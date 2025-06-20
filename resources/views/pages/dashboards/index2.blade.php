@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Ecommerce</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Dashboards
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Ecommerce
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12">
                                                <div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon px-0">
                                                    <span class="rounded-md p-4 bg-primary/10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-white primary" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg>
                                                    </span>
                                                </div>
                                                <div class="xxxl:col-span-9 col-span-8 ps-0">
                                                    <div class="mb-2">Total Sales</div>
                                                    <div class="text-[#8c9097] mb-1 text-[0.75rem]">
                                                        <span class="text-defaulttextcolor font-semibold text-[1.25rem] leading-none vertical-bottom">
                                                            14,732
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.75rem] mb-0">Increase by <span class="badge bg-success/10 text-success mx-1">+4.2%</span> this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12">
                                                <div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon secondary  px-0">
                                                    <span class="rounded-md p-4 bg-secondary/10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-white secondary" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0,0h24v24H0V0z" fill="none"/><g><path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"/><rect height="2" width="6" x="9" y="7"/><rect height="2" width="2" x="16" y="7"/><rect height="2" width="6" x="9" y="10"/><rect height="2" width="2" x="16" y="10"/></g></svg>
                                                    </span>
                                                </div>
                                                <div class="xxxl:col-span-9 col-span-8 ps-0">
                                                    <div class="mb-2">Total Expenses</div>
                                                    <div class="text-[#8c9097] mb-1 text-[0.75rem]">
                                                        <span class="font-semibold text-[1.25rem] leading-none text-defaulttextcolor vertical-bottom">
                                                            $28,346.00
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.75rem] mb-0">Increase by <span class="badge bg-success/10 text-success mx-1">+12.0%</span> this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12">
                                                <div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon success px-0">
                                                    <span class="rounded-md p-4 bg-success/10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-white success" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="xxxl:col-span-9 col-span-8 ps-0">
                                                    <div class="mb-2">Total Visitors</div>
                                                    <div class="text-[#8c9097] mb-1 text-[0.75rem]">
                                                        <span class="text-defaulttextcolor font-semibold text-[1.25rem]  leading-none vertical-bottom">
                                                            1,29,368
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.75rem] mb-0">Decreased by <span class="badge bg-danger/10 text-danger mx-1">-7.6%</span> this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-6 md:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12">
                                                <div class="xxxl:col-span-3 col-span-4 flex items-center ecommerce-icon warning px-0">
                                                    <span class="rounded-md p-4 bg-warning/10">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-white warning" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                                    </span>
                                                </div>
                                                <div class="xxxl:col-span-9 col-span-8 ps-0">
                                                    <div class="mb-2">Total Orders</div>
                                                    <div class="text-[#8c9097] mb-1 text-[0.75rem]">
                                                        <span class="font-semibold text-[1.25rem] leading-none vertical-bottom text-defaulttextcolor">
                                                            35,367
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.75rem] mb-0">Increased by <span class="badge bg-success/10 text-success mx-1">+2.5%</span> this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box overflow-hidden">
                                        <div class="ecommerce-sale-image">
                                            <img src="{{asset('build/assets/images/ecommerce/png/35.png')}}" class="card-img-top" alt="...">
                                            <div class="card-img-overlay  p-6 text-white">
                                                <p class=" opacity-[0.7] text-[0.75rem]">Spruko Official.Inc</p>
                                                <p class="font-semibold mb-6 text-[1rem]">BIG SAVING DAYS</p>
                                                <p class="ecommerce-bankoffer-details mb-4">Bank Offer 10% off on Aches Bank Credit Cards, up to $10. On orders of $500 and above <a href="javascript:void(0);" class="underline text-white">T&amp;C</a></p>
                                                <p class="ecommerce-sale-days mb-0">15, Jan 2022 - 19, Jan 2022</p>
                                                <p class="ecommerce-sales-calendar text-center mb-0">
                                                    <span>15</span>
                                                    <span class="block text-[0.9375rem] leading-none font-semibold">Jan</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <a href="javascript:void(0);" class="text-primary text-[0.9375rem] font-semibold">Biggest sale is back.</a>
                                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore harum accusamus eum dolorum sapiente. Saepe</p>
                                            <button type="button" class="tibtn ti-btn-primary-full ti-btn-wave !py-[0.55rem] !px-[0.95rem] gap-2 rounded-[0.35rem] text-[0.85rem] font-medium !shadow-none me-2">Notify Me</button>
                                            <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave !rounded-[0.35rem] !text-[0.85rem] !font-medium !shadow-none">Offers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Recent Orders
                                            </div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                    aria-expanded="false"><i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="list-none mb-0">
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex tems-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/1.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>

                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">Smart Phone</p>
                                                                <p class="text-[0.75rem] !text-[#8c9097] mb-0">Mobiles</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$199.99</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/2.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">White Headphones</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">Music</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$79.49</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/3.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">Stop Watch</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">Electronics</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$49.29</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/4.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">Kikon Camera</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">Electronics</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$1,699.00</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/5.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">Photo Frame</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">Furniture</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$29.99</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="inline-flex justify-center items-center">
                                                                    <img src="{{asset('build/assets/images/ecommerce/jpg/6.jpg')}}" alt="" class="w-[2.5rem] h-[2.5rem]leading-[2.5rem] text-[0.8rem] rounded-md">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow ms-2">
                                                                <p class="font-semibold mb-0">Canvas Shoes</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">Footwear</p>
                                                            </div>
                                                            <div>
                                                                <span class="text-success font-semibold">$89.99</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between sm:flex block">
                                            <div class="box-title">
                                                Orders
                                            </div>
                                            <div>
                                                <nav class="sm:flex block sm:mt-0 mt-2" aria-label="Tabs">
                                                    <a class="block w-full sm:w-auto hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-4  text-[0.8rem] font-medium text-center rounded-md hover:text-primary active" id="active-item" data-hs-tab="#taskactive" aria-controls="taskactive">
                                                        Active Orders
                                                    </a>
                                                    <a class="block w-full sm:w-auto hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-4 text-[0.8rem] font-medium text-center  rounded-md hover:text-primary " id="completed-item" data-hs-tab="#completed" aria-controls="completed">
                                                        Completed
                                                    </a>
                                                    <a class="block w-full sm:w-auto hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-4 text-[0.8rem] font-medium text-center  rounded-md hover:text-primary " id="cancelled-item" data-hs-tab="#cancelled" aria-controls="cancelled">
                                                        Cancelled
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <div class="tab-content">
                                                <div class="tab-pane show active text-[#8c9097] !border-0 !p-0" id="taskactive"
                                                    role="tabpanel">
                                                    <div class="table-responsive overflow-auto">
                                                        <table class="table box-table table-vcenter whitespace-nowrap mb-0 min-w-full">
                                                            <tbody class="active-tab">
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Amanda Nanes</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 font-semibold">$229.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Delivery Date</span>
                                                                            <p class="mb-0">24 May 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-y border-inherit border-solid" >
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Peter Parkour</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 font-semibold">$135.29</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Delivery Date</span>
                                                                            <p class="mb-0">18 May 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/2.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-y border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Jackie Chen</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$1,299.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="aitems-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Delivery Date</span>
                                                                            <p class="mb-0">29 May 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/3.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border-y border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Ryan Gercia</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$249.29</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Delivery Date</span>
                                                                            <p class="mb-0">05 Jun 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/4.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Hugh Jackma</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 font-semibold">$499.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Delivery Date</span>
                                                                            <p class="mb-0">15 May 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/5.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane text-[#8c9097] !border-0 !p-0 hidden" id="completed"  role="tabpanel" aria-labelledby="completed-item">
                                                    <div class="table-responsive overflow-auto">
                                                        <table class="table card-table table-vcenter whitespace-nowrap mb-0 min-w-full">
                                                            <tbody class="active-tab">
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Lisa Rebecca</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$1,199.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-success">Delivered On</span>
                                                                            <p class="mb-0">24 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/6.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Matt Martin</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 font-semibold">$799.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-success">Delived On</span>
                                                                            <p class="mb-0">18 Nov 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Mitchell Osama</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$279.00</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-success">Delivery On</span>
                                                                            <p class="mb-0">29 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/8.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Cornor Mcgood</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 font-semibold">$79.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-success">Delivered On</span>
                                                                            <p class="mb-0">05 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/9.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Kishan Patel</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$1449.29</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-success">Delivered On</span>
                                                                            <p class="mb-0">20 Nov 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/10.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane text-[#8c9097] !border-0 !p-0 hidden" id="cancelled" role="tabpanel" aria-labelledby="cancelled-item">
                                                    <div class="table-responsive overflow-auto">
                                                        <table class="table card-table table-vcenter whitespace-nowrap mb-0 min-w-full">
                                                            <tbody class="active-tab">
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Hailey Bobber</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$199.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-danger">Cancelled Date</span>
                                                                            <p class="mb-0">09 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/11.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Anthony Mansion</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$179.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-danger">Cancelled Date</span>
                                                                            <p class="mb-0">28 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/12.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Simon Carter</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$149.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-danger">Cancelled Date</span>
                                                                            <p class="mb-0">30 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/13.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md online avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Sofia Sekh</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$1439.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-danger">Cancelled Date</span>
                                                                            <p class="mb-0">03 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/14.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <div class="leading-none">
                                                                                <span class="avatar avatar-md offline avatar-rounded me-2 !mb-0">
                                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                                </span>
                                                                            </div>
                                                                            <div class="items-center">
                                                                                <span class="text-[0.75rem] text-[#8c9097]">Name</span>
                                                                                <p class="mb-0">Kimura Kai</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-[#8c9097]">Price</span>
                                                                            <p class="mb-0 fw-semibold">$1092.99</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="items-center">
                                                                            <span class="text-[0.75rem] text-danger">Cancelled Date</span>
                                                                            <p class="mb-0">02 Dec 2022</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <span class="avatar avatar-md">
                                                                            <img src="{{asset('build/assets/images/ecommerce/png/15.png')}}" alt="">
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                                            <span class="orders-arrow"><i class="ri-arrow-right-s-line text-[1.125rem] rtl:before:content-['\ea64']"></i></span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">Earnings</div>
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
                                            <div class="sm:grid sm:grid-cols-12 lg:ps-[3rem] mb-6 pb-6 sm:gap-0 gap-y-3">
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4">
                                                    <div class="mb-1 earning first-half ms-4">First Half</div>
                                                    <div class="mb-0">
                                                        <span class="mt-1 text-[1rem] font-semibold">$51.94k</span>
                                                        <span class="text-success"><i class="fa fa-caret-up mx-1"></i>
                                                        <span class="badge bg-success/10 text-success !px-1 !py-2 text-[0.625rem]">+0.9%</span></span>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4">
                                                    <div class="mb-1 earning top-gross ms-4">Top Gross</div>
                                                    <div class="mb-0">
                                                        <span class="mt-1 text-[1rem] font-semibold">$18.32k</span>
                                                        <span class="text-success"><i class="fa fa-caret-up mx-1"></i>
                                                        <span class="badge bg-success/10 text-success !px-1 !py-2 text-[0.625rem]">+0.39%</span></span>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4">
                                                    <div class="mb-1 earning second-half ms-3">Second Half</div>
                                                    <div class="mb-0">
                                                        <span class="mt-1 text-[1rem] font-semibold">$38k</span>
                                                        <span class="text-danger"><i class="fa fa-caret-up mx-1"></i>
                                                        <span class="badge bg-danger/10 text-danger !px-1 !py-2 text-[0.625rem]">-0.15%</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="earnings"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-card">
                                        <div class="box-header">
                                            <div class="box-title">Top Selling Products</div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <div class="table-responsive">
                                                <table class="table whitespace-nowrap min-w-full mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="text-center">S.no</th>
                                                            <th scope="col" class="text-start">Product Name</th>
                                                            <th scope="col" class="text-start">Category</th>
                                                            <th scope="col" class="text-start">Stock</th>
                                                            <th scope="col" class="text-start">Total Sales</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="top-selling">
                                                        <tr class="border-y border-inherit border-solid ">
                                                            <td class="text-center leading-none">
                                                                <span class="avatar avatar-md !rounded-full">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/36.png')}}" class="p-2 !rounded-full bg-light" alt="">
                                                                </span>
                                                            </td>
                                                            <td>Ethnic School bag for children (24L)</td>
                                                            <td>Bags</td>
                                                            <td><span class="badge badge-sm bg-success/10 text-success !font-normal">In Stock</span></td>
                                                            <td>
                                                                <span class="font-semibold">5,093</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-y border-inherit border-solid ">
                                                            <td class="text-center leading-none">
                                                                <span class="avatar avatar-md !rounded-full">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/38.png')}}" class="p-2 !rounded-full bg-light" alt="">
                                                                </span>
                                                            </td>
                                                            <td>Leather jacket for men (S,M,L,XL)</td>
                                                            <td>Clothing</td>
                                                            <td><span class="badge badge-sm bg-success/10 text-success !font-normal">In Stock</span></td>
                                                            <td>
                                                                <span class="font-semibold">6,890</span>
                                                            </td>
                                                        </tr>
                                                        <tr class="border-y border-inherit border-solid ">
                                                            <td class="text-center leading-none">
                                                                <span class="avatar avatar-md !rounded-full">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/39.png')}}" class="p-2 !rounded-full bg-light" alt="">
                                                                </span>
                                                            </td>
                                                            <td>Childrens Teddy toy of high quality</td>
                                                            <td>Toys</td>
                                                            <td><span class="badge badge-sm bg-danger/10 text-danger !font-normal">Out Of Stock</span></td>
                                                            <td>
                                                                <span class="font-semibold">5,423</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center leading-none">
                                                                <span class="avatar avatar-md !rounded-full">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/40.png')}}" class="p-2 !rounded-full bg-light" alt="">
                                                                </span>
                                                            </td>
                                                            <td>Orange smart watch with square dial (24mm)</td>
                                                            <td>Fashion</td>
                                                            <td><span class="badge badge-sm bg-danger/10 text-danger !font-normal">Out Of Stock</span></td>
                                                            <td>
                                                                <span class="font-semibold">10,234</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Top Countries By Sales
                                            </div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);" class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                    aria-expanded="false"><i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                </a>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Action</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Another action</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex items-center mb-2">
                                                <h4 class="mb-0 leading-none text-[1.5rem] font-medium">38,256</h4>
                                                <span class="badge bg-primary/10 mx-1 text-primary">12.24%</span>
                                                <span class="text-[#8c9097] text-[0.6875rem]">Since last week</span>
                                            </div>
                                            <ul class="mb-0 pt-3 list-none">
                                                <li class="mb-3">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center leading-none">
                                                            <span class="avatar avatar-xs me-2">
                                                                <img src="{{asset('build/assets/images/flags/french_flag.jpg')}}" alt="" class="rounded-full h-[1.25rem] w-[1.25rem]">
                                                            </span>
                                                            <span class="top-country-name w-[4.5rem]">France</span>
                                                        </div>
                                                        <div>
                                                            <i class="ti ti-trending-up text-[1rem] text-success"></i>
                                                        </div>
                                                        <div class="text-[0.875rem]">5,932</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center leading-none">
                                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/spain_flag.jpg')}}" alt="" class="rounded-full h-[1.25rem] w-[1.25rem]">
                                                            </span>
                                                            <span class="top-country-name w-[4.5rem]">spain</span>
                                                        </div>
                                                        <div>
                                                            <i class="ti ti-trending-down text-[1rem] text-danger"></i>
                                                        </div>
                                                        <div class="text-[0.875rem]">5,383</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center leading-none">
                                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/argentina_flag.jpg')}}" alt="" class="rounded-full h-[1.25rem] w-[1.25rem]">
                                                            </span>
                                                            <span class="top-country-name w-[4.5rem]">Argentina</span>
                                                        </div>
                                                        <div>
                                                            <i class="ti ti-trending-up text-[1rem] text-success"></i>
                                                        </div>
                                                        <div class="text-[0.875rem]">4,825</div>
                                                    </div>
                                                </li>
                                                <li class="mb-3">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center leading-none">
                                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/uae_flag.jpg')}}" alt="" class="rounded-full h-[1.25rem] w-[1.25rem]">
                                                            </span>
                                                            <span class="top-country-name w-[4.5rem]">Uae</span>
                                                        </div>
                                                        <div>
                                                            <i class="ti ti-trending-up text-[1rem] text-success"></i>
                                                        </div>
                                                        <div class="text-[0.875rem]">4,527</div>
                                                    </div>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center leading-none">
                                                            <span class="avatar avatar-xs me-2 avatar-rounded">
                                                                <img src="{{asset('build/assets/images/flags/germany_flag.jpg')}}" alt="" class="rounded-full h-[1.25rem] w-[1.25rem]">
                                                            </span>
                                                            <span class="top-country-name w-[4.5rem]">Germany</span>
                                                        </div>
                                                        <div>
                                                            <i class="ti ti-trending-down text-[1rem] text-danger"></i>
                                                        </div>
                                                        <div class="text-[0.875rem]">4,501</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Top Customers
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
                                            <ul class="list-none mb-0">
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-start justify-center">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="" class="avatar avatar-md avatar-rounded !mb-0 me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Emma Wilson</p>
                                                                    <p class="mb-0 text-[#8c9097] text-[0.75rem]">15 Purchases<i class="bi bi-patch-check-fill text-[0.875rem] text-primary ms-2"></i></p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="text-[0.875rem]">$1,835</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-start justify-center">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="" class="avatar avatar-md avatar-rounded !mb-0 me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Robert Lewis</p>
                                                                    <p class="mb-0 text-[#8c9097] text-[0.75rem]">18 Purchases<i class="bi bi-patch-check-fill text-[0.875rem] text-primary ms-2"></i></p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="text-[0.875rem]">$2,415</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-start justify-center">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="avatar avatar-md avatar-rounded !mb-0 me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Angelina Hose</p>
                                                                    <p class="mb-0 text-[#8c9097] text-[0.75rem]">21 Purchases<i class="bi bi-patch-check-fill text-[0.875rem] text-primary ms-2"></i></p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="text-[0.875rem]">$2,341</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-0">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-start justify-center">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="me-2 avatar avatar-md avatar-rounded !mb-0">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Samantha Sam</p>
                                                                    <p class="mb-0 text-[#8c9097] text-[0.75rem]">24 Purchases<i class="bi bi-patch-check-fill text-[0.875rem] text-primary ms-2"></i></p>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <span class="text-[0.875rem]">2,624</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Products Overview
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <div>
                                        <input class="ti-form-control form-control-sm" type="text" placeholder="Search Here"
                                            aria-label=".form-control-sm example">
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                        <a href="javascript:void(0);"
                                            class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
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
                                                <tr class="border border-inherit border-solid  ">
                                                    <th scope="col" class="!text-start">Name</th>
                                                    <th scope="col" class="!text-start">Product Id</th>
                                                    <th scope="col" class="!text-start">Price</th>
                                                    <th scope="col" class="!text-start">Status</th>
                                                    <th scope="col" class="!text-start">Sales</th>
                                                    <th scope="col" class="!text-start">Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-y border-inherit border-solid">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/36.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-sm">Niker College Bag</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-semibold">#1734-9743</span>
                                                    </td>
                                                    <td>
                                                        $199.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Available</span>
                                                    </td>
                                                    <td>
                                                        <span class="">3,903</span>
                                                    </td>
                                                    <td>
                                                        <span class="">$67,899.24</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-y border-inherit border-solid">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/37.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="">Dslr Camera (50mm f/1.9 HRM Lens)</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-semibold">#1234-4567</span>
                                                    </td>
                                                    <td>
                                                        $1,299.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Available</span>
                                                    </td>
                                                    <td>
                                                        <span class="">12,435</span>
                                                    </td>
                                                    <td>
                                                        <span class="">$3,24,781.92</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-y border-inherit border-solid">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/38.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[0.875rem]">Outdoor Bomber Jacket</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-semibold">#1902-9883</span>
                                                    </td>
                                                    <td>
                                                        $99.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">Not Available</span>
                                                    </td>
                                                    <td>
                                                        <span class="">5,143</span>
                                                    </td>
                                                    <td>
                                                        <span class="">$76,102.76</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-y border-inherit border-solid">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/39.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[0.875rem]">Light Blue Teddy</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-semibold">#8745-1232</span>
                                                    </td>
                                                    <td>
                                                        $79.00
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Limited Deal</span>
                                                    </td>
                                                    <td>
                                                        <span class="">	7,183</span>
                                                    </td>
                                                    <td>
                                                        <span class="">$78,211.83</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-y border-inherit border-solid">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-sm">
                                                                    <img src="{{asset('build/assets/images/ecommerce/png/40.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="text-[0.875rem]">Orange Smart Watch (24mm)</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-semibold">#1962-9033</span>
                                                    </td>
                                                    <td>
                                                        $199.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">In Offer</span>
                                                    </td>
                                                    <td>
                                                        <span class="">10,287</span>
                                                    </td>
                                                    <td>
                                                        <span class="">$2,32,982.99</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="sm:flex items-center">
                                        <div>
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

        <!-- Ecommerce-Dashboard JS -->
        @vite('resources/assets/js/ecommerce-dashboard.js')


@endsection