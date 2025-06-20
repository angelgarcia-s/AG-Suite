@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Tom Select Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">
      
@endsection

@section('content')
 
                  <div class="container">

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Mail Settings</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Mail
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                               Mail Settings
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6 mb-[3rem]">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header sm:flex block !justify-start">
                                    <nav aria-label="Tabs" class="md:flex block !justify-start whitespace-nowrap">
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 flex-grow  text-[0.75rem] font-medium rounded-md hover:text-primary active" id="Personal-item" data-hs-tab="#personal-info" aria-controls="personal-info">
                                            Personal Information
                                        </a>
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 text-[0.75rem] flex-grow font-medium rounded-md hover:text-primary " id="account-item" data-hs-tab="#account-settings" aria-controls="account-settings">
                                            Account Settings
                                        </a>
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 text-[0.75rem] flex-grow font-medium rounded-md hover:text-primary " id="email-item" data-hs-tab="#email-settings" aria-controls="email-settings">
                                            Email
                                        </a>
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 text-[0.75rem] flex-grow font-medium rounded-md hover:text-primary " id="labels-item" data-hs-tab="#labels" aria-controls="labels">
                                            Labels
                                        </a>
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 text-[0.75rem] flex-grow font-medium rounded-md hover:text-primary " id="notifications-item" data-hs-tab="#notification-settings" aria-controls="notification-settings">
                                            Notifications
                                        </a>
                                        <a class="m-1 block w-full hs-tab-active:bg-primary/10 hs-tab-active:text-primary cursor-pointer text-defaulttextcolor py-2 px-3 text-[0.75rem] flex-grow font-medium rounded-md hover:text-primary " id="security-item" data-hs-tab="#security" aria-controls="security">
                                            Security
                                        </a>
                                    </nav>
                                </div>
                                <div class="box-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="personal-info" aria-labelledby="Personal-item" >
                                            <div class="sm:p-4 p-0">
                                                <h6 class="font-semibold mb-4 text-[1rem]">
                                                    Photo :
                                                </h6>
                                                <div class="mb-6 sm:flex items-center">
                                                    <div class="mb-0 me-[3rem]">
                                                        <span class="avatar avatar-xxl avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" id="profile-img">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="badge rounded-full bg-primary avatar-badge">
                                                                <input type="file" name="photo" class="absolute w-full h-full opacity-0" id="profile-image">
                                                                <i class="fe fe-camera !text-[0.65rem]"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button type="button" class="ti-btn bg-primary text-white !rounded-e-none !font-medium ">Change</button>
                                                        <button type="button" class="ti-btn ti-btn-light !font-medium !rounded-s-none">Remove</button>
                                                    </div>
                                                </div>
                                                <h6 class="font-semibold mb-4 text-[1rem]">
                                                    Profile :
                                                </h6>
                                                <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="first-name" class="form-label">First Name</label>
                                                        <input type="text" class="form-control w-full !rounded-md" id="first-name" placeholder="Firt Name">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="last-name" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control w-full !rounded-md" id="last-name" placeholder="Last Name">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label class="form-label">User Name</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon3">user2413@gmail.com</span>
                                                            <input type="text" class="form-control w-full rounded-md" id="basic-url" aria-describedby="basic-addon3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="font-semibold mb-4 text-[1rem]">
                                                    Personal information :
                                                </h6>
                                                <div class="sm:grid grid-cols-12 gap-6 mb-6">
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="email-address" class="form-label">Email Address :</label>
                                                        <input type="text" class="form-control w-full !rounded-md" id="email-address" placeholder="xyz@gmail.com">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="Contact-Details" class="form-label">Contact Details :</label>
                                                        <input type="text" class="form-control w-full !rounded-md" id="Contact-Details" placeholder="contact details">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label for="language" class="form-label">Language :</label>
                                                        <select class="form-control" name="language" id="language" multiple>
                                                        <option value="Choice 1" selected>English</option>
                                                        <option value="Choice 2">French</option>
                                                        <option value="Choice 3">Arabic</option>
                                                        <option value="Choice 4">Hindi</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12">
                                                        <label class="form-label">Country :</label>
                                                        <select class="form-control w-full !rounded-md" data-trigger name="country-select" id="country-select">
                                                            <option value="Choice 1">Usa</option>
                                                            <option value="Choice 2">Australia</option>
                                                            <option value="Choice 3">Dubai</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label for="bio" class="form-label">Bio :</label>
                                                        <textarea class="form-control w-full !rounded-md" id="bio" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane hidden" id="account-settings" aria-labelledby="account-item" role="tabpanel">
                                            <div class="grid grid-cols-12 gap-4">
                                                <div class="xl:col-span-7 col-span-12">
                                                    <div class="box  shadow-none mb-0 border">
                                                        <div class="box-body">
                                                            <div class="sm:flex block items-center mb-6 justify-between">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Two Step Verification</p>
                                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">Two step verificatoin is very secured and restricts in happening faulty practices.</p>
                                                                </div>
                                                                <div class="custom-toggle-switch sm:ms-2 ms-0">
                                                                    <input id="two-step" name="toggleswitchsize" type="checkbox" checked>
                                                                    <label for="two-step" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center mb-6 justify-between">
                                                                <div class="sm:mb-0 mb-2">
                                                                    <p class="text-[0.875rem] mb-2 font-semibold">Authentication</p>
                                                                    <div class="mb-0">
                                                                        <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                            <input type="radio" class="btn-check " name="btnradio" id="btnradio1" checked>
                                                                            <label class="ti-btn  bg-primary text-white !border-e-0 !rounded-e-none" for="btnradio1"><i class="ri-lock-unlock-line me-1 align-middle inline-block"></i>Pin</label>
                                                                            <input type="radio" class="btn-check " name="btnradio" id="btnradio2">
                                                                            <label class="ti-btn ti-btn-outline-primary !rounded-none !border-e-0" for="btnradio2"><i class="ri-lock-password-line me-1 align-middle inline-block"></i>Password</label>
                                                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                                                            <label class="ti-btn ti-btn-outline-primary !rounded-s-none" for="btnradio3"><i class="ri-fingerprint-line me-1 align-middle inline-block"></i>Finger Print</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="custom-toggle-switch sm:ms-2 ms-0">
                                                                    <input id="authentication" name="toggleswitchsize1" type="checkbox" checked>
                                                                    <label for="authentication" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center mb-6 justify-between">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Recovery Mail</p>
                                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">Incase of forgetting password mails are sent to  heifo@gmail.com</p>
                                                                </div>
                                                                <div class="custom-toggle-switch sm:ms-2 ms-0">
                                                                    <input id="recovery-mail" name="toggleswitchsize2" type="checkbox" checked>
                                                                    <label for="recovery-mail" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center mb-6 justify-between">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">SMS Recovery</p>
                                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">SMS are sent to 9102312xx in case of recovery</p>
                                                                </div>
                                                                <div class="custom-toggle-switch sm:ms-2 ms-0">
                                                                    <input id="sms-recovery" name="toggleswitchsize3" type="checkbox" checked>
                                                                    <label for="sms-recovery" class="label-primary mb-1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Reset Password</p>
                                                                    <p class="text-[0.75rem] text-[#8c9097]">Password should be min of <b class="text-success">8 digits<sup>*</sup></b>,atleast <b class="text-success">One Capital letter<sup>*</sup></b> and <b class="text-success">One Special Character<sup>*</sup></b> included.</p>
                                                                    <div class="mb-2">
                                                                        <label for="current-password" class="form-label">Current Password</label>
                                                                        <input type="text" class="form-control w-full !rounded-md" id="current-password" placeholder="Current Password">
                                                                    </div>
                                                                    <div class="mb-2">
                                                                        <label for="new-password" class="form-label">New Password</label>
                                                                        <input type="text" class="form-control w-full !rounded-md" id="new-password" placeholder="New Password">
                                                                    </div>
                                                                    <div class="mb-0">
                                                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                                                        <input type="text" class="form-control w-full !rounded-md" id="confirm-password" placeholder="Confirm Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-1 col-span-12"></div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box shadow-none mb-0 border">
                                                        <div class="box-header justify-between items-center sm:flex block">
                                                            <div class="box-title">Registered Devices</div>
                                                            <div class="sm:mt-0">
                                                                <button type="button" class="ti-btn !py-1 !px-2 bg-primary text-white !text-[0.75rem] !font-medium">Signout from all devices</button>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="sm:flex block items-center">
                                                                        <div class="lh-1 sm:mb-0 mb-2"><i class="bi bi-phone me-2 text-base align-middle text-[#8c9097]"></i></div>
                                                                        <div class="lh-1 flex-grow">
                                                                            <p class="mb-0">
                                                                                <span class="font-semibold">Mobile-LG-1023</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-[#8c9097] text-[0.6875rem]">Manchester, UK-Nov 30, 04:45PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="hs-dropdown ti-dropdown">
                                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                                              class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                                              aria-expanded="false">
                                                                              <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                                            </a>
                                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Another action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="sm:flex block items-center">
                                                                        <div class="lh-1 sm:mb-0 mb-2"><i class="bi bi-laptop me-2 text-base align-middle text-[#8c9097]"></i></div>
                                                                        <div class="lh-1 flex-grow">
                                                                            <p class="mb-0">
                                                                                <span class="font-semibold">Lenovo-1291203</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-[#8c9097] text-[0.6875rem]">England, UK-Aug 12, 12:25PM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="hs-dropdown ti-dropdown">
                                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                                              class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                                              aria-expanded="false">
                                                                              <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                                            </a>
                                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Another action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                          </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="sm:flex block items-center">
                                                                        <div class="lh-1 sm:mb-0 mb-2"><i class="bi bi-laptop me-2 text-base align-middle text-[#8c9097]"></i></div>
                                                                        <div class="lh-1 flex-grow">
                                                                            <p class="mb-0">
                                                                                <span class="font-semibold">Macbook-Suzika</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-[#8c9097] text-[0.6875rem]">Brightoon, UK-Jul 18, 8:34AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="hs-dropdown ti-dropdown">
                                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                                              class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                                              aria-expanded="false">
                                                                              <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                                            </a>
                                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Another action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                          </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="sm:flex block items-center">
                                                                        <div class="lh-1 sm:mb-0 mb-2"><i class="bi bi-pc-display-horizontal me-2 text-base align-middle text-[#8c9097]"></i></div>
                                                                        <div class="lh-1 flex-grow">
                                                                            <p class="mb-0">
                                                                                <span class="font-semibold">Apple-Desktop</span>
                                                                            </p>
                                                                            <p class="mb-0">
                                                                                <span class="text-[#8c9097] text-[0.6875rem]">Darlington, UK-Jan 14, 11:14AM</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="hs-dropdown ti-dropdown">
                                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                                              class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                                              aria-expanded="false">
                                                                              <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                                            </a>
                                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Another action</a></li>
                                                                              <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                                                  href="javascript:void(0);">Something else here</a></li>
                                                                            </ul>
                                                                          </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 hidden" id="email-settings" aria-labelledby="email-item" role="tabpanel">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item !border-t-0 !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-12 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Menu View :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Default View
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Advanced View
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="menu-view" name="toggleswitchsize4" type="checkbox" checked>
                                                                <label for="menu-view" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Language :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <label for="mail-language" class="form-label">Languages :</label>
                                                            <select class="form-control" name="mail-language" id="mail-language" multiple>
                                                            <option value="Choice 1" selected>English</option>
                                                            <option value="Choice 2" selected>French</option>
                                                            <option value="Choice 3">Arabic</option>
                                                            <option value="Choice 4">Hindi</option>
                                                            </select>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="mail-languages" name="toggleswitchsize5" type="checkbox">
                                                                <label for="mail-languages" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Images :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="images-open" id="images-open1">
                                                                <label class="form-check-label" for="images-open1">
                                                                    Always Open Images
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="images-open" id="images-hide2" checked>
                                                                <label class="form-check-label" for="images-hide2">
                                                                    Ask For Permission
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="mails-images" name="toggleswitchsize6" type="checkbox">
                                                                <label for="mails-images" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Keyboard Shortcuts :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-enable1">
                                                                <label class="form-check-label" for="keyboard-enable1">
                                                                    Keyboard Shortcuts Enable
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="keyboard-enable" id="keyboard-disable2" checked>
                                                                <label class="form-check-label" for="keyboard-disable2">
                                                                    Keyboard Shortcuts Disable
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="keyboard-shortcuts" name="toggleswitchsize7" type="checkbox">
                                                                <label for="keyboard-shortcuts" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Notifications :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="checkbox" value="" id="desktop-notifications" checked>
                                                                <label class="form-check-label" for="desktop-notifications">
                                                                    Desktop Notifications
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="checkbox" value="" id="mobile-notifications">
                                                                <label class="form-check-label" for="mobile-notifications">
                                                                    Mobile Notifications
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="ltr:sm:float-right rtl:sm:float-left">
                                                                <a href="javascript:void(0)" class="ti-btn ti-btn-outline-success !py-1 !px-2 !text-[0.75rem]">Learn-more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Maximum Mails Per Page :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <select class="form-control w-full !rounded-md" data-trigger name="mail-per-page" id="mail-per-page">
                                                            <option value="Choice 1" selected>10</option>
                                                            <option value="Choice 2">50</option>
                                                            <option value="Choice 3">100</option>
                                                            <option value="Choice 3">120</option>
                                                            </select>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="mails-per-page" name="toggleswitchsize8" type="checkbox">
                                                                <label for="mails-per-page" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Mail Composer :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="mail-composeron" id="mail-composeron1">
                                                                <label class="form-check-label" for="mail-composeron1">
                                                                    Mail Composer On
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="mail-composeron" id="mail-composeroff2" checked>
                                                                <label class="form-check-label" for="mail-composeroff2">
                                                                    Mail Composer Off
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="mail-composer" name="toggleswitchsize9" type="checkbox">
                                                                <label for="mail-composer" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Auto Correct :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="auto-correcton" id="auto-correcton1">
                                                                <label class="form-check-label" for="auto-correcton1">
                                                                    Auto Correct On
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="radio" name="auto-correcton" id="auto-correctoff2" checked>
                                                                <label class="form-check-label" for="auto-correctoff2">
                                                                    Auto Correct Off
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                <input id="auto-correct" name="toggleswitchsize10" type="checkbox">
                                                                <label for="auto-correct" class="label-danger mb-1"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-e-0 !border-s-0 !border-b-0">
                                                    <div class="grid grid-cols-12 gap-4">
                                                        <div class="xl:col-span-3 col-span-12">
                                                            <span class="text-[0.875rem] font-semibold mb-0">Mail Send Action :</span>
                                                        </div>
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="checkbox" value="" id="on-keyboard" checked>
                                                                <label class="form-check-label" for="on-keyboard">
                                                                    On Keyboard Action
                                                                </label>
                                                            </div>
                                                            <div class="form-check !ps-0">
                                                                <input class="form-check-input" type="checkbox" value="" id="on-buttonclick">
                                                                <label class="form-check-label" for="on-buttonclick">
                                                                    On Button Click
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="ltr:sm:float-right rtl:sm:float-left">
                                                                <a href="javascript:void(0)" class="ti-btn ti-btn-outline-success !py-1 !px-2 !text-[0.75rem]">Learn-more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane hidden" id="labels" aria-labelledby="labels-item" role="tabpanel">
                                            <p class="text-[0.875rem] font-semibold mb-3">Mail Labels :</p>
                                            <div class="grid grid-cols-12 gap-4">
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">All Mails</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-allmails" id="all-mails-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium bg-primary text-white !rounded-e-none !border-e-0" for="all-mails-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-allmails" id="all-mails-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium btn-sm ti-btn-outline-primary !rounded-s-none" for="all-mails-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Inbox</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="inbox-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-inbox" id="inbox-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="inbox-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Sent</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-sent" id="sent-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="sent-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-sent" id="sent-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="sent-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Drafts</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-drafts" id="drafts-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="drafts-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-drafts" id="drafts-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="drafts-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Spam</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-spam" id="spam-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium bg-primary text-white !rounded-e-none !border-e-0" for="spam-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-spam" id="spam-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="spam-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Important</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-important" id="important-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium bg-primary text-white !rounded-e-none !border-e-0" for="important-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-important" id="important-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="important-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Trash</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-trash" id="trash-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="trash-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-trash" id="trash-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="trash-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Archive</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-archive" id="archive-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="archive-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-archive" id="archive-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="archive-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Starred</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-starred" id="starred-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="starred-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-starred" id="starred-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="starred-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-[0.875rem] font-semibold mb-3">Settings :</p>
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Settings</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-settings" id="settings-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="settings-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-settings" id="settings-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="settings-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-[0.875rem] font-semibold mb-3">Custom Labels :</p>
                                            <div class="grid grid-cols-12 gap-4">
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Mail</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-custom-mail" id="custom-mail-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="custom-mail-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-custom-mail" id="custom-mail-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="custom-mail-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Home</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-home" id="home-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="home-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-home" id="home-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="home-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Work</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-work" id="work-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="work-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-work" id="work-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="work-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-3 col-span-12">
                                                    <div class="box !shadow-none border">
                                                        <div class="box-body flex items-center justify-between flex-wrap gap-2">
                                                            <div class="">
                                                                <span class="font-semibold">Friends</span>
                                                            </div>
                                                            <div>
                                                                <div class="inline-flex" role="group" aria-label="Basic radio toggle button group">
                                                                    <input type="radio" class="btn-check" name="label-friends" id="friends-enable" checked>
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium  bg-primary text-white !rounded-e-none !border-e-0" for="friends-enable">Enable</label>
                                                                    <input type="radio" class="btn-check" name="label-friends" id="friends-disable">
                                                                    <label class="ti-btn !text-[0.75rem] !font-medium ti-btn-outline-primary !rounded-s-none" for="friends-disable">Disable</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 !border-0 hidden" id="notification-settings" aria-labelledby="notifications-item" role="tabpanel">
                                            <ul class="list-group list-group-flush list-none !rounded-md">
                                                <li class="list-group-item">
                                                    <div class="grid grid-cols-12 xl:gap-x-[3rem] gap-y-4">
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-semibold">Email Notifications</p>
                                                            <p class="text-[0.75rem] mb-0 text-[#8c9097]">Email notifications are the notifications you will receeive when you are offline, you can customize them by enabling or disabling them.</p>
                                                        </div>
                                                        <div class="xl:col-span-7 col-span-12">
                                                            <div class="flex items-center justify-between sm:mt-0 mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Updates &amp; Features</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Notifications about new updates and their features.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="update-features" name="toggleswitchsize11" type="checkbox" checked>
                                                                        <label for="update-features" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Early Access</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Users are selected for beta testing of new update,notifications relating or participate in any of paid product promotion.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="early-access" name="toggleswitchsize12" type="checkbox">
                                                                        <label for="early-access" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Email Shortcuts</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Shortcut notifications for email.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="email-shortcut" name="toggleswitchsize13" type="checkbox" checked>
                                                                        <label for="email-shortcut" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">New Mails</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Notifications related to new mails received.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="new-mails" name="toggleswitchsize14" type="checkbox" checked>
                                                                        <label for="new-mails" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Mail Chat Messages</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Any of new messages are received will be updated through notifications.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="mail-chat-messages" name="toggleswitchsize15" type="checkbox" checked>
                                                                        <label for="mail-chat-messages" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="grid grid-cols-12 xl:gap-x-[3rem] gap-y-4">
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-semibold">Push Notifications</p>
                                                            <p class="text-[0.75rem] mb-0 text-[#8c9097]">Push notifications are recieved when you are online, you can customize them by enabling or disabling them.</p>
                                                        </div>
                                                        <div class="xl:col-span-7 col-span-12">
                                                            <div class="flex items-center justify-between sm:mt-0 mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">New Mails</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Notifications related to new mails received.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="push-new-mails" name="toggleswitchsize16" type="checkbox" checked>
                                                                        <label for="push-new-mails" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Mail Chat Messages</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Any of new messages are received will be updated through notifications.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="push-mail-chat-messages" name="toggleswitchsize17" type="checkbox" checked>
                                                                        <label for="push-mail-chat-messages" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center justify-between mt-4">
                                                                <div class="mail-notification-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Mail Extensions</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Notifications related to the extensions received by new emails and thier propertied also been displayed.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="mail-extensions" name="toggleswitchsize18" type="checkbox">
                                                                        <label for="mail-extensions" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane  !p-0 hidden" id="security" aria-labelledby="security-item" role="tabpanel">
                                            <ul class="list-group !border-0 list-group-flush list-unstyled">
                                                <li class="list-group-item !border !border-defaultborder !border-t-0 !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 xl:gap-x-[3rem] gap-y-4">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-semibold">Logging In</p>
                                                            <p class="text-[0.75rem] mb-0 text-[#8c9097]">Security settings related to logging into our email account and taking down account if any mischevious action happended.</p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12">
                                                            <div class="sm:flex block items-center justify-between sm:mt-0 mt-4">
                                                                <div class="mail-security-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Max Limit for login attempts</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Account will freeze for 24hrs while attempt to login with wrong credentials for selected number of times</p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control w-full !rounded-md" data-trigger name="max-login-attempts" id="max-login-attempts">
                                                                    <option value="Choice 1" selected>3 Attempts</option>
                                                                    <option value="Choice 2">5 Attempts</option>
                                                                    <option value="Choice 3">10 Attempts</option>
                                                                    <option value="Choice 3">20 Attempts</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center justify-between mt-4">
                                                                <div class="mail-security-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Account Freeze time management</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">You can change the time for the account freeze when attempts for </p>
                                                                </div>
                                                                <div>
                                                                    <select class="form-control w-full !rounded-md" data-trigger name="account-freeze-time-format" id="account-freeze-time-format">
                                                                    <option value="Choice 1" selected>1 Day</option>
                                                                    <option value="Choice 2">1 Hour</option>
                                                                    <option value="Choice 3">1 Month</option>
                                                                    <option value="Choice 3">1 Year</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border !border-defaultborder !border-t-0 !border-e-0 !border-s-0">
                                                    <div class="grid grid-cols-12 xl:gap-x-[3rem] gap-y-4">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-base mb-1 font-semibold">Password Requirements</p>
                                                            <p class="text-[0.75rem] mb-0 text-[#8c9097]">Security settings related to password strength.</p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12">
                                                            <div class="sm:flex block items-center justify-between sm:mt-0 mt-4">
                                                                <div class="mail-security-settings">
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Minimun number of characters in the password</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">There should be a minimum number of characters for a password to be validated that shouls be set here.</p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control !rounded-md" value="8">
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center justify-between mt-4">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Contain A Number</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Password should contain a number.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="password-number" name="toggleswitchsize19" type="checkbox">
                                                                        <label for="password-number" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center justify-between mt-4">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Contain A Special Character</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Password should contain a special Character.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="password-special-character" name="toggleswitchsize20" type="checkbox" checked>
                                                                        <label for="password-special-character" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center justify-between mt-4">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Atleast One Capital Letter</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Password should contain atleast one capital letter.</p>
                                                                </div>
                                                                <div>
                                                                    <div class="custom-toggle-switch ltr:sm:float-right rtl:sm:float-left">
                                                                        <input id="password-capital" name="toggleswitchsize21" type="checkbox" checked>
                                                                        <label for="password-capital" class="label-success mb-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex block items-center justify-between mt-4">
                                                                <div>
                                                                    <p class="text-[0.875rem] mb-1 font-semibold">Maximun Password Length</p>
                                                                    <p class="text-[0.75rem] mb-0 text-[#8c9097]">Maximum password lenth should be selected here.</p>
                                                                </div>
                                                                <div>
                                                                    <input type="text" class="form-control !rounded-md" value="16">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-0">
                                                    <div class="grid grid-cols-12 xl:gap-x-[3rem] gap-y-4">
                                                        <div class="xl:col-span-4 col-span-12">
                                                            <p class="text-[1rem] mb-1 font-semibold">Unknown Chats</p>
                                                            <p class="text-[0.75rem] mb-0 text-[#8c9097]">Security settings related to unknown chats.</p>
                                                        </div>
                                                        <div class="xl:col-span-8 col-span-12">
                                                            <div>
                                                                <div class="form-check !ps-0">
                                                                    <input class="form-check-input" type="radio" name="unknown-messages-show" id="unknown-messages-show1">
                                                                    <label class="form-check-label" for="unknown-messages-show1">
                                                                        Show
                                                                    </label>
                                                                </div>
                                                                <div class="form-check !ps-0">
                                                                    <input class="form-check-input" type="radio" name="unknown-messages-show" id="unknown-messages-hide2" checked>
                                                                    <label class="form-check-label" for="unknown-messages-hide2">
                                                                        Hide
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="ltr:float-right rtl:float-left">
                                        <button type="button" class="ti-btn ti-btn-light m-1">
                                            Restore Defaults
                                        </button>
                                        <button type="button" class="ti-btn bg-primary text-white m-1">
                                            Save Changes
                                        </button>
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

        <!-- Mail Settings -->
        @vite('resources/assets/js/mail-settings.js')

   
@endsection 