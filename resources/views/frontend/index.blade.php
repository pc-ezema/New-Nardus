@extends('layouts.frontend')
@section('page-content')
<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_383ac8f683_1c6c322db63dd5e928ff1f48abce904b.jpg" data-lazyload-768-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_ad164f2a65_fb342fe7679622e5931928fa134546c0.jpg" data-lazyload-992-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_1d39ab8a81_df8893180f660bfd0c428ea5fba97d7b.jpg" data-lazyload-1200-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_89a463ac9e_42f2d30e0f48d5fc61b9c5277a490692.jpg" data-lazyload-1400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_2a21d368e0_c710887c001a4307f3213e0b4aebcb1c.jpg" data-lazyload-1920-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_2d89c03d69_bbd2520f731ca99fc78915452d23b4f2.jpg" data-lazyload-2560-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_5f28750bba_f78fbd1fb5c83e079863d1a6033d812b.jpg" style="background-image: url(&quot;https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_GettyImages-1021677050_2a21d368e0_c710887c001a4307f3213e0b4aebcb1c.jpg.webp&quot;);"></div>
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
                </div><a href="solutions.html" class="cta-button style-color variant-secondary">Explore</a>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_bioscience-square_59364364c5_68eff3e9072f183541966acf0cc235ed.png" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_bioscience-square_4cfe270a3e_00c735b2114d892987bb44b0b834dac8.png" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_bioscience-square_fcc0a5c152_e01d1518b184d397f6daf59ba00d96b5.png">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c4" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_scientist_crop1x1_c0ea1262ec_230a11ad6526d377f148ee207fb1cd4f.png" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_scientist_crop1x1_c9e3dff463_2d3da3f73814a6aab70b22b8d7485f0b.png" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_scientist_crop1x1_e39d386a3d_39d69b39ff2b794b8b0fe58db24ed7b4.png">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="content-section-title">{{config('app.name')}}</div>
                <div class="h4">What We Do</div>
                <div class="bodytext large-body">
                    <p>Explore our holistic approach to sustainable growth, enabling our customers to meet ESG goals and experience market success, while improving the environmental footprint and wellbeing of millions globally.</p>
                </div><a href="iff-bioscience/catalysts-for-good.html" class="cta-button style-color variant-secondary">find out more</a>
            </div>
        </div>
        <div id="c57" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-signpost">
            <div class="panel lazyload" data-lazyload-576-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_render_4508264573_c9f7ca79e0fe150491313293859d10ed.jpg" data-lazyload-768-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_render_b5dcb68439_f75ea8e03ca09861824b9ce33aeb7d9a.jpg" data-lazyload-1024-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_render_00471e9e9b_e035d9d4afd90d849d395a55cccf37cf.jpg" data-lazyload-1440-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_render_b55d21b075_80eeec1c3427317ee767b72f87d7ffc1.jpg" data-lazyload-2560-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_render_f56b1db60c_a2243ecddc693e9261bf111ee8ba11ae.jpg">
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
                    <div class="card__image lazyload" data-lazyload-300-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_IFF_DEB_kemira-pr-3600x1884-nowords_0b90dbf020_ebce4b24e53632699a93a3bcac1c790f.png" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_IFF_DEB_kemira-pr-3600x1884-nowords_8b3c9fc5ee_9ab32e672afa455f9fcf178772db5b48.png" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_IFF_DEB_kemira-pr-3600x1884-nowords_655de0d7b9_6e6314b8a0cba3114787bda7e34cacb2.png"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Scents</div>
                    </div>
                    <p class="h4">IFF Expands Partnership with Kemira to Commercialize New Designed Enzymatic Biomaterials</p><a href="{{route('scents')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_MicrosoftTeams-image__3__ca977d04ae_4ed62194a5a2c8fd4c70d1ed16bd2070.png" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_MicrosoftTeams-image__3__b31c8115d8_9d5a644dc1c1e66cf1992087b603f33f.png" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_MicrosoftTeams-image__3__5367fdb528_032842168c8b7e98d00784e6ffbc198a.png"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Cosmetics</div>
                    </div>
                    <p class="h4">IFF Celebrates Achievements of Leading Scientists Across Multiple Fields</p><a href="{{route('cosmetics')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
                </article>
                <article class="card">
                    <div class="card__image lazyload" data-lazyload-300-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_iff-secures-regulatory-approval-for-use-of-2_-fl-hmo-in-china_914d20b9c9_d45a2ffa39ef36a8915e2386aa4e6a8e.jpg" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_iff-secures-regulatory-approval-for-use-of-2_-fl-hmo-in-china_21e5cd7386_b9e3ce92d7f9e950d6aa64ae8c48e0c0.jpg" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_iff-secures-regulatory-approval-for-use-of-2_-fl-hmo-in-china_6e98351581_b516dcaa16f823178b18ee8e4376098f.jpg"></div>
                    <div class="card__metadata">
                        <div class="tag variant-orange homeTag">Essential Oil</div>
                    </div>
                    <p class="h4">IFF Secures Regulatory Approval for Use of 2’-FL HMO in China</p><a href="{{route('essential_oil')}}" class="card__link" rel="noopener noreferrer"> Find out more </a>
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
