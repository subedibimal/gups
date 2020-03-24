@extends('layouts.backend')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('title',' Subject Description | List')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Subject Description</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Subject Description</h1>
                    </div>
                    <div>
                        <a href="{{route('course_description.create')}}" class="btn btn-primary float-right">Add New</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Subject Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->courses->course_name}}
                                    </td>
                                    <td>
                                        &emsp;<a href="{{route('course_description.edit',$course->id)}}"
                                                 title='EDIT'><span
                                                    class='fa fa-edit'></span></a>
                                        &emsp;
                                        <a href="" onclick=" confirmDelete('{{$course->id}}');">
                                            <span class="fa fa-trash"></span></a></td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Subject Name</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        function confirmDelete(id) {
            var url = '{{ route("course_description.destroy", ":id") }}';
            url = url.replace(':id', id);
            if (confirm('Are You sure, You Want To Delete?')) {
                event.preventDefault();
                document.location.href = url;
            } else {
                event.preventDefault();
            }
        }
    </script>
@endsection