@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Tom Select Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">

        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.snow.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/quill/quill.bubble.css')}}">
      
@endsection

@section('content')

                    <div class="container-fluid">
                        <div class="main-mail-container !p-2 gap-x-2 flex">
                            <div class="mail-navigation border">
                                <div class="grid items-start !p-4 border-b">
                                    <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn !bg-success text-white flex items-center justify-center !font-medium" data-hs-overlay="#todo-compose"><i class="ri-add-circle-line text-[1rem] align-middle"></i>Compose Mail
                                    </a>
                                    <div id="todo-compose" class="hs-overlay hidden ti-modal">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                          <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h6 class="modal-title text-[1rem] font-semibold text-defaulttextcolor" id="mail-ComposeLabel">Compose Mail</h6>
                                                  <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#todo-compose">
                                                    <span class="sr-only">Close</span>
                                                    <i class="ri-close-line"></i>
                                                  </button>
                                            </div>
                                            <div class="ti-modal-body px-4">
                                                <div class="grid grid-cols-12 gap-6">
                                                    <div class="xl:col-span-6 col-span-12 mb-2">
                                                        <label for="fromMail" class="form-label">From<sup class="top-[0.5em]"><i class="ri-star-s-fill text-success text-[0.5rem]"></i></sup></label>
                                                        <input type="email" class="form-control" id="fromMail" value="jsontaylor2345@gmail.com">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12 mb-2">
                                                        <label for="toMail" class="form-label">To<sup class="top-[0.5em]"><i class="ri-star-s-fill text-success text-[0.5rem]"></i></sup></label>
                                                        <select class="form-control" name="toMail" id="toMail" multiple>
                                                            <option value="Choice 1" selected>jay@gmail.com</option>
                                                            <option value="Choice 2">kia@gmail.com</option>
                                                            <option value="Choice 3">don@gmail.com</option>
                                                            <option value="Choice 4">kimo@gmail.com</option>
                                                        </select>
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12 mb-2">
                                                        <label for="mailCC" class="form-label text-dark font-semibold">Cc</label>
                                                        <input type="email" class="form-control" id="mailCC">
                                                    </div>
                                                    <div class="xl:col-span-6 col-span-12 mb-2">
                                                        <label for="mailBcc" class="form-label text-dark font-semibold">Bcc</label>
                                                        <input type="email" class="form-control" id="mailBcc">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12 mb-2">
                                                        <label for="Subject" class="form-label">Subject</label>
                                                        <input type="text" class="form-control" id="Subject" placeholder="Subject">
                                                    </div>
                                                    <div class="xl:col-span-12 col-span-12">
                                                        <label class="col-form-label">Content :</label>
                                                        <div class="mail-compose">
                                                            <div id="mail-compose-editor"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button"
                                                class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                data-hs-overlay="#todo-compose">
                                                Close
                                              </button>
                                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Send</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start !p-4 !bg-primary">
                                    <div>
                                        <span class="avatar avatar-md online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="ms-2">
                                        <p class="font-semibold mb-0 text-white">Json Taylor</p>
                                        <p class="text-white opacity-[0.7] text-[.6875rem] mb-0">jsontaylor1992@gmail.com</p>
                                    </div>
                                </div>
                                <div>
                                    <ul class="list-none mail-main-nav !text-[0.813rem]" id="mail-main-nav">
                                        <li class="!px-0 !pt-0">
                                            <span class="text-[.6875rem] text-[#8c9097] opacity-[0.7] font-semibold">MAILS</span>
                                        </li>
                                        <li class="active mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-inbox-archive-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        All Mails
                                                    </span>
                                                    <span class="badge bg-success/10 text-success !rounded-full">12,456</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-inbox-archive-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Inbox
                                                    </span>
                                                    <span class="badge bg-primary/10 text-primary !rounded-full">8</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-send-plane-2-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Sent
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-draft-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Drafts
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-spam-2-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Spam
                                                    </span>
                                                    <span class="badge bg-danger/10 text-danger !rounded-full">4</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-bookmark-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Important
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-delete-bin-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Trash
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-archive-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Archive
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mail-type">
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-star-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Starred
                                                    </span>
                                                    <span class="badge bg-warning/10 text-warning !rounded-full">12</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-0">
                                            <span class="text-[.6875rem] text-[#8c9097] opacity-[0.7] font-semibold">SETTINGS</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i class="ri-settings-3-line align-middle text-[.875rem]"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Settings
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-0">
                                            <span class="text-[.6875rem] text-[#8c9097] opacity-[0.7] font-semibold">LABELS</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i
                                                            class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-secondary"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Mail
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i
                                                            class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-danger"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Home
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i
                                                            class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-success"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Work
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-center">
                                                    <span class="me-2 leading-none">
                                                        <i
                                                            class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-black"></i>
                                                    </span>
                                                    <span class="flex-grow whitespace-nowrap">
                                                        Friends
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="px-0">
                                            <span class="text-[.6875rem] text-[#8c9097] opacity-[0.7] font-semibold">ONLINE USERS</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-start leading-none">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm online avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="text-defaulttextcolor font-semibold mb-1">Angelica</p>
                                                        <p class="text-[0.75rem] text-[#8c9097] mb-0">Hello this is angelica.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="flex items-start leading-none">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-sm online avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="text-defaulttextcolor font-semibold mb-1">Rexha</p>
                                                        <p class="text-[0.75rem] text-[#8c9097] mb-0">Thanks for sharing file 😀.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="total-mails border">
                                <div class="!p-4 flex items-center border-b">
                                    <div class="me-4">
                                        <input class="form-check-input" type="checkbox" id="checkAll" value="" aria-label="...">
                                    </div>
                                    <div class="flex-grow">
                                        <h6 class="font-semibold mb-0 text-[1rem] !text-defaulttextcolor">All Mails</h6>
                                    </div>
                                    <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light me-1 lg:hidden block total-mails-close !mb-0">
                                        <i class="ri-close-line"></i>
                                    </button>
                                    <div class="hs-dropdown ti-dropdown  hidden">
                                        <button aria-label="button" class="!w-[2.313rem] !h-[2.313rem]  rounded-sm ti-btn-icon ti-btn-light" type="button"
                                            aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);">Recent</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);">Unread</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);">Mark All Read</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);">Spam</a></li>
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);">Delete All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control !bg-light !border-0 !rounded-s-md" placeholder="Search Email" aria-describedby="button-addon2">
                                        <button aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button" id="button-addon2"><i class="ri-search-line text-[#8c9097]"></i></button>
                                    </div>
                                </div>
                                <div class="mail-messages" id="mail-messages">
                                    <ul class="list-none mb-0 mail-messages-container text-defaulttextcolor text-defaultsize">
                                        <li class="!border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-4 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Sujika <span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]"><span class="me-2"><i class="ri-attachment-2 align-middle text-[0.75rem]"></i></span>1:32PM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">New Project details</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button aria-label="button" type="button" class="btn p-0 leading-none mail-starred true border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="active !border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-4 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..." checked>
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Michael Jeremy <span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">10:27AM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold">History of planets are discovered yesterday.</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button aria-label="button" type="button" class="btn p-0 leading-none mail-starred border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            King Berunda <span class="badge bg-success text-white">Promotion</span><span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">Yesterday, 10:27AM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">Request for return of item ?</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button aria-label="button" type="button" class="btn p-0 leading-none mail-starred border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel54" value="" aria-label="..." checked>
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Samantha May <span class="badge bg-primary text-white">Social</span><span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">24 Oct, 5:45PM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold">Completion of work is pending</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button type="button" aria-label="button" class="btn p-0 leading-none mail-starred border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel14" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Alex Carey <span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">12 Sep, 11:24AM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">Most Probable date of project completion</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button aria-label="button" type="button" class="btn p-0 leading-none mail-starred true border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel24" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Dawn Bradshaw <span class="badge bg-danger text-white">Personal</span><span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">11 Sep, 10:32AM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">Personal Mail</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button aria-label="button" type="button" class="btn p-0 leading-none mail-starred true border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel34" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            Kiara Jah <span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">08 Aug, 08:12AM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">Applying for bank loan?</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button type="button" aria-label="button" class="btn p-0 leading-none mail-starred border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="!border-t-0 !border-x-0">
                                            <div class="flex items-start">
                                                <div class="me-3 mt-1">
                                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel44" value="" aria-label="...">
                                                </div>
                                                <div class="me-1 leading-none">
                                                    <span
                                                        class="avatar avatar-md offline me-2 avatar-rounded mail-msg-avatar">
                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);">
                                                        <p class="mb-1 text-[0.75rem]">
                                                            David Subhman <span
                                                                class="ltr:float-right rtl:float-left text-[#8c9097] font-normal text-[.6875rem]">16 July, 05:52PM</span>
                                                        </p>
                                                    </a>
                                                    <p class="mail-msg mb-0">
                                                        <span class="block mb-0 font-semibold ">Life Insurance Corparation.</span>
                                                        <span
                                                            class="text-[.6875rem] text-[#8c9097] text-wrap ">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit
                                                            <button type="button" aria-label="button" class="tt-btn p-0 leading-none mail-starred border-0 ltr:float-right rtl:float-left">
                                                                <i class="ri-star-fill text-[.875rem]"></i>
                                                            </button>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mails-information border text-defaulttextcolor text-defaultsize">
                                <div class="mail-info-header flex flex-wrap gap-2 items-center">
                                    <div class="me-1">
                                        <span class="avatar avatar-md online me-2 avatar-rounded mail-msg-avatar">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                        </span>
                                    </div>
                                    <div class="flex-grow">
                                        <h6 class="mb-0 font-semibold text-[1rem]">Michael Jeremy</h6>
                                        <span class="text-[#8c9097] text-[0.75rem]">michaeljeremy2194@gmail.com</span>
                                    </div>
                                    <div class="mail-action-icons">
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-star-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Starred
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-inbox-archive-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Archive
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-spam-2-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Spam
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-delete-bin-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Delete
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-reply-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Reply
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="responsive-mail-action-icons">
                                        <div class="hs-dropdown ti-dropdown  hidden">
                                            <button aria-label="button" class="!w-[2.313rem] !h-[2.313rem]  rounded-sm ti-btn-icon ti-btn-light" type="button" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="inline-flex ri-star-line me-1 align-middle"></i>Starred</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="inline-flex ri-inbox-archive-line me-1 align-middle"></i>Archive</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="inline-flex ri-spam-2-line me-1 align-middle"></i>Report Spam</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="inline-flex ri-delete-bin-line me-1 align-middle"></i>Delete</a></li>
                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium" href="javascript:void(0);"><i class="inline-flex ri-reply-line me-1 align-middle"></i>Reply</a></li>
                                            </ul>
                                        </div>
                                        <button aria-label="button" type="button" class="ti-btn ti-btn-icon ti-btn-light ms-1">
                                            <i class="ri-close-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mail-info-body  p-6" id="mail-info-body">
                                    <div class="sm:flex block items-center justify-between mb-6">
                                        <div>
                                            <p class="text-[1.25rem] font-semibold mb-0">History of planets are discovered yesterday.</p>
                                        </div>
                                        <div class="ltr:float-right rtl:float-left">
                                            <span class="me-2 text-[0.75rem] text-[#8c9097]">Oct-22-2022,03:05PM</span>
                                        </div>
                                    </div>
                                    <div class="main-mail-content mb-6">
                                        <p class="text-[.875rem] font-semibold mb-4">Hi, Json Taylor Greetings 🖐</p>
                                        <p class="mb-2 text-[0.75rem] text-[#8c9097]">Earth, our home, is the third planet from the sun. While scientists continue to hunt for clues of life beyond Earth, our home planet remains the only place in the universe where we've ever identified living organisms. .</p>
                                        <p class="mb-2 text-[0.75rem] text-[#8c9097]">Earth has a diameter of roughly 8,000 miles (13,000 kilometers) and is mostly round because gravity generally pulls matter into a ball. But the spin of our home planet causes it to be squashed at its poles and swollen at the equator, making the true shape of the Earth an "oblate spheroid.".</p>
                                        <p class="mb-0 mt-4">
                                            <span class="block">Regards,</span>
                                            <span class="block">Michael Jeremy</span>
                                        </p>
                                    </div>
                                    <div class="mail-attachments mb-6">
                                        <div class="flex justify-between items-center">
                                            <div class="mb-0">
                                                <span class="text-[.875rem] font-semibold"><i class="ri-attachment-2 me-1 align-middle"></i>Attachments (1.8mb):</span>
                                            </div>
                                            <div>
                                                <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !font-medium ti-btn-success">Download All</button>
                                            </div>
                                        </div>
                                        <div class="mt-2 flex items-center flex-wrap">
                                            <a href="javascript:void(0);" class="mail-attachment border mb-1 me-2">
                                                <div class="attachment-icon"><svg xmlns="http://www.w3.org/2000/svg" baseProfile="tiny" viewBox="0 0 512 512"><path fill="#FFF" d="M422.3 477.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#2B669F" d="M333.6 6H103.5C88 6 75.4 18.6 75.4 34.1v443.8c0 15.5 12.6 28.1 28.1 28.1h305c15.5 0 28.1-12.6 28.1-28.1V109.1L333.6 6zm88.7 471.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#084272" d="M333.6 6v103.1h103z"/><g><path fill="#084272" d="M465.9 450.8H46.1V308c0-9.8 7.9-17.7 17.7-17.7h384.3c9.8 0 17.7 7.9 17.7 17.7v142.8z"/><path fill="#1A252D" d="M436.6 450.8v19.5l29.3-19.5zM75.4 450.8v19.5l-29.3-19.5z"/><path fill="#2B669F" d="M64.1 308.4h383.7v124.5H64.1z"/></g><g fill="#2B669F"><path d="M298.3 78.6h-177a6.7 6.7 0 010-13.4h177a6.7 6.7 0 010 13.4zM298.3 110.6h-177a6.7 6.7 0 010-13.4h177a6.7 6.7 0 010 13.4zM391.8 142.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 174.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 206.5H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 238.4H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4zM391.8 270.4H121.3a6.7 6.7 0 010-13.4h270.5a6.7 6.7 0 010 13.4z"/></g><g fill="#FFF"><path d="M229.3 373.3c0 6.9-1.6 12.5-4.7 16.7-3.1 4.2-7.5 6.3-13.2 6.3-2.2 0-4.2-.4-5.9-1.3-1.7-.9-3.2-2.1-4.5-3.7v21.8h-14.4v-63.8h13.6l.4 5c1.3-1.9 2.8-3.3 4.6-4.3 1.8-1 3.8-1.5 6.1-1.5 5.7 0 10.1 2.2 13.3 6.6 3.1 4.4 4.7 10.2 4.7 17.4v.8zm-14.3-.9c0-3.9-.6-7-1.7-9.4-1.1-2.4-3-3.5-5.4-3.5-1.6 0-3 .3-4.1.9-1.1.6-2 1.5-2.7 2.6v19.2c.7 1 1.6 1.7 2.7 2.2 1.1.5 2.5.7 4.1.7 2.5 0 4.3-1 5.4-3.1 1.1-2.1 1.6-5 1.6-8.7v-.9zM239.8 372.4c0-7.2 1.6-13 4.7-17.4 3.1-4.4 7.6-6.6 13.3-6.6 2.1 0 4 .5 5.8 1.5 1.7 1 3.3 2.4 4.6 4.2V329h14.4v66.4H270l-1-5.6c-1.4 2.1-3 3.7-4.9 4.8-1.9 1.1-4 1.7-6.4 1.7-5.7 0-10.1-2.1-13.2-6.3-3.1-4.2-4.7-9.7-4.7-16.6v-1zm14.4.9c0 3.7.5 6.7 1.6 8.7 1.1 2.1 2.9 3.1 5.5 3.1 1.5 0 2.8-.3 4-.8 1.1-.6 2.1-1.4 2.8-2.4v-18.6c-.7-1.2-1.7-2.2-2.8-2.8-1.1-.7-2.4-1-3.9-1-2.6 0-4.4 1.2-5.5 3.5-1.1 2.4-1.7 5.5-1.7 9.4v.9zM300 395.4v-36.1h-6.6v-10h6.6v-4.8c0-5.3 1.6-9.3 4.8-12.2 3.2-2.9 7.7-4.3 13.5-4.3 1.1 0 2.2.1 3.3.2 1.1.2 2.4.4 3.8.7l-1.1 10.6c-.8-.1-1.5-.2-2.1-.3-.6-.1-1.3-.1-2.2-.1-1.8 0-3.2.5-4.2 1.4-1 .9-1.4 2.3-1.4 4v4.8h9.1v10h-9.1v36.1H300z"/></g></svg>
                                                </div>
                                                <div class="leading-none">
                                                    <p class="mb-1 attachment-name truncate">
                                                        Earth_Archeology_2.21-4.pdf
                                                    </p>
                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">
                                                        0.85MB
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);" class="mail-attachment border">
                                                <div class="attachment-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FFF" d="M422.3 477.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#24A885" d="M333.6 6H103.5C88 6 75.4 18.6 75.4 34.1v443.8c0 15.5 12.6 28.1 27.1 28.1h305c16.5 0 29.1-12.6 29.1-28.1V109.1L333.6 6zm88.7 471.9c0 7.6-6.2 13.8-13.8 13.8h-305c-7.6 0-13.8-6.2-13.8-13.8V34.1c0-7.6 6.2-13.8 13.8-13.8h230.1V109h88.7v368.9z"/><path fill="#16876B" d="M333.6 6v103.1h103zM465.9 450.8H46.1V308c0-9.8 7.9-17.7 17.7-17.7h384.3c9.8 0 17.7 7.9 17.7 17.7v142.8z"/><path fill="#59E0B9" d="M436.6 450.8v19.5l29.3-19.5zM75.4 450.8v19.5l-29.3-19.5z"/><path fill="#2EBA98" d="M64.1 308.4h383.7v124.5H64.1z"/><path fill="#16876B" d="M298.3 78.6h-177a6.7 6.7 0 0 1 0-13.4h177a6.7 6.7 0 0 1 0 13.4zM298.3 110.6h-177a6.7 6.7 0 0 1 0-13.4h177a6.7 6.7 0 0 1 0 13.4zM391.8 142.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 174.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 206.5H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 238.4H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4zM391.8 270.4H121.3a6.7 6.7 0 0 1 0-13.4h270.5a6.7 6.7 0 0 1 0 13.4z"/><path fill="#FFF" d="M191.3 349.7v43.9c0 5.4-1.4 9.6-4.3 12.5-2.9 2.9-6.9 4.4-12.1 4.4-1.2 0-2.2-.1-3.2-.2s-2-.3-3.1-.5l.6-10.2c.8.2 1.4.3 2 .4s1.2.1 2.1.1c1.5 0 2.6-.5 3.4-1.6.8-1.1 1.2-2.7 1.2-4.8v-43.9h13.4zm-.2-10h-13.6v-9.1h13.6v9.1zM244.8 372.3c0 6.5-1.5 11.7-4.4 15.7-2.9 3.9-7.1 5.9-12.4 5.9-2.1 0-3.9-.4-5.5-1.2-1.6-.8-3-2-4.2-3.5v20.5h-13.5v-60h12.8l.4 4.7c1.2-1.8 2.6-3.1 4.3-4.1 1.7-1 3.6-1.4 5.7-1.4 5.4 0 9.5 2.1 12.5 6.2s4.4 9.6 4.4 16.3v.9zm-13.5-.8c0-3.7-.5-6.6-1.6-8.8-1.1-2.2-2.8-3.3-5.1-3.3-1.5 0-2.8.3-3.9.8-1.1.6-1.9 1.4-2.5 2.4v18.1c.6.9 1.5 1.6 2.5 2.1 1.1.5 2.4.7 3.9.7 2.4 0 4.1-1 5.1-2.9 1-2 1.5-4.7 1.5-8.2v-.9zM275.7 393.9c-6.6 0-11.7-2-15.4-6-3.7-4-5.6-9-5.6-15.1v-1.5c0-6.6 1.8-12 5.3-16.2 3.5-4.2 8.6-6.2 15.2-6.2 5.8 0 10.4 1.7 13.6 5.2 3.2 3.5 4.8 8.3 4.8 14.4v7.1h-24.8l-.1.2c.2 2.3 1.1 4.1 2.5 5.5 1.5 1.4 3.6 2.1 6.3 2.1 2.6 0 4.7-.2 6.5-.6 1.7-.4 3.7-1.1 5.9-2l3.2 8.3c-1.9 1.4-4.4 2.5-7.5 3.4-3.1 1-6.4 1.4-9.9 1.4zm-.5-34.5c-2.2 0-3.8.7-4.8 2.1-1 1.4-1.6 3.2-1.8 5.6l.1.2h11.7v-1c0-2.2-.4-3.9-1.2-5.1-.7-1.3-2.1-1.8-4-1.8zM303.3 371.5c0-6.8 1.5-12.2 4.4-16.3 3-4.1 7.1-6.2 12.5-6.2 2.3 0 4.3.5 6 1.6 1.7 1.1 3.2 2.6 4.5 4.6l.9-5.4h11.9v42.9c0 5.7-2 10.1-5.9 13.3-3.9 3.1-9.3 4.7-16.2 4.7-2.2 0-4.6-.3-7.1-.9-2.5-.6-4.8-1.4-7.1-2.5l2.3-10c1.9.9 3.8 1.5 5.6 1.9 1.8.4 3.8.6 6.1.6 2.9 0 5-.6 6.4-1.7 1.4-1.1 2.1-3 2.1-5.4v-3.4c-1.2 1.6-2.7 2.8-4.3 3.6-1.6.8-3.5 1.2-5.5 1.2-5.3 0-9.5-2-12.4-5.9-2.9-4-4.4-9.2-4.4-15.7v-1zm13.5.8c0 3.5.5 6.3 1.5 8.2 1 2 2.8 2.9 5.2 2.9 1.5 0 2.7-.2 3.8-.7 1.1-.5 1.9-1.1 2.6-2v-18.2c-.7-1-1.5-1.8-2.6-2.4-1-.5-2.3-.8-3.7-.8-2.4 0-4.1 1.1-5.2 3.3-1.1 2.2-1.6 5.2-1.6 8.8v.9z"/></svg>
                                                </div>
                                                <div class="leading-none">
                                                    <p class="mb-1 attachment-name truncate">
                                                        Planets_Image.Jpeg
                                                    </p>
                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">
                                                        457KB
                                                    </p>
                                                </div>
                                            </a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="!w-[2.75rem] !h-[2.75rem] ti-btn-icon ti-btn-outline-light  flex items-center justify-center !rounded-md !ms-2 !text-[1.2rem] !text-defaulttextcolor border">
                                                <i class="ri-attachment-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <span class="text-[.875rem] font-semibold"><i class="ri-reply-all-line me-1 align-middle inline-block"></i>Reply:</span>
                                    </div>
                                    <div class="mail-reply">
                                        <div id="mail-reply-editor"></div>
                                    </div>
                                </div>
                                <div class="mail-info-footer  flex flex-wrap gap-2 items-center justify-between">
                                    <div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-printer-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Print
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-mail-open-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Mark as read
                                                </span>
                                            </button>
                                        </div>
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button type="button" class="hs-tooltip-toggle ti-btn ti-btn-icon ti-btn-light">
                                                <i class="ri-refresh-line"></i>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                    role="tooltip">
                                                    Reload
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="space-x-2 rtl:space-x-reverse">
                                        <button type="button" class="ti-btn ti-btn-secondary-full">
                                            <i class="ri-share-forward-line me-1 inline-block align-middle"></i>Forward
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-danger-full ms-1">
                                            <i class="ri-reply-all-line me-1 inline-block align-middle"></i>Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-recepients border">
                                <div class="p-4 border-b ">
                                    <div class="hs-tooltip ti-main-tooltip">
                                        <button aria-label="anchor" type="button" class="hs-tooltip-toggle ti-btn ti-btn-light ti-btn-icon !rounded-full" ><i class="ri-add-line"></i>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Add Recepient
                                        </span>
                                    </button>
                                    </div>
                                </div>
                                <div class="p-4 flex flex-column items-center total-mail-recepients" id="mail-recepients">
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" >
                                            </span>
                                            <span class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                role="tooltip">
                                                Sujika
                                            </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Samantha May
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                          Brenda
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Monika
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Kiran Jah
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Sujika
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Kim Noh
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar online avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Sujika
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                            Professer
                                        </span>
                                        </a>
                                    </div>
                                    <div class="hs-tooltip ti-main-tooltip [--placement:left]">
                                        <a href="javascript:void(0);" class="mail-recepeint-person hs-tooltip-toggle">
                                            <span class="avatar offline avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="" >
                                            </span>
                                            <span
                                            class="hs-tooltip-content ti-main-tooltip-content !py-[0.2rem] px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                            role="tooltip">
                                          Alex
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
   
@endsection

@section('scripts')
 
        <!-- Quill Editor JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Mail JS -->
        @vite('resources/assets/js/mail.js')


@endsection