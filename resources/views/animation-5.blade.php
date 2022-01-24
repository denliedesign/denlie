@extends('layouts.app')
@section('title', 'Denlie Design - Animation Advanced')
@section('content')


    <div style="height: 100vh; background: url('/images/modern-studio.jpg'); background-position: center; background-attachment: fixed; background-size: cover;">
        <h1 class="text-center display-4 py-5" style="text-shadow: black 1px 1px 2px; color:white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">Ballet at<br>Misty's Dance Unlimited</h1>
        <div class="d-flex justify-content-end" style="position: absolute; bottom: 0; left: 50%; transform: translate(-50%, -50%);">
            <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-fall" style="font-size: 3em;" onclick="scrollFall()"></ion-icon>
        </div>
    </div>

    <div class="py-5 my-5">
        <div class="row" style="position: relative;">
            <div class="col-sm">
                <div class="scene-first">
                    <div class="viewer-first rounded shadow"></div>
                </div>
                <div class="bottom" id="arrived-fall" style="position: relative; bottom: 100vh;"></div>
            </div>
            <div class="col-sm">
                <div style="position: sticky; top: 200px; right: 0;" class="pt-5 mt-5">
                    <h2 class="font-weight-bold font-play">What Is Ballet?</h2>
                    <p style="font-size: 1.25em;">
                        Ballet is a type of performance dance that originated during the Italian Renaissance in the fifteenth century and later developed into a concert dance form in France and Russia. It has since become a widespread and highly technical form of dance with its own vocabulary. Ballet has been influential globally and has defined the foundational techniques which are used in many other dance genres and cultures. Various schools around the world have incorporated their own cultures. As a result, ballet has evolved in distinct ways.
                        <br>
                        <ion-icon name="arrow-up-circle-outline" class="icon-hover" id="scroll-swing" style="font-size: 3em;" onclick="scrollSwing()"></ion-icon>
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
