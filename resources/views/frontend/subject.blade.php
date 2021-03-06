@extends('layouts.frontend')
@section('title',' Subject')
@section('content')
    <div class="banner-area banner-bg" style="background: url('../../frontend/images/banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">SUBJECTS</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('front/subject/'.$subject->id)}}">{{$subject->course_name}}</a></li>
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
                <div class="col-lg-9 col-md-9 col-sm-12 pt-5">
                    <div class="about">
                        <h4>{{$subject->course_name}}</h4>
                        <p>{!!$subject->descriptions->description!!}</p>
                    </div>
                </div>
                @include('frontend.include.quicklink')
            </div>
        </div>
    </section>
    <!-- About Us -->


@endsection