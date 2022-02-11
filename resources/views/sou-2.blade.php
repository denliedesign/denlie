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

{{--    <section style="height: 100vh; background: linear-gradient(to bottom right, #fcd850, #e5b702); position: relative; z-index: 8 !important;">--}}
{{--        <div class="container">--}}
{{--            <div class="row py-4 bee-hive d-flex align-items-center">--}}
{{--                <div class="col">--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                    <div class="hive"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
