@extends('layouts.master')

@section('styles')
 
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">
      
@endsection

@section('content')

                        <!-- Page Header -->
                        <div class="block justify-between page-header md:flex">
                            <div>
                                <h3 class="!text-defaulttextcolor text-[1.125rem] font-semibold"> Job Details</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-[0.813rem] ps-[0.5rem]">
                                  <a class="flex items-center text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Jobs
                                    <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                  </a>
                                </li>
                                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary " aria-current="page">
                                    Job Details
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <div class="container">

                            <!-- Start::row-1 -->
                            <div class="box custom-box">
                                <div class="box-body">
                                    <div class="sm:flex align-top justify-between">
                                        <div>
                                            <div class="sm:flex flex-wrap gap-2">
                                                <span class="avatar avatar-rounded avatar-lg"> <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt=""> </span>
                                                <div>
                                                    <h4 class="font-bold mb-0 flex items-center"><a href="javascript:void(0);">UI Developer - Fresher</a></h4>
                                                    <a href="javascript:void(0);" class="font-semibold"><i class="bi bi-building"></i> Spruko Technologies .PVT.LTD</a>
                                                    <div class="sm:flex text-[.875rem] mt-4">
                                                        <div class="mb-2 sm:mb-0">
                                                            <p class="mb-1"><i class="bi bi-geo-alt me-1"></i>Banglore, Karnataka</p>
                                                            <p><i class="bi bi-briefcase me-1"></i>1 - 3+ years Experience</p>
                                                        </div>
                                                        <div class="sm:ms-6 mb-4">
                                                            <p class="mb-1"><i class="bi bi-coin me-1"></i><b>10,000 - 20,000</b> / per month (+incentives)</p>
                                                            <p><i class="bi bi-mortarboard  me-1"></i>Graduate and Above</p>
                                                        </div>
                                                    </div>
                                                    <div class="popular-tags mb-2 sm:mb-0">
                                                        <a href="javascript:void(0);" class="badge !rounded-full bg-info/10 text-info"><i class="bi bi-clock me-1"></i>Full Time</a>
                                                        <a href="javascript:void(0);" class="badge !rounded-full bg-danger/10 text-danger"><i class="bi bi-briefcase me-1"></i>13 Openings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="btn-list sm:flex items-center mb-2">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-primary-full m-0 !me-[0.375rem]"> Apply Now</a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-primary me-[0.375rem]">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                                <a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-primary">
                                                    <i class="ri-share-line"></i>
                                                </a>
                                            </div>
                                            <p class="mb-0"><i class="bi bi-info-circle text-danger" 
                                                ></i> <b>45 days left </b> to apply this job</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="xxl:col-span-8 col-span-12">
                                    <div class="box custom-box">
                                        <div class="box-header">
                                            <div class="box-title">Job Highlights</div>
                                        </div>
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="sm:col-span-4 col-span-12">
                                                    <p class="text-[.875rem] mb-2">
                                                        <span class="avatar !rounded-full me-2 bg-light !text-defaulttextcolor">
                                                            <i class="ri-time-line text-[0.9375rem]"></i>
                                                        </span>
                                                        09:30 AM - 06:00 PM
                                                    </p>
                                                    <p class="text-[.875rem] mb-2">
                                                        <span class="avatar !rounded-full me-2 bg-light !text-defaulttextcolor">
                                                            <i class="bi bi-mortarboard text-[0.9375rem]"></i>
                                                        </span>
                                                        Graduate and Above
                                                    </p>
                                                </div>
                                                <div class="sm:col-span-4 col-span-12">
                                                    <p class="text-[.875rem] mb-2">
                                                        <span class="avatar !rounded-full me-2 bg-light !text-defaulttextcolor">
                                                            <i class="bi bi-calendar text-[0.9375rem]"></i>
                                                        </span>
                                                        5 Working Days
                                                    </p>
                                                    <p class="text-[.875rem] mb-2">
                                                        <span class="avatar !rounded-full me-2 bg-light !text-defaulttextcolor">
                                                            <i class="bi bi-person-check text-[0.9375rem]"></i>
                                                        </span>
                                                        Bachelors Preferred
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <h5 class="font-semibold">Job Description</h5>
                                            <p class="opacity-[0.9]">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore.A officiis optio temporibus minima facilis...</p>
                                            <p class="mb-6 opacity-[0.9]">Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd.Est amet sit vero sanctus labore no sed ipsum ipsum nonumy vero sanctus labore..</p>
                                            <h5 class="font-semibold">Key Responsibilities</h5>
                                            <ol class="list-group !border-0 list-unstyled list-group-numbered mb-4 ps-8 list-decimal">
                                                <li class="list-group-item !border-0 !px-0">Design thoughtful, beautiful, and useful software user interfaces and experiences in a team environment..</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Create user-centered designs by considering market analysis, customer feedback, site metrics, and usability findings.</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Work with stakeholders to plan projects for effective delivery while maintaining high standards for design..</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Be a passionate and effective advocate for design with non-design audiences..</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Use business requirements, user and market research to assist in developing scenarios, use cases, and high-level requirements..</li>
                                            </ol>
                                            <h5 class="font-semibold">Requirements</h5>
                                            <ol class="list-group !border-0 list-unstyled list-group-numbered mb-0 ps-8 list-decimal">
                                                <li class="list-group-item !border-0 !px-0">Design thoughtful, beautiful, and useful software user interfaces and experiences in a team environment..</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Create user-centered designs by considering market analysis, customer feedback, site metrics, and usability findings.</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Work with stakeholders to plan projects for effective delivery while maintaining high standards for design..</li>
                                                <li class="list-group-item !border-0 !pb-1 !pt-0 !px-0">Be a passionate and effective advocate for design with non-design audiences..</li>
                                                <li class="list-group-item !border-0 !pb-0 !pt-0 !px-0">Use business requirements, user and market research to assist in developing scenarios, use cases, and high-level requirements..</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="box custom-box  !bg-primary/10 !border-0 !shadow-none">
                                        <div class="box-body">
                                            <div class="grid grid-cols-12 items-center">
                                                <div class="lg:col-span-6 col-span-12">
                                                    <h5 class="font-semibold mb-0">🖐 Was this job fit for someone?</h5>
                                                </div>
                                                <div class="lg:col-span-6 col-span-12 text-end">
                                                    <a href="javascript:void(0);" class="ti-btn ti-btn-success-full ti-btn-lg">
                                                        <i class="ri-share-line me-2"></i>Share Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold mb-0 !text-defaulttextcolor">Related Jobs</h4>
                                        <p class="!text-defaulttextcolor text-defaultsize mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                        <div class="swiper swiper-related-jobs rtl:dir-ltr">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box featured-jobs">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full bg-light !text-defaulttextcolor">
                                                                        <span><i class="bi bi-heart"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Add to Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full !bg-warning/10 !text-warning">
                                                                        <span><i class="bi bi-star-fill"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Featured Jobs
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-4">
                                                                <span class="avatar avatar-lg !rounded-full !bg-primary/10 !fill-primary border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M21.46777,2.3252A1.00007,1.00007,0,0,0,20.73,2H3.27a1.00039,1.00039,0,0,0-.99609,1.08887l1.52,17a.99944.99944,0,0,0,.72851.87451l7.2002,2A.99628.99628,0,0,0,11.99023,23a1.01206,1.01206,0,0,0,.26709-.03613l7.21973-2a1.00055,1.00055,0,0,0,.729-.875l1.52-17A1,1,0,0,0,21.46777,2.3252Zm-3.19238,16.896L11.99072,20.9624,5.72461,19.22168,4.36328,4H19.63672ZM7.81982,13h6.895l-.32714,3.271-2.56788.917L8.65625,16.05811a1.00017,1.00017,0,1,0-.67285,1.88378l3.5,1.25a1.00291,1.00291,0,0,0,.67285,0l3.5-1.25a1.00044,1.00044,0,0,0,.65869-.84228l.5-5A1.00064,1.00064,0,0,0,15.81982,11H8.72461L8.4248,8h7.895a1,1,0,0,0,0-2h-9a1.00064,1.00064,0,0,0-.99511,1.09961l.5,5A1.00012,1.00012,0,0,0,7.81982,13Z"></path></svg></span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> HTML Developer</a></h5>
                                                                    <a href="javascript:void(0);"><i class="bi bi-building"></i> Spotech Technical Solutions</a>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags mb-4">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-default"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                            </div>
                                                            <div class="sm:flex justify-between">
                                                                <h6 class="font-semibold mb-0">$25,000 - $35,000</h6>
                                                                <a href="" class="text-primary font-semibold text-[.875rem]">
                                                                    Apply Now <i class="fe fe-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box featured-jobs">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full bg-light !text-defaulttextcolor">
                                                                        <span><i class="bi bi-heart"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Add to Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full !bg-warning/10 !text-warning">
                                                                        <span><i class="bi bi-star-fill"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Featured Jobs
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-4">
                                                                <span class="avatar avatar-lg !rounded-full !bg-primary/10 !fill-primary border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M11.103,10.43793a1.78593,1.78593,0,1,0,2.43957.65362A1.786,1.786,0,0,0,11.103,10.43793Zm8.0047,1.93768q-.17587-.201-.37116-.40308.13641-.14337.264-.28649c1.60583-1.80427,2.28357-3.61371,1.65558-4.70154-.60217-1.043-2.39343-1.35382-4.63593-.91779q-.33132.06482-.659.14624-.06272-.21624-.13343-.43C14.467,3.49042,13.2381,1.99921,11.98206,2,10.77765,2.00055,9.61359,3.39709,8.871,5.5575q-.10959.31969-.20276.64471-.21908-.05375-.44-.0993c-2.366-.48578-4.27167-.16584-4.89844.9226-.601,1.04376.02753,2.74982,1.52851,4.47211q.22329.25562.45922.49976c-.18542.191-.361.38189-.52465.57171-1.4646,1.698-2.05719,3.37616-1.45716,4.41541.61969,1.07348,2.49854,1.42437,4.7854.97436q.278-.05511.55292-.124.10071.35156.22095.697c.73932,2.11706,1.89685,3.46863,3.097,3.4682,1.23944-.00073,2.48194-1.45288,3.23474-3.65875.05945-.17432.11573-.35535.16907-.54175q.35514.08835.71485.1568c2.20336.41687,3.95251.089,4.55145-.951C21.28058,15.93109,20.64288,14.12933,19.10767,12.37561ZM4.07019,7.45184c.38586-.67,1.94324-.93139,3.98608-.512q.19584.04027.39838.09a20.464,20.464,0,0,0-.42126,2.67767,20.88659,20.88659,0,0,0-2.10389,1.6936q-.21945-.22695-.42718-.4649l.00006.00006C4.21631,9.46057,3.708,8.08081,4.07019,7.45184Zm3.88666,5.72809c-.51056-.3866-.98505-.78265-1.41571-1.181.43036-.39587.90515-.79059,1.41467-1.17615q-.02746.58915-.02722,1.1792Q7.929,12.59117,7.95685,13.17993Zm-.00061,3.94061a7.23675,7.23675,0,0,1-2.63971.09314,1.766,1.766,0,0,1-1.241-.65631c-.36407-.63067.11176-1.978,1.36432-3.43023q.23621-.273.48791-.53174a20.49026,20.49026,0,0,0,2.10712,1.70007,20.80226,20.80226,0,0,0,.42621,2.712Q8.21011,17.07023,7.95624,17.12054Zm7.10113-8.03936q-.50309-.317-1.01861-.61365-.5073-.292-1.0268-.56207c.593-.24933,1.17591-.46228,1.73865-.63581A18.21775,18.21775,0,0,1,15.05737,9.08118ZM9.679,5.83521c.63623-1.85114,1.57763-2.98053,2.30352-2.98084.77308-.00037,1.77753,1.21826,2.43433,3.19763q.064.19355.121.38928a20.478,20.478,0,0,0-2.52716.9712,20.06145,20.06145,0,0,0-2.519-.98194Q9.578,6.13062,9.679,5.83521ZM9.27863,7.259a18.30717,18.30717,0,0,1,1.72967.642Q9.95746,8.4433,8.96094,9.0824C9.0412,8.4444,9.148,7.83313,9.27863,7.259ZM8.9624,14.91968q.49695.31813,1.00843.61273.52174.30039,1.05737.57556a18.19577,18.19577,0,0,1-1.74445.66492C9.15161,16.1908,9.04364,15.56879,8.9624,14.91968Zm5.45569,3.14551A7.23556,7.23556,0,0,1,13.18,20.39844l-.00006.00006a1.76585,1.76585,0,0,1-1.18841.747c-.72821.00042-1.65766-1.085-2.28992-2.89545q-.11169-.32108-.20551-.648a20.10863,20.10863,0,0,0,2.52918-1.0097,20.79976,20.79976,0,0,0,2.54736.97851Q14.50141,17.81983,14.41809,18.06519Zm.36224-1.32422c-.56921-.176-1.16058-.39252-1.76214-.64551q.50867-.2677,1.02472-.56543.52955-.30579,1.0321-.62689A18.1524,18.1524,0,0,1,14.78033,16.741Zm.44629-4.74268q.00111.91095-.05688,1.82044c-.49268.33343-1.01282.659-1.554.97143-.53894.31116-1.07293.59711-1.59674.8559q-.82682-.39624-1.62176-.854-.79047-.455-1.54468-.969-.06894-.90921-.06946-1.82172l.00012.00019q-.00063-.91187.06794-1.82184c.49255-.33637,1.00891-.66168,1.54278-.96991.53632-.30969,1.077-.59442,1.61469-.85248q.81664.39688,1.60382.85065.78992.454,1.549.95868.06519.91443.06524,1.83166Zm.95673-5.09283c1.92133-.37372,3.37-.12232,3.73291.50622.3866.66962-.16748,2.1485-1.55383,3.70636l-.00006.00006q-.1149.12891-.23841.25891A20.06118,20.06118,0,0,0,15.98,9.68915a20.04054,20.04054,0,0,0-.40546-2.64893Q15.88486,6.96387,16.18335,6.90546Zm-.12988,3.8847A18.16447,18.16447,0,0,1,17.51483,11.978a18.11912,18.11912,0,0,1-1.45672,1.20831q.02325-.59391.02288-1.18842Q16.08072,11.39389,16.05347,10.79016Zm3.8681,5.78876c-.36346.63116-1.76788.89435-3.65222.53784q-.32391-.06115-.66474-.14557a20.069,20.069,0,0,0,.38746-2.68176,19.93914,19.93914,0,0,0,2.13708-1.71588q.17643.18329.33563.36487v-.00007a7.23437,7.23437,0,0,1,1.40308,2.23792A1.76563,1.76563,0,0,1,19.92157,16.57892Z"></path></svg></span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> React Developer</a></h5>
                                                                    <a href="javascript:void(0);"><i class="bi bi-building"></i> Infratech PVT LTD</a>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags mb-4">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light !text-defaulttextcolor"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                            </div>
                                                            <div class="sm:flex justify-between">
                                                                <h6 class="font-semibold mb-0">$25,000 - $35,000</h6>
                                                                <a href="" class="text-primary font-semibold text-[.875rem]">
                                                                    Apply Now <i class="fe fe-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box featured-jobs">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full bg-light !text-defaulttextcolor">
                                                                        <span><i class="bi bi-heart"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Add to Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full !bg-warning/10 !text-warning">
                                                                        <span><i class="bi bi-star-fill"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Featured Jobs
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-4">
                                                                <span class="avatar avatar-lg !rounded-full !bg-primary/10 !fill-primary border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M22.86723,3.374a.99906.99906,0,0,0-.86622-.50195l-4.97064-.00391-.00738-.001-3.64356.001a1.00172,1.00172,0,0,0-.81787.42481l-.55859.7959L11.43851,3.291a.9983.9983,0,0,0-.81591-.42286l-3.646-.001H6.97611l-.00146.00018-.00147-.00018H6.96781l-4.97314.02734a.99989.99989,0,0,0-.85742,1.50586L11.15678,21.50586A1.00068,1.00068,0,0,0,12.01957,22h.001a1.00062,1.00062,0,0,0,.86328-.49609L22.8643,4.376A1.00212,1.00212,0,0,0,22.86723,3.374ZM10.10453,4.86816l1.085,1.53321a.99856.99856,0,0,0,.81641.42285h.00146a1.00252,1.00252,0,0,0,.8169-.42481l1.07519-1.53125,1.36267-.001-3.244,5.45373L8.7432,4.86719Zm1.9126,14.14942L3.7393,4.88477l2.66992-.01465,4.75342,7.918a1.00082,1.00082,0,0,0,.85742.48535H12.022l.001-.00012.001.00012h.002a1,1,0,0,0,.85742-.48926l4.708-7.916,2.66949.00293Z"></path></svg></span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Vuejs Developer</a></h5>
                                                                    <a href="javascript:void(0);">G Technical Solutions</a>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags mb-4">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                            </div>
                                                            <div class="sm:flex justify-between">
                                                                <h6 class="font-semibold mb-0">$25,000 - $35,000</h6>
                                                                <a href="" class="text-primary font-semibold text-[.875rem]">
                                                                    Apply Now <i class="fe fe-arrow-right"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rtl:dir-rtl">
                                                    <div class="box custom-box featured-jobs">
                                                        <div class="box-body">
                                                            <div class="btn-list ltr:float-right rtl:float-left">
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full bg-light !text-defaulttextcolor">
                                                                        <span><i class="bi bi-heart"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Add to Whislist
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                    <button type="button" class="hs-tooltip-toggle avatar avatar-sm !rounded-full !bg-warning/10 !text-warning">
                                                                        <span><i class="bi bi-star-fill"></i></span>
                                                                        <span
                                                                            class="hs-tooltip-content  ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm "
                                                                            role="tooltip">
                                                                            Featured Jobs
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="sm:flex mb-4">
                                                                <span class="avatar avatar-lg !rounded-full !bg-primary/10 !fill-primary border"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M12,2a10.00009,10.00009,0,1,0,10,9.99976A10.01117,10.01117,0,0,0,12,2ZM3.00928,11.99976a8.95547,8.95547,0,0,1,.77844-3.659L8.07654,20.09131A8.99123,8.99123,0,0,1,3.00928,11.99976ZM12,20.99121a8.98726,8.98726,0,0,1-2.54-.36633l2.69788-7.83869,2.7633,7.57135a.84386.84386,0,0,0,.06446.12391A8.97138,8.97138,0,0,1,12,20.99121ZM13.239,7.78436c.54126-.02844,1.02906-.08539,1.02906-.08539a.37165.37165,0,0,0-.05738-.741s-1.4563.11432-2.39648.11432c-.8833,0-2.3678-.11432-2.3678-.11432a.37165.37165,0,0,0-.057.741s.4585.05695.943.08539l1.40075,3.838-1.968,5.90087L6.49133,7.78436C7.033,7.75592,7.52026,7.699,7.52026,7.699a.37166.37166,0,0,0-.05749-.741s-1.45593.11432-2.39612.11432c-.1687,0-.36768-.00415-.57861-.01093A8.98815,8.98815,0,0,1,18.07117,5.36957c-.0387-.00238-.07654-.0072-.11634-.0072A1.55669,1.55669,0,0,0,16.445,6.958a4.21016,4.21016,0,0,0,.88317,2.1087,4.73577,4.73577,0,0,1,.74122,2.47955,10.88314,10.88314,0,0,1-.68409,2.9065l-.897,2.99634ZM16.52,19.771l2.74609-7.9397A8.489,8.489,0,0,0,19.94983,8.611a6.9105,6.9105,0,0,0-.06043-.92456A8.99224,8.99224,0,0,1,16.52,19.771Z"></path></svg></span>
                                                                <div class="ms-2">
                                                                    <h5 class="font-semibold mb-0 flex items-center"><a href="javascript:void(0);"> Wordpress Developer</a></h5>
                                                                    <a href="javascript:void(0);">Hardware Private Solutions</a>
                                                                </div>
                                                            </div>
                                                            <div class="popular-tags mb-4">
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-geo-alt text-muted me-1"></i> Hyderabad</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-mortarboard text-muted me-1"></i> Graduate</a>
                                                                <a href="javascript:void(0);" class="badge !rounded-full bg-light text-defaulttextcolor"><i class="bi bi-clock text-muted me-1"></i> Min - 2Years</a>
                                                            </div>
                                                            <div class="sm:flex justify-between">
                                                                <h6 class="font-semibold mb-0">$25,000 - $35,000</h6>
                                                                <a href="" class="text-primary font-semibold text-[.875rem]">
                                                                    Apply Now <i class="fe fe-arrow-right"></i>
                                                                </a>
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
                                <div class="xxl:col-span-4 col-span-12">
                                    <div class="box custom-box border">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Similar Jobs
                                            </div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <ul class="list-group  list-group-flush">
                                                <li class="list-group-item !border-t-0 !border-s-0 !border-e-0 mb-2">
                                                    <div class="sm:flex">
                                                        <span class="avatar avatar-md !rounded-full bg-primary/10 !fill-primary border">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M11.103,10.43793a1.78593,1.78593,0,1,0,2.43957.65362A1.786,1.786,0,0,0,11.103,10.43793Zm8.0047,1.93768q-.17587-.201-.37116-.40308.13641-.14337.264-.28649c1.60583-1.80427,2.28357-3.61371,1.65558-4.70154-.60217-1.043-2.39343-1.35382-4.63593-.91779q-.33132.06482-.659.14624-.06272-.21624-.13343-.43C14.467,3.49042,13.2381,1.99921,11.98206,2,10.77765,2.00055,9.61359,3.39709,8.871,5.5575q-.10959.31969-.20276.64471-.21908-.05375-.44-.0993c-2.366-.48578-4.27167-.16584-4.89844.9226-.601,1.04376.02753,2.74982,1.52851,4.47211q.22329.25562.45922.49976c-.18542.191-.361.38189-.52465.57171-1.4646,1.698-2.05719,3.37616-1.45716,4.41541.61969,1.07348,2.49854,1.42437,4.7854.97436q.278-.05511.55292-.124.10071.35156.22095.697c.73932,2.11706,1.89685,3.46863,3.097,3.4682,1.23944-.00073,2.48194-1.45288,3.23474-3.65875.05945-.17432.11573-.35535.16907-.54175q.35514.08835.71485.1568c2.20336.41687,3.95251.089,4.55145-.951C21.28058,15.93109,20.64288,14.12933,19.10767,12.37561ZM4.07019,7.45184c.38586-.67,1.94324-.93139,3.98608-.512q.19584.04027.39838.09a20.464,20.464,0,0,0-.42126,2.67767,20.88659,20.88659,0,0,0-2.10389,1.6936q-.21945-.22695-.42718-.4649l.00006.00006C4.21631,9.46057,3.708,8.08081,4.07019,7.45184Zm3.88666,5.72809c-.51056-.3866-.98505-.78265-1.41571-1.181.43036-.39587.90515-.79059,1.41467-1.17615q-.02746.58915-.02722,1.1792Q7.929,12.59117,7.95685,13.17993Zm-.00061,3.94061a7.23675,7.23675,0,0,1-2.63971.09314,1.766,1.766,0,0,1-1.241-.65631c-.36407-.63067.11176-1.978,1.36432-3.43023q.23621-.273.48791-.53174a20.49026,20.49026,0,0,0,2.10712,1.70007,20.80226,20.80226,0,0,0,.42621,2.712Q8.21011,17.07023,7.95624,17.12054Zm7.10113-8.03936q-.50309-.317-1.01861-.61365-.5073-.292-1.0268-.56207c.593-.24933,1.17591-.46228,1.73865-.63581A18.21775,18.21775,0,0,1,15.05737,9.08118ZM9.679,5.83521c.63623-1.85114,1.57763-2.98053,2.30352-2.98084.77308-.00037,1.77753,1.21826,2.43433,3.19763q.064.19355.121.38928a20.478,20.478,0,0,0-2.52716.9712,20.06145,20.06145,0,0,0-2.519-.98194Q9.578,6.13062,9.679,5.83521ZM9.27863,7.259a18.30717,18.30717,0,0,1,1.72967.642Q9.95746,8.4433,8.96094,9.0824C9.0412,8.4444,9.148,7.83313,9.27863,7.259ZM8.9624,14.91968q.49695.31813,1.00843.61273.52174.30039,1.05737.57556a18.19577,18.19577,0,0,1-1.74445.66492C9.15161,16.1908,9.04364,15.56879,8.9624,14.91968Zm5.45569,3.14551A7.23556,7.23556,0,0,1,13.18,20.39844l-.00006.00006a1.76585,1.76585,0,0,1-1.18841.747c-.72821.00042-1.65766-1.085-2.28992-2.89545q-.11169-.32108-.20551-.648a20.10863,20.10863,0,0,0,2.52918-1.0097,20.79976,20.79976,0,0,0,2.54736.97851Q14.50141,17.81983,14.41809,18.06519Zm.36224-1.32422c-.56921-.176-1.16058-.39252-1.76214-.64551q.50867-.2677,1.02472-.56543.52955-.30579,1.0321-.62689A18.1524,18.1524,0,0,1,14.78033,16.741Zm.44629-4.74268q.00111.91095-.05688,1.82044c-.49268.33343-1.01282.659-1.554.97143-.53894.31116-1.07293.59711-1.59674.8559q-.82682-.39624-1.62176-.854-.79047-.455-1.54468-.969-.06894-.90921-.06946-1.82172l.00012.00019q-.00063-.91187.06794-1.82184c.49255-.33637,1.00891-.66168,1.54278-.96991.53632-.30969,1.077-.59442,1.61469-.85248q.81664.39688,1.60382.85065.78992.454,1.549.95868.06519.91443.06524,1.83166Zm.95673-5.09283c1.92133-.37372,3.37-.12232,3.73291.50622.3866.66962-.16748,2.1485-1.55383,3.70636l-.00006.00006q-.1149.12891-.23841.25891A20.06118,20.06118,0,0,0,15.98,9.68915a20.04054,20.04054,0,0,0-.40546-2.64893Q15.88486,6.96387,16.18335,6.90546Zm-.12988,3.8847A18.16447,18.16447,0,0,1,17.51483,11.978a18.11912,18.11912,0,0,1-1.45672,1.20831q.02325-.59391.02288-1.18842Q16.08072,11.39389,16.05347,10.79016Zm3.8681,5.78876c-.36346.63116-1.76788.89435-3.65222.53784q-.32391-.06115-.66474-.14557a20.069,20.069,0,0,0,.38746-2.68176,19.93914,19.93914,0,0,0,2.13708-1.71588q.17643.18329.33563.36487v-.00007a7.23437,7.23437,0,0,1,1.40308,2.23792A1.76563,1.76563,0,0,1,19.92157,16.57892Z"></path></svg>
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);"> React Lead Developer</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-building text-muted"></i> Infratech PVT LTD</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-t-0 !border-s-0 !border-e-0 mb-2">
                                                    <div class="sm:flex">
                                                        <span class="avatar avatar-md !rounded-full bg-primary/10 !fill-primary border">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M21.46777,2.3252A1.00007,1.00007,0,0,0,20.73,2H3.27a1.00039,1.00039,0,0,0-.99609,1.08887l1.52,17a.99944.99944,0,0,0,.72851.87451l7.2002,2A.99628.99628,0,0,0,11.99023,23a1.01206,1.01206,0,0,0,.26709-.03613l7.21973-2a1.00055,1.00055,0,0,0,.729-.875l1.52-17A1,1,0,0,0,21.46777,2.3252Zm-3.19238,16.896L11.99072,20.9624,5.72461,19.22168,4.36328,4H19.63672ZM7.81982,13h6.895l-.32714,3.271-2.56788.917L8.65625,16.05811a1.00017,1.00017,0,1,0-.67285,1.88378l3.5,1.25a1.00291,1.00291,0,0,0,.67285,0l3.5-1.25a1.00044,1.00044,0,0,0,.65869-.84228l.5-5A1.00064,1.00064,0,0,0,15.81982,11H8.72461L8.4248,8h7.895a1,1,0,0,0,0-2h-9a1.00064,1.00064,0,0,0-.99511,1.09961l.5,5A1.00012,1.00012,0,0,0,7.81982,13Z"></path></svg>
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);"> HTML Developer - Fresher</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-building text-muted"></i> Spruko Technologies PVT LTD</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item border-t-0 !border-s-0 !border-e-0 mb-2">
                                                    <div class="sm:flex">
                                                        <span class="avatar avatar-md !rounded-full bg-primary/10 !fill-primary border">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M12,2a10.00009,10.00009,0,1,0,10,9.99976A10.01117,10.01117,0,0,0,12,2ZM3.00928,11.99976a8.95547,8.95547,0,0,1,.77844-3.659L8.07654,20.09131A8.99123,8.99123,0,0,1,3.00928,11.99976ZM12,20.99121a8.98726,8.98726,0,0,1-2.54-.36633l2.69788-7.83869,2.7633,7.57135a.84386.84386,0,0,0,.06446.12391A8.97138,8.97138,0,0,1,12,20.99121ZM13.239,7.78436c.54126-.02844,1.02906-.08539,1.02906-.08539a.37165.37165,0,0,0-.05738-.741s-1.4563.11432-2.39648.11432c-.8833,0-2.3678-.11432-2.3678-.11432a.37165.37165,0,0,0-.057.741s.4585.05695.943.08539l1.40075,3.838-1.968,5.90087L6.49133,7.78436C7.033,7.75592,7.52026,7.699,7.52026,7.699a.37166.37166,0,0,0-.05749-.741s-1.45593.11432-2.39612.11432c-.1687,0-.36768-.00415-.57861-.01093A8.98815,8.98815,0,0,1,18.07117,5.36957c-.0387-.00238-.07654-.0072-.11634-.0072A1.55669,1.55669,0,0,0,16.445,6.958a4.21016,4.21016,0,0,0,.88317,2.1087,4.73577,4.73577,0,0,1,.74122,2.47955,10.88314,10.88314,0,0,1-.68409,2.9065l-.897,2.99634ZM16.52,19.771l2.74609-7.9397A8.489,8.489,0,0,0,19.94983,8.611a6.9105,6.9105,0,0,0-.06043-.92456A8.99224,8.99224,0,0,1,16.52,19.771Z"></path></svg>
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);"> Wordpress Developer - Remote</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-building text-muted"></i> Hardware Private Solutions</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-b-0 !border-s-0 !border-e-0">
                                                    <div class="sm:flex">
                                                        <span class="avatar avatar-md !rounded-full bg-primary/10 !fill-primary border">
                                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path fill="var(--primary-color)" d="M22.86723,3.374a.99906.99906,0,0,0-.86622-.50195l-4.97064-.00391-.00738-.001-3.64356.001a1.00172,1.00172,0,0,0-.81787.42481l-.55859.7959L11.43851,3.291a.9983.9983,0,0,0-.81591-.42286l-3.646-.001H6.97611l-.00146.00018-.00147-.00018H6.96781l-4.97314.02734a.99989.99989,0,0,0-.85742,1.50586L11.15678,21.50586A1.00068,1.00068,0,0,0,12.01957,22h.001a1.00062,1.00062,0,0,0,.86328-.49609L22.8643,4.376A1.00212,1.00212,0,0,0,22.86723,3.374ZM10.10453,4.86816l1.085,1.53321a.99856.99856,0,0,0,.81641.42285h.00146a1.00252,1.00252,0,0,0,.8169-.42481l1.07519-1.53125,1.36267-.001-3.244,5.45373L8.7432,4.86719Zm1.9126,14.14942L3.7393,4.88477l2.66992-.01465,4.75342,7.918a1.00082,1.00082,0,0,0,.85742.48535H12.022l.001-.00012.001.00012h.002a1,1,0,0,0,.85742-.48926l4.708-7.916,2.66949.00293Z"></path></svg>
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);"> Vuejs Frontend Developer</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-building text-muted"></i> G Technical Solutions</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-footer">
                                            <a href="javascript:void(0);" class="text-primary font-semibold text-[.875rem] mt-2">
                                                View All <i class="fe fe-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box custom-box border">
                                        <div class="box-header">
                                            <div class="box-title">
                                                Featured Companies
                                            </div>
                                        </div>
                                        <div class="box-body !p-0">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item !border-t-0 !border-s-0 !border-e-0 mb-2">
                                                    <div class="flex">
                                                        <span class="avatar avatar-md !rounded-full bg-gray-200 border">
                                                            <img src="{{asset('build/assets/images/company-logos/3.png')}}" alt="">
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);">Infratech PVT LTD</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-briefcase text-muted"></i> React Lead Developer </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-s-0 !border-e-0  mb-2">
                                                    <div class="flex">
                                                        <span class="avatar avatar-md !rounded-full bg-gray-200 border">
                                                            <img src="{{asset('build/assets/images/company-logos/6.png')}}" alt="">
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);">Spruko Technologies PVT LTD</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-briefcase text-muted"></i>  HTML Developer - Fresher</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-s-0 !border-e-0  mb-2">
                                                    <div class="flex">
                                                        <span class="avatar avatar-md !rounded-full bg-gray-200 border">
                                                            <img src="{{asset('build/assets/images/company-logos/8.png')}}" alt="">
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);">Hardware Private Solutions </a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-briefcase text-muted"></i> Wordpress Developer</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item !border-b-0 !border-s-0 !border-e-0  mb-0">
                                                    <div class="flex">
                                                        <span class="avatar avatar-md !rounded-full bg-gray-200 border">
                                                            <img src="{{asset('build/assets/images/company-logos/5.png')}}" alt="">
                                                        </span>
                                                        <div class="ms-2 flex-grow">
                                                            <p class="font-semibold text-[.875rem] mb-1"><a href="javascript:void(0);"> G Technical Solutions</a></p>
                                                            <p class="mb-0 me-4"><i class="bi bi-briefcase text-muted"></i> Vuejs Frontend Developer</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-footer">
                                            <a href="javascript:void(0);" class="text-primary font-semibold text-[.875rem] mt-2">
                                                View All <i class="fe fe-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box custom-box">
                                        <div class="box-body">
                                            <div class="">
                                                <h5 class="font-semibold mb-3">Get Latest Job Alerts</h5>
                                                <p class="mb-4">Latest jobs updates on the go to recieved direct to your email. Stay updated with your latest new jobs.</p>
                                                <div class="input-group mb-3">
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

        <!-- Swiper jobs JS -->
        @vite('resources/assets/js/job-details.js')
        

@endsection