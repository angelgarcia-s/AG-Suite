@extends('layouts.master')

@section('styles')
 
        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> List Groups</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                               Ui Elements
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                            List Groups
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Basic List
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Alicia Sierra
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Samantha Mery
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Juliana Pena
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Adam Smith
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-sm">
                                                    <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img" class="!rounded-md">
                                                </span>
                                                <div class="ms-2 font-semibold">
                                                    Farhaan Amhed
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group"&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;span class="avatar avatar-sm"&gt;
                    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img" class="!rounded-md"&gt;
                &lt;/span&gt;
                &lt;div class="ms-2 font-semibold"&gt;
                    Alicia Sierra
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;span class="avatar avatar-sm"&gt;
                    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img" class="!rounded-md"&gt;
                &lt;/span&gt;
                &lt;div class="ms-2 font-semibold"&gt;
                    Samantha Mery
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;span class="avatar avatar-sm"&gt;
                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img" class="!rounded-md"&gt;
                &lt;/span&gt;
                &lt;div class="ms-2 font-semibold"&gt;
                    Juliana Pena
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;span class="avatar avatar-sm"&gt;
                    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img" class="!rounded-md"&gt;
                &lt;/span&gt;
                &lt;div class="ms-2 font-semibold"&gt;
                    Adam Smith
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;span class="avatar avatar-sm"&gt;
                    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img" class="!rounded-md"&gt;
                &lt;/span&gt;
                &lt;div class="ms-2 font-semibold"&gt;
                    Farhaan Amhed
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Active items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item active" aria-current="true">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-house-door"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Home
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-bell"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Notifications
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-gift"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Sent Messages
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-person"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    New Requests
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="text-[.9375rem]">
                                                        <i class="bi bi-trash3"></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    Deleted Messages
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group"&gt;
        &lt;li class="ti-list-group-item active" aria-current="true"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-house-door"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Home
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-bell"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Notifications
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-gift"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Sent Messages
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-person"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    New Requests
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="text-[.9375rem]"&gt;
                        &lt;i class="bi bi-trash3"&gt;&lt;/i&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;
                    Deleted Messages
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Disabled items
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item disabled" aria-disabled="true">A disabled item meant to be disabled
                                        </li>
                                        <li class="ti-list-group-item">Simply dummy text of the printing</li>
                                        <li class="ti-list-group-item">There are many variations of passages</li>
                                        <li class="ti-list-group-item">All the Lorem Ipsum generators</li>
                                        <li class="ti-list-group-item">Written in 45 BC. This book is a treatise on the theory</li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;ul class="ti-list-group"&gt;
    &lt;li class="ti-list-group-item disabled" aria-disabled="true"&gt;A disabled item meant to be disabled
    &lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Simply dummy text of the printing&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;There are many variations of passages&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;All the Lorem Ipsum generators&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory&lt;/li&gt;
&lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Flush
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group ti-list-group-flush">
                                        <li class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-semibold"><i class="bi bi-envelope align-middle me-2 text-[#8c9097]"></i>Asish Trivedhi<span class="ms-1 text-[#8c9097] font-normal inline-block">(+1023-84534)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-tiktok align-middle me-2 text-[#8c9097]"></i>Alezander Russo<span class="ms-1 text-[#8c9097] font-normal inline-block">(+7546-12342)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-whatsapp align-middle me-2 text-[#8c9097]"></i>Karem Smith<span class="ms-1 text-[#8c9097] font-normal inline-block">(+9944-56632)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"><i class="bi bi-facebook align-middle me-2 text-[#8c9097]"></i>Melissa Brien<span class="ms-1 text-[#8c9097] font-normal inline-block">(+1023-34323)</span></li>
                                        <li class="ti-list-group-item !border-l-0 !border-r-0 !border-b-0  font-semibold"><i class="bi bi-instagram align-middle me-2 text-[#8c9097]"></i>Kamala Harris<span class="ms-1 text-[#8c9097] font-normal inline-block">(+91-63421)</span></li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group ti-list-group-flush"&gt;
        &lt;li class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-semibold"&gt;&lt;i class="bi bi-envelope align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Asish Trivedhi&lt;span class="ms-1 text-[#8c9097] font-normal inline-block"&gt;(+1023-84534)&lt;/span&gt;&lt;/li&gt;
        &lt;li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"&gt;&lt;i class="bi bi-tiktok align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Alezander Russo&lt;span class="ms-1 text-[#8c9097] font-normal inline-block"&gt;(+7546-12342)&lt;/span&gt;&lt;/li&gt;
        &lt;li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"&gt;&lt;i class="bi bi-whatsapp align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Karem Smith&lt;span class="ms-1 text-[#8c9097] font-normal inline-block"&gt;(+9944-56632)&lt;/span&gt;&lt;/li&gt;
        &lt;li class="ti-list-group-item !border-l-0 !border-r-0  font-semibold"&gt;&lt;i class="bi bi-facebook align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Melissa Brien&lt;span class="ms-1 text-[#8c9097] font-normal inline-block"&gt;(+1023-34323)&lt;/span&gt;&lt;/li&gt;
        &lt;li class="ti-list-group-item !border-l-0 !border-r-0 !border-b-0  font-semibold"&gt;&lt;i class="bi bi-instagram align-middle me-2 text-[#8c9097]"&gt;&lt;/i&gt;Kamala Harris&lt;span class="ms-1 text-[#8c9097] font-normal inline-block"&gt;(+91-63421)&lt;/span&gt;&lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Links
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group">
                                        <ul class="list-none">
                                        <li class="ti-list-group-item ti-list-group-item-action active">
                                        <a href="javascript:void(0);" 
                                            aria-current="true">
                                            <div class="flex items-center">
                                                <div>
                                                    <span class="avatar avatar-xs bg-white !text-defaulttextcolor avatar-rounded">
                                                        C
                                                    </span>
                                                </div>
                                                <div class="ms-2">California</div>
                                            </div>
                                        </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-secondary text-white avatar-rounded">
                                                            N
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">New Jersey</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-info text-white avatar-rounded">
                                                            L
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Los Angeles</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200">
                                            <a href="javascript:void(0);" class="">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-warning text-white avatar-rounded">
                                                            M
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Miami Florida</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="ti-list-group-item ti-list-group-item-action disabled">
                                            <a class=" ">
                                                <div class="flex items-center">
                                                    <div>
                                                        <span class="avatar avatar-xs bg-success text-white avatar-rounded">
                                                            W
                                                        </span>
                                                    </div>
                                                    <div class="ms-2">Washington D.C</div>
                                                </div>
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-list-group"&gt;
    &lt;ul class="list-none"&gt;
    &lt;li class="ti-list-group-item ti-list-group-item-action active"&gt;
    &lt;a href="javascript:void(0);" 
        aria-current="true"&gt;
        &lt;div class="flex items-center"&gt;
            &lt;div&gt;
                &lt;span class="avatar avatar-xs bg-white !text-defaulttextcolor avatar-rounded"&gt;
                    C
                &lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="ms-2"&gt;California&lt;/div&gt;
        &lt;/div&gt;
    &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200"&gt;
        &lt;a href="javascript:void(0);" class=""&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="avatar avatar-xs bg-secondary text-white avatar-rounded"&gt;
                        N
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;New Jersey&lt;/div&gt;
            &lt;/div&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200"&gt;
        &lt;a href="javascript:void(0);" class=""&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="avatar avatar-xs bg-info text-white avatar-rounded"&gt;
                        L
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;Los Angeles&lt;/div&gt;
            &lt;/div&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item ti-list-group-item-action hover:bg-gray-200"&gt;
        &lt;a href="javascript:void(0);" class=""&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="avatar avatar-xs bg-warning text-white avatar-rounded"&gt;
                        M
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;Miami Florida&lt;/div&gt;
            &lt;/div&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="ti-list-group-item ti-list-group-item-action disabled"&gt;
        &lt;a class=" "&gt;
            &lt;div class="flex items-center"&gt;
                &lt;div&gt;
                    &lt;span class="avatar avatar-xs bg-success text-white avatar-rounded"&gt;
                        W
                    &lt;/span&gt;
                &lt;/div&gt;
                &lt;div class="ms-2"&gt;Washington D.C&lt;/div&gt;
            &lt;/div&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        buttons
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group flex flex-col">
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action active" aria-current="true">Simply dummy text of the printing<span class="badge ltr:float-right rtl:float-left bg-primary text-white">243</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">There are many variations of passages<span class="badge ltr:float-right rtl:float-left bg-secondary/10 text-secondary">35</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">All the Lorem Ipsum generators<span class="badge ltr:float-right rtl:float-left bg-info/10 text-info">132</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action">All the Lorem Ipsum generators<span class="badge ltr:float-right rtl:float-left bg-success/10 text-success">2525</span></button>
                                        <button type="button" class="ti-list-group-item text-start ti-list-group-item-action" disabled>A disabled item meant to be disabled<span class="badge ltr:float-right rtl:float-left bg-danger/10 text-danger">21</span></button>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-list-group flex flex-col"&gt;
        &lt;button type="button" class="ti-list-group-item text-start ti-list-group-item-action active" aria-current="true"&gt;Simply dummy text of the printing&lt;span class="badge ltr:float-right rtl:float-left bg-primary text-white"&gt;243&lt;/span&gt;&lt;/button&gt;
        &lt;button type="button" class="ti-list-group-item text-start ti-list-group-item-action"&gt;There are many variations of passages&lt;span class="badge ltr:float-right rtl:float-left bg-secondary/10 text-secondary"&gt;35&lt;/span&gt;&lt;/button&gt;
        &lt;button type="button" class="ti-list-group-item text-start ti-list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge ltr:float-right rtl:float-left bg-info/10 text-info"&gt;132&lt;/span&gt;&lt;/button&gt;
        &lt;button type="button" class="ti-list-group-item text-start ti-list-group-item-action"&gt;All the Lorem Ipsum generators&lt;span class="badge ltr:float-right rtl:float-left bg-success/10 text-success"&gt;2525&lt;/span&gt;&lt;/button&gt;
        &lt;button type="button" class="ti-list-group-item text-start ti-list-group-item-action" disabled&gt;A disabled item meant to be disabled&lt;span class="badge ltr:float-right rtl:float-left bg-danger/10 text-danger"&gt;21&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Contextual classes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">A simple default list group item</li>

                                        <li class="ti-list-group-item !bg-primary/10 !text-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-secondary/10 !text-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="ti-list-group-item !bg-success/10 !text-success">A simple success list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-danger/10 !text-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-warning/10 !text-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-info/10 !text-info">A simple info list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor">A simple light list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-black/10 !text-defaulttextcolor">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group"&gt;
        &lt;li class="ti-list-group-item"&gt;A simple default list group item&lt;/li&gt;
    
        &lt;li class="ti-list-group-item !bg-primary/10 !text-primary"&gt;A simple primary list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-secondary/10 !text-secondary"&gt;A simple secondary
            list
            group item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-success/10 !text-success"&gt;A simple success list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-danger/10 !text-danger"&gt;A simple danger list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-warning/10 !text-warning"&gt;A simple warning list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-info/10 !text-info"&gt;A simple info list group
            item
        &lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-light/10 !text-defaulttextcolor"&gt;A simple light list group
            item
        &lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-black/10 !text-defaulttextcolor"&gt;A simple dark list group
            item
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Contextual classes With Hover Styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group flex flex-col">
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item">A simple default list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-primary/10 !text-primary hover:!bg-primary/20">A simple primary list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-secondary/10 !text-secondar hover:!bg-secondary/20">A simple secondary list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-success/10 !text-success hover:!bg-success/20">A simple success list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-danger/10 !text-danger hover:!bg-danger/20">A simple danger list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-warning/10 !text-warning hover:!bg-warning/20">A simple warning list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-info/10 !text-info hover:!bg-info/20">A simple info list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-light/10 !text-defaulttextcolor hover:!bg-light/20">A simple light list group item</a>
                                        <a href="javascript:void(0);" class="w-full ti-list-group-item !bg-black/10 !text-defaulttextcolor hover:!bg-black/20">A simple dark list group item</a>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-list-group flex flex-col"&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item"&gt;A simple default list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-primary/10 !text-primary hover:!bg-primary/20"&gt;A simple primary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-secondary/10 !text-secondar hover:!bg-secondary/20"&gt;A simple secondary list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-success/10 !text-success hover:!bg-success/20"&gt;A simple success list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-danger/10 !text-danger hover:!bg-danger/20"&gt;A simple danger list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-warning/10 !text-warning hover:!bg-warning/20"&gt;A simple warning list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-info/10 !text-info hover:!bg-info/20"&gt;A simple info list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-light/10 !text-defaulttextcolor hover:!bg-light/20"&gt;A simple light list group item&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="w-full ti-list-group-item !bg-black/10 !text-defaulttextcolor hover:!bg-black/20"&gt;A simple dark list group item&lt;/a&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Solid Colored Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group ">
                                        <li class="ti-list-group-item">A simple default list group item</li>

                                        <li class="ti-list-group-item !bg-primary !text-white !border-primary">A simple primary list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-secondary !text-white !border-secondary">A simple secondary
                                            list
                                            group item</li>
                                        <li class="ti-list-group-item !bg-success !text-white !border-success">A simple success list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-danger !text-white !border-danger">A simple danger list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-warning !text-white !border-warning">A simple warning list
                                            group
                                            item</li>
                                        <li class="ti-list-group-item !bg-info !text-white !border-info">A simple info list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-light !border-light">A simple light list group
                                            item
                                        </li>
                                        <li class="ti-list-group-item !bg-black !text-white !border-black">A simple dark list group
                                            item
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group "&gt;
        &lt;li class="ti-list-group-item"&gt;A simple default list group item&lt;/li&gt;
    
        &lt;li class="ti-list-group-item !bg-primary !text-white !border-primary"&gt;A simple primary list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-secondary !text-white !border-secondary"&gt;A simple secondary
            list
            group item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-success !text-white !border-success"&gt;A simple success list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-danger !text-white !border-danger"&gt;A simple danger list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-warning !text-white !border-warning"&gt;A simple warning list
            group
            item&lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-info !text-white !border-info"&gt;A simple info list group
            item
        &lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-light !border-light"&gt;A simple light list group
            item
        &lt;/li&gt;
        &lt;li class="ti-list-group-item !bg-black !text-white !border-black"&gt;A simple dark list group
            item
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Custom content
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-list-group">
                                        <ul class="list-none">
                                            <li class="ti-list-group-item ti-list-group-item-action active">
                                                <a href="javascript:void(0);" 
                                                aria-current="true">
                                                <div class="sm:flex w-full justify-between">
                                                    <h6 class="mb-1 font-semibold">Web page editors now use Lorem Ipsum?</h6>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                                <small>24,Nov 2022.</small>
                                               </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">Richard McClintock, a Latin professor?</h6>
                                                        <small class="text-[#8c9097]">4 hrs ago</small>
                                                    </div>
                                                    <p class="mb-1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
                                                    <small class="text-[#8c9097]">30,Nov 2022.</small>
                                                </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="sm:flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">It uses a dictionary of over 200 Latin words?</h6>
                                                        <small class="text-[#8c9097]">15 hrs ago</small>
                                                    </div>
                                                    <p class="mb-1">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    <small class="text-[#8c9097]">4,Nov 2022.</small>
                                                </a>
                                            </li>
                                            <li class="ti-list-group-item ti-list-group-item-action ">
                                                <a href="javascript:void(0);">
                                                    <div class="sm:flex w-full justify-between">
                                                        <h6 class="mb-1 font-semibold">The standard Lorem Ipsum used since the 1500s?</h6>
                                                        <small class="text-[#8c9097]">45 mins ago</small>
                                                    </div>
                                                    <p class="mb-1">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                                    <small class="text-[#8c9097]">28,Oct 2022.</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="ti-list-group"&gt;
    &lt;ul class="list-none"&gt;
        &lt;li class="ti-list-group-item ti-list-group-item-action active"&gt;
            &lt;a href="javascript:void(0);" 
            aria-current="true"&gt;
            &lt;div class="sm:flex w-full justify-between"&gt;
                &lt;h6 class="mb-1 font-semibold"&gt;Web page editors now use Lorem Ipsum?&lt;/h6&gt;
                &lt;small&gt;3 days ago&lt;/small&gt;
            &lt;/div&gt;
            &lt;p class="mb-1"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&lt;/p&gt;
            &lt;small&gt;24,Nov 2022.&lt;/small&gt;
           &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item ti-list-group-item-action "&gt;
            &lt;a href="javascript:void(0);"&gt;
                &lt;div class="flex w-full justify-between"&gt;
                    &lt;h6 class="mb-1 font-semibold"&gt;Richard McClintock, a Latin professor?&lt;/h6&gt;
                    &lt;small class="text-[#8c9097]"&gt;4 hrs ago&lt;/small&gt;
                &lt;/div&gt;
                &lt;p class="mb-1"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.&lt;/p&gt;
                &lt;small class="text-[#8c9097]"&gt;30,Nov 2022.&lt;/small&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item ti-list-group-item-action "&gt;
            &lt;a href="javascript:void(0);"&gt;
                &lt;div class="sm:flex w-full justify-between"&gt;
                    &lt;h6 class="mb-1 font-semibold"&gt;It uses a dictionary of over 200 Latin words?&lt;/h6&gt;
                    &lt;small class="text-[#8c9097]"&gt;15 hrs ago&lt;/small&gt;
                &lt;/div&gt;
                &lt;p class="mb-1"&gt;Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.&lt;/p&gt;
                &lt;small class="text-[#8c9097]"&gt;4,Nov 2022.&lt;/small&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item ti-list-group-item-action "&gt;
            &lt;a href="javascript:void(0);"&gt;
                &lt;div class="sm:flex w-full justify-between"&gt;
                    &lt;h6 class="mb-1 font-semibold"&gt;The standard Lorem Ipsum used since the 1500s?&lt;/h6&gt;
                    &lt;small class="text-[#8c9097]"&gt;45 mins ago&lt;/small&gt;
                &lt;/div&gt;
                &lt;p class="mb-1"&gt;All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.&lt;/p&gt;
                &lt;small class="text-[#8c9097]"&gt;28,Oct 2022.&lt;/small&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box text-defaulttextcolor text-defaultsize">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Sub headings
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ol class="ti-list-group !list-decimal">
                                        <li class="ti-list-group-item flex justify-between items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">What Happened?</div>
                                                Many experts have recently suggested may exist.
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex justify-between items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">It Was Amazing!</div>
                                                His idea involved taking red.
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex justify-between items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">News Is A Great Weapon.</div>
                                                News can influence in many ways.
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item flex justify-between items-start">
                                            <div class="ms-2 me-auto text-[#8c9097]">
                                                <div class="font-semibold text-[.875rem] !text-defaulttextcolor">majority have suffered.</div>
                                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ol class="ti-list-group !list-decimal"&gt;
        &lt;li class="ti-list-group-item flex justify-between items-start"&gt;
            &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
                &lt;div class="font-semibold text-[.875rem] !text-defaulttextcolor"&gt;What Happened?&lt;/div&gt;
                Many experts have recently suggested may exist.
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item flex justify-between items-start"&gt;
            &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
                &lt;div class="font-semibold text-[.875rem] !text-defaulttextcolor"&gt;It Was Amazing!&lt;/div&gt;
                His idea involved taking red.
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item flex justify-between items-start"&gt;
            &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
                &lt;div class="font-semibold text-[.875rem] !text-defaulttextcolor"&gt;News Is A Great Weapon.&lt;/div&gt;
                News can influence in many ways.
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="ti-list-group-item flex justify-between items-start"&gt;
            &lt;div class="ms-2 me-auto text-[#8c9097]"&gt;
                &lt;div class="font-semibold text-[.875rem] !text-defaulttextcolor"&gt;majority have suffered.&lt;/div&gt;
                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Numbered Lists
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ol class="ti-list-group ti-list-group-numbered">
                                        <li class="ti-list-group-item">Simply dummy text of the printing.</li>
                                        <li class="ti-list-group-item">There are many variations of passages.</li>
                                        <li class="ti-list-group-item">All the Lorem Ipsum generators.</li>
                                        <li class="ti-list-group-item">Written in 45 BC. This book is a treatise on the theory.</li>
                                        <li class="ti-list-group-item">Randomised words which don't look.</li>
                                        <li class="ti-list-group-item">Always free from repetition, injected humour.</li>
                                    </ol>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html"> &lt;ol class="ti-list-group ti-list-group-numbered"&gt;
    &lt;li class="ti-list-group-item"&gt;Simply dummy text of the printing.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;There are many variations of passages.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;All the Lorem Ipsum generators.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Written in 45 BC. This book is a treatise on the theory.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Randomised words which don't look.&lt;/li&gt;
    &lt;li class="ti-list-group-item"&gt;Always free from repetition, injected humour.&lt;/li&gt;
&lt;/ol&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        List With Checkboxes
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                Hearing the information and responding.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="..." checked>
                                                New Admin Launched.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                                                aria-label="...">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group"&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..." checked&gt;
                Accurate information at any given point.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..."&gt;
                Hearing the information and responding.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..." checked&gt;
                Setting up and customizing your own sales.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..." checked&gt;
                New Admin Launched.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..."&gt;
                To maximize profits and improve productivity.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1 font-semibold" type="checkbox" value=""
                aria-label="..."&gt;
                To have a complete 360° overview of sales information, having.
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        List With Radios
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group list-none">
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Accurate information at any given point.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Hearing the information and responding.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio" checked>
                                                Setting up and customizing your own sales.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                New Admin Launched.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To maximize profits and improve productivity.
                                        </li>
                                        <li class="ti-list-group-item">
                                            <input class="form-check-input me-1" type="radio" value=""
                                                name="list-radio">
                                                To have a complete 360° overview of sales information, having.
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group list-none"&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio" checked&gt;
                Accurate information at any given point.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio" checked&gt;
                Hearing the information and responding.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio" checked&gt;
                Setting up and customizing your own sales.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio"&gt;
                New Admin Launched.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio"&gt;
                To maximize profits and improve productivity.
        &lt;/li&gt;
        &lt;li class="ti-list-group-item"&gt;
            &lt;input class="form-check-input me-1" type="radio" value=""
                name="list-radio"&gt;
                To have a complete 360° overview of sales information, having.
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        List With badges
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Grocies
                                            <span class="badge bg-primary text-white">Available</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Furniture
                                            <span class="badge bg-secondary text-white">Buy</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Beauty
                                            <span class="badge bg-danger !rounded-full text-white">32</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Books
                                            <span class="badge bg-light text-default">New</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Toys
                                            <span class="badge bg-info-gradient">Hot</span>
                                        </li>
                                        <li
                                            class="ti-list-group-item flex justify-between items-center font-semibold">
                                            Mobiles
                                            <span class="badge bg-warning text-white">Sold Out</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;ul class="ti-list-group"&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Grocies
            &lt;span class="badge bg-primary text-white"&gt;Available&lt;/span&gt;
        &lt;/li&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Furniture
            &lt;span class="badge bg-secondary text-white"&gt;Buy&lt;/span&gt;
        &lt;/li&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Beauty
            &lt;span class="badge bg-danger !rounded-full text-white"&gt;32&lt;/span&gt;
        &lt;/li&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Books
            &lt;span class="badge bg-light text-default"&gt;New&lt;/span&gt;
        &lt;/li&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Toys
            &lt;span class="badge bg-info-gradient"&gt;Hot&lt;/span&gt;
        &lt;/li&gt;
        &lt;li
            class="ti-list-group-item flex justify-between items-center font-semibold"&gt;
            Mobiles
            &lt;span class="badge bg-warning text-white"&gt;Sold Out&lt;/span&gt;
        &lt;/li&gt;
    &lt;/ul&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection