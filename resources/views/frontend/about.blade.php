@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-768-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-992-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-1200-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-1400-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-1920-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" data-lazyload-2560-src="{{URL::asset('assets/images/aboutUsBanner.png')}}" style="background-image: url(&quot;{{URL::asset('assets/images/aboutUsBanner.png')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1">ABOUT US</div>
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
            <div class="h2 bodytext large-body" style="color: #194d02; margin-bottom: 1rem;">From Plant to Product, Innovation in Every Drop.</div>
            <div class="large-body ">
                <p style="text-align: justify;">Our products are widely utilized in the flavor, fragrance, and cosmetic industries. We also extend our value chain to include production of natural scents and cosmetics With a commitment to excellence, we meticulously select the finest plants and herbs to craft superior-grade offerings tailored to our customers' specifications.</p>
            </div>
        </div>
        <div id="c54" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h3">Who We Are</div>
                <div class="bodytext large-body">
                    <p>We support health and well-being through plant-based products. We constantly research and source new products that meet our customers' growing needs and also make a significant contribution to the world's need for essential oil.</p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyload" style="min-height: 400px !important;" data-lazyload-400-src="{{URL::asset('assets/images/whoweare.png')}}" data-lazyload-600-src="{{URL::asset('assets/images/whoweare.png')}}" data-lazyload-800-src="{{URL::asset('assets/images/whoweare.png')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c4" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" style="min-height: 350px !important;" data-lazyload-400-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/whatwedo.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h3">What We Do</div>
                <div class="bodytext large-body">
                    <p>{{config('app.name')}} Company Limited is a leading global supplier of essential oils and natural ingredients, catering to the fragrance, cosmetics and health sector industries. We offer an extensive selection of essential oils to meet the diverse needs of our clients.</p>
                </div>
            </div>
        </div>
        <div id="c57" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-signpost">
            <div class="panel lazyload" data-lazyload-576-src="{{URL::asset('assets/images/vision.png')}}" data-lazyload-768-src="{{URL::asset('assets/images/vision.png')}}" data-lazyload-1024-src="{{URL::asset('assets/images/vision.png')}}" data-lazyload-1440-src="{{URL::asset('assets/images/vision.png')}}" data-lazyload-2560-src="{{URL::asset('assets/images/vision.png')}}">
                <div class="content-wrapper">
                    <div class="panel__content background-color-blue text-light">
                        <div class="h3">Our Vision</div>
                        <div class="bodytext large-body">
                            <p>Leading the sustainable growth of Nigeria's indigenous plants and herbs for economic impact and global reach.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="c4" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" style="min-height: 350px !important;" data-lazyload-400-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/whatwedo.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h3">Our Mission</div>
                <div class="bodytext large-body">
                    <p>A company pursuing innovation and excellence in essential oils, scents and cosmetics, dedicated to harnessing creativity that transforms the world.</p>
                </div>
            </div>
        </div>
        <div id="c59" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" style="min-height: 550px !important;" data-lazyload-400-src="{{URL::asset('assets/images/ourPurpose.jpeg')}}" data-lazyload-600-src="{{URL::asset('assets/images/ourPurpose.jpeg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-blue text-light" style="padding-top: 60px !important;">
                <div class="h3">Our Purpose</div>
                <div class="bodytext large-body">
                    <ul>
                        <li>To constantly research and source new products that meet our customers’ growing needs.</li>
                        <li>To make a significant contribution to the world's need for essential oil.⁠</li>
                        <li>To diffuse the perfect fragrance in every space.</li>
                        <li>To promote natural ingredient in cosmetics production.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="c263" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h3">Our Core Values</div>
                <div class="bodytext large-body">
                    <ul>
                        <li>Sustainability</li>
                        <li>Wealth Creation </li>
                        <li>Innovation</li>
                        <li>Creativity</li>
                        <li>Excellence</li>
                    </ul>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="{{URL::asset('assets/images/corevalue.png')}}" data-lazyload-600-src="{{URL::asset('assets/images/corevalue.png')}}" data-lazyload-800-src="{{URL::asset('assets/images/corevalue.png')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c56" class="frame frame-default ctype-iffcomponents_cards" style="margin-bottom: 15vh;">
            <div class="h3">Our Products</div>
            <div class="cards-container columns-3">
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/EssentialOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/EssentialOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/EssentialOil.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Essential Oils</div>
                    </div>
                    <p style="font-size: 20px;">From Nature to Home: Find Serenity with Lemongrass Oil - A Natural Path to Wellness</p><a href="{{route('essentialOil')}}" class="card__link" rel="noopener noreferrer"> Explore </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/Scent.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/Scent.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Scent.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Scents</div>
                    </div>
                    <p style="font-size: 20px;">Promoting an exceptional fragrance brand that utilizes high-quality health ingredients backed by solid scientific research.</p><a href="{{route('scents')}}" class="card__link" rel="noopener noreferrer"> Explore </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="{{URL::asset('assets/images/Cosmetics.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/Cosmetics.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/Cosmetics.jpg')}}"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Cosmetics</div>
                    </div>
                    <p style="font-size: 20px;">Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil</p><a href="{{route('cosmetics')}}" class="card__link" rel="noopener noreferrer"> Explore </a>
                </article>
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
