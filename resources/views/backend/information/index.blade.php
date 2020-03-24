@extends('layouts.backend')

@section('title',' Information | Update')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Information Update</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="col-md-12 col-12">
            <div class="wizard-container">
                <div class="card card-wizard" data-color="rose" id="wizardProfile">
                    <form id="TypeValidation" class="form-horizontal " action="{{route('information.update')}}"
                          method="post"
                          enctype="multipart/form-data">
                        @method('PUT')

                        <div class="card-header text-center">
                            <h1 class="card-title">
                                Information Setting
                            </h1>
                        </div>
                        <div class="wizard-navigation">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#admission" data-toggle="tab" role="tab"
                                       aria-expanded="true">
                                        Admission
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#facility" data-toggle="tab" aria-expanded="false">
                                        Facility
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#chairman_message" data-toggle="tab"
                                       aria-expanded="false">
                                        Chairman's Message
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#md_message" data-toggle="tab" aria-expanded="false">
                                        Managing Director's Message
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#programco_message" data-toggle="tab"
                                       aria-expanded="false">
                                        Program Co-ordinator's Message
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#scholarship" data-toggle="tab" aria-expanded="false">
                                        Scholarship
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body ">
                            <div class="tab-content">
                                <div class="tab-pane active" id="admission">
                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="admission" class="bmd-label-floating">Admission*
                                                </label>
                                                <textarea id="my-editor1" name="admission" required
                                                          class="form-control">@if(!empty($data['admission']->value)){!!$data['admission']->value ?? 'Your Text Here'!!}@endif</textarea>
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
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane " id="facility">

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="facility" class="bmd-label-floating">Facility*
                                                </label>
                                                <textarea id="my-editor2" name="facility" required
                                                          class="form-control">@if(!empty($data['facility']->value )){!!$data['facility']->value ?? 'Your Text Here'!!}@endif</textarea>
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
                                                    CKEDITOR.replace('my-editor2', options);
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane " id="chairman_message">

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="chairman_name">Chairman's Name</label>
                                                <input type="text" class="form-control" name="chairman_name"
                                                       value="@if(!empty($data['chairman_name']->value )){{$data['chairman_name']->value ?? null}}@endif">
                                            </div>
                                            <label class="bmd-label-floating">Select Chairman's Image*</label>
                                            <div class="form-group">

                                                <div class="fileinput fileinput-new text-center"
                                                     data-provides="fileinput">

                                                    <div class="fileinput-new img-thumbnail"
                                                         style="max-width: 200px; max-height: 150px;">
                                                         @if(!empty($data['chairman_image']))
                                                        @if($data['chairman_image']->value != null)
                                                            <img src="{{url('/').Storage::url($data['chairman_image']->value)}}"/>
                                                        @else<img
                                                                src="{{asset('img/image_placeholder.jpg')}}"
                                                                alt="..."
                                                        >
                                                        @endif</div>
                                                        @endif
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="chairman_image"></span>
                                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="chairman_message" class="bmd-label-floating">Chairman's
                                                    Message*
                                                </label>
                                                <textarea id="my-editor3" name="chairman_message" required
                                                          class="form-control">@if(!empty($data['chairman_message']->value)) {!!$data['chairman_message']->value ?? 'Your Text Here'!!}@endif</textarea>
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
                                                    CKEDITOR.replace('my-editor3', options);
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane " id="md_message">

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="md_name">Managing Director's Name</label>
                                                <input type="text" class="form-control" name="md_name"
                                                       value="@if(!empty($data['md_name']->value)){{$data['md_name']->value ?? null}}@endif">
                                            </div>
                                            <label class="bmd-label-floating">Select Managing Director's Image*</label>
                                            <div class="form-group">

                                                <div class="fileinput fileinput-new text-center"
                                                     data-provides="fileinput">

                                                    <div class="fileinput-new img-thumbnail"
                                                         style="max-width: 200px; max-height: 150px;">
                                                         @if(!empty($data['md_image']))
                                                        @if($data['md_image']->value != null)
                                                            <img src="{{url('/').Storage::url($data['md_image']->value)}}"/>
                                                        @else<img
                                                                src="{{asset('img/image_placeholder.jpg')}}"
                                                                alt="..."
                                                        >
                                                        @endif</div>
                                                        @endif
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="md_image"></span>
                                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="md_message" class="bmd-label-floating">Managing Director's
                                                    Message*
                                                </label>
                                                <textarea id="my-editor4" name="md_message" required
                                                          class="form-control">@if(!empty($data['md_messsage']->value)){!!$data['md_message']->value ?? 'Your Text Here'!!}@endif</textarea>
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
                                                    CKEDITOR.replace('my-editor4', options);
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane " id="programco_message">

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="programco_name">Program Co-ordinator's Name</label>
                                                <input type="text" class="form-control" name="programco_name"
                                                       value=" @if(!empty($data['programco_name']->value)){{$data['programco_name']->value ?? null}}@endif">
                                            </div>
                                            <label class="bmd-label-floating">Select Image*</label>
                                            <div class="form-group">

                                                <div class="fileinput fileinput-new text-center"
                                                     data-provides="fileinput">

                                                    <div class="fileinput-new img-thumbnail"
                                                         style="max-width: 200px; max-height: 150px;">
                                                         @if(!empty($data['programco_image']))
                                                            @if($data['programco_image']->value != null)
                                                                <img src="{{url('/').Storage::url($data['programco_image']->value)}}"/>
                                                            @else<img
                                                                    src="{{asset('img/image_placeholder.jpg')}}"
                                                                    alt="..."
                                                            >
                                                            @endif</div>
                                                        @endif
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                        <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="programco_image"></span>
                                                        <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="programco_message" class="bmd-label-floating">Program
                                                    Co-ordinator's Message*
                                                </label>
                                                <textarea id="my-editor5" name="programco_message" required
                                                          class="form-control">@if(!empty($data['programco_message']->value)) {!!$data['programco_message']->value ?? 'Your Text Here'!!} @endif</textarea>
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
                                                    CKEDITOR.replace('my-editor5', options);
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane " id="scholarship">

                                    <div class="row">
                                        <label class="col-sm-1 col-form-label"></label>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="scholarship" class="bmd-label-floating">Scholarship*
                                                </label>

                                                <textarea id="my-editor6" name="scholarship" required
                                                          class="form-control">@if(!empty($data['scholarship']->value)){!!$data['scholarship']->value ?? 'Your Text Here'!!}@endif</textarea>
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
                                                    CKEDITOR.replace('my-editor6', options);
                                                </script>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto float-right">
                                <button type="submit" class="btn btn-round btn-primary">Update Information</button>
                            </div>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
