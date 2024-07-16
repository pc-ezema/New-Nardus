<header id="main-header">
    <div class="template-wrapper">
        <a href="{{route('index')}}" id="main-logo" aria-label="{{config('app.name')}} logo">
            <img src="{{ URL::asset('assets/images/nardus.png') }}" style="max-width: 100px; margin-top: 1rem;" />
        </a>
        <nav id="main-navigation">
            <ul class="top">
                <li class="has-sub">
                    <a href="{{route('index')}}" class="{{ (request()->is('/*')) ? 'active' : '' }}">Home</a>
                    <div class="sub-menu-container">
                        <div class="content-wrapper">
                            <ul class="level-2">
                                <div class="mobile-navigation-back">
                                    <ul>
                                        <li style="margin-bottom: 1rem;">
                                            <a href="{{route('aboutUs')}}" class="{{ (request()->is('/about')) ? 'active' : '' }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contactUs')}}" class="{{ (request()->is('/contact-us')) ? 'active' : '' }}">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <li>
                                    <a href="{{route('aboutUs')}}" class="{{ (request()->is('/about')) ? 'active' : '' }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('contactUs')}}" class="{{ (request()->is('/contact-us')) ? 'active' : '' }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="">
                    <a href="{{route('scents')}}" class="{{ (request()->is('scents')) ? 'active' : '' }}">Scents</a>
                </li>
                <li>
                    <a href="{{route('cosmetics')}}" class="{{ (request()->is('cosmetics')) ? 'active' : '' }}">Cosmetics</a>
                </li>
                <li>
                    <a href="{{route('essentialOil')}}" class="{{ (request()->is('essential-oil')) ? 'active' : '' }}">Essential Oil</a>
                </li>
                <li>
                    <a href="{{route('health')}}" class="{{ (request()->is('health')) ? 'active' : '' }}">Health</a>
                </li>
                <li>
                    <a href="https://shop.nardus.ng/shop/" target="_blank">Shop</a>
                </li>
            </ul>
        </nav>
        <nav class="navigation" id="secondary-navigation text-center">
            <a href="{{route('training')}}" class="{{ (request()->is('training')) ? 'active' : '' }}">Training</a>
            <a href="{{route('faqs')}}" class="{{ (request()->is('faqs')) ? 'active' : '' }}">FAQs</a>
        </nav>
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
</header>
