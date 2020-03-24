@extends('layouts.frontend')
@section('title',' About Us')
@section('content')
    <div class="banner-area banner-bg" style="    background: url(https://www.gorkhapolytechniccollege.com/img/background.jpeg) center/cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">Vacancy</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('/front/aboutus')}}">Vacancy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <section>
        <div class="container p-0" class="py-5">
{{--            <img src="{{asset('frontend/images/Untitled-1 copy.jpg')}}" class="py-5">--}}
            <h1 style="margin-top:50px" class="text-center">{{$vacancy_title->value??null}}</h1>
            <br>
            <div class="text-center">
            {!!$vacancy_description->value??null!!}
            </div>
        </div>
    </section>


@endsection
