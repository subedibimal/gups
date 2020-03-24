@extends('layouts.frontend')
@section('title',' Chairman Message')
@section('content')
    <div class="banner-area banner-bg" style="background:url('../frontend/images/banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">ABOUT US</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('/front/chairman_message')}}">Chairman Message</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- About Us -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 mt-5">
                    <img src="{{url('/').Storage::url(get_info('chairman_image'))}}" class="img-fluid">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 pt-5">
                    <div class="about" style="margin-bottom: 55px">
                        <h4>{{get_info('chairman_name')}}</h4>
                        <p>
                            {!!get_info('chairman_message')!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection