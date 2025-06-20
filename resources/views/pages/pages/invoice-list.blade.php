@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Invoice List</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                  Invoice
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                  Invoice List
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Manage Invoices
                                        </div>
                                        <div class="flex">
                                            <button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] !text-white !font-medium bg-primary"><i class="ri-add-line font-semibold align-middle me-1"></i> Create Invoice</button>
                                            <div class="hs-dropdown ti-dropdown ms-2">
                                                <button aria-label="button" type="button" class="ti-btn ti-btn-secondary ti-btn-sm" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">All Invoices</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Paid Invoices</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Pending Invoices</a></li>
                                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Overdue Invoices</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table whitespace-nowrap table-bordered min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-start">Client</th>
                                                        <th scope="col" class="text-start">Invoice ID</th>
                                                        <th scope="col" class="text-start">Issued Date</th>
                                                        <th scope="col" class="text-start">Amount</th>
                                                        <th scope="col" class="text-start">Status</th>
                                                        <th scope="col" class="text-start">Due Date</th>
                                                        <th scope="col" class="text-start">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Json Taylor</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">jsontaylor2416@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032901
                                                            </a>
                                                        </td>
                                                        <td>
                                                            25,Nov 2022
                                                        </td>
                                                        <td>
                                                            $212.45
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            25,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Suzika Stallone</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">suzikastallone3214@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032912
                                                            </a>
                                                        </td>
                                                        <td>
                                                            13,Nov 2022
                                                        </td>
                                                        <td>
                                                            $512.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-warning/10 text-warning">Pending</span>
                                                        </td>
                                                        <td>
                                                            13,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Roman Killon</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">romankillon143@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032945
                                                            </a>
                                                        </td>
                                                        <td>
                                                            30,Nov 2022
                                                        </td>
                                                        <td>
                                                            $2199.49
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-danger/10 text-danger">Overdue</span>
                                                        </td>
                                                        <td>
                                                            30,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Charlie Davieson</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">charliedavieson@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032922
                                                            </a>
                                                        </td>
                                                        <td>
                                                            18,Nov 2022
                                                        </td>
                                                        <td>
                                                            $1569.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            18,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Selena Deoyl</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">selenadeoyl114@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032932
                                                            </a>
                                                        </td>
                                                        <td>
                                                            18,Nov 2022
                                                        </td>
                                                        <td>
                                                            $4,873.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-primary/10 text-primary">Due By 1 Day</span>
                                                        </td>
                                                        <td>
                                                            18,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/7.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Kiara Advensh</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">kiaraadvensh87@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032978
                                                            </a>
                                                        </td>
                                                        <td>
                                                            02,Nov 2022
                                                        </td>
                                                        <td>
                                                            $1923.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            18,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Joseph Samurai</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">josephsamurai@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032919
                                                            </a>
                                                        </td>
                                                        <td>
                                                            15,Nov 2022
                                                        </td>
                                                        <td>
                                                            $1,623.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            15,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Kevin Powell</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">kevinpowell@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032931
                                                            </a>
                                                        </td>
                                                        <td>
                                                            21,Nov 2022
                                                        </td>
                                                        <td>
                                                            $3,423.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-warning/10 text-warning">Pending</span>
                                                        </td>
                                                        <td>
                                                            21,Dec 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="invoice-list border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <p class="mb-0 font-semibold">Darla Jung</p>
                                                                    <p class="mb-0 text-[.6875rem] text-[#8c9097]">darlajung555@gmail.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-semibold text-primary">
                                                                #SPK12032958
                                                            </a>
                                                        </td>
                                                        <td>
                                                            15,Oct 2022
                                                        </td>
                                                        <td>
                                                            $2,982.99
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            15,Nov 2022
                                                        </td>
                                                        <td>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-primary ti-btn-icon ti-btn-sm"><i class="ri-printer-line"></i></button>
                                                            <button aria-label="button" type="button" class="ti-btn ti-btn-danger ti-btn-icon ms-1 ti-btn-sm invoice-btn" ><i class="ri-delete-bin-5-line"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <nav aria-label="Page navigation">
                                            <ul class="ti-pagination ltr:float-right rtl:float-left mb-0">
                                                <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                                <li class="page-item"><a class="page-link active px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                                <li class="page-item hidden sm:block"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                                                <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-body !p-0">
                                        <div class="p-6 border-b border-dashed flex items-start">
                                            <div class="svg-icon-background bg-primary/10 me-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="svg-primary"><path d="M13,16H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2ZM9,10h2a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Zm12,2H18V3a1,1,0,0,0-.5-.87,1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0l-3,1.72-3-1.72a1,1,0,0,0-1,0A1,1,0,0,0,2,3V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V13A1,1,0,0,0,21,12ZM5,20a1,1,0,0,1-1-1V4.73L6,5.87a1.08,1.08,0,0,0,1,0l3-1.72,3,1.72a1.08,1.08,0,0,0,1,0l2-1.14V19a3,3,0,0,0,.18,1Zm15-1a1,1,0,0,1-2,0V14h2Zm-7-7H7a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">Total Invoices Amount
                                                    <span class="badge bg-primary text-white font-semibold ltr:float-right rtl:float-left">
                                                        12,345
                                                    </span>
                                                </h6>
                                                <div class="pb-0 mt-0">
                                                    <div>
                                                        <h4 class="text-[1.125rem] font-semibold mb-2">$<span class="count-up" data-count="192">192</span>.87K</h4>
                                                        <p class="text-[#8c9097] text-[.6875rem] mb-0 leading-none">
                                                            <span class="text-success me-1 font-semibold">
                                                                <i class="ri-arrow-up-s-line me-1 align-middle"></i>3.25%
                                                            </span>
                                                            <span>this month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-6 border-b border-dashed flex items-start">
                                            <div class="svg-icon-background bg-success/10 !fill-success me-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="svg-success"><path d="M11.5,20h-6a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1h5V7a3,3,0,0,0,3,3h3v5a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.29.29,0,0,0-.1,0A1.1,1.1,0,0,0,11.56,2H5.5a3,3,0,0,0-3,3V19a3,3,0,0,0,3,3h6a1,1,0,0,0,0-2Zm1-14.59L15.09,8H13.5a1,1,0,0,1-1-1ZM7.5,14h6a1,1,0,0,0,0-2h-6a1,1,0,0,0,0,2Zm4,2h-4a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2Zm-4-6h1a1,1,0,0,0,0-2h-1a1,1,0,0,0,0,2Zm13.71,6.29a1,1,0,0,0-1.42,0l-3.29,3.3-1.29-1.3a1,1,0,0,0-1.42,1.42l2,2a1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.21,16.29Z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">Total Paid Invoices
                                                    <span class="badge bg-success text-white font-semibold ltr:float-right rtl:float-left">
                                                        4,176
                                                    </span>
                                                </h6>
                                                <div>
                                                    <h4 class="text-[1.125rem] font-semibold mb-2">$<span class="count-up" data-count="68.83">68.83</span>K</h4>
                                                    <p class="text-[#8c9097] text-[.6875rem] mb-0 leading-none">
                                                        <span class="text-danger me-1 font-semibold">
                                                            <i class="ri-arrow-down-s-line me-1 align-middle"></i>1.16%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start p-6 border-b border-dashed">
                                            <div class="svg-icon-background bg-warning/10 !fill-warning me-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="svg-warning"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">Pending Invoices
                                                    <span class="badge bg-warning text-white font-semibold ltr:float-right rtl:float-left">
                                                        7,064
                                                    </span>
                                                </h6>
                                                <div>
                                                    <h4 class="text-[1.125rem] font-semibold mb-2">$<span class="count-up" data-count="81.57">81.57</span>K</h4>
                                                    <p class="text-[#8c9097] text-[.6875rem] mb-0 leading-none">
                                                        <span class="text-success me-1 font-semibold">
                                                            <i class="ri-arrow-up-s-line me-1 align-middle"></i>0.25%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start p-6 border-b border-dashed">
                                            <div class="svg-icon-background !bg-light me-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" class="svg-dark"><path d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z"/></svg>
                                            </div>
                                            <div class="flex-grow">
                                                <h6 class="mb-1 text-[0.75rem]">Overdue Invoices
                                                    <span class="badge bg-light text-default font-semibold ltr:float-right rtl:float-left">
                                                        1,105
                                                    </span>
                                                </h6>
                                                <div>
                                                    <h4 class="text-[1.125rem] font-semibold mb-2">$<span class="count-up" data-count="32.47">32.47</span>K</h4>
                                                    <p class="text-[#8c9097] text-[.6875rem] mb-0 leading-none">
                                                        <span class="text-success me-1 font-semibFold">
                                                            <i class="ri-arrow-down-s-line me-1 align-middle"></i>0.46%
                                                        </span>
                                                        <span>this month</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-6">
                                            <p class="text-[.9375rem] font-semibold">Invoice Stats <span class="text-[#8c9097] font-normal">(Last 6 months) :</span></p>
                                            <div id="invoice-list-stats"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

@endsection

@section('scripts')
 
        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Invoice List JS -->
        @vite('resources/assets/js/invoice-list.js')

        
@endsection