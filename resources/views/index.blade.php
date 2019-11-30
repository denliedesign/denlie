<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Denlie Design - Dance Studio Web Design</title>
</head>
<body>

<div class="section-gray">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#manage">Manage</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#about">About</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#pricing">Pricing</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
        </div>
    </nav>

        <div class="container text-warm mt-5">
            <h1 class="display-2 text-center">DENLIE<br>DE<span id="spacing">SIGN</span></h1>
            <p class="lead text-center">Dance Studio Websites</p>
        </div>

            <form action="{{ route('contact.store') }}" method="POST" id="formContact" class="d-flex justify-content-center">
                <div class="form">
                        <div class="card bg-gray border border-muted text-muted" style="width: 22rem;">
                            <div class="card-body">
                                <div class="card-text">
                                    @if(session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>Success</strong> {{ session()->get('message') }}
                                        </div>
                                    @else
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                                        <div>{{ $errors->first('name') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                        <div>{{ $errors->first('email') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input class="form-control" type="tel" name="phone" id="phone" placeholder="1234567890" value="{{ old('phone') }}" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                        <div>{{ $errors->first('phone') }}</div>
                                    </div>
                                    @csrf
                                    <div id="refer-btn-wrap" class="text-center">
                                        <a id="refer-claim" class="btn btn-info btn-lg mt-2" href="#"><button type="submit">Get a Denlie Website</button></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </form>
</div>

<div class="section-color text-opaque d-flex align-items-center" id="portfolio">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <h1 class="display-4 my-5">Portfolio</h1>
                <p class="mt-4">Dance studio websites, dance stores, portfolios, restaurants, and everything else.</p>
            </div>
            <div class="col-lg-8">
                <div id="carouselPortfolioControls" class="carousel slide" data-ride="carousel" data-interval="0">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="http://everythingdanceboutique.com/" target="_blank"><img src="{{ asset('images/everythingdance.jpg') }}" alt="" style="width: 100%;"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://mistysdance.com/" target="_blank"><img src="{{ asset('images/mdu.jpg') }}" alt="" style="width: 100%;"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://encoredancetheatre.com/" target="_blank"><img src="{{ asset('images/encore.jpg') }}" alt="" style="width: 100%;"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://kazarellis.com/" target="_blank"><img src="{{ asset('images/kazarellis.jpg') }}" alt="" style="width: 100%;"></a>
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
                            <a class="nav-link">Encore</a>
                        </li>
                        <li class="nav-item" data-target="#carouselPortfolioControls" data-slide-to="3">
                            <a class="nav-link">Kazarelli's</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section-gray text-opaque d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="d-block d-lg-none col-lg-4">
                    <h1 class="display-4 my-5">Enrollment<br>Growth</h1>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        First, when a family wants their child to dance they search online for local dance studios.
                        <ul>
                            <li>67% will only look at the first few search results.</li>
                        </ul>

                        Then, the family will judge how credible each studio is by their website design.
                        <ul>
                            <li>88% won't return to a poorly made site.</li>
                        </ul>

                        Finally, after their research online a family will contact or visit.
                        <ul>
                            <li>70-80% research online before visiting in person.</li>
                        </ul>

                        Unfortunately,
                        <ul>
                            <li>50% of online sales are lost when families can't find the information their looking for.</li>
                            <li>68% don't have their email address on their homepage.</li>
                            <li>70% don't have a call to action.</li>
                            <li>And 82% don't have linked social media accounts.</li>
                        </ul>

                        Denlie websites increase enrollment because they are
                        <ul>
                            <li>Search Engine Optimized</li>
                            <li>Beautifully Designed</li>
                            <li>User Experience Driven</li>
                            <li>Built with lead magnets that convert to daily sign-ups!</li>
                        </ul>

                        All these things are vital to connect with consumers. A website is the most important advertising you can do.
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="d-none d-lg-block col-lg-4">
                    <h1 class="display-4 my-5">Enrollment<br>Growth</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section-color text-opaque d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4">
                    <h1 class="display-4 my-5">Design<br>Philosophy</h1>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
                    <p class="mt-4">
                        A website is a window to your facility, business, and dance family.
                        <br><br>For best user experience, we design from the viewpoint of a dance parent.
                        How can we best deliver important information like recital details to first time families?
                        What is the marketing funnel for a mom looking for dance classes for her daughter in 1st grade?
                        These are the questions we ask, and because of our dance background, understand.
                        <br><br>A modern and professional look earns the trust of moms and dads.
                        A minimalist approach helps them stay focused on purposeful content.
                        In every design, we strive for excellence in both beauty and function.
                    </p>
                </div>
            </div>
        </div>
    </div>

<div class="section-gray text-opaque d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="d-block d-lg-none col-lg-4">
                <h1 class="display-4 my-5">Built<br>From<br>Scratch</h1>
            </div>
            <div class="col-lg-6">
                <p class="mt-4">
                    Instead of using clunky "one size fits all" site builders like Wordpress, Squarespace, or Wix, our software works to make a site that is adaptable, fast, and professional.

                    <br><br><strong>
                        Tweak Every Detail
                        <br>Not Confined by Templates.
                    </strong>

                    <br>I understand the frustrations of not being able to convey your business online the way you want.
                    I've wasted many hours trying to manipulate Wordpress templates into doing things they weren't made to do in order to fit a studio owners vision.
                    Denlie websites are always built from scratch, uniquely for your studio, so that your website can be an accurate representation of your dance family.

                    <br><br><strong>
                        Slim, Sleek, and Speedy
                        <br>Not Stalled by Plugins.
                    </strong>

                    <br>53% will abandon a site that takes longer than 3 seconds to load. On average our websites are 40-50% faster than those built with site builders.

                    <br><br><strong>
                        Quality and Distinction
                        <br>Not Copies.
                    </strong>

                    <br>Your studio is different than other competing studios in your region and your website should be too.
                    Stand out from the crowd with a custom Denlie website.
                </p>
            </div>
            <div class="col-lg-2"></div>
            <div class="d-none d-lg-block col-lg-4">
                <h1 class="display-4 my-5">Built<br>From<br>Scratch</h1>
            </div>
        </div>
    </div>
</div>

<div class="section-color text-opaque d-flex align-items-center">
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

<div class="section-color-img d-flex align-items-center text-opaque" id="about">
    <div class="row d-flex align-items-center">
        <div class="col-lg-4">
            <div class="container">
                <h1 class="display-4 my-3">My<br>Story</h1>
                <p class="mt-4">
                    Hey, my name is Dennis Williams and I design websites for dance studios.
                    <br><br>Raised by computer engineers it wasn't long before I coded my first website at 9 years old, <a href="{{ url('nine/shadow-abyss-realm.html') }}" class="text-opaque">Shadow Abyss Realm</a>.
                    <br><br>20 years later, I am the sole web developer of a dance studio that has increased to over 800 students.
                    <br><br>Wanting to help more studios grow, I started Denlie Design in 2017.
                    <br><br>Because of my dance background, including a BFA degree and teaching since 2015, dance websites have become my specialty!
                </p>
            </div>
        </div>
        <div class="col-lg-8">
            <img class="img-fluid" src="{{ asset('images/dennis.jpg') }}" alt="">
        </div>
    </div>
</div>

<div id="pricing" class="p-5">
        <h1 class="text-center text-opaque display-4">Pricing</h1>
        <p class="text-opaque text-center my-4">Pay half now and the rest when it's finished!</p>
        <div class="card-deck ">
            <div class="card">
                <h5 class="card-title p-3 text-center text-uppercase"><span id="plat">Starter Package</span></h5>
                <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Beautiful Custom Designed Website</li>
                        <li class="list-group-item">1 Page</li>
                        <li class="list-group-item">Mobile-Friendly</li>
                        <li class="list-group-item">Google Maps</li>
                        <li class="list-group-item">Custom Form</li>
                        <li class="list-group-item">2 Revision Cycles</li>
                        <li class="list-group-item">Basic SEO <span class="font-italic text-muted">to get found online</span></li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Estimated Value: $5,000</small>
                    <br>Our Price: $2,000
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-block d-lg-none py-3"><!-- wrap every 2 on sm--></div>
            <div class="card">
                <h5 class="card-title p-3 text-center text-uppercase"><span id="plat" class="plat-plus">Denlie Package</span></h5>
                <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Beautiful Custom Designed Website</li>
                        <li class="list-group-item new-offer">5 Pages</li>
                        <li class="list-group-item">Mobile-Friendly</li>
                        <li class="list-group-item new-offer">Google Ecosystem</li>
                        <li class="list-group-item new-offer">Unlimited Custom Forms</li>
                        <li class="list-group-item new-offer">3 Revision Cycles</li>
                        <li class="list-group-item new-offer">Standard SEO <span class="font-italic text-muted">to get found online</span></li>
                        <li class="list-group-item new-offer"><a id="cms-link" href="#manage">2 Custom Content Management Systems <span class="font-italic text-muted">for on-the-go editing</span></a></li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <small class="text-muted">Estimated Value: $8,000</small>
                    <br>Our Price: $4,500
                    <!-- <span class="new-price text-success">$7,000</span> -->
                </div>
            </div>
            <div class="w-100 d-none d-sm-block d-md-block d-lg-none py-3"><!-- wrap every 2 on sm--></div>

            <div class="card">
                <h5 class="card-title p-3 text-center text-uppercase">Add-ons</h5>
                <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Additional Pages: $400/ea</li>
                        <li class="list-group-item">Additional CMS: $500/ea</li>
                        <li class="list-group-item">Advanced SEO + Competitor Research + Keyword Package: $1000</li>
                        <li class="list-group-item">Optional Continued Monthly Reports of Competitors, Keywords, Analytics + Updated SEO: $200/mo</li>
                    </ul>
                </div>
                <h5 class="card-title p-3 text-center text-uppercase">Maintenance</h5>
                <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">Hourly Rate: $60/hr</li>
                        <li class="list-group-item">One Hour Minimum</li>
                    </ul>
                </div>
                <h5 class="card-title p-3 text-center text-uppercase">Hosting Service</h5>
                <div class="card-body">
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">$20/mo</li>
                        <li class="list-group-item">Web Hosting</li>
                        <li class="list-group-item">Set Up & Management</li>
                        <li class="list-group-item">Domain</li>
                        <li class="list-group-item">Virtual Private Server</li>
                        <li class="list-group-item">Transport Layer Security (SSL)</li>
                        <li class="list-group-item">Professional Email</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="section-color-img d-flex align-items-center text-opaque" id="contact">
    <div class="row d-flex align-items-center">
        <div class="col-lg-8">
            <img class="img-fluid" src="{{ asset('images/contact-dennis.jpg') }}" alt="">
        </div>
        <div class="col-lg-4">
            <div class="container">
                <h1 class="display-4 text-center my-5">Contact</h1>
                <p class="text-center">customdenlie@gmail.com</p>
                <form action="{{ route('contact.store') }}" method="POST" id="formContact" class="d-flex justify-content-center">
                    <div class="form">
                        <div class="card bg-warm border border-muted text-opaque" style="width: 22rem;">
                            <div class="card-body">
                                <div class="card-text">
                                    @if(session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>Success</strong> {{ session()->get('message') }}
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                                            <div>{{ $errors->first('name') }}</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                                            <div>{{ $errors->first('email') }}</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input class="form-control" type="tel" name="phone" id="phone" placeholder="1234567890" value="{{ old('phone') }}" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                                            <div>{{ $errors->first('phone') }}</div>
                                        </div>
                                        @csrf
                                        <div id="refer-btn-wrap" class="text-center">
                                            <a id="refer-claim" class="btn btn-info mt-2" href="#"><button type="submit">Get a Denlie Website</button></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
