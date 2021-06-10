@extends('layouts.app')
@section('title', 'Dance Studio Website Template | Denlie Design')
@section('content')

    <div class="bg-gray">
        @include('nav')
        <div class="py-5">
            <h3 class="text-center text-muted mb-0">2021-2022</h3>
            <h1 class="display-3 mb-0 text-center text-uppercase text-opaque">MTJGD<br>Licensed<br>Design</h1>
        </div>
    </div>
    <div class="section-blue d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-end">
                    <div class="my-5">
                        <h1 class="display-4 text-right">The<br>Look</h1>
                        <p class="text-right mt-3">Modern and engaging colorful fold with <strong>3 Call To Actions</strong> to direct new families through the proper funnels.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="layout-frame">
                        <img src="/images/dance-studio-website-template-2021.jpg" alt="" class="img-fluid">
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
                        <div class="feature-blue">Feature</div>
                        <h1 class="display-4 text-right">Classes</h1>
                        <p class="text-right mt-3">Classes are organized and communicated clearly which provides great user experience for parents.</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <img src="/images/dance-studio-classes.png" alt="dance studio classes" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature-gray">Feature</div>
                        <h1 class="display-4 text-right">More Than...</h1>
                        <p class="text-right mt-3">Mother Teresa said, "I alone cannot change the world, but I can cast a stone across the waters to create many ripples." Show the ripples that you're creating in the dance world with these badges on your dance studio website.</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <div class="col-lg-4 d-flex align-items-center">
                        <img src="/images/logo-ypad.png" alt="" class="img-fluid" style="max-height: 200px;">
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <img src="/images/logo-mtjgd.png" alt="" class="img-fluid" style="max-height: 200px;">
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <img src="/images/logo-safer-studio.png" alt="" class="img-fluid" style="max-height: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="my-5">
                        <div class="feature-blue">Feature</div>
                        <h1 class="display-4 text-right">Testimonials</h1>
                        <p class="text-right mt-3">Share the love with these great sliding testimonial cards!</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block shadow rounded" src="/images/testimonial-card.png" alt="First slide" style="height: 400px; width: auto;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block shadow rounded" src="/images/testimonial-card-2.png" alt="Second slide" style="height: 400px; width: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-5">
                        <div class="feature-gray">Feature</div>
                        <h1 class="display-4 text-right">Newsletter</h1>
                        <p class="text-right mt-3">A newsletter or blog on your dance studio website is great for communicating with dance families, building community, and helping SEO.</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center">
                    <img src="/images/dance-studio-newsletter.png" alt="dance studio newsletter" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="my-5">
                        <div class="feature-blue">Feature</div>
                        <h1 class="display-4 text-right">Faculty</h1>
                        <p class="text-right mt-3">A faculty page with friendly faces and short bios helps potential families feel welcome.</p>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <img src="/images/faculty-page.png" alt="" class="img-fluid shadow rounded" style="max-height: 509px;">
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="my-5">
                        <div class="feature-gray">Feature</div>
                        <h1 class="display-4 text-right">Calendar of Events</h1>
                        <p class="text-right mt-3">Your dance studio website template includes a modern calendar page with easy on-the-go editing.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <video controls autoplay loop>
                        <source src="{{ asset('images/calendar.mp4') }}" type="video/mp4" style="width: 100%">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <div class="section-gray d-flex align-items-center">
        <div class="container text-opaque">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="my-5">
                        <div class="feature-blue">Feature</div>
                        <img src="/images/logo-chance-to-dance.png" alt="chance to dance logo" class="img-fluid">
                        <h1 class="display-4 text-right">Chance to Dance</h1>
                        <p class="text-right mt-3">By investing in this design, you are investing in a child's dream. $500 of every sale goes to A Chance To Dance Foundation which provides dance scholarships and opportunities for kids.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="/images/chance-to-dance.jpg" alt="two young dancers in pink hugging" class="img-fluid shadow rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="section-blue d-flex align-items-center">
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
                                    <li>Trial Form</li>
                                    <li>2 CMS (News/Blog & Events)</li>
                                    <li>Mobile-Friendly</li>
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
                        <div class="row">
                            <div class="col-sm">
                                <div class="feature-gray mt-3">Add-ons:</div>
                                <ul class="text-left">
                                    <li>Custom Forms: $100/ea</li>
                                    <li>Additional Pages: <span>$400/ea</span>
                                        {{--                                <span class="cyber-txt badge badge-dark"><sup>$</sup>300/ea</span>--}}
                                    </li>
                                    <li>Additional CMS: <span>$500/ea</span>
                                        {{--                                <span class="cyber-txt badge badge-dark"><sup>$</sup>400/ea</span>--}}
                                    </li>
                                    <li class="link-underline"><a href="/seo">Advanced SEO: <span>$299/mo</span></a></li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <div class="feature-gray mt-3">Update:</div>
                                <p>Save 50% when you update from a previous design. <span class="badge badge-secondary">$250 to A Chance To Dance</span></p>
                            </div>
                        </div>
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
                            <p class="m-0"><span>$1999</span> &middot; $100<small>/mo</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('contact')

@endsection
