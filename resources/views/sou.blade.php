@extends('layouts.app')
@section('title', 'Denlie Design - Animation Advanced')
@section('content')

    <section id="section-colors-blue" style="height: 100vh; overflow: hidden;">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm d-flex align-items-center">
                    <div class="animate-blue-text" style="opacity: 0; color: #3c4246;">
                        <h1 style="font-family: 'Galano Grotesque'; font-size: 6em; line-height: 1.618em;" class="text-uppercase mb-4">Contem<br><span style="letter-spacing: 5px;">porary</span></h1>
                        <p style="font-family: 'Acumin Pro'; font-size: 1.275em; line-height: 1.618em;">Contemporary dance is a style of expressive dance that combines elements of several dance genres including modern, jazz, lyrical and classical ballet. Contemporary dancers strive to connect the mind and the body through fluid dance movements.</p>
                    </div>
                </div>
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to top, #61728c, #004f6e); height: 200%; width: 200%; position: absolute; z-index: -1; transform: rotate(50deg);" class="sou-box-blue"></div>
                    <img src="/images/sou-blue.jpg" alt="" style="width: 450px; height: auto; transform: translateY(20px);" class="rounded shadow animate-colors-blue">
                </div>
            </div>
        </div>
    </section>
    <section id="section-colors-red" style="height: 100vh; overflow: hidden;">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to top left, #8e1303, #ed1206); height: 200%; width: 200%; position: absolute; top:0; left: -100%; z-index: -1; transform: rotate(-50deg);" class="sou-box-red"></div>
                    <img src="/images/sou-red.jpg" alt="" style="width: 450px; height: auto; transform: translateY(20px); " class="rounded shadow animate-colors-red">
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div class="text-right animate-red-text" style="opacity: 0; color: #3c4246;">
                        <h1 style="font-family: 'Galano Grotesque'; font-size: 6em; line-height: 1.618em;" class="text-uppercase mb-4">Ballet</h1>
                        <p style="font-family: 'Acumin Pro'; font-size: 1.275em; line-height: 1.618em;">Ballet is an elegant and historic dance form renowned for its grace and difficulty with precise and highly formalized set steps and gestures. It originated in Renaissance Italy and established its present form during the 19th century.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-colors-yellow" style="height: 100vh; overflow: hidden;">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm d-flex align-items-center">
                    <div class="animate-yellow-text" style="opacity: 0; color: #3c4246;">
                        <h1 style="font-family: 'Galano Grotesque'; font-size: 6em; line-height: 1.618em;" class="text-uppercase mb-4">Jazz</h1>
                        <p style="font-family: 'Acumin Pro'; font-size: 1.275em; line-height: 1.618em;">Jazz dancing is a form that showcases a dancer's originality. All jazz dancers interpret and execute moves and steps in their own way. This type of dancing consists of fancy footwork, big leaps, and quick turns.</p>
                    </div>
                </div>
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to bottom right, #fcd850, #e5b702); height: 200%; width: 200%; position: absolute; z-index: -1; transform: rotate(50deg);" class="sou-box-yellow"></div>
                    <img src="/images/sou-yellow.jpg" alt="" style="width: 450px; height: auto; transform: translateY(20px);" class="rounded shadow animate-colors-yellow">
                </div>
            </div>
        </div>
    </section>
    <section id="section-colors-purple" style="height: 100vh; overflow: hidden;">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to bottom right, #806f91, #683f51); height: 200%; width: 200%; position: absolute; top:0; left: -100%; z-index: -1; transform: rotate(-50deg);" class="sou-box-purple"></div>
                    <img src="/images/sou-purple.jpg" alt="" style="width: 450px; height: auto; transform: translateY(20px);" class="rounded shadow animate-colors-purple">
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div class="text-right animate-purple-text" style="opacity: 0; color: #3c4246;">
{{--                        <h1 style="font-family: 'Galano Grotesque'; font-size: 6em; line-height: 1.618em;" class="text-uppercase mb-4">Mod<br><span style="letter-spacing: 11.75px;">ern</span></h1>--}}
                        <h1 style="font-family: 'Galano Grotesque'; font-size: 6em; line-height: 1.618em;" class="text-uppercase mb-4">Modern</h1>
                        <p style="font-family: 'Acumin Pro'; font-size: 1.275em; line-height: 1.618em;">Modern dance is a dance style that focuses on a dancer's own interpretations instead of structured steps, as in traditional ballet dancing. Modern dancers reject limitations of classical ballet and favor movements derived from the expression of their inner feelings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
