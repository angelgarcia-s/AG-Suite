@extends('layouts.master')

@section('styles')
 
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> NFT</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Dashboards
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                NFT
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-6 col-span-12">
                            <div class="xxl:col-span-12 col-span-12">
                                <div class="box overflow-hidden">
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 gap-3 sm:gap-0">
                                            <div class="sm:col-span-8 pe-2 col-span-12 my-auto">
                                                <div class="my-auto">
                                                    <h4 class="font-semibold mb-2 text-[1.5rem] leading-6">Discover, collect and sell
                                                        your <span class="text-primary">NFTs</span> at one place</h4>
                                                    <p class="mb-6 text-[#8c9097] text-[0.875rem] opacity-[0.7]">
                                                        NFT means non-fungible tokens (NFTs), which are generally created
                                                        using the same type of programming used for cryptocurrencies.It is
                                                        is a unique digital identifier that cannot be copied.
                                                    </p>
                                                    <div class="btn-list pt-1">
                                                        <button type="button" class="ti-btn ti-btn-primary !text-white ti-btn-wave m-1 !bg-primary waves-effect waves-light">Discover Now</button>
                                                        <button type="button" class="ti-btn ti-btn-outline-primary ti-btn-wave m-1 waves-effect waves-light">Create Yours</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sm:col-span-4 col-span-12 sm:ps-3 my-auto">
                                                <div class="featured-nft">
                                                    <img src="{{asset('build/assets/images/nft-images/1.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12">
                            <div class="xxl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-start">
                                            <div class="me-4 leading-none">
                                                <span class="avatar avatar-lg bg-primary">
                                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-[#8c9097]">Total Assets</p>
                                                <h5 class="mb-1 font-semibold text-[1.25rem]">596</h5>
                                                <p class="text-[0.6875rem] text-[#8c9097] mb-0"><span
                                                        class="text-success font-semibold">0.25%<i
                                                            class="ri-arrow-up-s-line align-middle mx-1"></i></span>
                                                    This month
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12  col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-start">
                                            <div class="me-4 leading-none">
                                                <span class="avatar avatar-lg bg-success">
                                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                        width="24px" fill="#000000">
                                                        <g>
                                                            <path d="M0,0h24v24H0V0z" fill="none" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="M21.41,11.41l-8.83-8.83C12.21,2.21,11.7,2,11.17,2H4C2.9,2,2,2.9,2,4v7.17c0,0.53,0.21,1.04,0.59,1.41l8.83,8.83 c0.78,0.78,2.05,0.78,2.83,0l7.17-7.17C22.2,13.46,22.2,12.2,21.41,11.41z M12.83,20L4,11.17V4h7.17L20,12.83L12.83,20z" />
                                                                <circle cx="6.5" cy="6.5" r="1.5" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-[#8c9097]">Total Sales</p>
                                                <h5 class="font-semibold mb-1 text-[1.25rem]">821</h5>
                                                <p class="text-[0.6875rem] text-[#8c9097] mb-0"><span
                                                        class="text-success font-semibold">1.52%<i
                                                            class="ri-arrow-up-s-line  align-middle mx-1"></i></span>
                                                    This month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12">
                            <div class="xxl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-start">
                                            <div class="me-4 leading-none">
                                                <span class="avatar avatar-lg bg-secondary">
                                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                        width="24px" fill="#000000">
                                                        <path d="M0,0h24v24H0V0z" fill="none" />
                                                        <g>
                                                            <path
                                                                d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z" />
                                                            <rect height="2" width="6" x="9" y="7" />
                                                            <rect height="2" width="2" x="16" y="7" />
                                                            <rect height="2" width="6" x="9" y="10" />
                                                            <rect height="2" width="2" x="16" y="10" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <p class="text-[#8c9097]">Total Value</p>
                                                <h5 class="font-semibold mb-1 text-[1.25rem]">$1,298</h5>
                                                <p class="text-[0.6875rem] text-[#8c9097] mb-0"><span
                                                        class="text-success font-semibold">0.74%<i
                                                            class="ri-arrow-up-s-line  align-middle mx-1"></i></span>
                                                    This month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="flex flex-wrap items-start">
                                            <div class="me-4 leading-none">
                                                <span class="avatar avatar-lg bg-warning">
                                                    <svg class="svg-white" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                                        width="24px" fill="#000000">
                                                        <g>
                                                            <rect fill="none" height="24" width="24" />
                                                        </g>
                                                        <g>
                                                            <path
                                                                d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8 s8,3.59,8,8C20,16.41,16.41,20,12,20z M12.89,11.1c-1.78-0.59-2.64-0.96-2.64-1.9c0-1.02,1.11-1.39,1.81-1.39 c1.31,0,1.79,0.99,1.9,1.34l1.58-0.67c-0.15-0.44-0.82-1.91-2.66-2.23V5h-1.75v1.26c-2.6,0.56-2.62,2.85-2.62,2.96 c0,2.27,2.25,2.91,3.35,3.31c1.58,0.56,2.28,1.07,2.28,2.03c0,1.13-1.05,1.61-1.98,1.61c-1.82,0-2.34-1.87-2.4-2.09L8.1,14.75 c0.63,2.19,2.28,2.78,3.02,2.96V19h1.75v-1.24c0.52-0.09,3.02-0.59,3.02-3.22C15.9,13.15,15.29,11.93,12.89,11.1z" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div>
                                                <p class=" text-[#8c9097]">Total Revenue</p>
                                                <h5 class="font-semibold mb-1 text-[1.25rem]">$7,63,129.09</h5>
                                                <p class="text-[0.6875rem] text-[#8c9097] mb-0"><span
                                                        class="text-danger font-semibold">0.124%<i
                                                            class="ri-arrow-up-s-line  align-middle mx-1"></i></span> This
                                                    month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-2 col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex flex-wrap items-center justify-between mb-2">
                                        <div>
                                            <p class="mb-0 text-[#8c9097]">Your Balance</p>
                                            <h5 class="font-semibold text-[1.25rem]">$19,867.96</h5>
                                        </div>
                                        <div>
                                            <span class="avatar avatar-md bg-primary/10">
                                                <svg class="svg-primary" xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 0 24 24" width="24px" fill="#000000">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z" />
                                                    <circle cx="16" cy="12" r="1.5" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-[#8c9097] text-[0.6875rem] opacity-[0.7]">Top offers on USD-27,981
                                        <span class="text-success font-semibold">(+29.09%)</span></p>
                                    <div id="nft-balance-chart" class="px-4 py-6"></div>
                                    <div class="grid mt-3">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-success ti-btn-wave !text-[0.75rem] !font-semibold">Top Up Wallet</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-8 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="mb-4 flex items-center justify-between">
                                <h6 class="font-semibold mb-0 text-[1rem] text-defaulttextcolor">Trending Auctions :</h6>
                                <div>
                                    <button type="button" class="tibtn !py-1 !px-[0.5rem] rounded-sm  text-[0.75rem] ti-btn-primary ti-btn-wave">View All</button>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 gap-x-4">
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                    <div class="box">
                                        <img src="{{asset('build/assets/images/nft-images/2.png')}}" class="card-img-top" alt="...">
                                        <div class="flex items-center justify-between nft-like-section w-full px-6">
                                            <div class="flex-grow">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-icon bg-success text-white !rounded-full ti-btn-wave">
                                                    <i class="ri-heart-fill"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <span class="badge nft-like-badge text-white"><i
                                                        class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.32k</span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex items-center mb-3">
                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                <div>
                                                    <p class="mb-0 font-semibold">Bloom NFT</p>
                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">@bloom116</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white nft-auction-time">
                                                04hrs : 24m : 38s
                                            </p>
                                            <p class="text-[0.9375rem] font-semibold mb-2">Color Abstract - NFT</p>
                                            <div class="flex flex-wrap itesm-center justify-between mb-4">
                                                <div class="font-semibold">
                                                    Highest Bid -
                                                </div>
                                                <div class="flex flex-wrap items-center leading-none">
                                                    <span class="avatar avatar-xs me-1">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}"
                                                            alt="">
                                                    </span>0.19ETH
                                                </div>
                                            </div>
                                            <div class="grid">
                                                <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                    <div class="box">
                                        <img src="{{asset('build/assets/images/nft-images/3.png')}}" class="card-img-top" alt="...">
                                        <div class="flex items-center justify-between nft-like-section w-full px-4">
                                            <div class="flex-grow">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon bg-success text-white !rounded-full ti-btn-wave">
                                                    <i class="ri-heart-fill"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <span class="badge nft-like-badge text-white"><i
                                                        class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.26k</span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex items-center mb-3">
                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                <div>
                                                    <p class="mb-0 font-semibold">Ergos NFT</p>
                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">@ergos900</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white nft-auction-time">
                                                04hrs : 24m : 38s
                                            </p>

                                            <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                            <div class="flex flex-wrap itesm-center justify-between mb-4">
                                                <div class="font-semibold">
                                                    Highest Bid -
                                                </div>
                                                <div class="flex flex-wrap items-center leading-none">
                                                    <span class="avatar avatar-xs me-1">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}"
                                                            alt="">
                                                    </span>0.35ETH
                                                </div>
                                            </div>
                                            <div class="grid">
                                                <button type="button" class="ti-btn ti-btn-primary  ti-btn-wave">Place Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                    <div class="box">
                                        <img src="{{asset('build/assets/images/nft-images/5.png')}}" class="card-img-top" alt="...">
                                        <div class="flex items-center justify-between nft-like-section w-full px-3">
                                            <div class="flex-grow">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon bg-success text-white !rounded-full ti-btn-wave">
                                                    <i class="ri-heart-fill"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <span class="badge nft-like-badge text-white"><i
                                                        class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.45k</span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex items-center mb-3">
                                                <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                <div>
                                                    <p class="mb-0 font-semibold">Caros NFT</p>
                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">@caros002</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white nft-auction-time ">
                                                04hrs : 24m : 38s
                                            </p>

                                            <p class="text-[0.9375rem] font-semibold mb-2">Space Fluid - NFT</p>
                                            <div class="flex flex-wrap itesm-center justify-between mb-4">
                                                <div class="font-semibold">
                                                    Highest Bid -
                                                </div>
                                                <div class="flex flex-wrap items-center leading-none">
                                                    <span class="avatar avatar-xs me-1">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}"
                                                            alt="">
                                                    </span>0.13ETH
                                                </div>
                                            </div>
                                            <div class="grid">
                                                <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12">
                                    <div class="box">
                                        <img src="{{asset('build/assets/images/nft-images/4.png')}}" class="card-img-top" alt="...">
                                        <div class="flex items-center justify-between nft-like-section w-full px-3">
                                            <div class="flex-grow">
                                                <button aria-label="button" type="button"
                                                    class="ti-btn ti-btn-sm ti-btn-icon bg-success text-white !rounded-full ti-btn-wave">
                                                    <i class="ri-heart-fill"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <span class="badge nft-like-badge text-white"><i
                                                        class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.57k</span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex items-center mb-4">
                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                <div>
                                                    <p class="mb-0 font-semibold">Daron NFT</p>
                                                    <p class="text-[0.75rem] text-[#8c9097] mb-0">@daron789</p>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-white nft-auction-time">
                                                04hrs : 24m : 38s
                                            </p>

                                            <p class="text-[0.9375rem] font-semibold mb-2">Fluid Abstract - NFT</p>
                                            <div class="flex flex-wrap itesm-center justify-between mb-3">
                                                <div class="font-semibold">
                                                    Highest Bid -
                                                </div>
                                                <div class="flex flex-wrap items-center leading-none">
                                                    <span class="avatar avatar-xs me-1">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}"
                                                            alt="">
                                                    </span>0.75ETH
                                                </div>
                                            </div>
                                            <div class="grid">
                                                <button type="button" class="ti-btn ti-btn-primary ti-btn-wave">Place Bid</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Creators
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
                                <div class="box-body !p-0">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-start">Name</th>
                                                    <th scope="row" class="text-start">Items Sold</th>
                                                    <th scope="row" class="text-start">Total Value</th>
                                                    <th scope="row" class="text-start">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Amanda Nanes<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">amandananes@</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">18</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$1,982</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] bg-primary text-white ti-btn-wave">Follow</button>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Charles Achilles<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">@charlesachilles</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">126</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$16,982</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] btn-wave ti-btn-primary">Unfollow</button>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Julia Camo<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">@juliacamo</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">42</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$3,432</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 !px-2 bg-primary !text-[0.75rem] text-white ti-btn-wave">Follow</button>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Json Taylor<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">@jsontaylor</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">63</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$9,236</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 1px-2 bg-primary !text-[0.75rem] text-white ti-btn-wave">Follow</button>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Elisha Sean<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">elishasean</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">59</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$7,783</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 !px-2 bg-primary !text-[0.75rem] text-white ti-btn-wave">Follow</button>
                                                    </td>
                                                </tr>
                                                <tr class="!border-b-0 !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-md avatar-rounded me-2">
                                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="items-center">
                                                                <p class="mb-0 font-semibold">Joseph Smith<i
                                                                        class="bi bi-patch-check-fill text-success ms-2"></i>
                                                                </p>
                                                                <span
                                                                    class="text-[0.75rem] text-[#8c9097]">@josephsmith</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Total Sold</span>
                                                            <p class="mb-0 font-semibold">137</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="items-center">
                                                            <span class="text-[0.75rem] text-[#8c9097]">Sale Value</span>
                                                            <p class="mb-0 font-semibold">$13,562</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="ti-btn !py-1 !px-2 !text-[0.75rem] btn-wave ti-btn-primary">Unfollow</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-3 xl:col-span-12 lg:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Collectors
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a href="javascript:void(0);" class="px-2 font-normal text-[0.75rem] text-[#8c9097]"
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
                                <div class="box-body !p-0 max-h-[28.375rem]" id="top-collector">
                                    <div class="table-responsive">
                                        <table class="table table-hover whitespace-nowrap min-w-full">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Alicia Smith</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate !w-[3.125rem] nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[75%]"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">75%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$9,223.46</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">0.214ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Alex Carey</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-3/5" aria-valuenow="60"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">60%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$17,239.09</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">1.890ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Emiley Jack</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[85%]" aria-valuenow="85"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">35%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$5,902.83</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">1.903ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Jessica</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[70%]" aria-valuenow="70"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">70%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$3,993.09</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">0.689ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Json Taylor</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[90%]" aria-valuenow="90"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">90%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$12,124.34</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">2.577ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="border !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Kiara May</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[62%]" aria-valuenow="62"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">62%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$2,534.56</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">0.737ETH</span>
                                                    </td>
                                                </tr>
                                                <tr class="!border-b-0 !border-x-0 border-defaultborder">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar avatar-md p-2 avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="font-semibold">Agire Khan</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="progress progress-xs progress-animate nft-collector-progress">
                                                            <div class="progress-bar bg-primary-gradient w-[85%]" aria-valuenow="85"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-[#8c9097] text-[0.75rem]">85%</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 font-semibold">$15,236.00</p>
                                                        <span class="text-[0.6875rem] font-normal text-success">6.345ETH</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="xxl:col-span-6 xl:col-span-8 lg:col-span-7 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between flex-wrap">
                                    <div class="box-title">
                                        NFTs Statistics
                                    </div>
                                    <div class="inline-flex rounded-md shadow-sm" role="group" aria-label="Basic example">
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary-full !text-white">1D</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1W</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">1M</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">3M</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary">6M</button>
                                        <button type="button"
                                            class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary !rounded-s-none">1Y</button>
                                    </div>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="flex flex-wrap p-3 border-b border-dashed">
                                        <div class="me-3">
                                            <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="">
                                            </span>
                                        </div>
                                        <div class="sm:flex flex-wrap justify-evenly flex-grow">
                                            <div class="sm:m-0 m-2">
                                                <span>Symbol</span>
                                                <p class="font-semibold mb-0">ETH</p>
                                            </div>
                                            <div class="sm:m-0 m-2">
                                                <span>Price Benchmark</span>
                                                <p class="font-semibold mb-0">-0.39%</p>
                                            </div>
                                            <div class="sm:m-0 m-2">
                                                <span>Price (USD)</span>
                                                <p class="text-success font-semibold mb-0">$1,212.67</p>
                                            </div>
                                            <div class="sm:m-0 m-2">
                                                <span>Change (24H)</span>
                                                <p class="text-danger font-semibold mb-0">-0.14%</p>
                                            </div>
                                            <div class="sm:m-0 m-2">
                                                <span>Market Cap</span>
                                                <p class="font-semibold mb-0">$148.20B</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nft-statistics" class="p-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-4 lg:col-span-5 md:col-span-12 sm:col-span-12 col-span-12">
                            <div class="mb-4 flex items-center justify-between">
                                <h6 class="font-semibold mb-0 text-[1rem] text-defaulttextcolor">Featured Collections :</h6>
                                <div>
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] ti-btn-wave waves-effect waves-light">View All</button>
                                </div>
                            </div>
                            <div class="swiper pagination-dynamic text-start" id="nft-collections-slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="grid grid-cols-12 gap-2">
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/6.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/7.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/8.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/9.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <div class="text-[#8c9097] text-[0.75rem] flex items-center">
                                                            Collection Rank :
                                                            <span
                                                                class="font-semibold text-success text-[0.9375rem] mb-0 ms-1">#1</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold">1.0979ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center">
                                                    <div class="flex items-center flex-grow">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="badge !rounded-full !text-white bg-primary avatar-badge"><i
                                                                        class="ri-check-line align-middle"></i></a>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold"><a
                                                                    href="javascript:void(0);">Simon Cowell</a></p>
                                                            <p class="text-[#8c9097] text-[0.75rem] mb-0">@simon</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor hover:bg-primary hover:text-white !text-[0.8rem] !py-1 !px-2 rounded-sm bg-primary/10 border-light shadow-none !font-medium">
                                                            <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="grid grid-cols-12 gap-2">
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/11.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/12.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/13.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <img src="{{asset('build/assets/images/nft-images/14.png')}}" alt=""
                                                            class="nft-featuredcollect-image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center justify-between">
                                                    <div>
                                                        <div class="text-[#8c9097] text-[0.75rem] flex items-center">Collection
                                                            Rank :
                                                            <span
                                                                class="font-semibold text-success text-[0.9375rem] mb-0 ms-1">#2</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}"
                                                                    alt="">
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold">1.0466ETH</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <div class="flex items-center">
                                                    <div class="flex items-center flex-grow">
                                                        <div class="me-2 leading-none">
                                                            <span class="avatar avatar-md avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                <a aria-label="anchor" href="javascript:void(0);"
                                                                    class="badge !rounded-full !text-white bg-primary avatar-badge"><i
                                                                        class="ri-check-line align-middle"></i></a>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 font-semibold"><a href="javascript:void(0);">Melissa
                                                                    Smith</a></p>
                                                            <p class="text-[#8c9097] text-[0.75rem] mb-0">@melissa</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor hover:bg-primary hover:text-white !text-[0.8rem] !py-1 !px-2 rounded-sm bg-primary/10 border-light shadow-none !font-medium">
                                                            <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 gap-2">
                                                <div class="col-span-6">
                                                    <img src="{{asset('build/assets/images/nft-images/10.png')}}" alt=""
                                                        class="nft-featuredcollect-image">
                                                </div>
                                                <div class="col-span-6">
                                                    <img src="{{asset('build/assets/images/nft-images/15.png')}}" alt=""
                                                        class="nft-featuredcollect-image">
                                                </div>
                                                <div class="col-span-6">
                                                    <img src="{{asset('build/assets/images/nft-images/17.png')}}" alt=""
                                                        class="nft-featuredcollect-image">
                                                </div>
                                                <div class="col-span-6">
                                                    <img src="{{asset('build/assets/images/nft-images/16.png')}}" alt=""
                                                        class="nft-featuredcollect-image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <div class="text-[#8c9097] text-[0.75rem] flex items-center">Collection
                                                        Rank :
                                                        <span
                                                            class="font-semibold text-success text-[0.9375rem] mb-0 ms-1">#3</span>
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-rounded bg-light p-1 avatar-xs">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold">1.0355ETH</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="flex items-center">
                                                <div class="flex items-center flex-grow">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                            <a aria-label="anchor" href="javascript:void(0);"
                                                                class="badge !rounded-full !text-white bg-primary avatar-badge"><i
                                                                    class="ri-check-line align-middle"></i></a>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold"><a href="javascript:void(0);">Json
                                                                Talor</a></p>
                                                        <p class="text-[#8c9097] text-[0.75rem] mb-0">@taylor</p>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] text-defaulttextcolor hover:bg-primary hover:text-white !text-[0.8rem] !py-1 !px-2 rounded-sm bg-primary/10 border-light shadow-none !font-medium">
                                                        <i class="fe fe-more-vertical text-[0.8rem]"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                            </div>
                    </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Trending NFTs
                                    </div>
                                    <div class="flex">
                                        <div class="me-3">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a href="javascript:void(0);"
                                            class="ti-btn ti-btn-primary !bg-primary !text-white !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                            aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </a>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem]  !text-[0.8125rem] !font-medium block"
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
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered whitespace-nowrap min-w-full">
                                            <thead>
                                                <tr>
                                                    <th scope="row" class="text-start">Collection</th>
                                                    <th scope="row" class="text-start">Rank</th>
                                                    <th scope="row" class="text-start">Volume</th>
                                                    <th scope="row" class="text-start">24h %</th>
                                                    <th scope="row" class="text-start">7d %</th>
                                                    <th scope="row" class="text-start">Floor Price</th>
                                                    <th scope="row" class="text-start">Items</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/nft-images/1.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Starter Sense NFT</a></p>
                                                                <a href="javascript:void(0);" class="text-[0.75rem] text-[#8c9097] font-normal" title="creator_name">@irukasensei229</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="font-semibold text-primary">#1</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.56ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>15.2%</span>
                                                    </td>
                                                    <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>3.1%</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2.31ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>12.4K</td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/nft-images/2.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">Lorem Kekkei</a></p>
                                                                <a href="javascript:void(0);" class="text-[0.75rem] text-[#8c9097] font-normal" title="creator_name">@clansound209</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="font-semibold text-primary">#2</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">1.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>3.7%</span>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>0.5%</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">0.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>10.1K</td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/nft-images/10.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">NFT Uchiha</a></p>
                                                                <a href="javascript:void(0);" class="text-[0.75rem] text-[#8c9097] font-normal" title="creator_name">@sasukeuhi990</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="font-semibold text-primary">#3</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">2,092ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>23.1%</span></td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>9.12%</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 2,000ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>52.7K</td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/nft-images/12.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">
                                                                    Lorem Ipsum Uch</a></p>
                                                                <a href="javascript:void(0);" class="text-[0.75rem] text-[#8c9097] font-normal" title="creator_name">@kakashi092</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="font-semibold text-primary">#4</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name"> 36.25ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>5.2%</span></td>
                                                    <td>
                                                        <span class="text-danger"><i class="ti ti-trending-down me-1 align-middle inline-block"></i>4.1%</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">30.12ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>31.4K</td>
                                                </tr>
                                                <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/nft-images/15.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">
                                                                    Ivan Shomer Har</a></p>
                                                                <a href="javascript:void(0);" class="text-[0.75rem] text-[#8c9097] font-normal" title="creator_name">@narutouze025</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="font-semibold text-primary">#5</span></td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">12.52ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>7.0%</span></td>
                                                    <td>
                                                        <span class="text-success"><i class="ti ti-trending-up me-1 align-middle inline-block"></i>12.5%</span>
                                                    </td>
                                                    <td>
                                                        <div class="flex items-center">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="avatar avatar-xs avatar-rounded me-2 leading-none">
                                                            <div>
                                                                <p class="mb-0 font-semibold"><a href="javascript:void(0);" title="nft_name">12.50ETH</a></p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>121.5K</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="sm:flex items-center">
                                    <div class="text-defaulttextcolor">
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
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Personal Listings
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a href="javascript:void(0);" class="px-2 font-normal text-[0.75rem] text-[#8c9097]"
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
                                <div class="box-body !p-0">
                                    <ul class="list-group list-group-flush !border-0">
                                        <li class="list-group-item !border-t-0">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/10.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Kakasha Si</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@sensei011<span class="ms-2 text-success text-[0.6875rem]"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.45%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.75ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/1.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Oorichimaru lo</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@ooro001<span class="ms-2 text-success text-[0.6875rem]"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.24%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.15ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/12.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">SakuraYM</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@sakura903<span class="ms-2 text-danger text-[0.6875rem]"><i class="ri-arrow-down-s-line align-middle me-1"></i>0.07%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.58ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/4.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Sasuke Uchiha</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@sasuke777<span class="ms-2 text-success text-[0.6875rem]"><i class="ri-arrow-up-s-line align-middle me-1"></i>1.34%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.19ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/15.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Naruto Uzumaki</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@naruto111<span class="ms-2 text-success text-[0.6875rem]"><i class="ri-arrow-up-s-line align-middle me-1"></i>1.70%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>2.45ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/16.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Kazimo Aruke</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@kazimo900<span class="ms-2 text-danger text-[0.6875rem]"><i class="ri-arrow-down-s-line align-middle me-1"></i>1.21%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.95ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="javascript:void(0);">
                                                <div class="flex flex-wrap items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="{{asset('build/assets/images/nft-images/6.png')}}" alt="" class="avatar avatar-md rounded-md me-2 leading-none !mb-0">
                                                        <div>
                                                            <p class="font-semibold mb-0">Nagiro Ohinavo</p>
                                                            <span class="text-[#8c9097] text-[0.75rem]">@nagiro096<span class="ms-2 text-success text-[0.6875rem]"><i class="ri-arrow-up-s-line align-middle me-1"></i>0.99%</span></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="text-[0.625rem] text-[#8c9097] ps-4">PRICE</span>
                                                        <p class="mb-0 font-semibold flex items-center"><span class="avatar avatar-sm p-1 !mb-0"><img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt=""></span>1.12ETH</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- NFT-Dashboard JS -->
        @vite('resources/assets/js/nft-dashboard.js')


        @vite('resources/assets/js/nft-simplebar.js') 
        

@endsection