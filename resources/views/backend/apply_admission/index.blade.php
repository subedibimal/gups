@extends('layouts.backend')
@section('title',' Apply For Admission')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Apply For Admission</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Apply For Admission</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div style="padding-left: 400px">
        <form action="{{route('apply_admission.update')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
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
                                           value="{{$data['title']->value ?? null}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle">Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle"
                                           value="{{$data['subtitle']->value ?? null}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea  class="form-control" name="description"
                                        rows="5" required >{{$data['description']->value ?? null}}</textarea>
                                </div>
                            <div class="form-group">
                                <label for="google_form_url">Google Form's Url</label>
                                <input type="url" class="form-control" name="google_form_url"
                                       value="{{$data['google_form_url']->value ?? null}}" required>
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