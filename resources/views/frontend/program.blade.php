@extends('layouts.frontend')
@section('title',' Program')
@section('content')
    <div class="banner-area banner-bg" style="background: url(../frontend/images/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">PROGRAM</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('front/program')}}">Program</a></li>
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
                        <h4>Programs</h4>
                        <div class="row p-0 m-0 mt-5">
                            @foreach($programs as $program)
                                <div class="col-md-4 mb-3 pl-0">
                                    <div class="shadow p-4" style="border-right: 5px solid #00BCF1;">
                                        <h5>{{$program->name}}</h5>
                                        <p class="mb-0">
                                            {!!$program->description!!}
                                        </p>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @include('frontend.include.quicklink')
            </div>
        </div>
    </section>
    <!-- About Us -->


@endsection