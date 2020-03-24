@extends('layouts.backend')
@section('title',' Semester | Add')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Semester</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/semester')}}">Semester</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
            <form action="{{route('semester.store')}}" method="POST" enctype="multipart/form-data">
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
                                    <label for="semester">Semester Name*</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{old('name')}}" required>
                                    <h6>Eg: First Semester</h6>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="my-editor1" name="description" required
                                              class="form-control"
                                              required>{!!old('description') ?? 'Your Text Here'!!}</textarea>
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
