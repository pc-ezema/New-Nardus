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
        <div id="c965" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0" style="align-items: center;">
            <div class="h2" style="text-align: center; font-size: 30px !important;"> Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil</div>
        </div>
        <div id="c224" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/cosmeticsHairCareOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/cosmeticsHairCareOil.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/cosmeticsHairCareOil.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Hair Care Oil </div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">
                        {{config('app.name')}} lemongrass haircare oil promotes hair growth, strengthens, moisturizes, and
                        conditions hair, controls dandruff, adds shine, soothes the scalp, prevents hair loss, and has a refreshing scent.
                        It is easy to use and provides overall hair health benefits for a vibrant and healthy hair.
                    </p>
                </div>
            </div>
        </div>
        <div id="c967" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">For Beards</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Elevate your beard care with {{config('app.name')}} Lemongrass Beard Oil.
                        This natural elixir hydrates, stimulates growth, soothes skin, and protects with its antioxidant-rich,
                        antimicrobial properties. Embrace the fresh scent and radiant finish for a fuller, healthier beard.
                        Perfect for effortless grooming and style.</p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c112" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/haircare.png')}}" data-lazyload-600-src="{{URL::asset('assets/images/haircare.png')}}" data-lazyload-800-src="{{URL::asset('assets/images/haircare.png')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Solutions</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;"><strong>1. Dryness and Frizzness </strong><br> {{config('app.name')}} Lemongrass Haircare Oil, with its natural hydrating properties effectively combat dryness and frizzness, leaving the hair and beard soft, smooth and silky.</p>
                    <p style="text-align: justify;"><strong>2. Slow Growth </strong><br> Improving blood circulation to the scalp, which deliver more nutrients to the hair follicles and promote hair growth.</p>
                    <p style="text-align: justify;"><strong>3. Scalp Health and Dermatitis </strong><br> The oil consist of antimicrobial and smoothing properties that cures itchy scalp, dandruff and promoting overall hair health.</p>
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
                    <p>Nourishes and soothes your hair, embracing vibrant radiance and a comforted scalp.</p>
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
