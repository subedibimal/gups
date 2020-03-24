@extends('layouts.backend')
@section('title',' Slider | Update')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Slider Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Slider Information</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
        <form action="{{route('slider.update')}}" method="POST" enctype="multipart/form-data">
            {{--@method("PUT")--}}
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>First Slider Subtitle</label>
                                <input type="text" class="form-control" name="first_slider_subtitle"
                                       value="{{get_slider_info('first_slider_subtitle') ?? null}}" required>
                            </div>
                            <div class="form-group">
                                <label>First Slider Title</label>
                                <input type="text" class="form-control" name="first_slider_title"
                                       value="{{get_slider_info('first_slider_title') ?? null}}" required>
                            </div>
                            <label>First Slider Image</label>
                            <div class="form-group">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                    <div class="fileinput-new img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                        @if(get_slider_info('first_slider_image')!=null)
                                            <img src="{{url('/').Storage::url(get_slider_info('first_slider_image'))}}"/>
                                        @else<img
                                                src="{{asset('img/image_placeholder.jpg')}}"
                                                alt="..."
                                        >
                                        @endif</div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="first_slider_image"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Second Slider Subtitle</label>
                                <input type="text" class="form-control" name="second_slider_subtitle"
                                       value="{{get_slider_info('second_slider_subtitle') ?? null}}" required>
                            </div>
                            <div class="form-group">
                                <label>Second Slider Title</label>
                                <input type="text" class="form-control" name="second_slider_title"
                                       value="{{get_slider_info('second_slider_title') ?? null}}" required>
                            </div>
                            <label>Second Slider Image</label>
                            <div class="form-group">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                    <div class="fileinput-new img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                        @if(get_slider_info('second_slider_image')!=null)
                                            <img src="{{url('/').Storage::url(get_slider_info('second_slider_image'))}}"/>
                                        @else<img
                                                src="{{asset('img/image_placeholder.jpg')}}"
                                                alt="..."
                                        >
                                        @endif</div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="second_slider_image"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Third Slider Subtitle</label>
                                <input type="text" class="form-control" name="third_slider_subtitle"
                                       value="{{get_slider_info('third_slider_subtitle') ?? null}}" required>
                            </div>
                            <div class="form-group">
                                <label>Third Slider Title</label>
                                <input type="text" class="form-control" name="third_slider_title"
                                       value="{{get_slider_info('third_slider_title') ?? null}}" required>
                            </div>
                            <label>Third Slider Image</label>
                            <div class="form-group">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                    <div class="fileinput-new img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                        @if(get_slider_info('third_slider_image')!=null)
                                            <img src="{{url('/').Storage::url(get_slider_info('third_slider_image'))}}"/>
                                        @else<img
                                                src="{{asset('img/image_placeholder.jpg')}}"
                                                alt="..."
                                        >
                                        @endif</div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="third_slider_image"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Submit" class="btn btn-success float-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>
    {{--</div>--}}
@endsection