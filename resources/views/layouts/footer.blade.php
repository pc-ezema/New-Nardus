<footer id="main-footer">
    <div class="content-wrapper">
        <section id="footer-content">
            <div>
                <a href="" id="footer-logo" aria-label="{{config('app.name')}} logo">
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
                <a href="https://www.iff.com/responsibilities/strategy-reporting" target="_blank">FAQs</a>
                <a href="sitemap.html">Contact Us</a>
            </nav>
            <div>
                <p class="footer__section-heading">Stay in touch</p>
                <p class="footer__section-description">
                    Keep up to date on social media
                </p>
                <div id="footer__some-container">
                    <a href="https://www.linkedin.com/showcase/iff-bioscience/" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-9691" role="img">
                            <desc id="desc-9691"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-linkedin"></use>
                        </svg></a><a href="https://www.youtube.com/channel/UC_Vyt7tViA5GP7_-okrbatw" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-6632" role="img">
                            <desc id="desc-6632"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-youtube"></use>
                        </svg></a><a rel="noopener" href="contact/wechat-links.html" target="_blank"><svg id="" class="" aria-labelledby="desc-947" role="img">
                            <desc id="desc-947"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-wechat"></use>
                        </svg></a><a href="https://www.facebook.com/InternationalFlavorsandFragrances" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-9461" role="img">
                            <desc id="desc-9461"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-facebook"></use>
                        </svg></a><a href="https://twitter.com/iff" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-5752" role="img">
                            <desc id="desc-5752"></desc>
                            <use xlink:href="typo3temp/assets/svg/7c37810a546deeab88bf7901f679e1c2.svg#icon-twitter"></use>
                        </svg></a><a href="https://www.instagram.com/iffinc/" target="_blank" rel="noopener noreferrer"><svg id="" class="" aria-labelledby="desc-3765" role="img">
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
