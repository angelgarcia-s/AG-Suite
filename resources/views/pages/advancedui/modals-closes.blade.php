@extends('layouts.master')

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
 
                            <!-- Page Header -->
                            <div class="block justify-between page-header md:flex">
                                <div>
                                    <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Modal &amp; Closes</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-[0.813rem] ps-[0.5rem]">
                                      <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                      Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                      </a>
                                    </li>
                                    <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                      Modal &amp; Closes
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
                                            Basic Modal
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                          <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#todo-compose">Launch demo modal
                                          </a>
                                          <div id="todo-compose" class="hs-overlay hidden ti-modal">
                                              <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                <div class="ti-modal-content">
                                                  <div class="ti-modal-header">
                                                      <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal title</h6>
                                                        <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#todo-compose">
                                                          <span class="sr-only">Close</span>
                                                          <i class="ri-close-line"></i>
                                                        </button>
                                                  </div>
                                                  <div class="ti-modal-body px-4">
                                                      ...
                                                  </div>
                                                  <div class="ti-modal-footer">
                                                      <button type="button"
                                                      class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                      data-hs-overlay="#todo-compose">
                                                      Close
                                                    </button>
                                                      <button type="button" class="ti-btn bg-primary text-white !font-medium">Save Changes</button>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#todo-compose"&gt;Launch demo modal
      &lt;/a&gt;
      &lt;div id="todo-compose" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
              &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel"&gt;Modal title&lt;/h6&gt;
                      &lt;button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#todo-compose"&gt;
                      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body px-4"&gt;
                  ...
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                  &lt;button type="button"
                  class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                  data-hs-overlay="#todo-compose"&gt;
                  Close
                  &lt;/button&gt;
                  &lt;button type="button" class="ti-btn bg-primary text-white !font-medium"&gt;Save Changes&lt;/button&gt;
              &lt;/div&gt;
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
                                            Static backdrop
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                          <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full " data-hs-overlay="#staticBackdrop">Launch static backdrop modal
                                          </a>
                                          <div id="staticBackdrop" class="hs-overlay hidden ti-modal  [--overlay-backdrop:static]">
                                              <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                <div class="ti-modal-content">
                                                  <div class="ti-modal-header">
                                                      <h6 class="modal-title text-[1rem] font-semibold">Modal title</h6>
                                                        <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#staticBackdrop">
                                                          <span class="sr-only">Close</span>
                                                          <i class="ri-close-line"></i>
                                                        </button>
                                                  </div>
                                                  <div class="ti-modal-body px-4">
                                                      <p>I will not close if you click outside me. Don't even try to
                                                          press
                                                          escape key.</p>
                                                  </div>
                                                  <div class="ti-modal-footer">
                                                      <button type="button"
                                                      class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                      data-hs-overlay="#staticBackdrop
                                                      
                                                      ">
                                                      Close
                                                    </button>
                                                      <button type="button" class="ti-btn bg-primary text-white !font-medium">Understood</button>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full " data-hs-overlay="#staticBackdrop"&gt;Launch static backdrop modal
      &lt;/a&gt;
      &lt;div id="staticBackdrop" class="hs-overlay hidden ti-modal  [--overlay-backdrop:static]"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
              &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title text-[1rem] font-semibold"&gt;Modal title&lt;/h6&gt;
                      &lt;button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#staticBackdrop"&gt;
                      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body px-4"&gt;
                  &lt;p&gt;I will not close if you click outside me. Don't even try to
                      press
                      escape key.&lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                  &lt;button type="button"
                  class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                  data-hs-overlay="#staticBackdrop
                  "&gt;
                  Close
                  &lt;/button&gt;
                  &lt;button type="button" class="ti-btn bg-primary text-white !font-medium"&gt;Understood&lt;/button&gt;
              &lt;/div&gt;
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
                                            Scrolling long content
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                      <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable"> Scrolling long content
                                      </a>
                                      <div id="exampleModalScrollable" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-7  ti-modal-box mt-0 ease-out">
                                            <div class="ti-modal-content">
                                              <div class="ti-modal-header">
                                                  <h6 class="modal-title text-[1rem] font-semibold">Modal title</h6>
                                                    <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#exampleModalScrollable">
                                                      <span class="sr-only">Close</span>
                                                      <i class="ri-close-line"></i>
                                                    </button>
                                              </div>
                                              <div class="ti-modal-body px-4">
                                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                      Libero
                                                      ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                                                      nisi
                                                      ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                                                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                                                      voluptatibus, ipsam quo est rerum modi quos expedita facere,
                                                      ex
                                                      tempore fuga similique ipsa blanditiis et accusamus
                                                      temporibus
                                                      commodi voluptas! Nobis veniam illo architecto expedita quam
                                                      ratione quaerat omnis. In, recusandae eos! Pariatur,
                                                      deleniti
                                                      quis ad nemo ipsam officia temporibus, doloribus fuga
                                                      asperiores
                                                      ratione distinctio velit alias hic modi praesentium aperiam
                                                      officiis eaque, accusamus aut. Accusantium assumenda,
                                                      commodi
                                                      nulla provident asperiores fugit inventore iste amet aut
                                                      placeat
                                                      consequatur reprehenderit. Ratione tenetur eligendi, quis
                                                      aperiam dolores magni iusto distinctio voluptatibus minus a
                                                      unde
                                                      at! Consequatur voluptatum in eaque obcaecati, impedit
                                                      accusantium ea soluta, excepturi, quasi quia commodi
                                                      blanditiis?
                                                      Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                                                      consequuntur quod quo veniam? Labore dignissimos reiciendis
                                                      accusamus recusandae est consequuntur iure.</p>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <p>Lorem ipsum dolor sit amet.</p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                  <button type="button"
                                                  class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                  data-hs-overlay="#exampleModalScrollable
                                                  
                                                  ">
                                                  Close
                                                </button>
                                                  <button type="button" class="ti-btn bg-primary text-white !font-medium">Save Changes</button>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable"&gt; Scrolling long content
      &lt;/a&gt;
      &lt;div id="exampleModalScrollable" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7  ti-modal-box mt-0 ease-out"&gt;
              &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title text-[1rem] font-semibold"&gt;Modal title&lt;/h6&gt;
                      &lt;button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#exampleModalScrollable"&gt;
                      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body px-4"&gt;
                  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Libero
                      ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                      nisi
                      ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
                  &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                      voluptatibus, ipsam quo est rerum modi quos expedita facere,
                      ex
                      tempore fuga similique ipsa blanditiis et accusamus
                      temporibus
                      commodi voluptas! Nobis veniam illo architecto expedita quam
                      ratione quaerat omnis. In, recusandae eos! Pariatur,
                      deleniti
                      quis ad nemo ipsam officia temporibus, doloribus fuga
                      asperiores
                      ratione distinctio velit alias hic modi praesentium aperiam
                      officiis eaque, accusamus aut. Accusantium assumenda,
                      commodi
                      nulla provident asperiores fugit inventore iste amet aut
                      placeat
                      consequatur reprehenderit. Ratione tenetur eligendi, quis
                      aperiam dolores magni iusto distinctio voluptatibus minus a
                      unde
                      at! Consequatur voluptatum in eaque obcaecati, impedit
                      accusantium ea soluta, excepturi, quasi quia commodi
                      blanditiis?
                      Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                      consequuntur quod quo veniam? Labore dignissimos reiciendis
                      accusamus recusandae est consequuntur iure.&lt;/p&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                  &lt;button type="button"
                  class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                  data-hs-overlay="#exampleModalScrollable
                  "&gt;
                  Close
                  &lt;/button&gt;
                  &lt;button type="button" class="ti-btn bg-primary text-white !font-medium"&gt;Save Changes&lt;/button&gt;
              &lt;/div&gt;
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
                                            Vertically centered modal
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-modal">
                                            Vertically centered modal
                                          </button>
                                        <div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h6 class="modal-title" id="staticBackdropLabel2">Modal title
                                                    </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                        Libero
                                                        ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                                                        nisi
                                                        ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-vertically-centered-modal">
                                                    Close
                                                  </button>
                                                  <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                    Save changes
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-modal"&gt;
          Vertically centered modal
        &lt;/button&gt;
      &lt;div id="hs-vertically-centered-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center"&gt;
            &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title" id="staticBackdropLabel2"&gt;Modal title
                  &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                  &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Libero
                      ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                      nisi
                      ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-vertically-centered-modal"&gt;
                  Close
                &lt;/button&gt;
                &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
                  Save changes
                &lt;/a&gt;
              &lt;/div&gt;
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
                                            Vertical Centered Scrollable
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                            Vertically centered scrollable modal
                                          </button>
                                          <div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center">
                                              <div class="max-h-full overflow-hidden ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h6 class="modal-title" id="staticBackdropLabel3">Modal title
                                                    </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                                                        voluptatibus, ipsam quo est rerum modi quos expedita facere,
                                                        ex
                                                        tempore fuga similique ipsa blanditiis et accusamus
                                                        temporibus
                                                        commodi voluptas! Nobis veniam illo architecto expedita quam
                                                        ratione quaerat omnis. In, recusandae eos! Pariatur,
                                                        deleniti
                                                        quis ad nemo ipsam officia temporibus, doloribus fuga
                                                        asperiores
                                                        ratione distinctio velit alias hic modi praesentium aperiam
                                                        officiis eaque, accusamus aut. Accusantium assumenda,
                                                        commodi
                                                        nulla provident asperiores fugit inventore iste amet aut
                                                        placeat
                                                        consequatur reprehenderit. Ratione tenetur eligendi, quis
                                                        aperiam dolores magni iusto distinctio voluptatibus minus a
                                                        unde
                                                        at! Consequatur voluptatum in eaque obcaecati, impedit
                                                        accusantium ea soluta, excepturi, quasi quia commodi
                                                        blanditiis?
                                                        Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                                                        consequuntur quod quo veniam? Labore dignissimos reiciendis
                                                        accusamus recusandae est consequuntur iure.</p>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                    Close
                                                  </button>
                                                  <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                    Save changes
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-scrollable-modal"&gt;
          Vertically centered scrollable modal
        &lt;/button&gt;
        &lt;div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out h-[calc(100%-3.5rem)] min-h-[calc(100%-3.5rem)] flex items-center"&gt;
            &lt;div class="max-h-full overflow-hidden ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title" id="staticBackdropLabel3"&gt;Modal title
                  &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-vertically-centered-scrollable-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                  &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                      voluptatibus, ipsam quo est rerum modi quos expedita facere,
                      ex
                      tempore fuga similique ipsa blanditiis et accusamus
                      temporibus
                      commodi voluptas! Nobis veniam illo architecto expedita quam
                      ratione quaerat omnis. In, recusandae eos! Pariatur,
                      deleniti
                      quis ad nemo ipsam officia temporibus, doloribus fuga
                      asperiores
                      ratione distinctio velit alias hic modi praesentium aperiam
                      officiis eaque, accusamus aut. Accusantium assumenda,
                      commodi
                      nulla provident asperiores fugit inventore iste amet aut
                      placeat
                      consequatur reprehenderit. Ratione tenetur eligendi, quis
                      aperiam dolores magni iusto distinctio voluptatibus minus a
                      unde
                      at! Consequatur voluptatum in eaque obcaecati, impedit
                      accusantium ea soluta, excepturi, quasi quia commodi
                      blanditiis?
                      Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                      consequuntur quod quo veniam? Labore dignissimos reiciendis
                      accusamus recusandae est consequuntur iure.&lt;/p&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;br&gt;
                  &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-vertically-centered-scrollable-modal"&gt;
                  Close
                &lt;/button&gt;
                &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
                  Save changes
                &lt;/a&gt;
              &lt;/div&gt;
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
                                            Tooltips and popovers
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable4">
                                            Launch demo modal
                                          </button>
                                        <div id="exampleModalScrollable4" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                              <div class="ti-modal-content w-full">
                                                <div class="ti-modal-header">
                                                    <h6 class="modal-title" id="staticBackdropLabel4">Modal title
                                                    </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#exampleModalScrollable4">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <h5>Popover in a modal</h5>
                                                    <div class="mb-4">This
                                                      <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]">
                                                          <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary me-2" href="javascript:void(0);">button
                                                              <div class="hs-tooltip-content ti-main-tooltip-content !p-0 !max-w-[276px]" role="tooltip">
                                                                  <div  class="!border-b !border-solid !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                                  <h6>Popover Title</h6>
                                                                  </div>
                                                                  <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover body content is set in this attribute.</p>
                                                              </div>
                                                            </a>
                                                        </div>
                                                        triggers a popover on click.</div>
                                                    <hr>
                                                    <h5>Tooltips in a modal</h5>
                                                    <div>
                                                      <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <p class="text-muted mb-0">
                                                            <a href="javascript:void(0);">
                                                              <span class="hs-tooltip-toggle !text-primary">
                                                                This link
                                                                  <span
                                                                      class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                                      role="tooltip">
                                                                      Tooltip
                                                                  </span>
                                                              </span>
                                                            </a>
                                                        </p>
                                                      </div> and
                                                      <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                        <p class="text-muted mb-0"> <a href="javascript:void(0);">
                                                              <span class="hs-tooltip-toggle !text-primary">
                                                                That link
                                                                  <span
                                                                      class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                                      role="tooltip">
                                                                      Tooltip
                                                                  </span>
                                                              </span>
                                                            </a>
                                                        </p>
                                                      </div>
                                                      have tooltips on hover.
                                                    </div>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#exampleModalScrollable4">
                                                    Close
                                                  </button>
                                                  <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                    Save changes
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable4"&gt;
          Launch demo modal
        &lt;/button&gt;
      &lt;div id="exampleModalScrollable4" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center"&gt;
            &lt;div class="ti-modal-content w-full"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title" id="staticBackdropLabel4"&gt;Modal title
                  &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#exampleModalScrollable4"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                  &lt;h5&gt;Popover in a modal&lt;/h5&gt;
                  &lt;div class="mb-4"&gt;This
                    &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                        &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary me-2" href="javascript:void(0);"&gt;button
                            &lt;div class="hs-tooltip-content ti-main-tooltip-content !p-0 !max-w-[276px]" role="tooltip"&gt;
                                &lt;div  class="!border-b !border-solid !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                                &lt;h6&gt;Popover Title&lt;/h6&gt;
                                &lt;/div&gt;
                                &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover body content is set in this attribute.&lt;/p&gt;
                            &lt;/div&gt;
                          &lt;/a&gt;
                      &lt;/div&gt;
                      triggers a popover on click.&lt;/div&gt;
                  &lt;hr&gt;
                  &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
                  &lt;div&gt;
                    &lt;div class="hs-tooltip ti-main-tooltip [--placement:top]"&gt;
                      &lt;p class="text-muted mb-0"&gt;
                          &lt;a href="javascript:void(0);"&gt;
                            &lt;span class="hs-tooltip-toggle !text-primary"&gt;
                              This link
                                &lt;span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                    role="tooltip"&gt;
                                    Tooltip
                                &lt;/span&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;
                      &lt;/p&gt;
                    &lt;/div&gt; and
                    &lt;div class="hs-tooltip ti-main-tooltip [--placement:top]"&gt;
                      &lt;p class="text-muted mb-0"&gt; &lt;a href="javascript:void(0);"&gt;
                            &lt;span class="hs-tooltip-toggle !text-primary"&gt;
                              That link
                                &lt;span
                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                    role="tooltip"&gt;
                                    Tooltip
                                &lt;/span&gt;
                            &lt;/span&gt;
                          &lt;/a&gt;
                      &lt;/p&gt;
                    &lt;/div&gt;
                    have tooltips on hover.
                  &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#exampleModalScrollable4"&gt;
                  Close
                &lt;/button&gt;
                &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
                  Save changes
                &lt;/a&gt;
              &lt;/div&gt;
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
                            <div class="xl:col-span-4 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Using the grid
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalgrid">
                                            Launch demo modal
                                          </button>
                                        <div id="exampleModalgrid" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center">
                                              <div class="ti-modal-content w-full">
                                                <div class="ti-modal-header">
                                                    <h6 class="modal-title">Modal title
                                                    </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#exampleModalgrid">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <div class="container-fluid">
                                                        <div class="grid grid-cols-3 gap-4">
                                                          <div class="rounded-sm bg-light border border-defaultborder p-4">01</div>
                                                          <div class="rounded-sm bg-light border border-defaultborder p-4">02</div>
                                                          <div class="rounded-sm bg-light border border-defaultborder p-4">03</div>
                                                          <div class="col-span-2 rounded-sm bg-light border border-defaultborder p-4">04</div>
                                                          <div class="rounded-sm bg-light border border-defaultborder p-4">05</div>
                                                          <div class="rounded-sm bg-light border border-defaultborder p-4">06</div>
                                                          <div class="col-span-2 rounded-sm bg-light border border-defaultborder p-4">07</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#exampleModalgrid">
                                                    Close
                                                  </button>
                                                  <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                                    Save changes
                                                  </a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalgrid"&gt;
          Launch demo modal
        &lt;/button&gt;
      &lt;div id="exampleModalgrid" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center"&gt;
            &lt;div class="ti-modal-content w-full"&gt;
              &lt;div class="ti-modal-header"&gt;
                  &lt;h6 class="modal-title"&gt;Modal title
                  &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#exampleModalgrid"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                  &lt;div class="container-fluid"&gt;
                      &lt;div class="grid grid-cols-3 gap-4"&gt;
                        &lt;div class="rounded-sm bg-light border border-defaultborder p-4"&gt;01&lt;/div&gt;
                        &lt;div class="rounded-sm bg-light border border-defaultborder p-4"&gt;02&lt;/div&gt;
                        &lt;div class="rounded-sm bg-light border border-defaultborder p-4"&gt;03&lt;/div&gt;
                        &lt;div class="col-span-2 rounded-sm bg-light border border-defaultborder p-4"&gt;04&lt;/div&gt;
                        &lt;div class="rounded-sm bg-light border border-defaultborder p-4"&gt;05&lt;/div&gt;
                        &lt;div class="rounded-sm bg-light border border-defaultborder p-4"&gt;06&lt;/div&gt;
                        &lt;div class="col-span-2 rounded-sm bg-light border border-defaultborder p-4"&gt;07&lt;/div&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#exampleModalgrid"&gt;
                  Close
                &lt;/button&gt;
                &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
                  Save changes
                &lt;/a&gt;
              &lt;/div&gt;
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
                                            Toggle between modals
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal">
                                            Open first modal
                                        </button>
                                          <div id="hs-toggle-between-modals-first-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                  <h6 class="ti-modal-title">
                                                    Modal 1
                                                  </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-toggle-between-modals-first-modal" data-hs-overlay-close>
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                  <p class="mt-1 text-gray-800">
                                                    Show a second modal and hide this one with the button below.
                                                  </p>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-second-modal">
                                                    Open second modal
                                                  </button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div id="hs-toggle-between-modals-second-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                  <h6 class="ti-modal-title">
                                                    Modal 2
                                                  </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-toggle-between-modals-second-modal" data-hs-overlay-close>
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                  <p class="mt-1 text-gray-800">
                                                    Hide this modal and show the first with the button below.
                                                  </p>
                                                </div>
                                                <div class="ti-modal-footer">
                                                  <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal">
                                                    Back to first
                                                  </button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal"&gt;
          Open first modal
      &lt;/button&gt;
        &lt;div id="hs-toggle-between-modals-first-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
            &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                &lt;h6 class="ti-modal-title"&gt;
                  Modal 1
                &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-toggle-between-modals-first-modal" data-hs-overlay-close&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                &lt;p class="mt-1 text-gray-800"&gt;
                  Show a second modal and hide this one with the button below.
                &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-second-modal"&gt;
                  Open second modal
                &lt;/button&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div id="hs-toggle-between-modals-second-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
            &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
                &lt;h6 class="ti-modal-title"&gt;
                  Modal 2
                &lt;/h6&gt;
                &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-toggle-between-modals-second-modal" data-hs-overlay-close&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
                &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
                &lt;p class="mt-1 text-gray-800"&gt;
                  Hide this modal and show the first with the button below.
                &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
                &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal"&gt;
                  Back to first
                &lt;/button&gt;
              &lt;/div&gt;
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
                                            Optional sizes
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                          <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-extralarge-modal">
                                            Extra Large modal
                                          </button>
                                          <div id="hs-extralarge-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                  <h6 class="ti-modal-title">
                                                    Modal title
                                                  </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                    data-hs-overlay="#hs-extralarge-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                  <p class="mt-1 text-gray-800">
                                                  ...
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-large-modal">
                                            Large modal
                                          </button>
                                          <div id="hs-large-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                  <h6 class="ti-modal-title">
                                                    Modal title
                                                  </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                    data-hs-overlay="#hs-large-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                  <p class="mt-1 text-gray-800">
                                                  ...
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-small-modal">
                                            small modal
                                          </button>
                                          <div id="hs-small-modal" class="hs-overlay hidden ti-modal">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                              <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                  <h6 class="ti-modal-title">
                                                    Modal title
                                                  </h6>
                                                  <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                    data-hs-overlay="#hs-small-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                    </svg>
                                                  </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                  <p class="mt-1 text-gray-800">
                                                    ...
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-extralarge-modal"&gt;
          Extra Large modal
      &lt;/button&gt;
      &lt;div id="hs-extralarge-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto"&gt;
          &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                  data-hs-overlay="#hs-extralarge-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                  xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path
                      d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                      fill="currentColor" /&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-large-modal"&gt;
          Large modal
      &lt;/button&gt;
      &lt;div id="hs-large-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto"&gt;
          &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                  data-hs-overlay="#hs-large-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                  xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path
                      d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                      fill="currentColor" /&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-small-modal"&gt;
          small modal
      &lt;/button&gt;
      &lt;div id="hs-small-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
          &lt;div class="ti-modal-content"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                  data-hs-overlay="#hs-small-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                  xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path
                      d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                      fill="currentColor" /&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
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
                            <div class="xl:col-span-12 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Fullscreen modal
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-full-screen-modal">
                                          Full screen
                                        </button>
                                        <div id="hs-full-screen-modal" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !m-0 !max-w-full !w-full">
                                            <div class="ti-modal-content !rounded-none">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                  Close
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-secondary-full"  data-hs-overlay="#hs-full-screen-modal-below-sm">
                                          Full screen below sm
                                        </button>
                                        <div id="hs-full-screen-modal-below-sm" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 max-w-full w-full !m-0 sm:hs-overlay-open:!mt-10 sm:!mt-0 sm:max-w-lg sm:!mx-auto">
                                            <div class="ti-modal-content sm:border sm:rounded-sm sm:shadow-sm sm:dark:border-white/10">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"  data-hs-overlay="#hs-full-screen-modal-below-sm">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                  </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-warning-full" data-hs-overlay="#hs-full-screen-modal-below-md">
                                          Full screen below md
                                        </button>
                                        <div id="hs-full-screen-modal-below-md" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 md:hs-overlay-open:!mt-10 md:!mt-0 md:!max-w-lg md:!mx-auto">
                                            <div class="ti-modal-content md:border md:rounded-sm md:shadow-sm md:dark:border-white/10">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-md">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                  </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal-below-lg">
                                          Full screen below lg
                                        </button>
                                        <div id="hs-full-screen-modal-below-lg" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 lg:hs-overlay-open:!mt-10 lg:!mt-0 lg:!max-w-lg lg:!mx-auto">
                                            <div class="ti-modal-content lg:border lg:rounded-sm lg:shadow-sm lg:dark:border-white/10">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-lg">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                  </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-success-full" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                          Full screen below xl
                                        </button>
                                        <div id="hs-full-screen-modal-below-xl" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xl:hs-overlay-open:!mt-10 xl:!mt-0 xl:!max-w-xl xl:!mx-auto">
                                            <div class="ti-modal-content xl:border xl:rounded-sm xl:shadow-sm xl:dark:border-white/10">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                  </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="m-1 ms-0 ti-btn ti-btn-danger-full" data-hs-overlay="#hs-full-screen-modal-below-xxl">
                                            Full screen below xxl
                                        </button>
                                        <div id="hs-full-screen-modal-below-xxl" class="hs-overlay hidden ti-modal">
                                          <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xxl:hs-overlay-open:!mt-10 xxl:!mt-0 xxl:!max-w-xl xxl:!mx-auto">
                                            <div class="ti-modal-content xxl:border xxl:rounded-sm xxl:shadow-sm xxl:dark:border-white/10">
                                              <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                  Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                                  <span class="sr-only">Close</span>
                                                  <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                  </svg>
                                                </button>
                                              </div>
                                              <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800">
                                                  ...
                                                </p>
                                              </div>
                                              <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                  </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
          Full screen
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !m-0 !max-w-full !w-full"&gt;
          &lt;div class="ti-modal-content !rounded-none"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
              &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-secondary-full"  data-hs-overlay="#hs-full-screen-modal-below-sm"&gt;
          Full screen below sm
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal-below-sm" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 max-w-full w-full !m-0 sm:hs-overlay-open:!mt-10 sm:!mt-0 sm:max-w-lg sm:!mx-auto"&gt;
          &lt;div class="ti-modal-content sm:border sm:rounded-sm sm:shadow-sm sm:dark:border-white/10"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn"  data-hs-overlay="#hs-full-screen-modal-below-sm"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
                  &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-warning-full" data-hs-overlay="#hs-full-screen-modal-below-md"&gt;
          Full screen below md
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal-below-md" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 md:hs-overlay-open:!mt-10 md:!mt-0 md:!max-w-lg md:!mx-auto"&gt;
          &lt;div class="ti-modal-content md:border md:rounded-sm md:shadow-sm md:dark:border-white/10"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-md"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
                  &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal-below-lg"&gt;
          Full screen below lg
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal-below-lg" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 lg:hs-overlay-open:!mt-10 lg:!mt-0 lg:!max-w-lg lg:!mx-auto"&gt;
          &lt;div class="ti-modal-content lg:border lg:rounded-sm lg:shadow-sm lg:dark:border-white/10"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-lg"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
                  &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-success-full" data-hs-overlay="#hs-full-screen-modal-below-xl"&gt;
          Full screen below xl
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal-below-xl" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xl:hs-overlay-open:!mt-10 xl:!mt-0 xl:!max-w-xl xl:!mx-auto"&gt;
          &lt;div class="ti-modal-content xl:border xl:rounded-sm xl:shadow-sm xl:dark:border-white/10"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
                  &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;
      &lt;button type="button" class="m-1 ms-0 ti-btn ti-btn-danger-full" data-hs-overlay="#hs-full-screen-modal-below-xxl"&gt;
          Full screen below xxl
      &lt;/button&gt;
      &lt;div id="hs-full-screen-modal-below-xxl" class="hs-overlay hidden ti-modal"&gt;
          &lt;div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xxl:hs-overlay-open:!mt-10 xxl:!mt-0 xxl:!max-w-xl xxl:!mx-auto"&gt;
          &lt;div class="ti-modal-content xxl:border xxl:rounded-sm xxl:shadow-sm xxl:dark:border-white/10"&gt;
              &lt;div class="ti-modal-header"&gt;
              &lt;h6 class="ti-modal-title"&gt;
                  Modal title
              &lt;/h6&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl"&gt;
                  &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                  &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                  &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
                  &lt;/svg&gt;
              &lt;/button&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-body"&gt;
              &lt;p class="mt-1 text-gray-800"&gt;
                  ...
              &lt;/p&gt;
              &lt;/div&gt;
              &lt;div class="ti-modal-footer"&gt;
              &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal"&gt;
                  Close
                  &lt;/button&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;/div&gt;
      &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-4 -->
                        <!-- Start:: row-5 -->
                        <h6 class="mb-3">Close Buttons:</h6>
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-4 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Basic Close
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-defaulttextcolor" data-hs-overlay="#formmodalmdo">
                                            <span class="sr-only">Close</span>
                                            <i class="ri-close-line"></i>
                                          </button>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
      &lt;button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-defaulttextcolor" data-hs-overlay="#formmodalmdo"&gt;
          &lt;span class="sr-only"&gt;Close&lt;/span&gt;
          &lt;i class="ri-close-line"&gt;&lt;/i&gt;
        &lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Disabel state
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] pointer-events-none" data-hs-overlay="#formmodalmdo">
                                            <span class="sr-only">Close</span>
                                            <i class="ri-close-line"></i>
                                          </button>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] pointer-events-none" data-hs-overlay="#formmodalmdo"&gt;
      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
    &lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-4 col-span-12">
                                <div class="box custom-box overflow-hidden">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            White variant
                                        </div>
                                        <div class="prism-toggle">
                                            <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body bg-black">
                                        <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-[#8c9097]" data-hs-overlay="#formmodalmdo">
                                            <span class="sr-only">Close</span>
                                            <i class="ri-close-line"></i>
                                          </button>
                                          <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] pointer-events-none" data-hs-overlay="#formmodalmdo">
                                            <span class="sr-only">Close</span>
                                            <i class="ri-close-line"></i>
                                          </button>
                                    </div>
                                    <div class="box-footer hidden border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-[#8c9097]" data-hs-overlay="#formmodalmdo"&gt;
      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] pointer-events-none" data-hs-overlay="#formmodalmdo"&gt;
      &lt;span class="sr-only"&gt;Close&lt;/span&gt;
      &lt;i class="ri-close-line"&gt;&lt;/i&gt;
    &lt;/button&gt;</code></pre>
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
        

        <!-- Modal JS -->
        @vite('resources/assets/js/modal.js')


@endsection