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

        <div class="section-gray py-5">
            <div class="container text-opaque text-center my-5">
                <img src="/images/seo-dance-studios-in-example.jpg" alt="graph showing dramatic seo improvement" class="img-fluid shadow rounded">
                <h1 class="mt-4">Go From Invisible To #1</h1>
                <p style="font-size: 1.5em;">
                    When parents were looking for a dance studio for their child in Winthrop Harbor, a neighboring city, this studio was nowhere to be found. Now, thanks to our Advanced SEO campaign, this studio is the first that they will see and interact with.
                </p>
                <img src="/images/seo-dozens-example.jpg" alt="rank number one in dozens of keywords" class="img-fluid shadow rounded">
                <h1 class="mt-4">What About Large Cities That Compete With Many Studios?</h1>
                <p style="font-size: 1.5em;">Well we've done pretty well. Ranking #1 in dozens of important keywords.</p>
            </div>
        </div>
        <div class="section-color py-5">
            <div class="container text-opaque text-center my-5">
                <img src="/images/seo-music-lessons-in-example.jpg" alt="graph showing dramatic seo improvement" class="img-fluid shadow rounded">
                <h1 class="mt-4">Excel In More Than Dance</h1>
                <p style="font-size: 1.5em;">
                    Some dance studios offer other programs like acting, cheer, or music. This studio wanted to build their music program and after our Advanced SEO campaign, the program is now thriving. The table above shows this studio is the first to come up in search results when local families look for music, piano, or guitar lessons.
                </p>
                <img src="/images/seo-music-lessons-in-another-example.jpg" alt="rank number one in dozens of keywords" class="img-fluid shadow rounded">
                <h1 class="mt-4">Expand, Expand, Expand!</h1>
                <p style="font-size: 1.5em;">Since this studio was doing exceedingly well in their city, they wanted to also draw in students from neighboring areas. Not a problem with our SEO expertise. This graph helps demonstrate our dominance in the region.</p>
            </div>
        </div>

        <div class="section-gray py-5">
            <div class="container text-opaque my-5">
                <h1 class="text-center mb-5 display-4">What's Included</h1>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="logo-html5"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Back-End Content Descriptors</h1>
                        <p>HTML code on every page that tells search engines what the page is about and how the page should appear in search results</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="key-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Keyword Placement</h1>
                        <p>Keyword Placement is all about learning what people are searching for and letting them know you have what they're looking for. We put these key phrases in more nooks & crannies than competitors to put your site on top.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="bug-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Instructions for Site Crawlers</h1>
                        <p>A set of documents that instruct web robots on how to navigate your website. These documents inform search engine bots on what pages you have, which ones to prioritize, and which ones to avoid.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="logo-google"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Google Ecosystem Integration</h1>
                        <p>Google offers dozens of tools that help search engines learn more about your site and help optimize your site to look and perform its best. We take full advantage of these tools.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Competitor Research</h1>
                        <p>We conduct a deep dive analysis of your top competitors. We look at the strategies and keywords they are using and create a detailed plan to outperform them.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Extra Pages And Blog</h1>
                        <p>You may have heard content is king. You may have also heard quality over quantity. We deliver both by providing you with search-engine-optimized, keyword-rich pages and a blog to keep the traffic coming.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="business-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>More Real Estate</h1>
                        <p>Domains are like real estate and purchasing the right ones can bring more clients to your business. We research and buy names with a lot of potential for you and then redirect them to your main site.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center justify-content-end">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </div>
                    <div class="col-lg-9">
                        <h1>Fine-Tuning The Results</h1>
                        <p>Analytics in convenient monthly reports to help you understand the data. We push more on what's working and discard what isn't, thus improving your ranking. The better your ranking, the more traffic to your site and more traffic means more clients.</p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>


        <div class="section-color d-flex align-items-center">
            <div class="container text-opaque">
                <div>
                    <div>
                        <h1>If you're not at the top, you may be overlooked.</h1>
                        <h1 class="display-4 my-5 text-right"><span class="highlight-seo">Be seen for $299/mo</span></h1>
                    </div>
                </div>
            </div>
        </div>



    </div>


    @include('contact')

    <div id="section-seo-links">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center py-4">
                <small class="text-center">
                    <span class="lead">Need A Visual? See Some Example SEO Pages:</span>
                    <br><a class="seo-link text-muted" target="_blank" href="https://www.brentwoodkidsdance.com/brentwood-kids-dance">Brentwood Kids Dance</a>
                    <br>
                    <a class="seo-link text-muted" target="_blank" href="https://stocktondance.com/dance-classes-in-stockton-ca">Dance Classes In Stockton CA</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://stocktondance.com/dance-studios-in-stockton-ca">Dance Studios In Stockton CA</a>
                    <br>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshadancemusicdrama.com/music-lessons-kenosha">Music Lessons Kenosha</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshapianolessons.com/music-lessons-kenosha">Kenosha Piano Lessons</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshaguitarlessons.com/music-lessons-kenosha">Kenosha Guitar Lessons</a>
                    <br>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshadancemusicdrama.com/dance-classes-in-racine-wi">Dance Classes in Racine WI</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshadancemusicdrama.com/dance-classes-in-lake-county-il">Dance Classes in Lake County IL</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshadancemusicdrama.com/dance-classes-in-zion-il">Dance Classes in Zion IL</a>
                    <span class="text-muted"> / </span>
                    <a class="seo-link text-muted" target="_blank" href="https://kenoshadancemusicdrama.com/dance-classes-in-winthrop-harbor">Dance Classes in Winthrop Harbor</a>
                </small>
            </div>
        </div>
    </div>

@endsection
