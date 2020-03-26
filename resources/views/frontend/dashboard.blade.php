@extends('layouts.frontend')
@section('title',' Home')
@section('content')
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('/').Storage::url(get_slider_info('first_slider_image'))}}" class="d-block w-100" alt="...">
                <div class="overlay" >
                    <div class="carousel-word" >
                        <h2>
                            {{get_slider_info('first_slider_title')}}
                            <p> {{get_slider_info('first_slider_subtitle')}}</p>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/').Storage::url(get_slider_info('second_slider_image'))}}" class="d-block w-100" alt="...">
                <div class="overlay" >
                    <div class="carousel-word" >
                        <h2>
                            {{get_slider_info('second_slider_title')}}
                            <p> {{get_slider_info('second_slider_subtitle')}}</p>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/').Storage::url(get_slider_info('third_slider_image'))}}" class="d-block w-100" alt="...">
                <div class="overlay" >
                    <div class="carousel-word" >
                        <h2>
                            {{get_slider_info('third_slider_title')}}
                            <p> {{get_slider_info('third_slider_subtitle')}}</p>
                        </h2>
                    </div>
                </div>
            </div>


            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel -->

        <!-- Curriculum -->
        <div class="curriculum" >
            <div class="container" >
                <div class="row" >
                    @foreach($three_blocks as $block)
                    <div class="col-lg-4 col-md-4 col-sm-12" >
                        <a href="#">
                            <div class="topbox" >
                                <img src="{{url('/').Storage::url($block->icon)}}">
                                <h5 class="text-center">
                                    {{$block->title}}<br>
                                    {{$block->description}}
                                </h5>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Curriculum -->

        <section class="ftco-section ftco-no-pt ftc-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                        <div class="img" style="background-image: url(frontend/images/about.jpg);background-size: cover;"></div>
                    </div>
                    <div class="col-md-7 wrap-about py-3 pr-md-4 ftco-animate">
                        <h2 class="mb-2">What We Offer</h2>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
                        <div class="row mt-5">
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="{{asset('frontend/images/books.svg')}}"></div>
                                    <div class="text pl-3">
                                        <h3>Amazing Library</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="{{asset('frontend/images/blackboard.svg')}}"></div>
                                    <div class="text pl-3">
                                        <h3>Excellent Classes Environment</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><img src="{{asset('frontend/images/professor.svg')}}"></div>
                                    <div class="text pl-3">
                                        <h3>Exceptional Teachers</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fas fa-flask"></i></div>
                                    <div class="text pl-3">
                                        <h3>Science Lab</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fas fa-laptop"></i></div>
                                    <div class="text pl-3">
                                        <h3>Audio/Video Lessons</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><i class="fas fa-basketball-ball"></i></div>
                                    <div class="text pl-3">
                                        <h3>Sports Facilities</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Announcement and Upcoming Event -->
        <section id="announcement" class="mt-5" >
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-8" >
                        <div class="announcement" >
                            <h4>Noticeboard & Upcoming Events</h4>
                            <div class="row mt-5" >
                                <div class="col-lg-3 col-6" >
                                    <div class="upcomingevent" >
                                        <a href="detail.html">
                                            <img src="{{asset('frontend/images/gups11.jpg')}}" class="img-fluid" >
                                            <p>New Addmission Open For 2019</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6" >
                                    <div class="upcomingevent" >
                                        <a href="detail.html">
                                            <img src="{{asset('frontend/images/gups12.jpg')}}" class="img-fluid" >
                                            <p>Sports week Day</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6" >
                                    <div class="upcomingevent" >
                                        <a href="detail.html">
                                            <img src="{{asset('frontend/images/gups10.jpg')}}" class="img-fluid" >
                                            <p>Second Terminal Examination</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6" >
                                    <div class="upcomingevent" >
                                        <a href="detail.html">
                                            <img src="{{asset('frontend/images/gups8.jpg')}}" class="img-fluid" >
                                            <p>Educational Tour</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" >
                        <div class="latestnews" >
                            <h4>Latest News</h4>
                            <div class="row mt-5" >
                                <div class="col-lg-3" >
                                    <div class="latestnewsimages" >
                                        <img src="{{asset('frontend/images/gups8.jpg')}}" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="col-lg-9 nopadding" >
                                    <div class="latestnewsdetail" >
                                        <a href="#">
                                            <h6 class="mb-0">Undergraduate Career and Placement Week 2019</h6>
                                            <p>November 25, 2019</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2" >
                                <div class="col-lg-3" >
                                    <div class="latestnewsimages" >
                                        <img src="{{asset('frontend/images/gups8.jpg')}}" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="col-lg-9 nopadding" >
                                    <div class="latestnewsdetail" >
                                        <a href="#">
                                            <h6 class="mb-0">Undergraduate Career and Placement Week 2019</h6>
                                            <p>November 25, 2019</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2" >
                                <div class="col-lg-3" >
                                    <div class="latestnewsimages" >
                                        <img src="{{asset('frontend/images/gups8.jpg')}}" class="img-fluid" >
                                    </div>
                                </div>
                                <div class="col-lg-9 nopadding" >
                                    <div class="latestnewsdetail" >
                                        <a href="#">
                                            <h6 class="mb-0">Undergraduate Career and Placement Week 2019</h6>
                                            <p>November 25, 2019</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="news.html">
                                <button class="btn btn-viewall" >View All</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Announcement and Upcoming Event -->

        <!-- Admission Open -->
        <div class="container-fluid m-0">
     <div class="row">
        <div class="col-md-6 col-sm-6 about">
        <h5>ADMISSION OPEN FOR ACADEMIC YEAR 2076/077</h5>
        <p>ADMISSION FORM</p>
        <p>To Fill Admission Form</p>
        <button class="btn btn-outline-info btn-lg admission-apply"><a href="{{url('/front/admission')}}">Apply</a></button>
      </div>
      <div class="col-lg-6 col-md-6 nopadding admission-notice pb-2">
          <h2 class="text-center pt-5">NoticeBoard</h2>
          <section class="noticeb">
              <div class="container">
                  <div class="right">
                      <div class="admission-notice-wrapper">
                          <div class="chat-body">
                           <div class="noticedetail mt-5">
                                <h6>Admission Open</h6>
                                <p></p><p>Admission open for Academic Year 2076/077</p><p></p>
                            </div>
                       </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
     </div>
  </div>
  <!-- Admission Open -->
  
        <!-- Lifa At GUPS -->
        <section id="lifeatgups" style="background:url(frontend/images/cover.jpg) no-repeat center fixed;background-size: cover;overflow: hidden;">
            <div class="container" >
                <div class="row pb-5" >
                    <div class="col-lg-8" >
                        <div class="lifeatgups" data-animate="fade-in fade-out" >
                            <h6 class="pt-5 text-center" >Life at GUPS</h6>
                            <div class="cloud0" ></div>
                            <div class="cloud1" ></div>
                            <div class="cloud2" ></div>
                            <div class="cloud3" ></div>
                            <div class="cloud4" ></div>
                            <div class="wen" ></div>
                            <p class="pt-5 pb-3" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eveniet illo consequatur perspiciatis optio totam repellat adipisci ut distinctio corporis beatae placeat quisquam quos expedita, pariatur nemo facilis! Incidunt, cum!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum deleniti necessitatibus accusantium maiores, sunt delectus quo, quas qui, officia recusandae autem tempore error. Similique, quod, neque dolorem sunt velit aut adipisci explicabo quos fuga ut quaerat? Vel sunt, quidem ad quod soluta et assumenda dolores? Placeat sunt alias consectetur velit.
                            </p>
                            <a href="about.html">
                                <button class="btn btn-exploremore" >Explore More</button>
                            </a>
                            <div class="cloud5" ></div>
                            <div class="cloud6" ></div>
                            <div class="cloud7" ></div>
                            <div class="cloud8" ></div>
                            <div class="cloud9" ></div>
                        </div>
                    </div>
                    <div class="col-lg-4 pb-video" >
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="440" type="text/html" src="https://www.youtube.com/embed/QbRnydHoesY?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com" class="mt-3 pt-4" ><div><small><a href="https://youtubeembedcode.com/en">youtubeembedcode.com/en/</a></small></div><div><small><a href="http://add-link-exchange.com">Add-link-exchange</a></small></div><div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode nl</a></small></div><div><small><a href="http://add-link-exchange.com">add-link-Exchange</a></small></div></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lifa At GUPS -->

        <!-- Search for courses -->
        <!-- <section id="searchforcourse" >
          <div class="container-fluid" >
            <div class="row" >
              <div class="col-lg-6 col-md-7 nopadding" >
                <div class="register" >
                  <h2 class="text-center" >APPLY FOR ADDMISSION</h2>
                  <h4 class="text-center" >Now fall 2019 applications are open</h4>
                  <p class="text-center" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <a href="form.html" target="_blank"><button type="button" class="btn btn-dark">APPLY NOW</button></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-5 nopadding Notice">
                <h2 class="text-center pt-5" >NOTICEBOARD</h2>
                <section id="noticeboard" >
                  <div class="container">
                    <div class="right">
                      <div class="chat-wrapper">
                        <div class="chat-body">
                          <div class="noticedetail mt-5" >
                            <h6>Welcome To Gorkha</h6>
                            <p>The is a platform where individuals without being disrespectful to others</p>
                          </div>
                          <div class="noticedetail" >
                            <h6>Welcome To Gorkha</h6>
                            <p>The is a platform where individuals without being disrespectful to others can say ‘NO’ while everyone else is saying ‘YES’ or the other way round. Possessing the maturity</p>
                          </div>
                          <div class="noticedetail" >
                            <h6>Welcome To Gorkha</h6>
                            <p>The is a platform where individuals without being disrespectful to others can say ‘NO’ while everyone else is saying ‘YES’ or the other way round. Possessing the maturity</p>
                          </div>
                          <div class="noticedetail" >
                            <h6>Welcome To Gorkha</h6>
                            <p>The is a platform where individuals without being disrespectful to others</p>
                          </div>
                          <div class="noticedetail" >
                            <h6>Welcome To Gorkha</h6>
                            <p>The is a platform where individuals without being disrespectful to others</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </section> -->
        <!-- Search for courses -->

        <!-- Gallery -->

        <section id="gallery">
            <h2 class="text-center mt-5" >Gallery</h2>
            <div class="wen" ></div>
            <div class="curve curve__blue__top">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1430 95">
                    <path id="blue" class="cls-1" d="M1412,30c-88.5-15.3-260.5-43.7-515-17S609.248,77.8,285,82C66,82-1,43-1,43s0.688,32.323,1,54c48,0.2,596.439-1.636,652-2,33.3-.218,746,1.5,776,1C1429,28.5,1434.67,33.919,1412,30ZM734,177"/>
                </svg>
            </div>
            <div class="container-fluid" >
                <div class="row p-0" >
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups3.jpg')}}" class="b-link-stripe b-animate-go  swipebox ">
                            <img src="{{asset('frontend/images/gups3.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups12.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups12.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups11.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups11.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups9.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups9.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups5.jpg')}}" class="b-link-stripe b-animate-go  swipebox ">
                            <img src="{{asset('frontend/images/gups5.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups1.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups1.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups6.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups6.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                    <div class="col-md-3 col-6 nopadding">
                        <a href="{{asset('frontend/images/gups2.jpg')}}" class="b-link-stripe b-animate-go  swipebox">
                            <img src="{{asset('frontend/images/gups2.jpg')}}" alt=""class="shyam img-fluid" >
                        </a>
                    </div>
                </div>
            </div>
            <div class="curve curve__blue__bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 1430 95">
                    <path id="blue" class="cls-1" d="M1412,65c-88.5,15.3-260.5,43.7-515,17S609.248,17.2,285,13C66,13-1,52-1,52S-0.312,19.678,0-2C48-2.2,596.439-.364,652,0c33.3,0.218,746-1.5,776-1C1429,66.5,1434.67,61.081,1412,65ZM734-82"/>
                </svg>
            </div>
        </section>

        <!-- Gallery -->

        <!--news-->
        <div class="news-section" id="news" >
            <div class="container">
                <div class="w3l-heading">
                    <h2 class="text-center mt-5 pt-4" >College Program And Events</h2>
                    <div class="wen" ></div>
                </div>
                <div class="news-left mt-5">
                    <div class="row" >
                        <div class="col-md-6 col-6 col-news-right">
                            <div class="col-news-top">
                                <a href="#" class="date-in button2">
                                    <img class="img-fluid mix-in" src="{{asset('images/gups1.jpg')}}" alt="">
                                    <div class="month-in">
                                        <div class="team-date">
                                            <span class="day">03</span>
                                            <span class="month">Jan</span>
                                            <span class="like">We Build your Dreams</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="col-bottom">
                                <h4>Quiz Competition</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>
                                <div class="wthree-news-button">
                                    <a href="detail.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6" >
                            <div class="col-bottom">
                                <h4>Educational Tour</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>
                                <div class="wthree-news-button">
                                    <a href="detail.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 col-news-right">
                            <div class="col-news-top">
                                <a href="#" class="date-in button2">
                                    <img class="img-fluid mix-in" src="{{asset('frontend/images/gups3.jpg')}}" alt="">
                                    <div class="month-in">
                                        <div class="team-date">
                                            <span class="day">04</span>
                                            <span class="month">Feb</span>
                                            <span class="like">Education Tour</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 col-news-right" >
                            <div class="col-news-top">
                                <a href="#" class="date-in button2">
                                    <img class="img-fluid mix-in" src="{{asset('frontend/images/gups10.jpg')}}" alt="">
                                    <div class="month-in">
                                        <div class="team-date">
                                            <span class="day">22</span>
                                            <span class="month">April</span>
                                            <span class="like">Prime Minister Visit</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-6" >
                            <div class="col-bottom">
                                <h4>Prime Minister Visit</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>
                                <div class="wthree-news-button">
                                    <a href="detail.html">Read More</a>
                                </div>
                            </div>
                        </div>
                        <a href="event.html" class="viewmore">
                            <button class="btn btn-viewmore mt-5" >View More</button>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//news-->

    <!-- Maps -->
    <div class="maps mt-0" >
        <div class="container-wrap" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7031.9897037073315!2d81.681672!3d28.207469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x98cdb0ccb4a709f6!2sGorkha%20United%20Public%20Higher%20Secondary%20School!5e0!3m2!1sen!2snp!4v1575542464390!5m2!1sen!2snp" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- Maps -->
@endsection
