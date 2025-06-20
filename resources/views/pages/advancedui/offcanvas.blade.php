@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">
      
@endsection

@section('content')

                    <!-- Page Header -->
                    <div class="block justify-between page-header md:flex">
                        <div>
                            <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Offcanvas</h3>
                        </div>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[0.813rem] ps-[0.5rem]">
                              <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                              Advanced Ui
                                <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                              </a>
                            </li>
                            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                              Offcanvas
                            </li>
                        </ol>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Live demo
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-example">
                                        Button
                                    </button>
                                    <div id="hs-overlay-example" class="hs-overlay hidden ti-offcanvas ti-offcanvas-left !z-[105]" tabindex="-1">
                                        <div class="ti-offcanvas-header">
                                            <h6 class="ti-offcanvas-title">
                                              Notifications
                                            </h6>
                                            <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-example">
                                                <span class="sr-only">Close modal</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="ti-offcanvas-body !h-[90%] !p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item !border-t-0">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary !rounded-full">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">New Website Created<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">20 Nov 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger !rounded-full">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success !rounded-full">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">1 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary !rounded-full">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">5 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">6 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning !rounded-full">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">7 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">10 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger !rounded-full">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success !rounded-full">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                      </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-example"&gt;
        Button
    &lt;/button&gt;
    &lt;div id="hs-overlay-example" class="hs-overlay hidden ti-offcanvas ti-offcanvas-left !z-[105]" tabindex="-1"&gt;
        &lt;div class="ti-offcanvas-header"&gt;
            &lt;h6 class="ti-offcanvas-title"&gt;
              Notifications
            &lt;/h6&gt;
            &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-example"&gt;
                &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
                &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
            &lt;div&gt;
                &lt;ul class="list-group list-group-flush mb-0"&gt;
                    &lt;li class="list-group-item !border-t-0"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-primary !rounded-full"&gt;
                                  NW
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                                  CH
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                  S
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md !rounded-full"&gt;
                                  &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                                  RC
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md !rounded-full"&gt;
                                  &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-secondary !rounded-full"&gt;
                                  M
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                  OL
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-warning !rounded-full"&gt;
                                  A
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md !rounded-full"&gt;
                                  &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                                  CH
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                  S
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md !rounded-full"&gt;
                                  &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                      &lt;div class="flex items-center"&gt;
                          &lt;div class="me-2"&gt;
                              &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                                  RC
                              &lt;/span&gt;
                          &lt;/div&gt;
                          &lt;div class="flex-grow"&gt;
                              &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                              &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Body scrolling
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-body-scrolling">
                                        Enable body scrolling
                                    </button>
                                    <div id="hs-overlay-body-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden [--body-scroll:true] [--overlay-backdrop:false] !z-[105]" tabindex="-1">
                                      <div class="ti-offcanvas-header">
                                          <h6 class="ti-offcanvas-title">
                                            Notifications
                                          </h6>
                                          <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-body-scrolling">
                                              <span class="sr-only">Close modal</span>
                                              <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                              </svg>
                                          </button>
                                      </div>
                                      <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="list-group list-group-flush mb-0">
                                                <li class="list-group-item !border-t-0">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-primary !rounded-full">
                                                              NW
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">New Website Created<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">20 Nov 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>30 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">1 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>7 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-secondary !rounded-full">
                                                              M
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">5 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              OL
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">6 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>45 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-warning !rounded-full">
                                                              A
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">7 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>28 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">10 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>14 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-body-scrolling"&gt;
        Enable body scrolling
    &lt;/button&gt;
    &lt;div id="hs-overlay-body-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden [--body-scroll:true] [--overlay-backdrop:false] !z-[105]" aria-overlay="true" tabindex="-1"&gt;
      &lt;div class="ti-offcanvas-header"&gt;
          &lt;h6 class="ti-offcanvas-title"&gt;
            Notifications
          &lt;/h6&gt;
          &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-body-scrolling"&gt;
              &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
              &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
              &lt;/svg&gt;
          &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
        &lt;div&gt;
            &lt;ul class="list-group list-group-flush mb-0"&gt;
                &lt;li class="list-group-item !border-t-0"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-primary !rounded-full"&gt;
                              NW
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-secondary !rounded-full"&gt;
                              M
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              OL
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-warning !rounded-full"&gt;
                              A
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Enable backdrop
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-backdrop-default">
                                       Enable backdrop
                                    </button>

                                    <div id="hs-overlay-backdrop-default" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105]" tabindex="-1">
                                      <div class="ti-offcanvas-header">
                                          <h6 class="ti-offcanvas-title">
                                            Notifications
                                          </h6>
                                          <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-backdrop-default">
                                              <span class="sr-only">Close modal</span>
                                              <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                              </svg>
                                          </button>
                                      </div>
                                      <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="list-group list-group-flush mb-0">
                                                <li class="list-group-item !border-t-0">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-primary !rounded-full">
                                                              NW
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">New Website Created<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">20 Nov 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>30 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">1 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>7 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-secondary !rounded-full">
                                                              M
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">5 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              OL
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">6 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>45 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-warning !rounded-full">
                                                              A
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">7 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>28 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">10 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>14 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-backdrop-default"&gt;
        Enable backdrop
     &lt;/button&gt;
    
     &lt;div id="hs-overlay-backdrop-default" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105]" tabindex="-1"&gt;
       &lt;div class="ti-offcanvas-header"&gt;
           &lt;h6 class="ti-offcanvas-title"&gt;
             Notifications
           &lt;/h6&gt;
           &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-backdrop-default"&gt;
               &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
               &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
               &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
               &lt;/svg&gt;
           &lt;/button&gt;
       &lt;/div&gt;
       &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
         &lt;div&gt;
             &lt;ul class="list-group list-group-flush mb-0"&gt;
                 &lt;li class="list-group-item !border-t-0"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-primary !rounded-full"&gt;
                               NW
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                               CH
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                               S
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md !rounded-full"&gt;
                               &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                               RC
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md !rounded-full"&gt;
                               &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-secondary !rounded-full"&gt;
                               M
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                               OL
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-warning !rounded-full"&gt;
                               A
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md !rounded-full"&gt;
                               &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                               CH
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                               S
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md !rounded-full"&gt;
                               &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
                 &lt;li class="list-group-item"&gt;
                   &lt;div class="flex items-center"&gt;
                       &lt;div class="me-2"&gt;
                           &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                               RC
                           &lt;/span&gt;
                       &lt;/div&gt;
                       &lt;div class="flex-grow"&gt;
                           &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                           &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                       &lt;/div&gt;
                   &lt;/div&gt;
                 &lt;/li&gt;
             &lt;/ul&gt;
           &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                      Enable Body scrolling and backdrop
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                        Enable both scrolling &amp; backdrop
                                    </button>

                                    <div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105] [--body-scroll:true]" tabindex="-1" data-hs-overlay-scroll="true">
                                      <div class="ti-offcanvas-header">
                                          <h6 class="ti-offcanvas-title">
                                            Notifications
                                          </h6>
                                          <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                              <span class="sr-only">Close modal</span>
                                              <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                              </svg>
                                          </button>
                                      </div>
                                      <div class="ti-offcanvas-body !h-[90%] !p-0">
                                        <div>
                                            <ul class="list-group list-group-flush mb-0">
                                                <li class="list-group-item !border-t-0">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-primary !rounded-full">
                                                              NW
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">New Website Created<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">20 Nov 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>30 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">1 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>7 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-secondary !rounded-full">
                                                              M
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">5 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              OL
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">6 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>45 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-warning !rounded-full">
                                                              A
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">7 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>28 mins ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">10 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>14 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-danger !rounded-full">
                                                              CH
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-info !rounded-full">
                                                              S
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md !rounded-full">
                                                              <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full">
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                                <li class="list-group-item">
                                                  <div class="flex items-center">
                                                      <div class="me-2">
                                                          <span class="avatar avatar-md bg-success !rounded-full">
                                                              RC
                                                          </span>
                                                      </div>
                                                      <div class="flex-grow">
                                                          <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                          <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                      </div>
                                                  </div>
                                                </li>
                                            </ul>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-backdrop-with-scrolling"&gt;
        Enable both scrolling &amp; backdrop
    &lt;/button&gt;
    
    &lt;div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden !z-[105] [--body-scroll:true]" tabindex="-1" data-hs-overlay-scroll="true"&gt;
      &lt;div class="ti-offcanvas-header"&gt;
          &lt;h6 class="ti-offcanvas-title"&gt;
            Notifications
          &lt;/h6&gt;
          &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-backdrop-with-scrolling"&gt;
              &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
              &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
              &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
              &lt;/svg&gt;
          &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
        &lt;div&gt;
            &lt;ul class="list-group list-group-flush mb-0"&gt;
                &lt;li class="list-group-item !border-t-0"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-primary !rounded-full"&gt;
                              NW
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-secondary !rounded-full"&gt;
                              M
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              OL
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-warning !rounded-full"&gt;
                              A
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                              CH
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                              S
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md !rounded-full"&gt;
                              &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class="list-group-item"&gt;
                  &lt;div class="flex items-center"&gt;
                      &lt;div class="me-2"&gt;
                          &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                              RC
                          &lt;/span&gt;
                      &lt;/div&gt;
                      &lt;div class="flex-grow"&gt;
                          &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                          &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header justify-between">
                                    <div class="box-title">
                                        Placement
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-top">
                                        Toggle top offcanvas
                                    </button>


                                    <div id="hs-overlay-top" class="hs-overlay hidden ti-offcanvas ti-offcanvas-top !z-[105]" tabindex="-1">
                                        <div class="ti-offcanvas-header">
                                          <h5 class="ti-offcanvas-title">
                                            Offcanvas top
                                          </h5>
                                          <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-top">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                            </svg>
                                          </button>
                                        </div>
                                        <div class="ti-offcanvas-body !h-[90%]">
                                          <p class="text-gray-800">
                                            ...
                                          </p>
                                        </div>
                                    </div>
                                    <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-right">
                                    Toggle right offcanvas
                                    </button>
                                    <div id="hs-overlay-right" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
                                        <div class="ti-offcanvas-header">
                                            <h5 class="ti-offcanvas-title">
                                              Notifications
                                            </h5>
                                            <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-right">
                                                <span class="sr-only">Close modal</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="ti-offcanvas-body !h-[90%] !p-0">
                                            <div>
                                                <ul class="list-group list-group-flush mb-0">
                                                    <li class="list-group-item !border-t-0">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-primary !rounded-full">
                                                                  NW
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">New Website Created<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">20 Nov 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>30 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger !rounded-full">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success !rounded-full">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">1 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>7 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-secondary !rounded-full">
                                                                  M
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">5 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  OL
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">6 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>45 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-warning !rounded-full">
                                                                  A
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">7 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>28 mins ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">10 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>14 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-danger !rounded-full">
                                                                  CH
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">3 Jan 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>2 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-info !rounded-full">
                                                                  S
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">17 Feb 2023</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>3 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md !rounded-full">
                                                                  <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full">
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">29 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <div class="flex items-center">
                                                          <div class="me-2">
                                                              <span class="avatar avatar-md bg-success !rounded-full">
                                                                  RC
                                                              </span>
                                                          </div>
                                                          <div class="flex-grow">
                                                              <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left">31 Dec 2022</span></p>
                                                              <span class="text-[0.75rem] text-[#8c9097]"><i class="ri-time-line align-middle me-1 inline-block"></i>4 hrs ago</span>
                                                          </div>
                                                      </div>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </div>
                                    <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-bottom">
                                        Toggle bottom offcanvas
                                    </button>

                                    <div id="hs-overlay-bottom" class="hs-overlay hidden ti-offcanvas ti-offcanvas-bottom !z-[105]" tabindex="-1">
                                        <div class="ti-offcanvas-header">
                                          <h5 class="ti-offcanvas-title">
                                            Offcanvas title
                                          </h5>
                                          <button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-bottom">
                                            <span class="sr-only">Close modal</span>
                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                            </svg>
                                          </button>
                                        </div>
                                        <div class="ti-offcanvas-body !h-[90%]">
                                          <p class="text-gray-800">
                                            ...
                                          </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-top"&gt;
        Toggle top offcanvas
    &lt;/button&gt;
    
    
    &lt;div id="hs-overlay-top" class="hs-overlay hidden ti-offcanvas ti-offcanvas-top !z-[105]" tabindex="-1"&gt;
        &lt;div class="ti-offcanvas-header"&gt;
            &lt;h5 class="ti-offcanvas-title"&gt;
            Offcanvas top
            &lt;/h5&gt;
            &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-top"&gt;
            &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
            &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
            &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="ti-offcanvas-body !h-[90%]"&gt;
            &lt;p class="text-gray-800"&gt;
            ...
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-right"&gt;
    Toggle right offcanvas
    &lt;/button&gt;
    &lt;div id="hs-overlay-right" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1"&gt;
        &lt;div class="ti-offcanvas-header"&gt;
            &lt;h5 class="ti-offcanvas-title"&gt;
                Notifications
            &lt;/h5&gt;
            &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-right"&gt;
                &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
                &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="ti-offcanvas-body !h-[90%] !p-0"&gt;
            &lt;div&gt;
                &lt;ul class="list-group list-group-flush mb-0"&gt;
                    &lt;li class="list-group-item !border-t-0"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-primary !rounded-full"&gt;
                                    NW
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;New Website Created&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;20 Nov 2022&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;30 mins ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                                    CH
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                    S
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md !rounded-full"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="" class="!rounded-full"&gt;
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                                    RC
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md !rounded-full"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="" class="!rounded-full"&gt;
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Brenda New product launching&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;1 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;7 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-secondary !rounded-full"&gt;
                                    M
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Medeleine Hey! there i'm available&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;5 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                    OL
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Olivia New schedule release&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;6 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;45 mins ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-warning !rounded-full"&gt;
                                    A
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Kamala Preparing for new admin launch&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;7 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;28 mins ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md !rounded-full"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="" class="!rounded-full"&gt;
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Oisha Meeting with clinet for dinner&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;10 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;14 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-danger !rounded-full"&gt;
                                    CH
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Prepare for the new project&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;3 Jan 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;2 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-info !rounded-full"&gt;
                                    S
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Decide the live discussion&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;17 Feb 2023&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;3 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md !rounded-full"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="" class="!rounded-full"&gt;
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Meeting at 3:00 pm&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;29 Dec 2022&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class="list-group-item"&gt;
                        &lt;div class="flex items-center"&gt;
                            &lt;div class="me-2"&gt;
                                &lt;span class="avatar avatar-md bg-success !rounded-full"&gt;
                                    RC
                                &lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div class="flex-grow"&gt;
                                &lt;p class="font-semibold mb-0"&gt;Prepare for presentation&lt;span class="badge bg-light text-[#8c9097] ltr:float-right rtl:float-left"&gt;31 Dec 2022&lt;/span&gt;&lt;/p&gt;
                                &lt;span class="text-[0.75rem] text-[#8c9097]"&gt;&lt;i class="ri-time-line align-middle me-1 inline-block"&gt;&lt;/i&gt;4 hrs ago&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/li&gt;
                &lt;/ul&gt;
                &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-overlay-bottom"&gt;
        Toggle bottom offcanvas
    &lt;/button&gt;
    
    &lt;div id="hs-overlay-bottom" class="hs-overlay hidden ti-offcanvas ti-offcanvas-bottom !z-[105]" tabindex="-1"&gt;
        &lt;div class="ti-offcanvas-header"&gt;
            &lt;h5 class="ti-offcanvas-title"&gt;
            Offcanvas title
            &lt;/h5&gt;
            &lt;button type="button" class="ti-btn flex-shrink-0 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white" data-hs-overlay="#hs-overlay-bottom"&gt;
            &lt;span class="sr-only"&gt;Close modal&lt;/span&gt;
            &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
            &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="ti-offcanvas-body !h-[90%]"&gt;
            &lt;p class="text-gray-800"&gt;
            ...
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

@endsection

@section('scripts')

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')
        

@endsection