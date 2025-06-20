@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                    <div class="grid grid-cols-12 gap-6 mt-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="team-members" id="team-members">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="team-header">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="h5 font-semibold mb-0">Team Ui</div>
                                                        <div class="flex items-center">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control w-full !bg-light border-0 !rounded-s-md" placeholder="Search Person Name" aria-describedby="search-team-member">
                                                                <button class="ti-btn ti-btn-light !mb-0" type="button" aria-label="button" id="search-team-member"><i class="ri-search-line text-[#8c9097]"></i></button>
                                                            </div>
                                                            <div class="hs-dropdown ti-dropdown ms-2">
                                                                <button class="ti-btn ti-btn-icon ti-btn-light !py-3" type="button" aria-label="button" aria-expanded="false">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </button>
                                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete Team</a></li>
                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Add Member</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/1.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-warning">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Alexander Smith</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">alexandersmith2135@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">16 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">45</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-block-start-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/2.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javsscript:void(0);">Alicia Sierra</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">aliciasierra1645@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">2 Years</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">78</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Associate</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-block-start-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/3.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Angelica Hose</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">angelica143@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">12 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">35</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/4.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Jhope Joseph</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">jhope.joseph@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">3 Years</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">126</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Team Lead</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/5.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-warning">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">King Martin</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">martinking1998@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">28 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">114</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-block-start-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/6.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Susan Sane</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">susanasane@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">18 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">74</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/7.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed  p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Brenda Hops</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">brrendahops245@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">16 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">64</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/8.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Paul Rudd</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">paulrudd143@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">7 Months</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">17</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Member</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxl:col-span-4 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                        <div class="box team-member-card">
                                            <div class="teammember-cover-image">
                                                <img src="{{asset('build/assets/images/media/team-covers/9.jpg')}}" class="card-img-top" alt="...">
                                                <span class="avatar avatar-xl avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                </span>
                                                <a aria-label="anchor" href="javascript:void(0);" class="team-member-star text-white">
                                                    <i class="ri-star-fill text-[1rem]"></i>
                                                </a>
                                            </div>
                                            <div class="box-body !p-0">
                                                <div class="flex flex-wrap align-item-center sm:mt-0 mt-[3rem] justify-between border-b border-dashed p-4">
                                                    <div class="team-member-details flex-grow">
                                                        <p class="mb-0 font-semibold text-[1rem] text-truncate">
                                                            <a href="javascript:void(0);">Elisha Jin</a>
                                                        </p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097] text-truncate">elishajin@gmail.com</p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <button class="ti-btn ti-btn-sm ti-btn-light" type="button" aria-label="button" aria-expanded="false">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </button>
                                                        <ul class="ti-dropdown-menu hs-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Move To</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Edit</a></li>
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="team-member-stats sm:flex items-center justify-evenly">
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Member Since</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">4 Years</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Projects</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">321</span>
                                                    </div>
                                                    <div class="text-center p-4 w-full">
                                                        <p class="font-semibold mb-0">Position</p>
                                                        <span class="text-[#8c9097] text-[0.75rem]">Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer border-dashed text-center">
                                                <div class="btn-list">
                                                    <div class="btn-list">
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !me-[0.375rem]">
                                                            <i class="ri-facebook-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-secondary !me-[0.375rem]">
                                                            <i class="ri-twitter-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-warning me-[0.375rem]">
                                                            <i class="ri-instagram-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success me-[0.375rem]">
                                                            <i class="ri-github-line font-bold"></i>
                                                        </button>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger">
                                                            <i class="ri-youtube-line font-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination  mb-4 justify-end">
                                        <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="team-groups">
                                <div class="box">
                                    <div class="box-header  !justify-between">
                                        <h6 class="font-semibold mb-0">All Teams</h6>
                                        <div>
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary !text-[0.75rem] !py-1 !px-2" data-hs-overlay="#hs-vertically-centered-modal">
                                                Create Team<i class="ri-add-line ms-1 align-middle"></i>
                                              </button>
                                            <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                                  <div class="ti-modal-content w-full">
                                                    <div class="ti-modal-header">
                                                        <h6 class="modal-title" id="staticBackdropLabel2">Create Team
                                                        </h6>
                                                      <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                        </svg>
                                                      </button>
                                                    </div>
                                                    <div class="ti-modal-body px-4">
                                                        <div class="gridgrid-cols-12 gap-4">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="team-name" class="form-label">Team Name</label>
                                                                <input type="text" class="form-control" id="team-name" placeholder="Enter Name">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12 mt-2">
                                                                <label class="form-label">Maximum Team Limit</label>
                                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                                    <option value="10" selected>10</option>
                                                                    <option value="20">20</option>
                                                                    <option value="30">30</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                      <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#hs-vertically-centered-modal">
                                                    Cancel
                                                      </button>
                                                      <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                      create
                                                      </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <div class="teams-nav" id="teams-nav">
                                            <ul class="list-none mb-0 mt-2">
                                                <li class="!pb-0">
                                                    <div class="flex justify-between items-center">
                                                        <div class="text-[.625rem] font-semibold mb-2 text-[#8c9097]">TEAM UI</div>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success" data-hs-overlay="#create-teamui-mem">
                                                            <i class="ri-add-line"></i>
                                                          </button>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Angelica Hale</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Mona Magore</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    8 min
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Mark Wains</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Alex Carey</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Monika Karen</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    24 mins
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="pb-0">
                                                    <div class="flex justify-between items-center">
                                                        <div class="text-[.625rem] font-semibold mb-2 text-[#8c9097]">TEAM REACT</div>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success" data-hs-overlay="#create-teamreact-mem">
                                                            <i class="ri-add-line"></i>
                                                          </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Matthew Ray</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Melissa Blue</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Brenda Sams</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Muhammed Kher</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    13 mins
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Dorga Boavan</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Yashna Polana</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    19 mins
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="pb-0">
                                                    <div class="flex justify-between items-center">
                                                        <div class="text-[.625rem] font-semibold mb-2 text-[#8c9097]">TEAM TESTING</div>
                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success" data-hs-overlay="#create-teamtesting-mem">
                                                            <i class="ri-add-line"></i>
                                                          </button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Jason Smith</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Sasha Hops</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    21 mins
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Mark Zaker</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    38 mins
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded online">
                                                                    <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Suarez Adam</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <div class="me-2 flex items-center">
                                                                <span class="avatar avatar-sm avatar-rounded offline">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow">
                                                                <span>Kiara Advensh</span>
                                                            </div>
                                                            <div>
                                                                <span class="text-[.625rem] font-semibold text-[#8c9097]">
                                                                    1 hr
                                                                </span>
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

                    <!-- Start:: add-members modals -->

                    <!-- Start:: team ui modal -->
                    <div id="create-teamui-mem" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                          <div class="ti-modal-content w-full">
                            <div class="ti-modal-header">
                                <h6 class="modal-title">Add Member</h6>
                              <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-teamui-mem">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                              </button>
                            </div>
                            <div class="ti-modal-body px-4">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12">
                                        <label for="team-name3" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="team-name3" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                              <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#create-teamui-mem">
                            Cancel
                              </button>
                              <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                              Add
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End:: team ui modal -->

                    <!-- Start:: team react modal -->
                    <div id="create-teamreact-mem" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                          <div class="ti-modal-content w-full">
                            <div class="ti-modal-header">
                                <h6 class="modal-title">Add Member</h6>
                              <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-teamreact-mem">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                              </button>
                            </div>
                            <div class="ti-modal-body px-4">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12">
                                        <label for="team-name3" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="team-name5" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                              <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#create-teamreact-mem">
                            Cancel
                              </button>
                              <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                              Add
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End:: team react modal -->

                    <!-- Start:: team testing modal -->
                    <div id="create-teamtesting-mem" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                          <div class="ti-modal-content w-full">
                            <div class="ti-modal-header">
                                <h6 class="modal-title">Add Member</h6>
                              <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#create-teamtesting-mem">
                                <span class="sr-only">Close</span>
                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                </svg>
                              </button>
                            </div>
                            <div class="ti-modal-body px-4">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12">
                                        <label for="team-name3" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="team-name4" placeholder="Enter Name">
                                    </div>
                                </div>
                            </div>
                            <div class="ti-modal-footer">
                              <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-light" data-hs-overlay="#create-teamtesting-mem">
                            Cancel
                              </button>
                              <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                              Add
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- End:: team testing modal -->

                    <!-- End:: add-members modals -->

@endsection

@section('scripts')

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Internal Team JS -->
        @vite('resources/assets/js/team.js')


@endsection