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
                        <div class="banner__heading h1">HEALTH</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down" id="scrollArrow">
        &#x2193; <!-- Down Arrow -->
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c965" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0" style="align-items: center;">
            <div class="h2" style="text-align: center; font-size: 30px !important;">Empowering Health Solutions: Health is Wealth</div>
        </div>
        <div id="c229" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="right flexible__content background-color-green text-light">
                <div class="h4">Sleep Ease Oil</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Drift off to dreamland with Sleep Ease Lemongrass Oil.
                    Our expertly blended formula combines the sedative effects of lemongrass essential oil with therapeutic natural ingredients to promote relaxation and alleviate stress. It's perfect for a restful night's sleep.</p>
                </div>
            </div>
            <div class="left flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/sleepEaseOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/sleepEaseOil.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/sleepEaseOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/sleepEaseOil.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>

        <div id="c973" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <!-- <div class="content-section-title">Click and shop now</div> -->
            <div class="left">
                <div class="flexible__mobile-bodytext">
                </div><a href="https://shop.nardus.ng/shop/" target="_blank" class="cta-button style-color variant-primary" rel="noopener noreferrer">SHOP NOW</a>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>With {{config('app.name')}} essential oils, find your own little haven of health. Take a deep breath, loosen up and feel the life-changing impact of nature.</p>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

<!-- Footer -->
@section('footer')
@includeIf('layouts.footer', [
    'whatsapp' => 'https://wa.me/+2348147870307',
    'facebook' => 'https://www.facebook.com/narduslemongrassessential',
    'instagram' => 'https://www.instagram.com/narduscosmetics?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
    'twitter' => '#',
])
@endsection
<!-- Footer Ends -->
