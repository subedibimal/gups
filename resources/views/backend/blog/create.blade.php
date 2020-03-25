@extends('layouts.backend')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    @endsection
@section('title',' Blog | Add')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/blog')}}">Blog</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                    <label for="title">Blog Title</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{old('title')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Posted By</label>
                                    <input type="text" class="form-control" name="posted_by"
                                           value="{{old('posted_by')}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Date</label>
                                    <input id="datepicker1" type="text" class="form-control" name="date"
                                           value="{{old('date')}}" required>
                                </div>
                                <label class="bmd-label-floating">Select Featured Image*</label>
                                    <div class="form-group">

                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                            <div class="fileinput-new img-thumbnail"
                                                 style="max-width: 200px; max-height: 150px;">
                                                <img
                                                    src="{{asset('img/image_placeholder.jpg')}}"
                                                    alt="..."
                                                ></div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                 style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select Image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image"></span>
                                                <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>

                                        </div>
                                    </div>
                            <label for="description">Description</label>
                                <div class="form-group">

                                    <textarea id="my-editor1" name="description" required
                                              class="form-control">{!!old('description') ?? 'Your Text Here'!!}</textarea>
                                    <script src="https://cdn.ckeditor.com/4.11.4/standard-all/ckeditor.js"></script>
                                    <script>
                                        var options = {
                                            extraPlugins: 'embed,autoembed,image2',
                                            height: 200,
                                            filebrowserImageBrowseUrl: "{{url('/')}}" + '/laravel-filemanager?type=Images',
                                            filebrowserImageUploadUrl: "{{url('/')}}" + '/laravel-filemanager/upload?type=Images&_token=',
                                            filebrowserBrowseUrl: "{{url('/')}}" + '/laravel-filemanager?type=Files',
                                            filebrowserUploadUrl: "{{url('/')}}" + '/laravel-filemanager/upload?type=Files&_token=',
                                            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
                                            image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                                            image2_disableResizer: true,
                                        };
                                    </script>
                                    <script>
                                        CKEDITOR.replace('my-editor1', options);
                                    </script>
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
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker1').datepicker({
    uiLibrary: 'bootstrap4',
    closeOnDateSelect: true,
    format: "dd-mm-yyyy"
    });
        </script>
    @endsection
