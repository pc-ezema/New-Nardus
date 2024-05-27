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
                <a href="{{route('essential_oil')}}">Essential Oil</a>
            </nav>
            <nav id="footer-other">
                <a href="{{route('aboutUs')}}">About Us</a>
                <a href="{{route('faqs')}}">FAQs</a>
                <a href="{{route('ourOutlet')}}">Our Outlets</a>
                <a href="{{route('contactUs')}}">Contact Us</a>
            </nav>
            <div>
                <p class="footer__section-heading">Stay in touch</p>
                <p class="footer__section-description">
                    Keep up to date on social media
                </p>
                <div id="footer__some-container">
                    <a href="#" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-9691" role="img">
                            <desc id="desc-9691"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-linkedin"></use>
                        </svg></a><a href="" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-6632" role="img">
                            <desc id="desc-6632"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-youtube"></use>
                        </svg></a><a rel="noopener" href="#" target="_blank"><svg id="" class="" aria-labelledby="desc-947" role="img">
                            <desc id="desc-947"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-wechat"></use>
                        </svg></a><a href="#" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-9461" role="img">
                            <desc id="desc-9461"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-facebook"></use>
                        </svg></a><a href="#" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-5752" role="img">
                            <desc id="desc-5752"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-twitter"></use>
                        </svg></a><a href="#" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-3765" role="img">
                            <desc id="desc-3765"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-instagram"></use>
                        </svg></a>
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
