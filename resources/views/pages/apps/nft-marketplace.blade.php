@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Market Place</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    NFT
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Market Place
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 sm:gap-x-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-body">
                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                            <nav class="flex items-center justify-between flex-wrap gap-2" aria-label="Tabs">
                                                <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2  text-sm font-medium text-center rounded-sm hover:text-primary active" id="nft-all-item" data-hs-tab="#nft-all" aria-controls="nft-all">
                                                All
                                                </a>
                                                <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-art-item" data-hs-tab="#nft-art" aria-controls="nft-art">
                                                    Art
                                                </a>
                                                <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-gaming-item" data-hs-tab="#nft-gaming" aria-controls="nft-gaming">
                                                    Gaming
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-domain-item" data-hs-tab="#nft-domain" aria-controls="nft-domain">
                                                    Domain
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-music-item" data-hs-tab="#nft-music" aria-controls="nft-music">
                                                    Music
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-realestate-item" data-hs-tab="#nft-realestate" aria-controls="nft-realestate">
                                                    Real Estate
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-sports-item" data-hs-tab="#nft-sports" aria-controls="nft-sports">
                                                    Sports
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-fashion-item" data-hs-tab="#nft-fashion" aria-controls="nft-fashion">
                                                    Fashion
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-avatars-item" data-hs-tab="#nft-avatars" aria-controls="nft-avatars">
                                                    Avatars
                                                    </a>
                                                    <a class="hs-tab-active:bg-primary/10 hs-tab-active:text-primary  py-[0.4rem] px-2 text-sm font-medium text-center  rounded-sm hover:text-primary " id="nft-memes-item" data-hs-tab="#nft-memes" aria-controls="nft-memes">
                                                    Memes
                                                    </a>
                                            </nav>
                                            <div class="btn-list sm:mt-0 mt-3">
                                                <button type="button" aria-label="button" class="!m-0 ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-secondary-full btn-wave me-2">Filters</button>
                                                <div class="hs-dropdown ti-dropdown">
                                                    <a href="javascript:void(0);" class="!m-0 ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary-full" aria-expanded="false">
                                                        Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                    </a>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">New Collection</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">High - Low</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Low - High</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

                        <!-- Start:: row-2 -->
                        <div class="grid grid-cols-12 sm:gap-6">
                            <div class="xl:col-span-12 col-span-12">
                                <div class="tab-content">
                                    <div class="tab-pane show active !p-0   !border-0" id="nft-all" aria-controls="nft-all-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-x-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/19.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.19k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">ArtTechie</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@arttechie</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Neo-Nebulae</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.32ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/20.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.05k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">BitMaster</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@bit_master</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Chromatic Chaos</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.19ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/21.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.19k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">CyberCanvas</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@cybercanvas</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Surreal Synthesis</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.11ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/22.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.65k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">DigitalDreamer</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@d_dreamer</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Virtual Visions</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.10ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/23.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.52k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">PixelProphet</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@pixelprophet</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Electric Euphoria</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.45ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/24.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.55k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">TechnoTalent</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@techno_t</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Crypto Cosmos</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.38ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/25.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.75k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">PixelMaestro</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@pixelmaestro</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Pixel Prism</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.23ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/26.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.83k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">BitBard</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@bitbard</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Meta-Morphosis</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.38ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/27.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.16k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">CryptoCraft</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@cryptocraft</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Virtual Veracity</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.15ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/28.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.38k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">ArtWizard</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@artwizard</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Quantum Quirk</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.33ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/29.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.32k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">DigitalMuse</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@digitalmuse</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Cybernetic Collage</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.59ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="ti-pagination  mb-4 justify-end">
                                                <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-art" aria-controls="nft-all-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/21.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.19k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">CyberCanvas</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@cybercanvas</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Surreal Synthesis</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.11ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/25.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>1.75k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">PixelMaestro</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@pixelmaestro</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Pixel Prism</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.23ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/26.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.83k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">BitBard</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@bitbard</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Meta-Morphosis</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.38ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-gaming" aria-controls="nft-gaming-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/20.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>2.05k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">BitMaster</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@bit_master</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Chromatic Chaos</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.19ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-domain" aria-controls="nft-domain-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-music" aria-controls="nft-music-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-realestate" aria-controls="nft-realestate-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-sports" aria-controls="nft-sports-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-fashion" aria-controls="nft-fashion-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-avatars" aria-controls="nft-avatars-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane !p-0 hidden !border-0" id="nft-memes" aria-controls="nft-memes-item" role="tabpanel">
                                        <div class="grid grid-cols-12 sm:gap-6">
                                            <div class="xxl:col-span-2 xl:col-span-3 lg:col-span-4 md:col-span-4 sm:col-span-6 col-span-12">
                                                <div class="box custom-box">
                                                    <img src="{{asset('build/assets/images/nft-images/18.png')}}" class="!rounded-t-md" alt="...">
                                                    <div class="flex items-center justify-between nft-like-section w-full px-4">
                                                        <div class="flex-grow">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-success-full !rounded-full btn-wave waves-effect waves-light">
                                                                <i class="ri-heart-fill"></i>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <span class="badge nft-like-badge text-white"><i class="ri-heart-fill me-1 text-danger align-middle inline-block"></i>0.47k</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="flex items-center mb-4">
                                                            <div class="me-2 leading-none">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <p class="mb-0 font-semibold">NFTNinja</p>
                                                                <p class="text-[0.75rem] text-[#8c9097] mb-0">@nftninja</p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0 text-white nft-auction-time">
                                                            04hrs : 24m : 38s
                                                        </p>
                                                        <p class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></p>
                                                        <div class="flex flex-wrap align-itesm-center justify-between mb-4">
                                                            <div class="font-semibold">
                                                                Highest Bid -
                                                            </div>
                                                            <div class="flex flex-wrap items-center leading-none">
                                                                <span class="avatar avatar-xs me-1">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="">
                                                                </span>0.24ETH
                                                            </div>
                                                        </div>
                                                        <div class="grid">
                                                            <button type="button" class="ti-btn ti-btn-primary btn-wave waves-effect waves-light">Place Bid</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-2 -->

@endsection

@section('scripts')


@endsection