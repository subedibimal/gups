@extends('layouts.backend')
@section('title',' Setting | Update')
@section('head')
<!-- daterange picker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{--<link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css"--}}
{{--      rel="stylesheet"/>--}}
<link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Information</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Site Information</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
            <form action="{{route('setting.update')}}" method="POST" enctype="multipart/form-data">
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
                                    <div class="form-group">
                                        <label for="site_name">Site Name</label>
                                        <input type="text" class="form-control" name="site_name"
                                               value="{{get_school_info('site_name') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="short_name">Short Name</label>
                                        <input type="text" class="form-control" name="short_name"
                                               value="{{get_school_info('short_name') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone"
                                               value="{{get_school_info('phone') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" class="form-control" name="mobile"
                                               value="{{get_school_info('mobile') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email"
                                               value="{{get_school_info('email') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address"
                                               value="{{get_school_info('address') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="working_days">Working Days</label>
                                        <input type="text" class="form-control" name="working_days"
                                               value="{{get_school_info('working_days') ?? null}}">
                                        <h6>Eg: Sun to Fri</h6>
                                    </div>
                                    <div class="form-group">
                                        <label for="working_time">Working Time</label>
                                        <input type="text" class="form-control" name="working_time"
                                               value="{{get_school_info('working_time') ?? null}}">
                                        <h6>Eg: 10 am to 6 pm</h6>
                                    </div>
                                    <label class="bmd-label-floating">Select Logo*</label>
                                    <div class="form-group">

                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">

                                            <div class="fileinput-new img-thumbnail"
                                                 style="max-width: 200px; max-height: 150px;">
                                                @if(get_school_info('logo')!=null)
                                                    <img src="{{url('/').Storage::url(get_school_info('logo'))}}"/>
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
                                            <input type="file" name="logo"></span>
                                                <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                                   data-dismiss="fileinput">Remove</a>
                                            </div>

                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label class="bmd-label-floating">Admission Time (From)*</label>
                                            <input type="text" placeholder="Admission From*" class="form-control datepicker"
                                                   id="datepicker1" name="admission_from" value="{{get_school_info('admission_from') ?? null}}" required="true">
                                        </div>

                                        <div class="form-group ">
                                            <label class="bmd-label-floating">Admission Time (To)*</label>
                                            <input type="text" placeholder="End Time*" class="form-control datepicker"
                                                   id="datepicker2" name="admission_to" value="{{get_school_info('admission_to') ?? null}}" required="true">
                                        </div>

                                    <div class="form-group">
                                        <label class="bmd-label-floating">Enter College Video Embed Code*</label>
                                        <input class="form-control" type="text"
                                               name="college_video_url"
                                               value="{{get_school_info('college_video_url') ?? null}}"
                                        />
                                        <h6>Note: Click Share on youtube video and click Embed and Copy all Embed
                                            code</h6>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Enter Footer Description</label>
                                        <input class="form-control" type="text"
                                               name="footer_description"
                                               value="{{get_school_info('footer_description') ?? null}}"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook_link">Facebook Link</label>
                                        <input type="url" class="form-control" name="facebook_link"
                                               value="{{get_school_info('facebook_link') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="google_link">Google+ Link</label>
                                        <input type="url" class="form-control" name="google_link"
                                               value="{{get_school_info('google_link') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram_link">Instagram Link</label>
                                        <input type="url" class="form-control" name="instagram_link"
                                               value="{{get_school_info('instagram_link') ?? null}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="skype_link">Skype Link</label>
                                        <input type="text" class="form-control" name="skype_link"
                                               value="{{get_school_info('skype_link') ?? null}}">
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
@section('script')


    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script>
        $(function () {
            $("#datepicker1").datepicker();
            $("#datepicker2").datepicker();
        });
    </script>

@endsection
