@extends('layouts.app')
@section('title', 'Denlie Design - Animation Advanced')
@section('content')


<div style="height: 50vh; width: 100%;" class="d-flex align-items-center justify-content-center">
    <h1 class="text-center font-damion display-4">Making Memories</h1>
</div>

<div>
    <div class="row">
        <div class="col-sm ml-5">
            <div class="scene">
                <div class="viewer rounded shadow"></div>
            </div>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
<div>
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm mr-5">
            <div class="scene-two">
                <div class="viewer-two rounded shadow"></div>
            </div>
        </div>
    </div>
</div>

<div style="width: 100%;" class="d-flex align-items-center justify-content-center">
    <div style="transform: translateY(-300px)">
        <h1 class="text-center font-damion display-4" >With Animations</h1>
        <p class="text-center">$99 Early Bird Special</p>
        <div class="btn btn-info text-center" id="up-on-top" style="display: block;">Scroll To Top</div>
    </div>

</div>



@endsection
