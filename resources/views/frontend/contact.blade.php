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
                        <div class="banner__heading h1" style="font-weight:normal !important">CONTACT US</div>
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
    <section class="contact-1">
        <div class="container">
            <div class="main-title">
                <h1></h1>
                <p>Have Questions? Contact Us!</p>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
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
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <!-- Contact details start -->
                    <div class="contact-details">
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contant">
                                <h4>Office Address</h4>
                                <p>{{config('app.address')}}</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contant">
                                <h4>Factory Address</h4>
                                <p>{{config('app.factoryAddress')}}</p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contant">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:{{config('app.phone1')}}">Office: {{config('app.phone1')}}</a>
                                </p>
                                <p>
                                    <a href="tel:{{config('app.phone1')}}">Office: {{config('app.phone2')}}</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-item d-flex mb-3">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contant">
                                <h4>Email Address</h4>
                                <p>
                                    <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Contact details end -->
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Google map start -->
<div class="section">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.893197314354!2d3.419919588803274!3d6.464969084757887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4b6c81b2985%3A0x589b7d87d9769842!2sOsborne%20Foreshore%20Estate%2C%20Osborne%20Rd%2C%20Ikoyi%2C%20Lagos%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1716453704072!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Google map end -->

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
