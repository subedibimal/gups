@extends('layouts.frontend')

@section('title',' Gallery')
@section('content')
<div class="banner-area banner-bg" style="background: url('../frontend/images/banner.jpg');" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2 class="text-center" >Gallery</h2>
                    <ul class="page-title-link">
                        <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="{{url('front/gallery_category')}}">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner -->

<!-- Gallery categories -->
<section id="gallerycategories" >
    <div class="container" >
        <div class="gallery-info mt-5">
            <div class="row mb-5" >
                @foreach($galleries as $gallery)

                <div class="col-md-3 gallery-grids">
                    <a class="w3 wow zoomIn animated" data-wow-delay=".5s" href="{{route('frontend.gallery',$gallery->id)}}">
                        <img src="{{url('/').Storage::url($gallery->gallery_images[0]->image)}}" class="img-fluid zoom-img" alt=""/>
                        <div class="b-wrapper">
                            <h5>{{$gallery->title}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
    </div>
</section>
<!-- Gallery categories -->



@endsection
