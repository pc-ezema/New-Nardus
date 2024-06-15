@extends('layouts.frontend')
@section('page-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c31" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="left">
                <div class="h2">Health</div>
                <div class="flexible__mobile-bodytext">
                    <div class="bodytext large-body">
                        <p>From Nature to Home: A Natural Path to Wellness</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>From Nature to Home: A Natural Path to Wellness</p>
                </div>
            </div>
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
                    <p>Lemongrass Essential Oil offers the natural solution consumers seek.
                        Our experts have perfected a range of premium-grade lemongrass essential oils designed to help you address
                        the wellness and lifestyle challenges of today and tomorrow.</p>
                </article>
                <article class="multibox__box">
                    <div class="box__image lazyloaded" data-lazyload-300-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-400-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/essentialoilScentLeafOil.jpg')}}&quot;);"></div>
                    <p class="h4">Scent Leaf Oil</p>
                    <p>Scent leaf oil is crafted by experts to nourishes, soothes, and promotes healthy complexion. Rich in nutrients, it combats dryness & irritation for natural, radiant glow. Embrace nature's secret for beautiful and balanced skin.</p>
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
                    <p>Nature's wellness warrior!
                        This oil's active compounds promote clear skin, healthy breathing, and a balanced body.
                        Its invigorating aroma uplifts the mind while supporting digestion and immunity.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="main-title">
                <h1></h1>
                <p>Answers to Your Questions: Frequently Asked Questions (FAQs)</p>
            </div>
        </div>
        <div class="row" style="margin-bottom: 8rem;">
            <div class="col-lg-10 offset-lg-1 mb-30">
                <div class="faq-info">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <h5>Lemongrass Essential Oil</h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is Lemongrass Essential Oil, and what are its benefits?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Lemongrass Essential Oil is a natural oil extracted from the leaves of the lemongrass plant, offering a range of benefits including peaceful sleep, stress relief, aromatherapy, pain reduction, and insect repellent properties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    How do I use Lemongrass Essential Oil?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Use a few drops in a diffuser, for massage or skincare, or add to cleaning products for a natural and refreshing scent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Is Lemongrass Essential Oil safe for skin use?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, and for people with sensitive skin, it's best to avoid using Lemongrass Essential Oil.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                    How long does Lemongrass Essential Oil last?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>When stored properly, Lemongrass Essential Oil can last up to 5 years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                    Can I use Lemongrass Essential Oil during pregnancy or breastfeeding?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Consult your healthcare provider before using Lemongrass Essential Oil during pregnancy or breastfeeding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                    Can I use Lemongrass Essential Oil in my skincare routine?
                                </button>
                            </h2>
                            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, Lemongrass Essential Oil has antiseptic and astringent properties that can help reduce acne, tighten pores, and tone the skin.</p>
                                </div>
                            </div>
                        </div>
                        <br/><br/>
                        <h5>SleepEase Lemongrass Oil</h5>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading21">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                                    How do I use SleepEase Lemongrass Oil for a peaceful night's sleep?
                                </button>
                            </h2>
                            <div id="flush-collapse21" class="accordion-collapse collapse" aria-labelledby="flush-heading21" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Add 5-7 drops of SleepEase Lemongrass Oil to your diffuser before bed, or put a few drop on a cotton ball or tissue paper and hide the scented fluff around the bed or sofa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading22">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                                    What makes SleepEase Lemongrass Oil effective for sleep?
                                </button>
                            </h2>
                            <div id="flush-collapse22" class="accordion-collapse collapse" aria-labelledby="flush-heading22" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>SleepEase Lemongrass Oil is made with Lemongrass Oil, which has a calming and soothing effect on the mind and body, helping to reduce stress and anxiety that can interfere with sleep.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading23">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse23" aria-expanded="false" aria-controls="flush-collapse23">
                                    Can I use SleepEase Lemongrass Oil if I have trouble falling asleep?
                                </button>
                            </h2>
                            <div id="flush-collapse23" class="accordion-collapse collapse" aria-labelledby="flush-heading23" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, SleepEase Lemongrass  Oil can help calm your mind and body, making it easier to fall asleep and stay asleep throughout the night.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading24">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse24" aria-expanded="false" aria-controls="flush-collapse24">
                                    Is SleepEase Lemongrass Oil safe to use every night?
                                </button>
                            </h2>
                            <div id="flush-collapse24" class="accordion-collapse collapse" aria-labelledby="flush-heading24" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, SleepEase Lemongrass Oil is made with natural ingredients and is safe to use every night to promote peaceful sleep and relaxation.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="c973" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="content-section-title">Click and shop now</div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

<!-- Footer -->
@section('footer')
@includeIf('layouts.footer', [
    'whatsapp' => 'https://wa.me/+2348147870307',
    'facebook' => '#',
    'instagram' => '#',
    'twitter' => '#',
])
@endsection
<!-- Footer Ends -->
