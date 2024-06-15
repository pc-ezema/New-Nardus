@extends('layouts.frontend')
@section('page-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<section id="banner__container" class="size-standard visible" data-banner-count="1">
    <div id="banner__slider-outer">
        <div id="banner__slider" style="width: 100%;">
            <div class="banner">
                <div class="banner__images">
                    <div class="banner__image lazyloaded" data-lazyload-576-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-992-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-1200-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-1400-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-1920-src="{{URL::asset('assets/images/scentbanner.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/scentbanner.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentbanner.jpg')}}&quot;);"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content text-light">
                    <div class="content-wrapper">
                        <div class="banner__heading h1">SCENTS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c965" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-5 image-width-medium images-0">
            <div class="h2">Promoting an exceptional fragrance brand that utilizes high-quality health ingredients backed by solid scientific research.</div>
        </div>
        <div id="c967" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">Ambience Scenting</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Create a lasting impression with our ambience scenting solutions. Our expertly crafted fragrances can transport your customers, guests, or clients to a world of serenity, energy, or creativity, depending on your desired ambiance. Transform your space, transform your mind.</p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/scentAmbienceScenting.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/scentAmbienceScenting.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/scentAmbienceScenting.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentAmbienceScenting.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
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
                <div class="h4">Reed Diffuser and Fragrance</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">We offer a collection of fragrances made from meticulously sourced aromatic plants and other ingredients. Indulge in the scent of natural luxury and let the essence of aromatic plants enchant you. Whether you are seeking a fragrance to uplift and inspire or one to calm and soothe, {{config('app.name')}} scents has a fragrance to match your mood and style.</p>
                </div>
            </div>
        </div>
        <div id="c967" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="left flexible__content background-color-transparent">
                <div class="h4">Potpourii</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Our potpourri collection boasts a variety of captivating scents, each designed to create a unique and inviting atmosphere in your home. {{config('app.name')}} Scents potpourri is more than just a fragrance; it’s a sensory experience that brings the essence of nature into your home.</p>
                </div>
            </div>
            <div class="right flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/scentPotpourii.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/scentPotpourii.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/scentPotpourii.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentPotpourii.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
        </div>
        <div id="c968" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyloaded" data-lazyload-400-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}" style="background-image: url(&quot;{{URL::asset('assets/images/scentElectronicDiffuser.jpg')}}&quot;);">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent">
                <div class="h4">Electronic Diffuser</div>
                <div class="bodytext large-body">
                    <p style="text-align: justify;">Our electronic diffuser uses advanced technology to release a consistent gentle mist of fragrance into the air and creating a welcoming atmosphere in any space. We guarantee that our products meet the highest standards through rigorous testing and careful attention to our details from strain stability to purification.</p>
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
                            <h2 class="accordion-header" id="flush-heading25">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                                    What are the benefits of lemongrass and oud fragrance?
                                </button>
                            </h2>
                            <div id="flush-collapse25" class="accordion-collapse collapse" aria-labelledby="flush-heading25" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Uplifting, refreshing, grounding, and calming properties.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading26">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse26" aria-expanded="false" aria-controls="flush-collapse26">
                                    Is lemongrass fragrance suitable for stress relief?
                                </button>
                            </h2>
                            <div id="flush-collapse26" class="accordion-collapse collapse" aria-labelledby="flush-heading26" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, its citrus and herbal notes can help reduce stress and anxiety.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading27">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse27" aria-expanded="false" aria-controls="flush-collapse27">
                                    Can lemongrass fragrance repel insects?
                                </button>
                            </h2>
                            <div id="flush-collapse27" class="accordion-collapse collapse" aria-labelledby="flush-heading27" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, its citrus and grassy notes are known to repel mosquitoes and other insects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading28">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse28" aria-expanded="false" aria-controls="flush-collapse28">
                                    Are your reed diffusers oil base or alcohol base?
                                </button>
                            </h2>
                            <div id="flush-collapse28" class="accordion-collapse collapse" aria-labelledby="flush-heading28" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Our reed diffusers are oil base.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading29">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse29" aria-expanded="false" aria-controls="flush-collapse29">
                                    Can I use different scents in different rooms?
                                </button>
                            </h2>
                            <div id="flush-collapse29" class="accordion-collapse collapse" aria-labelledby="flush-heading29" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>YYes, then you’ll walk from one scent to another. Since scents trigger feelings, reed diffusers can create an environment of feelings that changes from one space to another.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading30">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse30" aria-expanded="false" aria-controls="flush-collapse30">
                                    How do car diffusers work?
                                </button>
                            </h2>
                            <div id="flush-collapse30" class="accordion-collapse collapse" aria-labelledby="flush-heading30" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Diffusers create a way to fill the air in a space with tiny, breathable particles of beneficial essential and sweet-smelling fragrance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading31">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse31" aria-expanded="false" aria-controls="flush-collapse31">
                                    How do I use my car diffuser?
                                </button>
                            </h2>
                            <div id="flush-collapse31" class="accordion-collapse collapse" aria-labelledby="flush-heading31" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>To use a car diffuser, open the wooden cap and remove the inner plastic stopper, then screw the wooden cap, and hang the bottle on your mirror.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading32">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                    What are the benefits of using a car diffuser?
                                </button>
                            </h2>
                            <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading32" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Some benefits include helping you relax, promoting feelings of calm, improving clarity and focus, boosting your mood, helping clear airways for easier breathing, and helping ease mood swings during hormonal times.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading33">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse33" aria-expanded="false" aria-controls="flush-collapse33">
                                    Is potpourri a natural air freshener?
                                </button>
                            </h2>
                            <div id="flush-collapse33" class="accordion-collapse collapse" aria-labelledby="flush-heading33" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, potpourri is a natural and chemical-free way to freshen the air.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading34">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse34" aria-expanded="false" aria-controls="flush-collapse34">
                                    Can potpourri be used in craft projects for gifts?
                                </button>
                            </h2>
                            <div id="flush-collapse34" class="accordion-collapse collapse" aria-labelledby="flush-heading34" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, potpourri makes a lovely addition to handmade gifts, such as wreaths, bouquets, or decorative jars.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading35">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse35" aria-expanded="false" aria-controls="flush-collapse35">
                                    What is ambience scenting?
                                </button>
                            </h2>
                            <div id="flush-collapse35" class="accordion-collapse collapse" aria-labelledby="flush-heading35" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Ambience scenting is the use of fragrances to create a specific atmosphere or mood in a space.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading36">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse36" aria-expanded="false" aria-controls="flush-collapse36">
                                    Can ambience scenting be customized?
                                </button>
                            </h2>
                            <div id="flush-collapse36" class="accordion-collapse collapse" aria-labelledby="flush-heading36" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, fragrances and intensity can be tailored to individual preferences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading37">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse37" aria-expanded="false" aria-controls="flush-collapse37">
                                    Is ambience scenting safe?
                                </button>
                            </h2>
                            <div id="flush-collapse37" class="accordion-collapse collapse" aria-labelledby="flush-heading37" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Generally safe, but may cause issues for those with sensitivities or allergies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading38">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse38" aria-expanded="false" aria-controls="flush-collapse38">
                                    How long does ambience scenting last?
                                </button>
                            </h2>
                            <div id="flush-collapse38" class="accordion-collapse collapse" aria-labelledby="flush-heading38" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Depends on the fragrance, diffuser, and space size.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading39">
                                <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse39" aria-expanded="false" aria-controls="flush-collapse39">
                                    Can ambience scenting be used in various settings?
                                </button>
                            </h2>
                            <div id="flush-collapse39" class="accordion-collapse collapse" aria-labelledby="flush-heading39" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Yes, in homes, offices, hotels, restaurants, and public spaces.</p>
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
                    <p>Join us on a journey of discovery and experience the beauty of nature in every bottle. Welcome to {{config('app.name')}} Scents, where the essence of nature meets fragrance.</p>
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
    'whatsapp' => 'https://wa.me/+2348166946598',
    'facebook' => 'https://www.facebook.com/profile.php?id=61556005809239&mibextid=ZbWKwL',
    'instagram' => 'https://www.instagram.com/nardusscents?igsh=MWY3cG8wcjFxZnRwZA==',
    'twitter' => 'https://x.com/NardusScents?t=0JYg3Eaws3r2pFoqZ0kNsg&s=09',
])
@endsection
<!-- Footer Ends -->
