@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Wallet Integration</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    NFT
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Wallet Integration
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">
                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-3 col-span-12">
                                    <div class="box custom-box overflow-hidden">
                                        <div class="box-header !border-b-0">
                                            <div class="box-title">
                                                Choose Network
                                            </div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <ul class="list-group nft-list">
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/34.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">Etherium</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/35.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">Binance</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/36.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">Solana</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/39.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">Tezos</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/37.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">Avalanche</div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                    <div class="flex items-center gap-2">
                                                        <div>
                                                            <span class="avatar avatar-rounded avatar-sm bg-light p-1">
                                                                <img src="{{asset('build/assets/images/nft-images/38.png')}}" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="text-[.875rem] font-semibold my-auto">boxano</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-9 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">
                                                Choose Wallet
                                            </div>
                                            <div>
                                                <button type="button" class="ti-btn ti-btn-secondary-full btn-wave">Add New Wallet</button>
                                            </div>
                                        </div>
                                        <div class="box-body !p-6">
                                            <div class="grid grid-cols-12 !mx-auto sm:gap-6 gap-2">
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-4 nft-wallet active">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="leadining-none">
                                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                                    <img src="{{asset('build/assets/images/nft-images/42.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">MetaMask</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-4 text-center hover:bg-light border rounded-md relative">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded p-2 bg-light">
                                                                    <img src="{{asset('build/assets/images/nft-images/41.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">Enjin Wallet</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-4 text-center hover:bg-light border rounded-md relative">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/nft-images/43.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">Trust Wallet</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-3 !text-center hover:bg-light border rounded-md relative">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded bg-light p-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/40.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">Coinbase Wallet</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-4 !text-center hover:bg-light border rounded-md relative">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded bg-light p-2">
                                                                    <img src="{{asset('build/assets/images/nft-images/44.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">Lido</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-3 xl:col-span-4 md:col-span-6 col-span-12">
                                                    <div class="p-4 text-center hover:bg-light border rounded-md relative">
                                                        <a aria-label="anchor" href="javascript:void(0);" class="stretched-link"></a>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded bg-light">
                                                                    <img src="{{asset('build/assets/images/nft-images/45.png')}}" alt="">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <h6 class="font-semibold mb-0">Huobi Wallet</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div>
                                                <button type="button" class="ti-btn ti-btn-success-full ltr:float-right rtl:float-left btn-wave">Connect</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->
                        </div>

@endsection

@section('scripts')


@endsection