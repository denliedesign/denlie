@extends('layouts.app')
@section('title', 'Denlie Design - Animation Advanced')
@section('content')


    <div style="height: 100vh; background: url('/images/modern-studio.jpg'); background-position: center; background-attachment: fixed; background-size: cover;">
        <h1 class="sou-title text-center" style="color:white; position: absolute; top: 40%; width: 100%;">Your Dance Studio</h1>
        <div class="d-flex justify-content-end" style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, -50%);">
            <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-fall" style="font-size: 3em; transform: rotate(180deg);" onclick="scrollFall()"></ion-icon>
        </div>
    </div>

    <div>
        <div class="row" style="position: relative;">
            <div class="col-sm-5 p-0">
                <div class="scene-first" style="height: 100vh; overflow-y: hidden;">
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
    </div>


@endsection
