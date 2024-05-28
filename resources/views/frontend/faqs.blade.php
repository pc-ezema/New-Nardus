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
</section>
<main id="content" class="content-wrapper">
    <div class="container">
        <div class="main-title">
            <h1></h1>
            <p>Answers to Your Questions: Frequently Asked Questions (FAQs)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mb-30">
            <div class="faq-info">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                How do I make a reservation at your hotel?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Making a reservation at our hotel is easy! You can book a room directly through our website by selecting your desired check-in and check-out dates, choosing the room type that suits your needs, and completing the booking process. Alternatively, you can contact our reservations team via phone or email, and they will be happy to assist you in making a reservation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                What types of rooms does your hotel offer?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>We offer a range of room types to cater to different preferences and needs. Our options include single rooms, mini suites rooms, and double rooms. Each room type is designed with comfort and convenience in mind, featuring modern amenities and stylish decor to ensure a pleasant stay for our guests.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Can I request additional amenities or services during my stay?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Absolutely! We strive to accommodate our guests' requests to make their stay as comfortable as possible. You can request additional amenities such as extra pillows, toiletries, or even specific room preferences like a higher floor or a room with a view. Our friendly staff is available 24/7 to assist you with any special requests or services you may need during your stay.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                What are the check-in and check-out times at your hotel?
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Our standard check-in time is at 3:00 PM, and check-out time is at 12:00 PM. However, we understand that travel plans may vary, so we offer flexibility whenever possible. If you need to adjust your check-in or check-out times, please let us know in advance, and we will do our best to accommodate your request based on availability.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Do you have on-site dining options available?
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Yes, we have on-site dining options for our guests to enjoy delicious meals throughout their stay. Our hotel restaurant offers a diverse menu featuring local and international cuisines, along with a cozy ambiance perfect for dining with family or friends. Additionally, we have a bar/lounge area where you can relax and unwind with a selection of beverages and snacks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                How can I provide feedback or share my experience with your hotel?
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>We value feedback from our guests as it helps us improve and enhance our services. You can provide feedback by filling out a guest satisfaction survey during your stay or by contacting our guest relations team directly via email or phone. Your feedback is important to us, and we appreciate you taking the time to share your experience with us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                What safety measures do you have in place for guest security?
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>The safety and security of our guests are paramount. We have implemented comprehensive safety measures throughout our hotel, including 24-hour security surveillance, key card access to rooms and elevators, fire safety systems, and trained staff to respond to any emergencies promptly. Additionally, we follow strict cleaning and sanitation protocols to ensure a hygienic environment for our guests.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
