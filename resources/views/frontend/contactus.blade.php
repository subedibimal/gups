@extends('layouts.frontend')
@section('title',' Contact Us')
@section('content')
    <div class="banner-area banner-bg" style="background: url(../frontend/images/banner.jpg);">
        <div class="container">
            <div class="row p-0 m-0">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center bannerh2" data-aos="fade-up" data-aos-duration="3000">CONTACT US</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('front/contactus')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- Contact -->
    <section id="contact">
        <div class="maps mt-5">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d56342.41804692025!2d84.45011683652449!3d28.042774314800553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x399510f95342cec7%3A0xf918b4595e520f7f!2sgorkha%20polytechnic%20college!3m2!1d28.042703!2d84.4851365!5e0!3m2!1sen!2snp!4v1569233928174!5m2!1sen!2snp"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5" style="padding-bottom: 25px">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="fas fa-home"></i>
                            <h6>{{get_school_info('address')}}</h6>
                            <p>{{get_school_info('site_name')}}</p>
                        </div>
                        <div class="info_item">
                            <i class="fas fa-phone"></i>
                            <h6>{{get_school_info('phone')}}</h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="fas fa-envelope"></i>
                            <h6>{{get_school_info('email')}}</h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="{{route('frontend.enquiry')}}" method="post" id="contactForm"
                          >
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                       placeholder="Enter Subject" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1"
                                          placeholder="Enter Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right mb-5">
                            <button type="submit" value="submit" class="btn btn-submit mt-3">Submit</button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->

@endsection
