@extends('layouts.app')
@section('title', 'Dance Studio Website Template | Denlie Design')
@section('content')

    <div class="bg-gray">
        @include('nav')
        <div class="py-5 container d-flex justify-content-center align-items-center">

            <form action="grade" method="post" id="teacher-quiz">
                <ul class="list-group d-flex align-items-center justify-content-center" id="quiz-questions">

                    <div class="d-flex align-items-top justify-content-center" style="height: 200vh;">
                        <div class="quiz-box">
                            <li class="list-group-item" style="width: 100%;" id="agequestion">
                                <h2 class="text-center">Age?</h2>
                                <div class="row d-flex justify-content-center">
                                    <div class="">
                                        <img src="/images/1-3.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-1-answers" onclick="nextQuestion()" id="baby" value="baby" />
                                        <label style="font-size: 1.5em;" for="baby" class="fwrd">1-3</label>
                                    </div>
                                    <div class="">
                                        <img src="/images/4-8.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-1-answers" onclick="nextQuestion()" id="lil" value="lil" />
                                        <label style="font-size: 1.5em;" for="lil" class="fwrd">4-8</label>
                                    </div>
                                    <div class="">
                                        <img src="/images/9-12.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-1-answers" onclick="nextQuestion()" id="kid" value="kid" />
                                        <label style="font-size: 1.5em;" for="kid" class="fwrd">9-12</label>
                                    </div>
                                    <div class="">
                                        <img src="/images/13-18.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-1-answers" onclick="nextQuestion()" id="teen" value="teen" />
                                        <label style="font-size: 1.5em;" for="teen" class="fwrd">13-18</label>
                                    </div>
                                </div>
                                <p class="text-muted text-right"><small>1 of 2</small></p>
                            </li>
                        </div>
                    </div>


                    <div class="d-flex align-items-center justify-content-center" style="height: 200vh;">
                        <div class="quiz-box">
                            <li class="list-group-item" id="stylequestion">
                                <h2 class="text-center">Which Style Are You Most Interested In?</h2>
                                <div class="row d-flex justify-content-center">
                                    <div>
                                        <img src="/images/ballet-dance.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-2-answers" onclick="endTest()" id="ballet" value="ballet" />
                                        <label style="font-size: 1.5em;" for="ballet" class="fwrd">Ballet</label>
                                    </div>
                                    <div>
                                        <img src="/images/tap-dance.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-2-answers" onclick="endTest()" id="tap" value="tap" />
                                        <label style="font-size: 1.5em;" for="tap" class="fwrd">Tap</label>
                                    </div>
                                    <div>
                                        <img src="/images/jazz-dance.jpg" alt="" class="img-fluid rounded" style="height: 300px; width: 200px; object-fit: cover; object-position: 100% 0; display: block;">
                                        <input type="radio" name="question-2-answers" onclick="endTest()" id="jazz" value="jazz" />
                                        <label style="font-size: 1.5em;" for="jazz" class="fwrd">Jazz</label>
                                    </div>
                                </div>
                                <p class="text-muted text-right"><small>2 of 2</small></p>
                            </li>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center" style="height: 200vh;">
                        <div class="quiz-box">
                            <li class="list-group-item" id="endtest">
                                <h2 class="text-center">Now it’s time to see your results...</h2>
                                <input type="submit" class="btn btn-primary" value="Submit Quiz">
                            </li>
                        </div>
                    </div>

                </ul>
                @csrf
            </form>

        </div>
    </div>

    <script>
        // (function($) {
        //     var timeout= null;
        //     var $mt = 0;
        //     $("#teacher-quiz .fwrd").click(function(){
        //         clearTimeout(timeout);
        //         timeout = setTimeout(function(){
        //             $mt = $mt - $(window).height();
        //             $("#quiz-questions").css("margin-top", $mt);
        //         }, 333);
        //     });
        // }(jQuery))
    </script>
