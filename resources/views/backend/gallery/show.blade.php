@extends('layouts.backend')
@section('head')
    <link rel='stylesheet' href='{{asset('css/ekko-lightbox.css')}}'>
    <style>
        .row {
            margin: 15px;
        }

        img {
            margin-bottom: 15px;

        }

        #upload {
            display: none
        }

        .details {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background: rgba(34, 34, 34, 0.8);
            color: #fff;
            transition: all 0.3s linear;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .details:hover {

            opacity: .6;
        }

        .invisible {
            visibility: hidden;
        }

        .img-wrap .remove {

            position: absolute;
            top: -10px;
            right: 10px;
            z-index: 100;
            background-color: #FFF;
            padding: 5px 2px 2px;
            color: #000;
            font-weight: bold;
            cursor: pointer;
            opacity: .2;
            text-align: center;
            font-size: 22px;
            line-height: 10px;
            border-radius: 50%;
        }

        .img-wrap .remove:hover {
            opacity: 0.8;
        }

    </style>
@stop
@section('title',' Album | '.$album->title)
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/gallery')}}">Gallery</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @include('includes.message')

    {{--        <section class="content">--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <h2>
                    <a href="{{url($link.'admin/gallery')}}" class="btn btn-white btn-round btn-just-icon">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    {{$album->title}}
                </h2>
            </div>

            <div class="col-sm-3 text-right">
                <div class="dropdown">
                    <button class="btn btn-just-icon btn-white btn-fab btn-round dropdown-toggle"
                            id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a href="" class="btn btn-danger" onclick="
                                    if(confirm('Are You sure, You Want To Delete Album?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$album->id}}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }">Delete Album</a></li>
                        <li><a style="cursor:pointer" class="btn btn-danger" id="delete"><font color="white">Delete
                                    Image</font></a></li>
                    </ul>
                </div>
            </div>
            <form action="{{url('admin/gallery/'.$album->id)}}" id="delete-form-{{$album->id}}" method="post"
                  style="display: none">
                {{csrf_field()}}
                {{method_field('DELETE')}}
            </form>

        </div>
    </div>
    <div class="container">
        <div class="row img-wrap">

            <div class="col-sm-3">
                <form action="{{url('/admin/gallery/'.$album->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="add_image">
                        <input id="upload" type="file" name="image[]" multiple onchange="this.form.submit();"/>
                        <a href="javascript:{}" id="upload_link" data-gallery="gallery">
                            <img src="{{asset('img/image_placeholder.jpg')}}" class="img-thumbnail img-fluid rounded">
                            <div class="details">
                                <h5><i class="fa fa-plus" aria-hidden="true"></i>Add Image To Album</h5>
                            </div>
                        </a>
                    </div>
                </form>
            </div>

            @foreach($album->gallery_images as $image)
                <div id="{{$image->id}}" class="col-sm-6 col-md-4">
                        <span class="remove invisible"
                              onclick="
                                      if(confirm('Are You sure, You Want To Delete Image?'))
                                      {
                                      event.preventDefault();
                                      removePhoto({{$image->id}});
                                      }
                                      else{
                                      event.preventDefault();
                                      }"
                        ><i class="fa fa-window-close" aria-hidden="true"></i></span>
                    <a href="{{url('/').Storage::url($image->image)}}" data-toggle="lightbox"
                       data-gallery="example-gallery">
                        <img src="{{url('/').Storage::url($image->image)}}" class="img-thumbnail img-fluid">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{--        </section>--}}

@stop
@section('script')

    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>--}}
    <script src='{{asset('js/ekko-lightbox.js')}}'></script>
    <script type="text/javascript">
        $(function () {


            $(document).on('click', '[data-toggle="lightbox"]', function (event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        });
        $(function () {
            $("#upload_link").on('click', function (e) {
                e.preventDefault();
                $("#upload:hidden").trigger('click');
            });
        });
        $("#delete").click(function () {
            $(this).toggleClass("active");
            $('.remove').toggleClass("invisible");
        });
        function removePhoto(image_id) {

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url('admin/removephoto')}}",
                method: "POST",
                data: {"image_id": image_id},

                success: function (data) {
                    console.log(data);
                    document.getElementById(image_id).remove();
                }

            })

        }
    </script>
@stop

