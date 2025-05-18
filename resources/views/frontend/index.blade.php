@extends('layouts.frontend')
@section('page-content')
<!-- Swiper container -->
<section id="banner__container" class="size-standard visible">
    <div class="swiper banner-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide banner">
                <div class="banner__images">
                    <div class="banner__image" style="background-image: url('{{URL::asset('assets/images/essentialOilSlider.png')}}');"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content banner__content_index text-light">
                    <div class="content-wrapper" style="display: flex; align-items: center; flex-direction: column; text-align: center;">
                        <div class="banner__heading h1">Promoting Nigeria indigenous plants <br> and herbs for economic diversification</div>
                        <a href="{{route('aboutUs')}}" class="style-light variant-secondary h5 arrow-link">
                            Learn more
                            <span class="arrow-circle"><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide banner">
                <div class="banner__images">
                    <div class="banner__image" style="background-image: url('{{URL::asset('assets/images/scentSlider.png')}}');"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content banner__content_index text-light">
                    <div class="content-wrapper" style="display: flex; align-items: center; flex-direction: column; text-align: center;">
                    <div class="banner__heading h1">Promoting Nigeria indigenous plants <br> and herbs for economic diversification</div>
                        <a href="{{route('aboutUs')}}" class="style-light variant-secondary h5 arrow-link">
                            Learn more
                            <span class="arrow-circle"><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide banner">
                <div class="banner__images">
                    <div class="banner__image" style="background-image: url('{{URL::asset('assets/images/cosmeticsSlider.png')}}');"></div>
                </div>
                <div class="banner__overlay variant-dark"></div>
                <div class="banner__content banner__content_index text-light">
                    <div class="content-wrapper" style="display: flex; align-items: center; flex-direction: column; text-align: center;">
                    <div class="banner__heading h1">Promoting Nigeria indigenous plants <br> and herbs for economic diversification</div>
                        <a href="{{route('aboutUs')}}" class="style-light variant-secondary h5 arrow-link">
                            Learn more
                            <span class="arrow-circle"><i class="fa fa-long-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<main id="content" class="content-wrapper">
    <section id="field_0">
        <div id="c54" class="rd frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="rd-left-card">
                <h2>Reseach and Development</h2>
                <p>Nardus Limited is presently working on various Nigeria underutilised Indigenous plants for value addition and product development.</p>
                <p>List of plants & crops under research </p>
                <ul>
                    <li>Lemongrass</li>
                    <li>Scent Leaf</li>
                    <li>Sweet Basil</li>
                    <li>Bitter Leaf</li>
                    <li>Moringa Leaf</li>
                    <li>Moringa Leaf</li>
                    <li>Water Hyacinth</li>
                    <li>Ginger</li>
                    <li>Turmeric</li>
                </ul>
            </div>
            <div class="rd-right-image">
                <img src="{{URL::asset('assets/images/r&d.png')}}" alt="Reseach and Development">
            </div>
        </div>
        <div id="c54" class="sustainability frame frame-default ctype-iffcomponents_flexible tx-iff-components-flexible layout-2 image-width-medium images-1">
            <div class="section-image">
                <img src="{{URL::asset('assets/images/Sustainability.png')}}" alt="Sustainability" />
            </div>
            <div class="text-card">
                <h2>Our Sustainabilty </h2>
                <p>At {{config('app.name')}}, sustainability is is at the heart of everything we do. Partnering with over 700 farmers, we cultivate aromatic plant like Lemongrass, Basil, Thyme, Turmeric, and Ginger using eco-friendly practices.</p>
                <p>Our sustainable processing ensures premium essential oils for flavors, fragrances, and cosmetics while supporting natural scent and cosmetic production.</p>
                <p>By prioritizing ethically sourced herbs, innovation, and strategic partnerships, we uphold industry standards and drive a greener future.</p>
            </div>
        </div>
        <div id="c4" class="featured-news frame frame-default ctype-iffcomponents_flexible layout-1 image-width-medium images-1">
            <div class="title-container">
                <h2 class="section-title">Featured News</h2>
            </div>
            <div class="news-grid">
                <!-- News Card 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{URL::asset('assets/images/N-65.png')}}" alt="N-65">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">N65 Fragrance</h3>
                        <p class="news-description">
                            The potency of Nigeria aromatic plants is unlocked in the N65 fragrance.
                            A combination of natural oil extracts from indigenous Nigeria plants, it celebrate the 65th independence anniversary of Nigeria.  "Even in the diversity of the aroma in the different plants, they blend together to give a sweet scent of unity"
                        </p>
                        <!-- <a href="#" class="explore-link">
                            Explore
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a> -->
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{URL::asset('assets/images/Nardus-signs.png')}}" alt="Nardus Signs">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">Nardus Signs $100M Essential Oil Offtake MoU with Best Engineering Technology</h3>
                        <p class="news-description">
                            Nardus Limited has partnered with Best Engineering Technology of Hyderabad, India, to offtake 500+ tons of essential oils from Nigeria. Beyond purchasing, Best Engineering Technology will provide technical expertise and training.
                        </p>
                        <p class="news-description">
                            The project covers 3,000 hectares across Ogun, Oyo, and Kogi states, engaging 1,250 youths and women. Key crops include lemongrass, basil, thyme, ginger, and turmeric, with operations underway at Nardus’ processing hubs in Abeokuta, Tede, and Lokoja.
                        </p>
                        <p class="news-description">
                            This agreement strengthens Nigeria’s non-oil exports while creating sustainable economic opportunities.
                        </p>
                        <!-- <a href="#" class="explore-link">
                            Explore
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="display-banner">
    <div class="display-banner-overlay">
        <h1 class="display-banner-title">About {{config('app.name')}}</h1>
        <p class="display-banner-subtitle">Nardus is a leading provider of premium essential oils widely <br>utilized in the flavor, fragrance, and cosmetic industries.</p>
        <a href="{{route('aboutUs')}}" class="display-cta-button">Learn More</a>
    </div>
</div>
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