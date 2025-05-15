@extends('layouts.frontend')
@section('page-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                        <div class="banner__heading h1">FAQs</div>
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
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mb-30">
            <div class="faq-info">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="lemongrass-tab" data-bs-toggle="tab" data-bs-target="#lemongrass-tab-pane" type="button" role="tab" aria-controls="lemongrass-tab-pane" aria-selected="true">Lemongrass Essential Oil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hair-tab" data-bs-toggle="tab" data-bs-target="#hair-tab-pane" type="button" role="tab" aria-controls="hair-tab-pane" aria-selected="false">Haircare Oil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sleepease-tab" data-bs-toggle="tab" data-bs-target="#sleepease-tab-pane" type="button" role="tab" aria-controls="sleepease-tab-pane" aria-selected="false">SleepEase Lemongrass Oil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="scents-tab" data-bs-toggle="tab" data-bs-target="#scents-tab-pane" type="button" role="tab" aria-controls="scents-tab-pane" aria-selected="false">Scents</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="lemongrass-tab-pane" role="tabpanel" aria-labelledby="lemongrass-tab" tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
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
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hair-tab-pane" role="tabpanel" aria-labelledby="hair-tab" tabindex="0">
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
                    <div class="tab-pane fade" id="sleepease-tab-pane" role="tabpanel" aria-labelledby="sleepease-tab" tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
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
                    <div class="tab-pane fade" id="scents-tab-pane" role="tabpanel" aria-labelledby="scents-tab" tabindex="0">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading25">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                                        What are the benefits of {{config('app.name')}} scents reed fragrances ?
                                    </button>
                                </h2>
                                <div id="flush-collapse25" class="accordion-collapse collapse" aria-labelledby="flush-heading25" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p><b>1. Air Fragrance:</b> Creates a perfect ambience scent.</p>
                                        <p><b>2. Antiseptic:</b> Disinfects the air from bacteria.</p>
                                        <p><b>3. Anti Viral:</b> purifies the air from viral infections.</p>
                                        <p><b>4. Mosquito Repellent:</b> repels mosquitoes and other insects.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading26">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse26" aria-expanded="false" aria-controls="flush-collapse26">
                                        Are your reed diffuser oil base or alcohol base?
                                    </button>
                                </h2>
                                <div id="flush-collapse26" class="accordion-collapse collapse" aria-labelledby="flush-heading26" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Our reed diffusers are oil-based.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading27">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse27" aria-expanded="false" aria-controls="flush-collapse27">
                                        How do I use my car diffuser?
                                    </button>
                                </h2>
                                <div id="flush-collapse27" class="accordion-collapse collapse" aria-labelledby="flush-heading27" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>To use a car diffuser, open the wooden cap and remove the inner plastic stopper, then screw the wooden cap, and hang the bottle on your inner mirror or pin to your AC Vent.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading28">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse28" aria-expanded="false" aria-controls="flush-collapse28">
                                        Can I have a customized package?
                                    </button>
                                </h2>
                                <div id="flush-collapse28" class="accordion-collapse collapse" aria-labelledby="flush-heading28" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Yes, we can customize a package for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading29">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse29" aria-expanded="false" aria-controls="flush-collapse29">
                                        What is ambience scenting?
                                    </button>
                                </h2>
                                <div id="flush-collapse29" class="accordion-collapse collapse" aria-labelledby="flush-heading29" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Ambience scenting is the use of fragrances to create a specific atmosphere or mood in a space.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading30">
                                    <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse30" aria-expanded="false" aria-controls="flush-collapse30">
                                        Can ambience scenting be used in various settings?
                                    </button>
                                </h2>
                                <div id="flush-collapse30" class="accordion-collapse collapse" aria-labelledby="flush-heading30" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>Yes, it can be used in homes, offices, hotels, restaurants, and events.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
    .accordion-button,
    .nav-link {
        font-size: 20px !important;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
