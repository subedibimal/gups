@extends('layouts.frontend')
@section('title',' Student Blog\'s')
@section('content')

    <section id="banner-area banner-bg" style="background: url(images/gups7.jpg) no-repeat;background-size: cover;" >
        <div class="banner-area banner-bg"  >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <h2 class="text-center" >STUDENT BLOG'S</h2>
                            <ul class="page-title-link">
                                <li><a href="index.html">Home</a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about.html">BLOG'S</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner For Every Page -->

    <!-- Student Blog -->
    <div class="detail mt-5" >
        <div class="container" >
            <div class="row" >
                <div class="col-lg-9" >
                    <h2 class="text-center" >{{ucfirst($blog->title)}}</h2>
                    <img src="{{url('/').Storage::url($blog->image)}}" class="img-fluid mt-3 mb-4">
                    <br>
                    <span><i class="far fa-clock pr-1"></i>{{$blog->date}} <i class="fas fa-map-marker-alt pl-4 pr-1"></i>{{ucfirst($blog->posted_by)}}</span>
                    <p class="pt-3" >{!! $blog->description !!}</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 pt-5" >
                    <div class="aboutquick" >
                        <h4 class="pt-3" >Quick Links</h4>
                        <a href="#"><i class="fas fa-arrow-right"></i>Our Team</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Chairman Message</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Managing Director's Message</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Facilities</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Cafeteria</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Lab</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Field Visit</a>
                        <h4 class="pt-5" >Program Offered</h4>
                        <a href="#"><i class="fas fa-arrow-right"></i>Science</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Management</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Humanities</a>
                        <a href="#"><i class="fas fa-arrow-right"></i>Commerce</a>
                    </div>
                    <div class="notice mt-5" >
                        <h4>Contact Info</h4>
                        <span>Gorkha United Public School</span>
                        <span>Madhyapur-Thimi,Bhaktapur</span>
                        <span class="pt-3" >+977-1-41231231 | 4115690</span>
                        <span>mail@gorkhapublicschool.edu.np</span>
                        <h6 class="pt-4" >Sun - Fri : 09:00 - 17:00</h6>
                        <h4 class="pt-3" >Social Links</h4>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
