@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Live Auction</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    NFT
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Live Auction
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-9 col-span-12">
                                <div class="flex items-center justify-between flex-wrap gap-2 mb-4">
                                    <div class="nft-tag nft-tag-primary active">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-world text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">All</span>
                                    </div>
                                    <div class="nft-tag nft-tag-secondary">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-flame text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">New Trends</span>
                                    </div>
                                    <div class="nft-tag nft-tag-info">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-palette text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">Art Work</span>
                                    </div>
                                    <div class="nft-tag nft-tag-success">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-device-gamepad-2 text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">Games</span>
                                    </div>
                                    <div class="nft-tag nft-tag-danger">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-tie text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">Fashion</span>
                                    </div>
                                    <div class="nft-tag nft-tag-warning">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-music text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">Music</span>
                                    </div>
                                    <div class="nft-tag nft-tag-dark">
                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                        <span class="nft-tag-icon"><i class="ti ti-gift text-[1.25rem]"></i></span>
                                        <span class="nft-tag-text">Others</span>
                                    </div>
                                </div>
                                <h6 class="font-semibold !text-defaulttextcolor">Live Auction:</h6>
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body !p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/4.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">BitMaster</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@bit_master<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">1.2K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Chromatic Chaos</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            1.19ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/30.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">SpaceY NFT</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@sp1116 <i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">1.45K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">NFT Lorem Shapes</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            1.16ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">NFTNinja</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@nftninja<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">0.37K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Chromatic Chaos</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            1.64ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/2.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">CryptoCraft</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@cryptocraft<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">0.62K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Virtual Veracity</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            2.57ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/33.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">DigitalDreamer</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@d_dreamer<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">0.5K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Crypto Cosmos</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            0.45ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/3.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">PixelProphet</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@pixelprophet<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">1.2K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Electric Euphoria</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            0.45ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/32.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">PixelMaestro</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@pixelmaestro<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">1.9K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Meta-Morphosis</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            2.07ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xxxl:col-span-3 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12">
                                        <div class="box custom-box">
                                            <div class="box-body p-4">
                                                <div class="mb-4 overflow-hidden relative">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <img src="{{asset('build/assets/images/nft-images/5.png')}}" alt="img" class="nft-img img-fluid">
                                                    <a href="javascript:void(0);" class="nft-btn"  aria-label="Like"><i class="ti ti-heart"></i></a>
                                                    <span class="nft-timer-container">
                                                        <i class="ti ti-bolt text-[.875rem]"></i>
                                                        <span class="nft-timer ms-1 text-[0.6875rem]">04 Days 03 : 44 : 04</span>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-start mb-4 flex-wrap">
                                                    <div class="inline-flex items-start relative">
                                                        <a aria-label="anchor" href="{{url('profile')}}" class="stretched-link"></a>
                                                        <div class="me-2">
                                                            <span class="avatar avatar-rounded">
                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow">
                                                            <span class="mb-0 block text-[.875rem] font-semibold">ArtTechie</span>
                                                            <span class="text-[.8125rem] text-[#8c9097]">@arttechie<i class="bi bi-patch-check-fill text-success ms-1 text-[.9375rem]"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-[.8125rem] text-[#8c9097]">1.3K Likes</span>
                                                </div>
                                                <div class="text-[.9375rem] font-semibold mb-2"><a href="javascript:void(0);">Digital Dreamscape</a></div>
                                                <div class="flex items-end flex-wrap gap-2">
                                                    <div class="flex-grow">
                                                        <p class="text-[.875rem] mb-1 text-[#8c9097]">Highest Bid</p>
                                                        <div class="text-[1rem] mb-0 flex items-center font-semibold">
                                                            <span class="avatar avatar-xs me-1"><img src="{{asset('build/assets/images/nft-images/34.png')}}" alt=""></span>
                                                            0.24ETH
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-primary btn-wave">Place Bid</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination justify-end mb-4">
                                        <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="xxl:col-span-3 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box custom-box overflow-hidden">
                                            <div class="box-header justify-between">
                                                <div class="box-title">
                                                    Featured Creators
                                                </div>
                                                <div>
                                                    <button type="button" class="ti-btn ti-btn-primary !py-1 !px-2 !text-[0.75rem] btn-wave">View All</button>
                                                </div>
                                            </div>
                                            <div class="box-body !p-0">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item !border-t-0 !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/2.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Joseph Smith<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">@josephsmith</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+18.93ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">22 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/18.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Elisha Sean<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">@elishasean</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+12.45ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">17 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/8.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Json Taylor<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">@jsontaylor</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+11.25ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">15 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/11.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Julia Camo<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">@juliacamo</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+10.48ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">14 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/22.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Charles Achilles<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">@charlesachilles</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+9.58ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">12 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-b-0 !border-e-0 !border-s-0">
                                                        <div class="flex items-center justify-between flex-wrap gap-2">
                                                            <div class="flex items-center">
                                                                <div class="leading-none">
                                                                    <span class="avatar avatar-md avatar-rounded me-2">
                                                                        <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="items-center">
                                                                    <p class="mb-0 font-semibold">Amanda Nanes<i class="bi bi-patch-check-fill text-success ms-2"></i></p>
                                                                    <span class="text-[.75rem] text-[#8c9097]">amandananes@</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <span class="block font-semibold text-success">+7.67ETH</span>
                                                                <span class="block text-[#8c9097] text-[0.6875rem]">11 NFT's</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box custom-box overflow-hidden">
                                            <div class="box-header justify-between">
                                                <div class="box-title">
                                                    Recent Activity
                                                </div>
                                                <div class="hs-dropdown ti-dropdown">
                                                    <a href="javascript:void(0);" class="p-2 text-[.75rem] text-[#8c9097]" aria-expanded="false">
                                                        Today<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                    </a>
                                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Today</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Last Week</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="box-body !p-0">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item !border-t-0 !border-e-0 !border-s-0">
                                                        <div class="flex gap-4 items-center flex-wrap">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xl">
                                                                    <img src="{{asset('build/assets/images/nft-images/31.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1"><a href="javascript:void(0);" class="font-semibold">DreamSpace</a><span class="text-[.75rem] text-[#8c9097] ms-2">24 mins ago</span></div>
                                                                <div class="text-[.8125rem]">Purchsed from you by <a class="underline" href="javascript:void(0);">Mitchell</a> for <span class="text-success font-semibold text-[.75rem]">0.57ETH</span>.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex gap-4 items-center flex-wrap">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xl">
                                                                    <img src="{{asset('build/assets/images/nft-images/25.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1"><span class="font-semibold">DreamSpace</span><span class="text-[.75rem] text-[#8c9097] ms-2">16 mins ago</span></div>
                                                                <div class="text-[.8125rem]">You started following mark zensberg.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-e-0 !border-s-0">
                                                        <div class="flex gap-4 items-center">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xl">
                                                                    <img src="{{asset('build/assets/images/nft-images/21.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1"><span class="font-semibold">Neo Nebulae</span><span class="text-[.75rem] text-[#8c9097] ms-2">5 mins ago</span></div>
                                                                <div class="text-[.8125rem]">You showed interest in purchasing <a href="javascript:void(0);" class="text-[.75rem] text-warning font-semibold">NeoNebulae</a>.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item !border-b-0 !border-e-0 !border-s-0">
                                                        <div class="flex gap-4 items-center ">
                                                            <div class="leading-none">
                                                                <span class="avatar avatar-xl">
                                                                    <img src="{{asset('build/assets/images/nft-images/26.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <div class="mb-1"><span class="font-semibold">Neo Nebulae</span><span class="text-[.75rem] text-[#8c9097] ms-2">16 mins ago</span></div>
                                                                <div class="text-[.8125rem]">Purchased from <a href="javascript:void(0);" class="underline">Cyber Canvas</a> for <span class="font-semibold text-[.75rem] text-pink">1.345ETH</span>.</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

@endsection

@section('scripts')


@endsection