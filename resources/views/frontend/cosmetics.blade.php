@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-992-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-1200-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-1400-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-1920-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/cosmeticsBanner.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/cosmeticsBanner.jpg')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1">COSMETICS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c223" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="content-section-title">{{config('app.name')}} Cosmetics</div>
            <div class="left">
                <div class="h2">Cosmetics</div>
                <div class="flexible__mobile-bodytext">
                    <div class="bodytext large-body">
                        <p>
                            Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haitrcare Oil
                        </p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>
                        Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haitrcare Oil
                    </p>
                </div>
            </div>
        </div>
        <div id="c224" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/cosmetics:HairCareOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/cosmetics:HairCareOil.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/cosmetics:HairCareOil.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">{{config('app.name')}} Cosmetics: Hair Care Oil </div>
                <div class="bodytext large-body">
                    <p>
                        Gel dishwashing detergents are designed for consumers searching
                        for greater convenience and improved performance. Our stable
                        enzymes are designed to deliver concentrated cleaning in active
                        solutions.
                    </p>
                </div>
            </div>
        </div>
        <!-- <div id="c225" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">Against the clock</div>
                <div class="bodytext large-body">
                    <p>
                        Convenience-driven consumers are setting shorter wash cycles.
                        With less cleaning time, our enzyme technologies are enabling
                        detergents to work harder than ever before – without
                        compromising on cleaning or sustainability.
                    </p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_dish-againstclock_d155ce70fa_e61e2712ad9e61763c42a775797dea01.jpg" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_dish-againstclock_3d0d23ad92_019fcf87fab958371fd9e3b5ec549cb0.jpg" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_dish-againstclock_66326e3d6f_4df0c9be9b45cd744db979ad489f9bbe.jpg">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div> -->
        <div id="c227" class="frame frame-default ctype-iffcomponents_multibox with-shape-1">
            <div class="multibox__background-shape background-color-purple text-light">
                <div class="content-wrapper">
                    <div class="multibox__content">
                        <div class="h2">Solutions for common consumer problems</div>
                    </div>
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
