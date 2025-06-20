@extends('layouts.master')

@section('styles')
 
        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Crypto</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Dashboards
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Crypto
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-9 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-5">
                                                <div class="flex items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="mb-0 font-semibold">
                                                        Bitcoin - BTC
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div id="btc-chart"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-end">
                                                <div>
                                                    <p class="mb-1">BTC / USD</p>
                                                    <p class="text-[1.25rem] mb-0 font-semibold leading-none !text-primary">
                                                        $35,876.29</p>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="mb-0">$0.04</p>
                                                    <p class="mb-0 text-[#8c9097]"><span
                                                            class="text-[#8c9097]">Vol:</span>(+2.33%)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-5">
                                                <div class="flex items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="mb-0 font-semibold">
                                                        Etherium - ETH
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div id="eth-chart"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-end">
                                                <div>
                                                    <p class="mb-1">ETH / USD</p>
                                                    <p class="text-[1.25rem] mb-0 font-semibold leading-none !text-primary">
                                                        $31,244.12</p>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="mb-0">$2.57</p>
                                                    <p class="mb-0 text-[#8c9097]"><span
                                                            class="text-[#8c9097]">Vol:</span>(+13.45%)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex items-center mb-5">
                                                <div class="flex items-center">
                                                    <div class="me-2">
                                                        <span class="avatar avatar-md avatar-rounded bg-light p-2">
                                                            <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="mb-0 fw-semibold">
                                                        Dash - DASH
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div id="dash-chart"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-end">
                                                <div>
                                                    <p class="mb-1">DASH / USD</p>
                                                    <p class="text-[1.25rem] mb-0 font-semibold leading-none !text-primary">
                                                        $26,345.000</p>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="mb-0">$12.32</p>
                                                    <p class="mb-0 text-[#8c9097]"><span
                                                            class="text-[#8c9097]">Vol:</span>(+112.95%)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-8 xl:col-span-7 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between flex-wrap">
                                            <div class="box-title">
                                                Crypto Statistics
                                            </div>
                                            <div class="inline-flex rounded-md shadow-sm" role="group"
                                                aria-label="Basic example">
                                                <button type="button"
                                                    class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary-full text-white">1D</button>
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
                                            <div class="flex flex-wrap p-4 border-b border-dashed">
                                                <div class="me-3">
                                                    <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                        <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}"
                                                            alt="">
                                                    </span>
                                                </div>
                                                <div class="flex flex-wrap sm:justify-evenly flex-grow">
                                                    <div class="sm:m-0 m-2">
                                                        <span>Symbol</span>
                                                        <p class="font-semibold mb-0">BTC</p>
                                                    </div>
                                                    <div class="sm:m-0 m-2">
                                                        <span>Price Benchmark</span>
                                                        <p class="font-semibold mb-0">128.00%</p>
                                                    </div>
                                                    <div class="sm:m-0 m-2">
                                                        <span>Price (USD)</span>
                                                        <p class="text-success font-semibold mb-0">$4,253.49</p>
                                                    </div>
                                                    <div class="sm:m-0 m-2">
                                                        <span>Change (24H)</span>
                                                        <p class="text-danger font-semibold mb-0">-0.24%</p>
                                                    </div>
                                                    <div class="sm:m-0 m-2">
                                                        <span>Market Cap</span>
                                                        <p class="font-semibold mb-0">$179.12B</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="crypto" class="p-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="xxl:col-span-4 xl:col-span-5 col-span-12">
                                    <div class="box">
                                        <div class="box-header justify-between">
                                            <div class="box-title">Recent Transactions</div>
                                            <div class="hs-dropdown ti-dropdown">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium"
                                                    aria-expanded="false"><i
                                                        class="fe fe-more-vertical text-[0.8rem]"></i>
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
                                        <div class="box-body">
                                            <ul class="list-none mb-0">
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bitcoin.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Bitcoin</p>
                                                                    <p class="mb-0 text-[0.6875rem] text-success font-semibold">
                                                                        Sell</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    +$19,123.02
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    BTC 0.0823.45
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Ethereum.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Etherium</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-primary font-semibold">
                                                                        Buy</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    -$1,430.92
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    ETH 10,783.23
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex tems-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Dash.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Dash</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-success font-semibold">
                                                                        Sell</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    +$5,236.53
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    DASH 12,456.98
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Bytecoin.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Bytecoin</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-primary font-semibold">
                                                                        Buy</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    -$1,810.93
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    BYTE 8,154.00
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Golem.svg')}}"  alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Golem</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-success font-semibold">
                                                                        Sell</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    +$5,046.34
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                                    GOLEM 9,384.73
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="mb-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Siacoin.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">SiaCoin</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-success font-semibold">
                                                                        Sell</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    +$2,625.50
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    SIA 3,151.09
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center justify-between">
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/square-color/Monero.svg')}}" alt="" class="w-[1.75rem] h-[1.75rem] me-2">
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Monero</p>
                                                                    <p
                                                                        class="mb-0  text-[0.6875rem] text-success font-semibold">
                                                                        Sell</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 font-semibold">
                                                                    +$1,256.24
                                                                </p>
                                                                <p class="mb-0 opacity-[0.7] text-[#8c9097]  text-[0.6875rem]">
                                                                    XMR 2,799.06
                                                                </p>
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
                        <div class="xxl:col-span-3 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div>
                                                <div class="mb-1">Wallet Value<span
                                                        class="text-[0.625rem] badge bg-success/10 text-success p-1 ms-2"><i
                                                            class="ri-arrow-up-s-line align-middle me-1"></i>12.2%</span></div>
                                                <div class="text-[1.25rem] font-semibold">$132,12933.000</div>
                                                <small class="text-[#8c9097] font-semibold">12 BTC</small>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="avatar avatar-xxl">
                                                    <img class="buy-sell-image" src="{{asset('build/assets/images/media/media-82.png')}}" alt="">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <nav class="tab-style-1 sm:flex bg-light p-[0.65rem] rounded-sm mb-4" aria-label="Tabs">
                                                <a class="hs-tab-active:bg-primary hs-tab-active:text-white text-defaulttextcolor py-[0.35rem] px-4 flex-grow  text-sm font-medium text-center rounded-md hover:text-primary active" id="buy-crypto" data-hs-tab="#buy-crypto2">
                                                Buy
                                                </a>
                                                <a class="hs-tab-active:bg-primary hs-tab-active:text-white text-defaulttextcolor py-[0.35rem] px-4 text-sm flex-grow font-medium text-center  rounded-md hover:text-primary " id="sell-crypto" data-hs-tab="#sell-crypto2">
                                                Sell
                                                </a>
                                            </nav>
                                            <div class="tab-content">
                                                <div class="tab-pane !border-0 show active !p-0" id="buy-crypto2" role="tabpanel">
                                                    <div class="input-group mb-4 flex !flex-nowrap">
                                                        <input type="text"
                                                            class="form-control form-control-sm crypto-buy-sell-input !rounded-s-md  !border-e-0"
                                                            aria-label="crypto buy select" placeholder="Select Currency">
                                                        <select class="form-control !rounded-e-md" data-trigger id="choices-single-default">
                                                            <option value="" class="dark:text-defaulttextcolor/70">BTC</option>
                                                            <option value="Choice 1">ETH</option>
                                                            <option value="Choice 2">XRP</option>
                                                            <option value="Choice 3">DASH</option>
                                                            <option value="Choice 4">NEO</option>
                                                            <option value="Choice 5">LTC</option>
                                                            <option value="Choice 6">BSD</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-4 flex !flex-nowrap">
                                                        <input type="text"
                                                            class="form-control form-control-sm crypto-buy-sell-input !rounded-s-md  !border-e-0"
                                                            aria-label="crypto buy select" placeholder="36,335.00">
                                                        <select class="form-control !rounded-e-md " data-trigger id="choices-single-default1">
                                                            <option value="">USD</option>
                                                            <option value="Choice 1">AED</option>
                                                            <option value="Choice 2">AUD</option>
                                                            <option value="Choice 3">ARS</option>
                                                            <option value="Choice 4">AZN</option>
                                                            <option value="Choice 5">BGN</option>
                                                            <option value="Choice 6">BRL</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <div class="text-[0.875rem] py-2"><span
                                                                class="font-semibold text-dark">Price:</span><span
                                                                class="text-[#8c9097] ms-2 text-[0.875rem] inline-block">6.003435</span><span
                                                                class="text-dark font-semibold ltr:float-right rtl:float-left">BTC</span></div>
                                                        <div class="text-[0.875rem] py-2"><span
                                                                class="font-semibold text-dark">Amount:</span><span
                                                                class="text-[#8c9097] ms-2 text-[0.875rem] inline-block ">2,34,4543.00</span><span
                                                                class="text-dark font-semibold ltr:float-right rtl:float-left">LTC</span></div>
                                                        <div class="font-semibold text-[0.875rem] py-3">Total: <span
                                                                class="text-[0.875rem] inline-block">22.00 BTC</span></div>
                                                        <div class="text-[0.75rem] text-success !mb-3">Additional Charges:
                                                            0.32%(0.0001231 BTC)</div>
                                                        <label class="font-semibold text-[0.75rem] !mt-2 !mb-2 ">SELECT PAYMENT
                                                            METHOD :</label>
                                                        <div class="sm:grid grid-cols-12 sm:gap-2 ">
                                                            <div class="sm:col-span-6 col-span-12 sm:me-2 mb-2 sm:mb-0">
                                                                <div class="p-2 border rounded-md">
                                                                    <div class="form-check !ps-0 !mb-0 !flex items-center">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault" id="flexRadioDefault1" >
                                                                        <label class="form-check-label text-[0.75rem]"
                                                                            for="flexRadioDefault1">
                                                                            Credit / Debit Cards
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-6 col-span-12">
                                                                <div class="p-2 border rounded-md">
                                                                    <div class="form-check !ps-0 !mb-0 !flex items-center">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                        <label class="form-check-label text-[0.75rem]"
                                                                            for="flexRadioDefault2">
                                                                            Paypal
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid  pt-3">
                                                        <button type="button"
                                                            class="ti-btn bg-primary text-white ti-btn-wave">BUY</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane !border-0 !p-0 hidden" id="sell-crypto2" role="tabpanel"
                                                    aria-labelledby="sell-crypto">
                                                    <div class="input-group mb-4 sm:flex block flex-nowrap">
                                                        <input type="text"
                                                            class="form-control form-control-sm crypto-buy-sell-input !rounded-s-md !border-e-0"
                                                            aria-label="crypto buy select" placeholder="Select Currency">
                                                        <select class="form-control !rounded-e-md" data-trigger id="choices-single-default2">
                                                            <option value="">BTC</option>
                                                            <option value="Choice 1">ETH</option>
                                                            <option value="Choice 2">XRP</option>
                                                            <option value="Choice 3">DASH</option>
                                                            <option value="Choice 4">NEO</option>
                                                            <option value="Choice 5">LTC</option>
                                                            <option value="Choice 6">BSD</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-4 sm:flex block flex-nowrap">
                                                        <input type="text"
                                                            class="form-control form-control-sm crypto-buy-sell-input !rounded-s-md !border-e-0"
                                                            aria-label="crypto buy select" placeholder="36,335.00">
                                                        <select class="form-control !rounded-e-md" data-trigger id="choices-single-default3">
                                                            <option value="">USD</option>
                                                            <option value="Choice 1">AED</option>
                                                            <option value="Choice 2">AUD</option>
                                                            <option value="Choice 3">ARS</option>
                                                            <option value="Choice 4">AZN</option>
                                                            <option value="Choice 5">BGN</option>
                                                            <option value="Choice 6">BRL</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <div class="text-[0.875rem] py-2"><span
                                                                class="font-semibold text-dark">Price:</span><span
                                                                class="text-[#8c9097] ms-2 text-[0.875rem]">6.003435</span><span
                                                                class="text-dark font-semibold ltr:float-right rtl:float-left">BTC</span></div>
                                                        <div class="text-[0.875rem] py-2"><span
                                                                class="font-semibold text-dark">Amount:</span><span
                                                                class="text-[#8c9097] ms-2 text-[0.875rem]">2,34,4543.00</span><span
                                                                class="text-dark font-semibold ltr:float-right rtl:float-left">LTC</span></div>
                                                        <div class="font-semibold text-[0.875rem] py-3">Total: <span
                                                                class="text-[0.875rem]">22.00 BTC</span></div>
                                                        <div class="text-[0.75rem] text-success !mb-3">Additional Charges:
                                                            0.32%(0.0001231 BTC)</div>
                                                        <label class="font-semibold text-[0.75rem] mt-2 mb-2">SELECT PAYMENT
                                                            METHOD :</label>
                                                            <div class="sm:grid grid-cols-12 sm:gap-2 ">
                                                                <div class="sm:col-span-6 col-span-12 sm:me-2 mb-2 sm:mb-0">
                                                                    <div class="p-2 border rounded-md">
                                                                        <div class="form-check !ps-0 !mb-0 !flex items-center">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="flexRadioDefault" id="flexRadioDefault11"
                                                                                checked>
                                                                            <label class="form-check-label text-[0.75rem]"
                                                                                for="flexRadioDefault11">
                                                                                Credit / Debit Cards
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sm:col-span-6 col-span-12">
                                                                    <div class="p-2 border rounded-md">
                                                                        <div class="form-check !ps-0 !mb-0 !flex items-center">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="flexRadioDefault" id="flexRadioDefault12">
                                                                            <label class="form-check-label text-[0.75rem]"
                                                                                for="flexRadioDefault12">
                                                                                Paypal
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="grid  pt-3">
                                                        <button type="button"
                                                            class="ti-btn bg-danger text-white ti-btn-wave">SELL</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xxl:col-span-5 col-span-12">
                            <div class="xxl:col-span-5 xl:col-span-5 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Recent Activity
                                        </div>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium" aria-expanded="false"><i
                                                    class="fe fe-more-vertical text-[0.8rem]"></i>
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
                                    <div class="box-body  !p-0">
                                        <div class="table-responsive">
                                            <table class="table box-table min-w-full table-vcenter whitespace-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">Date</th>
                                                        <th scope="col" class="text-start">Currency</th>
                                                        <th scope="col" class="text-start">From / To</th>
                                                        <th scope="col" class="text-start">Time &amp; Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="active-tab">
                                                    <tr class="border-t border-inherit border-solid ">
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-[#8c9097] mb-0 font-semibold">Dec</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">15</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}" alt="" class="leading-none avatar avatar-md avatar-rounded me-2 p-2 bg-light !my-auto">
                                                                <div class="items-center">
                                                                    <span class="text-[0.75rem] text-[#8c9097]">Currency</span>
                                                                    <p class="mb-0">Bitcoin - <span
                                                                            class="text-[#8c9097]">(0.0092312)</span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center text-center">
                                                                <div class="flex items-center font-semibold">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </span>
                                                                    <span class="ms-2">Emiley Jackson</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center">
                                                                <span class="text-[0.75rem] text-[#8c9097] mb-1">Delivered
                                                                    Time</span>
                                                                <p class="mb-0">04:24PM -
                                                                    <span
                                                                        class="text-[0.6875rem] text-danger font-semibold">Sent</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-t border-inherit border-solid ">
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-[#8c9097] mb-0 fw-semibold">Dec</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">24</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}" alt="" class="leading-none avatar avatar-md avatar-rounded me-2 p-2 bg-light !my-auto">
                                                                <div class="items-center">
                                                                    <span class="text-[0.75rem] text-[#8c9097]">Currency</span>
                                                                    <p class="mb-0">Etherium - <span
                                                                            class="text-[#8c9097]">(0.9207702)</span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center text-center">
                                                                <div class="flex items-center font-semibold">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                    <span class="ms-2">Jackie Shraff</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center">
                                                                <span class="text-[0.75rem] text-[#8c9097] mb-1">Received
                                                                    Time</span>
                                                                <p class="mb-0">11:57PM -
                                                                    <span
                                                                        class="text-[0.6875rem] text-success font-semibold">Received</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-t border-inherit border-solid ">
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-[#8c9097] mb-0 fw-semibold">Dec</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">02</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}" alt="" class="leading-none avatar avatar-md avatar-rounded me-2 p-2 bg-light !my-auto">
                                                                <div class="items-center">
                                                                    <span class="text-[0.75rem] text-[#8c9097]">Currency</span>
                                                                    <p class="mb-0">Dash - <span
                                                                            class="text-[#8c9097]">(0.83092333)</span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center text-center">
                                                                <div class="flex items-center font-semibold">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                    <span class="ms-2">Json Taylor</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center">
                                                                <span class="text-[0.75rem] text-[#8c9097] mb-1">Received
                                                                    Time</span>
                                                                <p class="mb-0">02:28AM -
                                                                    <span
                                                                        class="text-[0.6875rem] text-success font-semibold">Received</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-t border-inherit border-solid ">
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-[#8c9097] mb-0 font-semibold">Nov</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">30</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/Euro.svg')}}" alt="" class="leading-none avatar avatar-md avatar-rounded me-2 p-2 bg-light !my-auto">
                                                                <div class="items-center">
                                                                    <span class="text-[0.75rem] text-[#8c9097]">Currency</span>
                                                                    <p class="mb-0">Euro - <span
                                                                            class="text-[#8c9097]">(0.0092363)</span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center text-center">
                                                                <div class="flex items-center font-semibold">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                    </span>
                                                                    <span class="ms-2">Jessica May</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center">
                                                                <span class="text-[0.75rem] text-[#8c9097] mb-1">Sent
                                                                    Time</span>
                                                                <p class="mb-0">10:08AM -
                                                                    <span
                                                                        class="text-[0.6875rem] text-info font-semibold">Processing</span>
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-t border-inherit border-solid ">
                                                        <td>
                                                            <div class="text-center">
                                                                <p class="text-[#8c9097] mb-0 font-semibold">Nov</p>
                                                                <span class="text-[0.75rem] text-[#8c9097]">29</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="flex items-center">
                                                                <img src="{{asset('build/assets/images/crypto-currencies/regular/litecoin.svg')}}" alt="" class="leading-none avatar avatar-md avatar-rounded me-2 p-2 bg-light !my-auto">
                                                                <div class="items-center">
                                                                    <span class="text-[0.75rem] text-[#8c9097]">Currency</span>
                                                                    <p class="mb-0">Litecoin - <span
                                                                            class="text-[#8c9097]">(1.00009023)</span></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center text-center">
                                                                <div class="flex items-center font-semibold">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                    <span class="ms-2">Lieonel Marsi</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="items-center">
                                                                <span class="text-[0.75rem] text-[#8c9097] mb-1">Received
                                                                    Time</span>
                                                                <p class="mb-0">06:05PM -
                                                                    <span
                                                                        class="text-[0.6875rem] text-success font-semibold">Received</span>
                                                                </p>
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
                        <div class="xxl:col-span-3 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header md:justify-between flex-wrap">
                                    <div class="box-title">
                                        Bitcoin Price Statistics
                                    </div>
                                    <div class="">
                                        <button type="button"
                                            class="ti-btn ti-btn-success-full ti-btn-wave !py-1 !px-2 !text-[0.75rem]  me-2 !mb-0">Buy
                                            Now</button>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 rounded-sm bg-light border-light shadow-none !font-medium" aria-expanded="false"><i
                                                    class="fe fe-more-vertical text-[0.8rem]"></i>
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
                                </div>
                                <div class="box-body !p-0">
                                    <ul class="border-0">
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Bitcoin value in USD</p>
                                                    <p class="text-dark mb-0 font-normal tx-15">
                                                        <span class="numberfont">$29,472.60</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Price Change <span
                                                            class="badge bg-primary/10 ms-3 text-primary">Increased</span>
                                                    </p>
                                                    <p class="text-success mb-0 font-normal tx-13">
                                                        <span class="numberfont">+280.30(0.96%)</span> <i
                                                            class="fa fa-arrow-up"></i> today
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class="flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Trade Value</p>
                                                    <p class="text-dark mb-0 tx-15">
                                                        <span class="numberfont">$245,36,465.652</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Market Rank<span
                                                            class="badge bg-secondary/10 ms-3 text-secondary">3 Years</span>
                                                    </p>
                                                    <p class="text-dark mb-0 tx-15">
                                                        <span class="numberfont">#1</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">This Week High</p>
                                                    <p class="text-success mb-0 tx-15">
                                                        <span class="numberfont">$68,990.90</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">This Week Low</p>
                                                    <p class="text-danger mb-0 tx-15">
                                                        <span class="numberfont">$28,825.76</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem] border-b">
                                            <a href="javascript:void(0);" class=" flex-column items-start">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Market Dominance</p>
                                                    <p class="text-dark mb-0 tx-15">
                                                        <span class="numberfont">70%</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="py-[0.8rem] px-[1.25rem]">
                                            <a href="javascript:void(0);" class=" flex-column items-start border-0">
                                                <div class="flex w-full justify-between items-center">
                                                    <p class="tx-14 mb-0 font-normal text-dark">Alltime High</p>
                                                    <p class="text-info mb-0 tx-15">
                                                        <span class="numberfont">$68,990.90</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-4 xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Top Traders
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
                                <div class="box-body">
                                    <ul class="list-none my-1">
                                        <li class="mb-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Json Taylor</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Bought 0.008213
                                                            Bitcoin using ****9808</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        0.09251821409 <span class="text-default">- BTC</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $1,203.92
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Alicia Smith</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Sold - 0.7902400
                                                            Litecoin</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        0.2362333001 <span class="text-default">- LTC</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $19,092.56
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Branco Eliga</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Bought +12.9092 Euro
                                                            coin</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        0.009823487 <span class="text-default">- EUROC</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $8,977.46
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Alec Carey</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Bought 32.09472944
                                                            Dash using wallet</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        8.88234590 <span class="text-default">- DASH</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $9,772.46
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Sia Linda</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Sent 0.00662 Bitcoin
                                                            to Ravos Chan</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        58.6225600 <span class="text-default">- BTC</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $9,772.46
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-0">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-md avatar-rounded p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 font-semibold">Ryan Ranolds</p>
                                                        <p class="mb-0 text-[#8c9097] text-[0.75rem]">Bought 2.098123
                                                            Etherium</p>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 font-semibold text-success">
                                                        190.0092773 <span class="text-default">- ETH</span>
                                                    </p>
                                                    <p class="mb-0 opacity-[0.7] text-[#8c9097] text-[0.6875rem]">
                                                        $18,283982.00
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-col-12 col-span-12">
                            <div class="xxl:col-span-12 xl:col-span-12 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between flex-wrap">
                                        <div class="box-title mb-2 sm:mb-0">
                                            Crypto currencies Market Value
                                        </div>
                                        <div class="inline-flex rounded-md shadow-sm" role="group" aria-label="Basic example">
                                            <button type="button"
                                                class="ti-btn-group !border-0 !text-xs !py-2 !px-3 ti-btn-primary-full text-white">1D</button>
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
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover whitespace-nowrap min-w-full table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-start">S.No</th>
                                                        <th scope="col" class="text-start">Name</th>
                                                        <th scope="col" class="text-start">Symbol</th>
                                                        <th scope="col" class="text-start">Price</th>
                                                        <th scope="col" class="text-start">Market Cap</th>
                                                        <th scope="col" class="text-start">Price Graph</th>
                                                        <th scope="col" class="text-start">Volume</th>
                                                        <th scope="col" class="text-start">Price Change</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>1</td>
                                                        <td>Bitcoin</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Bitcoin.svg')}}"
                                                                        alt="">
                                                                </span> - BTC
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $16,839.10
                                                        </td>
                                                        <td>
                                                            324.01B
                                                        </td>
                                                        <td>
                                                            <div id="bitcoin-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            14,674,311,168
                                                        </td>
                                                        <td>
                                                            <span class="text-success">0.30% <i
                                                                    class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>2</td>
                                                        <td>Etherium</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ethereum.svg')}}"
                                                                        alt="">
                                                                </span> - ETH
                                                            </div>
                                                        </td>
                                                        <td>
                                                            1,217.96
                                                        </td>
                                                        <td>
                                                            $149,316,232,699
                                                        </td>
                                                        <td>
                                                            <div id="etherium-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            $4,758,554,801
                                                        </td>
                                                        <td>
                                                            <span class="text-success">0.30% <i
                                                                    class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>3</td>
                                                        <td>Dash</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Dash.svg')}}"
                                                                        alt="">
                                                                </span> - DASH
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $43.49
                                                        </td>
                                                        <td>
                                                            $480,799,847
                                                        </td>
                                                        <td>
                                                            <div id="dash-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            $52,626,563
                                                        </td>
                                                        <td>
                                                            <span class="text-success">0.45% <i
                                                                    class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>4</td>
                                                        <td>Ripple</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Ripple.svg')}}"
                                                                        alt="">
                                                                </span> - XRP
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $0.3531
                                                        </td>
                                                        <td>
                                                            $17,791,969,465
                                                        </td>
                                                        <td>
                                                            <div id="ripple-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            $511,598,941
                                                        </td>
                                                        <td>
                                                            <span class="text-success">0.97% <i
                                                                    class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>5</td>
                                                        <td>Iota</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/IOTA.svg')}}"
                                                                        alt="">
                                                                </span> - IOTA
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $0.169741
                                                        </td>
                                                        <td>
                                                            $471,800,600
                                                        </td>
                                                        <td>
                                                            <div id="iota-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            $5,524,385
                                                        </td>
                                                        <td>
                                                            <span class="text-success">0.93% <i
                                                                    class="ti ti-arrow-big-up-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-inherit border-solid hover:bg-gray-100">
                                                        <td>6</td>
                                                        <td>Neo</td>
                                                        <td>
                                                            <div class="leading-none flex items-center">
                                                                <span class="avatar avatar-xs avatar-rounded">
                                                                    <img src="{{asset('build/assets/images/crypto-currencies/regular/Neo.svg')}}"
                                                                        alt="">
                                                                </span> - NEO
                                                            </div>
                                                        </td>
                                                        <td>
                                                            $6.43
                                                        </td>
                                                        <td>
                                                            $453,601,667
                                                        </td>
                                                        <td>
                                                            <div id="neo-price-graph"></div>
                                                        </td>
                                                        <td>
                                                            $12,904,320
                                                        </td>
                                                        <td>
                                                            <span class="text-danger">0.49% <i
                                                                    class="ti ti-arrow-big-down-lines ms-1"></i></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            <div class="dark:text-defaulttextcolor/70">
                                                Showing 6 Entries <i class="bi bi-arrow-right ms-2 font-semibold"></i>
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
                        </div>
                    </div>
                    <!-- End:: row-3 -->

@endsection

@section('scripts')

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Crypto-Dashboard JS -->
        @vite('resources/assets/js/crypto-dashboard.js')
        

@endsection