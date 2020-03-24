@extends('layouts.backend')
@section('title',' Three Blocks | Edit')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Three Blocks</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/fourblock')}}">Three Blocks</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
        <form action="{{route('fourblock.update',$block->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title"
                                       value="{{$block->title}}" required>
                            </div>


                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" required>{{$block->description}}</textarea>
                            </div> <label>Block Icon</label>
                            <div class="form-group">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                    <div class="fileinput-new img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                        @if($block->icon!=null)
                                            <img src="{{url('/').Storage::url($block->icon)}}"/>
                                        @else<img
                                            src="{{asset('img/image_placeholder.jpg')}}"
                                            alt="..."
                                        >
                                        @endif</div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px;"></div>
                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select Image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="first_slider_image"></span>
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
@endsection
