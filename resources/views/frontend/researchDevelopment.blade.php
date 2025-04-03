@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-992-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-1200-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-1400-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-1920-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/aboutUsHeader.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/aboutUsHeader.jpg')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1" style="font-weight:normal !important">RESEARCH AND DEVELOPMENT</div>
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
        <div id="c372" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0">
            <div class="bodytext large-body">
                <p style="text-align: justify;">{{config('app.name')}} Limited is presently working on various Nigeria underutilised Indigenous plants for value addition and product development.</p>
            </div>
        </div>
        <div id="c57" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-signpost">
            <div class="panel lazyload" data-lazyload-576-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1024-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1440-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/vision.jpg')}}">
                <div class="content-wrapper">
                    <div class="panel__content background-color-blue text-light">
                        <div class="h3">List of plants & crops under research</div>
                        <div class="bodytext large-body">
                            <ul>
                                <li>lemongrass</li>
                                <li>Scent Leaf</li>
                                <li>Sweet Basil</li>
                                <li>Bitter Leaf</li>
                                <li>Moringa Leaf</li>
                                <li>Tobacco Leaf</li>
                                <li>Water Hyacinth</li>
                                <li>Ginger</li>
                                <li>Turmeric</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

<!-- Footer -->
@section('footer')
    @includeIf('layouts.footer', [
        'whatsapp' => '#',
        'facebook' => '#',
        'instagram' => '#',
        'twitter' => '#',
    ])
@endsection
<!-- Footer Ends -->
