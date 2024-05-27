@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-992-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-1200-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-1400-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-1920-src="{{URL::asset('assets/images/homeBanner.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/homeBanner.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/homeBanner.jpg')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1">WELCOME TO {{ucfirst(config('app.name'))}}</div>
                        <div class="banner__sub-heading h4">Bioscience for life</div><a href="/iff-bioscience" class="cta-button style-light variant-secondary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c54" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="content-section-title">{{config('app.name')}}</div>
                <div class="h4">Who We Are</div>
                <div class="bodytext large-body">
                    <p>The choices we make today, big and small, will impact our world tomorrow. From bread to biofuels, we partner with customers to deliver high-performance products and solutions that are better, safer, and cleaner.</p>
                </div><a href="{{route('aboutUs')}}" class="cta-button style-color variant-secondary">Explore</a>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/whoweare.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/whoweare.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/whoweare.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c4" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/whatwedo.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="content-section-title">{{config('app.name')}}</div>
                <div class="h4">What We Do</div>
                <div class="bodytext large-body">
                    <p>Explore our holistic approach to sustainable growth, enabling our customers to meet ESG goals and experience market success, while improving the environmental footprint and wellbeing of millions globally.</p>
                </div><a href="{{route('aboutUs')}}" class="cta-button style-color variant-secondary">find out more</a>
            </div>
        </div>
        <div id="c57" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-signpost">
            <div class="panel lazyload" data-lazyload-576-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1024-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1440-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/vision.jpg')}}">
                <div class="content-wrapper">
                    <div class="panel__content background-color-blue text-light">
                        <div class="h3">Our Vision</div>
                        <div class="bodytext large-body">
                            <p>A company pursuing innovation and excellence in cosmetics, scents and flavour, dedicated to harnessing Creativity that transforms the world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="c56" class="frame frame-default ctype-iffcomponents_cards">
            <div class="h2">Our Products</div>
            <div class="cards-container columns-3">
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/Scent.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/Scent.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Scent.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Scents</div>
                    </div>
                    <p class="h4">Promoting an exceptional fragrance brand that utilizes high-quality health ingredients backed by solid scientific research.</p><a href="{{route('scents')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/Cosmetics.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/Cosmetics.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Cosmetics.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Cosmetics</div>
                    </div>
                    <p class="h4">Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil</p><a href="{{route('cosmetics')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/EssentialOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/EssentialOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/EssentialOil.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Essential Oil</div>
                    </div>
                    <p class="h4">From Nature to Home: Find Serenity with Lemongrass Oil - A Natural Path to Wellness</p><a href="{{route('essential_oil')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
                </article>
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
                    <p>
                        Ready to speak with our team?
                        <strong><a href="{{route('contactUs')}}">Contact us here.</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
