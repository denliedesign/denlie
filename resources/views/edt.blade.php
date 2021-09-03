@extends('layouts.app')
@section('title', 'Denlie Design - Dance Studio Website Updates')
@section('content')

    <div class="section-gray">
        @include('nav')
        <div class="container">
            <div class="pt-5">
                <h1 class="display-4 text-center text-uppercase" id="current-month"></h1>
                <p class="lead text-center">Encore Dance Theatre</p>
            </div>
            @foreach($trackers as $tracker)
                @if($tracker->month == 'current' AND $tracker->name == 'EDT')
                    <div class="pt-5">
                        <div class="d-flex justify-content-center my-2">
                            <h3 class="text-center m-0 p-0">{{ $tracker->name }} &nbsp;</h3>
                        </div>
                        <div class="bar rounded d-flex justify-content-start">
                            <div class="progress-bars hrs-{{ $tracker->minutes }} text-center rounded included-bars">
                                {{ $tracker->minutes }} min
                                @if( $tracker->paid == 'included')
                                    <div class="badge badge-primary">INCLUDED</div>
                                @endif
                                @if( $tracker->paid == 'paid')
                                    <div class="badge badge-success">PAID</div>
                                @endif
                                @if( $tracker->paid == 'unpaid')
                                    <div class="badge badge-secondary">UNPAID</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                @if($tracker->month == 'second' AND $tracker->name == 'EDT')
                    <div class="pb-5">
                        <div class="d-flex justify-content-center my-2">
                        </div>
                        <div class="bar rounded d-flex justify-content-start">
                            <div class="progress-bars hrs-{{ $tracker->minutes }} text-center rounded included-bars">
                                {{ $tracker->minutes }} min
                                @if( $tracker->paid == 'included')
                                    <div class="badge badge-primary">INCLUDED</div>
                                @endif
                                @if( $tracker->paid == 'paid')
                                    <div class="badge badge-success">PAID</div>
                                @endif
                                @if( $tracker->paid == 'unpaid')
                                    <div class="badge badge-secondary">UNPAID</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            <div class="py-5">
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-12">
                    <div class="col my-3 text-center" style="writing-mode: vertical-lr; text-orientation: mixed;"><h4>2021</h4></div>
                    <div class="col my-3"><h4>Jan</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Jan' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Feb</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Feb' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Mar</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Mar' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Apr</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Apr' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>May</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'May' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jun</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Jun' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jul</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Jul' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Aug</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Aug' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Sep</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Sep' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Oct</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Oct' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Nov</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Nov' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Dec</h4>
                        @foreach($trackers as $tracker)
                            @if($tracker->month == 'Dec' AND $tracker->name == 'EDT')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
