@extends('layouts.app')
@section('title', 'Denlie Design - Dance Studio Website Updates')
@section('content')

    <div class="section-gray">
        @include('nav')
        <div class="container">
            <div class="py-5">
                <h1 class="display-4 text-center text-uppercase" id="current-month"></h1>
                <p class="lead text-center">KP Dance Center</p>
            </div>
            <div class="pb-5">
                <p class="text-center mb-0">2 Hours Included Updates</p>
                <div class="bar rounded d-flex justify-content-start">
                    <div class="text-center rounded included-bars"></div>
                </div>
            </div>
            <div class="pt-5">
                <p class="text-center mb-0">Additional Updates At $60/hr</p>
                <div class="bar rounded d-flex justify-content-start">
                    {{--                    <div class="progress-bars hrs-25 text-center rounded">--}}
                    {{--                        15 min--}}
                    {{--                        <div class="badge badge-success">PAID</div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="progress-bars hrs-25 text-center rounded">--}}
                    {{--                        15 min--}}
                    {{--                        <div class="badge badge-success"></div>--}}
                    {{--                    </div>--}}
                </div>
            </div>

            <div class="py-5">
                <div class="row row-cols-3 row-cols-sm-3 row-cols-md-6 row-cols-lg-12">
                    <div class="col my-3 text-center" style="writing-mode: vertical-lr; text-orientation: mixed;"><h4>2021</h4></div>
                    <div class="col my-3"><h4>Jan</h4> -</div>
                    <div class="col my-3"><h4>Feb</h4> -</div>
                    <div class="col my-3"><h4>Mar</h4> -</div>
                    <div class="col my-3"><h4>Apr</h4> -</div>
                    <div class="col my-3"><h4>May</h4> -</div>
                    <div class="col my-3"><h4>Jun</h4> 1 hr</div>
                    <div class="col my-3"><h4>Jul</h4> 0</div>
                    <div class="col my-3"><h4>Aug</h4> -</div>
                    <div class="col my-3"><h4>Sep</h4> -</div>
                    <div class="col my-3"><h4>Oct</h4> -</div>
                    <div class="col my-3"><h4>Nov</h4> -</div>
                    <div class="col my-3"><h4>Dec</h4> -</div>
                </div>
            </div>
        </div>
    </div>


@endsection
