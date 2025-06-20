@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Stocks</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                            <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                Dashboards
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                            </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                Stocks
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12  col-span-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="md:flex block flex-wrap items-center justify-between">
                                        <div class="flex-grow">
                                            <nav class="nav nav-pills nav-style-3 flex md:mb-0 mb-4" aria-label="Tabs">
                                                <a class="nav-link text-defaulttextcolor !py-[0.35rem] !px-4 text-sm !font-medium text-center rounded-md hover:text-primary active" id="portfolio-item" data-hs-tab="#Stocksportfolio" aria-controls="Stocksportfolio">
                                                    Portfolio
                                                </a>
                                                <a class="nav-link text-defaulttextcolor !py-[0.35rem] !px-4 text-sm !font-medium text-center rounded-md hover:text-primary" id="market-item" data-hs-tab="#Stocksmarket" aria-controls="Stocksmarket">
                                                    Market
                                                </a>
                                            </nav>
                                        </div>
                                        <div class="flex flex-wrap items-center md:mt-0 justify-evenly gap-6">
                                            <div class="md:text-end">
                                                <span class="block font-semibold">Total Value</span>
                                                <span class="!text-primary">$8.89k</span>
                                            </div>
                                            <div class="md:text-end">
                                                <span class="block font-semibold">Market Value</span>
                                                <span class="!text-warning">$15.9k</span>
                                            </div>
                                            <div class="md:text-end">
                                                <span class="block font-semibold">Yield</span>
                                                <span class="!text-danger">3.4%</span>
                                            </div>
                                            <div class="md:text-end">
                                                <span class="block font-semibold">Dividend</span>
                                                <span class="!text-info">$1.3k</span>
                                            </div>
                                            <div class="md:text-end">
                                                <span class="block font-semibold">Gain</span>
                                                <span class="!text-success">$116</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="tab-content">
                                <div class="tab-pane show active !p-0 !border-0" id="Stocksportfolio" aria-labelledby="portfolio-item" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex gap-3 flex-wrap items-start justify-between">
                                                        <div class="flex-grow flex items-start sm:mb-0">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-rounded bg-primary">
                                                                    <i class="ti ti-wallet text-[1rem] text-white"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097]">Total amount Invested</span>
                                                                <span class="text-[1rem] font-semibold">$23,8998.99</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="total-invested"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex gap-3 flex-wrap items-start justify-between">
                                                        <div class="flex-grow flex items-start  sm:mb-0">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-rounded bg-secondary">
                                                                    <i class="ti ti-arrow-big-up-line text-[1rem] text-white"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097]">No Of Investments</span>
                                                                <span class="text-[1rem] font-semibold">116</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="total-investments"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex gap-3 flex-wrap items-start justify-between">
                                                        <div class="flex-grow flex items-start  sm:mb-0">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-rounded bg-warning">
                                                                    <i class="ti ti-wallet text-[1rem] text-white"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097]">Portfolio Value</span>
                                                                <span class="text-[1rem] font-semibold">$12,920.20<i class="ti ti-arrow-narrow-up ms-1 text-success"></i></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="portfolio-value"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-3 sm:col-span-6 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex gap-3 flex-wrap items-start justify-between">
                                                        <div class="flex-grow flex items-start sm:mb-0">
                                                            <div class="me-4">
                                                                <span class="avatar avatar-rounded bg-success">
                                                                    <i class="ti ti-wallet text-[1rem] text-white"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097]">Returns Rate</span>
                                                                <span class="text-[1rem] font-semibold">+12.08%<i class="ti ti-arrow-narrow-up ms-1 text-success"></i></span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div id="returns-rate"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-8 col-span-12">
                                            <div class="box">
                                                <div class="box-header justify-between">
                                                    <div class="box-title mb-2 sm:mb-0">
                                                        Total Investments
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
                                                <div class="box-body">
                                                    <div class="flex items-center justify-between gap-4 flex-wrap">
                                                        <div class="flex flex-wrap flex-grow gap-3 sm:ms-[3rem] ms-0">
                                                            <div>
                                                                <span class="block text-[#8c9097] mb-1">Invested Value</span>
                                                                <span class="block font-semibold">$1,290.94<span class="text-success ms-1 text-[0.75rem]"><i class="ti ti-chevron-up"></i>1.22%</span></span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097] mb-1">Total Returns</span>
                                                                <span class="block font-semibold">$25,458.20<span class="text-success ms-1 text-[0.75rem]"><i class="ti ti-chevron-up"></i>10.14%</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-wrap gap-3 text-end">
                                                            <div>
                                                                <span class="block text-[#8c9097] mb-1">Today Change</span>
                                                                <span class="block font-semibold">$112.09</span>
                                                            </div>
                                                            <div>
                                                                <span class="block text-[#8c9097] mb-1">Change In %</span>
                                                                <span class="block font-semibold">+0.01%<span class="text-success ms-1 text-[0.75rem]"><i class="ti ti-chevron-up"></i>0.21%</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="totalInvestmentsStats"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 col-span-12">
                                            <div class="box">
                                                <div class="box-header justify-between">
                                                    <div class="box-title">
                                                        My Stocks
                                                    </div>
                                                    <div class="flex items-center flex-wrap gap-2">
                                                        <input class="ti-form-control form-control-sm" type="text" placeholder="Search Any Stock" aria-label=".form-control-sm example">
                                                        <div class="hs-dropdown ti-dropdown !py-0 !mt-0 !mb-0">
                                                            <a href="javascript:void(0);"
                                                            class="ti-btn ti-btn-primary !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium !mb-0"
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
                                                <div class="box-body !p-0">
                                                    <ul class="list-none my-stocks-ul mb-0">
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-github text-black text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">GTHB (Gituhb, Demo Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">16 Shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $12,390.02
                                                                    </span>
                                                                    <span class="block text-success"><i class="ti ti-arrow-narrow-up"></i>0.14%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star-fill text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-twitter text-info text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">TTR (Twiter.com, Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">289 Shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $15,526.01
                                                                    </span>
                                                                    <span class="block text-success"><i class="ti ti-arrow-narrow-up"></i>2.14%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-bootstrap-fill text-primary text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">BS (Boostrap, Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">325 shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $30,500.15
                                                                    </span>
                                                                    <span class="block text-danger"><i class="ti ti-arrow-narrow-down"></i>2.73%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star-fill text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-windows text-success text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">MS (Micorsoft, Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">1,523 shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $1,80,520.02
                                                                    </span>
                                                                    <span class="block text-success"><i class="ti ti-arrow-narrow-up"></i>8.63%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-apple text-warning text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">AAPL (Appil, Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">30 shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $21,093.20
                                                                    </span>
                                                                    <span class="block text-danger"><i class="ti ti-arrow-narrow-down"></i>4.10%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star-fill text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="flex items-center flex-grow leading-none">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-currency-bitcoin text-danger text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none flex-grow">
                                                                    <span class="font-semibold block mb-2">Bitcoin (Bioset Coin, Inc.)</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">118 shares</span>
                                                                </div>
                                                                <div class="text-end me-3">
                                                                    <span class="block font-semibold mb-1">
                                                                        $14,245.23
                                                                    </span>
                                                                    <span class="block text-success"><i class="ti ti-arrow-narrow-up"></i>0.79%</span>
                                                                </div>
                                                                <div>
                                                                    <span class="text-[0.875rem]">
                                                                        <i class="bi bi-star-fill text-[#8c9097] opacity-50"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-12 col-span-12">
                                            <h6 class="font-semibold mb-4 text-[1rem]">
                                                Trending Stocks :
                                            </h6>
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex gap-2 flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-apple text-[#8c9097] text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Apple</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$12,289.44</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">0.14%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$1,780.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex gap-2 flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-currency-bitcoin text-warning text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Bitcoin</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$58,151.02</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">2.14%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$5,745.62</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex gap-2 flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-card-list text-success text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Tesla</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$14,452.36</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">4.02%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$4,125.63</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex gap-2 flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-gift text-primary text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Amazon</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$63,251.11</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">5.14%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$936.30</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-truck text-danger text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Aliexpress</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$5,401.50</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">3.32%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$4,360.65</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                                    <div class="p-4 box border bg-white rounded">
                                                        <div class="flex flex-wrap items-center justify-between mb-4">
                                                            <div class="flex flex-grow items-center">
                                                                <div class="me-2">
                                                                    <span class="avatar avatar-rounded bg-light p-2 !mb-0">
                                                                        <i class="bi bi-phone text-secondary text-[1.125rem]"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="leading-none">
                                                                    <span class="font-semibold block mb-2 text-default">Samsung</span>
                                                                    <span class="block text-[#8c9097] text-[0.75rem]">$10,732.12</span>
                                                                </div>
                                                            </div>
                                                            <div class="text-success text-[0.75rem] text-end">
                                                                <span class="block">1.24%<i class="ti ti-arrow-bear-right"></i></span>
                                                                <span class="block">+$3,221.29</span>
                                                            </div>
                                                        </div>
                                                        <div class="flex gap-2">
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-light flex-grow font-medium">Short</button>
                                                            <button type="button" class="ti-btn ti-btn-sm ti-btn-primary flex-grow font-medium">Buy</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-5 col-span-12">
                                            <div class="box">
                                                <div class="box-header justify-between">
                                                    <div class="box-title">
                                                        Transaction History
                                                    </div>
                                                    <div class="hs-dropdown ti-dropdown">
                                                        <a href="javascript:void(0);"
                                                        class="ti-btn ti-btn-primary !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                                        aria-expanded="false">
                                                        All<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                        </a>
                                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                            href="javascript:void(0);">Buy</a></li>
                                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
                                                            href="javascript:void(0);">Sell</a></li>
                                                        </ul>
                                                </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="table-responsive">
                                                        <table class="table whitespace-nowrap table-bordered border-primary/10 min-w-full">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-start">Symbol</th>
                                                                    <th scope="col" class="text-start">Date</th>
                                                                    <th scope="col" class="text-start">Type</th>
                                                                    <th scope="col" class="text-start">Amount</th>
                                                                    <th scope="col" class="text-start">Shares</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        EPA:THI
                                                                    </th>
                                                                    <td>
                                                                        12-06-2023
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-primary text-white">Buy</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">-$1,290</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">+20</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        EPA:SCB
                                                                    </th>
                                                                    <td>
                                                                        11-06-2023
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-primary text-white">Buy</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">-$2,150</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">+15</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        EPA:CGIO
                                                                    </th>
                                                                    <td>
                                                                        11-06-2023
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-warning text-white">Sell</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">+$22,625</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">-12</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        EPA:NTIX
                                                                    </th>
                                                                    <td>
                                                                        05-06-2023
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-primary text-white">Buy</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">-$3,680</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">+36</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        EPA:MOD
                                                                    </th>
                                                                    <td>
                                                                        20-05-2023
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge bg-warning text-white">Sell</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">+$30,750</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">-25</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-7 col-span-12">
                                            <div class="box">
                                                <div class="box-header justify-between">
                                                    <div class="box-title">
                                                        Market Movers
                                                    </div>
                                                    <div class="flex flex-wrap gap-2">
                                                        <div class="me-2">
                                                            <input class="ti-form-control form-control-sm" type="text" placeholder="Search Any Stock" aria-label=".form-control-sm example">
                                                        </div>
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <a href="javascript:void(0);"
                                                            class="ti-btn ti-btn-primary !py-1 !px-2 !text-[0.75rem] !m-0 !gap-0 !font-medium"
                                                            aria-expanded="false">
                                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                                            </a>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden" role="menu">
                                                            <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block"
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
                                                        <table class="table whitespace-nowrap table-bordered border-primary/10 min-w-full">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" class="text-start">Symbol</th>
                                                                    <th scope="col" class="text-start">Name</th>
                                                                    <th scope="col" class="text-start">Price</th>
                                                                    <th scope="col" class="text-start">1D Change</th>
                                                                    <th scope="col" class="text-start">1D Return %</th>
                                                                    <th scope="col" class="text-start">Volume</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        APPL
                                                                    </th>
                                                                    <td>
                                                                        App1e Inc.<span class="font-normal text-primary text-[.625rem] ms-1">NASDAQ</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>$1,116.90</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">$28.9<i class="ti ti-arrow-bear-right"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">6.8%</span>
                                                                    </td>
                                                                    <td>
                                                                        12,389.30
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        TTR
                                                                    </th>
                                                                    <td>
                                                                        Twiter.com Inc.<span class="font-normal text-primary text-[.625rem] ms-1">NYSE</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>$993.21</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">$11.6<i class="ti ti-arrow-bear-right"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">10.25%</span>
                                                                    </td>
                                                                    <td>
                                                                        32,125.03
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        BS
                                                                    </th>
                                                                    <td>
                                                                        Boostrap.com.<span class="font-normal text-primary text-[.625rem] ms-1">NSE</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>$11.00</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">$16.0<i class="ti ti-arrow-narrow-down"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">9.0%</span>
                                                                    </td>
                                                                    <td>
                                                                        27,911.16
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        NFLX
                                                                    </th>
                                                                    <td>
                                                                        Netfilx.com Inc.<span class="font-normal text-primary text-[.625rem] ms-1">LSE</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>$161.72</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">$9.8<i class="ti ti-arrow-narrow-down"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-danger">17.8%</span>
                                                                    </td>
                                                                    <td>
                                                                        27,161.89
                                                                    </td>
                                                                </tr>
                                                                <tr class="border border-inherit border-solid">
                                                                    <th scope="row" class="text-start">
                                                                        ION
                                                                    </th>
                                                                    <td>
                                                                        Ion.com Corp.<span class="font-normal text-primary text-[.625rem] ms-1">FSX</span>
                                                                    </td>
                                                                    <td>
                                                                        <span>$52.65</span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">$14.2<i class="ti ti-arrow-bear-right"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-success">30.2%</span>
                                                                    </td>
                                                                    <td>
                                                                        65,785.01
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane hidden !p-0 !border-0" id="Stocksmarket" aria-labelledby="market-item" role="tabpanel">
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-danger/10 !text-danger">
                                                                    <i class="ti ti-trending-down text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">Nifty 50</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-danger/10 !text-danger">
                                                                    <i class="ti ti-trending-down text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">SENSEX</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-success/10 !text-success">
                                                                    <i class="ti ti-trending-up text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">DJIA</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-danger/10 !text-danger">
                                                                    <i class="ti ti-trending-up text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">S&amp;P 500</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-success/10 !text-success">
                                                                    <i class="ti ti-trending-up text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">NASDAQ</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxl:col-span-2 xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-body">
                                                    <div class="flex flex-wrap items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="me-2">
                                                                <span class="avatar bg-success/10 !text-success">
                                                                    <i class="ti ti-trending-up text-[1.125rem]"></i>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="block font-semibold">NIFTY IT</span>
                                                                <span class="block">$12,289.44</span>
                                                            </div>
                                                        </div>
                                                        <div class="text-end text-danger text-[0.75rem]">
                                                            <span class="block">-0.14%</span>
                                                            <span class="block">-$1,780.80</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 gap-x-6">
                                        <div class="xl:col-span-12 col-span-12">
                                            <div class="box">
                                                <div class="box-header justify-between">
                                                    <div class="box-title">
                                                        Market Cap
                                                    </div>
                                                    <div>
                                                        <input class="ti-form-control form-control-sm" type="text" placeholder="Search Any Stock Here" aria-label=".form-control-sm example">
                                                    </div>
                                                </div>
                                                <div class="box-body !p-0">
                                                    <div class="grid grid-cols-12 gap-x-6">
                                                        <div class="xl:col-span-7 col-span-12 border-e">
                                                            <div class="p-4">
                                                                <div class="flex flex-wrap items-center justify-between">
                                                                    <div class="flex flex-grow gap-3 ms-[3rem]">
                                                                        <div>
                                                                            <h5 class="font-semibold text-primary text-[1.25rem] mb-1">$12,390.02<span class="text-[0.75rem] ms-1 text-danger">0.14%<i class="ti ti-trending-down ms-1"></i></span></h5>
                                                                            <span class="block text-[#8c9097] mb-1 text-[0.75rem]"><span class="text-danger me-1">-89.75</span>. Today</span>
                                                                            <span class="block text-[#8c9097] text-[0.6875rem]">Jun 17, 2023  11:25 AM  UTC +5:30</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex text-end">
                                                                        <div>
                                                                            <h6 class="font-semibold text-[1rem] mb-2">GITUHB</h6>
                                                                            <span class="block text-[#8c9097] text-[0.6875rem] mb-1">GTHB  INDEXNSE</span>
                                                                            <span class="block"><a href="javascript:void(0);" class="text-primary font-semibold">+ Compare</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="stocks-marketcap"></div>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-5 col-span-12">
                                                            <div class="p-4 xl:!ps-0">
                                                                <div class="table-responsive mb-[3rem]">
                                                                    <table class="table whitespace-nowrap table-borderless !text-[#8c9097] min-w-full">
                                                                        <tbody>
                                                                            <tr class="text-start">
                                                                                <th scope="row">Open</th>
                                                                                <td>125.80</td>
                                                                                <td>Volume</td>
                                                                                <td>1,253.20</td>
                                                                            </tr>
                                                                            <tr class="text-start">
                                                                                <th scope="row">High</th>
                                                                                <td>352.15</td>
                                                                                <td>Avg. Volume</td>
                                                                                <td>1.05M</td>
                                                                            </tr>
                                                                            <tr class="text-start">
                                                                                <th scope="row">Low</th>
                                                                                <td>120.13</td>
                                                                                <td>52 Week High</td>
                                                                                <td>2569.25</td>
                                                                            </tr>
                                                                            <tr class="text-start">
                                                                                <th scope="row">Dividend Yield</th>
                                                                                <td>3.5%</td>
                                                                                <td>52 Week Low</td>
                                                                                <td>1586.20</td>
                                                                            </tr>
                                                                            <tr class="text-start">
                                                                                <th scope="row">P/E Ratio</th>
                                                                                <td>25%</td>
                                                                                <td>Market Cap</td>
                                                                                <td>2.15Cr</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div>
                                                                    <h6 class="font-semibold mb-2 text-[1rem]">
                                                                        Market Depth:
                                                                    </h6>
                                                                    <div class="grid grid-cols-12 gap-x-6">
                                                                        <div class="xl:col-span-6  col-span-12">
                                                                            <div class="table-responsive">
                                                                                <table class="table whitespace-nowrap table-sm text-center table-borderless !text-[#8c9097] min-w-full">
                                                                                    <thead class="text-default bg-light">
                                                                                        <tr class="!text-defaulttextcolor">
                                                                                            <th scope="col">Qty</th>
                                                                                            <th scope="col">Orders</th>
                                                                                            <th scope="col">Bid</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-success">20</span>
                                                                                            </th>
                                                                                            <td>2</td>
                                                                                            <td>$12,908</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-success">12</span>
                                                                                            </th>
                                                                                            <td>1</td>
                                                                                            <td>$20,632</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-success">36</span>
                                                                                            </th>
                                                                                            <td>1</td>
                                                                                            <td>$19,102</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-success">10</span>
                                                                                            </th>
                                                                                            <td>3</td>
                                                                                            <td>$16,650</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-success">15</span>
                                                                                            </th>
                                                                                            <td>2</td>
                                                                                            <td>$18,850</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="xl:col-span-6  col-span-12">
                                                                            <div class="table-responsive mb-3">
                                                                                <table class="table whitespace-nowrap table-sm text-center table-borderless !text-[#8c9097] min-w-full">
                                                                                    <thead class="text-default bg-light">
                                                                                        <tr class="!text-defaulttextcolor">
                                                                                            <th scope="col">Qty</th>
                                                                                            <th scope="col">Orders</th>
                                                                                            <th scope="col">Bid</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-danger">20</span>
                                                                                            </th>
                                                                                            <td>2</td>
                                                                                            <td>$12,908</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-danger">12</span>
                                                                                            </th>
                                                                                            <td>1</td>
                                                                                            <td>$20,632</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-danger">36</span>
                                                                                            </th>
                                                                                            <td>1</td>
                                                                                            <td>$19,102</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-danger">10</span>
                                                                                            </th>
                                                                                            <td>3</td>
                                                                                            <td>$16,650</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <span class="text-danger">15</span>
                                                                                            </th>
                                                                                            <td>2</td>
                                                                                            <td>$18,850</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="flex gap-3">
                                                                                <button type="button" class="flex-grow ti-btn ti-btn-sm bg-primary text-white">Buy</button>
                                                                                <button type="button" class="flex-grow ti-btn ti-btn-sm bg-secondary text-white">Sell</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          
@endsection

@section('scripts')

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- HRM Dashboard JS -->
        @vite('resources/assets/js/stocks-dashboard.js')
        

@endsection