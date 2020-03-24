@extends('layouts.frontend')
@section('title',' Gallery')
@section('content')
    <div class="banner-area banner-bg" style="background: url('../../frontend/images/banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">Gallery</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('/front/gallery_category')}}">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- Gallery -->
    <section id="gallery">
        <h2 class="text-center mt-5 mb-5">{{$gal->title}}</h2>
        <div class="container-fluid">
            <div class="row pt-3">
                @foreach($gal->gallery_images as $gallery)

                    <div class="col-md-3">
                        <a href="{{url('/').Storage::url($gallery->image)}}"
                           class="b-link-stripe b-animate-go  swipebox ">
                            <img src="{{url('/').Storage::url($gallery->image)}}" alt="" class="shyam">

                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- Gallery -->







@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

@endsection