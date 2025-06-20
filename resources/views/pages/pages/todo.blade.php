@extends('layouts.master')

@section('styles')
 
        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Flat Picker css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> To Do List</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Pages
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    To Do List
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box">
                                    <div class="box-body !p-0">
                                        <div class="p-4 grid border-b border-dashed">
                                            <a href="javascript:void(0);" class="hs-dropdown-toggle py-2  px-3 ti-btn bg-primary text-white !font-medium w-full !mb-0" data-hs-overlay="#todo-compose"><i class="ri-add-circle-line !text-[1rem]"></i>Create New Task
                                            </a>
                                            <div id="todo-compose" class="hs-overlay hidden ti-modal">
                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                  <div class="ti-modal-content">
                                                    <div class="ti-modal-header">
                                                        <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Create Task</h6>
                                                          <button type="button" class="hs-dropdown-toggle !text-[1rem] !font-semibold !text-defaulttextcolor" data-hs-overlay="#todo-compose">
                                                            <span class="sr-only">Close</span>
                                                            <i class="ri-close-line"></i>
                                                          </button>
                                                    </div>
                                                    <div class="ti-modal-body !overflow-visible px-4">
                                                        <div class="grid grid-cols-12 gap-2">
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label for="task-name" class="ti-form-label">Task Name</label>
                                                                <input type="text" class="form-control w-full" id="task-name" placeholder="Task Name">
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label class="ti-form-label">Assigned To</label>
                                                                <select class="ti-form-select  !rounded-s-none" name="choices-multiple-remove-button"
                                                                  id="choices-multiple-remove-button" multiple>
                                                                  <option value="Choice 1" selected>Angelina May</option>
                                                                  <option value="Choice 2">Kiara advain</option>
                                                                  <option value="Choice 3">Hercules Jhon</option>
                                                                  <option value="Choice 4">Mayor Kim</option>
                                                                </select>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Assigned Date</label>
                                                                <div class="inline-flex w-full">
                                                                    <div class="input-group-text text-[#8c9097] !rounded-e-none border border-defaultborder"> <i class="ri-calendar-line"></i> </div>
                                                                    <input type="text" class="form-control w-full !rounded-s-none" id="addignedDate" placeholder="Choose date and time">
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-6 col-span-12">
                                                                <label class="ti-form-label">Target Date</label>
                                                                <div class="inline-flex w-full">
                                                                    <div class="input-group-text text-[#8c9097] !rounded-e-none border border-defaultborder"> <i class="ri-calendar-line"></i> </div>
                                                                    <input type="text" class="form-control w-full !rounded-s-none" id="targetDate" placeholder="Choose date and time">
                                                                </div>
                                                            </div>
                                                            <div class="xl:col-span-12 col-span-12">
                                                                <label class="ti-form-label">Priority</label>
                                                                <select class="ti-form-select todo-choice" data-trigger name="choices-single-default">
                                                                  <option value="">Select</option>
                                                                  <option value="Critical">Critical</option>
                                                                  <option value="High">High</option>
                                                                  <option value="Medium">Medium</option>
                                                                  <option value="Low">Low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ti-modal-footer">
                                                        <button type="button"
                                                        class="hs-dropdown-toggle ti-btn  ti-btn-light align-middle"
                                                        data-hs-overlay="#todo-compose">
                                                        Cancel
                                                      </button>
                                                        <button type="button" class="ti-btn bg-primary text-white !font-medium">Create</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-4 border-b border-dashed">
                                            <div class="input-group">
                                                <input type="text" class="form-control w-full !rounded-md !bg-light border-0 !rounded-e-none" placeholder="Search Task Here" aria-describedby="button-addon2">
                                                <button type="button" aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" id="button-addon2"><i class="ri-search-line text-[#8c9097]"></i></button>
                                            </div>
                                        </div>
                                        <div class="p-4 task-navigation border-b border-dashed">
                                            <ul class="list-none task-main-nav mb-0">
                                                <li class="!px-0 !pt-0">
                                                    <span class="text-[.6875rem] text-[#8c9097] opacity-[0.7] font-semibold">TASKS</span>
                                                </li>
                                                <li class="active">
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-task-line align-middle text-[.875rem]"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                All Tasks
                                                            </span>
                                                            <span class="badge bg-success/10 text-success rounded-full">167</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-star-line align-middle text-[.875rem]"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Starred
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-delete-bin-5-line align-middle text-[.875rem]"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Trash
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="!px-0 !pt-2">
                                                    <span class="text-[.6875rem] text-[#8c9097] op-7 font-semibold">CATEGORIES</span>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-primary"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Personal
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-secondary"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Work
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-warning"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Health &amp; Fitness
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-success"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Daily Goals
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="flex items-center">
                                                            <span class="me-2 leading-none">
                                                                <i class="ri-price-tag-line align-middle text-[.875rem] font-semibold text-danger"></i>
                                                            </span>
                                                            <span class="flex-grow whitespace-nowrap">
                                                                Financial Management
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="p-4 !flex items-center justify-center">
                                            <img src="{{asset('build/assets/images/media/media-66.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-9 col-span-12">
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="xl:col-span-12 col-span-12">
                                        <div class="box">
                                            <div class="box-body !p-0">
                                                <div class="md:flex px-4 py-6 items-center justify-between">
                                                    <div>
                                                        <h6 class="font-semibold mb-0 text-[1rem]">Tasks</h6>
                                                    </div>
                                                    <div class="mt-2 md:mt-0">
                                                        <nav class="-mb-0.5 sm:flex sm:space-x-6 rtl:space-x-reverse flex-wrap">
                                                            <a class="w-full flex sm:w-auto active hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md py-2 px-3 text-sm" href="javascript:void(0);" id="alltasks-item" data-hs-tab="#all-tasks" aria-controls="all-tasks">
                                                                All Tasks
                                                            </a>
                                                            <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3  text-sm" href="javascript:void(0);"  id="pending-item" data-hs-tab="#pending" aria-controls="pending">
                                                                Pending
                                                            </a>
                                                            <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3  text-sm" href="javascript:void(0);" id="in-progress-item" data-hs-tab="#in-progress" aria-controls="in-progress">
                                                                In Progress
                                                            </a>
                                                            <a class="w-full flex sm:w-auto hs-tab-active:font-semibold  hs-tab-active:text-primary hs-tab-active:bg-primary/10 rounded-md  py-2 px-3 text-sm" href="javascript:void(0);" id="completed-item" data-hs-tab="#completed" aria-controls="completed">
                                                                Completed
                                                            </a>
                                                          </nav>
                                                    </div>
                                                    <div class="mt-2 md:mt-0">
                                                        <div class="hs-dropdown ti-dropdown">
                                                            <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-light !mb-0" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </button>
                                                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Select All</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Share All</a></li>
                                                                <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-medium block" href="javascript:void(0);">Delete All</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:col-span-12 col-span-12">
                                    <div class="tab-content task-tabs-container">
                                        <div class="tab-pane show active !p-0" id="all-tasks" aria-labelledby="alltasks-item"
                                            role="tabpanel">
                                            <div class="grid grid-cols-12 gap-x-6" id="tasks-container">
                                                <div class="xl:col-span-4 col-span-12 task-card">
                                                    <div class="box task-pending-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>New Project Blueprint</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">13,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">20,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-warning/10 text-warning block">High</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Designing New Authentication Pages</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">26,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">12,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center">
                                                                    <a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Developing New Events in Plugin</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">5,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">10,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12 task-card">
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Design New Landing Pages </p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">21,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>New Plugin Development</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Oct 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Documentation For New Template</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">25,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">10,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-danger/10 text-danger block">Critical</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12 task-card">
                                                    <div class="box task-pending-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center">
                                                                    <a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Updating Old Ui</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">30,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">05,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-warning/10 text-warning block">High</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Designing Of New Ecommerce Pages</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">1,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">15,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Improving Ui Of Updated Templates</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">4,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">20,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 hidden" id="pending" aria-labelledby="pending-item"
                                            role="tabpanel">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-pending-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>New Project Blueprint</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">13,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">20,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-warning/10 text-warning block">High</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-pending-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center">
                                                                    <a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Updating Old Ui</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">30,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">05,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-warning/10 text-warning block">High</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 hidden" id="in-progress" >
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Design New Landing Pages </p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">21,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Designing New Authentication Pages</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">26,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">12,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-inprogress-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] me-1 text-warning"></i></a>Improving Ui Of Updated Templates</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">4,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">20,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane !p-0 hidden" id="completed" aria-labelledby="completed-item"
                                            role="tabpanel">
                                            <div class="grid grid-cols-12 gap-x-6">
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>New Plugin Development</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Oct 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">28,Nov 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Documentation For New Template</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">25,Nov 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">10,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-danger/10 text-danger block">Critical</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center">
                                                                    <a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Developing New Events in Plugin</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">5,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">10,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-primary/10 text-primary block">Medium</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="box task-completed-card">
                                                        <div class="box-body">
                                                            <div class="flex justify-between flex-wrap gap-2">
                                                                <div>
                                                                    <p class="font-semibold mb-4 flex items-center"><a aria-label="anchor" href="javascript:void(0);"><i class="ri-star-s-fill text-[1rem] opacity-[0.5] me-1 text-[#8c9097]"></i></a>Designing Of New Ecommerce Pages</p>
                                                                    <p class="mb-4">Assigned On : <span class="text-[0.75rem] mb-1 text-[#8c9097]">1,Dec 2022</span></p>
                                                                    <p class="mb-4">Target Date : <span class="text-[0.75rem] mb-1 text-[#8c9097]">15,Dec 2022</span></p>
                                                                    <p class="mb-0">Assigned To :
                                                                        <span class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                                                            </span>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div>
                                                                    <div class="btn-list">
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm  ti-btn-primary me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                        <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-danger me-0"><i class="ri-delete-bin-line"></i></button>
                                                                    </div>
                                                                    <span class="badge bg-success/10 text-success block">Low</span>
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
                                <nav aria-label="Page navigation">
                                    <ul class="ti-pagination ltr:float-right rtl:float-left mb-4">
                                        <li class="page-item disabled"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--End::row-1 -->
                       
@endsection

@section('scripts')
            
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Flat Picker JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Internal To-Do-List JS -->
        @vite('resources/assets/js/todolist.js')

    
@endsection