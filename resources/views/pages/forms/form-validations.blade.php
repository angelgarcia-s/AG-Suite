@extends('layouts.master')

@section('styles')
 
        <!-- Flatpickr Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Validations</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Forms
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Validations
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <!-- Start::row-1 -->
                      <div class="grid grid-cols-12 gap-6">
                          <div class="col-span-12">
                              <div class="box">
                                  <div class="box-header">
                                      <h5 class="box-title">Default Validation</h5>
                                  </div>
                                  <div class="box-body">
                                      <form class="ti-validation">
                                          <div class="grid lg:grid-cols-2 gap-6">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">First Name</label>
                                                  <input type="text" class="my-auto ti-form-input  rounded-sm " placeholder="Firstname" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Last Name</label>
                                                  <input type="text" class="my-auto ti-form-input  rounded-sm " placeholder="Lastname" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Phone Number</label>
                                                  <input type="number" class="my-auto ti-form-input  rounded-sm " placeholder="+91 123-456-789" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Email Address</label>
                                                  <input type="email" class="my-auto ti-form-input  rounded-sm" placeholder="your@site.com" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Password</label>
                                                  <input type="password" class="ti-form-input  rounded-sm" placeholder="password" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Confirm Password</label>
                                                  <input type="password" class="ti-form-input  rounded-sm" placeholder="password" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Date Of Birth</label>
                                                  <input type="date" class="ti-form-input  rounded-sm flatpickr-input" id="date" readonly required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Gender</label>
                                                  <ul class="flex flex-col sm:flex-row">
                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 sm:-ms-px sm:mt-0 !rounded-e-none">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-1" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                          </div>
                                                          <label for="ti-radio-validation-1" class="ms-3 block w-full text-sm text-gray-600">
                                                          Female
                                                          </label>
                                                        </div>
                                                      </li>

                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 sm:-ms-px sm:mt-0 !rounded-none ">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-2" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                          </div>
                                                          <label for="ti-radio-validation-2" class="ms-3 block w-full text-sm text-gray-600">
                                                            Male
                                                          </label>
                                                        </div>
                                                      </li>

                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 sm:-ms-px sm:mt-0 !rounded-s-sm ">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-3" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                          </div>
                                                          <label for="ti-radio-validation-3" class="ms-3 block w-full text-sm text-gray-600">
                                                          Others
                                                          </label>
                                                        </div>
                                                      </li>
                                                    </ul>
                                              </div>
                                          </div>
                                          <div class="my-5">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Address</label>
                                                  <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="Address" required>
                                              </div>
                                          </div>
                                          <div class="grid lg:grid-cols-2 gap-6">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">City</label>
                                                  <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="city" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">State</label>
                                                  <input type="text" class="my-auto ti-form-input  rounded-sm" placeholder="state" required>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Pincode</label>
                                                  <input type="number" class="my-auto ti-form-input  rounded-sm" placeholder="pincode" required>
                                              </div>
                                          </div>
                                          <div class="my-5">
                                              <input type="checkbox" class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1" required>
                                              <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ms-3">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline ms-1">terms and conditions</a></label>
                                          </div>
                                          <button type="submit" class="ti-btn ti-btn-primary-full">Submit</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12">
                              <div class="box">
                                  <div class="box-header">
                                      <h5 class="box-title">Custom Validation</h5>
                                  </div>
                                  <div class="box-body">
                                      <form class="ti-custom-validation" novalidate>
                                          <div class="grid lg:grid-cols-2 gap-6">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">First Name</label>
                                                  <input type="text" class="firstName my-auto ti-form-input  rounded-sm" placeholder="Firstname" value="John mark"  required>
                                                  <span class="firstNameError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Last Name</label>
                                                  <input type="text" class="lastName my-auto ti-form-input  rounded-sm" placeholder="Lastname" required>
                                                  <span class="lastNameError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Phone Number</label>
                                                  <input type="number" class="phonenumber my-auto ti-form-input  rounded-sm" placeholder="+91 123-456-789" required>
                                                  <span class="phoneError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Email Address</label>
                                                  <input type="email" class="email-address my-auto ti-form-input  rounded-sm" placeholder="your@site.com" required>
                                                  <span class="emailError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Password</label>
                                                  <input type="password" class="password ti-form-input  rounded-sm" placeholder="password" required>
                                                  <span class="passwordError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Confirm Password</label>
                                                  <input type="password" class="confirmPassword ti-form-input  rounded-sm" placeholder="password" required>
                                                  <span class="confirmPasswordError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Date Of Birth</label>
                                                  <input type="date" class="birthdate ti-form-input  rounded-sm flatpickr-input" readonly required>
                                                  <span class="dobError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Gender</label>
                                                  <ul class="flex flex-col sm:flex-row">
                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 rounded-none border-e-0 sm:-ms-px sm:mt-0  !rounded-e-sm">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-11" name="ti-radio-validation" type="radio" class="ti-form-radio" checked required>
                                                          </div>
                                                          <label for="ti-radio-validation-11" class="ms-3 block w-full text-sm text-gray-600">
                                                          Female
                                                          </label>
                                                        </div>
                                                      </li>

                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 sm:-ms-px !rounded-none !border-e-0">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-12" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                          </div>
                                                          <label for="ti-radio-validation-12" class="ms-3 block w-full text-sm text-gray-600">
                                                            Male
                                                          </label>
                                                        </div>
                                                      </li>

                                                      <li class="ti-list-group w-full gap-x-2.5 py-2 px-4 bg-white border text-gray-800 rounded-none !rounded-s-sm ">
                                                        <div class="relative flex items-start w-full">
                                                          <div class="flex items-center h-5">
                                                            <input id="ti-radio-validation-13" name="ti-radio-validation" type="radio" class="ti-form-radio" required>
                                                          </div>
                                                          <label for="ti-radio-validation-13" class="ms-3 block w-full text-sm text-gray-600">
                                                          Others
                                                          </label>
                                                        </div>
                                                      </li>
                                                    </ul>
                                              </div>
                                          </div>
                                          <div class="my-5">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Address</label>
                                                  <input type="text" class="postalAddress my-auto ti-form-input  rounded-sm" placeholder="Address" required>
                                                  <span class="addressError text-red-500 text-xs hidden">error</span>
                                              </div>
                                          </div>
                                          <div class="grid lg:grid-cols-2 gap-6">
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">City</label>
                                                  <input type="text" class="cityName my-auto ti-form-input  rounded-sm" placeholder="city" required>
                                                  <span class="cityError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">State</label>
                                                  <input type="text" class="stateName my-auto ti-form-input  rounded-sm" placeholder="state" required>
                                                  <span class="stateError text-red-500 text-xs hidden">error</span>
                                              </div>
                                              <div class="space-y-2">
                                                  <label class="ti-form-label mb-0">Pincode</label>
                                                  <input type="number" class="pincode my-auto ti-form-input  rounded-sm" placeholder="pincode" required>
                                                  <span class="pincodeError text-red-500 text-xs hidden">error</span>
                                              </div>
                                          </div>
                                          <div class="my-5">
                                              <input type="checkbox" class="validationCheckbox ti-form-checkbox mt-0.5" id="hs-checkbox-group-12" required>
                                              <span class="checkboxError text-red-500 text-xs hidden">error</span>
                                              <label for="hs-checkbox-group-12" class="text-sm text-gray-500 sm:ms-3">I agree with the <a href="javascript:void(0);" class="text-primary hover:underline">terms and conditions</a></label>
                                          </div>
                                          <button value="Login Now" type="submit" class="ti-btn ti-btn-primary-full ti-custom-validate-btn">Submit</button>
                                      </form>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <!-- End::row-1 -->

@endsection

@section('scripts')

        <!-- Flatpickr JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Form-validation JS -->
        @vite('resources/assets/js/form-validation.js')


@endsection