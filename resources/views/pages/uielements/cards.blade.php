@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Cards</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                            Ui Elements
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Cards
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 md:gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-22.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem]">Card title</h6>
                                    <p class="card-text text-[#8c9097] mb-4">when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Read More</a>
                                </div>
                                <div class="box-footer">
                                    <span class="card-text">Last updated 3 mins ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Featured</div>
                                </div>
                                <div class="box-body">
                                    <h6 class="box-title font-semibold">Special title treatment</h6>
                                    <p class="card-text mb-4">Richard McClintock, a Latin professor at Hampden-Sydney
                                        College in Virginia, looked up one of the more obscure Latin words, consectetur,
                                        from a Lorem Ipsum passage</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Read More</a>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !mb-1 !text-[1rem]">Card title</h6>
                                    <p class="card-subtitle mb-4 text-[#8c9097]">Card subtitle</p>
                                    <p class="card-text">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration many variations of passages of Lorem Ipsum
                                        available there are so many ways to solve but the majority have suffered.</p>
                                </div>
                                <div class="box-footer">
                                    <a href="javascript:void(0);" class="card-link text-danger m-1">Buy Now</a>
                                    <a href="javascript:void(0);" class="card-link text-success m-1"><u>Review</u></a>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-23.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            <h6 class="mb-4 !text-[1rem] font-medium">Only Card Body:</h6>
                            <div class="box">
                                <div class="box-body">
                                    <div class="card-text">
                                        <p class="mb-0">It is a long established fact that a reader will be distracted by
                                            the readable content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-24.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem]">Card title</h6>
                                    <p class="card-text">Some quick example text to build on the card title and
                                        make up the bulk of the card's content.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">An item</li>
                                    <li class="list-group-item">A second item</li>
                                </ul>
                                <div class="box-body">
                                    <a href="javascript:void(0);" class="card-link text-primary me-1">Card link</a>
                                    <a href="javascript:void(0);" class="card-link text-secondary inline-block">Another
                                        link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 md:gap-6">
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <h6 class="!text-[1rem] !font-medium mb-4">Quote:</h6>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <blockquote class="blockquote mb-0 text-center">
                                                <h6 class="text-[1rem] font-medium">The greatest glory in living lies not in
                                                    never falling, but in rising every time we fall.</h6>
                                                <footer class="text-[#6c757d] mt-2 text-[.875rem]">Someone famous in <cite
                                                        title="Source Title">Source Title</cite></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <h6 class="mb-4 !text-[1rem] !font-medium">List Group:</h6>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                            <div class="box">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                    <li class="list-group-item">A fourth item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-header  !text-start">
                                                    Featured
                                                </div>
                                                <ul class="list-group list-group-flush ">
                                                    <li class="list-group-item !border-0">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item">A third item</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-4 col-span-12">
                                            <div class="box">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">An item</li>
                                                    <li class="list-group-item">A second item</li>
                                                    <li class="list-group-item !border-0">A third item</li>
                                                </ul>
                                                <div class="box-footer">
                                                    Card footer
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-12 col-span-12">
                            <h6 class="mb-4 !text-[1rem] !font-medium">Using Grid Markups:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <img src="{{asset('build/assets/images/media/media-25.jpg')}}" class="card-img mb-4 !rounded-md"
                                                alt="...">
                                            <h6 class="box-title font-semibold">Product A</h6>
                                            <p class="card-text mb-4">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}" class="card-img mb-4 !rounded-md"
                                                alt="...">
                                            <h6 class="box-title font-semibold">Product B</h6>
                                            <p class="card-text mb-4">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-secondary-full">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <img src="{{asset('build/assets/images/media/media-27.jpg')}}" class="card-img mb-4 !rounded-md"
                                                alt="...">
                                            <h6 class="box-title font-semibold">Product-C</h6>
                                            <p class="card-text mb-4">With supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-light">Purchase</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3-->
                    <div class="grid grid-cols-12 xl:gap-6">
                        <div class="xl:col-span-9 col-span-12">
                            <h6 class="mb-4 !text-[1rem] !font-medium">Text Alignment:</h6>
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                            </div>
                                            <h6 class="box-title font-semibold">Where it come from</h6>
                                            <p class="card-text mb-4">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots in a piece of classical Latin literature.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box text-center">
                                        <div class="box-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                            </div>
                                            <h6 class="box-title font-semibold">Why do we use it?</h6>
                                            <p class="card-text mb-4">Many desktop publishing packages and web page editors
                                                now use Lorem Ipsum as their default model text.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-4 col-span-12">
                                    <div class="box text-end">
                                        <div class="box-body">
                                            <div class="mb-2">
                                                <span class="avatar avatar-md">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                            </div>
                                            <h6 class="box-title font-semibold">What is special?</h6>
                                            <p class="card-text mb-4">There are many variations of passages of Lorem Ipsum
                                                available, but the majority have suffered alteration in some form.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <h4 class="mb-4 !text-[1rem] !font-medium">Mixins utilities:</h4>
                            <div class="box border border-success mb-4">
                                <div class="!py-1 !px-2 bg/10 border-b !text-start !border-success">Header</div>
                                <div class="box-body text-success">
                                    <h6 class="box-title font-semibold !text-success">Looking For Success?</h6>
                                    <p class="card-text">If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                        chunks as necessary.</p>
                                </div>
                                <div class="!py-1 !px-2 bg/10 border-t border-success">Footer</div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3-->

                    <!-- Start::row-4 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Card Header &amp; Footer:</h6>
                    <div class="grid grid-cols-12 md:gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex align-center w-full">
                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img" class="avatar avatar-rounded me-2 !mb-0">
                                        <div class="my-auto">
                                            <div class="text-[.9375rem] font-semibold">Adam Smith</div>
                                            <p class="mb-0 text-[#8c9097] text-[.6875rem]">28 Years, Male</p>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown ms-auto my-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light !mb-0">
                                                <i class="fe fe-more-vertical"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Week</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Month</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    If you are going to use, you need to be sure there isn't anything embarrassing hidden in
                                    the middle of text. All the Lorem Ipsum generators.
                                </div>
                                <div class="box-footer">
                                    <div class="flex justify-between">
                                        <div class="font-semibold text-[.875rem]">28,Nov 2022</div>
                                        <div class="font-semibold text-success ">Assistant Professor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header !border-b-0 !pb-0 !justify-start">
                                    <div>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-warning me-1"><i class="bi bi-star-fill"></i></span>
                                        <span class="text-black/10"><i class="bi bi-star-fill"></i></span>
                                        <p class="block text-[#8c9097] mb-0 text-[.75rem] font-semibold">1 year ago</p>
                                    </div>
                                </div>
                                <div class="box-body pt-4">
                                    <div class="font-semibold text-[.9375rem] mb-2">Very Great!</div>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour
                                </div>
                                <div class="box-footer">
                                    <div class="flex align-center">
                                        <span class="avatar avatar-sm avatar-rounded me-2">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>
                                        <div class="font-semibold text-[.875rem]">Corey Anderson</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box text-center">
                                <div class="box-header !border-b-0 pb-0">
                                    <span class="ms-auto shadow-sm text-[1.0625rem]"><i
                                            class="ri-heart-fill text-danger"></i></span>
                                </div>
                                <div class="box-body !pt-1">
                                    <span class="avatar avatar-xl avatar-rounded me-2 mb-2">
                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                    </span>
                                    <div class="font-semibold text-[1rem]">Sasha Max</div>
                                    <p class="mb-4 text-[#8c9097] text-[.6875rem]">Web Developer</p>
                                    <div class="ti-btn-list">
                                        <button type="button" aria-label="button" class="!ms-2 ti-btn ti-btn-icon ti-btn-facebook btn-wave">
                                            <i class="ri-facebook-line"></i>
                                        </button>
                                        <button type="button" aria-label="button" class="!ms-2 ti-btn ti-btn-icon ti-btn-twitter btn-wave">
                                            <i class="ri-twitter-line"></i>
                                        </button>
                                        <button type="button" aria-label="button" class="ti-btn ti-btn-icon ti-btn-instagram btn-wave">
                                            <i class="ri-instagram-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary">
                                <div class="box-body">
                                    <svg class="w-[60px] h-[60px] my-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path fill="#C6CDD1"
                                            d="M19 21H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2z" />
                                        <path fill="#C6CDD1" d="M11 1H3a2 2 0 0 0-2 2v8h10V1z" />
                                        <path fill="#A1ABB2" d="M21 11V3a2 2 0 0 0-2-2h-8v10h10z" />
                                        <path fill="#878A8F" d="M1 11v8a2 2 0 0 0 2 2h8V11H1z" />
                                        <path fill="#797D82" d="M11 11v10h8a2 2 0 0 0 2-2v-8H11z" />
                                        <path fill="#FFF" d="M14 6h5v1h-5z" />
                                        <path
                                            d="M19 20.75H3a2 2 0 0 1-2-2V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-.25a2 2 0 0 1-2 2z"
                                            opacity=".1" />
                                        <circle cx="16" cy="16" r="7" fill="#136ad0" />
                                        <path
                                            d="M16 22.75c-3.08 0-5.704-1.97-6.696-4.713C10.18 20.907 12.85 23 16 23s5.82-2.094 6.696-4.963C21.704 20.781 19.08 22.75 16 22.75z"
                                            opacity=".1" />
                                        <path fill="#FFF"
                                            d="M16 9.25c3.08 0 5.704 1.97 6.696 4.713C21.82 11.093 19.15 9 16 9s-5.82 2.094-6.696 4.963C10.296 11.219 12.92 9.25 16 9.25z"
                                            opacity=".2" />
                                        <path fill="#FFF" d="M4 6h5v1H4z" />
                                        <path fill="#FFF"
                                            d="M6 4h1v5H6zM13 14h6v1h-6zM13 17h6v1h-6zM4.379 15.086l.707-.707 3.535 3.535-.707.707z" />
                                        <path fill="#FFF" d="m4.379 17.914 3.535-3.535.707.707-3.535 3.535z" />
                                        <path fill="#FFF"
                                            d="M19 1H3a2 2 0 0 0-2 2v.25a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2V3a2 2 0 0 0-2-2z"
                                            opacity=".2" />
                                        <linearGradient id="a" x1="14.367" x2="19.862" y1="14.367" y2="19.862"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#3E2723" stop-opacity=".2" />
                                            <stop offset="1" stop-color="#3E2723" stop-opacity=".02" />
                                        </linearGradient>
                                        <path fill="url(#a)"
                                            d="M19 14v1h-6l2 2h4v1h-6l4.766 4.766a7.014 7.014 0 0 0 5-5L19 14z" />
                                        <linearGradient id="b" x1="-.448" x2="23.366" y1="5.662" y2="16.766"
                                            gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#FFF" stop-opacity=".2" />
                                            <stop offset="1" stop-color="#FFF" stop-opacity="0" />
                                        </linearGradient>
                                        <path fill="url(#b)"
                                            d="M21 11.11V3a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8.11A6.974 6.974 0 0 0 16 23c3.86 0 7-3.14 7-7a6.974 6.974 0 0 0-2-4.89z" />
                                    </svg>
                                    <p class="mb-0 mt-8 text-[1.25rem] font-semibold leading-none">
                                        Calculations
                                    </p>
                                </div>
                                <div class="box-footer">
                                    Lorem Ipsum is therefore always free from repetition, injected humour.
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/images/media/media-4.jpg')}}" class="card-img mb-4 !rounded-md"
                                        alt="...">
                                    <h6 class="box-title font-semibold mb-4">Mountains<span
                                            class="badge bg-primary text-white ltr:float-right rtl:float-left text-[.625rem]">New</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/images/media/media-9.jpg')}}" class="card-img mb-4 !rounded-md"
                                        alt="...">
                                    <h6 class="box-title font-semibold mb-4">Hills<span
                                            class="badge bg-secondary text-white ltr:float-right rtl:float-left text-[.625rem]">Hot</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <img src="{{asset('build/assets/images/media/media-15.jpg')}}" class="card-img mb-4 !rounded-md"
                                        alt="...">
                                    <h6 class="box-title font-semibold mb-4">Nature<span
                                            class="badge bg-light text-dark ltr:float-right rtl:float-left text-[.625rem]">Offer</span></h6>
                                    <p class="card-text">With supporting text below as a natural
                                        lead-in.</p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box text-center">
                                <div class="box-header !mb-0">
                                    <div class="box-title">Featured</div>
                                </div>
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !mb-2">Breaking News !</h6>
                                    <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full mt-2">Read More</a>
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-outline-secondary mt-2">Close</a>
                                </div>
                                <div class="box-footer !text-[#8c9097]">
                                    11.32pm
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="flex w-full">
                                        <div class="me-4">
                                            <span class="avatar avatar-lg avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="flex align-center justify-between w-full flex-wrap">
                                            <div class="me-4">
                                                <p class="text-[#8c9097] mb-0">Posts</p>
                                                <p class="font-semibold text-[1rem] mb-0">25</p>
                                            </div>
                                            <div class="me-4">
                                                <p class="text-[#8c9097] mb-0">Followers</p>
                                                <p class="font-semibold text-[1rem] mb-0">1253</p>
                                            </div>
                                            <div class="me-4">
                                                <p class="text-[#8c9097] mb-0">Following</p>
                                                <p class="font-semibold text-[1rem] mb-0">367</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="font-semibold text-[1rem]">Angelina Caprio</div>
                                    <div class="text-[#8c9097] text-[.6875rem] mb-6">Angular Developer</div>
                                    <p class="text-[.875rem] font-semibold mb-1">About:</p>
                                    <p class="mb-0 card-text">Finibus Bonorum et Malorum" by Cicero are also reproduced in
                                        their exact original form, accompanied by English versions </p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Card With Collapse Button
                                    </div>
                                    <a aria-label="anchor" class="hs-collapse-toggle inline-flex items-center gap-x-2 "
                                        href="javascript:void(0);" id="hs-show-hide-collapse"
                                        data-hs-collapse="#hs-show-hide-collapse-heading">

                                        <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </a>
                                </div>
                                <div id="hs-show-hide-collapse-heading"
                                    class="hs-collapse  w-full overflow-hidden transition-[height] duration-300"
                                    aria-labelledby="hs-show-hide-collapse">
                                    <div class="box-body">
                                        <h6 class="card-text font-semibold">Collapsible Card</h6>
                                        <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words</p>
                                    </div>
                                    <div class="box-footer">
                                        <button type="button" class="ti-btn ti-btn-primary-full">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box" id="dismiss-alert">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Card With Close Button
                                    </div>
                                    <button type="button"
                                        class="inline-flex bg-teal-50 rounded-sm text-teal-500 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-teal-50 focus:ring-teal-600"
                                        data-hs-remove-element="#dismiss-alert">
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="h-2 w-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path
                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="box-body">
                                    <h6 class="card-text font-semibold">Closed Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary-full">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box terms-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Card With Fullscreen Button
                                    </div>
                                    <a aria-label="anchor" href="javascript:void(0);" class="terms-fullscreen">
                                        <i class="ri-fullscreen-line"></i>
                                    </a>
                                </div>
                                <div class="box-body">
                                    <h6 class="card-text font-semibold">FullScreen Card</h6>
                                    <p class="card-text mb-0">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words</p>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="ti-btn ti-btn-primary-full">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="grid grid-cols-12 md:gap-x-6">
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <h6 class="mb-4 !text-[1rem] !font-medium">Using Utilities:</h6>
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box !w-[75%]">
                                        <div class="box-header">
                                            <div class="box-title">Using Width 75%</div>
                                        </div>
                                        <div class="box-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum omnis
                                                excepturi consequatur molestiae
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-primary-full !grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box !w-[50%]">
                                        <div class="box-header">
                                            <div class="box-title">Using Width 50%</div>
                                        </div>
                                        <div class="box-body">
                                            <div class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <a href="javascript:void(0);"
                                                class="ti-btn ti-btn-primary-full !grid">Button</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                            <h6 class="mb-4 !text-[1rem] !font-medium">Navigation:</h6>
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box text-center">
                                        <div class="box-header !justify-start">
                                            <ul class="nav nav-tabs box-header-tabs ms-1 flex   gap-2 items-center">
                                                <li class="nav-item">
                                                    <a class="nav-link active !py-2 !px-4" aria-current="true"
                                                        href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <h6 class="box-title font-semibold">Special title treatment</h6>
                                            <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box text-center">
                                        <div class="box-header !justify-start">
                                            <ul class="nav nav-pills box-header-pills ms-1 flex gap-2">
                                                <li class="nav-item">
                                                    <a class="nav-link active !py-2 !px-4 !bg-primary !text-white"
                                                        href="javascript:void(0);">Active</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">Link</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled">Disabled</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <h6 class="box-title font-semibold">Special title treatment</h6>
                                            <p class="card-text mb-4">With supporting text below as a natural lead-in to
                                                additional content.</p>
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full">Go
                                                somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

                    <!-- Start::row-6 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Image Caps:</h6>
                    <div class="grid grid-cols-12 md:gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-29.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem]">Image caps are widely used in Blog's
                                    </h6>
                                    <p class="card-text mb-4 text-[#8c9097]">But I must explain to you how all this mistaken
                                        idea of denouncing pleasure and praising pain was born and I will give you a
                                        complete account of the system, and expound the actual teachings.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem]">Image caps are widely used in Blog's
                                    </h6>
                                    <p class="card-text mb-4 text-[#8c9097]">But I must explain to you how all this mistaken
                                        idea of denouncing pleasure and praising pain was born and I will give you a
                                        complete account of the system, and expound.</p>
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="{{asset('build/assets/images/media/media-28.jpg')}}" class="!rounded-b-md"
                                    alt="...">
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold mb-1 !text-[1rem]">Image caps are widely used in
                                        Blog's</h6>
                                    <p class="card-text mb-1 text-[#8c9097]">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="{{asset('build/assets/images/media/media-30.jpg')}}" class="card-img rounded-0" alt="...">
                                <div class="box-body">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="card-text mb-1 text-[#8c9097]">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <img src="{{asset('build/assets/images/media/media-31.jpg')}}" class="card-img rounded-0" alt="...">
                                <div class="box-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-32.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="card-text mb-1 text-[#8c9097]">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="box-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">Image caps are widely used in Blog's</div>
                                </div>
                                <div class="box-body">
                                    <p class="card-text mb-1 text-[#8c9097]">This is a wider card with supporting text below
                                        as
                                        a natural lead-in to additional content. This content is a
                                        little
                                        bit longer.</p>
                                </div>
                                <div class="box-footer">
                                    <p class="card-text mb-0"><small>Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <img src="{{asset('build/assets/images/media/media-33.jpg')}}" class="!rounded-b-md"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

                    <!-- Start::row-7 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Image Overlays:</h6>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overlay-card">
                                <img src="{{asset('build/assets/images/media/media-35.jpg')}}" class="card-img" alt="...">
                                <div class="card-img-overlay flex flex-column p-0">
                                    <div class="box-header !border-b !border-defaultborder/10">
                                        <div class="box-title !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="box-body text-white">
                                        <div class="card-text mb-2 !text-white">There are many variations of passages of
                                            Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text !text-white">Last updated 3 mins ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overlay-card">
                                <img src="{{asset('build/assets/images/media/media-36.jpg')}}" class="card-img" alt="...">
                                <div class="card-img-overlay flex flex-column p-0 over-content-bottom">
                                    <div class="box-body text-white">
                                        <div class="card-text text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                        <div class="card-text mb-2 !text-white">There are many variations of passages of
                                            Lorem Ipsum available, but the majority have suffered alteration in some form,
                                            by injected humour, or randomised words which don't look even.</div>
                                        <div class="card-text !text-white">Last updated 3 mins ago</div>
                                    </div>
                                    <div class="box-footer !text-white !border-t !border-defaultborder/10">Last updated 3
                                        mins ago</div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box overlay-card">
                                <img src="{{asset('build/assets/images/media/media-34.jpg')}}" class="card-img" alt="...">
                                <div class="card-img-overlay flex flex-column p-0">
                                    <div class="box-header">
                                        <div class="box-title !text-white">
                                            Image Overlays Are Awesome!
                                        </div>
                                    </div>
                                    <div class="box-body text-white">
                                        <div class="card-text !text-white">There are many variations of passages of Lorem
                                            Ipsum available, but the majority have suffered alteration in some form, by
                                            injected humour, or randomised words which don't look even.</div>
                                    </div>
                                    <div class="box-footer !text-white !border-t border-defaultborder">Last updated 3 mins
                                        ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-7 -->

                    <!-- Start::row-8 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Horizontal Cards:</h6>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="grid grid-cols-12 gap-0">
                                    <div class="md:col-span-4 col-span-12">
                                        <img src="{{asset('build/assets/images/media/media-37.jpg')}}"
                                            class="img-fluid rounded-s-md h-full w-full" alt="...">
                                    </div>
                                    <div class="md:col-span-8 col-span-12">
                                        <div class="box-header">
                                            <div class="box-title">Horizontal Cards</div>
                                        </div>
                                        <div class="box-body">
                                            <h6 class="box-title font-semibold">Horizontal cards are awesome!</h6>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural .</p>
                                        </div>
                                        <div class="box-footer">
                                            <p class="card-text"><small class="text-[#8c9097]">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="grid grid-cols-12 gap-0">
                                    <div class="md:col-span-8 col-span-12">
                                        <div class="box-header">
                                            <div class="box-title">Horizontal Cards</div>
                                        </div>
                                        <div class="box-body">
                                            <h6 class="box-title font-semibold">Horizontal cards are awesome!</h6>
                                            <p class="card-text mb-4">This is a wider card with suppo rting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                            <p class="card-text"><small class="text-[#8c9097]">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                    <div class="md:col-span-4 col-span-12">
                                        <img src="{{asset('build/assets/images/media/media-38.jpg')}}"
                                            class="img-fluid !rounded-e-md h-full w-full" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="grid grid-cols-12 gap-0">
                                    <div class="md:col-span-8 col-span-12">
                                        <div class="box-body">
                                            <h6 class="box-title font-semibold mb-2">Horizontal Cards</h6>
                                            <div class="mb-4">Horizontal cards are awesome!</div>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit longer.
                                            </p>
                                        </div>
                                        <div class="box-footer">
                                            <p class="card-text"><small class="text-[#8c9097]">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                    <div class="md:col-span-4 col-span-12">
                                        <img src="{{asset('build/assets/images/media/media-39.jpg')}}"
                                            class="img-fluid !rounded-e-md h-full w-full" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->

                    <!-- Start::row-9 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Background Colored Cards:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-primary">
                                <div class="box-body">
                                    <div class="flex items-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Adam Smith</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">Finished by today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-secondary">
                                <div class="box-body">
                                    <div class="flex items-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Elisha Corner</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">Completed 24 days back
                                            </p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-warning">
                                <div class="box-body">
                                    <div class="flex items-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Sarah Alina</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">Completed today</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-info">
                                <div class="box-body">
                                    <div class="flex align-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Monica Karen</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">Pending from 4 days</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-success">
                                <div class="box-body">
                                    <div class="flex align-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Samantha sid</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">In leave for 1 month</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-danger">
                                <div class="box-body">
                                    <div class="flex align-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold !text-white">Sebastien steyn</div>
                                            <p class="mb-0 text-white opacity-[0.7] text-[.75rem]">Completed by Tomorrow</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-light">
                                <div class="box-body">
                                    <div class="flex align-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold">Jacob Smith</div>
                                            <p class="mb-0 text-[#8c9097] opacity-[0.7] text-[.75rem]">Finished by 24,Nov
                                            </p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-default"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box !bg-black">
                                <div class="box-body">
                                    <div class="flex align-center w-full">
                                        <div class="me-2">
                                            <span class="avatar avatar-rounded">
                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                            </span>
                                        </div>
                                        <div class="">
                                            <div class="text-[.9375rem] font-semibold text-white">Pope Adam</div>
                                            <p class="mb-0 opacity-[0.7] text-[.75rem] text-white">Completed on 24,may</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a aria-label="anchor" href="javascript:void(0);" class="text-white"><i
                                                    class="bi bi-three-dots-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-9 -->

                    <!-- Start::row-10 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Colored Border Cards:</h6>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body ">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">Home Page Design
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-primary text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary/10 text-primary">Framework</span>
                                        <span class="badge bg-secondary/10 text-secondary">Angular</span>
                                        <span class="badge bg-info/10 text-info">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">Landing Page Design
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-secondary text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger/10 text-danger">Laravel</span>
                                        <span class="badge bg-teal/10 text-teal">Codeignitor</span>
                                        <span class="badge bg-success/10 text-success">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">Update New Project
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-warning text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning/10 text-warning">Html</span>
                                        <span class="badge bg-secondary/10 text-secondary">Tailwind</span>
                                        <span class="badge bg-info/10 text-info">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">New Project Discussion
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-info text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-info/10 text-info">React</span>
                                        <span class="badge bg-primary/10 text-primary">Typescript</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">Recent Projects Testing
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-danger text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary/10 text-primary">Ui</span>
                                        <span class="badge bg-secondary/10 text-secondary">Angular</span>
                                        <span class="badge bg-info/10 text-info">Java</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">About Us Page redesign
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-success text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-danger/10 text-danger">Html</span>
                                        <span class="badge bg-warning/10 text-warning">Symphony</span>
                                        <span class="badge bg-success/10 text-success">Php</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">New Employees
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-default text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-warning/10 text-warning">Html</span>
                                        <span class="badge bg-info/10 text-info">Cake Php</span>
                                        <span class="badge bg-success/10 text-success">React</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box border border-primary !rounded-md">
                                <div class="box-body">
                                    <p class="text-[.875rem] font-semibold mb-2 leading-none">Terminated Employees
                                        <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="bi bi-plus-square ltr:float-right rtl:float-left text-dark text-[1.125rem]"></i></a>
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="badge bg-primary/10 text-primary">Angular</span>
                                    </div>
                                    <div class="avatar-list-stacked">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-10 -->

                    <!-- Start::row-11 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Cards With Link:</h6>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                            <div class="box">
                                <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                <img src="{{asset('build/assets/images/media/media-23.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold mb-0">Forests are Awesome.</h6>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                    <div class="box !bg-primary">
                                        <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="box-body">
                                            <blockquote class="blockquote mb-0 text-center">
                                                <h6 class="text-[1rem] text-white font-medium">The best and most beautiful
                                                    things in the world cannot be seen or even touched — they must be felt
                                                    with the heart..</h6>
                                                <footer
                                                    class="blockquote-footer mt-3 text-[.875rem] text-white opacity-[0.7]">
                                                    Someone famous as <cite title="Source Title">-Helen Keller</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-5 xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="box-body">
                                            <div class="flex align-center">
                                                <div class="me-4">
                                                    <span class="avatar avatar-md">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text mb-0 text-[.875rem] font-semibold">Atharva Simon.
                                                    </p>
                                                    <div class="box-title !text-[#8c9097] !text-[.75rem] mb-0">Correspondent
                                                        Professor</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box border border-info">
                                        <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="box-body">
                                            <div class="flex align-center">
                                                <div class="me-3">
                                                    <span class="avatar avatar-xl">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                                <div>
                                                    <p class="card-text text-info mb-1 text-[.875rem] font-semibold">Alicia
                                                        Keys.</p>
                                                    <div class=" text-[.75rem] mb-1">Department Of Commerce</div>
                                                    <div class=" text-[#8c9097] text-[.6875rem] mb-0">24 Years, Female</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-7 xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                        <div class="!grid grid-cols-12 gap-0">
                                            <div class="md:col-span-8 col-span-12">
                                                <div class="box-body">
                                                    <h6 class="box-title mb-2 font-semibold !text-[1rem]">Fox is Beautiful ?
                                                    </h6>
                                                    <p class="card-text mb-0">This is a wild animal with supporting tactics
                                                        and are very efficient at kill,they are very Dangerous.</p>
                                                    <p class="mb-0 card-text">
                                                        Fox lives mainly in forests and are well known for their hunting
                                                        skills.
                                                    </p>
                                                </div>
                                                <div class="box-footer">
                                                    <p class="card-text"><small class="text-[#8c9097]">Last updated 3 mins
                                                            ago</small></p>
                                                </div>
                                            </div>
                                            <div class="md:col-span-4 col-span-12">
                                                <img src="{{asset('build/assets/images/media/media-39.jpg')}}"
                                                    class="img-fluid !rounded-e-md h-full" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                <img src="{{asset('build/assets/images/media/media-47.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold mb-3">Most tropical areas are suitable</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need to be
                                        sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-11-->

                    <!-- Start::row-12 -->
                    <h6 class="mb-4 !text-[1rem] !font-medium">Grid Cards:</h6>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="col">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-44.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem] mb-3">Morphology of a typical
                                        fruit.</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-43.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem] mb-3">Research improves ability
                                        &amp; agility !</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-45.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem] mb-3">Most tropical areas are
                                        suitable</h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box">
                                <img src="{{asset('build/assets/images/media/media-46.jpg')}}" class="card-img-top" alt="...">
                                <div class="box-body">
                                    <h6 class="box-title font-semibold !text-[1rem] mb-3">Are They seasonal fruits ?
                                    </h6>
                                    <p class="card-text"> If you are going to use a passage of Lorem Ipsum, you need
                                        to be sure there isn't anything embarrassing hidden in the middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-12 -->

@endsection

@section('scripts')

        <!-- Cards JS -->
        @vite('resources/assets/js/cards.js')

@endsection