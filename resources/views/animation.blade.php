@extends('layouts.app')
@section('title', 'Denlie Design - Animation')
@section('content')

    <div id="animation-page">
        <div class="bg-gray">
            @include('nav')
            <h1 class="display-3 py-5 mb-0 text-center text-uppercase text-opaque">Animation</h1>
        </div>
        <div class="section-color d-flex align-items-center" id="section-animate-1">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center justify-content-end">
                        <h1 class="display-4 my-5 text-right"><span class="highlight-seo">Animate</span> Your<br>Dance Studio Website!</h1>
                    </div>
                    <div class="col-lg-7">
                        <img src="/images/animate-ballerina.jpg" alt="ballerina on pointe" class="animate-ballerina img-fluid shadow rounded" style="height: 600px; width: auto;">
                    </div>
                </div>
            </div>
        </div>
    <div class="texture-parallax">
        <div class="bg-texture"></div>
        <div class="content-texture-wrapper">
            <h1 class="display-3 text-center">Did You See That?<br>There's More</h1>
        </div>
    </div>
        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center justify-content-end">
                        <h1 class="display-4 my-5 text-right">slide in<br>& out<br>images!</h1>
                    </div>
                    <div class="col-lg-7">
                        <img src="/images/animate-recital.jpg" alt="" class="animate-recital img-fluid shadow rounded" style="height: 600px; width: auto;">
                    </div>
                </div>
            </div>
        </div>



@endsection
