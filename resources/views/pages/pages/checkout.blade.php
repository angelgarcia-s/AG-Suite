@extends('layouts.master')

@section('styles')
 
        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">
      
@endsection

@section('content')
 
                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Checkout</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Ecommerce
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Checkout
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <div class="container">
                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body !p-0  product-checkout">
                                        <nav class="md:flex justify-evenly !border-b !border-dashed border-defaultborder" aria-label="Tabs">
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary active" id="order-tab" data-hs-tab="#order-tab-pane" aria-controls="order-tab-pane">
                                                <i class="ri-truck-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Shipping
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="confirmed-tab" data-hs-tab="#confirm-tab-pane" aria-controls="confirm-tab-pane">
                                                <i class="ri-user-3-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>PersonalDetails
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="shipped-tab" data-hs-tab="#shipped-tab-pane" aria-controls="shipped-tab-pane">
                                                <i class="ri-bank-card-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Payment
                                            </a>
                                            <a class="w-full hs-tab-active:text-primary hs-tab-active:relative hs-tab-active:before:bg-primary hs-tab-active:before:absolute hs-tab-active:before:start-0 hs-tab-active:before:end-0 hs-tab-active:before:bottom-0 hs-tab-active:before:w-full hs-tab-active:before:h-[0.175rem] hs-tab-active:before:rounded-full text-defaulttextcolor cursor-pointer !py-4 !px-8 text-sm inline-flex items-center flex-grow font-medium text-center rounded-none hover:text-primary" id="delivered-tab" data-hs-tab="#delivery-tab-pane" aria-controls="delivery-tab-pane">
                                                <i class="ri-checkbox-circle-line me-2 align-middle w-[1.875rem] h-[1.875rem] p-[0.4rem] rounded-full hs-tab-active:bg-primary/10 bg-light !block"></i>Confirmation
                                            </a>
                                        </nav>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active text-defaulttextcolor !border-0 !p-0" id="order-tab-pane" aria-labelledby="order-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-6">
                                                    <p class="mb-1 font-semibold text-[#8c9097] opacity-[0.5] text-[1.25rem]">01</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Shipping Address :</div>
                                                        <div class="sm:mt-0 mt-2">
                                                            <a href="javascript:void(0);" class="ti-btn bg-primary text-white !py-1 !px-2 !text-[0.75rem]" data-hs-overlay="#modal-new-address"><i class="ri-add-line  align-middle text-[0.875rem] font-semibold inline-block"></i>Add New Address
                                                            </a>
                                                            <div id="modal-new-address" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                                  <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h6 class="modal-title text-[1rem] font-semibold" id="modal-new-addres">New Address</h6>
                                                                          <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#modal-new-address">
                                                                            <span class="sr-only">Close</span>
                                                                            <i class="ri-close-line"></i>
                                                                          </button>
                                                                    </div>
                                                                    <div class="ti-modal-body !max-w-[800px] px-4">
                                                                        <div class="grid grid-cols-12 gap-6">
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="fullname-new" class="form-label">Full Name</label>
                                                                                <input type="text" class="form-control" id="fullname-new" placeholder="Full Name">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="email-new" class="form-label">Email</label>
                                                                                <input type="email" class="form-control" id="email-new" placeholder="email">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="phonenumber-new" class="form-label">Phone Number</label>
                                                                                <input type="number" class="form-control" id="phonenumber-new" placeholder="Phone">
                                                                            </div>
                                                                            <div class="xl:col-span-6 col-span-12">
                                                                                <label for="address-new" class="form-label">Address</label>
                                                                                <input type="text" class="form-control" id="address-new" placeholder="Address">
                                                                            </div>
                                                                            <div class="xl:col-span-12 col-span-12">
                                                                                <div class="grid grid-cols-12 gap-4">
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="pincode-new" class="form-label">Pincode</label>
                                                                                        <input type="number" class="form-control" id="pincode-new" placeholder="Pinicode">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="city-new" class="form-label">City</label>
                                                                                        <input type="text" class="form-control" id="city-new" placeholder="City">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="state-new" class="form-label">State</label>
                                                                                        <input type="text" class="form-control" id="state-new" placeholder="State">
                                                                                    </div>
                                                                                    <div class="xl:col-span-3 col-span-6">
                                                                                        <label for="country-new" class="form-label">Country</label>
                                                                                        <input type="text" class="form-control" id="country-new" placeholder="Country">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                                        data-hs-overlay="#modal-new-address">
                                                                        Close
                                                                      </button>
                                                                        <button type="button" class="ti-btn bg-primary text-white !font-medium">Save Address</button>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-4 !mb-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="text" class="form-control w-full !rounded-md" id="fullname-add" value="Json Taylor" placeholder="Name">
                                                                <label for="fullname-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Full Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control  w-full !rounded-md" id="email-add" value="jsontaylor2413@gmail.com" placeholder="name@example.com">
                                                                <label for="email-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control is-valid  w-full !rounded-md" id="phoneno-add" value="(555) 555-1234" placeholder="1234-XX-XXXX">
                                                                <label for="phoneno-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Phone No</label>
                                                                <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                                    <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                      <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-floating">
                                                                <textarea class="form-control  w-full !rounded-md" placeholder="Address Here" id="address-add">MIG-1-11,Monroe Street,Washington D.C,USA</textarea>
                                                                <label for="address-add" class="!text-[0.75rem] after:bg-white after:dark:bg-bodybg after:rounded-md after:inset-y-4 after:inset-x-[0.375rem]">Address</label>
                                                            </div>
                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="invalidCheck" required checked>
                                                                <label class="form-check-label text-success" for="invalidCheck">
                                                                    Same as Billing Address ?
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <div class="grid grid-cols-12 sm:gap-6 gap-5">
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control is-valid  w-full !rounded-md" id="pincode-add" value="20071" placeholder="Name">
                                                                        <label for="pincode-add">Pin Code</label>
                                                                        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                                            <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                              <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="city-add" value="Georgetown" placeholder="Name">
                                                                        <label for="city-add">City</label>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="state-add" value="Washington, D.C" placeholder="Name">
                                                                        <label for="state-add">State</label>
                                                                    </div>
                                                                </div>
                                                                <div class="xl:col-span-3 col-span-12">
                                                                    <div class="form-floating">
                                                                        <input type="text" class="form-control  w-full !rounded-md" id="country-add" value="USA" placeholder="Name">
                                                                        <label for="country-add">Country</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="text-[0.9375rem] font-semibold mb-1 xl:col-span-12">Shipping Methods :</p>
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container mb-0 flex items-center">
                                                                <div class="form-check-label">
                                                                  <div class="sm:flex items-center justify-between">
                                                                      <div class="!me-2">
                                                                          <span class="avatar avatar-md">
                                                                              <img src="{{asset('build/assets/images/ecommerce/png/28.png')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="shipping-partner-details sm:me-5 me-0">
                                                                          <p class="mb-0 font-semibold">UPS</p>
                                                                          <p class="text-[#8c9097] text-[0.6875rem] mb-0">Delivered By 24,Nov 2022</p>
                                                                      </div>
                                                                      <div class="font-semibold sm:me-5 me-0">
                                                                          $9.99
                                                                      </div>
                                                                      <div>
                                                                      <input id="shipping-method1" name="shipping-methods" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <div class="form-check-label">
                                                                  <div class="sm:flex items-center justify-between">
                                                                      <div class="me-2">
                                                                          <span class="avatar avatar-md">
                                                                              <img src="{{asset('build/assets/images/ecommerce/png/31.png')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="shipping-partner-details sm:me-5 me-0">
                                                                          <p class="mb-0 font-semibold">USPS</p>
                                                                          <p class="text-[#8c9097] text-[0.6875rem] mb-0">Delivered By 22,Nov 2022</p>
                                                                      </div>
                                                                      <div class="font-semibold sm:me-5 me-0">
                                                                          $10.49
                                                                      </div>
                                                                      <div>
                                                                        <input id="shipping-method2" name="shipping-methods" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                        </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <div class="form-check-label">
                                                                  <div class="sm:flex items-center justify-between">
                                                                      <div class="me-2">
                                                                          <span class="avatar avatar-md">
                                                                              <img src="{{asset('build/assets/images/ecommerce/png/29.png')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="shipping-partner-details sm:me-5 me-0">
                                                                          <p class="mb-0 font-semibold">FedEx</p>
                                                                          <p class="text-[#8c9097] text-[0.6875rem] mb-0">Delivered Tomorrow</p>
                                                                      </div>
                                                                      <div class="font-semibold sm:me-5 me-0">
                                                                          $12.29
                                                                      </div>
                                                                      <div>
                                                                        <input id="shipping-method3" name="shipping-methods" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                        </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check shipping-method-container mb-0">
                                                                <div class="form-check-label">
                                                                  <div class="sm:flex items-center justify-between">
                                                                      <div class="me-2">
                                                                          <span class="avatar avatar-md">
                                                                              <img src="{{asset('build/assets/images/ecommerce/png/30.png')}}" alt="">
                                                                          </span>
                                                                      </div>
                                                                      <div class="shipping-partner-details sm:me-5 me-0">
                                                                          <p class="mb-0 font-semibold">DHL</p>
                                                                          <p class="text-[#8c9097] text-[0.6875rem] mb-0">Delivered Today</p>
                                                                      </div>
                                                                      <div class="font-semibold sm:me-5 me-0">
                                                                          $18.99
                                                                      </div>
                                                                      <div>
                                                                        <input id="shipping-method4" name="shipping-methods" type="radio" class="form-check-input  !top-[1.5rem]" checked>
                                                                        </div>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-6 py-4 border-t border-dashed sm:flex justify-end">
                                                    <button type="button" class="ti-btn ti-btn-success" id="personal-details-trigger">Personal Details<i class="ri-user-3-line ms-2 align-middle inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 text-defaulttextcolor hidden" id="confirm-tab-pane" aria-labelledby="confirmed-tab"
                                                role="tabpanel"  tabindex="0">
                                                <div class="p-4">
                                                    <p class="mb-1 font-semibold text-[#8c9097] opacity-[0.5] text-[1.25rem]">02</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Personal Details :</div>
                                                    </div>
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="firstname-personal" class="form-label">First Name</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="firstname-personal" placeholder="First Name" value="Json">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="lastname-personal" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="lastname-personal" placeholder="Last Name" value="Taylor">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="email-personal" class="form-label">Email</label>
                                                            <input type="email" class="form-control w-full !rounded-md" id="email-personal" placeholder="xyz@example.com" value="">
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <label for="phoneno-personal" class="form-label">Phone no</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="phoneno-personal" placeholder="(555)-555-1234" value="">
                                                        </div>
                                                        <div class="xxl:col-span-2 col-span-12">
                                                            <label for="pincode-personal" class="form-label">Pincode</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="pincode-personal" placeholder="200017" value="">
                                                        </div>
                                                        <div class="xxl:col-span-4 col-span-12">
                                                            <label for="choices-single-default" class="form-label">City</label>
                                                            <select class="form-control w-full !rounded-md" data-trigger name="choices-single-default" id="choices-single-default">
                                                                <option value="Choice 1">Georgetown</option>
                                                                <option value="Choice 2">Alexandria</option>
                                                                <option value="Choice 3">Rockville</option>
                                                                <option value="Choice 4">Frederick</option>
                                                            </select>
                                                        </div>
                                                        <div class="xxl:col-span-4 col-span-12">
                                                            <label for="choices-single-default1" class="form-label">State</label>
                                                            <select class="form-control w-full !rounded-md" data-trigger id="choices-single-default1">
                                                                <option value="Choice 1">Washington,D.C</option>
                                                                <option value="Choice 2">California</option>
                                                                <option value="Choice 3">Texas</option>
                                                                <option value="Choice 4">Alaska</option>
                                                            </select>
                                                        </div>
                                                        <div class="xxl:col-span-2 col-span-12">
                                                            <label for="country-personal" class="form-label">Country</label>
                                                            <input type="text" class="form-control w-full !rounded-md" id="country-personal" placeholder="Country" value="USA">
                                                        </div>
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <label for="text-area" class="form-label">Address</label>
                                                            <textarea class="form-control w-full !rounded-md" id="text-area" rows="4"></textarea>
                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="invalidCheck1" required checked>
                                                                <label class="form-check-label text-success" for="invalidCheck">
                                                                    Same as Shipping Address ?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 py-3 border-top border-block-start-dashed sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-danger m-1" id="back-shipping-trigger"><i class="ri-truck-line me-2 align-middle inline-block"></i>Back To Shipping</button>
                                                    <button type="button" class="ti-btn ti-btn-success m-1" id="payment-trigger">Continue To Payment<i class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 hidden" id="shipped-tab-pane" aria-labelledby="shipped-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-4 text-defaulttextcolor">
                                                    <p class="mb-1 font-semibold text-[#8c9097] opacity-[0.5] text-[1.25rem]">03</p>
                                                    <div class="text-[0.9375rem] font-semibold sm:flex block items-center justify-between mb-4">
                                                        <div>Payment Details :</div>
                                                    </div>
                                                    <div class="grid grid-cols-12 sm:gap-6">
                                                        <div class="xl:col-span-12 col-span-12">
                                                            <div class="mb-4">
                                                                <label class="form-label">Delivery Address</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control !rounded-s-sm" placeholder="Address" aria-label="address" aria-describedby="payment-address" value="MIG-1-11,Monroe Street,Washington D.C,USA">
                                                                    <button type="button"  class="ti-btn ti-btn-info border-defaultborder !rounded-s-none !mb-0" id="payment-address">Change</button>
                                                                </div>
                                                            </div>
                                                            <div class="box border !shadow-none mb-4">
                                                                <div class="box-header">
                                                                    <div class="box-title">
                                                                        Payment Methods
                                                                    </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="mb-4 sm:flex block " role="group" aria-label="Basic radio toggle button group">
                                                                        <input type="radio" class="btn-check " name="btnradio" id="btnradio1">
                                                                        <label class="w-full ti-btn ti-btn-outline-light !text-defaulttextcolor sm:!border-e-0 hover:!bg-light !rounded-e-none" >C.O.D(Cash on delivery)</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                                        <label class="w-full ti-btn ti-btn-outline-light !text-defaulttextcolor sm:!border-e-0 hover:!bg-light sm:mt-0 mt-1 !rounded-none" >UPI</label>
                                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" checked>
                                                                        <label class="w-full ti-btn ti-btn-light !text-defaulttextcolor hover:!bg-light !rounded-s-none sm:mt-0 mt-1" >Credit/Debit Card</label>
                                                                    </div>
                                                                    <div class="grid grid-cols-12 gap-4">
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <label for="payment-card-number" class="form-label">Card Number</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-card-number" placeholder="Card Number" value="1245 - 5447 - 8934 - XXXX">
                                                                        </div>
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <label for="payment-card-name" class="form-label">Name On Card</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-card-name" placeholder="Name On Card" value="JSON TAYLOR">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-cardexpiry-date" class="form-label">Expiration Date</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-cardexpiry-date" placeholder="MM/YY" value="08/2024">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-cvv" class="form-label">CVV</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-cvv" placeholder="XXX" value="341">
                                                                        </div>
                                                                        <div class="xl:col-span-4 col-span-12">
                                                                            <label for="payment-security" class="form-label">O.T.P</label>
                                                                            <input type="text" class="form-control w-full !rounded-md" id="payment-security" placeholder="XXXXXX" value="183467">
                                                                            <label for="payment-security" class=" mt-1 !text-success !text-[0.6875rem]"><sup class="top-[0.4em]"><i class="ri-star-s-fill"></i></sup>Do not share O.T.P with anyone</label>
                                                                        </div>
                                                                        <div class="xl:col-span-12 col-span-12">
                                                                            <div class="form-check !flex items-center gap-2 !ps-0">
                                                                                <input class="form-check-input form-checked-success w-full checked:bg-success checked:ring-success hover:checked:bg-success hover:checked:ring-success focus:checked:bg-success focus:checked:ring-success focus:ring-success focus:border-success" type="checkbox" value="" id="payment-card-save" checked>
                                                                                <label class="form-check-label" for="payment-card-save">
                                                                                    Save this card
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="box-footer">
                                                                    <div class="grid grid-cols-12 gap-4">
                                                                        <p class="xl:col-span-12 col-span-12 text-[0.9375rem] font-semibold mb-1">Saved Cards :</p>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="form-check payment-card-container mb-0 leading-none">
                                                                                <div class="form-check-label">
                                                                                  <div class="sm:flex block items-center justify-between">
                                                                                      <div class="me-2 leading-none">
                                                                                          <span class="avatar avatar-md">
                                                                                              <img src="{{asset('build/assets/images/ecommerce/png/26.png')}}" alt="">
                                                                                          </span>
                                                                                      </div>
                                                                                      <div class="saved-card-details">
                                                                                          <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 7646</p>
                                                                                      </div>
                                                                                      <div>
                                                                                        <input id="payment-card1" name="payment-cards" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-6 col-span-12">
                                                                            <div class="form-check payment-card-container mb-0 leading-none">
                                                                                <div class="form-check-label">
                                                                                  <div class="sm:flex block items-center justify-between">
                                                                                      <div class="me-2 leading-none">
                                                                                          <span class="avatar avatar-md">
                                                                                              <img src="{{asset('build/assets/images/ecommerce/png/27.png')}}" alt="">
                                                                                          </span>
                                                                                      </div>
                                                                                      <div class="saved-card-details">
                                                                                          <p class="mb-0 font-semibold">XXXX - XXXX - XXXX - 9556</p>
                                                                                      </div>
                                                                                      <div>
                                                                                        <input id="payment-card2" name="payment-cards" type="radio" class="form-check-input !top-[1.5rem]" checked>
                                                                                      </div>
                                                                                  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-6 py-4 border-t border-dashed sm:flex justify-between">
                                                    <button type="button" class="ti-btn ti-btn-danger m-1" id="back-personal-trigger"><i class="ri-user-3-line me-2 align-middle inline-block"></i>Back To Personal Info</button>
                                                    <button type="button" class="ti-btn ti-btn-success m-1" id="continue-payment-trigger">Continue Payment<i class="bi bi-credit-card-2-front align-middle ms-2 inline-block"></i></button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade !border-0 !p-0 hidden" id="delivery-tab-pane" aria-labelledby="delivered-tab" role="tabpanel"
                                                tabindex="0">
                                                <div class="p-[3rem] checkout-payment-success my-3">
                                                    <div class="mb-[3rem]">
                                                        <h5 class="text-success font-semibold text-[1.25rem]">Payment Successful...🤝</h5>
                                                    </div>
                                                    <div class="mb-[3rem] !inline-flex">
                                                        <img src="{{asset('build/assets/images/ecommerce/png/24.png')}}" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="mb-6">
                                                        <p class="mb-1 text-[0.875rem]">You can track your order with Order Id <b>SPK#1FR</b> from <a class="link-success" href="javascript:void(0);"><u class="text-success">Track Order</u></a></p>
                                                        <p class="text-[#8c9097]">Thankyou for shopping with us.</p>
                                                    </div>
                                                    <a href="{{url('products')}}" class="ti-btn bg-success text-white !font-medium">Continue Shopping<i class="bi bi-cart ms-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-header">
                                        <div class="box-title me-1">Order Summary <span class="badge bg-primary/10 text-primary !border-b-0 !rounded-full">02</span></div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <ul class="list-group mb-0 !border-0 !rounded-0">
                                            <li class="list-group-item !border-t-0 !border-s-0 !border-e-0">
                                                <div class="flex items-center flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-lg bg-light">
                                                            <img src="{{asset('build/assets/images/ecommerce/png/1.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">Blue sweatshirt</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Quantity : 2  <span class="badge bg-success/10 text-success ms-4">30% Off</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-end">
                                                            <a aria-label="anchor" href="javascript:void(0)">
                                                                <i class="ri-close-line text-[1rem] text-[#8c9097]"></i>
                                                            </a>
                                                        </p>
                                                        <p class="mb-0 text-[0.875rem] font-semibold">$189<span class="ms-1 text-[#8c9097] text-[0.6875rem]"><s>$329</s></span></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item  !border-s-0 !border-e-0 border-start-0 border-end-0">
                                                <div class="flex items-center flex-wrap">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-lg bg-light">
                                                            <img src="{{asset('build/assets/images/ecommerce/png/7.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 font-semibold">Denim Jacket</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Quantity : 1  <span class="badge bg-success/10 text-success ms-4">10% Off</span></p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-end">
                                                            <a aria-label="anchor" href="javascript:void(0)">
                                                                <i class="ri-close-line text-[1rem] text-[#8c9097]"></i>
                                                            </a>
                                                        </p>
                                                        <p class="mb-0 text-[0.875rem] font-semibold">$129<span class="ms-1 text-[#8c9097] text-[0.6875rem]"><s>$139</s></span></p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="flex items-center justify-between flex-wrap">
                                                <div class="text-[0.75rem] font-semibold bg-primary/10 text-primary p-1 rounded-full">SPRUKO25</div>
                                                <div class="text-success">COUPON APPLIED</div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-[#8c9097] opacity-[0.7]">Sub Total</div>
                                                <div class="font-semibold text-[0.875rem]">$318</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-[#8c9097] opacity-[0.7]">Discount</div>
                                                <div class="font-semibold text-[0.875rem] text-success">10% - $31.8</div>
                                            </div>
                                            <div class="flex items-center justify-between mb-4">
                                                <div class="text-[#8c9097] opacity-[0.7]">Delivery Charges</div>
                                                <div class="font-semibold text-[0.875rem] text-danger">- $29</div>
                                            </div>
                                            <div class="flex items-center justify-between">
                                                <div class="text-[#8c9097] opacity-[0.7]">Service Tax (18%)</div>
                                                <div class="font-semibold text-[0.875rem]">- $45.29</div>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <div class="flex items-center justify-between">
                                                <div class="text-[0.9375rem]">Total :</div>
                                                <div class="font-semibold text-[1rem] text-dark"> $1,387</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->
                    </div>
                    
@endsection

@section('scripts')
  
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Internal Checkout JS -->
        @vite('resources/assets/js/checkout.js')


@endsection   