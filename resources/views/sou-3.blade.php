@extends('layouts.app')
@section('title', 'Denlie Design - SOU 2')
@section('content')

    <section onclick="downToBottom()" style="height: 100vh; background: linear-gradient(to bottom, #d6d6d6, #f2f2f2); position: relative;" class="logo-bg">
        <div class="">
            <div class="" style="height: 100vh;">
                {{--                <img src="/images/denlie-logo-cropped.png" alt="denlie logo" class="img-fluid">--}}
                <h1 class="text-center your-dance-studio" style="width: 100%; position: fixed; top: 26.5%; font-size: 7.5em; letter-spacing: -2.5px; font-family: 'Galano Grotesque'; color: white; z-index: 3;">Your Dance Studio</h1>
            </div>
            <div class="row">
                <div class="col mx-0 px-0">
                    <div class="d-flex justify-content-end align-items-center">
                        <img src="/images/sliced-dancer-1.png" alt="flexible dancer" style="height: 100vh; position: fixed; top: 0; left: 0; z-index: 2;">
                    </div>
                </div>
                <div class="col mx-0 px-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="/images/sliced-dancer-2.png" alt="flexible dancer" style="height: 100vh; position: fixed; top: 0; left: 493.65px; z-index: 4;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row" style="position: relative; z-index: 5; background: white;">
            <div class="col-sm-5 p-0">
                <div class="scene-first" style="height: 100vh; overflow: hidden;">
                    <div class="viewer-first" style="border-right: 4px solid #142240;"></div>
                </div>
                <div class="bottom" id="arrived-fall" style="position: absolute; bottom: 0;"></div>
            </div>
            <div class="col-sm-7 p-0">
                <div style="position: sticky; top: 200px; right: 0;" class="pt-5 mt-5 mx-5">
                    <h1 class="sou-title-sm" style="color: #142240;">We Have Built a Reputation for <div class="pb-3 pr-3" style="background: linear-gradient(to right, #f2bc9b, #e38941); position: relative; z-index: -1; width: max-content;">Excellence</div> in Dance Instruction</h1>
                    {{--                    <p style="font-size: 1.25em;">--}}
                    <p class="sou-text" style="color: #3c4246;">
                        From your child’s first class to their graduation performance, YDS has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, YDS is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                        <br>
                        <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-swing" style="font-size: 3em;" onclick="scrollSwing()"></ion-icon>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-colors-blue" style="height: 100vh; overflow: hidden; position: relative; z-index: 5; background: white;" onclick="blueToRed()">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm d-flex align-items-center">
                    <div class="animate-blue-text" style="opacity: 0; color: #3c4246;">
                        <h1 class="sou-title mb-4">Contem<br><span style="letter-spacing: 5px;">porary</span></h1>
                        <p class="sou-text">Contemporary dance is a style of expressive dance that combines elements of several dance genres including modern, jazz, lyrical and classical ballet. Contemporary dancers strive to connect the mind and the body through fluid dance movements.</p>
                    </div>
                </div>
                <div class="col-sm" style="position: relative;">
                    <div style="background: linear-gradient(to top, #61728c, #004f6e); height: 200%; width: 200%; position: absolute; z-index: -1; transform: rotate(50deg);" class="sou-box-blue"></div>
                    <img src="/images/sou-blue.jpg" alt="" style="width: 450px; height: auto; transform: translateY(20px);" class="rounded shadow animate-colors-blue">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="height: 100vh; background: white; position: relative; z-index: 8 !important;">
        <div class="container">
            <div onclick="upOnTop()" class="text-capitalize" style="font-size: 5em; font-family: 'Bebas Neue'; color: white; line-height: 1;">
                <p class="text-darken-1">My daughters and I love YDS!</p>
                <p class="text-darken-2">They have been at the studio 9 years</p>
                <p class="text-darken-3">and they still love going to dance.</p>
                <p class="text-darken-4">It is a second home.</p>
            </div>
        </div>
    </section>
    <div id="bottom"></div>

@endsection
