@extends('layouts.app')
@section('title', 'Website Deals | Denlie Design')
@section('content')

    <div class="d-flex align-items-center justify-content-center bg-cyber">
        <p class="m-0 p-4 cyber-txt text-center">
            CYBER MONDAY SALE
            <br>
            <span class="font-weight-bold" style="font-size: 1.4em;">$350 OFF ANY WEBSITE</span>
            <br>
            <span>$350 OFF SEO UPGRADE</span>
        </p>
    </div>
    <div class="bg-gray">
        @include('nav')
        <h1 class="display-3 py-5 mb-0 text-center text-uppercase text-opaque">Deals</h1>
    </div>

    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <div class="my-5">
                        <h1 class="display-4 text-right">Quizzes</h1>
                        <p class="text-right mt-3">Personality Quizzes are great for building community within your studio! Or, quiz new clients with questions on students age, style preference, and availability to direct them to the perfect class! Up to 10 questions & results included.</p>
                        <p class="text-right extra-price"><span class="text-opaque"><small>$99</small></span> $75</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col">
                            <img src="/images/quiz-intro.png" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="/images/quiz-test.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <img src="/images/quiz-results.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <h1 class="display-4 text-right">Result Database</h1>
                        <p class="text-right mt-3">Don't send hundreds of emails every year. Record student levels for families to view online. Parent's have private access to their child's results. Works for level placements & audition results.</p>
                        <p class="text-right extra-price-peach"><span class="text-opaque"><small>$199</small></span> $149</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/images/result-database.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

@endsection
