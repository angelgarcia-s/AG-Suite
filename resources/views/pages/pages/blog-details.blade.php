@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')

                      <div class="container my-[3rem]">

                          <!-- Start::row-1 -->
                          <div class="grid grid-cols-12 gap-x-6">
                              <div class="xl:col-span-8  col-span-12">
                                  <div class="box">
                                      <div class="box-body">
                                          <p class="text-[1.125rem] font-semibold mb-1">Touring excites in winter when we travel with friends !</p>
                                          <div class="sm:flex items-center">
                                              <div class="flex items-center flex-grow">
                                                  <span class="avatar avatar-sm avatar-rounded me-4">
                                                      <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                  </span>
                                                  <div>
                                                      <p class="mb-0 font-semibold">Json Taylor - <span class="text-[0.6875rem] text-[#8c9097] font-normal">Tue,25 Dec 2022 - 11:45</span></p>
                                                      <p class="mb-0 text-[#8c9097]"></p>
                                                  </div>
                                              </div>
                                              <div class="sm:mt-0 mt-2">
                                                  <span class="badge bg-primary text-white me-1">Nature</span>
                                                  <span class="badge bg-secondary text-white">Travel</span>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="javascript:void(0);">
                                          <img src="{{asset('build/assets/images/media/media-23.jpg')}}" class="card-img rounded-0 blog-details-img" alt="...">
                                      </a>
                                      <div class="box-body border-b border-dashed">
                                          <div class="sm:flex block items-center justify-between">
                                              <div class="flex items-center">
                                                  <span class="badge bg-success/10 text-success me-4">
                                                      <i class="ri-thumb-up-line me-1 align-middle inline-block"></i> 32 Likes
                                                  </span>
                                                  <span class="badge bg-info/10 text-info me-4">
                                                      <i class="ri-chat-4-line me-1 align-middle inline-block"></i> 10 Comments
                                                  </span>
                                              </div>
                                              <div class="btn-lists sm:mt-0 mt-2">
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary text-primary me-1" ><i class="ri-thumb-up-line"></i></button>
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary text-primaryt me-1"><i class="ri-share-line"></i></button>
                                                  <button type="button" class="ti-btn !py-1 !px-2 ti-btn-secondary text-secondary !text-[0.75rem] !font-medium"><i class="ri-chat-4-line me-1 align-middle inline-block"></i>Comment</button>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <h6 class="font-semibold text-[1rem] mb-2">
                                              Seeing with “fresh eyes” – A deeper nature experience
                                          </h6>
                                          <p class="mb-6 text-[#8c9097]">
                                              Around the time I first learned how to meditate, something amazing happened to me. It happened one day, quite spontaneously.  I was working as a lawyer at the time and I used to walk down a little lane way to the train station on my commute to work. It’s not an especially beautiful lane way
                                          </p>
                                          <p class="mb-[3rem] text-[#8c9097]">
                                              The world is animated by the wind. This invisible, mysterious force can bring a landscape alive. Its absence can cast a calm stillness over the earth. On barren mountain tops its power is barely perceptible; in forests and seas its presence becomes manifest. Winds are wild, and sometimes destructive. When we look deeply into the surely gravity’s law, strong as an ocean current, takes hold of even the strongest thing and pulls it toward the heart of the world. Each thing- each stone, blossom, child – is held in place. Only we, in our arrogance, push out beyond what we belong to for some empty freedom. If we surrendered
                                          </p>
                                          <div class="box !bg-light !mb-[3rem] shadow-none">
                                              <a aria-label="anchor" href="javascript:void(0);" class="card-anchor"></a>
                                              <div class="box-body">
                                                  <blockquote class="blockquote mb-0 text-center">
                                                  <p class="text-[1rem] font-semibold mb-2 text-dark">In nature, nothing is perfect and everything is perfect. Trees can be contorted, bent in weird ways, and they're still beautiful..</p>
                                              <footer class="text-[#6c757d] mt-2 text-[.875rem] opacity-[0.7]">Someone famous as <cite title="Source Title">-Alice Walker</cite></footer>
                                                  </blockquote>
                                              </div>
                                          </div>
                                          <p class="mb-[3rem] text-[#8c9097]">
                                              From enchanting nature's beauty quotes that evoke visions of lush meadows full of brilliantly-colored flowers or dense forests with sky-high trees to famous quotes about nature's ever-present—and absolutely fundamental—role in our lives, these 101 quotes about nature will have you itching to get off your couch and get outside. For famous <b>quotes about nature</b>, we have them here!
                                          </p>
                                          <p class="text-center">
                                              <button type="button" class="ti-btn bg-primary text-white !font-medium">Load More</button>
                                          </p>
                                      </div>
                                  </div>
                                  <div class="box">
                                      <div class="box-header">
                                          <div class="box-title">
                                              Leave a Comment
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <div class="grid grid-cols-12 gap-4">
                                              <div class="xl:col-span-6  col-span-12">
                                                  <label for="blog-first-name" class="form-label">First Name</label>
                                                  <input type="text" class="form-control !rounded-sm block w-full" id="blog-first-name" placeholder="Enter Name">
                                              </div>
                                              <div class="xl:col-span-6 col-span-12">
                                                  <label for="blog-last-name" class="form-label">Last Name</label>
                                                  <input type="text" class="form-control !rounded-sm block w-full" id="blog-last-name" placeholder="Enter Name">
                                              </div>
                                              <div class="xl:col-span-12 col-span-12">
                                                  <label for="blog-email" class="form-label">Email ID</label>
                                                  <input type="text" class="form-control !rounded-sm block w-full" id="blog-email" placeholder="Enter Email">
                                              </div>
                                              <div class="xl:col-span-12 col-span-12">
                                                  <label for="blog-comment" class="form-label ">Write Comment</label>
                                                  <textarea class="form-control !rounded-sm block w-full" id="blog-comment" rows="5"></textarea>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="box-footer">
                                          <div class="text-end">
                                              <button type="button" class="ti-btn ti-btn-primary !font-medium">Post Comment</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="xl:col-span-4 col-span-12">
                                  <div class="box">
                                      <div class="box-body text-center !p-6">
                                          <span class="avatar avatar-rounded avatar-xxl !mb-4">
                                              <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                          </span>
                                          <p class="mb-1 text-[0.9375rem] font-semibold text-defaulttextcolor leading-none">Emiley Jackson</p>
                                          <p class="text-[0.75rem] text-[#8c9097] mb-1"><span>emaileyjackson2134</span>@gmail.com</p>
                                          <p class="text-[#8c9097] mb-0 p-4 pb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution </p>
                                      </div>
                                      <div class="box-footer border-t blockt border-dashed text-center">
                                          <div>
                                              <div class="btn-list">
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-primary ti-btn-wave text-primary me-[0.375rem]">
                                                      <i class="ri-facebook-line"></i>
                                                  </button>
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-secondary ti-btn-wave text-secondary me-[0.375rem]">
                                                      <i class="ri-twitter-line"></i>
                                                  </button>
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-warning ti-btn-wave text-warning me-[0.375rem]">
                                                      <i class="ri-instagram-line"></i>
                                                  </button>
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-success ti-btn-wave text-success me-[0.375rem]">
                                                      <i class="ri-github-line"></i>
                                                  </button>
                                                  <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger ti-btn-wave text-danger">
                                                      <i class="ri-youtube-line"></i>
                                                  </button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box">
                                      <div class="box-header">
                                          <div class="box-title">
                                              Recent Posts
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <ul class="list-group !rounded-md">
                                              <li class="list-group-item">
                                                  <div class="flex gap-4 flex-wrap items-center">
                                                      <span class="avatar avatar-xl ">
                                                          <img src="{{asset('build/assets/images/media/media-39.jpg')}}" class="img-fluid rounded-md" alt="...">
                                                      </span>
                                                      <div class="flex-grow">
                                                          <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Animals</a>
                                                          <p class="mb-1 popular-blog-content text-truncate">
                                                              There are many variations of passages of Lorem Ipsum available
                                                          </p>
                                                          <span class="text-[#8c9097] text-[0.6875rem]">24,Nov 2022 - 18:27</span>
                                                      </div>
                                                      <div>
                                                          <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="list-group-item">
                                                  <div class="flex gap-4 flex-wrap items-center">
                                                      <span class="avatar avatar-xl">
                                                          <img src="{{asset('build/assets/images/media/media-56.jpg')}}" class="img-fluid rounded-md" alt="...">
                                                      </span>
                                                      <div class="flex-grow">
                                                          <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Travel</a>
                                                          <p class="mb-1 popular-blog-content text-truncate">
                                                              Latin words, combined with a handful of model sentence
                                                          </p>
                                                          <span class="text-[#8c9097] text-[0.6875rem]">28,Nov 2022 - 10:45</span>
                                                      </div>
                                                      <div>
                                                          <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="list-group-item">
                                                  <div class="flex gap-4 flex-wrap items-center">
                                                      <span class="avatar avatar-xl">
                                                          <img src="{{asset('build/assets/images/media/media-54.jpg')}}" class="img-fluid rounded-md" alt="...">
                                                      </span>
                                                      <div class="flex-grow">
                                                          <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Interior</a>
                                                          <p class="mb-1 popular-blog-content text-truncate">
                                                              Contrary to popular belief, Lorem Ipsum is not simply random
                                                          </p>
                                                          <span class="text-[#8c9097] text-[0.6875rem]">30,Nov 2022 - 08:32</span>
                                                      </div>
                                                      <div>
                                                          <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="list-group-item">
                                                  <div class="flex gap-4 flex-wrap items-center">
                                                      <span class="avatar avatar-xl">
                                                          <img src="{{asset('build/assets/images/media/media-52.jpg')}}" class="img-fluid rounded-md" alt="...">
                                                      </span>
                                                      <div class="flex-grow">
                                                          <a href="javascript:void(0);" class="text-[0.875rem] font-semibold mb-0">Nature</a>
                                                          <p class="mb-1 popular-blog-content text-truncate">
                                                              It was popularised in the 1960s with the release of Letraset sheets containing
                                                          </p>
                                                          <span class="text-[#8c9097] text-[0.6875rem]">3,Dec 2022 - 12:56</span>
                                                      </div>
                                                      <div>
                                                          <button aria-label="button" type="button" class="ti-btn ti-btn-light ti-btn-sm rtl:rotate-180"><i class="ri-arrow-right-s-line"></i></button>
                                                      </div>
                                                  </div>
                                              </li>
                                              <li class="list-group-item text-center">
                                                  <button type="button" class="ti-btn ti-btn-primary !font-medium">Load more</button>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="box">
                                      <div class="box-header">
                                          <div class="box-title">
                                              Newsletter
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <div class="text-center">
                                              <h6 class="font-semibold mb-4 text-[1rem]"><span class="text-primary text-[1.125rem]">1658</span> Subscribers</h6>
                                              <div class="input-group mb-4">
                                                  <input type="text" class="form-control !rounded-s-md" placeholder="Email Here" aria-label="blog-email" aria-describedby="blog-subscribe">
                                                  <button class="ti-btn bg-primary text-white text-primary !rounded-s-none !mb-0" type="button" id="blog-subscribe">Subscribe</button>
                                              </div>
                                              <label class="form-check-label">
                                                  By Subscribing you accept to &nbsp;<a href="javascript:void(0);" class="text-success"><u>privacy policy</u></a>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="box">
                                      <div class="box-header">
                                          <div class="box-title">
                                              Explore Topics
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <ul class="list-group">
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-secondary text-white !text-[0.65rem] avatar-rounded">
                                                                      N
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Nature</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">21</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-success text-white !text-[0.65rem] avatar-rounded">
                                                                      S
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Sports</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">16</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-warning text-white !text-[0.65rem] avatar-rounded">
                                                                      F
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Food</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">06</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-danger text-white !text-[0.65rem] avatar-rounded">
                                                                      T
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Travel</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">18</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-primary text-white !text-[0.65rem] avatar-rounded">
                                                                      F
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Fashion</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">09</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li class="list-group-item">
                                                  <a href="javascript:void(0);">
                                                      <div class="flex items-center justify-between">
                                                          <div class="flex items-center">
                                                              <div>
                                                                  <span class="avatar avatar-xs bg-secondary text-white !text-[0.65rem] avatar-rounded">
                                                                      B
                                                                  </span>
                                                              </div>
                                                              <div>
                                                                  <span class="font-semibold ms-2">Beauty</span>
                                                              </div>
                                                          </div>
                                                          <div>
                                                              <span class="badge bg-light text-default !rounded-full">11</span>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="box">
                                      <div class="box-header">
                                          <div class="box-title">
                                              Popular Tags
                                          </div>
                                      </div>
                                      <div class="box-body">
                                          <div class="blog-popular-tags">
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#blogger</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#styleblogger</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#livecolorfully</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#amwriting</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#analytics</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#designblogger</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#picoftheday</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#adventure</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#landscape</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#fitnessgoals</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#foodblogger</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#vegan</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#portrait</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#canonphotography</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#fineart</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#trending</span>
                                              </a>
                                              <a href="javascript:void(0);">
                                                  <span class="badge bg-light text-[#8c9097]">#lifestyle</span>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--End::row-1 -->
                          
                      </div>                  

@endsection

@section('scripts')


@endsection