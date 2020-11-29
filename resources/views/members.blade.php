@extends('layouts.app')
@section('title', 'Member Bonuses | Denlie Design')
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
        <h1 class="display-3 py-5 mb-0 text-center text-uppercase text-opaque">Member Bonuses</h1>
    </div>
    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row pb-5">
                <div class="member-benefit col-sm">
                    <p class="text-center">
                        <ion-icon name="chatbubble-ellipses-outline" style="font-size: 3em;"></ion-icon>
                        <br><span class="font-weight-bold text-uppercase" style="font-size: 1.5em;">Review</span>
                        <br>Write a review and get a $50 off Denlie Design coupon
                        <br><small>Applicable to any Denlie Design fee</small>
                    </p>
                </div>
                <div class="member-benefit col-sm">
                    <p class="text-center">
                        <ion-icon name="people-outline" style="font-size: 3em;"></ion-icon>
                        <br><span class="font-weight-bold text-uppercase" style="font-size: 1.5em;">Refer</span>
                        <br>Refer a friend and get the Advanced SEO upgrade for free
                        <br><small>Each additional referral earns 4 mo. of SEO updates for free</small>
                    </p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="member-benefit col-sm">
                    <p class="text-center">
                        <ion-icon name="business-outline" style="font-size: 3em;"></ion-icon>
                        <br><span class="font-weight-bold text-uppercase" style="font-size: 1.5em;">Sales</span>
                        <br>Members, get these add-ons NOW while they are on sale!
                        <br><small>Additional Pages &middot; Additional CMS &middot; Advanced SEO &middot; Quizzes &middot; Result Database</small>
                    </p>
                </div>
                <div class="member-benefit col-sm">
                    <p class="text-center">
                        <ion-icon name="heart-outline" style="font-size: 3em;"></ion-icon>
                        <br><span class="font-weight-bold text-uppercase" style="font-size: 1.5em;">Support</span>
                        <br>We are small businesses supporting small businesses
                    </p>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="section-gray d-flex align-items-center">--}}
{{--        <div class="container text-opaque">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="my-5">--}}
{{--                        <div class="feature">Feature</div>--}}
{{--                        <h1 class="display-4 text-right">COVID-19<br>Update<br>Banner</h1>--}}
{{--                        <p class="text-right mt-3">COVID-19 is constantly evolving, coming and going in waves. Keep families updated with your studio's latest response.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-8">--}}
{{--                    <video controls autoplay loop>--}}
{{--                        <source src="{{ asset('images/covid-update-banner.mp4') }}" type="video/mp4" style="width: 100%">--}}
{{--                    </video>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    @include('contact')

@endsection
