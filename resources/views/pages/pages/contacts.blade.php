@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box mt-6">
                                    <div class="box-body">
                                        <div class="contact-header">
                                            <div class="sm:flex block items-center justify-between">
                                                <div class="h5 font-semibold mb-0">Contacts</div>
                                                <div class="flex sm:mt-0 mt-2 items-center">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control !rounded-s-sm w-full !bg-light !border-0" placeholder="Search Contact" aria-describedby="search-contact-member">
                                                        <button  aria-label="button" type="button" class="ti-btn ti-btn-light  !rounded-s-none !mb-0" id="search-contact-member"><i class="ri-search-line text-[#8c9097]"></i></button>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown ms-2">
                                                        <button  aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-primary w-[2.313rem] h-[2.313rem]" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete All</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Copy All</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-secondary !ms-2 w-[2.313rem] h-[2.313rem]"><i class="ri-add-line"></i>
                                                            <span
                                                                class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                role="tooltip">
                                                            Add Contacts
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start ">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class=" mb-1 font-semibold text-[1rem]">
                                                        Melissa Jane
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">melissajane2134@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 354 2345
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill text-[1rem] text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start ">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class=" text-[1rem] mb-1 font-semibold">
                                                        Simon Cowall
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">simoncowal111@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 873 8923
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class=" text-[1rem] mb-1 font-semibold">
                                                        Susana Sane
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">susanasane@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 347 0923
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill text-[1rem] text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light" aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Sahne Watson
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">shanewatson@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 674 7824
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Dwayne Happy
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">dwaynehappy235@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 985 2893
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Meisha Tite
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">meishatite456@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 675 4680
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light" aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Andrew Gerfield
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">andrewgerfield00@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 765 8937
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Samantha Melon
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">samanthamelon@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 890 5687
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Elisha Smith
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">elishasmith@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 972 9883
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-light" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-63.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Devon Convoy
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">devonconvoy65@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 693 7836
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill text-[1rem] text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3 bg-primary text-white font-medium">
                                                    SJ
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Shensovic Jeremy
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">shensovicjeremy@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 238 2342
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light" aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Jason Mama
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">jasonmama96@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 875 6789
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light" aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Monika Karen
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">monikakaren@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 568 9234
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-13.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Tom Holland
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">tomholland98@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 892 4334
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-36.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Anelica Julie
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">angelicajulie@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 882 3445
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Aneera Khan
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">aneerakhan@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 973 8734
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light" aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Linda Simson
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">lindasimson@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 234 9345
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill text-[1rem] text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Umaga Nigel
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">umaganigel89@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 783 0213
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-8.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Json Taylor
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">jsontaylor@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 234 2452
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-fill text-[1rem] text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Karizma Tope
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">Karizmatope@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 890 2455
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-34.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Gahaskar Shaik
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">gahaskarshaik@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 982 7648
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/media/media-21.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Balvinder Singh
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">balvindersingh@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 002 1239
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body contact-action">
                                        <div class="contact-overlay"></div>
                                        <div class="flex items-start">
                                            <div class="flex flex-grow flex-wrap gap-2">
                                                <div class="avatar avatar-xl avatar-rounded me-3">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                </div>
                                                <div>
                                                    <h6 class="text-[1rem] mb-1 font-semibold">
                                                        Ramika Missi
                                                    </h6>
                                                    <p class="mb-1 text-[#8c9097] contact-mail text-truncate">ramikamissi@gmail.com</p>
                                                    <p class="font-semibold text-[0.6875rem] mb-0 !text-primary">
                                                        +1(555) 982 4834
                                                    </p>
                                                </div>
                                            </div>
                                            <div>
                                                <i class="ri-heart-3-line text-[1rem] text-[#8c9097]"></i>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center gap-2 contact-hover-buttons">
                                            <button type="button" class="ti-btn btn-sm ti-btn-light contact-hover-btn !py-1 !px-2 !text-[0.75rem] !font-medium">
                                                View Contact
                                            </button>
                                            <div class="hs-dropdown ti-dropdwon contact-hover-dropdown">
                                                <button class="ti-btn ti-btn-sm ti-btn-light"  aria-label="button" type="button" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item flex !gap-x-0 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="ri-share-line me-2 align-middle inline-block"></i>Share</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-phone-line me-2 align-middle inline-block"></i>Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-chat-2-line me-2 align-middle inline-block"></i>Message</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-video-chat-line me-2 align-middle inline-block"></i>Video Call</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle inline-block"></i>Delete</a></li>
                                                    <li><a class="ti-dropdown-item flex !gap-x-0" href="javascript:void(0);"><i class="ri ri-heart-3-line me-2 align-middle inline-block"></i>Favourite</a></li>
                                                </ul>
                                            </div>
                                            <button aria-label="button" class="ti-btn !py-[0.14rem] !px-2 ti-btn-light contact-hover-dropdown1" type="button">
                                                <i class="ri-heart-3-fill text-danger"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav aria-label="Page navigation" class="mb-4">
                            <ul class="ti-pagination !justify-end py-[0.375rem] px-3 text-[1rem] flex flex-row">
                                <li class="page-item disabled"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">Previous</a></li>
                                <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link py-[0.375rem] px-3" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                        <!--End::row-1 -->
           
@endsection

@section('scripts')


@endsection
