@extends('layouts.backend')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('title',' Enquiry | List')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Enquiry</li>
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
                        <h1 class="card-title">Enquiry</h1>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enquiries as $enquiry)
                                <tr>
                                    <td>{{$enquiry->id}}</td>
                                    <td>{{$enquiry->name}}</td>
                                    <td>{{$enquiry->email}}</td>
                                    <td>{{$enquiry->subject}}</td>
                                    <td>{{date('d M Y, D', strtotime($enquiry->updated_at))}}</td>
                                    <td>
                                        &emsp;<a href="{{route('enquiry.show',$enquiry->id)}}"
                                                 title='Show'><span
                                                    class='fa fa-eye'></span></a>
                                        &emsp;
                                        <a href="" onclick="confirmDelete('{{$enquiry->id}}');">
                                            <span class="fa fa-trash"></span></a></td>
                                </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Updated At</th>
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
            var url = '{{ route("enquiry.destroy", ":id") }}';
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