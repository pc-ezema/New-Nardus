@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-992-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-1200-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-1400-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-1920-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/essentialoilBanner.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilBanner.jpg')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1">ESSENTIAL OIL</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c31" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="left">
                <div class="h2">Essential Oil</div>
                <div class="flexible__mobile-bodytext">
                    <div class="bodytext large-body">
                        <p>From the lab to the home, the cleaning solutions from IFF deliver the sustainable performance customers are demanding. Our experts have developed a range of market-leading biological catalysts engineered to help you meet the consumer, environmental and regulatory challenges you face today, and tomorrow.</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>From the lab to the home, the cleaning solutions from IFF deliver the sustainable performance customers are demanding. Our experts have developed a range of market-leading biological catalysts engineered to help you meet the consumer, environmental and regulatory challenges you face today, and tomorrow.</p>
                </div>
            </div>
        </div>
        <div id="c32" class="frame frame-default ctype-iffcomponents_multibox with-shape-1">
            <div class="multibox__background-shape background-color-red text-light">
                <div class="content-wrapper">
                    <div class="multibox__content">
                        <div class="h2">Explore our Products</div>
                    </div>
                </div>
            </div>
            <div class="multibox__boxes">
                <article class="multibox__box">
                    <div class="box__image lazyloaded" data-lazyload-300-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}&quot;);"></div>
                    <p class="h4">{{config('app.name')}} Essential Oil: Lemongrass Oil</p>
                    <p>Our enzymes for laundry detergent are engineered to effectively break down stains and deliver garment care benefits. Designed to provide cost-effective and sustainable performance, they deliver next-generation cleaning for fast-changing lifestyles around the world.</p>
                </article>
                <article class="multibox__box">
                    <div class="box__image lazyloaded" data-lazyload-300-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}&quot;);"></div>
                    <p class="h4">{{config('app.name')}} Essential Oil: Scent Leaf Oil</p>
                    <p>As the market-leader in dishwashing enzymes, we’re innovating to deliver effective, sustainable dishwashing performance for a naturally cleaner world.</p>
                </article>
            </div>
        </div>
        <!-- <div id="c221" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-breaker">
            <div class="panel lazyloaded" data-lazyload-576-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_5a61fbe865_6eef02d901fb34ec6d042b1bbe81fd8c.jpg" data-lazyload-768-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_41945ce888_88219472b88a0eef0351840c98576ef4.jpg" data-lazyload-1024-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_58a824e356_02b553ea3f91ed8c2930f5a215a1d72c.jpg" data-lazyload-1440-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_d1bf3c63b0_bb4c9270045c25f88fa9218022579742.jpg" data-lazyload-2560-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_dee3337e78_eb3abf16f1d398cce0b49eb8f01acc51.jpg" style="background-image: url(&quot;https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_Reimagining_Clean_Hero3_d1bf3c63b0_bb4c9270045c25f88fa9218022579742.jpg.webp&quot;);">
                <div class="content-wrapper">
                    <div class="panel__content background-color-red text-light">
                        <div class="h3">Reimagining Clean</div>
                        <div class="bodytext large-body">
                            <p><strong>Clean you can Touch, Smell and See</strong></p>
                            <p>The detergent industry must rise to the hygiene challenge of redefining ‘clean’ for consumers seeking more sensory experiences. As convenience-led lifestyles influence washing behaviors and fabric performance, our experts are developing innovative solutions that address these challenges head on.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="c229" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-green text-light">
                <div class="h4">{{config('app.name')}} Essential Oil: Thyme Oil</div>
                <div class="bodytext large-body">
                    <p>As a member company of the American Cleaning Instittue, we were proud and honored to win the 2022 #OurFutureIsClean social media challenge benefitting DigDeep, a human rights nonprofit working to ensure safe access to water in the USA.</p>
                </div>
            </div>
        </div>
        <div id="c973" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="content-section-title">Click and shop now to explore our premium probiotic solutions!</div>
            <div class="left">
                <div class="h2">#Shop With Us</div>
                <div class="flexible__mobile-bodytext">
                </div><a href="https://www.linkedin.com/showcase/howaru-premium-probiotics" target="_blank" class="cta-button style-color variant-primary" rel="noopener noreferrer">SHOP NOW</a>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>Click and shop now to explore our premium probiotic solutions!</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
