@extends('layouts.app')
@section('title', 'Dance Studio Website Template | Denlie Design')
@section('content')

    <div>
        @include('nav-light')
        <div class="py-5">
            <h3 class="text-center text-muted mb-0">2024</h3>
            <h1 class="display-3 mb-0 text-center text-uppercase">MTJGD<br>Licensed<br>Design</h1>
        </div>
    </div>
    <div class="bg-lava py-5 d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <div class="my-5">
                        <h1 class="display-4 text-right">Brighter & Happier</h1>
                        <p class="text-right mt-3">This is the year of <strong>JOY</strong> and our latest design aims to capture the joy that your dancers experience every time they step into your studio.
                            <br><br>Fill your site with warm colors, soft fonts, smiling faces, and glowing testimonials to invite new families to join in the joy of your dance family.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex justify-content-center">
                        <video src="/images/mdu-lava.mp4" type="video/mp4" controls="" class="shadow rounded" style="max-width: 950px; width: 100%; height: auto;"></video>
                    </div>
{{--                    <div class="layout-frame">--}}
{{--                        <img src="/images/dance-studio-website-template-2021.jpg" alt="" class="img-fluid">--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    @include('pricing')

    <div class="bg-lava py-5 text-opaque">
        <div class="container">
            <h1 class="text-center">We Are Not Like Other Web Companies</h1>
            <p>
                <br><span class="font-weight-bold" style="font-size: 1.5em;">1.</span> Our websites are not built using site-builders like Wordpress or Wix. We build each website from scratch, tailored to your studio's needs.
                <br><br><span class="font-weight-bold" style="font-size: 1.5em;">2.</span> After your website is finished, we manage all updates and changes for you. Like having your own personal web guy.
                <br><br><span class="font-weight-bold" style="font-size: 1.5em;">3.</span> If you prefer to have control, we can do that too! With our "Custom Design" package, we can make every section of your website editable so that making updates is as easy as changing your Facebook status.
            </p>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="/images/seo-light-2.jpg" alt="" class="img-fluid shadow rounded">
                </div>
                <div class="col-sm d-flex align-items-center">
                    <h1 class="">Don't forget to ask about <a href="/seo">SEO</a>!
                        <br>Once you have a beautiful new website...
                        <br>you'll want to make sure it's seen</h1>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="bg-lava py-5 text-opaque">--}}
{{--        <div class="container">--}}
{{--            <h1 class="text-center">Keep Your Site At The Leading-Edge</h1>--}}
{{--            <p class="text-center my-0 py-0">Add one of these special offers to automatically keep your website fresh year after year.</p>--}}
{{--            <div class="row mt-3">--}}
{{--                <div class="col-sm-2"></div>--}}
{{--                <div class="col-sm mx-3 pt-3 mb-5 shadow rounded text-center">--}}
{{--                    <p class="font-g mb-0" style="font-size: 1.5em">Auto-Refresh</p>--}}
{{--                    <p class="font-a mb-0" style="font-size: 4em;">$50/mo</p>--}}
{{--                    <p class="font-a mb-0" style="color: #EBE82E; transform: translateY(-10px);">$200 in Savings!</p>--}}
{{--                    <p class="font-g">--}}
{{--                        Be the first to get the latest licensed design when you sign up for our Auto-Refresh to automatically update your website every year.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-sm mx-3 pt-3 mb-5 shadow rounded text-center">--}}
{{--                    <p class="font-g mb-0" style="font-size: 1.5em">6 Months SEO</p>--}}
{{--                    <p class="font-a mb-0" style="font-size: 4em;">$299/mo</p>--}}
{{--                    <p class="font-a mb-0" style="color: #EBE82E; transform: translateY(-10px);">Save $799 with a FREE Refresh</p>--}}
{{--                    <p class="font-g">--}}
{{--                        Sign up for 6 months of Advanced Search Engine Optimization and get next year's Licensed Design free!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('contact')

@endsection
