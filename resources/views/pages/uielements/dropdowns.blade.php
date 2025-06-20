@extends('layouts.master')

@section('styles')
 
        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
 
                <!-- Page Header -->
                <div class="block justify-between page-header md:flex">
                    <div>
                        <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Dropdowns</h3>
                    </div>
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[0.813rem] ps-[0.5rem]">
                          <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                           Ui Elements
                            <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                          </a>
                        </li>
                        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                            Dropdowns
                        </li>
                    </ol>
                </div>
                <!-- Page Header Close -->

                <!--Start:: row-1-->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-12 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropdowns
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list flex align-center flex-wrap">
                                    <div class="hs-dropdown ti-dropdown me-2">
                                        <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
                                            type="button" id="dropdownMenuButton1"
                                            aria-expanded="false">
                                            Dropdown button<i
                                                class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown">
                                        <a class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
                                            href="javascript:void(0);" id="dropdownMenuLink" aria-expanded="false">
                                            Dropdown link<i
                                                class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                        </a>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuLink">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list flex align-center flex-wrap"&gt;
&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
        type="button" id="dropdownMenuButton1"
        aria-expanded="false"&gt;
        Dropdown button&lt;i
            class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="dropdownMenuButton1"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;a class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
        href="javascript:void(0);" role="button" id="dropdownMenuLink"
        aria-expanded="false"&gt;
        Dropdown link&lt;i
            class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
    &lt;/a&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="dropdownMenuLink"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End:: row-1-->

                <!-- Start:: row-2 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Single Botton Dropdowns</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton2"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton2">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton3"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton3">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-success-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton4"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton4">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton5"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton5">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton6"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton6">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-danger-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton7"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton7">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-success-full ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-danger-full ti-dropdown-toggle" type="button"
                id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Rounded dropdown buttons</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton8"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton8">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton9"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton9">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-success-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton11"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton11">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-info-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton10"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton10">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton12"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton12">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-danger-full ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton13"
                                                aria-expanded="false">
                                                Action<i
                                                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton13">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-success-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-danger-full ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i
                    class="ri-arrow-down-s-line align-middle ms-1 inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                <!-- Start:: row-3 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Outline Botton Dropdowns</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-primary ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton14"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton14">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton15"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton15">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-success ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton16"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton16">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-info ti-dropdown-toggle" type="button"
                                                id="dropdownMenuButton17"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton17">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-warning ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton18"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton18">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-danger ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton19"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton19">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-primary ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-success ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-info ti-dropdown-toggle" type="button"
            id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-warning ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group"&gt;
    &lt;div class="hs-dropdown ti-dropdown"&gt;
        &lt;button class="ti-btn ti-btn-outline-danger ti-dropdown-toggle"
            type="button" id="dropdownMenuButton1"
            aria-expanded="false"&gt;
            Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
            aria-labelledby="dropdownMenuButton1"&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
            &lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                    action&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                    else here&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>

                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Outline Botton Dropdowns</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-primary ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton20"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton20">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton21"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton21">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-success ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButto22"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButto22">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-outline-info ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton23"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton23">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-warning ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton24"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton24">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-outline-danger ti-dropdown-toggle !rounded-full"
                                                type="button" id="dropdownMenuButton25"
                                                aria-expanded="false">
                                                Action<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton25">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-outline-primary ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-outline-secondary ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-outline-success ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-outline-info ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-outline-warning ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-outline-danger ti-dropdown-toggle !rounded-full"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End:: row-3 -->

                <!-- Start:: row-4 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">Split Buttons</div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-primary-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton26"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-primary-full opacity-[0.85] !rounded-s-none"><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton26">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-secondary-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton27"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-s-none"><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton27">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-success-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton28"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-success-full opacity-[0.85] !rounded-s-none"><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton28">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-info-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton29"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-info-full opacity-[0.85] !rounded-s-none"><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton29">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-warning-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton30"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-warning-full opacity-[0.85] !rounded-s-none "><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton30">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group !m-0">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button
                                                class="ti-btn ti-btn-danger-full !me-0 !rounded-e-none ti-dropdown-toggle"
                                                type="button" id="dropdownMenuButton31"
                                                aria-expanded="false">
                                                Action
                                            </button>
                                            <button type="button" aria-label="button"
                                                class="ti-btn ti-btn-danger-full opacity-[0.85] !rounded-s-none"><i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuButton31">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                        action</a></li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Something
                                                        else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-primary-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-primary-full opacity-[0.85] !rounded-s-none"&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-secondary-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-secondary-full opacity-[0.85] !rounded-s-none"&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-success-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-success-full opacity-[0.85] !rounded-s-none"&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-info-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-info-full opacity-[0.85] !rounded-s-none"&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-warning-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-warning-full opacity-[0.85] !rounded-s-none "&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group !m-0"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button
                class="ti-btn ti-btn-danger-full !me-0 !rounded-e-none ti-dropdown-toggle"
                type="button" id="dropdownMenuButton1"
                aria-expanded="false"&gt;
                Action
            &lt;/button&gt;
            &lt;button
                class="ti-btn ti-btn-danger-full opacity-[0.85] !rounded-s-none"&gt;&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuButton1"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                        action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something
                        else here&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropdown Sizing
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-group my-1 me-2 ti-dropdown hs-dropdown">
                                    <button class="ti-btn-primary-full ti-btn-lg ti-dropdown-toggle" type="button"
                                        aria-expanded="false">
                                        Large button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ti-btn-group my-1 me-2">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button
                                            class="ti-btn-lg ti-btn-light !me-0 !rounded-e-none !border-0 ti-dropdown-toggle"
                                            type="button" id="dropdownMenuButton32"
                                            aria-expanded="false">
                                            Large split button
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn ti-btn-light opacity-[0.85] !rounded-s-none !mb-0"><i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton32">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ti-btn-group my-1 me-2">
                                    <div class="ti-btn-group my-1 me-2 ti-dropdown hs-dropdown">
                                        <button
                                            class="ti-btn ti-btn-primary-full !py-1 !px-4 !text-[0.75rem] ti-dropdown-toggle"
                                            type="button" aria-expanded="false">
                                            Small button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ti-btn-group my-1 me-2">
                                    <div class="hs-dropdown ti-dropdown">
                                        <button
                                            class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light !me-0 !rounded-e-none ti-dropdown-toggle"
                                            type="button" id="dropdownMenuButton33"
                                            aria-expanded="false">
                                            Small split button
                                        </button>
                                        <button type="button" aria-label="button"
                                            class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light opacity-[0.85] !rounded-s-none"><i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i></button>

                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="dropdownMenuButton33">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-group my-1 me-2 ti-dropdown hs-dropdown"&gt;
&lt;button class="ti-btn-primary-full ti-btn-lg ti-dropdown-toggle" type="button"
    aria-expanded="false"&gt;
    Large button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
            here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group my-1 me-2"&gt;
&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button
        class="ti-btn-lg ti-btn-light !me-0 !rounded-e-none !border-0 ti-dropdown-toggle"
        type="button" id="dropdownMenuButton1"
        aria-expanded="false"&gt;
        Large split button
    &lt;/button&gt;
    &lt;button
        class="ti-btn ti-btn-light opacity-[0.85] !rounded-s-none"&gt;&lt;i
            class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="dropdownMenuButton1"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group my-1 me-2"&gt;
&lt;div class="ti-btn-group my-1 me-2 ti-dropdown hs-dropdown"&gt;
    &lt;button
        class="ti-btn ti-btn-primary-full !py-1 !px-4 !text-[0.75rem] ti-dropdown-toggle"
        type="button" aria-expanded="false"&gt;
        Small button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-btn-group my-1 me-2"&gt;
&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button
        class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light !me-0 !rounded-e-none ti-dropdown-toggle"
        type="button" id="dropdownMenuButton1"
        aria-expanded="false"&gt;
        Small split button
    &lt;/button&gt;
    &lt;button
        class="ti-btn !py-1 !px-4 !text-[0.75rem]  ti-btn-light opacity-[0.85] !rounded-s-none"&gt;&lt;i
            class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;&lt;/button&gt;

    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
        aria-labelledby="dropdownMenuButton1"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-4 -->

                <!-- Start:: row-5 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropup
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown [--placement:top-left] m-1">
                                    <button id="hs-dropup" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2">
                                        Dropup
                                        <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu  mt-0 transition-none ti-dropdown-menu hidden"
                                        aria-labelledby="hs-dropup">
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Another action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Something else here
                                        </a>
                                    </div>
                                </div>
                                <div class="ti-dropdown m-1">
                                    <button type="button" class="relative ti-dropdown-toggle  ti-btn ti-btn-secondary-full !py-1 !rounded-e-none !me-0">
                                        Split dropup
                                    </button>
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left]">
                                        <button id="hs-split-dropup" type="button"
                                            class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full !opacity-[0.85]  !rounded-s-none ti-dropdown-toggle">
                                            <span class="sr-only">Toggle Dropdown</span>
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu  transition-none mt-0 ti-dropdown-menu hidden"
                                            aria-labelledby="hs-split-dropup">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="hs-dropdown ti-dropdown [--placement:top-left] m-1"&gt;
&lt;button id="hs-dropup" type="button"
class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
Dropup
&lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
    width="16" height="16" viewBox="0 0 16 16" fill="none"
    xmlns="http://www.w3.org/2000/svg"&gt;
    &lt;path
        d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
&lt;/svg&gt;
&lt;/button&gt;

&lt;div class="hs-dropdown-menu  mt-0 transition-none ti-dropdown-menu hidden"
aria-labelledby="hs-dropup"&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Another action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Something else here
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown m-1"&gt;
&lt;button type="button"
class="relative ti-dropdown-toggle  ti-btn ti-btn-secondary-full !py-1 !rounded-e-none !me-0"&gt;
Split dropup
&lt;/button&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:top-left]"&gt;
&lt;button id="hs-split-dropup" type="button"
    class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full !opacity-[0.85]  !rounded-s-none ti-dropdown-toggle"&gt;
    &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
        width="16" height="16" viewBox="0 0 16 16" fill="none"
        xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;

&lt;div class="hs-dropdown-menu  transition-none mt-0 ti-dropdown-menu hidden"
    aria-labelledby="hs-split-dropup"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropup right
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown [--placement:right-top] m-1">
                                    <button id="hs-dropright" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2">
                                        Dropright
                                        <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
                                        aria-labelledby="hs-dropright">
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Another action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Something else here
                                        </a>
                                        <a aria-label="anchor">
                                            <hr class="dropdown-divider">
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Separated link
                                        </a>
                                    </div>
                                </div>
                                <div class="hs-dropdown ti-dropdown [--placement:right-top] m-1">
                                    <button type="button"
                                        class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2 !rounded-e-none ti-dropdown-toggle !me-0">
                                        Split dropright
                                    </button>
                                    <div class="hs-dropdown ti-dropdown [--placement:right-top]">
                                        <button id="hs-split-dropright" type="button"
                                            class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full !rounded-s-none">
                                            <span class="sr-only">Toggle Dropdown</span>
                                            <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu transition-none hidden"
                                            aria-labelledby="hs-split-dropright">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                            <a aria-label="anchor">
                                                <hr class="dropdown-divider">
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
&lt;button id="hs-dropright" type="button"
class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
Dropright
&lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16" height="16"
    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
    &lt;path
        d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
&lt;/svg&gt;
&lt;/button&gt;

&lt;div class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
aria-labelledby="hs-dropright"&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Another action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Something else here
&lt;/a&gt;
&lt;a&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Separated link
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
&lt;button type="button"
class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2 !rounded-e-none ti-dropdown-toggle !me-0"&gt;
Split dropright
&lt;/button&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:right-top]"&gt;
&lt;button id="hs-split-dropright" type="button"
    class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full !rounded-s-none"&gt;
    &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
        height="16" viewBox="0 0 16 16" fill="none"
        xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;

&lt;div class="hs-dropdown-menu ti-dropdown-menu transition-none hidden"
    aria-labelledby="hs-split-dropright"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
    &lt;a&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Separated link
    &lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropup left
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown [--placement:left-top] m-1">
                                    <button id="hs-dropright3" type="button"
                                        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2">
                                        <svg class="w-auto h-2.5 text-white" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Dropleft
                                    </button>

                                    <div class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
                                        aria-labelledby="hs-dropright">
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Another action
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Something else here
                                        </a>
                                        <a aria-label="anchor">
                                            <hr class="dropdown-divider">
                                        </a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                            Separated link
                                        </a>
                                    </div>
                                </div>
                                <div class="hs-dropdown ti-dropdown [--placement:left-top] m-1">
                                    <div class="hs-dropdown ti-dropdown [--placement:left-top]">
                                        <button id="hs-split-dropright1" type="button"
                                            class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full !rounded-e-none">
                                            <span class="sr-only">Toggle Dropdown</span>
                                            <svg class="w-auto h-2.5 text-white" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu ti-dropdown-menu transition-none hidden"
                                            aria-labelledby="hs-split-dropright">
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Another action
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Something else here
                                            </a>
                                            <a aria-label="anchor">
                                                <hr class="dropdown-divider">
                                            </a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);">
                                                Separated link
                                            </a>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2 !rounded-s-none ti-dropdown-toggle !me-0">
                                        Split dropleft
                                    </button>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
&lt;button id="hs-dropright" type="button"
class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
&lt;svg class="w-auto h-2.5 text-white" width="16" height="16" viewBox="0 0 16 16"
    fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
    &lt;path
        d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
&lt;/svg&gt;
Dropleft
&lt;/button&gt;

&lt;div class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
aria-labelledby="hs-dropright"&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Another action
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Something else here
&lt;/a&gt;
&lt;a&gt;
    &lt;hr class="dropdown-divider"&gt;
&lt;/a&gt;
&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
    Separated link
&lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:left-top]"&gt;
&lt;button id="hs-split-dropright" type="button"
    class="hs-dropdown-toggle relative  ti-dropdown-toggle !opacity-[0.85] rounded-none  ti-btn ti-btn-secondary-full   !rounded-s-none"&gt;
    &lt;span class="sr-only"&gt;Toggle Dropdown&lt;/span&gt;
    &lt;svg class="w-auto h-2.5 text-white" width="16" height="16"
        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
        &lt;path
            d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
    &lt;/svg&gt;
&lt;/button&gt;

&lt;div class="hs-dropdown-menu ti-dropdown-menu transition-none hidden"
    aria-labelledby="hs-split-dropright"&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Another action
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Something else here
    &lt;/a&gt;
    &lt;a&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/a&gt;
    &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;
        Separated link
    &lt;/a&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button type="button"
class="hs-dropdown-toggle relative ti-btn ti-btn-secondary-full  !py-2   !rounded-e-none ti-dropdown-toggle !me-0"&gt;
Split dropleft
&lt;/button&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Active
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown">
                                    <button type="button" class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
                                        aria-expanded="false">
                                        Dropstart<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                        <li><a class="ti-dropdown-item active" href="javascript:void(0);"
                                                aria-current="true">Active
                                                link</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
&lt;button type="button" class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
    aria-expanded="false"&gt;
    Dropstart&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"
            aria-current="true"&gt;Active
            link&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-5 -->

                <!-- Start:: row-6 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Disabled
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown">
                                    <button type="button" class="ti-btn-primary-full ti-dropdown-toggle !py-2"
                                        aria-expanded="false">
                                        Dropstart<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                    </button>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Regular link</a></li>
                                        <li><a class="ti-dropdown-item disabled" href="javascript:void(0);"
                                                aria-current="true">Active
                                                link</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
&lt;button type="button" class="ti-btn-primary-full ti-dropdown-toggle !py-2"
    aria-expanded="false"&gt;
    Dropstart&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item disabled" href="javascript:void(0);"
            aria-current="true"&gt;Active
            link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Auto close behavior
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                                                id="defaultDropdown"
                                                aria-expanded="false">
                                                Default dropdown<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="defaultDropdown">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                                                type="button" id="dropdownMenuClickableOutside"
                                                
                                                aria-expanded="false">
                                                Clickable outside<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="defaultDropdown">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuClickableInside"
                                                 aria-expanded="false">
                                                Clickable inside<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuClickableInside">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ti-btn-group">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                                                id="dropdownMenuClickable"
                                                 aria-expanded="false">
                                                Manual close<i
                                                    class="ri-arrow-down-s-line align-middle inline-block"></i>
                                            </button>
                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                                                aria-labelledby="dropdownMenuClickable">
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                                <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle" type="button"
                id="defaultDropdown"
                aria-expanded="false"&gt;
                Default dropdown&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="defaultDropdown"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle"
                type="button" id="dropdownMenuClickableOutside"
                aria-expanded="false"&gt;
                Clickable outside&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="defaultDropdown"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle" type="button"
                id="dropdownMenuClickableInside"
                 aria-expanded="false"&gt;
                Clickable inside&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuClickableInside"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="ti-btn-group"&gt;
        &lt;div class="hs-dropdown ti-dropdown"&gt;
            &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle" type="button"
                id="dropdownMenuClickable"
                 aria-expanded="false"&gt;
                Manual close&lt;i
                    class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"
                aria-labelledby="dropdownMenuClickable"&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    dropdowns with Forms
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="hs-dropdown ti-dropdown">
                                    <button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2" type="button"
                                        id="dropdownMenu2" aria-expanded="false">
                                        Dropdown<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                    </button>
                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <form class="!px-6 !py-4">
                                            <div class="mb-4">
                                                <label for="exampleDropdownFormEmail1" class="form-label">Email
                                                    address</label>
                                                <input type="email" class="form-control w-full !rounded-md"
                                                    id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                            </div>
                                            <div class="mb-4">
                                                <label for="exampleDropdownFormPassword1"
                                                    class="form-label">Password</label>
                                                <input type="password" class="form-control w-full !rounded-md"
                                                    id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="mb-4">
                                                <div class="form-check !ps-0">
                                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                    <label class="ps-2 form-check-label" for="dropdownCheck">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="ti-btn ti-btn-primary-full">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">New around here? Sign
                                            up</a>
                                        <a class="ti-dropdown-item" href="javascript:void(0);">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="hs-dropdown ti-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2" type="button"
        id="dropdownMenu2" aria-expanded="false"&gt;
        Dropdown&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;div class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;form class="!px-6 !py-4"&gt;
            &lt;div class="mb-4"&gt;
                &lt;label for="exampleDropdownFormEmail1" class="form-label"&gt;Email
                    address&lt;/label&gt;
                &lt;input type="email" class="form-control w-full !rounded-md"
                    id="exampleDropdownFormEmail1" placeholder="email@example.com"&gt;
            &lt;/div&gt;
            &lt;div class="mb-4"&gt;
                &lt;label for="exampleDropdownFormPassword1"
                    class="form-label"&gt;Password&lt;/label&gt;
                &lt;input type="password" class="form-control w-full !rounded-md"
                    id="exampleDropdownFormPassword1" placeholder="Password"&gt;
            &lt;/div&gt;
            &lt;div class="mb-4"&gt;
                &lt;div class="form-check"&gt;
                    &lt;input type="checkbox" class="form-check-input" id="dropdownCheck"&gt;
                    &lt;label class="form-check-label" for="dropdownCheck"&gt;
                        Remember me
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="ti-btn ti-btn-primary-full"&gt;Sign in&lt;/button&gt;
        &lt;/form&gt;
        &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;New around here? Sign
            up&lt;/a&gt;
        &lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Forgot password?&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-6 -->

                <!-- Start:: row-7 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-9 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Alignment options
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="">
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle mb-0 !py-2"
                                            type="button" id="dropdownMenuButton"
                                            aria-expanded="false">
                                            Dropdown<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden "
                                            aria-labelledby="dropdownMenuButton">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-secondary-full ti-dropdown-toggle mb-0 !py-2" aria-expanded="false">
                                            Right-aligned menu<i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul
                                            class="hs-dropdown-menu ti-dropdown-menu ti-dropdown-menu-end hidden ">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute">
                                        <button type="button" id="hs-dropdown-left-but-right-on-lg"
                                            class="ti-btn ti-btn-info-full ti-dropdown-toggle mb-0 !py-2"  aria-expanded="false">
                                            Left-aligned, right-aligned lg<i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden lg:ti-dropdown-menu-end "
                                            aria-labelledby="hs-dropdown-left-but-right-on-lg">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute">
                                        <button type="button" id="hs-dropdown-right-but-left-on-lg"
                                            class="ti-btn ti-btn-warning-full ti-dropdown-toggle mb-0 !py-2"  aria-expanded="false">
                                            Right-aligned, left-aligned lg<i
                                                class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden  ti-dropdown-menu-end lg:ti-dropdown-menu-start"
                                            aria-labelledby="hs-dropdown-right-but-left-on-lg">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown [--placement:left-top] m-1">
                                        <button id="hs-dropright2" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2">
                                            <svg class="w-auto h-2.5 text-white" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                            Dropstart
                                        </button>

                                        <ul class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
                                            aria-labelledby="hs-dropright">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown [--placement:right-top] m-1">
                                        <button id="hs-dropright1" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2">
                                            Dropend
                                            <svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>

                                        <ul class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
                                            aria-labelledby="hs-dropright">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hs-dropdown ti-dropdown [--placement:top-left] m-1">
                                        <button id="hs-dropup1" type="button"
                                            class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2">
                                            Dropup
                                            <svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                            </svg>
                                        </button>

                                        <ul class="hs-dropdown-menu  mt-0 transition-none ti-dropdown-menu hidden"
                                            aria-labelledby="hs-dropup">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Menu item</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class=""&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle mb-0 !py-2"
        type="button" id="dropdownMenuButton"
        aria-expanded="false"&gt;
        Dropdown&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden "
        aria-labelledby="dropdownMenuButton"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-secondary-full ti-dropdown-toggle mb-0 !py-2"
        aria-expanded="false"&gt;
        Right-aligned menu&lt;i
            class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul
        class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu ti-dropdown-menu-end hidden "&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute"&gt;
    &lt;button type="button" id="hs-dropdown-left-but-right-on-lg"
        class="ti-btn ti-btn-info-full ti-dropdown-toggle mb-0 !py-2"
         aria-expanded="false"&gt;
        Left-aligned, right-aligned lg&lt;i
            class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden lg:ti-dropdown-menu-end "
        aria-labelledby="hs-dropdown-left-but-right-on-lg"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown" data-hs-dropdown-strategy="absolute"&gt;
    &lt;button type="button" id="hs-dropdown-right-but-left-on-lg"
        class="ti-btn ti-btn-warning-full ti-dropdown-toggle mb-0 !py-2"
         aria-expanded="false"&gt;
        Right-aligned, left-aligned lg&lt;i
            class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu hidden  ti-dropdown-menu-end hs-dropdown-menu lg:ti-dropdown-menu-start"
        aria-labelledby="hs-dropdown-right-but-left-on-lg"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:left-top] m-1"&gt;
    &lt;button id="hs-dropright" type="button"
        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2"&gt;
        &lt;svg class="w-auto h-2.5 text-white" width="16" height="16"
            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M11 1L5.31305 7.16086C5.13625 7.35239 5.13625 7.64761 5.31305 7.83914L11 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
        Dropstart
    &lt;/button&gt;

    &lt;ul class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
        aria-labelledby="hs-dropright"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:right-top] m-1"&gt;
    &lt;button id="hs-dropright" type="button"
        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-primary-full !py-2"&gt;
        Dropend
        &lt;svg class="w-auto h-2.5 ti-dropdown-caret !text-white" width="16"
            height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;

    &lt;ul class="hs-dropdown-menu  ti-dropdown-menu transition-none hidden"
        aria-labelledby="hs-dropright"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="hs-dropdown ti-dropdown [--placement:top-left] m-1"&gt;
    &lt;button id="hs-dropup" type="button"
        class="hs-dropdown-toggle ti-dropdown-toggle ti-btn ti-btn-success-full !py-2"&gt;
        Dropup
        &lt;svg class="hs-dropdown-open:rotate-180 ti-dropdown-caret !text-white"
            width="16" height="16" viewBox="0 0 16 16" fill="none"
            xmlns="http://www.w3.org/2000/svg"&gt;
            &lt;path
                d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" /&gt;
        &lt;/svg&gt;
    &lt;/button&gt;

    &lt;ul class="hs-dropdown-menu  mt-0 transition-none ti-dropdown-menu hidden"
        aria-labelledby="hs-dropup"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Menu item&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dark Dropdowns
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-dropdown hs-dropdown">
                                    <button class="ti-btn ti-btn-dark ti-dropdown-toggle !py-2" type="button"
                                        id="dropdownMenuButton34" aria-expanded="false">
                                        Dropdown button<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                    </button>
                                    <ul
                                        class="hs-dropdown-menu ti-dropdown-menu !bg-black hidden">
                                        <li><a class="ti-dropdown-item !text-white"
                                                href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item !text-white"
                                                href="javascript:void(0);">Another action</a></li>
                                        <li><a class="ti-dropdown-item !text-white"
                                                href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="ti-dropdown hs-dropdown"&gt;
&lt;button class="ti-btn ti-btn-dark ti-dropdown-toggle !py-2" type="button"
    id="dropdownMenuButton3" aria-expanded="false"&gt;
    Dropdown button&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;ul
    class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-black hidden"&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
            href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
            href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
            href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-7 -->

                <!-- Start:: row-8 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Custom Dropdown Menu's
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
                                            type="button" aria-expanded="false">
                                            Primary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul
                                            class="hs-dropdown-menu ti-dropdown-menu !bg-primary hidden">
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Another action</a></li>
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
                                            type="button" aria-expanded="false">
                                            secondary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul
                                            class="hs-dropdown-menu ti-dropdown-menu !bg-secondary hidden">
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Another action</a></li>
                                            <li><a class="ti-dropdown-item !text-white"
                                                    href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !py-2"
                                            type="button" aria-expanded="false">
                                            warning<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-warning hidden">
                                            <li><a class="ti-dropdown-item active" href="javascript:void(0);">Active</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-info-full ti-dropdown-toggle !py-2" type="button" aria-expanded="false">
                                            info<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-info hidden">
                                            <li><a class="ti-dropdown-item active" href="javascript:void(0);">Active</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-success ti-dropdown-toggle !py-2" type="button" aria-expanded="false">
                                            success<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-success hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item active" href="javascript:void(0);">Active</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button class="ti-btn ti-btn-danger ti-dropdown-toggle !py-2" type="button" aria-expanded="false">
                                            danger<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-danger hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item active" href="javascript:void(0);">Active</a>
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;div class="ti-btn-list"&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-primary-full ti-dropdown-toggle !py-2"
        type="button" aria-expanded="false"&gt;
        Primary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul
        class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-primary hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-secondary-full ti-dropdown-toggle !py-2"
        type="button" aria-expanded="false"&gt;
        secondary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul
        class="hs-dropdown-menu ti-dropdown-menu hs-dropdown-menu !bg-secondary hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item !text-white"
                href="javascript:void(0);"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-warning-full ti-dropdown-toggle !py-2"
        type="button" aria-expanded="false"&gt;
        warning&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-warning hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-info-full ti-dropdown-toggle !py-2" type="button"
        aria-expanded="false"&gt;
        info&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-item-info hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-success ti-dropdown-toggle !py-2" type="button"
        aria-expanded="false"&gt;
        success&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-success hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button class="ti-btn ti-btn-danger ti-dropdown-toggle !py-2" type="button"
        aria-expanded="false"&gt;
        danger&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu dropmenu-light-danger hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item active" href="javascript:void(0);"&gt;Active&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-6 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Ghost Button Dropdowns
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="ti-btn-list">
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-ghost-primary ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Primary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-ghost-secondary ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Secondary<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-ghost-success ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Success<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button" class="ti-btn ti-btn-ghost-info ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Info<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-ghost-warning ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Warning<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                    <div class="ti-dropdown hs-dropdown">
                                        <button type="button"
                                            class="ti-btn ti-btn-ghost-danger ti-dropdown-toggle !py-2 !shadow-none" aria-expanded="false">
                                            Danger<i class="ri-arrow-down-s-line align-middle inline-block"></i>
                                        </button>
                                        <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Another
                                                    action</a></li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                    here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated
                                                    link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="ti-btn-list"&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-ghost-primary ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Primary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-ghost-secondary ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Secondary&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-ghost-success ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Success&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button" class="ti-btn ti-btn-ghost-info ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Info&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-ghost-warning ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Warning&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;div class="ti-dropdown hs-dropdown"&gt;
    &lt;button type="button"
        class="ti-btn ti-btn-ghost-danger ti-dropdown-toggle !py-2 !shadow-none"
        aria-expanded="false"&gt;
        Danger&lt;i class="ri-arrow-down-s-line align-middle inline-block"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="hs-dropdown-menu ti-dropdown-menu hidden"&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another
                action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated
                link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-8 -->

                <!-- Start:: row-9 -->
                <div class="grid grid-cols-12 gap-6">
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    non-interactive dropdown items
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <p class=" mb-3">Use <code>.ti-dropdown-item-text.</code> to create non-interactive
                                    dropdown items.</p>
                                <div class="bd-example">
                                    <ul class="dropdown-menu border shadow-sm">
                                        <li><span class="!py-2 !px-4 !text-[0.875rem]">Dropdown item text</span>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html"> &lt;p class=" mb-3"&gt;Use &lt;code&gt;.ti-dropdown-item-text.&lt;/code&gt; to create non-interactive
    dropdown items.&lt;/p&gt;
&lt;div class="bd-example"&gt;
    &lt;ul class="dropdown-menu border shadow-sm"&gt;
        &lt;li&gt;&lt;span class="!py-2 !px-4 !text-[0.875rem]"&gt;Dropdown item text&lt;/span&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                here&lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropdown Headers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <p class="card-titlte mb-3">Add a <code>.dropdown-header</code> to label sections of
                                    actions in any dropdown menu.</p>
                                <div class="bd-example">
                                    <ul class="dropdown-menu border shadow-sm">
                                        <li>
                                            <h6 class="dropdown-header">Dropdown header</h6>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;p class="card-titlte mb-3"&gt;Add a &lt;code&gt;.dropdown-header&lt;/code&gt; to label sections of
                                    actions in any dropdown menu.&lt;/p&gt;
                                    &lt;div class="bd-example"&gt;
                                    &lt;ul class="dropdown-menu border shadow-sm"&gt;
                                        &lt;li&gt;
                                            &lt;h6 class="dropdown-header"&gt;Dropdown header&lt;/h6&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
                                                here&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                    &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropdown Dividers
                                </div>
                                <div class="prism-toggle">
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bd-example">
                                    <ul class="dropdown-menu border shadow-sm">
                                        <li><a class="dropdown-header" href="javascript:void(0);">Heading</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="ti-dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
&lt;ul class="dropdown-menu border shadow-sm"&gt;
    &lt;li&gt;&lt;a class="dropdown-header" href="javascript:void(0);"&gt;Heading&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Another action&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Something else
            here&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;
        &lt;hr class="dropdown-divider"&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a class="ti-dropdown-item" href="javascript:void(0);"&gt;Separated link&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                    <div class="xl:col-span-3 col-span-12">
                        <div class="box">
                            <div class="box-header justify-between">
                                <div class="box-title">
                                    Dropdown Menu Text
                                </div>
                                <div class="prism-toggle">
                                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="bd-example">
                                    <div class="dropdown-menu border shadow-sm p-6 text-[#8c9097] text-[0.875rem] max-w-[200px]">
                                        <p>
                                            Some example text that's free-flowing within the dropdown menu.
                                        </p>
                                        <p class="mb-0">
                                            And this is more example text.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer hidden border-t-0">
                                <!-- Prism Code -->
                                <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
                                    &lt;div class="dropdown-menu border shadow-sm p-6 text-[#8c9097] text-[0.875rem] max-w-[200px]"&gt;
                                        &lt;p&gt;
                                            Some example text that's free-flowing within the dropdown menu.
                                        &lt;/p&gt;
                                        &lt;p class="mb-0"&gt;
                                            And this is more example text.
                                        &lt;/p&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;</code></pre>
                                <!-- Prism Code -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-9 -->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection