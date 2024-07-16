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
                        <div class="banner__heading h1">Essential Oil</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c965" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0" style="align-items: center;">
            <div class="h2" style="text-align: center; font-size: 30px !important;">From Nature to Home: A Natural Path to Wellness</div>
        </div>
        <div id="c32" class="frame frame-default ctype-iffcomponents_multibox with-shape-1">
            <div class="multibox__background-shape background-color-red text-light">
                <div class="content-wrapper">
                </div>
            </div>
            <div class="multibox__boxes">
                <article class="multibox__box">
                    <div class="box__image lazyloaded" data-lazyload-300-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilLemongrassOil.jpg')}}&quot;);"></div>
                    <p class="h4">Lemongrass Oil</p>
                    <p style="text-align: justify; font-size: 20px !important;">Lemongrass Essential Oil offers the natural solution consumers seek.
                        Our experts have perfected a range of premium-grade lemongrass essential oils designed to help you address
                        the wellness and lifestyle challenges of today and tomorrow.</p>
                </article>
                <article class="multibox__box">
                    <div class="box__image lazyloaded" data-lazyload-300-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}&quot;);"></div>
                    <p class="h4">Scent Leaf Oil</p>
                    <p style="text-align: justify; font-size: 20px !important;">Scent leaf oil is crafted by experts to nourishes, soothes and promotes healthy complexion. Rich in nutrients, it combats dryness & irritation for natural, radiant glow. Embrace nature's secret for beautiful and balanced skin.</p>
                </article>
            </div>
        </div>
        <div id="c229" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilThymeOil.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-green text-light">
                <div class="h4">Thyme Oil</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Nature's wellness warrior!
                        This oil's active compounds promote clear skin, healthy breathing, and a balanced body.
                        Its invigorating aroma uplifts the mind while supporting digestion and immunity.</p>
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
