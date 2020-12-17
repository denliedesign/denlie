@extends('layouts.app')
@section('title', 'Denlie Design - Websites for Small Businesses')
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
    <div class="section-gray">
        @include('nav')
        <div class="container">
            <h1 class="display-2 text-center text-warm mt-5 pt-5">DENLIE<br>DE<span id="spacing">SIGN</span></h1>
            <p class="lead text-center text-warm">Websites for Small Businesses</p>
            <div class="row mt-5 pt-5 text-center">
                <div class="col-sm-4 mb-3">
                    <strong>
                        <ion-icon name="build-outline" style="font-size: 3em;"></ion-icon>
                        <br>Tweak Every Detail</strong>
                        <br>Not Confined by Templates.

                </div>
                <div class="col-sm-4 mb-3">
                    <strong>
                        <ion-icon name="bicycle-outline" style="font-size: 3em;"></ion-icon>
                        <br>Slim, Sleek, and Speedy</strong>
                        <br>Not Stalled by Plugins.

                </div>
                <div class="col-sm-4 mb-3">
                    <strong>
                        <ion-icon name="trophy-outline" style="font-size: 3em;"></ion-icon>
                        <br>Quality and Distinction</strong>
                        <br>Not Copies.

                </div>
            </div>
{{--            <p class="mt-4 text-muted">--}}
{{--                <strong>Websites Built From Scratch.</strong> Instead of using clunky "one size fits all" site builders like Wordpress, Squarespace, or Wix, our software works to make a site that is adaptable, fast, and professional.--}}
{{--            </p>--}}
        </div>
</div>

<div class="section-color text-opaque d-flex align-items-center" id="portfolio">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <h1 class="display-4 my-5">Portfolio</h1>
{{--                <p class="mt-4">Dance studio websites, dance stores, portfolios, restaurants, and everything else.</p>--}}
            </div>
            <div class="col-lg-8">
                <div id="carouselPortfolioControls" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="http://everythingdanceboutique.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/everything-dance.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://mistysdance.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/mistys-dance.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://kpdancecenter.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/kings-park-dance-center.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.danceunlimitedpac.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/dance-unlimited.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://encoredancetheatre.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/encore-dance-theatre.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://kazarellis.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/kazarellis.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://backyardclimbers.com/" target="_blank">
                                <video controls autoplay loop>
                                    <source src="{{ asset('images/backyard-climbers.mp4') }}" type="video/mp4" style="width: 100%">
                                </video>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <ol class="nav justify-content-center">
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="0">
                            <a class="nav-link">Everything</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="1">
                            <a class="nav-link">Misty's</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="2">
                            <a class="nav-link">Kings</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="3">
                            <a class="nav-link">DU</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="4">
                            <a class="nav-link">Encore</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="5">
                            <a class="nav-link">Kazarelli's</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="6">
                            <a class="nav-link">Climbers</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section-gray text-opaque d-flex align-items-center" id="growth">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="d-block d-lg-none col-lg-4">
                    <h1 class="display-4 my-5">Business<br>Growth</h1>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <strong>A website is the most important advertising you can do.</strong>
                        <ul>
                            <li>70-80% of clients research online before visiting a business in person.</li>
                            <li>88% won't return to a poorly made site.</li>
                        </ul>
                        <br>
                        <strong>Denlie websites bring clients to your business by being</strong>
                        <ul>
                            <li>Search Engine Optimized</li>
                            <li>Beautifully Designed</li>
                            <li>User Experience Driven</li>
                            <li>Built with lead magnets that convert to daily sign-ups!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="d-none d-lg-block col-lg-4">
                    <h1 class="display-4 my-5">Business<br>Growth</h1>
                </div>
            </div>
        </div>
    </div>



<div class="section-color text-opaque d-flex align-items-center" id="details">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <h1 class="display-4 my-5">It's<br>In the<br>Details</h1>
            </div>
            <div class="col-lg-8">
                <div class="carousel-controls-top">
                    <ol class="nav justify-content-center">
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="0">
                            <a class="nav-link">Sharing</a>
                        </li>
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="1">
                            <a class="nav-link">Speed</a>
                        </li>
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="2">
                            <a class="nav-link">SEO</a>
                        </li>
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="3">
                            <a class="nav-link">Mobile</a>
                        </li>
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="4">
                            <a class="nav-link">Map</a>
                        </li>
                        <li class="nav-item" data-target="#carouselDetailControls" data-slide-to="5">
                            <a class="nav-link">More</a>
                        </li>
                    </ol>
                </div>
                <div id="carouselDetailControls" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 500px;">
                            <img src="{{ asset('images/social-media-card.png') }}" alt="" style="max-width: 100%; max-height: 400px;">
                            <p class="mt-4" style="width: 75%;">We custom code social media cards so when you share on Facebook, you have the image, title and description you want.</p>
                        </div>
                        <div class="carousel-item" style="height: 500px;">
                            <img src="{{ asset('images/fast-dance-website.png') }}" alt="" style="width: 100%;">
                            <p class="mt-4" style="width: 75%;">When it comes to optimizing for speed, we strive for perfection. Our websites are fast, really fast.</p>
                        </div>
                        <div class="carousel-item" style="height: 500px;">
                            <img src="{{ asset('images/google-metatags.png') }}" alt="" style="width: 100%;">
                            <p class="mt-4" style="width: 75%;">With encoded metatags, we tell Google how you want each page to look on their search engine.</p>
                        </div>
                        <div class="carousel-item" style="height: 500px;">
                            <img src="{{ asset('images/mobile-friendly.png') }}" alt="" style="width: 100%;">
                            <p class="mt-4" style="width: 75%;">20% of websites aren't mobile friendly which is a problem since 57% of users search on mobile. Denlie websites pass Google's mobile-friendly test.</p>
                        </div>
                        <div class="carousel-item" style="height: 500px;">
                            <img src="{{ asset('images/google-map.png') }}" alt="" style="width: 100%;">
                            <p class="mt-4" style="width: 75%;">We've seen many sites with maps that don't work. Our maps work, guaranteed.</p>
                        </div>
                        <div class="carousel-item" style="height: 500px;">
                            <img src="{{ asset('images/favicon-https.jpg') }}" alt="" style="width: 100%;">
                            <p class="mt-4" style="width: 75%;">Have your logo as an icon next to your studio name. Also, is your site protected? Google won't index your site if https is missing in the URL. The "s" stands for secure!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-gray text-opaque d-flex align-items-center" id="manage">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="d-block d-lg-none col-lg-4">
                <h1 class="display-4 my-5">On-the-go<br>Editing</h1>
                <p class="mt-4">
                    There's a problem when business owners need to hire a web developer to update their WordPress site.
                    Updating your website should be as easy as updating your Facebook status.
                    <br><br>Our tailor-made software is crafted from scratch to your specifications. This makes it incredibly clean, simple, and effective at making your website do what you want it to do. The possibilities are endless on what we can make for you.
                </p>
            </div>
            <div class="col-lg-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/promos.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/blog.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/news.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/calendar.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/gallery.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video controls autoplay loop>
                                <source src="{{ asset('images/schedule.mp4') }}" type="video/mp4" style="width: 100%">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <ol class="nav justify-content-center">
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="0">
                            <a class="nav-link text-muted">Promotions</a>
                        </li>
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="1">
                            <a class="nav-link text-muted">Blog</a>
                        </li>
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="2">
                            <a class="nav-link text-muted">News</a>
                        </li>
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="3">
                            <a class="nav-link text-muted">Calendar</a>
                        </li>
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="4">
                            <a class="nav-link text-muted">Gallery</a>
                        </li>
                        <li class="nav-item" data-target="#carouselExampleControls" data-slide-to="5">
                            <a class="nav-link text-muted">Schedule</a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-4">
                <h1 class="display-4 my-5">On-the-go<br>Editing</h1>
                <p class="mt-4">
                    There's a problem when business owners need to hire a web developer to update their WordPress site.
                    Updating your website should be as easy as updating your Facebook status.
                    <br><br>Our tailor-made software is crafted from scratch to your specifications. This makes it incredibly clean, simple, and effective at making your website do what you want it to do. The possibilities are endless on what we can make for you.
                </p>
            </div>
        </div>
    </div>
</div>

<div id="price" class="section-color d-flex align-items-center text-opaque pb-0" style="font-size: 0.9em;">
    <div class="container">
        <div class="row d-flex align-items-start">
            <div class="col-lg-4">
                <h1 class="display-4 mt-3">Pricing</h1>
                <p>
                    Pay half now and the rest when it's finished!
                </p>
            </div>
            <div class="col-lg-4">
                <ul>
                    <li>Beautiful Custom Designed Website</li>
                    <li>10 Pages</li>
                    <li>Mobile-Friendly</li>
                    <li>Google Ecosystem</li>
                    <li>Custom Forms</li>
                    <li>3 Revision Cycles</li>
                    <li>Search Engine Optimization (SEO)</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul>
                    <li>Web Hosting</li>
                    <li>Back-End Set Up & Management</li>
                    <li>Domain</li>
                    <li>Virtual Private Server</li>
                    <li>Transport Layer Security (SSL)</li>
                    <li>Professional Email</li>
                </ul>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 text-black my-3">
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Professionally Managed</h5>
                        <p class="card-text">
                            Trust us to manage your site! For business owners who would prefer to delegate the editing of their site to the web professionals.
                            <br><br>
                            2 hrs<small class="text-muted">/mo</small> maintenance included
                        </p>
                    </div>
                    <div class="card-footer lead">
{{--                        <p class="m-0 cyber-txt badge badge-dark"><sup>$</sup>1400</p>--}}
                        <p class="m-0"><span>$1750</span> &middot; $175<small>/mo</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Cooperatively Managed</h5>
                        <p class="card-text">
                            Want to update certain areas of your website frequently? This option is for those who'd like on-the-go editing for features like blog, news, and calendar items but don't need control of every page.
                            <br><br>
                            1 hr<small class="text-muted">/mo</small> maintenance included
                        </p>
                    </div>
                    <div class="card-footer lead">
{{--                        <p class="m-0 cyber-txt badge badge-dark"><sup>$</sup>3150</p>--}}
                        <p class="m-0"><span>$3500</span> &middot; $100<small>/mo</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Self Managed</h5>
                        <p class="card-text">
                            This option is for business owners who would like full control of their website. Quickly and easily edit any page when you need to.
                            <br><br>
                            $60<small class="text-muted">/hr</small> maintenance when needed
                        </p>
                    </div>
                    <div class="card-footer lead">
{{--                        <p class="m-0 cyber-txt badge badge-dark"><sup>$</sup>4650</p>--}}
                        <p class="m-0"><span>$5000</span> &middot; $20<small>/mo</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center mb-3">
            <div class="col-lg-4">
                <h1 class="display-5 text-center">Add-ons</h1>
            </div>
            <div class="col-lg-8">
                <ul class="m-0 pl-3">
                    <li>Additional Pages: <span>$400/ea</span>
{{--                        <span class="cyber-txt badge badge-dark"><sup>$</sup>300/ea</span>--}}
                    </li>
                    <li>Additional CMS: <span>$500/ea</span>
{{--                        <span class="cyber-txt badge badge-dark"><sup>$</sup>400/ea</span>--}}
                    </li>
                    <li class="link-underline"><a href="/seo">Advanced SEO: <span>$299/mo</span></a></li>
                </ul>
            </div>
    </div>
    </div>
</div>

@include('contact')

@endsection
