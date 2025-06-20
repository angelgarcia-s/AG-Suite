@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
        
                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Projects Overview</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Projects
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Projects Overview
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xl:col-span-9 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between flex">
                                        <div class="box-title">
                                            Project Details
                                        </div>
                                        <div>
                                            <a href="{{url('projects-create')}}" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-secondary btn-wave"><i class="ri-add-line align-middle me-1 font-semibold"></i>Create Project</a>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <h5 class="font-semibold mb-4 task-title">
                                            Ynex new angular project.
                                        </h5>
                                        <div class="text-[.9375rem] font-semibold mb-2">Project Description :</div>
                                        <p class="text-[#8c9097] task-description">The current website design needs a refresh to improve user experience and enhance visual appeal. The goal is to create a modern and responsive design that aligns with the latest web design trends. The updated design should ensure seamless navigation, easy readability, and a cohesive visual identity.</p>
                                        <div class="text-[.9375rem] font-semibold mb-2">Key tasks :</div>
                                        <div class="mb-3">
                                            <ul class="task-details-key-tasks ps-[2rem] mb-0">
                                                <li>Conducting a comprehensive analysis of the existing website design.</li>
                                                <li>Collaborating with the UI/UX team to develop wireframes and mockups.</li>
                                                <li>Iteratively refining the design based on feedback.</li>
                                                <li>Implementing the finalized design changes using HTML, CSS, and JavaScript.</li>
                                                <li>Testing the website across different devices and browsers.</li>
                                                <li>Conducting a final review to ensure all design elements are consistent and visually appealing.</li>
                                            </ul>
                                        </div>
                                        <div class="text-[.9375rem] font-semibold mb-2">Skills :</div>
                                        <div>
                                            <span class="badge bg-light text-default">UI/Ux</span>
                                            <span class="badge bg-light text-default">JavaScript</span>
                                            <span class="badge bg-light text-default">Responsive Design</span>
                                            <span class="badge bg-light text-default">Web Accessibility</span>
                                            <span class="badge bg-light text-default">Front-End Build Tools</span>
                                            <span class="badge bg-light text-default">RESTful APIs</span>
                                            <span class="badge bg-light text-default">Performance Testing</span>
                                            <span class="badge bg-light text-default">Angular</span>
                                            <span class="badge bg-light text-default">Vue.js</span>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="flex items-center justify-between gap-2 flex-wrap">
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">Project Manager</span>
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar avatar-xs !rounded-full">
                                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <span class="block text-[.875rem] font-semibold">S.K.Jacob</span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">Start Date</span>
                                                <span class="block text-[.875rem] font-semibold">22,June 2023</span>
                                            </div>
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">End Date</span>
                                                <span class="block text-[.875rem] font-semibold">10,July 2023</span>
                                            </div>
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">Assigned To</span>
                                                <div class="avatar-list-stacked">
                                                    <span class="avatar avatar-sm !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-sm !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">Status</span>
                                                <span class="block"><span class="badge bg-primary/10 text-primary">In Progress</span></span>
                                            </div>
                                            <div>
                                                <span class="block text-[#8c9097] text-[0.75rem]">Priority</span>
                                                <span class="block text-[.875rem] font-semibold"><span class="badge bg-success/10 text-success">Low</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">Project Discussions</div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="list-unstyled profile-timeline">
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm bg-primary/10 !text-primary !rounded-full profile-timeline-avatar">
                                                        E
                                                    </span>
                                                    <p class="mb-2">
                                                        <b>You</b> Commented on <b>Work Process</b> in this project <a class="text-secondary" href="javascript:void(0);"><u>#New Project</u></a>.<span class="float-end text-[0.6875rem] text-[#8c9097]">24,Dec 2023 - 14:34</span>
                                                    </p>
                                                    <p class="text-[#8c9097] mb-0">
                                                        Project is important and need to be completed on time to meet company work flow.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm  profile-timeline-avatar">
                                                        <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="" class="!rounded-full">
                                                    </span>
                                                    <p class="text-[#8c9097] mb-2">
                                                        <span class="text-default"><b>Json Smith</b> reacted to the project 👍</span>.<span class="float-end text-[0.6875rem] text-[#8c9097]">18,Dec 2023 - 12:16</span>
                                                    </p>
                                                    <p class="text-[#8c9097] mb-0">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm  profile-timeline-avatar">
                                                        <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="" class="!rounded-full">
                                                    </span>
                                                    <p class="text-[#8c9097] mb-2">
                                                        <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.<span class="float-end text-[0.6875rem] text-[#8c9097]">21,Dec 2023 - 15:32</span>
                                                    </p>
                                                    <p class="profile-activity-media flex items-center mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                        </a>
                                                            <span class="text-[.6875rem] text-[#8c9097]">432.87KB</span>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm bg-success/10 !text-success !rounded-full profile-timeline-avatar">
                                                        P
                                                    </span>
                                                    <p class="text-[#8c9097] mb-2 text-truncate">
                                                        <span class="text-default"><b>You</b> shared a post with 4 people <b>Simon,Sasha,Anagha,Hishen</b></span>.<span class="float-end text-[0.6875rem] text-[#8c9097]">28,Dec 2023 - 18:46</span>
                                                    </p>
                                                    <p class="profile-activity-media mb-2">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="">
                                                        </a>
                                                    </p>
                                                    <div>
                                                        <div class="avatar-list-stacked">
                                                            <span class="avatar avatar-sm !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                                            </span>
                                                            <span class="avatar avatar-sm !rounded-full">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="avatar avatar-sm profile-timeline-avatar">
                                                        <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="" class="!rounded-full">
                                                    </span>
                                                    <p class="mb-1">
                                                        <b>Json</b> Commented on Project <a class="text-secondary" href="javascript:void(0);"><u>#UI Technologies</u></a>.<span class="float-end text-[0.6875rem] text-[#8c9097]">24,Dec 2023 - 14:34</span>
                                                    </p>
                                                    <p class="text-[#8c9097]">Technology id developing rapidly keep up your work 👌</p>
                                                    <p class="profile-activity-media flex items-center mb-0">
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="">
                                                        </a>
                                                        <a aria-label="anchor" href="javascript:void(0);">
                                                            <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="">
                                                        </a>
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-footer">
                                        <div class="list-group-item">
                                            <div class="sm:flex items-center leading-none">
                                                <div class="me-4">
                                                    <span class="avatar avatar-md ">
                                                        <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" class="!rounded-full">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <div class="inline-flex !w-full">
                                                        <input type="text" class="form-control !w-full !rounded-e-none" placeholder="Post Anything" aria-label="Recipient's username with two button addons">
                                                        <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-emoji-smile"></i></button>
                                                        <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-paperclip"></i></button>
                                                        <button aria-label="button" type="button" class="!hidden sm:!flex ti-btn ti-btn-light !rounded-none !mb-0"><i class="bi bi-camera"></i></button>
                                                        <button class="ti-btn bg-primary text-white !mb-0 !rounded-s-none" type="button">Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-3 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Project Team
                                        </div>
                                        <div>
                                            <button type="button" class="ti-btn ti-btn-light !py-1 !px-2 !text-[0.75rem]"><i class="ri-add-line align-middle me-1 font-semibold"></i>Add Member</button>
                                        </div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <div class="table-responsive">
                                            <table class="table whitespace-nowrap min-w-full">
                                                <thead>
                                                    <tr>
                                                        <th scope="row" class="text-start">Name</th>
                                                        <th scope="row" class="text-start">Designation</th>
                                                        <th scope="row" class="text-start">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm ">
                                                                        <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="!rounded-full">
                                                                    </span>
                                                                </div>
                                                                <div class="font-semibold">Simon Conway</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-primary/10 text-primary">UI Developer</span>
                                                        </td>
                                                        <td>
                                                            <div class="inline-flex">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm !rounded-full">
                                                                        <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="font-semibold">Sasha Banks</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-pink/10 text-pink">Ui Designer</span>
                                                        </td>
                                                        <td>
                                                            <div class="inline-flex">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm !rounded-full">
                                                                        <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="font-semibold">Anagha May</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-warning/10 text-warning">UI Tester</span>
                                                        </td>
                                                        <td>
                                                            <div class="inline-flex">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border border-defaultborder">
                                                        <td>
                                                            <div class="flex items-center">
                                                                <div class="me-2 leading-none">
                                                                    <span class="avatar avatar-sm !rounded-full">
                                                                        <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="">
                                                                    </span>
                                                                </div>
                                                                <div class="font-semibold">Hishen Stuart</div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="badge bg-success/10 text-success">Angular Developer</span>
                                                        </td>
                                                        <td>
                                                            <div class="inline-flex">
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                                <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">Project Goals</div>
                                        <div class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-light btn-wave"><i class="ri-add-line align-middle me-1 font-semibold"></i>Add Goal</div>
                                    </div>
                                    <div class="box-body">
                                        <ul class="list-group ">
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked1" checked></div>
                                                    <div class="font-semibold">Increase Efficiency</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked2"></div>
                                                    <div class="font-semibold">Enhance Customer Satisfaction</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked3"></div>
                                                    <div class="font-semibold">Expand Market Reach</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked4"></div>
                                                    <div class="font-semibold">Improve Profitability</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked5" checked></div>
                                                    <div class="font-semibold">Enhance Product/Service Quality</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked6" checked></div>
                                                    <div class="font-semibold">Develop Innovative Solutions</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked7" checked></div>
                                                    <div class="font-semibold">Increase Employee Engagement</div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2"><input class="form-check-input form-checked-success" type="checkbox" value="" id="successChecked8"></div>
                                                    <div class="font-semibold">Enhance Brand Reputation</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4 text-center">
                                            <button type="button" class="ti-btn ti-btn-success-full btn-wave">View All</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box custom-box overflow-hidden">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Project Documents
                                        </div>
                                    </div>
                                    <div class="box-body !p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2">
                                                        <span class="avatar !rounded-full p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <a href="javascript:void(0);"><span class="block font-semibold">Full Project</span></a>
                                                        <span class="block text-[#8c9097] text-[0.75rem] font-normal">0.45MB</span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar !rounded-full bg-light">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <a href="javascript:void(0);"><span class="block font-semibold">assets.zip</span></a>
                                                        <span class="block text-[#8c9097] text-[0.75rem] font-normal">0.99MB</span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar !rounded-full p-2 bg-light">
                                                            <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <a href="javascript:void(0);"><span class="block font-semibold">image-1.png</span></a>
                                                        <span class="block text-[#8c9097] text-[0.75rem] font-normal">245KB</span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar !rounded-full bg-light">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <a href="javascript:void(0);"><span class="block font-semibold">doc.zip</span></a>
                                                        <span class="block text-[#8c9097] text-[0.75rem] font-normal">2MB</span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="flex items-center">
                                                    <div class="me-2 leading-none">
                                                        <span class="avatar !rounded-full bg-light">
                                                            <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow">
                                                        <a href="javascript:void(0);"><span class="block font-semibold">landing.zip</span></a>
                                                        <span class="block text-[#8c9097] text-[0.75rem] font-normal">3.46MB</span>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info me-[0.375rem]"><i class="ri-edit-line"></i></button>
                                                        <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

@endsection

@section('scripts')


@endsection