@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-768-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-992-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-1200-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-1400-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-1920-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" data-lazyload-2560-src="{{URL::asset('assets/images/cosmeticsBanner.png')}}" style="background-image: url(&quot;{{URL::asset('assets/images/cosmeticsBanner.png')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1" style="font-weight:normal !important">COSMETICS</div>
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
            <div class="h2" style="text-align: center; font-size: 30px !important;"> Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil</div>
        </div>
        <div id="c224" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/Haircare.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Haircare.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/Haircare.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Lemongrass Haircare Oil </div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">
                        Our {{config('app.name')}} Lemongrass Natural Haircare Oil is your go-to solution for a healthy scalp, strong hair, and a well-groomed beard. Made with pure, natural ingredients, it stops scalp itchiness, eliminates dandruff,
                        and clears buildup for faster hair growth.</p>
                    <p style="text-align: justify;">
                        For men, it softens beard hair, soothes irritation, and promotes a fuller, healthier look.
                    </p>
                    <p style="text-align: justify;">
                        No stress—just apply and let the nourishment work from root to tip
                    </p>
                </div>
            </div>
        </div>
        <div id="c967" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">Lemongrass Natural Black Soap</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">
                        A soap that cleans deeply without stripping your skin and creates a rich, creamy lather that washes away dirt while leaving your skin feeling fresh, smooth, and hydrated.
                    </p>
                    <p style="text-align: justify;">
                        It’s gentle yet effective, making it perfect for daily use on all skin types, including oily, dry and acne-prone skin.
                    </p>
                    <p style="text-align: justify;">
                        It gives the moisturizing feel, lasting freshness, and great value and  large bar lasts long, ensuring you get the best out of every use.
                    </p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/Soap.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Soap.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/Soap.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/Soap.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c224" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/powder.png')}}" data-lazyload-600-src="{{URL::asset('assets/images/powder.png')}}" data-lazyload-800-src="{{URL::asset('assets/images/powder.png')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Powder </div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">
                        {{config('app.name')}} Lemongrass Body Powder is your go-to solution for dry, irritated skin and unwanted odor. Made with natural lemongrass oil, it helps prevent sweat rashes, soothe chafing, and keep you fresh all day.
                    </p>
                    <p style="text-align: justify;">
                        Whether you need relief from friction-prone areas, a gentle alternative to harsh deodorants, or a way to stay dry after showering, this powder has you covered. Stay comfortable, confident, and odor-free—every single day.
                    </p>
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
                    <p>Nardus – Where Nature Meets Elegance.</p>
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
