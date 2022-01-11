@extends('layouts.app')
@section('title', 'Studio Tracker')
@section('content')

    <div class="section-gray">
        @include('nav')
        <div class="container">
            <div class="py-5">
                <p class="lead text-center">Studio Tracker</p>
            </div>

            <div class="row">
                <div class="col-sm">
                    @include('/trackers/form')
                </div>
                <div class="col-sm">
                    <p>
                        kaz/Dan - prepaid - $12
                        <br><a href="/edt">edt/Anne - hourly - $20</a>
                        <br><a href="/dupac">dupac/Amy - prepaid - $20</a>
                        <br><a href="/kpdc">kpdc/Sandra - 2hrs - $175</a>
                        <br><a href="/cdmc">cdmc/Monique - 1hr - $100</a>
                        <br><a href="/ecpac">ecpac/Nina - 1hr - $100</a>
                        <br>norcal/Nina - 1hr - $100
                        <br><a href="/s3d">s3d/Brenda - 1hr - $100</a>
                        <br><a href="/kapa">kapa/Annie - 1hr - $100</a>
                        <br><a href="/bgdc">bgdc/Laurel - hourly - $20</a>
                        <br><a href="/expressions">expressions/Chelsea - 2hrs - $175</a>
                    </p>
                </div>
            </div>



            @foreach($trackers as $tracker)
                @if($tracker->month == 'current')
                    <div class="pt-5">
                        <div class="d-flex justify-content-center my-2">
                            <h3 class="text-center m-0 p-0">{{ $tracker->name }} &nbsp;</h3>
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        <div class="bar rounded d-flex justify-content-start">
                            <div class="progress-bars hrs-{{ $tracker->minutes }} text-center rounded">
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
                @if($tracker->month == 'second')
                    <div class="pb-5">
                        <div class="d-flex justify-content-center my-2">
                            <form action="/trackers/{{ $tracker->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                        <div class="bar rounded d-flex justify-content-start">
                            <div class="progress-bars hrs-{{ $tracker->minutes }} text-center rounded">
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

            <h2 class="text-center font-weight-bold py-0 my-0"><u>2021</u></h2>
            @include('/trackers/2021')
            <h2 class="text-center font-weight-bold py-0 my-0"><u>2022</u></h2>
            @include('/trackers/2022')


        </div>
    </div>

@endsection
