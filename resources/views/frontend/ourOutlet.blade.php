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
                        <div class="banner__heading h1">Our Outlets</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="content" class="content-wrapper">
    <section id="field_0">
        <div class="container">
            <div id="c108" class="frame frame-default ctype-tctable_plugin tctable percentage">
                <h1>Retail Stores</h1>
                <div class="overflow-x">
                    <table class="h-1 ts- ro-4 co-2 z-0 theme-0" style="width: 100%;">
                        <!-- <caption> </caption> -->
                        <thead>
                            <tr class="r first">
                                <th class="c last" colspan="2">
                                    <p style="padding-left: 1rem;">Lagos State Jendol Outlets</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="r odd">
                                <td class="c first">
                                    <p><strong>Egbeda</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>60 Egbeda-Idimu Road, Egbeda Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r even">
                                <td class="c first">
                                    <p><strong>Abule-Egba</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>241, Lagos Abeokuta Express Way, U-Turn Bus Stop, Abule-Egba, Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r odd">
                                <td class="c first">
                                    <p><strong>Isheri</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>Igando Lasu Isheri Road, Opposite Diamond Estate, Home Foundation Bus-stop, Isheri, Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r even">
                                <td class="c first">
                                    <p><strong>Isolo</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>10 Egbe Road, Okeafa, Ejigbo, Isolo, Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r odd">
                                <td class="c first">
                                    <p><strong>Ikorodu</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>KM 1, Opposite Kasolori Estate, Itokin Road, Ikorodu Lagos.</p>
                                    <p>91/93 Ikorodu-Shagamu Road, by Fish-Farm, Odogunyan, Ikorodu Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r even">
                                <td class="c first">
                                    <p><strong>IGANDO</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>KM 5 Lasu Igando Road, College Bus Stop, Igando, Lagos.</p>
                                </td>
                            </tr>
                            <tr class="r odd last">
                                <td class="c first">
                                    <p><strong>Alakuko</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>790 Lagos Abeokuta Express Way, By Alakuko Magistrate court, Alakuko Lagos.</p>
                                    <p>205 Abulo Egun Bus Stop Ipaja Road Opp. first royal petrol station IPAJA at GATE.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="h-1 ts- ro-4 co-2 z-0 theme-0" style="width: 100%;">
                        <!-- <caption> </caption> -->
                        <thead>
                            <tr class="r first">
                                <th class="c last" colspan="2">
                                    <p style="padding-left: 1rem;">Ogun State Jendol Outlets</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="r odd">
                                <td class="c first">
                                    <p><strong>Ojuore Branch</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>Km 122, Idiroko Road, Beside GT Bank Ojuore Otta, Ogun State.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="h-1 ts- ro-4 co-2 z-0 theme-0" style="width: 100%;">
                        <!-- <caption> </caption> -->
                        <thead>
                            <tr class="r first">
                                <th class="c last" colspan="2">
                                    <p style="padding-left: 1rem;">Home Affairs Outlets in Lagos</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="r odd">
                                <td class="c first">
                                    <p><strong>Ijaiye Ogba, lagos.</strong></p>
                                </td>
                                <td class="c last" colspan="1">
                                    <p>22 Diya Street, Gbagada, Lagos.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
