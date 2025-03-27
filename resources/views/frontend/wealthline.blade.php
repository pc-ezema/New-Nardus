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
                        <div class="banner__heading h1" style="font-weight:normal !important">WEALTHLINE</div>
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
                <p>Lemongrass Natural Haircare Oil Wealthline</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="successMessage" class="alert alert-success d-none"></div>
                    <div class="contact-form">
                        <form id="orderForm" enctype="multipart/form-data">
                            <div class="row">
                                <!-- Name -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" id="floating-name" name="name" class="form-control" maxlength="40" placeholder="Full Name">
                                        <label for="floating-name">Name *</label>
                                    </div>
                                    <span id="nameError" class="text-danger error-message"></span>
                                </div>

                                <!-- School -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" id="floating-school" name="school" class="form-control" maxlength="100" placeholder="School Name">
                                        <label for="floating-school">School *</label>
                                    </div>
                                    <span id="schoolError" class="text-danger error-message"></span>
                                </div>

                                <!-- Address -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <input type="text" id="floating-address" name="address" class="form-control" maxlength="255" placeholder="Address">
                                        <label for="floating-address">Address *</label>
                                    </div>
                                    <span id="addressError" class="text-danger error-message"></span>
                                </div>

                                <!-- Level -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="text" id="floating-level" name="level" class="form-control" maxlength="50" placeholder="Level">
                                        <label for="floating-level">Level *</label>
                                    </div>
                                    <span id="levelError" class="text-danger error-message"></span>
                                </div>

                                <!-- Year of Graduation -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-floating mb-4">
                                        <input type="number" id="floating-year" name="year_of_graduation" class="form-control" min="1900" max="2100" placeholder="Year of Graduation">
                                        <label for="floating-year">Year of Graduation *</label>
                                    </div>
                                    <span id="yearError" class="text-danger error-message"></span>
                                </div>

                                <!-- Order -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="floating-order" name="order" class="form-control" placeholder="Order details"></textarea>
                                        <label for="floating-order">Order *</label>
                                    </div>
                                    <span id="orderError" class="text-danger error-message"></span>
                                </div>

                                <!-- Location of Delivery -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <input type="text" id="floating-location" name="location" class="form-control" maxlength="255" placeholder="Location of Delivery">
                                        <label for="floating-location">Location of Delivery *</label>
                                    </div>
                                    <span id="locationError" class="text-danger error-message"></span>
                                </div>

                                <!-- Upload Proof of Payment -->
                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <label for="floating-proof">Upload Proof of Payment *</label>
                                        <input type="file" id="floating-proof" name="proof_of_payment" class="form-control">
                                    </div>
                                    <span id="proofError" class="text-danger error-message"></span>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="send-btn text-center">
                                        <button type="submit" class="btn-md btn-theme btn-4 btn-7" id="submitOrderBtn">Submit Wealthline</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#orderForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            // Serialize form data
            var formData = new FormData($(this)[0]);

            // Disable submit button and show loading state
            $('#submitOrderBtn').attr('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting Wealthline...');

            // Send Ajax request
            $.ajax({
                url: "{{ route('submitOrder') }}", // Replace with your actual order submission route
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

                        // Reset form fields
                        $('#orderForm')[0].reset();

                        $('#submitOrderBtn').attr('disabled', false).html('Submit Order');
                    } else {
                        // Display validation errors
                        $.each(response.errors, function(key, value) {
                            $('#' + key + 'Error').text(value);
                        });

                        $('#submitOrderBtn').attr('disabled', false).html('Submit Order');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle Ajax error
                    console.error(xhr.responseText);
                    $('#submitOrderBtn').attr('disabled', false).html('Submit Order');
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