@extends('layouts.backend')

@section('title',' Add Album')
@section('head')
    <style type="text/css">

        input[type=file] {

            display: inline;

        }

        #image_preview {

            border: 1px solid black;

            padding: 10px;

        }

        #image_preview img {

            width: 200px;

            padding: 5px;

        }

    </style>
@endsection
@section('content')
    <div class="card">
        <section class="content-header">
            <div class="card-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gallery</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('admin/gallery')}}">Gallery</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @include('includes.message')

        <section class="content">

            <div class="card-body ">

                <form method="post" action="{{route('gallery.store')}}" class="form-horizontal"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" required>
                                <span class="bmd-help">Enter title that best describes your Album, eg.School Day, Cultural Pogram 2019, etc..</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="text" name="description" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="container" id="container">

                        </div>
                    </div>
                    <div class="col-md-3">
                    <span class="btn btn-primary btn-round btn-file ">
                        <span class="fileinput-new">Select Image</span>
                        <input type="file" id="uploadFile" multiple="multiple" name="image[]" required>
                    </span>
                    </div>
                    <br>
                    <div id="image_preview"></div>
                    <div class="col-md-3 float-right">
                        <div class="row">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-round btn-success">Save
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{url('/admin/gallery')}}" class="btn btn-round btn-success">Cancel
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </section>
    </div>
    {{--</div>--}}

@stop
@section('script')

    <script type="text/javascript">
        //Initialize Select2 Elements--}}
        $('.select2').select2();

    </script>
    <script type="text/javascript">
        $("#uploadFile").change(function () {
            $('#image_preview').html("");
            var total_file = document.getElementById("uploadFile").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
            }
        });
        $('form').ajaxForm(function () {
            alert("Uploaded SuccessFully");
        });
    </script>
@stop
