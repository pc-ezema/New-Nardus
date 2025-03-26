<footer id="main-footer">
    <div class="content-wrapper">
        <section id="footer-content">
            <div>
                <a href="{{route('index')}}" id="footer-logo" aria-label="{{config('app.name')}} logo">
                    <img src="{{ URL::asset('assets/images/nardus-white.png') }}" style="max-width: 200px;" />
                </a>
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
                    <a href="https://www.linkedin.com/company/nardus-scents-and-oils/posts/?feedView=all" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>

                <p class="footer__section-heading" style="margin-top: .5rem;">Office Address</p>
                <div id="footer__some-container" style="margin-top: -1rem;">
                    {{config('app.address')}}
                </div>

                <p class="footer__section-heading" style="margin-top: .5rem;">Phone Number</p>
                <div id="footer__some-container" style="margin-top: -1rem;">
                    {{config('app.phone1')}}
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
