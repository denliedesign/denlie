@extends('layouts.app')
@section('title', 'Dance Studio Website Template | Denlie Design')
@section('content')

    <div class="bg-gray text-white" style="height: 100vh; overflow-y: hidden;">
        @include('nav')
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">

            <form method="post" action="quiz/test">
                <div class="text-center">
                    <h1>Which Class Is Right For You?</h1>
                    <p>We will find the perfect match for your child!</p>
                    <input type="submit" id="submit" class="btn btn-primary" value="Take The Quiz">
                </div>
                @csrf
            </form>

        </div>
    </div>
