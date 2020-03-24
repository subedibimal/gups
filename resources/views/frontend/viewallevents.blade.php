@extends('layouts.frontend')
@section('title',' Events')
@section('content')
    <div class="banner-area banner-bg" style="background: url(../frontend/images/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">Events</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                        href="{{url('/front/viewallevents')}}">Events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->

    <!-- viewallevent -->
    <section id="viewallevent">
        <h2 class="text-center pt-5 pb-5">CALENDAR</h2>
        <div class="container">
            <?php $i = 0; ?>
            @if($ev)
                @foreach($ev as $events)

                    <h5>{{array_keys($ev)[$i]}}</h5><br>
                    <div class="row pb-5">

                        @foreach($events as $event)
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="eventbox">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3">
                                            @if($event['event']=="holiday")
                                                <div class="holiday">
                                                    @elseif($event['event']=="activities")
                                                        <div class="activities">
                                                            @else
                                                                <div class="dateevent">
                                                                    @endif
                                                                    <div class="dayevent text-center">{{date('d', strtotime($event['date']))}}</div>
                                                                    <div class="monthevent text-center">{{date('M', strtotime($event['date']))}}</div>
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-9">
                                                            <div class="nameevent">{{$event['title']}}</div>
                                                            <div class="currentday">{{date('D', strtotime($event['date']))}}</div>
                                                        </div>
                                                </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                                <?php ++$i ?>
                                @endforeach


                            </div>

                    </div>
                    @else
                        <h3 class="text-center">No Events</h3>
                    @endif
        </div>
    </section>
    <!-- viewallevenet -->









@endsection