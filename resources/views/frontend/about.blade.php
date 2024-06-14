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
                        <div class="banner__heading h1">WHAT WE DO</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c372" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0">
            <div class="content-section-title">MEET {{ucfirst(config('app.name'))}}</div>
            <div class="bodytext large-body">
                <p style="text-align: justify;">{{config('app.name')}} Company Limited is a global provider of essential oils, widely utilized in the fragrance, cosmetics and health sectors. We meticulously select the finest plants and herbs to craft premium-quality products. We offer a diverse range of products tailored to meet the needs of our customers.
                Our Vision is to be a company pursuing innovation and excellence in fragrance, cosmetics and health sectors, dedicated to harnessing creativity that transforms the world.</p>
            </div>
        </div>
        <div id="c263" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">Core Value</div>
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
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_2fabb839f2_dac313f76451c85db8ef32cbe5695714.jpg" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_a34e3fa244_ff6db0bd6e20688f033ec50e0063d2a4.jpg" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_820134bdef_bfc9d033d7feb0edba753e6ed31f1b18.jpg">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c552" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-breaker">
            <div class="panel lazyloaded" data-lazyload-576-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_e3289e6c80_fd7ff3f11b52a0de03450afb2973a130.jpg" data-lazyload-768-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_fd9fcaa103_38f2dd3f9fda59decb190735be196c6b.jpg" data-lazyload-1024-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_4d95b5527e_e43a5893ea3fd9b32686e35aa03e9c22.jpg" data-lazyload-1440-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_48839ecba5_3a5eea4c063607c61f06a9a8c7ee1c8a.jpg" data-lazyload-2560-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_00cb551a5a_6c320f26aa33793db41195fd4098dd6f.jpg" style="background-image: url(&quot;https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_deb-headercrop1_00cb551a5a_6c320f26aa33793db41195fd4098dd6f.jpg.webp&quot;);">
                <div class="content-wrapper">
                    <div class="panel__content background-color-grey text-light">
                        <div class="h3" style="text-align: justify;">A company pursuing innovation and excellence in fragrance, cosmetics and health sectors, dedicated to harnessing creativity that transforms the world.</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="c59" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_our-divisons-banner_f6bb324c09_ebf3538df15dbd9f1e27a201e3302f0a.png" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_our-divisons-banner_2f016f3bc6_9ce91248255fe534910c115ed5ff95d1.png" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_our-divisons-banner_9fd157dcf9_20d2246537b23e206659637750a2c2a1.png">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-blue text-light">
                <div class="h4">Our Purpose</div>
                <div class="bodytext large-body">
                    <ul>
                        <li>To make a significant contribution to the world's need for essential oil.</li>
                        <li>To constantly research and source new products that meet our customers’ growing needs.</li>
                        <li>To diffuse the perfect fragrance in every space.</li>
                        <li>To nourish, protect and glow with our natural ingredients.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="c968" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/scentReedDiffuser.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/scentReedDiffuser.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/scentReedDiffuser.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentReedDiffuser.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Services</div>
                <div class="bodytext large-body">
                    <ul>
                        <li><span style="font-weight: bolder;">Excellent Delivery Service:</span> A smart nationwide logistics network that guarantees safe and fast delivery.</li>
                        <li><span style="font-weight: bolder;">Experience & Talent</span>: Our work is founded on 5+ years of experience and driven by a line-up of remarkable corporate talents.</li>
                        <li><span style="font-weight: bolder;">Customer Support:</span> We have an experienced customer support team that responds to inquiries in real-time.</li>
                        <li><span style="font-weight: bolder;">Research & Development:</span> Continuous research on organics with a focus on promoting a healthier world.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
