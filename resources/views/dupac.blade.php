@extends('layouts.app')
@section('title', 'Denlie Design - Dance Studio Website Updates')
@section('content')

    <div class="section-gray">
        @include('nav')
        <div class="container">
            <div class="py-5">
                <h1 class="display-4 text-center text-uppercase" id="current-month"></h1>
                <p class="lead text-center">Dance Unlimited</p>
            </div>
            <div>
                <p class="text-center mb-0">$200 Pre-Pay for 3.5 hours</p>
                <div class="bar rounded d-flex justify-content-start">
                    <div class="progress-bars included-bars hrs-100 text-center rounded">
                        3 hrs 30 min
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <p class="text-center mb-0">$200 Pre-Pay for 3.5 hours</p>
                <div class="bar rounded d-flex justify-content-start">
                    <div class="progress-bars included-bars hrs-100 text-center rounded">
                        3 hrs 30 min
                    </div>
                </div>
            </div>

            <div class="py-5">
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-12">
                    <div class="col my-3 text-center" style="writing-mode: vertical-lr; text-orientation: mixed;"><h4>2021</h4></div>
                    <div class="col my-3"><h4>Jan</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Jan' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Feb</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Feb' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Mar</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Mar' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Apr</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Apr' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>May</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'May' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jun</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Jun' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jul</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Jul' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Aug</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Aug' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Sep</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Sep' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Oct</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Oct' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Nov</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Nov' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Dec</h4>
                        @foreach($trackers->where('year', '2021') as $tracker)
                            @if($tracker->month == 'Dec' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!---------------- 2022 ------------->

            <div class="py-5">
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-12">
                    <div class="col my-3 text-center" style="writing-mode: vertical-lr; text-orientation: mixed;"><h4>2022</h4></div>
                    <div class="col my-3"><h4>Jan</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Jan' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Feb</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Feb' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Mar</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Mar' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Apr</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Apr' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>May</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'May' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jun</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Jun' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Jul</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Jul' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Aug</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Aug' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Sep</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Sep' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Oct</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Oct' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Nov</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Nov' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col my-3"><h4>Dec</h4>
                        @foreach($trackers->where('year', '2022') as $tracker)
                            @if($tracker->month == 'Dec' AND $tracker->name == 'DUPAC')
                                <span class="text-muted">{{ $tracker->minutes }}<small>min</small></span>
                                <div class="graph graph-{{$tracker->minutes}}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <!---------------- END OF 2022 ------------->


        </div>
    </div>

@endsection
