@extends('layouts.backend')
@section('title',' Vacancy | Add')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vacancy</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/vacancy')}}">Vacancy</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div style="margin-right: auto;margin-left: auto">
            <form action="{{route('vacancy.update')}}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Vacancy Title</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{get_vacancy_info('title')??null}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="editor1" name="description" required
                                              class="form-control">{!!get_vacancy_info('description') ?? 'Your Text Here'!!}</textarea>
                                    <script src="https://cdn.ckeditor.com/4.11.4/full-all/ckeditor.js"></script>
                                    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


                                    <script>
                                        var options = {
                                            extraPlugins: 'embed,autoembed',
                                            // extraPlugins: 'embed,autoembed,image2',
                                            height: 200,
                                            {{--filebrowserImageBrowseUrl: "{{url('/')}}" + '/laravel-filemanager?type=Images',--}}
                                            {{--filebrowserImageBrowseUrl: "{{url('admin/upload_image')}}"+"?type=Images",--}}
                                            {{--filebrowserImageUploadUrl: "{{url('/')}}" + '/laravel-filemanager/upload?type=Images&_token=',--}}
                                            {{--filebrowserBrowseUrl: "{{url('/')}}" + '/laravel-filemanager?type=Files',--}}
                                            {{--filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",--}}
                                            // filebrowserUploadMethod: 'form',
                                            embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
                                            // image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                                            // image2_disableResizer: true,
                                        };
                                        // var path = CKEDITOR.basePath.split('/');
                                        // path[ path.length-2 ] = 'upload_image';
                                        // config.filebrowserUploadUrl = path.join('/').replace(/\/+$/, '');
                                        // Add plugin
                                        // config.extraPlugins = 'filebrowser';
                                    </script>
                                    <script>
                                        // CKEDITOR.replace('my-editor1', options);
                                        CKEDITOR.replace('editor1', {
                                            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                                            filebrowserUploadMethod: 'form'
                                        });
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
