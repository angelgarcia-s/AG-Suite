@extends('layouts.master')

@section('styles')
 
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold">Job Candidate Details</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Jobs
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Job Candidate Details
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">
                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="sm:flex items-center sm:flex-wrap justify-between gap-2">
                                                <div class="md:flex">
                                                    <span class="avatar avatar-xxl !rounded-full">
                                                        <img src="{{asset('build/assets/images/faces/1.jpg')}}" class="!rounded-full img-fluid" alt="">
                                                    </span>
                                                    <div class="sm:ms-4">
                                                        <h4 class="font-bold mb-0 sm:flex items-center"><a href="javascript:void(0);"> Brenda Simpson <i class="bi bi-check-circle-fill text-success text-[1rem]"  title="Verified candidate"></i></a></h4>
                                                        <a href="javascript:void(0);" class="font-semibold"><i class="bi bi-briefcase me-1"></i> Software Developer</a>
                                                        <div class="flex items-center text-[.6875rem] text-[#8c9097]">
                                                            <p class="text-[.6875rem] mb-0">Ratings : </p>
                                                            <div class="min-w-fit sm:ms-2">
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                            </div>
                                                            <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                                <span>(142)</span>
                                                                <span>Ratings</span>
                                                            </a>
                                                        </div>
                                                        <div class="sm:flex text-[.875rem] mt-4">
                                                            <div>
                                                                <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>Banglore, Karnataka</p>
                                                                <p><i class="bi bi-briefcase me-2"></i>1 Year Experience</p>
                                                            </div>
                                                            <div class="sm:ms-4">
                                                                <p class="mb-1"><i class="bi bi-coin me-2"></i>Package (Yearly) :
                                                                    <span class="font-semibold"  title="Current Salary">$10,000</span>-
                                                                    <span class="font-semibold"  title="Expected Salary">$20,000</span>
                                                                </p>
                                                                <p><i class="bi bi-mortarboard me-2"></i>Graduate</p>
                                                            </div>
                                                        </div>
                                                        <div class="popular-tags">
                                                            <a href="javascript:void(0);" class="badge !rounded-full bg-info/10  text-info mb-2"><i class="bi bi-moon-stars me-1"></i>Full Time</a>
                                                            <a href="javascript:void(0);" class="badge !rounded-full bg-danger/10 text-danger mb-2"><i class="bi bi-clock me-1"></i> Immediate Joinee</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-list flex">
                                                    <a href="javascript:void(0);" class="ti-btn  ti-btn-primary-full me-2 whitespace-nowrap"><i class="bi bi-download me-1"></i> Download CV</a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-primary me-2">
                                                        <i class="ri-heart-line text-[.8125rem] align-middle"></i>
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-primary">
                                                        <i class="ri-share-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="lg:col-span-8 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                <h5 class="mb-0 font-semibold text-[1.375rem]">
                                                    Candidate Profile Information
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="box-body !p-0 candidate-edu-timeline">
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2 mb-4"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-briefcase text-[.8125rem]"></i></span> Career Objective :</h5>
                                                <div class="ms-6 ps-4">
                                                    <p class="opacity-[0.9] mb-4">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore.A officiis optio temporibus minima facilis...</p>
                                                    <p class="mb-0 opacity-[0.9]">Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore..</p>
                                                </div>
                                            </div>
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-mortarboard text-[.8125rem]"></i></span> Education :</h5>
                                                <div class="ms-6 ps-4">
                                                    <p class="font-semibold text-[.875rem] mb-0">Bachelors of science in computer science</p>
                                                    <div class="sm:flex gap-2">
                                                        <p class="mb-0">Dwayne University</p>
                                                        <p class="mb-0 text-[#8c9097]"><i class="bi bi-geo-alt text-[0.75rem]"></i> Nellore</p>
                                                    </div>
                                                    <p class="mb-4"> (2019 Mar - 2022 Apr)</p>
                                                    <p class="font-semibold text-[.875rem] mb-0">Intermediate (MPC)</p>
                                                    <div class="sm:flex gap-2">
                                                        <p class="mb-0">Sprect College</p>
                                                        <p class="mb-0 text-[#8c9097]"><i class="bi bi-geo-alt text-[0.75rem]"></i> Warangal</p>
                                                    </div>
                                                    <p class="mb-0"> (2017 Mar - 2019 Apr)</p>
                                                </div>
                                            </div>
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-award text-[.8125rem]"></i></span> Certifications :</h5>
                                                <div class="ms-6 ps-4">
                                                    <p class="font-semibold text-[.875rem] mb-0">Web Development (3 Months)</p>
                                                    <p class="mb-4">EMC Solutions Pvt Ltd</p>
                                                    <p class="font-semibold text-[.875rem] mb-0">Python Development (6 Months)</p>
                                                    <p class="mb-0">Dabre Services Pvt Ltd</p>
                                                </div>
                                            </div>
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-journal-medical text-[.8125rem]"></i></span> Publications :</h5>
                                                <div class="ms-4">
                                                    <ol class="list-group border-0 list-disc ps-[2rem]">
                                                        <li class="border-0 py-1"><span class="font-semibold">“One of a Kind Design,”</span> Web Design Book, Poulin Publishing, 2018</li>
                                                        <li class="border-0 py-1"><span class="font-semibold">“Website Design in 2019,”</span> A List Apart, June 2019</li>
                                                        <li class="border-0 py-1"><span class="font-semibold">“Usable Information Architecture,”</span> SitePoint, Feb 2019</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-activity text-[.8125rem]"></i></span> Activities and Interests :</h5>
                                                <div class="ms-4">
                                                    <ol class="list-group border-0 list-disc ps-[2rem]">
                                                        <li class="border-0 py-1">Community Involvement</li>
                                                        <li class="border-0 py-1">Yoga</li>
                                                        <li class="border-0 py-1">Travel</li>
                                                        <li class="border-0 py-1">Art</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-link-45deg text-[.8125rem]"></i></span> References :</h5>
                                                <div class="ms-6 ps-4">
                                                    <p class="mb-4"><span class="font-semibold ">Name : </span> Nicole Chiu</p>
                                                    <p class="mb-4"><span class="font-semibold ">Designation : </span> Software Developer</p>
                                                    <p class="mb-4"><span class="font-semibold ">Company Name : </span> Spotech Technical Solutions</p>
                                                    <p class="mb-4"><span class="font-semibold ">Mobile : </span> +91 7865443679</p>
                                                    <p class="mb-4"><span class="font-semibold ">Email : </span> nchiu@email.com</p>
                                                    <p class="mb-0"><span class="font-semibold">Location : </span> Hyderabad</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                <h5 class="mb-0 font-semibold">Experience Overview</h5>
                                            </div>
                                        </div>
                                        <div class="box-body !p-0 candidate-edu-timeline">
                                            <div class="p-6 border-b">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2 mb-4"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-briefcase text-[.8125rem]"></i></span> Experience :</h5>
                                                <div class="ms-6 ps-4">
                                                    <p class="font-semibold text-[.875rem] mb-0">Full Stack Developer (2019 Mar - 2022 Apr)</p>
                                                    <div class="sm:flex gap-2">
                                                        <p class="mb-4">Spotech Technical Solutions</p>
                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Kondapur, Hyderabad</p>
                                                    </div>
                                                    <p class="font-semibold mb-2">Responsibilities :</p>
                                                    <ol class="list-group border-0 list-disc ps-[2rem]">
                                                        <li class="border-0 py-1">Design thoughtful, beautiful, and useful software user interfaces and experiences in a team environment..</li>
                                                        <li class="border-0 py-1">Create user-centered designs by considering market analysis, customer feedback, and usability findings.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="p-6">
                                                <h5 class="font-semibold text-[1.0625rem] sm:flex items-center gap-2 mb-4"><span class="avatar !rounded-full bg-primary avatar-sm"><i class="bi bi-people text-[.8125rem]"></i></span> Volunteer Experience:</h5>
                                                <div class="ms-6 sm:ps-4">
                                                    <p class="font-semibold text-[.875rem] mb-0">Volunteer in the Student Organization</p>
                                                    <p class="mb-2 text-[#8c9097]"><i class="bi bi-geo-alt text-[0.75rem]"></i> Warangal, 2015</p>
                                                    <ol class="list-group border-0 list-disc ps-[2rem]">
                                                        <li class="border-0 py-1">In charge of Organizing activities for approximately 100+ internation schools in 2015</li>
                                                        <li class="border-0 py-1">In charge of Organizing activities for approximately 100+ internation schools in 2015</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box border !bg-primary/10 text-primary shadow-none">
                                        <div class="box-body">
                                            <div class="sm:grid grid-cols-12 items-center">
                                                <div class="lg:col-span-6 col-span-6">
                                                    <h5 class="font-semibold mb-0">🖐 Was this profile fit for someone?</h5>
                                                </div>
                                                <div class="lg:col-span-6 col-span-6 text-end">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-success-full ti-btn-lg">
                                                        <i class="ri-share-line me-2"></i>Share Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-0 !text-defaulttextcolor">Related Profiles</h4>
                                        <p class="!text-defaultsize !text-defaulttextcolor mb-6">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                        <div class="swiper swiper-related-jobs rtl:dir-ltr">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                                        <span><i class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Download Resume
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        View Profile
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-3 items-center">
                                                                <span class="avatar avatar-lg !rounded-full">
                                                                    <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="">
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 sm:flex items-center"><a href="javascript:void(0);"> Brenda Simpson <i class="bi bi-check-circle-fill text-success text-[1rem]"  title="Verified candidate"></i></a></h5>
                                                                    <div class="sm:flex gap-2">
                                                                        <a href="javascript:void(0);">Software Developer</a>
                                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Kondapur, Hyderabad</p>
                                                                    </div>
                                                                    <div class="sm:flex items-center text-[0.75rem] text-[#8c9097]">
                                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                                        <div class="min-w-fit ms-2">
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                                        </div>
                                                                        <a href="javascript:void(0);" class="ms-1 min-w-fit text-[#8c9097]">
                                                                            <span>(142)</span>
                                                                            <span>Ratings</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> sm:flexible-shift</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Immediate Joinee</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <div class="sm:flex items-center gap-3">
                                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                                <div class="popular-tags sm:flex-grow">
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">HTML</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">CSS</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Javascript</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Angular</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary"><i class="bi bi-plus"></i> More</a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="1 year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>1 year bond accepted</a>
                                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 2 Years</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                                        <span><i class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Download Resume
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        View Profile
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-3 items-center">
                                                                <span class="avatar avatar-lg !rounded-full">
                                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="">
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 sm:flex items-center"><a href="javascript:void(0);"> Dwayne Stort <i class="bi bi-check-circle-fill text-success text-[1rem]"  title="Verified candidate"></i></a></h5>
                                                                    <div class="sm:flex gap-2">
                                                                        <a href="javascript:void(0);">Web Developer</a>
                                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Hyderabad</p>
                                                                    </div>
                                                                    <div class="sm:flex items-center text-[0.75rem] text-[#8c9097]">
                                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                                        <div class="min-w-fit ms-2">
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                                        </div>
                                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                                            <span>(35)</span>
                                                                            <span>Ratings</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> Post Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> sm:flexible-shift</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 10 Days</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Good at English</a>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <div class="sm:flex items-center gap-3">
                                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                                <div class="popular-tags sm:flex-grow">
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">React</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Javascript</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">React Navtive</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary"><i class="bi bi-plus"></i> More</a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-info/10 text-info"  title="1 year bond accepted"><i class="bi bi-hand-thumbs-up me-1"></i>2 years bond accepted</a>
                                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 4 Years</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left space-x-2 rtl:space-x-reverse">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-primary text-white">
                                                                        <span><i class="ri-download-2-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Download Resume
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-heart-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar !rounded-full avatar-sm bg-light !text-defaulttextcolor">
                                                                        <span><i class="ri-eye-line text-[.8125rem] align-middle"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                        View Profile
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-3 items-center">
                                                                <span class="avatar avatar-lg !rounded-full">
                                                                    <img src="{{asset('build/assets/images/faces/21.jpg')}}" alt="">
                                                                </span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 sm:flex items-center"><a href="javascript:void(0);"> Jasmine Kova <i class="bi bi-check-circle-fill text-success text-[1rem]"  title="Verified candidate"></i></a></h5>
                                                                    <div class="sm:flex gap-2">
                                                                        <a href="javascript:void(0);">Python Developer</a>
                                                                        <p class="mb-0 text-[0.75rem] text-[#8c9097]"><i class="bi bi-geo-alt text-[.6875rem]"></i> Gachibowli, Chennai</p>
                                                                    </div>
                                                                    <div class="sm:flex items-center text-[0.75rem] text-[#8c9097]">
                                                                        <p class="text-[0.75rem] mb-0">Ratings : </p>
                                                                        <div class="min-w-fit ms-2">
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                                            <span class="text-warning"><i class="bi bi-star"></i></span>
                                                                        </div>
                                                                        <a href="javascript:void(0);" class="mb-0 ms-1 min-w-fit text-[#8c9097]">
                                                                            <span>(56)</span>
                                                                            <span>Ratings</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-mortarboard text-[#8c9097] me-1"></i> MBA</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-moon-stars text-[#8c9097] me-1"></i> Day-shift</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-clock text-[#8c9097] me-1"></i> Within 30 Days</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-broadcast text-[#8c9097] me-1"></i> Avg at English</a>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">
                                                            <div class="sm:flex items-center gap-3">
                                                                <h6 class="mb-0 font-semibold">Skills :</h6>
                                                                <div class="popular-tags sm:flex-grow">
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Python</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Java</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">React</a>
                                                                    <a href="javascript:void(0);" class="badge !rounded-full bg-primary/10 text-primary"><i class="bi bi-plus"></i> More</a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="badge badge-md !rounded-full bg-primary/10 text-primary"><i class="bi bi-briefcase me-1"></i>Exp : 5 Years</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-4 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Skills
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="popular-tags">
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">HTML</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">CSS</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Javascript</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">Angular</a>
                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor">React</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box overflow-hidden">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Tools Used
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <span class="avatar me-2 !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/1.png')}}" alt="logo">
                                            </span>
                                            <span class="avatar me-2 !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/2.png')}}" alt="logo">
                                            </span>
                                            <span class="avatar me-2 !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="logo">
                                            </span>
                                            <span class="avatar me-2 !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/4.png')}}" alt="logo">
                                            </span>
                                            <span class="avatar me-2 !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="logo">
                                            </span>
                                            <span class="avatar !rounded-full bg-white shadow-sm border p-2">
                                                <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="logo">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Languages
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <p class="mb-4"><span class="font-semibold">English : </span>Fluent</p>
                                            <p class="mb-4"><span class="font-semibold">Hindi : </span>Intermediate</p>
                                            <p class="mb-0"><span class="font-semibold">Telugu : </span>Expert</p>
                                        </div>
                                    </div>
                                    <div class="box custom-box overflow-hidden">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Personal Information
                                            </div>
                                        </div>
                                        <div class="box-body !p-2">
                                            <table class="table table-borderless min-w-full table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Full Name</span>
                                                        </td>
                                                        <td>: Brenda Simpson</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Email</span>
                                                        </td>
                                                        <td>: brendra@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">D.O.B</span>
                                                        </td>
                                                        <td>: 13 Jan 2022</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Gender</span>
                                                        </td>
                                                        <td>: Female</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Age</span>
                                                        </td>
                                                        <td>: 35</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Mobile </span>
                                                        </td>
                                                        <td>: +91 7865343874</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Mother Tongue </span>
                                                        </td>
                                                        <td>: Telugu</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Marital Status </span>
                                                        </td>
                                                        <td>: Unmarried</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Blood Group </span>
                                                        </td>
                                                        <td>: o +ve</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">
                                                            <span class="font-semibold">Address </span>
                                                        </td>
                                                        <td> Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box-footer">
                                            <div class="sm:flex items-center">
                                                <p class="text-[.9375rem] mb-0 me-4 font-semibold">Social :</p>
                                                <div class="btn-list mb-0">
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary me-[0.375rem] xxl:mb-0">
                                                        <i class="ri-facebook-line"></i>
                                                    </button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-secondary me-[0.375rem] xxl:mb-0">
                                                        <i class="ri-twitter-line"></i>
                                                    </button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-warning me-[0.375rem] xxl:mb-0">
                                                        <i class="ri-instagram-line"></i>
                                                    </button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-success me-[0.375rem] xxl:mb-0">
                                                        <i class="ri-github-line"></i>
                                                    </button>
                                                    <button type="button" aria-label="button" class="ti-btn ti-btn-sm ti-btn-icon ti-btn-danger xxl:mb-0">
                                                        <i class="ri-youtube-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="">
                                                <h5 class="font-semibold mb-4">Get Latest Alerts</h5>
                                                <p>Latest candidate updates on the go to recieved direct to your email. Stay updated with your latest new candidates list.</p>
                                                <div class="input-group mb-4">
                                                    <input type="text" class="form-control" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                    <button class="ti-btn ti-btn-primary-full !mb-0" type="button" id="blog-subscribe">Subscribe</button>
                                                </div>
                                                <label class="form-check-label">
                                                    By Subscribing you accept to <a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->
                        </div>

@endsection

@section('scripts')

        <!-- Swiper JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Candidate Details JS -->
        @vite('resources/assets/js/job-candidate-details.js')
        

@endsection