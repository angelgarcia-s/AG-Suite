@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Scrollspy</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Advanced Ui
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Scrollspy
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12 xxl:col-span-6">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Basic Scrollspy</h5>
                                    </div>
                                    <div id="scrollspy-scrollable-parent-1" class="max-h-[340px] overflow-y-auto">
                                        <div class="box-body">
                                            <header
                                                class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-40 w-full bg-white text-sm">
                                                <nav class="max-w-[85rem] w-full mx-auto sm:px-0 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                                                    <div class="flex items-center justify-between">
                                                    <a class="flex-none text-xl font-semibold" href="#">Brand</a>
                                                    <div class="sm:hidden">
                                                        <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-lg border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-primary transition-all text-sm" data-hs-collapse="#navbar-collapse-basic" aria-controls="navbar-collapse-basic" aria-label="Toggle navigation">
                                                        <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                                                        <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                        </button>
                                                    </div>
                                                    </div>
                                                    <div id="navbar-collapse-basic" class="hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                                                        <div data-hs-scrollspy="#scrollspy-1"  data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1" class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5 [--scrollspy-offset:220] md:[--scrollspy-offset:70]">
                                                            <a class="text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary hs-scrollspy-active:text-primary active" href="#first">First</a>
                                                            <a class="text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary hs-scrollspy-active:text-primary" href="#second">Second</a>

                                                            <div data-hs-scrollspy-group class="hs-dropdown [--adaptive:none] [--placement:bottom-right]">
                                                                <button type="button" id="hs-mega-menu-basic-dr" class="group mb-3 sm:mb-0 inline-flex justify-center items-center gap-x-1 text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary hs-scrollspy-active:text-primary">
                                                                    Dropdown
                                                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                                                </button>

                                                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 sm:dark:border before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5 hidden" style="">
                                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary hs-scrollspy-active:text-primary" href="#third">
                                                                    Third
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary" href="#fourth">
                                                                    Fourth
                                                                    </a>
                                                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 focus:outline-none focus:text-primary" href="#fifth">
                                                                    Fifth
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </header>

                                            <div id="scrollspy-1" class="mt-3 space-y-4">
                                                <div id="first">
                                                    <h3 class="text-lg font-semibold">First</h3>
                                                    <p class="mt-1 text-sm leading-6 text-gray-600">This is
                                                        some placeholder content for the scrollspy page. Note that as you scroll
                                                        down the page, the appropriate navigation link is highlighted. It's
                                                        repeated throughout the component example. We keep adding some more
                                                        example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>

                                                <div id="second">
                                                    <h3 class="text-lg font-semibold">Second</h3>
                                                    <p class="mt-1 text-sm leading-6 text-gray-600">This is
                                                        some placeholder content for the scrollspy page. Note that as you scroll
                                                        down the page, the appropriate navigation link is highlighted. It's
                                                        repeated throughout the component example. We keep adding some more
                                                        example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>

                                                <div id="third">
                                                    <h3 class="text-lg font-semibold">Third</h3>
                                                    <p class="mt-1 text-sm leading-6 text-gray-600">This is
                                                        some placeholder content for the scrollspy page. Note that as you scroll
                                                        down the page, the appropriate navigation link is highlighted. It's
                                                        repeated throughout the component example. We keep adding some more
                                                        example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>

                                                <div id="fourth">
                                                    <h3 class="text-lg font-semibold">Fourth</h3>
                                                    <p class="mt-1 text-sm leading-6 text-gray-600">This is
                                                        some placeholder content for the scrollspy page. Note that as you scroll
                                                        down the page, the appropriate navigation link is highlighted. It's
                                                        repeated throughout the component example. We keep adding some more
                                                        example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>

                                                <div id="fifth">
                                                    <h3 class="text-lg font-semibold">Fifth</h3>
                                                    <p class="mt-1 text-sm leading-6 text-gray-600">This is
                                                        some placeholder content for the scrollspy page. Note that as you scroll
                                                        down the page, the appropriate navigation link is highlighted. It's
                                                        repeated throughout the component example. We keep adding some more
                                                        example copy here to emphasize the scrolling and highlighting.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-6">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Nested Scrollspy</h5>
                                    </div>
                                    <div id="scrollspy-scrollable-parent-2" class="max-h-[400px] overflow-y-auto">
                                        <div class="box-body">
                                            <div class="grid grid-cols-5">
                                                <div class="col-span-12 md:col-span-1">
                                                    <h2 class="text-xl font-medium">Navbar</h2>

                                                    <ul class="sticky top-0" data-hs-scrollspy="#scrollspy-2"
                                                        data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-2">
                                                        <li data-hs-scrollspy-group="">
                                                            <a href="#item-1"
                                                                class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 hs-scrollspy-active:text-primary">Item
                                                                1</a>
                                                            <ul>
                                                                <li class="ms-4">
                                                                    <a href="#item-1-1"
                                                                        class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 hs-scrollspy-active:text-primary">
                                                                        <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  rtl:rotate-180"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"></path>
                                                                        </svg>
                                                                        Item 1-1
                                                                    </a>
                                                                </li>
                                                                <li class="ms-4">
                                                                    <a href="#item-1-2"
                                                                        class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 hs-scrollspy-active:text-primary">
                                                                        <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  rtl:rotate-180"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"></path>
                                                                        </svg>
                                                                        Item 1-2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#item-2"
                                                                class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 hs-scrollspy-active:text-primary">Item
                                                                2</a>
                                                        </li>
                                                        <li data-hs-scrollspy-group="">
                                                            <a href="#item-3"
                                                                class="block py-0.5 text-sm font-medium leading-6 text-slate-700 hover:text-slate-900 hs-scrollspy-active:text-primary">Item
                                                                3</a>
                                                            <ul>
                                                                <li class="ms-4">
                                                                    <a href="#item-3-1"
                                                                        class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 hs-scrollspy-active:text-primary">
                                                                        <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  rtl:rotate-180"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"></path>
                                                                        </svg>
                                                                        Item 3-1
                                                                    </a>
                                                                </li>
                                                                <li class="ms-4">
                                                                    <a href="#item-3-2"
                                                                        class="group flex items-start gap-x-2 py-0.5 text-sm text-gray-700 leading-6 hover:text-gray-800 hs-scrollspy-active:text-primary">
                                                                        <svg class="w-2 h-6 text-gray-400 overflow-visible group-hover:text-gray-600  rtl:rotate-180"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 2L10.6464 7.64645C10.8417 7.84171 10.8417 8.15829 10.6464 8.35355L5 14"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"></path>
                                                                        </svg>
                                                                        Item 3-2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-span-12 md:col-span-4">
                                                    <div id="scrollspy-2" class="space-y-4">
                                                        <div id="item-1">
                                                            <h3 class="text-lg font-semibold">Item 1</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-1-1">
                                                            <h3 class="text-lg font-semibold">Item 1-1</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-1-2">
                                                            <h3 class="text-lg font-semibold">Item 1-2</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-2">
                                                            <h3 class="text-lg font-semibold">Item 2</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-3">
                                                            <h3 class="text-lg font-semibold">Item 3</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-3-1">
                                                            <h3 class="text-lg font-semibold">Item 3-1</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>

                                                        <div id="item-3-2">
                                                            <h3 class="text-lg font-semibold">Item 3-2</h3>
                                                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                                                This is some placeholder content for the scrollspy page. Note
                                                                that as you scroll down the page, the appropriate navigation
                                                                link is highlighted. It's repeated throughout the component
                                                                example. We keep adding some more example copy here to emphasize
                                                                the scrolling and highlighting.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End::row-1 -->

@endsection

@section('scripts')

        <!-- Scrollspy JS -->
        @vite('resources/assets/js/scrollspy.js')


@endsection