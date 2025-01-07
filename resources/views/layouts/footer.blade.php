<footer id="main-footer">
    <div class="content-wrapper">
        <section id="footer-content">
            <div>
                <a href="{{route('index')}}" id="footer-logo" aria-label="{{config('app.name')}} logo">
                    <img src="{{ URL::asset('assets/images/nardus-white.png') }}" style="max-width: 200px;" />
                </a>
                <p>Promoting Nigeria indigenous plants and herbs for economic diversification.</p>
            </div>
            <nav>
                <p class="footer__section-heading">Quick links</p>
                <a href="{{route('index')}}">Home</a>
                <a href="{{route('scents')}}">Scent</a>
                <a href="{{route('cosmetics')}}">Cosmetics</a>
                <a href="{{route('essentialOil')}}">Essential Oil</a>
                <a href="{{route('health')}}">Health</a>
            </nav>
            <nav id="footer-other">
                <a href="{{route('aboutUs')}}">About Us</a>
                <a href="{{route('faqs')}}">FAQs</a>
                <a href="{{route('training')}}">Training</a>
                <a href="{{route('contactUs')}}">Contact Us</a>
                <a href="https://shop.nardus.ng/shop/">Shop</a>
            </nav>
            <div>
                <p class="footer__section-heading">Stay in touch</p>
                <div id="footer__some-container">
                    <a href="{{$whatsapp}}" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <a href="{{$facebook}}" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a rel="noopener" href="{{$twitter}}" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="{{$instagram}}" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </section>
        <p id="footer-copyright">
            Copyright <script>
                    document.write(new Date().getFullYear())
                </script> © {{config('app.name')}}
        </p>
    </div>
</footer>
