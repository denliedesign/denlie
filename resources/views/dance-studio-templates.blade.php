@extends('layouts.app')
@section('title', 'Dance Studio Template | Denlie Design')
@section('content')

{{--    <div class="d-flex align-items-center justify-content-center bg-cyber">--}}
{{--        <p class="m-0 p-4 cyber-txt text-center">--}}
{{--            CYBER MONDAY SALE--}}
{{--            <br>--}}
{{--            <span class="font-weight-bold" style="font-size: 1.4em;">$350 OFF ANY WEBSITE</span>--}}
{{--            <br>--}}
{{--            <span>$350 OFF SEO UPGRADE</span>--}}
{{--        </p>--}}
{{--    </div>--}}
    <div class="bg-gray">
        @include('nav')
        <h1 class="display-3 py-5 mb-0 text-center text-uppercase text-opaque">MTJGD<br>Licensed<br>Design</h1>
    </div>
    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <h1 class="display-4 my-5 text-right">The<br>Look</h1>
                </div>
                <div class="col-lg-8">
                    <div class="layout-frame">
                        <img src="/images/dance-studio-template.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature">Feature</div>
                        <h1 class="display-4 text-right">COVID-19<br>Update<br>Banner</h1>
                        <p class="text-right mt-3">COVID-19 is constantly evolving, coming and going in waves. Keep families updated with your studio's latest response.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <video controls autoplay loop>
                        <source src="{{ asset('images/covid-update-banner.mp4') }}" type="video/mp4" style="width: 100%">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature-gray">Feature</div>
                        <h1 class="display-4 text-right">Stoplight</h1>
                        <p class="text-right mt-3">Notify families whether classes will be held online, in studio, or a combination of both with this simple but effective system.
                            <br>Choose between 2 looks: Traditional or Emojis</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <div class="col-lg-4">
                        <img src="/images/stoplight.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-4">
                        <img src="/images/yellow-light.png" alt="" class="img-fluid" style="max-height: 275px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature">Feature</div>
                        <h1 class="display-4 text-right">Class<br>Types</h1>
                        <p class="text-right mt-3">Let clients know you offer a wide variety of class types to accommodate all levels of comfort and learning. These flippable cards are colorful and engaging!</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-center">
                    <div class="row">
                        <div class="col p-1">
                            <img src="/images/color-block-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="col p-1">
                            <img src="/images/color-block-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col p-1">
                            <img src="/images/color-block-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="col p-1">
                            <img src="/images/color-block-4.png" alt="" class="img-fluid">
                        </div>
                        <div class="col p-1">
                            <img src="/images/color-block-5.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature-gray">Feature</div>
                        <h1 class="display-4 text-right">Safer<br>Studio</h1>
                        <p class="text-right mt-3">During these uncertain times, parents worry all the more about protecting their child. Put their concerns at ease with Safer Studio Guidelines and YPAD Certification.</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <img src="/images/safer-studio-ypad-certified.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature">Feature</div>
                        <h1 class="display-4 text-right">Dance Blog</h1>
                        <p class="text-right mt-3">Can be interchanged with Newsletters. Blogs are an excellent way to boost SEO and traffic to your site! Newsletters are perfect for updating families on monthly calendar items and events.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/images/dance-blog.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="section-color d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-8">
                    <div class="my-5">
                        <h1 class="display-4 text-center">Pricing</h1>
                        <div class="feature-gray mt-3">Includes:</div>
                        <div class="row">
                            <div class="col-sm">
                                <ul class="text-left">
                                    <li>Above Features</li>
                                    <li>Content Transfer</li>
                                    <li>10 Pages</li>
                                    <li>2 Content Management Systems</li>
                                    <li>Mobile-Friendly</li>
                                    <li>Google Ecosystem</li>
                                    <li>Search Engine Optimization</li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="text-left">
                                    <li>Web Hosting</li>
                                    <li>Back-End Set Up & Management</li>
                                    <li>Domain</li>
                                    <li>Virtual Private Server</li>
                                    <li>Transport Layer Security (SSL)</li>
                                    <li>Professional Email</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feature-gray mt-3">Add-ons:</div>
                        <ul class="text-left">
                            <li>Additional Pages: <span>$400/ea</span>
{{--                                <span class="cyber-txt badge badge-dark"><sup>$</sup>300/ea</span>--}}
                            </li>
                            <li>Additional CMS: <span>$500/ea</span>
{{--                                <span class="cyber-txt badge badge-dark"><sup>$</sup>400/ea</span>--}}
                            </li>
                            <li>Advanced SEO + Competitor Research + Keyword Package: <span>$1000</span>
{{--                                <span class="cyber-txt badge badge-dark"><sup>$</sup>650</span>--}}
                            </li>
                            <li>Optional Continued Monthly Reports of Competitors, Keywords, Analytics + Updated SEO: $200/mo</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center align-items-center text-black">
                    <div class="card" style="width: 18rem; height: max-content;">
                        <div class="card-body">
                            <h5 class="card-title">Licensed Design</h5>
                            <p class="card-text">
                                The official design of Misty's Dance Unlimited for MTJGD members. We convert your old site to the new design and transfer all your content!
                                <br><br>
                                1 hr<small class="text-muted">/mo</small> maintenance included
                            </p>
                        </div>
                        <div class="card-footer lead">
{{--                            <p class="m-0 cyber-txt badge badge-dark"><sup>$</sup>1150</p>--}}
                            <p class="m-0"><span>$1500</span> &middot; $100<small>/mo</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('contact')

@endsection
