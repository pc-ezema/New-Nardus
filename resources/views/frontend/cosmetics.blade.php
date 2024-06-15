@extends('layouts.frontend')
@section('page-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
            <div class="left">
                <div class="h2">Cosmetics</div>
                <div class="flexible__mobile-bodytext">
                    <div class="bodytext large-body">
                        <p>
                            Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil
                        </p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="bodytext large-body">
                    <p>
                        Unlocking Nature's Haircare Revolution: {{config('app.name')}} Lemongrass Haircare Oil
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
                <div class="h4">Hair Care Oil </div>
                <div class="bodytext large-body">
                    <p>
                        {{config('app.name')}} lemongrass haircare oil promotes hair growth, strengthens, moisturizes, and
                        conditions hair, controls dandruff, adds shine, soothes the scalp, prevents hair loss, and has a refreshing scent.
                        It is easy to use and provides overall hair health benefits for a vibrant and healthy hair.
                    </p>
                </div>
            </div>
        </div>

        <div id="c189" class="frame frame-default ctype-iffcomponents_multibox with-shape-0">
            <div class="multibox__boxes">
                <article class="multibox__box">
                    <p class="h4">For Haircare</p>
                    <div class="box__description">
                        <p>A natural, nutrient-rich formula designed to balance scalp pH, stimulate growth, and combat dandruff.
                            Revel in its soothing aroma and antioxidant protection for Radiant, healthy hair.</p>
                    </div>
                </article>
                <article class="multibox__box">
                    <p class="h4">For Beards</p>
                    <div class="box__description">
                        <p>Elevate your beard care with {{config('app.name')}} Lemongrass Beard Oil.
                            This natural elixir hydrates, stimulates growth, soothes skin, and protects with its antioxidant-rich,
                            antimicrobial properties. Embrace the fresh scent and radiant finish for a fuller, healthier beard.
                            Perfect for effortless grooming and style.</p>
                    </div>
                </article>
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
                    <p><strong>1. Dryness and Frizzness </strong><br> {{config('app.name')}} Lemongrass Haircare Oil, with its natural hydrating properties effectively combat dryness and frizzness, leaving the hair and beard soft, smooth and silky.</p>
                    <p><strong>2. Slow Growth </strong><br> Improving blood circulation to the scalp, which deliver more nutrients to the hair follicles and promote hair growth.</p>
                    <p><strong>3. Scalp Health and Dermatitis </strong><br> The oil consist of antimicrobial and smoothing properties that cures itchy scalp, dandruff and promoting overall hair health.</p>
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading8">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                    What is Nardus Lemongrass Haircare Oil, and what are its benefits?
                                </button>
                            </h2>
                            <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Nardus Lemongrass Haircare Oil is a natural, nourishing oil infused with lemongrass essential oil to promote healthy hair growth, reduce dandruff and itchiness, and leave your hair feeling soft and manageable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading9">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                    How do I use Nardus Lemongrass Haircare Oil?
                                </button>
                            </h2>
                            <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p> Apply a generous amount to the ends of your hair, working your way up to the roots.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading10">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                    Is Nardus Lemongrass Haircare Oil suitable for all hair types?
                                </button>
                            </h2>
                            <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, our oil is suitable for all hair types, including dry, damaged, oily, or combination hair.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading11">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                                    How long will a bottle of Nardus Lemongrass Haircare Oil last?
                                </button>
                            </h2>
                            <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Depending on hair length and usage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading12">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                                    Is Nardus Lemongrass Haircare Oil made with natural lemongrass oil?
                                </button>
                            </h2>
                            <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>YYes, its made with 100% undiluted oil.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading13">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                                    Can I use Nardus Lemongrass Haircare Oil on my scalp?
                                </button>
                            </h2>
                            <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, our oil can be applied directly to the scalp to help soothe itchiness and promote healthy hair growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading14">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
                                    Are there any side effects of using Nardus Lemongrass Haircare Oil?
                                </button>
                            </h2>
                            <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Our oil is made with natural ingredients and is generally gentle. However, if you experience any irritation or discomfort, discontinue use and consult a healthcare professional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading15">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
                                    Can I use Nardus Lemongrass Haircare Oil during pregnancy or breastfeeding?
                                </button>
                            </h2>
                            <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>As with any new haircare product, consult your healthcare provider before using our oil during pregnancy or breastfeeding.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading16">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
                                    How do I use Lemongrass Haircare Oil for my beard?
                                </button>
                            </h2>
                            <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Apply 2-3 drops of Lemongrass Haircare Oil to your beard, massaging it into the hair and skin beneath. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading17">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                                    What are the benefits of using Lemongrass Haircare Oil for my beard?
                                </button>
                            </h2>
                            <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Lemongrass Haircare Oil helps to condition and moisturize your beard, promoting healthy growth, reducing dandruff and itchiness, and leaving your beard smelling fresh and clean.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading18">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                                    Can I use Lemongrass Haircare Oil to help reduce beard bumps and ingrown hairs?
                                </button>
                            </h2>
                            <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, Lemongrass Haircare Oil has natural anti-inflammatory properties that can help reduce beard bumps and ingrown hairs. Massage the oil into your beard and skin to help soothe and calm irritated areas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading19">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                                    Is Lemongrass Haircare Oil suitable for all beard types?
                                </button>
                            </h2>
                            <div id="flush-collapse19" class="accordion-collapse collapse" aria-labelledby="flush-heading19" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, Lemongrass Haircare Oil is suitable for all beard types, including dry, oily, or combination beards. It helps to balance and nourish your beard, regardless of its type.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading20">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                                    How often should I use Lemongrass Haircare Oil for my beard?
                                </button>
                            </h2>
                            <div id="flush-collapse20" class="accordion-collapse collapse" aria-labelledby="flush-heading20" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>For best results, apply it 1-2 times a week as a nourishing treatment. If you're experiencing beard bumps or ingrown hairs, you can apply a small amount daily on the affected area.</p>
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
                    <p>Nourishes and soothes your hair, embracing vibrant radiance and a comforted scalp.</p>
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
    'facebook' => 'https://www.facebook.com/narduslemongrassessential',
    'instagram' => 'https://www.instagram.com/nardusscentsandoils?igsh=dWV0NHoxajl3cWZt',
    'twitter' => '#',
])
@endsection
<!-- Footer Ends -->
