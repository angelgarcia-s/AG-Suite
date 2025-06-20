@extends('layouts.master')

@section('styles')
 
        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Tom Select Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Job Post</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Jobs
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Job Post
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-6">
                            <div class="xxl:col-span-9 xl:col-span-8 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header justify-between">
                                        <div class="box-title">
                                            Post New Job
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 sm:gap-6 mb-4">
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="job-title" class="form-label">Job Title</label>
                                                <input type="text" class="form-control" id="job-title" placeholder="Job Title" value="Web Developer">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Job Category</label>
                                                <select class="form-control" data-trigger name="Category-select">
                                                    <option value="Choice 1">Development</option>
                                                    <option value="Choice 2">Marketing</option>
                                                    <option value="Choice 3">IT Software</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Working Experience</label>
                                                <select class="form-control" data-trigger name="Experience">
                                                    <option value="Choice 1">0 - 1 Years</option>
                                                    <option value="Choice 2">1 - 3 Years</option>
                                                    <option value="Choice 3">3 - 5 Years</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Job Type</label>
                                                <select class="form-control" data-trigger name="jobtype">
                                                    <option value="Choice 1">Contract</option>
                                                    <option value="Choice 2">Freelance</option>
                                                    <option value="Choice 3">Full Time</option>
                                                    <option value="Choice 4">Part Time</option>
                                                    <option value="Choice 5">Internship</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Priority</label>
                                                <select class="form-control" data-trigger name="Priority">
                                                    <option value="Choice 1">Normal</option>
                                                    <option value="Choice 2">Urgent</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Vacancies</label>
                                                <select class="form-control" data-trigger name="Vacancies">
                                                    <option value="Choice 2">10</option>
                                                    <option value="Choice 3">20</option>
                                                    <option value="Choice 4">30</option>
                                                    <option value="Choice 5">40</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Salary</label>
                                                <select class="form-control" data-trigger name="Salary">
                                                    <option value="Choice 2">0 - $1,00,000 / Year</option>
                                                    <option value="Choice 3">$1,00,000 - $3,00,000 / Year</option>
                                                    <option value="Choice 4">$3,00,000 - $5,00,000 / Year</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="skills" class="form-label">Skills :</label>
                                                <select class="form-control" name="skills" id="skills" multiple>
                                                <option value="Choice 1" selected>HTML</option>
                                                <option value="Choice 2" selected>CSS</option>
                                                <option value="Choice 3" selected>JavaScript</option>
                                                <option value="Choice 4">React</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Job Deadline</label>
                                                <input type="text" class="form-control"  placeholder="Job Deadline">
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Gender Requirement</label>
                                                <select class="form-control" data-trigger name="gender">
                                                    <option value="Choice 2">No Preferences</option>
                                                    <option value="Choice 3">Male Only</option>
                                                    <option value="Choice 4">Female Only</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label for="language" class="form-label">Languages :</label>
                                                <select class="form-control" name="language" id="language" multiple>
                                                <option value="Choice 1" selected>English</option>
                                                <option value="Choice 2">French</option>
                                                <option value="Choice 3">Arabic</option>
                                                <option value="Choice 4" selected>Hindi</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-6 col-span-12">
                                                <label class="form-label">Qualification :</label>
                                                <select class="form-control" name="Qualification" id="qualification" multiple>
                                                <option value="Choice 1" selected>Graduate</option>
                                                <option value="Choice 2">Diploma</option>
                                                <option value="Choice 3" selected>MBA</option>
                                                <option value="Choice 4" selected>MCA</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Job Description :</label>
                                                <textarea class="form-control" id="job-description" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sit impedit, officiis non minima saepe voluptates a magnam enim sequi porro veniam ea suscipit dolorum vel mollitia voluptate iste nemo!</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer text-end">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full btn-wave waves-effect waves-light">
                                            <i class="bi bi-plus-circle"></i> Post Job
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="xxl:col-span-3 xl:col-span-4 col-span-12">
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">Assign To Employer</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label class="form-label">Employer Name</label>
                                            <select class="form-control" data-trigger>
                                                <option value="Choice 1">Obligation Pvt.Ltd</option>
                                                <option value="Choice 2">Voluptatem Pvt.Ltd</option>
                                                <option value="Choice 3">BloomTech.Inc</option>
                                                <option value="Choice 4">Spotech Technical Solutions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="box custom-box">
                                    <div class="box-header">
                                        <div class="box-title">Company Details</div>
                                    </div>
                                    <div class="box-body">
                                        <div class="grid grid-cols-12 gap-4">
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Company Name</label>
                                                <input type="text" class="form-control" placeholder="Company Name" value="Obligation Pvt.Ltd">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Company Website</label>
                                                <input type="text" class="form-control" placeholder="Company Website" value="http//www.obligationpvtltd.com">
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Country</label>
                                                <select class="form-control" data-trigger name="Country">
                                                    <option value="Choice 2">India</option>
                                                    <option value="Choice 3">USA</option>
                                                    <option value="Choice 4">Germany</option>
                                                    <option value="Choice 5">Spain</option>
                                                    <option value="Choice 6">Urgentina</option>
                                                </select>
                                            </div>
                                            <div class="xl:col-span-12 col-span-12">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="Company Address" value="USA">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->

@endsection

@section('scripts')

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Job Post JS -->
        @vite('resources/assets/js/jobs-post.js')
        

@endsection