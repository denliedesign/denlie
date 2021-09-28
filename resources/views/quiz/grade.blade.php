@extends('layouts.app')
@section('title', 'Dance Studio Website Template | Denlie Design')
@section('content')

    <div class="bg-gray text-white" style="height: 100vh; overflow-y: hidden;">
        @include('nav')
        <div class="container d-flex align-items-center justify-content-center text-center" style="height: 100vh; font-size: 2em;">
            <div>
{{--                <h1 class="mt-5">Here’s Which Class Is Perfect For You</h1>--}}


                <?php
                $answer1 = $_POST['question-1-answers'];
                $answer2 = $_POST['question-2-answers'];

                $totalBabyBallet = 0;
                $totalBabyTap = 0;
                $totalBabyJazz = 0;
                $totalLilBallet = 0;
                $totalLilTap = 0;
                $totalLilJazz = 0;
                $totalKidBallet = 0;
                $totalKidTap = 0;
                $totalKidJazz = 0;
                $totalTeenBallet = 0;
                $totalTeenTap = 0;
                $totalTeenJazz = 0;


                if ($answer1 == "baby") {
                    $totalBabyBallet = $totalBabyBallet + 1;
                    $totalBabyTap = $totalBabyTap + 1;
                    $totalBabyJazz = $totalBabyJazz + 1;
                }
                if ($answer1 == "lil") {
                    $totalLilBallet = $totalLilBallet + 1;
                    $totalLilTap = $totalLilTap + 1;
                    $totalLilJazz = $totalLilJazz + 1;
                }
                if ($answer1 == "kid") {
                    $totalKidBallet = $totalKidBallet + 1;
                    $totalKidTap = $totalKidTap + 1;
                    $totalKidJazz = $totalKidJazz + 1;
                }
                if ($answer1 == "teen") {
                    $totalTeenBallet = $totalTeenBallet + 1;
                    $totalTeenTap = $totalTeenTap + 1;
                    $totalTeenJazz = $totalTeenJazz + 1;
                }

                if ($answer2 == "ballet") {
                    $totalBabyBallet = $totalBabyBallet + 1;
                    $totalLilBallet = $totalLilBallet + 1;
                    $totalKidBallet = $totalKidBallet + 1;
                    $totalTeenBallet = $totalTeenBallet + 1;
                }
                if ($answer2 == "tap") {
                    $totalBabyTap = $totalBabyTap + 1;
                    $totalLilTap = $totalLilTap + 1;
                    $totalKidTap = $totalKidTap + 1;
                    $totalTeenTap = $totalTeenTap + 1;
                }
                if ($answer2 == "jazz") {
                    $totalBabyJazz = $totalBabyJazz + 1;
                    $totalLilJazz = $totalLilJazz + 1;
                    $totalKidJazz = $totalKidJazz + 1;
                    $totalTeenJazz = $totalTeenJazz + 1;
                }


                ?>


                    @if (
                        $totalBabyBallet == 2)
                    <strong><u>Baby Ballet</u></strong> is the perfect class for you!
                        <br><small>Baby Ballet is a ballet style dance class for 1-3 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                        $totalBabyTap == 2)
                    <strong><u>Baby Tap</u></strong> is the perfect class for you!
                        <br><small>Baby Tap is a tap style dance class for 1-3 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                        $totalBabyJazz == 2)
                    <strong><u>Baby Jazz</u></strong> is the perfect class for you!
                        <br><small>Baby Jazz is a jazz style dance class for 1-3 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                    $totalLilBallet == 2)
                    <strong><u>Lil Ballet</u></strong> is the perfect class for you!
                        <br><small>Lil Ballet is a ballet style dance class for 4-8 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                    $totalLilTap == 2)
                    <strong><u>Lil Tap</u></strong> is the perfect class for you!
                        <br><small>Lil Tap is a tap style dance class for 4-8 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalLilJazz == 2)
                    <strong><u>Lil Jazz</u></strong> is the perfect class for you!
                        <br><small>Lil Jazz is a jazz style dance class for 4-8 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalKidBallet == 2)
                    <strong><u>Kid Ballet</u></strong> is the perfect class for you!
                        <br><small>Kid Ballet is a ballet style dance class for 9-12 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalKidTap == 2)
                    <strong><u>Kid Tap</u></strong> is the perfect class for you!
                        <br><small>Kid Tap is a tap style dance class for 9-12 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalKidJazz == 2)
                    <strong><u>Kid Jazz</u></strong> is the perfect class for you!
                    <br><small>Kid Jazz is a jazz style dance class for 9-12 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalTeenBallet == 2)
                    <strong><u>Teen Ballet</u></strong> is the perfect class for you!
                        <br><small>Teen Ballet is a ballet style dance class for 13-18 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalTeenTap == 2)
                    <strong><u>Teen Tap</u></strong> is the perfect class for you!
                        <br><small>Teen Tap is a tap style dance class for 13-18 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @elseif (
                $totalTeenJazz == 2)
                    <strong><u>Teen Jazz</u></strong> is the perfect class for you!
                        <br><small>Teen Jazz is a jazz style dance class for 13-18 year olds</small>
                    <br><div class="btn btn-outline-danger">Learn More</div>
                        <div class="btn btn-danger">Register Now</div>

                    @endif
            </div>
        </div>
    </div>

@endsection

