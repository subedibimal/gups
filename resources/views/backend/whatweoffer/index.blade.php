@extends('layouts.backend')
@section('title', ' What We Offer')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">What We Offer</li>
                        <li class="breadcrumb-item active">List</li>
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
                        <h4 class="card-title">What We Offer</h4>


                        <a href="{{route('whatWeOffer.create')}}">
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
                                <th>Updated At</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($whatWeOffer as $whatWeOffer)
                                @if($whatWeOffer)
                                    <tr>
                                        <td>{{$whatWeOffer->id}}</td>
                                        <td>{{$whatWeOffer->title}}</td>
                                        <td>{{date('d M Y, D', strtotime($whatWeOffer->updated_at))}}</td>

                                        <td class="text-right">
                                            &emsp;<a href="{{route('whatWeOffer.edit',$whatWeOffer->id)}}"
                                                     title='Edit'><span
                                                        class='fa fa-edit'></span></a>
                                            &emsp;
                                            <a href="" title="Trash" onclick=" confirmDelete('{{$whatWeOffer->id}}');">
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
                                <th>Created At</th>
                                <th class="disabled-sorting text-right">Actions</th>
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
            var url = '{{ route("whatWeOffer.trash", ":id") }}';
            url = url.replace(':id', id);
            if (confirm('Are You sure, You Want To Trash?')) {
                event.preventDefault();
                document.location.href = url;
            } else {
                event.preventDefault();
            }
        }
    </script>
@endsection



