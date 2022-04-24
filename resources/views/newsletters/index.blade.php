@extends('layouts.app')
@section('title', 'Denlie Design - Dance Studio Website News')
@section('content')

    <div>
        @include('nav-light')
        <div class="container">
            <div class="py-5 text-center">
                <small class="font-weight-bold text-uppercase">NEWSLETTERS</small>
                <h1 class="display-4 text-uppercase font-play py-4">DENLIE DESIGN</h1>
                <p>Get The Most Out Of Your Dance Studio Website</p>
            </div>
            <div>
                <div>
                    <div class="row">
                        <div class="col-sm my-1">
                            <div class="gray-grad text-center my-3 rounded shadow">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/spring-flowers.jpg" alt="daughter in sandbox" style="height: 200px; width: 100%; object-fit: cover; object-position: 10% 45%;">
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-center">
                                        <a href="/spring" class="text-dark font-play display-2 text-decoration-none">SPRING 22</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm my-1">
                            <div class="gray-grad text-center my-3 rounded shadow">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/september-news.jpg" alt="abstract" style="height: 200px; width: 100%; object-fit: cover; object-position: 10% 45%;">
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-center">
                                        <p style="line-height: 0.25;">
                                            <a href="/newsletters/september-2021" class="text-dark font-play display-2 text-decoration-none">SEPT 21</a>
                                            {{--                                            <br>--}}
                                            {{--                                            <small>coming soon</small>--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm my-1">
                            <div class="gray-grad text-center my-3 rounded shadow">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/july-news.jpg" alt="abstract" style="height: 200px; width: 100%; object-fit: cover; object-position: 10% 45%;">
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-center">
                                        <p style="line-height: 0.25;">
                                            <a href="/newsletters/july-2021" class="text-dark font-play display-2 text-decoration-none">JULY 21</a>
                                            {{--                                            <br>--}}
                                            {{--                                            <small>coming soon</small>--}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm my-1">
                            <div class="gray-grad text-center my-3 rounded shadow">
                                <div class="row">
                                    <div class="col">
                                        <img src="/images/sandbox.jpg" alt="daughter in sandbox" style="height: 200px; width: 100%; object-fit: cover; object-position: 10% 45%;">
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-center">
                                        <a href="/newsletters/june-2021" class="text-dark font-play display-2 text-decoration-none">JUNE 21</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>





@endsection
