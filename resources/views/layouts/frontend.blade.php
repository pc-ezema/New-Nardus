<!DOCTYPE html>
<html dir="ltr" lang="en-us">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{URL::asset('assets/images/nardus.png')}}" type="image/x-icon" />
    <title>{{config('app.name')}}</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Experience the rich potency value of our natural product, derived through the most ethical extraction and purification process to give a recall moment the world is yet to discover." />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, viewport-fit=cover" />
    <link href="{{URL::asset('assets/css/0b15710bfa8b2f9a6533513916cb8935.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/ee5ba5d96b4fd4a7fdf4a12912bd8058.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/91a47210df20c1b16925d7fb16b81da6.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/23fa701911f04d2f84d6a23f07aaf2f8.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/4af65796c4cb70c36c537f4c8660471e.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/6ac4fe03967354c5649955059a617443.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/5dad9f7dae89735d617590e6c4eec918.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/4593a9c760c038605c1f6d63512dc492.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/69d4a483dabc31fc7d437b708405ba72.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/9783132fb9ca3e1a933dadf0494e9319.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/d1d6e022ef4fd89deee4389d36598865.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/fe2ef2f36d66dfe24c4e34b3af952e06.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/90c3ef0b4c043231079f3ea2698bb16f.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/8aba1719edceb33b6d3811a6f59c8fe6.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/0261d7d168375358a0566a0ab317fedb.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/02400b0c2fc39346077fddb32d1e3190.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/4f2186cf5ee8be72b320f8d68df2dbdf.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/2727b62f2ed285910e8dc3623c8812db.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/5a10ddb76aa33478daa0a772b94a5fca.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/88f75f23ed911c349f072debc9c9abe9.css')}}" rel="stylesheet" />
    <script integrity="sha384-16t9ZHYALapzurTezumKK2l5KKm5loTK4iAt3Nv8Nu3ah5CKfT3dl6I4FZ35pqkM" crossorigin="anonymous" src="{{URL::asset('assets/js/8635fc5f85459296e05cfb0f053d2d26.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script>
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");
        var trident = ua.indexOf("Trident/index.html");
        var edge = ua.indexOf("Edg/index.html");
        var legazy = false;
        var ieVersion = parseInt("11");
        var iosVersion = parseInt("12");
        if (msie > 0) {
            if (ieVersion == 10) {
                legazy = true;
            } else if (parseInt(ua.indexOf("MSIE 9.0;")) > 0 && ieVersion == 9) {
                legazy = true;
            }
        } else if (trident > 0 && ieVersion == 11) {
            legazy = true;
        }
        if (/iP(hone|od|ad)/.test(navigator.platform)) {
            var v = navigator.appVersion.match(/OS (\d+)_(\d+)_?(\d+)?/);
            if (parseInt(v[1], 10) <= iosVersion) {
                legazy = true;
            }
        }
        if (legazy) {
            document.getElementsByTagName("html")[0].className += " legacy";
        }
    </script>
</head>

<body class="uid_1 pid_0 rid_1 level_0 template-one-column frontpage nlm-0 nbc-0 doktype-1 with-banners" data-page-uid="1">
    <!-- Header -->
    @includeIf('layouts.header')
    <!-- Header Ends -->
    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->
    <!-- Footer -->
    @yield('footer')
    <!-- Footer Ends -->
    <div id="consent_blackbar"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{URL::asset('assets/js/ddfcfae1ad4b1f40c07fff380342627664c8.js?1671523372')}}" integrity="sha384-WjBId8JVL+HZfGoIj5hueqFMzcFedLLkONvAqiTxrFPoU3cwR0ZtrbvHTJNnfgHF" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/6256bf38b3d857c20c655e668e95a327328e.js?1671535555')}}" integrity="sha384-ADy0Wqe9a7RrKRftkSZBFVTT+RagNF/3UJfG+L2W0tEXkyjO09JxkZ3ll+gh03Ye" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/1a1408c850ced23555276cd5e2145ac064c8.js?1671523372')}}" integrity="sha384-atSRyGt88ZHityR3w08Q9KEdcd1agFd1fl5YTIpXy6pV/kak8ipxTdvKqkWC1wjy" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/d6b4d8c45b72c8f60bb8a97152e1eb1e64c8.js?1671523372')}}" integrity="sha384-FtEAu024jfwfrA3eSUPviL5jkkTpp/ErohQelrjJbue4PqcSbjAv5Bc8o2HdMtE/" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/2680372572d9709f992c86065785d52764c8.js?1671523372')}}" integrity="sha384-7d6w7Duzc6jufO9yDUsnZrRbVTC39/ECiYgiMeWh1nsiKCc0FR7Mf2aqnmxfH1nq" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/d426445c70fe870b2b636a912c722ba964c8.js?1671523372')}}" integrity="sha384-SmV+0Xa0AZshX7Rtc77vechN1qNCMWK0kk6brda/G6hYvultMp+I+nQhGQREZ7C8" crossorigin="anonymous"></script>
    <script src="{{URL::asset('assets/js/d96afb976d850369df991ab56ce8fdf764c8.js?1671523372')}}" integrity="sha384-0ZdzWajWHB/DGVE68eaqrwKcKQ6/pED5Ui94Xm9NIy8iCBrW/WF2dasvduZdwsFt" crossorigin="anonymous"></script>
    <script integrity="sha384-K7bi88tbCwBMu+xJ1oLJ44wuGdxmTxLzqAHZr4oIEK6wrx+tCGf24EfU9z9ld4QY" crossorigin="anonymous" src="{{URL::asset('assets/js/e19dd98212fd0e9cc0386a61a7a8abd5.js')}}"></script>
    <script integrity="sha384-n/mWlcmD3A8hj3otHvYHtLg0y7EXKB46oY3GuZ0AKEROBWTJ8Eyzw2e9R9b2BFZA" crossorigin="anonymous" src="{{URL::asset('assets/js/df99c4c3034c1045bc9895dbeb114bcc.js')}}"></script>
    <script integrity="sha384-/TdOTuCzTyLg6t8jhLqdUw+cK24jK7kDc/IcxZXrfcZ/GcJNADAWCef3cgzmESVo" crossorigin="anonymous" src="{{URL::asset('assets/js/025216b233d30e4700d85b571ae26cd0.js')}}"></script>
    <script integrity="sha384-rLMIPBqIPaChiT4+6j86r1zZ0ARyojXOXPtG/J1KV+eRDv9M+Y/kqxoeVbP8FLuB" crossorigin="anonymous" src="{{URL::asset('assets/js/d50112d1cb8886b5dad5eab100e90a31.js')}}"></script>
    <script integrity="sha384-RdMeEPC3WVOoI7EOXoIUVYZcnoVctGJ2dX45Cz1wL1BSpXOpQqU9qrRKWCCfFeqZ" crossorigin="anonymous" src="{{URL::asset('assets/js/c334abe35b3e57361906c98861ffa491.js')}}"></script>
    <script integrity="sha384-HT68Wy4YFzeUPrV4cRSl08+rvsMfShzlWTq99gBpvN2unV5OTLN2JKVmoxQ6sB1z" crossorigin="anonymous" src="{{URL::asset('assets/js/6656bf8aef0cfd3d87023eed993da5a7.js')}}"></script>
    <script integrity="sha384-f9KHMgEqf5LzyV5Ropm3NjE29/x/BIO3FSJrHf8l2fllKchvDxq+SSu2/re6wdnt" crossorigin="anonymous" src="{{URL::asset('assets/js/1b62c09ebbfb34d5bfa0aae288c4762c.js')}}"></script>
    <script integrity="sha384-9+v1xRxfTneN6Tvr+/tcPz1Kd87QNSZPP4yQD3pQXZne+7inE1PMEMj1NdF9Hidj" crossorigin="anonymous" src="{{URL::asset('assets/js/4ae451a0302b1059cfff669b6e11aace.js')}}"></script>
    <script integrity="sha384-VuOwFzI//Oldv+QAE4hVr77E4t+HSt9p8McwIG74Fe1obkf+NAK3ODGubuERxo1q" crossorigin="anonymous" src="{{URL::asset('assets/js/40553c60e1cd1e4d8dfa5e7a32c412f1.js')}}"></script>
    <script integrity="sha384-n+WtPwescrks0W28iIR6pwgdaS1BrxIAlysyhnQIrdl0E+G8eU3UGj5/UdrX4cbg" crossorigin="anonymous" src="{{URL::asset('assets/js/c30665b3374d5ab7e66d7dcb83f4c47e.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let scrollArrow = document.getElementById("scrollArrow");
            let header = document.getElementById("main-header");
            let headerLinks = document.querySelectorAll(".main-header-link");
            let headerLinkActive = document.querySelectorAll(".active");
            let logo = document.getElementById("logo");
            let burgerLines = document.querySelectorAll(".burger-line");

            // Check if elements exist to avoid errors
            if (!header || !logo) return;

            let lightLogo = logo.getAttribute("data-light");
            let darkLogo = logo.getAttribute("data-dark");

            // Scroll down event
            if (scrollArrow) {
                scrollArrow.addEventListener("click", function() {
                    window.scrollBy({
                        top: window.innerHeight,
                        behavior: "smooth"
                    });
                });
            }

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    if (scrollArrow) {
                        scrollArrow.style.opacity = "0";
                        scrollArrow.style.pointerEvents = "none";
                    }
                    header.classList.add("scrolled");
                    headerLinks.forEach(link => link.classList.add("scrolled"));
                    headerLinkActive.forEach(link => link.classList.add("scrolled"));
                    logo.src = darkLogo;
                    burgerLines.forEach(line => line.classList.add("scrolled"));
                } else {
                    if (scrollArrow) {
                        scrollArrow.style.opacity = "1";
                        scrollArrow.style.pointerEvents = "auto";
                    }
                    header.classList.remove("scrolled");
                    headerLinks.forEach(link => link.classList.remove("scrolled"));
                    headerLinkActive.forEach(link => link.classList.remove("scrolled"));
                    logo.src = lightLogo;
                    burgerLines.forEach(line => line.classList.remove("scrolled"));
                }
            });
        });

        var swiper = new Swiper('.banner-swiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <!-- Swiper JS -->
</body>

</html>