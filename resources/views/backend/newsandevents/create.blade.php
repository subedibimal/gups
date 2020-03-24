@extends('layouts.backend')
@section('head')
    <!-- daterange picker -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"
          rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
@endsection
@section('title', ' News & Events | Add')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/news_and_event')}}">News And Events</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-12">
        <form id="TypeValidation" class="form-horizontal" action="{{route('news_and_events.store')}}" method="post"
              enctype="multipart/form-data">
            <div class="card ">
                <div class="card-header card-header-success card-header-text">
                    <div class="card-text">
                        <h4 class="card-title">News & Events</h4>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-11 row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">News & Events Title*</label>
                                    <input class="form-control" type="text" maxlength="100" name="title"
                                           required="true"/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group ">
                                    <label class="bmd-label-floating">Event Date*</label>
                                    <input type="text" class="form-control" id="datepicker" name="date"
                                           autocomplete="off" placeholder="MM/DD/YYYY*" required="true">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating"><i class="fa fa-map-marker"
                                                                         aria-hidden="true"></i> Location*</label>
                                    <input type="text" class="form-control" name="location" required="true">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Start Time*</label>
                                    <input type="text" placeholder="Start Time*" class="form-control timepicker"
                                           id="timepicker1" name="start" required="true">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group ">
                                    <label class="bmd-label-floating">End Time*</label>
                                    <input type="text" placeholder="End Time*" class="form-control timepicker"
                                           id="timepicker2" name="end" required="true">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">
                                        No Of Days*
                                    </label>
                                    <input type="number" min="1" class="form-control" name="no_of_days" required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Select Event*</label>
                                <select class="form-control" name="event" required
                                >
                                    <option selected disabled>Select Event</option>
                                    <option value="holiday" @if(old('event')=='holiday') selected @endif>Holiday
                                    </option>
                                    <option value="activities" @if(old('event')=='activities') selected @endif>
                                        Activities
                                    </option>
                                    <option value="regular" @if(old('event')=='regular') selected @endif>Regular
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Select Featured Image*</label>
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
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="featured_image"></span>
                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label class="bmd-label-floating">Event Description*</label>
                                {{--tinymce beginning--}}
                                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                                <textarea name="description" class="form-control my-editor" required></textarea>
                                <script>
                                    var editor_config = {
                                        path_absolute: "{{url('/')}}/",
                                        selector: "textarea.my-editor",
                                        plugins: [
                                            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                                            "searchreplace wordcount visualblocks visualchars code fullscreen",
                                            "insertdatetime media nonbreaking save table contextmenu directionality",
                                            "emoticons template paste textcolor colorpicker textpattern"
                                        ],
                                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                                        relative_urls: false,
                                        file_browser_callback: function (field_name, url, type, win) {
                                            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                                            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                                            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                                            if (type == 'image') {
                                                cmsURL = cmsURL + "&type=Images";
                                            } else {
                                                cmsURL = cmsURL + "&type=Files";
                                            }

                                            tinyMCE.activeEditor.windowManager.open({
                                                file: cmsURL,
                                                title: 'Filemanager',
                                                width: x * 0.8,
                                                height: y * 0.8,
                                                resizable: "yes",
                                                close_previous: "no"
                                            });
                                        }
                                    };

                                    tinymce.init(editor_config);
                                </script>
                                {{---------end of tiny mce---------}}


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-9 col-form-label"></label>
                        <button class="btn btn-primary btn-round float-right mr-1">
                            Add News & Events
                        </button>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@stop
@section('script')


    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>
    <script>
        $('#timepicker1').timepicker({
            showInputs: false
        });
    </script>
    <script>
        $('#timepicker2').timepicker({
            showInputs: false
        });
    </script>
@endsection