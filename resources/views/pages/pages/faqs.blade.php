@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Faq's</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Pages
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Faq's
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <!-- Start::row-1 -->
                      <div class="grid grid-cols-12 mb-[3rem] !mx-auto">
                          <div class="xl:col-span-12 col-span-12">
                              <div class="grid grid-cols-12 !mx-auto">
                                <div class="xl:col-span-3 col-span-12"></div>
                                  <div class="xl:col-span-6 col-span-12">
                                      <div class="text-center p-4 faq-header mb-6">
                                          <h5 class="mb-1 text-[1.25rem] text-primary opacity-[5] font-semibold">F.A.Q's</h5>
                                          <h4 class="mb-1 text-[1.5rem] text-defaulttextcolor font-semibold">Frequently Asked Questions</h4>
                                          <p class="text-[.9375rem] text-[#8c9097] opacity-[7]">We have shared some of the most frequently asked questions to help you out! </p>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-3 col-span-12"></div>
                              </div>
                          </div>
                          <div class="xl:col-span-1 col-span-12"></div>
                          <div class="xl:col-span-10 col-span-12">
                              <div class="grid grid-cols-12 gap-x-6">
                                  <div class="xl:col-span-6 col-span-12">
                                      <div class="box">
                                          <div class="box-header">
                                              <div class="box-title">
                                                  General Topics ?
                                              </div>
                                          </div>
                                          <div class="box-body">
                                              <div class="hs-accordion-group">
                                                  <div class="hs-accordion active overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-1">
                                                    <button
                                                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                      aria-controls="hs-accordion-collapse-1" type="button">
                                                      Where can I subscribe to your newsletter?
                                                      <svg
                                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                      <svg
                                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                    </button>
                                                    <div id="hs-accordion-collapse-1"
                                                      class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                      aria-labelledby="hs-accordion-heading-1">
                                                      <p class="text-gray-800 py-4 px-5">
                                                      <strong>This is the first item's accordion body.</strong> It is shown by
                                                              default, until the collapse plugin adds the appropriate classes that we
                                                              use to style each element
                                                              <code>.accordion-body</code>, though the transition does limit overflow.
                                                          </p>
                                                    </div>
                                                  </div>
                                                  <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-2">
                                                    <button
                                                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                      aria-controls="hs-accordion-collapse-2" type="button">
                                                      Where can in edit my address?
                                                      <svg
                                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                      <svg
                                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                    </button>
                                                    <div id="hs-accordion-collapse-2"
                                                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                      aria-labelledby="hs-accordion-heading-2">
                                                      <p class="text-gray-800 py-4 px-5">
                                                          <strong>This is the first item's accordion body.</strong> It is shown by
                                                          default, until the collapse plugin adds the appropriate classes that we
                                                          use to style each element
                                                          <code>.accordion-body</code>, though the transition does limit overflow.
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-3">
                                                    <button
                                                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                      aria-controls="hs-accordion-collapse-3" type="button">
                                                      What are your opening hours?
                                                      <svg
                                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                      <svg
                                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                    </button>
                                                    <div id="hs-accordion-collapse-3"
                                                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                      aria-labelledby="hs-accordion-heading-3">
                                                      <p class="text-gray-800 py-4 px-5">
                                                          <strong>This is the first item's accordion body.</strong> It is shown by
                                                          default, until the collapse plugin adds the appropriate classes that we
                                                          use to style each element
                                                          <code>.accordion-body</code>, though the transition does limit overflow.
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-4">
                                                      <button
                                                        class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                        aria-controls="hs-accordion-collapse-4" type="button">
                                                        Do I have the right to return an item?
                                                        <svg
                                                          class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                        </svg>
                                                        <svg
                                                          class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                        </svg>
                                                      </button>
                                                      <div id="hs-accordion-collapse-4"
                                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                        aria-labelledby="hs-accordion-heading-4">
                                                        <p class="text-gray-800 py-4 px-5">
                                                          <strong>This is the first item's accordion body.</strong> It is shown by
                                                          default, until the collapse plugin adds the appropriate classes that we
                                                          use to style each element
                                                          <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </p>
                                                      </div>
                                                    </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-6 col-span-12">
                                      <div class="box">
                                          <div class="box-header">
                                              <div class="box-title">
                                                  Customer Support ?
                                              </div>
                                          </div>
                                          <div class="box-body">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion active overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-one">
                                                  <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                    aria-controls="hs-accordion-collapse-one" type="button">
                                                    What is the order procedure?
                                                    <svg
                                                      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                  </button>
                                                  <div id="hs-accordion-collapse-one"
                                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-accordion-heading-one">
                                                    <p class="text-gray-800 py-4 px-5">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </p>
                                                  </div>
                                                </div>
                                                <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-two">
                                                  <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                    aria-controls="hs-accordion-collapse-two" type="button">
                                                    How and when do I receive the invoices?
                                                    <svg
                                                      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                  </button>
                                                  <div id="hs-accordion-collapse-two"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-accordion-heading-two">
                                                    <p class="text-gray-800 py-4 px-5">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </p>
                                                  </div>
                                                </div>
                                                <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-three">
                                                  <button
                                                    class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                    aria-controls="hs-accordion-collapse-three" type="button">
                                                    Which method of ordering is best for me?
                                                    <svg
                                                      class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                    <svg
                                                      class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                      width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                    </svg>
                                                  </button>
                                                  <div id="hs-accordion-collapse-three"
                                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                    aria-labelledby="hs-accordion-heading-three">
                                                    <p class="text-gray-800 py-4 px-5">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                            default, until the collapse plugin adds the appropriate classes that we
                                                            use to style each element
                                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </p>
                                                  </div>
                                                </div>
                                                <div class="hs-accordion overflow-hidden  border -mt-px first:rounded-t-sm last:rounded-b-sm" id="hs-accordion-heading-four">
                                                    <button
                                                      class="hs-accordion-toggle hs-accordion-active:text-primary hs-accordion-active:bg-primary/10 group py-4 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-start text-gray-800 transition hover:text-gray-500"
                                                      aria-controls="hs-accordion-collapse-four" type="button">
                                                      What does an order cost?
                                                      <svg
                                                        class="hs-accordion-active:hidden hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary block w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                      <svg
                                                        class="hs-accordion-active:block hs-accordion-active:text-primary hs-accordion-active:group-hover:text-primary hidden w-3 h-3 text-gray-600 group-hover:text-gray-500"
                                                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                      </svg>
                                                    </button>
                                                    <div id="hs-accordion-collapse-four"
                                                      class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                      aria-labelledby="hs-accordion-heading-four">
                                                      <p class="text-gray-800 py-4 px-5">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                                        default, until the collapse plugin adds the appropriate classes that we
                                                        use to style each element
                                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                                      </p>
                                                    </div>
                                                  </div>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="xl:col-span-12 col-span-12">
                                      <div class="box">
                                          <div class="box-header">
                                              <div class="box-title">
                                                  Still Have Questions ?
                                                  <span class="subtitle font-normal text-[#8c9097] block text-[0.75rem]">
                                                      You can post your questions here,our support team is always active.
                                                  </span>
                                              </div>
                                          </div>
                                          <div class="box-body">
                                              <div class="grid grid-cols-12 gap-4">
                                                  <div class="xl:col-span-6 col-span-12">
                                                      <label for="user-name" class="form-label">Your Name</label>
                                                      <input type="text" class="form-control w-full !rounded-md form-control-light" id="user-name" placeholder="Enter Your Name">
                                                  </div>
                                                  <div class="xl:col-span-6 col-span-12">
                                                      <label for="user-email" class="form-label">Email Id</label>
                                                      <input type="text" class="form-control w-full !rounded-md form-control-light" id="user-email" placeholder="Enter Email">
                                                  </div>
                                                  <div class="xl:col-span-12 col-span-12">
                                                      <label for="text-area" class="form-label">Textarea</label>
                                                      <textarea class="form-control w-full !rounded-md form-control-light" placeholder="Enter your question here" id="text-area" rows="2"></textarea>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="box-footer">
                                              <button type="button" class="ti-btn bg-primary text-white ltr:float-right rtl:float-left">Send</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-1"></div>
                      </div>
                      <!--End::row-1 -->

@endsection

@section('scripts')


@endsection