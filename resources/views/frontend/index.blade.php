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
                        <div class="banner__heading h1" style="margin-bottom: 1.5rem; font-weight:normal !important">Discover <br> our <br> natural Oils</div>
                        <a href="{{route('aboutUs')}}" class="style-light variant-secondary h5" style="font-size: 1rem; font-weight:normal !important">Get to know us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        <!-- <div class="banner__sub-heading h5">Leading provider of premium essential oils, widely utilized in the flavor, fragrance, and cosmetic industries.</div> -->
                        <!-- <a href="{{route('aboutUs')}}" class="cta-button style-light variant-secondary">Get to know us</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c4" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-1 image-width-medium images-1">
            <div class="left flexible__image-container">
                <div class="flexible__image lazyload" style="min-height: 350px !important;" data-lazyload-400-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-600-src="{{URL::asset('assets/images/whatwedo.jpg')}}" data-lazyload-800-src="{{URL::asset('assets/images/whatwedo.jpg')}}">
                    <div class="background-dimmer"></div>
                </div>
            </div>
            <div class="right flexible__content background-color-transparent" style="padding: 0px 0px 0px 80px !important; display: inline-block !important;">
                <div class="h3">Our Mission</div>
                <div class="bodytext large-body">
                    <p>A company pursuing innovation and excellence in essential oils, scents and cosmetics, dedicated to harnessing creativity that transforms the world.</p>
                </div>
            </div>
        </div>
        <div id="c57" class="frame frame-default ctype-iffcomponents_panel tx-iff-components-panel size-standard type-signpost">
            <div class="panel lazyload" data-lazyload-576-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-768-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1024-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-1440-src="{{URL::asset('assets/images/vision.jpg')}}" data-lazyload-2560-src="{{URL::asset('assets/images/vision.jpg')}}">
                <div class="content-wrapper">
                    <div class="panel__content background-color-blue text-light">
                        <div class="h3">Our Vision</div>
                        <div class="bodytext large-body">
                            <p>Leading the sustainable growth of Nigeria's indigenous plants and herbs for economic impact and global reach. The image for this is the lemongrass field.</p>
                        </div>
                    </div>
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
                <div class="flexible__image lazyload" data-lazyload-400-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_2fabb839f2_dac313f76451c85db8ef32cbe5695714.jpg" data-lazyload-600-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_a34e3fa244_ff6db0bd6e20688f033ec50e0063d2a4.jpg" data-lazyload-800-src="https://d3b9n0uye9y0ja.cloudfront.net/typo3temp/assets/images/csm_CFG_Biotech_2k_820134bdef_bfc9d033d7feb0edba753e6ed31f1b18.jpg">
                    <div class="background-dimmer"></div>
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
        <div id="c973" class="frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-3 image-width-medium images-0">
            <div class="left">
                <div class="bodytext large-body">
                    <p>Experience the rich potency value of our natural product, derived through the most ethical extraction and purification process to give a recall moment the world is yet to discover.</p>
                </div>
            </div>
            <div class="right">
                <div class="h4">Speak with our team?</div>
                <div id="successMessage" class="alert alert-success d-none"></div>
                <div class="contact-form">
                    <form id="contactForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" id="floating-full-name" name="full_name" class="form-control" maxlength="40" onchange="" onfocus="" placeholder="Full Name">
                                    <label for="floating-full-name">First Name *</label>
                                </div>
                                <span id="full_nameError" class="text-danger error-message"></span>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="email" id="floating-email-address" name="email" class="form-control" maxlength="80" onchange="" onfocus="" placeholder="Email Address">
                                    <label for="loating-email-address">Email Address *</label>
                                </div>
                                <span id="emailError" class="text-danger error-message"></span>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="text" id="floating-subject" name="subject" placeholder="Subject" class="form-control" maxlength="255" onchange="" onfocus="">
                                    <label for="floating-subject">Subject *</label>
                                </div>
                                <span id="subjectError" class="text-danger error-message"></span>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-floating mb-4">
                                    <input type="tel" id="floating-phone-Number" name="phone_number" class="form-control" maxlength="255" onchange="" onfocus="" placeholder="Phone Number">
                                    <label for="floating-phone-Number">Phone Number *</label>
                                </div>
                                <span id="phone_numberError" class="text-danger error-message"></span>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea type="text" id="floatingTextarea2" name="message" class="form-control" onchange="" onfocus=""></textarea>
                                    <label for="floatingTextarea2">Message *</label>
                                </div>
                                <span id="messageError" class="text-danger error-message"></span>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn-md btn-theme btn-4 btn-7" id="sendMessageBtn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = new FormData($(this)[0]);

            // Disable submit button and show loading state
            $('#sendMessageBtn').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending message...');

            // Send Ajax request
            $.ajax({
                url: "{{ route('submitContact') }}", // Replace 'contact.submit' with your actual route name
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include the CSRF token in the headers
                },
                success: function(response) {
                    // Clear previous error messages
                    $('.error-message').text('');

                    // Handle success response
                    if (response.success) {
                        // Display success message
                        $('#successMessage').text(response.message).removeClass('d-none');

                        $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                    } else {
                        // Display validation errors
                        $.each(response.errors, function(key, value) {
                            $('#' + key + 'Error').text(value);
                        });

                        $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle Ajax error
                    console.error(xhr.responseText);

                    $('#sendMessageBtn').attr('disabled', false).html('Send Message');
                }
            });
        });
    });
</script>
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