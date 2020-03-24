@extends('layouts.backend')
@section('title', ' News & Events | Trash')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">News And Event</li>
                        <li class="breadcrumb-item active">Trash</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">

                        </div>
                        <h4 class="card-title">News & Events | Trash Detail</h4>


                        <a href="{{route('news_and_events.create')}}">
                            <button class="btn btn-primary btn-round float-right mr-1">
                                Add New
                            </button>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="toolbar">

                        </div>
                        <table id="example2" class="table table-bordered table-hover"
                               cellspacing="0" width="100%" style="width:100%">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news_and_events as $news_and_event)
                                @if($news_and_event)
                                    <tr>
                                        <td>{{$news_and_event->id}}</td>
                                        <td>{{$news_and_event->title}}</td>
                                        <td>{{$news_and_event->location}}</td>
                                        <td>{{date('d M Y, D', strtotime($news_and_event->date))}}</td>
                                        <td>{{$news_and_event->start}}-{{$news_and_event->end}}</td>

                                        <td class="text-right">

                                            <a href="{{route('news_and_events.publish',$news_and_event->id)}}"
                                               title='Publish'><i class="far fa-check-circle"></i></a>

                                            &emsp;<a href="{{route('news_and_events.edit',$news_and_event->id)}}"
                                                     title='Edit'><span
                                                        class='fa fa-edit'></span></a>
                                            &emsp;
                                            <a href="" onclick=" confirmDelete('{{$news_and_event->id}}');"
                                               title="Delete">
                                                <span class="fa fa-trash"></span></a>


                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th class="text-right">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
@stop
@section('script')
    <script>
        function confirmDelete(id) {
            var url = '{{ route("news_and_events.destroy", ":id") }}';
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



