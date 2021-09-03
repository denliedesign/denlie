@foreach($trackers->unique('year') as $tracker)
    @if($tracker->year == '2021')
        <div class="py-5">
            <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-12">
                <div class="col my-3"><h4>Jan</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Jan')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Feb</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Feb')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Mar</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Mar')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Apr</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Apr')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>May</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'May')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Jun</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Jun')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Jul</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Jul')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Aug</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Aug')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Sep</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Sep')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Oct</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Oct')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Nov</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Nov')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
                <div class="col my-3"><h4>Dec</h4>
                    @foreach($trackers as $tracker)
                        @if($tracker->month == 'Dec')
                            {{ $tracker->name }}:
                            {{ $tracker->minutes }} min
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endforeach
