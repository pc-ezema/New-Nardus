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
                                            <a href="{{route('faqs')}}" class="{{ (request()->is('/faqs')) ? 'active' : '' }}">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                                <li>
                                    <a href="{{route('aboutUs')}}" class="{{ (request()->is('/about')) ? 'active' : '' }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('faqs')}}" class="{{ (request()->is('/faqs')) ? 'active' : '' }}">FAQs</a>
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
                    <a href="{{route('essential_oil')}}" class="{{ (request()->is('essential-oil')) ? 'active' : '' }}">Essential Oil</a>
                </li>
                <li>
                    <a href="">Shop</a>
                </li>
            </ul>
        </nav>
        <nav id="secondary-navigation text-center">
            <a href="{{route('contactUs')}}" style="color: #222d35; text-decoration: none;" class="{{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a>
        </nav>
        <div class="burger"><span></span><span></span><span></span></div>
    </div>
</header>
