<header id="main-header">
    <div class="template-wrapper">
        <a href="{{route('index')}}" id="main-logo" aria-label="{{config('app.name')}} logo">
            <img id="logo"
            src="{{ URL::asset('assets/images/nardus-white.png') }}"
            data-light="{{ URL::asset('assets/images/nardus-white.png') }}"
            data-dark="{{ URL::asset('assets/images/nardus.png') }}"
            style="max-width: 100px; margin-top: 1rem;" />
        </a>
        <nav id="main-navigation">
            <ul class="top">
                <li>
                    <a href="{{route('index')}}" class="main-header-link {{ (request()->is('/*')) ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{route('aboutUs')}}" class="main-header-link {{ (request()->is('about')) ? 'active' : '' }}">About Us</a>
                </li>
                <li>
                    <a href="{{route('researchDevelopment')}}" class="main-header-link {{ (request()->is('research-and-development')) ? 'active' : '' }}">Research and Development</a>
                </li>
                <li>
                    <a href="{{route('contactUs')}}" class="main-header-link {{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a>
                </li>
                <li>
                    <a href="{{route('faqs')}}" class="main-header-link {{ (request()->is('faqs')) ? 'active' : '' }}">FAQs</a>
                </li>
                <!-- <li>
                    <a href="{{route('health')}}" class="main-header-link {{ (request()->is('health')) ? 'active' : '' }}">Health</a>
                </li> -->
                <li>
                    <a href="https://shop.nardus.ng/shop/" target="_blank" class="main-header-link">Shop</a>
                </li>
            </ul>
        </nav>
        <!-- <nav class="navigation" id="secondary-navigation text-center">
            <a href="{{route('wealthline')}}" class="main-header-link {{ (request()->is('wealthline')) ? 'active' : '' }}">Wealthline</a>
        </nav> -->
        <div class="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
    </div>
</header>