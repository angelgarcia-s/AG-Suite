@extends('layouts.master')

@section('styles')
 
        <!-- Page Header -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Widgets</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Widgets
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Widgets
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start">
                                        <div class="me-4">
                                            <span class="avatar avatar-sm shadow-sm !rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-info" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M94.3 71.4c-.5-3.6-2.3-6.4-5.4-8.2-1.4-.8-3.1-1.4-4.7-2.1.2-.1.3-.3.4-.3 7.9-4.1 7.2-16.3 1.5-20.5-2.3-1.7-4.9-2.8-7.7-3.4-2-.4-3.9-.7-6-1.1 0-3.5.1-8.5.1-12.4H65c0 3.8-.1 8.7-.1 12.1H59c0-3.5 0-8.3.1-12.1h-7.4c0 4-.1 8.8-.1 12.3-5.1 0-10-.1-15-.1 0 2.7 0 5.3-.1 7.9h3c.9 0 1.9 0 2.8.1 2.6.2 3.9 1.6 3.9 4.2l-.3 31.9c0 2.3-1 3.3-3.3 3.3h-5c-.5 3-1 5.9-1.6 8.9 5 .1 10 .1 15 .2 0 3.8 0 8.7-.1 12.7h7.4c0-4 .1-8.7.1-12.5 2.1.1 4 .1 5.9.2 0 3.8-.1 8.4-.1 12.3h7.4c0-4 .1-8.7.1-12.4.3 0 .5-.1.6-.1 3.5-.6 7.2-.9 10.6-1.7 4.5-1.1 8.1-3.7 9.9-8.2 1.7-3.6 2-7.2 1.5-11zM59 44.3c4.6 0 9.1-.4 13.4 1.5 2.8 1.2 4.2 3.5 4 6.3-.2 2.9-1.9 5-4.8 6-4.1 1.3-8.3 1.3-12.7 1.1 0-5 .1-9.8.1-14.9zm16.2 37.1c-4.1 1.8-8.5 1.8-12.8 1.9-1.2 0-2.4-.1-3.8-.1.1-5.5.1-10.9.2-16.4 5.6 0 11.2-.4 16.5 1.9 2.7 1.2 4.3 3.3 4.3 6.4 0 3.1-1.6 5.1-4.4 6.3z"/></svg>
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex flex-wrap items-center justify-between text-[.875rem] mb-1">
                                                <span class="flex-grow">Bitcoin</span>
                                                <span class="ms-1 text-[#8c9097]">BTC</span>
                                            </div>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <h5 class="font-semibold mb-0">$12,800</h5>
                                                <div class="flex-grow">
                                                    <span class="ms-2 badge bg-success/10 text-success rounded-full">+25.8%</span>
                                                </div>
                                                <div id="btcCoin"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start">
                                        <div class="me-4">
                                            <span class="avatar avatar-sm shadow-sm !rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-success" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M65.2 87.2v22.7l28.1-39.5zM92.3 63.1l-27.1-45v32.7zM65.2 53.3v28l26.9-15.7zM35.8 63.1l27-45v32.7zM62.8 53.3v28L35.9 65.6zM62.8 87.2v22.7L34.7 70.4z"/></svg>
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex flex-wrap items-center justify-between text-[.875rem] mb-1">
                                                <span class="flex-grow">Ethereum</span>
                                                <span class="ms-1 text-[#8c9097]">ETH</span>
                                            </div>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <h5 class="font-semibold mb-0">$18,600</h5>
                                                <div class="flex-grow">
                                                    <span class="ms-2 badge bg-success/10 text-success rounded-full">+12.9%</span>
                                                </div>
                                                <div id="ethCoin"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start">
                                        <div class="me-4">
                                            <span class="avatar avatar-sm shadow-sm !rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-danger" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M20.8 89.3c1.4-4.1 2.7-7.9 4.1-11.8.1-.4.9-.7 1.3-.7 2.3-.1 4.7 0 7 0H79c1.2 0 1.8-.4 2.1-1.5 2.5-7.5 5.2-15 7.8-22.5.1-.4.2-.8.4-1.4H33.8c1.4-4.2 2.8-8.1 4.1-12 .1-.3.7-.6 1.1-.6 1.4-.1 2.8 0 4.2 0 18.8 0 37.6.1 56.3-.1 5.6-.1 11.6 4.3 9.2 12.5-1.8 6.1-4.1 12.1-6.2 18.2-.7 2.1-1.4 4.1-2.1 6.2-2.6 7.2-7.9 11.6-15.2 13.6-.7.2-1.4.2-2.1.2H22.3c-.4-.1-.8-.1-1.5-.1z"/><path fill="#fff" d="M55.9 58.1c-1.4 4-2.8 7.7-4.2 11.4-.1.3-.7.5-1 .5H19.2c-.1 0-.3-.1-.6-.2 1.3-3.7 2.6-7.3 4-10.9.1-.3.7-.7 1-.7 10.7-.1 21.4-.1 32.3-.1z"/></svg>
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex flex-wrap items-center justify-between text-[.875rem] mb-1">
                                                <span class="flex-grow">Dash</span>
                                                <span class="ms-1 text-[#8c9097]">DSH</span>
                                            </div>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <h5 class="font-semibold mb-0">$16,580</h5>
                                                <div class="flex-grow">
                                                    <span class="ms-2 badge bg-success/10 text-success rounded-full">+15.7%</span>
                                                </div>
                                                <div id="dshCoin"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start">
                                        <div class="me-4">
                                            <span class="avatar avatar-sm shadow-sm !rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-warning" viewBox="0 0 128 128"><path d="M64 128C28.7 128 0 99.3 0 64S28.7 0 64 0s64 28.7 64 64-28.7 64-64 64z"/><path fill="#fff" d="M63.8 22.6c3.7-.1 7.2.6 10.2 2.7 1.4.9 2.4.8 3.6-.5 2.4-2.6 5-5 7.5-7.6.9-.9 1.8-1.5 2.9-.2 1.1 1.1.8 2-.2 2.9-2.6 2.6-5 5.2-7.6 7.8-1.1 1.1-1.3 1.9-.5 3.3 5.8 10.4 2.9 22.5-8.6 28.1-1.1.5-2.3.8-3.5 1-1.4.3-1.9 1-1.9 2.5.1 3 .1 6 0 8.9 0 1.6.5 2.3 2.1 2.7 6.2 1.5 10.6 5.2 13.3 10.9 2.6 5.5 1.9 15.4-3.8 21.3-4.8 4.9-13.2 6.9-19.5 4.4-7.5-3-12.1-9.6-12.2-17.5-.1-9.6 5.1-16.4 14.3-19 1.4-.4 2.2-1 2.1-2.5-.1-3.4 0-6.8-.2-10.2 0-.6-1.1-1.4-1.8-1.6-6-1.6-10.4-5.2-12.9-10.8-5.6-13 4.3-27.4 16.7-26.6zM79 92.8c0-7.9-6.9-15.1-14.5-15.1-8-.1-15.3 7-15.4 15-.1 7.9 7.3 15.6 14.9 15.5 8.1-.1 15-7.2 15-15.4zM49.3 41.1c0 8.6 6.6 15.6 14.9 15.6 7.7 0 14.8-7.1 14.8-15.1 0-7.4-5.5-15.2-14.7-15-8.4.1-14.9 6.3-15 14.5z"/></svg>
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <div class="flex flex-wrap items-center justify-between text-[.875rem] mb-1">
                                                <span class="flex-grow">Golem</span>
                                                <span class="ms-1 text-[#8c9097]">GLM</span>
                                            </div>
                                            <div class="flex flex-wrap items-center justify-between">
                                                <h5 class="font-semibold mb-0">$12,545</h5>
                                                <div class="flex-grow">
                                                    <span class="ms-2 badge bg-success/10 text-success rounded-full">+12.1%</span>
                                                </div>
                                                <div id="glmCoin"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-12 col-span-12">
                            <div class="">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start justify-between ">
                                                <div class="flex-grow">
                                                    <p class="mb-0 text-[#8c9097]">Total Candidates</p>
                                                    <div class="flex items-center">
                                                        <span class="text-[1.25rem] font-semibold">9,231</span>
                                                        <span class="text-[0.75rem] text-success ms-2"><i class="ti ti-trending-up me-1 inline-block"></i>0.5%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-md !rounded-full bg-primary/10 !text-primary text-[1.125rem]">
                                                        <i class="bi bi-people-fill text-[1rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start justify-between">
                                                <div class="flex-grow">
                                                    <p class="mb-0 text-[#8c9097]">Total Subscriptions</p>
                                                    <div class="flex items-center">
                                                        <span class="text-[1.25rem] font-semibold">3,571</span>
                                                        <span class="text-[0.75rem] text-success ms-2"><i class="ti ti-trending-up me-1 inline-block"></i>0.42%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-md !rounded-full bg-secondary/10 !text-secondary text-[1.125rem]">
                                                        <i class="bi bi-person-lines-fill text-[1rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start justify-between">
                                                <div class="flex-grow">
                                                    <p class="mb-0 text-[#8c9097]">Page Views</p>
                                                    <div class="flex items-center">
                                                        <span class="text-[1.25rem] font-semibold">1,986</span>
                                                        <span class="text-[0.75rem] text-success ms-2"><i class="ti ti-trending-up me-1 inline-block"></i>5.1%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-md !rounded-full bg-success/10 !text-success text-[1.125rem]">
                                                        <i class="bi bi-eye-fill text-[1rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start justify-between">
                                                <div class="flex-grow">
                                                    <p class="mb-0 text-[#8c9097]">New Registrations</p>
                                                    <div class="flex items-center">
                                                        <span class="text-[1.25rem] font-semibold">773</span>
                                                        <span class="text-[0.75rem] text-success ms-2"><i class="ti ti-trending-up me-1 inline-block"></i>3.5%</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-md !rounded-full bg-info/10 !text-info text-[1.125rem]">
                                                        <i class="bi bi-file-earmark-text-fill text-[1rem]"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 xl:col-span-8 lg:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start mb-2">
                                                <div class="flex-grow">
                                                    <p class="mb-0 text-[#8c9097]">Total Recruiters</p>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="avatar avatar-md !bg-info text-[1.125rem]">
                                                        <i class="bi bi-person-square"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="text-[1.25rem] font-semibold">9,231</span>
                                            <span class="text-[0.75rem] text-success ms-1"><i class="ti ti-trending-up me-1 inline-block"></i>0.5%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box custom-box box-bg-primary">
                                        <div class="box-body">
                                            <div class="flex items-start mb-2">
                                                <div class="flex-grow">
                                                    <p class="mb-0 opacity-[0.7] !text-white">Premium Recruiters</p>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="avatar avatar-md bg-secondary shadow-sm text-[1.125rem]">
                                                        <i class="bi bi-person-square"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="text-[1.25rem] font-semibold !text-white">9,231</span>
                                            <span class="text-[0.75rem] opacity-[0.7] ms-1 !text-white"><i class="ti ti-trending-up me-1 inline-block"></i>0.5%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box custom-box overflow-hidden">
                                        <div class="box-body !p-0">
                                            <div class="p-4">
                                                <div class="flex items-center mb-2">
                                                    <span class="avatar avatar-md !rounded-full bg-secondary me-2">
                                                        <i class="bi bi-receipt text-[1rem]"></i>
                                                    </span>
                                                    <p class="mb-0 flex-grow text-[#8c9097]">Total Revenue</p>
                                                </div>
                                                <span class="text-[1.25rem] font-semibold">$12,897</span>
                                                <span class="text-[0.75rem] text-success ms-1"><i class="ti ti-trending-up me-1 inline-block"></i>3.5%</span>
                                            </div>
                                            <div id="totalRevenue"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-6 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <span class="avatar avatar-md !rounded-full bg-success me-2">
                                                    <i class="bi bi-people text-[1rem]"></i>
                                                </span>
                                                <p class="mb-0 flex-grow text-[#8c9097]">Active Members</p>
                                            </div>
                                            <span class="text-[1.25rem] font-semibold">$12,897</span>
                                            <span class="text-[0.75rem] text-success ms-1"><i class="ti ti-trending-up me-1 inline-block"></i>3.5%</span>
                                            <div class="font-normal flex items-center mb-2 mt-3">
                                                <p class="mb-0 flex-grow">Active Candidates</p>
                                                <span>3,274</span>
                                            </div>
                                            <div class="progress progress-xs mb-4">
                                                <div class="progress-bar !bg-success w-1/4" ></div>
                                            </div>
                                            <div class="font-normal flex items-center mb-2">
                                                <p class="mb-0 flex-grow">Active Recruiters</p>
                                                <span>8,726</span>
                                            </div>
                                            <div class="progress progress-xs mb-2">
                                                <div class="progress-bar !bg-success w-3/4" ></div>
                                            </div>
                                        </div>
                                        <div class="box-footer text-center">
                                            <div class="grid">
                                                <a href="javascript:void(0);" class="text-primary">View Details <i class="ti ti-external-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-7 lg:col-span-7 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <div class="flex-grow flex items-center">
                                                    <div class="me-2">
                                                        <span class="avatar rounded-[0.375rem] !bg-primary !text-white text-[1.25rem]"><i class="bi bi-people"></i></span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <p class="mb-0 ">Premium Recruiters</p>
                                                        <span class="text-success text-[0.75rem]">7 New</span>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-primary !rounded-full btn-wave mb-0" aria-label="View All"><i class="bi bi-chevron-right rtl:rotate-180"></i></a>
                                                </div>
                                            </div>
                                            <p class="mb-3 text-[1.25rem] font-semibold">386</p>
                                            <p class="mb-2 text-[#8c9097] font-normal">Recents</p>
                                            <div class="flex items-center justify-between">
                                                <div class="avatar-list-stacked">
                                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden"  aria-label="Mis x matched"><img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img" class="w-full"></a>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden"  aria-label="Barbel Bob"><img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img" class="w-full"></a>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden"  aria-label="Phan Rel"><img src="{{asset('build/assets/images/faces/20.jpg')}}" alt="img" class="w-full"></a>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm rounded-circle overflow-hidden bg-primary text-white" >+4</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex items-center">
                                                <div class="flex-grow">
                                                    <p class="mb-1 text-[1.25rem] font-semibold text-default">1,773</p>
                                                    <p class="mb-0 text-[#8c9097]">Active Members</p>
                                                    <p class="mb-0 text-[.6875rem]"><a href="javascript:void(0);" class="text-success underline">View All</a></p>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="avatar !bg-info !text-white !rounded-full text-[1.25rem]"><i class="bi bi-people-fill"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="flex items-center">
                                                <div class="flex-grow">
                                                    <p class="mb-1 text-[1.25rem] font-semibold text-default">116</p>
                                                    <p class="mb-0 text-[#8c9097]">Registrations</p>
                                                    <p class="mb-0 text-[.6875rem]"><a href="javascript:void(0);" class="text-success underline">View All</a></p>
                                                </div>
                                                <div class="ms-2">
                                                    <span class="avatar !bg-success !text-white !rounded-full text-[1.25rem]"><i class="bi bi-file-earmark-text"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 xl:col-span-5 lg:col-span-5 col-span-12">
                            <div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box box-bg-primary">
                                        <div class="box-header !bg-white/20 !border-b-0 justify-between">
                                            <div class="box-title !text-white before:hidden">
                                                Premium Recruiters
                                            </div>
                                            <div>
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm !bg-primary !mb-0"><i class="ti ti-chevron-right rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex flex-wrap items-start">
                                                <div class="flex-grow overflow-hidden">
                                                    <p class="mb-2 leading-none text-[1.25rem] font-semibold !text-white">9,231</p>
                                                    <p class="mb-0 text-[0.75rem] text-white opacity-[0.7]">
                                                        <span class="!text-white"><i class="bi bi-caret-up-fill !text-white"></i> 2.3%</span>
                                                        <span class="opacity-[0.7] ms-1 !text-white">From Last Month</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <span class="avatar avatar-sm bg-success !rounded-full"><i class="bi bi-people-fill"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body !p-0">
                                            <div class="p-4">
                                                <div class="flex flex-wrap mb-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="pe-2">
                                                        <span class="avatar border text-[#8c9097] !text-primary"><i class="ri-apple-fill text-[1.125rem]"></i></span>
                                                    </a>
                                                    <div class="flex-grow">
                                                        <div class="flex flex-wrap items-center justify-between mb-1">
                                                            <span class="font-semibold">Apple</span>
                                                            <span class="!text-success text-end"><i class="ti ti-trending-up text-[.6875rem] me-1 inline-block"></i>0.14%</span>
                                                        </div>
                                                        <div class="flex flex-wrap items-center justify-between text-[0.75rem] mb-4">
                                                            <span class="text-[#8c9097]">$12,289.44</span>
                                                            <span class="text-success text-end">+$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <a href="javascript:void(0);" class="flex-grow ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light me-2">Short</a>
                                                    <a href="javascript:void(0);" class="flex-grow ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body !p-0">
                                            <div class="p-4">
                                                <div class="flex flex-wrap mb-1">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="pe-2">
                                                        <span class="avatar border text-[#8c9097] !text-primary"><i class="ri-bit-coin-fill text-[1.125rem]"></i></span>
                                                    </a>
                                                    <div class="flex-grow">
                                                        <div class="flex flex-wrap items-center justify-between mb-1">
                                                            <span class="font-semibold">Bitcoin</span>
                                                            <span class="text-success text-end"><i class="ti ti-trending-up text-[.6875rem] me-1 inline-block"></i>2.14%</span>
                                                        </div>
                                                        <div class="flex flex-wrap items-center justify-between text-[0.75rem] mb-3">
                                                            <span class="text-[#8c9097]">$58,151.02</span>
                                                            <span class="text-success text-end">+$5,745.62</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <a href="javascript:void(0);" class="flex-grow ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light me-2">Short</a>
                                                    <a href="javascript:void(0);" class="flex-grow ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xxl:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="flex-grow flex items-start">
                                            <div class="me-2">
                                                <span class="avatar avatar-md !text-primary border bg-light"><i class="ti ti-users text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="font-semibold text-[.875rem] mb-0">Total Candidates</p>
                                                <p class="mb-0 text-[#8c9097] text-[0.75rem] opacity-[0.7]">Magna sit elitr kasd consetetur.</p>
                                            </div>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i class="ti ti-dots"></i></a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-0">
                                        <p class="mb-0 text-[1.25rem] font-semibold">2,460</p>
                                        <span class="text-[#8c9097] ms-2"><i class="ti ti-trending-up align-middle text-success me-1 inline-block"></i>2.5%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-grow">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-primary w-[14%]" ></div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <span class="text-[0.75rem] text-[#8c9097]">14% Target</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="flex-grow flex items-start">
                                            <div class="me-2">
                                                <span class="avatar avatar-md !text-secondary border bg-light"><i class="ti ti-user-circle text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="font-semibold text-[.875rem] mb-0">Recruiters</p>
                                                <p class="mb-0 text-[#8c9097] text-[0.75rem] opacity-[0.7]">Elitr at gubergren sit sed.</p>
                                            </div>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i class="ti ti-dots"></i></a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-0">
                                        <p class="mb-0 text-[1.25rem] font-semibold">7,539</p>
                                        <span class="text-[#8c9097] ms-2"><i class="ti ti-trending-up align-middle text-success me-1 inline-block"></i>3.1%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-grow">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar !bg-secondary w-[55%]" ></div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <span class="text-[0.75rem] text-[#8c9097]">55% Target</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="flex-grow flex items-start">
                                            <div class="me-2">
                                                <span class="avatar avatar-md !text-success border bg-light"><i class="ti ti-view-360 text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="font-semibold text-[.875rem] mb-0">Page Views</p>
                                                <p class="mb-0 text-[#8c9097] text-[0.75rem] opacity-[0.7]">Sed duo ut sanctus gubergren.</p>
                                            </div>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i class="ti ti-dots"></i></a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-0">
                                        <p class="mb-0 text-[1.25rem] font-semibold">13,693</p>
                                        <span class="text-[#8c9097] ms-2"><i class="ti ti-trending-up align-middle text-success me-1 inline-block"></i>5.4%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-grow">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar !bg-success w-[24%]" ></div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <span class="text-[0.75rem] text-[#8c9097]">24% Target</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 sm:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="flex items-start justify-between mb-6">
                                        <div class="flex-grow flex items-start">
                                            <div class="me-2">
                                                <span class="avatar avatar-md !text-indigo border bg-light"><i class="ti ti-view-360 text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="font-semibold text-[.875rem] mb-0">Total Subscriptions</p>
                                                <p class="mb-0 text-[#8c9097] text-[0.75rem] opacity-[0.7]">Invidunt magna voluptua.</p>
                                            </div>
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i class="ti ti-dots"></i></a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Another Action</a></li>
                                                <li><a href="javascript:void(0);" class="ti-dropdown-item">Something Else Here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-0">
                                        <p class="mb-0 text-[1.25rem] font-semibold">1,116</p>
                                        <span class="text-[#8c9097] ms-2"><i class="ti ti-trending-down align-middle text-danger me-1 inline-block"></i>3.2%</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="flex-grow">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar !bg-indigo w-[67%]" ></div>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <span class="text-[0.75rem] text-[#8c9097]">67% Target</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box custom-box">
                                <div class="box-body !p-0">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-3 col-span-12 border-e border-dashed">
                                            <div class="flex flex-wrap items-start p-6">
                                                <div class="me-4 leading-none">
                                                    <span class="avatar avatar-md !rounded-full !bg-primary shadow-sm">
                                                        <i class="ti ti-package text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="font-semibold ">45,280</h5>
                                                    <p class="text-[#8c9097] mb-0 text-[0.75rem]">Total Products</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success/10 text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>1.31%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12 border-e border-dashed">
                                            <div class="flex flex-wrap items-start p-6">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-md !rounded-full bg-secondary shadow-sm">
                                                        <i class="ti ti-rocket text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="font-semibold ">10,500</h5>
                                                    <p class="text-[#8c9097] mb-0 text-[0.75rem]">Total Sales</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-danger/10 text-danger"><i class="ri-arrow-down-s-line align-middle me-1"></i>1.14%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12 border-e border-dashed">
                                            <div class="flex flex-wrap items-start p-6">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-md !rounded-full bg-success shadow-sm">
                                                        <i class="ti ti-wallet text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="font-semibold ">$69,270</h5>
                                                    <p class="text-[#8c9097] mb-0 text-[0.75rem]">Income</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success/10 text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>2.58%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 col-span-12 ">
                                            <div class="flex flex-wrap items-start p-6">
                                                <div class="me-3 leading-none">
                                                    <span class="avatar avatar-md !rounded-full bg-warning shadow-sm">
                                                        <i class="ti ti-packge-import text-[1.125rem]"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <h5 class="font-semibold ">12,088</h5>
                                                    <p class="text-[#8c9097] mb-0 text-[0.75rem]">Total Orders</p>
                                                </div>
                                                <div>
                                                    <span class="badge bg-success/10 text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>12.05%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box custom-box box-bg-primary text-white">
                                <div class="box-body !p-0">
                                    <div class="flex items-start p-6 flex-wrap">
                                        <div class="me-4 leading-none">
                                            <span class="avatar avatar-md !rounded-full bg-white !text-primary shadow-sm">
                                                <i class="ti ti-coin text-[1.125rem]"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow">
                                            <h5 class="font-semibold mb-1 !text-white">$21,520</h5>
                                            <p class="opacity-[0.7] mb-0 text-[0.75rem] !text-white">Expenses</p>
                                        </div>
                                        <div>
                                            <span class="badge bg-success text-white"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>14.69%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid !border-t-primary !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-primary shadow-sm !rounded-full mb-2">
                                            <i class="ri-briefcase-2-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Total Sales</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">15,800</h5>
                                            <span class="badge bg-success/10 text-success rounded-full ms-1">+25.8%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid !border-t-secondary !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-secondary shadow-sm !rounded-full mb-2">
                                            <i class="ri-bill-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Total Tax</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">$12,650</h5>
                                            <span class="badge bg-success/10 text-success rounded-full ms-1">+12.2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid border-t-success !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-success shadow-sm !rounded-full mb-2">
                                            <i class="ri-wallet-2-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Total Income</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">$14,800</h5>
                                            <span class="badge bg-success/10 text-success rounded-full ms-1">+7.45%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid border-t-info !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-info shadow-sm !rounded-full mb-2">
                                            <i class="ri-line-chart-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Total Expenses</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">$7,566</h5>
                                            <span class="badge bg-danger/10 text-danger rounded-full ms-1">-3.21%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid border-t-warning !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-warning shadow-sm !rounded-full mb-2">
                                            <i class="ri-money-dollar-box-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Sales Profit</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">$7,474</h5>
                                            <span class="badge bg-success/10 text-success rounded-full ms-1">+36.03%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-12">
                            <div class="box custom-box border-t-[0.188rem] border-solid border-t-danger !rounded-none">
                                <div class="box-body">
                                    <div class="text-center">
                                        <span class="avatar avatar-md bg-danger shadow-sm !rounded-full mb-2">
                                            <i class="ri-profile-line text-[1rem]"></i>
                                        </span>
                                        <p class="text-[.875rem] font-semibold mb-2">Opex Ratio</p>
                                        <div class="flex items-center justify-center flex-wrap">
                                            <h5 class="mb-0 font-semibold">32%</h5>
                                            <span class="badge bg-success/10 text-success rounded-full ms-1">+0.89%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-5 -->

                    <!-- Start::row-6 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Upcoming Events
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">View All</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <nav class="flex flex-wrap xxxl:flex-nowrap justify-start sm:justify-between" aria-label="Tabs">
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary  active" id="mon" data-hs-tab="#mon-1" aria-controls="mon-1">
                                            <span class="block mb-1">09</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Mon</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="tue" data-hs-tab="#tue-1" aria-controls="tue-1">
                                            <span class="block mb-1">10</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Tue</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="wed" data-hs-tab="#wed-1" aria-controls="wed-1">
                                            <span class="block mb-1">11</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Wed</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="thu" data-hs-tab="#thu-1" aria-controls="thu-1">
                                            <span class="block mb-1">12</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Thu</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="fri" data-hs-tab="#fri-1" aria-controls="fri-1">
                                            <span class="block mb-1">13</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Fri</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="sat" data-hs-tab="#sat-1" aria-controls="sat-1">
                                            <span class="block mb-1">14</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Sat</span>
                                        </button>
                                        <button type="button" class="xxxl:w-full hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 block items-center gap-2 bg-transparent text-sm font-medium text-center text-defaulttextcolor rounded-sm hover:text-primary " id="sun" data-hs-tab="#sun-1" aria-controls="sun-1">
                                            <span class="block mb-1">15</span>
                                            <span class="block mb-0 opacity-[0.7] text-[0.75rem]">Sun</span>
                                        </button>
                                    </nav>
                                    <div class="tab-content pt-4 my-4">
                                        <div id="mon-1" role="tabpanel" aria-labelledby="mon-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block "></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="tue-1"  class="hidden" role="tabpanel" aria-labelledby="tue-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="wed-1"  class="hidden" role="tabpanel" aria-labelledby="wed-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="thu-1"  class="hidden" role="tabpanel" aria-labelledby="thu-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="fri-1"  class="hidden" role="tabpanel" aria-labelledby="fri-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="sat-1"  class="hidden" role="tabpanel" aria-labelledby="sat-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="sun-1"  class="hidden" role="tabpanel" aria-labelledby="sun-1">
                                            <ul class="list-unstyled mb-0 upcoming-events-list">
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Meeting with client</p>
                                                            <p class="mb-0 text-[#8c9097]">Video Conference</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>9:00am - 10:00am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Lunch with team members</p>
                                                            <p class="mb-0 text-[#8c9097]">Dolores Ait Labore Sit</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>12:00pm - 12:45am</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">General board meeting</p>
                                                            <p class="mb-0 text-[#8c9097]">Golden PArk</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4:00pm - 5:30pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-start justify-conent-between">
                                                        <div class="flex-grow">
                                                            <p class="mb-0 text-[.875rem]">Create New Registration Page</p>
                                                            <p class="mb-0 text-[#8c9097]">2UA Project</p>
                                                        </div>
                                                        <div>
                                                            <span class="text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>5:00pm - 5:45pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Timeline
                                    </div>
                                    <div>
                                        <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">View All</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="list-unstyled timeline-widget mb-0 my-3">
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold">02</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Mon</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-center justify-between">
                                                    <div>
                                                        <p class="mb-1  timeline-widget-content text-wrap">You have an announcement - Ipsum Est Diam Eirmod</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]">10:00AM<span class="badge bg-primary/10 text-primary ms-2">Announcement</span></p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="p-2 text-[1rem] text-[#8c9097]">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold">15</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Sun</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-center justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">National holiday - Vero Jayanti</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]"><span class="badge bg-warning/10 text-warning">Holiday</span></p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="p-2 text-[1rem] text-[#8c9097]">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold">23</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Mon</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-center justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">John pup birthday - Team Member</p>
                                                        <p class="mb-4 text-[0.75rem] leading-none text-[#8c9097]">09:00AM<span class="badge bg-success/10 text-success ms-2">Birthday</span></p>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">Amet sed no dolor kasd - Et Dolores Tempor Erat</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]">04:00PM<span class="badge bg-primary/10 text-primary ms-2">Announcement</span></p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="p-2 text-[1rem] text-[#8c9097]">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-widget-list">
                                            <div class="flex items-start">
                                                <div class="me-[3rem] text-center">
                                                    <span class="block text-[1.25rem] font-semibold">31</span>
                                                    <span class="block text-[0.75rem] text-[#8c9097]">Tue</span>
                                                </div>
                                                <div class="flex flex-wrap flex-grow items-center justify-between">
                                                    <div>
                                                        <p class="mb-1 sm:text-truncate timeline-widget-content text-wrap">National Holiday - Dolore Ipsum</p>
                                                        <p class="mb-0 text-[0.75rem] leading-none text-[#8c9097]"><span class="badge bg-warning/10 text-warning">Holiday</span></p>
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="p-2 text-[1rem] text-[#8c9097]">
                                                            <i class="fe fe-more-vertical"></i>
                                                        </a>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Traffic Sources
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">Browser</th>
                                                    <th scope="col" class="text-start">Sessions</th>
                                                    <th scope="col" class="text-start">Views</th>
                                                    <th scope="col" class="text-start">Traffic</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-google-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Google</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>23,379</span>
                                                    </td>
                                                    <td>
                                                        <span>16,890</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[34%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr  class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-safari-line text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Safari</div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>78,973</span>
                                                    </td>
                                                    <td>
                                                        <span>29,906</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[58%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr  class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-opera-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Opera</div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>12,457</span>
                                                    </td>
                                                    <td>
                                                        <span>8,674</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[62%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr  class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-edge-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Edge</div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>8,570</span>
                                                    </td>
                                                    <td>
                                                        <span>4,980</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[71%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr  class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-firefox-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Firefox</div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>6,135</span>
                                                    </td>
                                                    <td>
                                                        <span>4,436</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[48%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr  class="border border-defaultborder ">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <span class="avatar !rounded-full avatar-sm p-2 bg-primary me-2">
                                                                <i class="ri-ubuntu-fill text-[1.125rem] text-white"></i>
                                                            </span>
                                                            <div class="font-semibold">Ubuntu</div>
                                                        </div>

                                                    </td>
                                                    <td>
                                                        <span><i class="ri-arrow-up-s-fill me-1 text-success align-middle text-[1.125rem]"></i>4,789</span>
                                                    </td>
                                                    <td>
                                                        <span>2,447</span>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary w-[28%]" >
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Users By Country
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flex flex-wrap justify-between mb-[3rem]">
                                        <div class="me-[3rem] flex items-center">
                                            <div class="me-2">
                                                <span class="avatar !rounded-full bg-primary/10 !text-primary"><i class="ri-user-3-line text-[1rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="text-[1.125rem] mb-0 text-primary font-semibold">25,350</p>
                                                <span class="text-[#8c9097] text-[0.75rem]">This month</span>
                                            </div>
                                        </div>
                                        <div class="me-4 flex items-center">
                                            <div class="me-2">
                                                <span class="avatar !rounded-full bg-light !text-defaulttextcolor"><i class="ri-user-3-line text-[1rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="text-[1.125rem] mb-0 font-semibold">19,200</p>
                                                <span class="text-[#8c9097] text-[0.75rem]">Last month</span>
                                            </div>
                                        </div>
                                        <div class="me-4 flex items-center">
                                            <div class="me-2">
                                                <span class="avatar !rounded-full bg-success/10 !text-success"><i class="ri-user-3-line text-[1rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="text-[1.125rem] mb-0 text-success font-semibold">1,24,890</p>
                                                <span class="text-[#8c9097] text-[0.75rem]">This Year</span>
                                            </div>
                                        </div>
                                        <div class="me-4 flex items-center">
                                            <div class="me-2">
                                                <span class="avatar !rounded-full bg-secondary/10 !text-secondary"><i class="ri-user-3-line text-[1rem]"></i></span>
                                            </div>
                                            <div class="flex-grow">
                                                <p class="text-[1.125rem] mb-0 text-secondary font-semibold">97,799</p>
                                                <span class="text-[#8c9097] text-[0.75rem]">Last Year</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-5 col-span-12">
                                            <div class="h-full my-auto">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div><i class="ri-checkbox-blank-circle-fill text-primary text-[0.5rem] me-1 align-middle inline-block"></i>Brazil</div>
                                                            <div>1,290</div>
                                                            <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>2.90%</div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div><i class="ri-checkbox-blank-circle-fill text-secondary text-[0.5rem] me-1 align-middle inline-block"></i>Greenland</div>
                                                            <div>2,596</div>
                                                            <div class="text-danger"><i class="ri-arrow-down-s-line align-middle me-1 inline-block"></i>1.1%</div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div><i class="ri-checkbox-blank-circle-fill text-success text-[0.5rem] me-1 align-middle inline-block"></i>Russia</div>
                                                            <div>3,710</div>
                                                            <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>0.8%</div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div><i class="ri-checkbox-blank-circle-fill text-warning text-[0.5rem] me-1 align-middle inline-block"></i>Palestine</div>
                                                            <div>1,116</div>
                                                            <div class="text-danger"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>10.06%</div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="flex flex-wrap items-center justify-between">
                                                            <div><i class="ri-checkbox-blank-circle-fill text-danger text-[0.5rem] me-1 align-middle inline-block"></i>Canada</div>
                                                            <div>12,150</div>
                                                            <div class="text-success"><i class="ri-arrow-up-s-line align-middle me-1 inline-block"></i>9.05%</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-7 col-span-12">
                                            <div id="users-map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Recent Tasks
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a href="javascript:void(0);" class="p-2 text-[0.75rem] text-[#8c9097]">
                                            View All<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                        </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Download</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Import</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Export</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap table-bordered min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start">S.No</th>
                                                    <th scope="col" class="text-start">Title</th>
                                                    <th scope="col" class="text-start">Assigned To</th>
                                                    <th scope="col" class="text-start">Progress</th>
                                                    <th scope="col" class="text-start">Status</th>
                                                    <th scope="col" class="text-start">Due Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-defaultborder">
                                                    <td>01</td>
                                                    <td>Server Side Validation</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-primary !rounded-full text-white" href="javascript:void(0);">
                                                                +2
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-3/5" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        17-04-2023
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder">
                                                    <td>02</td>
                                                    <td>Multipurpose Dashboard Template</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-0" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning/10 text-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        14-05-2023
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder">
                                                    <td>03</td>
                                                    <td>Documentation Project</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-primary !rounded-full text-white" href="javascript:void(0);">
                                                                +1
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-full" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        20-04-2023
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder">
                                                    <td>04</td>
                                                    <td>HR Management Template Design</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-1/2" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        29-05-2023
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder">
                                                    <td>05</td>
                                                    <td>Developing Backend</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-primary !rounded-full text-white" href="javascript:void(0);">
                                                                +3
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-1/2" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary">In Progress</span>
                                                    </td>
                                                    <td>
                                                        25-05-2023
                                                    </td>
                                                </tr>
                                                <tr class="border border-defaultborder">
                                                    <td>06</td>
                                                    <td>	Design New Dashboard Template</td>
                                                    <td>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-xs !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                            </span>
                                                            <a class="avatar avatar-xs bg-primary !rounded-full text-white" href="javascript:void(0);">
                                                                +3
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated w-full" ></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success/10 text-success">Completed</span>
                                                    </td>
                                                    <td>
                                                        04-05-2023
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

                    <!-- Start::row-8 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Recent Applicants</div>
                                </div>
                                <div class="box-body">
                                    <div id="views"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Sessions By Device</div>
                                </div>
                                <div class="box-body">
                                    <div id="sessionsByDevice"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Target Report</div>
                                    <div class="ms-auto hs-dropdown ti-dropdown">
                                        <a href="javascript:void(0);" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary dropdown-toggle" aria-expanded="false">
                                            Details
                                        </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body pb-4">
                                    <div class="mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ltr:float-right rtl:float-left text-primary" fill="currentColor" width="36px" height="36px" viewBox="0 0 24 24"><path fill="currentColor" d="M11,9h4a1,1,0,0,0,0-2H13V6a1,1,0,0,0-2,0V7a3,3,0,0,0,0,6h2a1,1,0,0,1,0,2H9a1,1,0,0,0,0,2h2v1a1,1,0,0,0,2,0V17a3,3,0,0,0,0-6H11a1,1,0,0,1,0-2Zm1-8A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,12,21Z"/></svg>
                                        <p class="text-primary font-500 mb-2">Revenue by week</p>
                                        <h4 class="mb-2 font-semibold">$54,125.03</h4>
                                        <span class="text-danger me-1 text-[.875rem]"> - 1.3%<i class="ri-arrow-down-s-fill align-middle ms-1"></i>  </span>
                                        <span class="text-[#8c9097] text-[0.75rem]">33% of target reached</span>
                                    </div>
                                    <div id="report"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-8 -->

@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- JSVector Maps JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVector Maps MapsJS -->
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>

        <!-- Index JS -->
        @vite('resources/assets/js/widgets.js')
        

@endsection