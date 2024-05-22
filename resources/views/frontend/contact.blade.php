@extends('layouts.frontend')
@section('page-content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                        <div class="banner__heading h1">CONTACT US</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="content" class="content-wrapper">
    <section class="contact-1">
        <div class="container">
            <div class="main-title">
                <h1>Contact Us</h1>
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
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contant">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:{{config('app.phone1')}}">Office: {{config('app.phone1')}}</a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.610104233615!2d3.9569986243804136!3d7.397509512391376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10399317b5d46737%3A0xf865c02348c75e54!2sOlubadan%20Estate.%2C%20Ibadan%20200113%2C%20Oyo!5e0!3m2!1sen!2sng!4v1715006577089!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Google map end -->
<style>
    a {
        text-decoration: none;
    }
    .main-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .main-title h1 {
        font-weight: 700;
        margin: 0 0 10px;
        font-size: 45px;
    }

    .btn-4 {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        border: none;
        outline: none !important;
        color: #ffffff;
        text-transform: capitalize;
        transition: all 0.6s linear;
        z-index: 1;
        overflow: hidden;
        font-weight: 600;
        padding: 0 30px;
        font-size: 15px;
        border-radius: 3px;
        letter-spacing: 0.5px;
        font-family: 'Mulish', sans-serif;
    }

    .btn-4:hover {
        color: #ffffff;
        background-color: #123901;
    }

    .btn-4:hover:after {
        transform: perspective(200px) scaleX(1.05) rotateX(0deg) translateZ(0);
        transition: transform 0.6s linear, transform 0.6s linear;
    }

    .btn-4:after {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        content: "";
        border-radius: 0;
        transform: perspective(200px) scaleX(0.1) rotateX(90deg) translateZ(-10px);
        transform-origin: bottom center;
        transition: transform 0.6s linear, transform 0.6s linear;
        z-index: -1;
    }

    .btn-7 {
        position: relative;
        display: inline-block;
        vertical-align: middle;
        outline: none !important;
        color: #ffffff;
        text-transform: capitalize;
        transition: all 0.3s linear;
        z-index: 1;
        overflow: hidden;
        padding: 0 30px;
        font-weight: 600;
        font-size: 15px;
        line-height: 46px;
        border-radius: 3px;
        letter-spacing: 0.5px;
        font-family: 'Mulish', sans-serif;
        background-color: #194d02;
    }

    .contact-1 .form-control {
        width: 100%;
        font-size: 15px;
        background: #fff;
        outline: 0;
        border-radius: 3px;
        border: 1px solid #e5e5e5;
    }

    .contact-1 .form-control:focus {
        color: #495057;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        outline: 0;
    }

    .contact-1 .btn-7 {
        line-height: 54px;
    }

    .contact-1 .form-floating>label {
        padding: 1rem 1rem;
    }

    .contact-1 .form-floating {
        color: #535353;
    }

    .contact-1 .form-control:focus {
        box-shadow: none;
    }

    .contact-1 .form-floating>.form-control:focus,
    .form-floating>.form-control:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: .625rem;
        padding-right: 1rem;
        padding-left: 1rem;
    }

    .contact-1 textarea {
        min-height: 210px;
    }

    .contact-1 .btn-message {
        border-radius: 50px;
        padding: 10px 60px 11px;
    }

    .contact-1 .contact-details {
        padding: 40px 40px 40px 35px;
        border-radius: 5px;
        margin-left: 50px;
        background: #fff;
        border: 1px solid #e6e6e6;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 6%);
    }

    .contact-1 .contact-item {
        position: relative;
    }

    .contact-1 .contact-item i {
        font-size: 40px;
        line-height: 60px;
        color: #194d02;
    }

    .contact-1 .contact-item .contant {
        margin-left: 15px;
    }

    .contact-1 .contact-item h4 {
        font-weight: 700;
        font-size: 20px;
        margin: 5px 0 5px;
    }

    .contact-1 .contact-item p {
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 0;
    }

    .contact-1 .contact-item p a {
        color: #5a5959;
    }

    .contact-1 .contact-item .icon {
        width: 40px;
        text-align: center;
    }

    @media (max-width: 992px) {
        .contact-1 .contact-details {
            padding: 40px 40px 40px 35px;
            border-radius: 5px;
            margin: 50px 0 0 0;
            background: #fff;
        }
    }

    @media (max-width: 576px) {

        .main-title h1 {
            display: none;
        }
    }
</style>

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
