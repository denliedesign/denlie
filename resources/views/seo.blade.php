@extends('layouts.app')
@section('title', 'SEO | Denlie Design')
@section('content')

    <div id="seo-page">
        <div class="bg-gray">
            @include('nav')
            <h1 class="display-3 py-5 mb-0 text-center text-uppercase text-opaque">Search<br>Engine<br>Optimization</h1>
        </div>
        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center justify-content-end">
                        <h1 class="display-4 my-5 text-right">Your Business Deserves To <br><span class="highlight-seo">Be Seen</span><br><br><span style="font-weight: normal; font-size: 0.5em;">We Can Help.<br>Scroll down to learn more about our SEO service and what we provide.</span></h1>
                    </div>
                    <div class="col-lg-7">
                        <img src="/images/seo-light.jpg" alt="light bulb" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="section-gray d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="logo-html5"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Back-End Content Descriptors</h1>
                        <p>HTML code on every page that tells search engines what the page is about and how the page should appear in search results</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Keyword Placement</h1>
                        <p>Keyword Placement is all about learning what people are searching for and letting them know you have what they're looking for. We put these key phrases in more nooks & crannies than competitors to put your site on top.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-gray d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="bug-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Instructions for Site Crawlers</h1>
                        <p>A set of documents that instruct web robots on how to navigate your website. These documents inform search engine bots on what pages you have, which ones to prioritize, and which ones to avoid.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="logo-google"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Google Ecosystem Integration</h1>
                        <p>Google offers dozens of tools that help search engines learn more about your site and help optimize your site to look and perform its best. We take full advantage of these tools.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-gray d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Competitor Research</h1>
                        <p>We conduct a deep dive analysis of your top competitors. We look at the strategies and keywords they are using and create a detailed plan to outperform them.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="display-4">Fine-Tuning The Results</h1>
                        <p>Analytics in convenient monthly reports to help you understand the data. We push more on what's working and discard what isn't, thus improving your ranking. The better your ranking, the more traffic to your site and more traffic means more clients.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>

        <div class="section-gray d-flex align-items-center">
            <div class="container text-opaque">
                <div>
                    <div>
                        <h1 class="display-4">If you're not at the top, you may be overlooked.</h1>
                        <p>Be seen for $250/mo</p>
                    </div>
                </div>
            </div>
        </div>



    </div>


    @include('contact')

@endsection
