@extends('layouts.app')
@section('title', 'Denlie Design - Small Business & Dance Website Design')
@section('content')


    <div style="background: #1c1a27;">
        @include('nav')
    </div>
    <div class="bg-welcome" style="min-height: 100vh; z-index: 3;">
        <div class="bg-welcome-shader" style="z-index: 1;"></div>
        {{--        <div class="bg-dance-website-design">--}}
        {{--            <h1 class="text-center text-uppercase font-a" style="z-index: 2; position: absolute; bottom: 0; left: 50%; transform: translate(-50%, -50%); color: white; font-size: 5em; width: 100%;">Dance Website Design</h1>--}}
        {{--        </div>--}}
        <div class="container">
            {{--            <h1 class="display-2 text-center text-warm mt-5 pt-5">DENLIE<br>DE<span id="spacing">SIGN</span></h1>--}}
            {{--            <p class="lead text-center text-warm">Small Business & Dance Website Design</p>--}}
            <div class="main-logo" style="height: 100vh;">
                <img src="/images/denlie-logo-super-cropped.png" alt="" style="max-height: 250px; width: auto; max-width: 100%; height: auto; z-index: 4 !important; position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);">
            </div>
        </div>
    </div>
    <section style="background: white; min-height: 100vh; color: #1C1A27;" class="d-flex align-items-center my-2">
        <div class="container">
            <div class="dancing-text d-none d-lg-block">
                <div>
                    <h1 class="text-center font-a text-uppercase d-none d-md-block" style="font-size: 15em; letter-spacing: 10px;">
                        Dance
                    </h1>
                    <h1 class="text-center font-a text-uppercase d-block d-md-none" style="font-size: 6em; letter-spacing: 10px;">
                        Dance
                    </h1>
                </div>
                <div>
                    <h1 class="text-center font-a text-uppercase" style="font-size: 11.5em; letter-spacing: 10px;">
                        Website
                    </h1>
                </div>
                <div>
                    <h1 class="text-center font-a text-uppercase" style="font-size: 13.5em; letter-spacing: 10px;">
                        Design
                    </h1>
                </div>
            </div>
            <div class="d-block d-lg-none">
                <div>
                    <h1 class="text-center font-a text-uppercase d-none d-md-block" style="font-size: 10em;">
                        Dance
                    </h1>
                    <h1 class="text-center font-a text-uppercase d-block d-md-none" style="font-size: 6em;">
                        Dance
                    </h1>
                </div>
                <div>
                    <h1 class="text-center font-a text-uppercase" style="font-size: 4em;">
                        Website Design
                    </h1>
                </div>
            </div>
            <div class="row my-5 text-center font-g" style="font-size: 1.5em;">
                <div class="col-sm mb-3">
                    <div>
                        <strong>
                            <lord-icon
                                src="https://cdn.lordicon.com/sbiheqdr.json"
                                trigger="loop"
                                colors="primary:#1c1a27,secondary:#141122"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <br>Tweak Every Detail</strong>
                        <br>Not Confined by Templates.
                    </div>
                </div>
                <div class="col-sm mb-3">
                    <div>
                        <strong>
                            <lord-icon
                                src="https://cdn.lordicon.com/mlnkdrif.json"
                                trigger="loop"
                                colors="primary:#1c1a27,secondary:#141122"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <br>Slim, Sleek, and Speedy</strong>
                        <br>Not Stalled by Plugins.
                    </div>
                </div>
                <div class="col-sm mb-3">
                    <div>
                        <strong>
                            <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/rqbhwzez.json"
                                trigger="hover"
                                colors="primary:#1c1a27,secondary:#141122"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <br>Quality and Distinction</strong>
                        <br>Not Copies.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div>
            <div class="row">
                <div class="col p-0 m-0">
                    <div>
                        {{--                        <img src="/images/mdu-9-2021.jpg" alt="" style="width: 100%;">--}}
                        <img src="/images/scroll-mdu.gif" alt="" style="width: 100%;">
                        {{--                        <video controls autoplay loop>--}}
                        {{--                            <source src="{{ asset('images/scroll-mdu.mp4') }}" type="video/mp4" style="width: 100%;">--}}
                        {{--                        </video>--}}
                    </div>
                    <div>
                        <img src="/images/scroll-blc.gif" alt="" style="width: 100%;">
                    </div>
                    <div>
                        <img src="/images/scroll-expressions.gif" alt="" style="width: 100%;">
                    </div>
                </div>
                <div class="col p-0 m-0">
                    <div>
                        <img src="/images/scroll-bgdc.gif" alt="" style="width: 100%;">
                    </div>
                    <div class="portfolio-crop d-none d-md-block">
                        <img src="/images/everythingdance-9-2021.jpg" alt="" style="width: 100%;">
                    </div>
                    <div class="portfolio-crop-mobile d-block d-md-none">
                        <img src="/images/everythingdance-9-2021.jpg" alt="" style="width: 100%;">
                    </div>
                    <div>
                        <img src="/images/scroll-kpdc.gif" alt="" style="width: 100%;">
                    </div>
                </div>
                <div class="col p-0 m-0">
                    <div>
                        <img src="/images/scroll-dupac.gif" alt="" style="width: 100%;">
                    </div>
                    <div>
                        <img src="/images/scroll-edt.gif" alt="" style="width: 100%;">
                    </div>
                    <div>
                        <img src="/images/scroll-s3d.gif" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="min-height: 100vh; color: white;" class="d-flex align-items-center my-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="font-a text-uppercase text-darken-1" style="font-size: 10em;">
                        70-80%
                    </h1>
                    <h1 class="font-a text-uppercase text-darken-2" style="font-size: 4em;">
                        potential customers look online before visiting in person
                    </h1>
                    <p class="font-g text-darken-3" style="font-size: 1.5em;">
                        Our dance websites are designed to grow your business.
                    </p>
                </div>
                <div class="col-sm-4 d-flex align-items-center justify-content-center">
                    <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/wtfdpwey.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#f5bf9b"
                        style="width:250px;height:250px">
                    </lord-icon>
                </div>
            </div>
        </div>
    </section>

    <div class="pointe-banner-wrap">
        <div class="pointe-banner"></div>
    </div>

    <section style="min-height: 100vh;" class="py-5 my-5">
        <div class="container">
            <div class="row pb-5 d-flex align-items-center">
                <div class="col-sm">
                    <img src="/images/fluid-frames-logo.png" alt="mtjgd logo" style="width: 100%; height: auto;">
                    <div class="d-inline d-flex justify-content-center my-3">
                        <div style="font-size: 2.5em; background: #7cb7d3; width: 100%;" class="text-center ff-social pt-2 shadow rounded">
                            <a class="mx-3" style="color: white;" href="https://fluidframesdancephotography.mypixieset.com/" target="_blank"><ion-icon name="globe-outline"></ion-icon></a>
                            <a class="mx-3" style="color: white;" href="https://www.instagram.com/fluidframes_tx/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a class="mx-3" style="color: white;" href="https://www.facebook.com/FluidFramesTX/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h1 class="font-a text-uppercase text-left" style="font-size: 1.5em; color: #1C1A27;">included with every website</h1>
                    <p class="text-left font-g">
                        Fluid Frames stock photos are personally curated photos with your studio needs in mind. Shots are posed and directed by a professional dancer so that your website reflects great dance technique. Because these shots are a partnership between Denlie Design and Fluid Frames, we're able to create dynamic moving photos and other interesting graphics to make your website standout and look more dynamic, professional, and inviting.
                    </p>
                </div>
            </div>
            <div class="card-columns">
                <div class="card p-3 ff-1">
                    <img src="/images/fluid-frames-portrait-outdoors.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 ff-2">
                    <img src="/images/fluid-frames-landscape-indoors-2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 ff-3">
                    <img src="/images/fluid-frames-landscape-indoors.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 ff-4">
                    <img src="/images/fluid-frames-portrait-indoors.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 ff-5">
                    <img src="/images/fluid-frames-portrait-indoors-2.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 ff-6">
                    <img src="/images/fluid-frames-landscape-outdoors.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div>
                <h1 class="font-a text-uppercase text-left pt-5" style="font-size: 1.5em; color: #1C1A27;">WANT SHOTS OF YOUR DANCERS?</h1>
                <p class="text-left font-g">
                    <strong>Capture your studio with a full shoot.</strong>
                    Fluid Frames specializes in dynamic, technically-accurate, and body positive dance photography.
{{--                    <br><br>That means no stagnant boring pictures, clean technique, and age appropriate modesty (i.e. no crotch-shots and only flattering angles). When you book with them, each shoot is curated by a professional dancer to ensure your students look great and receive unique shots. Lighting and posing is personalized to match the vibe and style of the studio.--}}
{{--                    <br><br>They keep their prices low to encourage studio owners to add a fee to their booking price so that it's financially beneficial for the studios- easily allowing studios to pocket $3,000+. They understand each studio has different processes so they have flexible booking options.--}}
{{--                    <br><br>--}}
                    Please browse their <a style="color: #7cb7d3;" href="https://fluidframesdancephotography.mypixieset.com/" target="_blank">website</a> to see their full scope of options and then email them to book!
                </p>
            </div>
        </div>
    </section>

    @include('pricing')

{{--    <div class="container mb-5">--}}
{{--        <h1 class="text-center">The official <a href="/website-templates-for-dance-studio">Licensed Design for 2023</a><br>is now available!</h1>--}}
{{--        <div id="refer-btn-wrap" class="text-center">--}}
{{--            <a id="refer-claim" class="btn btn-info my-2" href="/website-templates-for-dance-studio"><button type="button">Take A Look</button></a>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('contact')

@endsection
