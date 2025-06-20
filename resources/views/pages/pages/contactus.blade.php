@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Contact Us</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Pages
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Contact Us
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6 !mx-auto">
                        <div class="xxl:col-span-12 xl:col-span-12 lg:col-span-12 md:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-body !p-0">
                                    <div class="contact-page-banner">
                                        <div class="text-center">
                                            <h3 class="text-[1.75rem] font-semibold text-white">Contact US !</h3>
                                            <h6 class="text-[1rem] text-white mb-6">Have any questions ? We would love to hear from you. </h6>
                                            <button type="button" class="ti-btn bg-success text-white !font-medium">Contact <i class="ri-phone-line align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1 col-span-12"></div>
                        <div class="xxl:col-span-10 xl:col-span-10 lg:col-span-10 md:col-span-10 sm:col-span-10 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                    <div class="box contactus-form overflow-hidden">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Get In Touch !
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 gap-x-6 gap-y-4">
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-address-firstname" class="form-label">First Name :</label>
                                                    <input type="text" class="form-control w-full !rounded-md !bg-light !border-0 " id="contact-address-firstname" placeholder="Enter Name">
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-address-lastname" class="form-label">Last Name :</label>
                                                    <input type="text" class="form-control w-full !rounded-md !bg-light !border-0 " id="contact-address-lastname" placeholder="Enter Name">
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-address-phone" class="form-label">Phone No :</label>
                                                    <input type="text" class="form-control w-full !rounded-md !bg-light !border-0 " id="contact-address-phone" placeholder="Enter Phone No">
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-address-email" class="form-label">Email Id :</label>
                                                    <input type="email" class="form-control !rounded-md w-full !bg-light !border-0" id="contact-address-email" placeholder="Enter Email Id">
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-address-address" class="form-label">Address :</label>
                                                    <textarea class="form-control w-full !rounded-md !bg-light !border-0 " id="contact-address-address" rows="2"></textarea>
                                                </div>
                                                <div class="xl:col-span-6 col-span-12">
                                                    <label for="contact-mail-message" class="form-label">Message :</label>
                                                    <textarea class="form-control w-full !rounded-md !bg-light !border-0 " id="contact-mail-message" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="text-center">
                                                <button type="button" class="ti-btn ti-btn-primary !font-medium">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 md:col-span-12 sm:col-span-12 col-span-12">
                                    <div class="box contactus-form overflow-hidden">
                                        <div class="box-body">
                                            <iframe title="" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d30444.274596168965!2d78.54114692513858!3d17.48198883339408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d17.4886524!2d78.5495041!4m5!1s0x3bcb9c7ec139a15d%3A0x326d1c90786b2ab6!2sspruko%20technologies!3m2!1d17.474805099999998!2d78.570258!5e0!3m2!1sen!2sin!4v1670225507254!5m2!1sen!2sin" height="370" class="!border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-1 xl:col-span-1 lg:col-span-1 md:col-span-1 sm:col-span-1  col-span-12"></div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')


@endsection