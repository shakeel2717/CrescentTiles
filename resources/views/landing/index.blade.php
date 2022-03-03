@extends('landing.layout.app')
@section('body')
    @include('inc.slider')
    <!-- Section: About -->
    <section>
        <div class="container pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-80px"
                        data-wow-duration="1s" data-wow-delay="0.1s">
                        <img class="img-fullwidth" src="{{ asset('assets/images/stock/full_car_in.jpg') }}" alt="">
                        <div class="bg-lighter border-1px p-20 pt-0 mb-sm-180">
                            <h4 class="font-weight-700 mt-20">Experienced Service</h4>
                            <p>{!! env('APP_DESC') !!}</p>
                            <a href="{{ route('contact') }}" class="btn btn-sm btn-theme-colored">Contact us</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInUp" data-margin-top="-80px"
                        data-wow-duration="1s" data-wow-delay="0.1s">
                        <img class="img-fullwidth" src="{{ asset('assets/images/stock/clean_tire.jpg') }}" alt="">
                        <div class="bg-lighter border-1px p-20 pt-0 mb-sm-180">
                            <h4 class="font-weight-700 mt-20">Wheel & Tire Cleaning</h4>
                            <p>{!! env('APP_DESC') !!}</p>
                            <a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                class="btn btn-sm btn-theme-colored">Contact Agent</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInUp" data-margin-top="-80px"
                        data-wow-duration="1s" data-wow-delay="0.1s">
                        <img class="img-fullwidth" src="{{ asset('assets/images/stock/black_tire.jpg') }}" alt="">
                        <div class="bg-lighter border-1px p-20 pt-0">
                            <h4 class="font-weight-700 mt-20">Car Body Wash</h4>
                            <p>{!! env('APP_DESC') !!}</p>
                            <a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                class="btn btn-sm btn-theme-colored">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: About -->
    <section class="">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="text-uppercase mt-0 font-weight-600">Welcome To <span
                                class="text-theme-color-2">{{ env('APP_NAME') }}</span><br> in Abu Dubai</h2>
                        <h4 class="text-gray-dimgray font-weight-400"><em>We are using non-abrasive and non-toxic natural
                                washing chemicals. We have in-house developed and manufactured cleaning products.</em>
                        </h4>
                        <p>Car wash without moving the car from its parking spot. Have your perfectly cleaned, while you
                            leave your car for shopping or other activities. Our washing cart do not leave any dirt or water
                            on the floor.</p>
                        <p>Our crew members are all trained and skilled and fully equipped with equipment and supplies
                            needed that we can deliver the best results.</p>
                        <a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                            class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Book
                            now</a>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <img class="img-fullwidth" src="{{ asset('assets/images/stock/hero.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-5 pr-sm-15 mb-sm-10">
                                <img class="img-fullwidth" src="{{ asset('assets/images/stock/left_side_mirror.jpg') }}"
                                    alt="">
                            </div>
                            <div class="col-md-6 pl-5 pl-sm-15">
                                <img class="img-fullwidth" src="{{ asset('assets/images/stock/tire_air_clean.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: About -->
    <section class="">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <img class="img-fullwidth" src="{{ asset('assets/images/stock/front_shower.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h2 class="text-uppercase mt-0 font-weight-600">MANUAL <span class="text-theme-color-2">and
                                Complete</span><br> CAR WASH Service</h2>
                        </h4>
                        <p>Car wash without moving the car from its parking spot. Have your car perfectly cleaned, while you
                            leave for shopping or other activities. Our washing carts do not leave any dirt or water on the
                            floor. Our washing method is Eco-friendly, since our requirement for water is only 1 liter for a
                            full wash. We are saving around 50 liters of water in each car wash compared to the traditional
                            car wash. Our crew members are all trained and skilled and fully equipped with all the supplies
                            needed to deliver the best results..</p>
                        <a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                            class="btn btn-flat btn-theme-colored text-uppercase mt-20 mb-sm-30 border-left-theme-color-2-4px">Book
                            now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: Practice Areas -->
    <section id="services" class="bg-lighter">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-uppercase mb-0">Best Carfix &amp; Repair Template</p>
                        <div class="title-icon">
                            <i class="flaticon-carrepair-tool-6 font-48"></i>
                        </div>
                        <h2 class="text-uppercase text-theme-colored title line-bottom">Our <span
                                class="text-theme-color-2 font-weight-400">Services</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Car Polish</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Car Wash</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Mobile car wash</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Car Ceramic and Coating</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Hand Waxing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Window Tinting </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Interior Cleaning </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Engine Oil Change </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="icon-box p-10 pl-20 pr-15 mb-20 bg-white">
                            <a class="mb-0 line-bottom" href="#">
                                <i class="flaticon-carrepair-car-washing-machine text-theme-colored"></i>
                            </a>
                            <h3 class="icon-box-title mt-10 mb-10 text-uppercase">Cooling Paper </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui
                                inventore, cumque!<a href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}"
                                    class="btn-read-more text-theme-colored"><br> Contact now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-9"
        data-bg-img="{{ asset('assets/images/bg/bg2.jpg') }}" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-car mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="754"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Vehicles Serviced</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-users mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="675"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Happy Clients</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-like2 mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="1248"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">People Likes</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
                        <h2 data-animation-duration="2000" data-value="12"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h5 class="text-white text-uppercase">Awards Won</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-uppercase mb-0">Best Carfix &amp; Repair Template</p>
                        <div class="title-icon">
                            <i class="flaticon-carrepair-repair-1 font-48"></i>
                        </div>
                        <h2 class="text-uppercase text-theme-colored title line-bottom">Our Work<span
                                class="text-theme-color-2 font-weight-400"> Gllery</span></h2>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div id="grid" class="gallery-isotope grid-4 gutter clearfix">

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/black_tire.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/black_tire.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/clean_back_mirror.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/clean_back_mirror.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/clean_front_mirror.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/clean_front_mirror.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/clean_headlight.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/clean_headlight.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/clean_left_mirror.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/clean_left_mirror.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/clean_tire.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/clean_tire.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/engine_clean.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/engine_clean.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/front_shower.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/front_shower.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/full_car_in.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/full_car_in.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/headlight_wash.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/headlight_wash.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/inside_clean.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/inside_clean.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/left_side_mirror.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/left_side_mirror.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/seat_clean.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/seat_clean.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt=""
                                            src="{{ asset('assets/images/stock/tire_air_clean.jpg') }}">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto"
                                                        href="{{ asset('assets/images/stock/tire_air_clean.jpg') }}"><i
                                                            class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <img alt="" src="{{ asset('assets/images/stock/hero2.jpg') }}" class="img-fullwidth">
                        <h3 class="line-bottom-no-border">Car Repair &amp; Service Center</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et magni temporibus voluptates. Iure
                            quam laboriosam ullam omnis nulla deleniti, repellendus sequi reiciendis quas voluptatibus
                            consectetur alias aspernatur deserunt veritatis.</p>
                        <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="page-about-style1.html">Know
                            More →</a>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-transport-6 font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Schedule Services</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni temporibus voluptates adipisicing..</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-car-washing-machine font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Best Car Services</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni temporibus voluptates adipisicing..</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-car-on-a-frame font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Complete Analysis</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni temporibus voluptates adipisicing..</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="icon-box iconbox-theme-colored p-0 mb-30">
                                    <a href="#" class="icon icon-sm mb-0 mr-10 pull-left flip sm-pull-none mb-sm-15">
                                        <i class="flaticon-carrepair-transport-4 font-42 text-theme-colored"></i>
                                    </a>
                                    <h4 class="icon-box-title m-0 mb-5">Security inspection</h4>
                                    <p class="text-gray mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
                                        magni temporibus voluptates adipisicing..</p>
                                    <a class="text-theme-colored font-13" href="#">Read More →</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 sm-text-center mb-sm-30">
                                <a class="image-popup-vertical-fit" title="Title Here 1"
                                    href="{{ asset('assets/images/stock/clean_tire.jpg') }}"><img
                                        class="img-fullwidth maxwidth500"
                                        src="{{ asset('assets/images/stock/clean_tire.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-xs-4 sm-text-center mb-sm-30">
                                <a class="image-popup-vertical-fit" title="Title Here 1"
                                    href="{{ asset('assets/images/stock/headlight_wash.jpg') }}"><img
                                        class="img-fullwidth maxwidth500"
                                        src="{{ asset('assets/images/stock/headlight_wash.jpg') }}" alt=""></a>
                            </div>
                            <div class="col-xs-4 sm-text-center">
                                <a class="image-popup-vertical-fit" title="Title Here 1"
                                    href="{{ asset('assets/images/about/lg1.jpg') }}"><img
                                        class="img-fullwidth maxwidth500"
                                        src="{{ asset('assets/images/about/lg1.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Reservation Form -->
    <section id="reservation" class="bg-lighter">
        <div class="container">
            <div class="row align-item-end">
                <div class="col-md-6">
                    <div class="p-40 pt-60 pl-0">
                        <!-- Reservation Form Start-->
                        <form class="reservation-form" method="post" action="{{ route('contactForm') }}">
                            @csrf
                            <h3 class="mt-0 line-bottom text-theme-colored mb-40">Request a Call Back<span
                                    class="text-theme-color-2 font-weight-600"><br> We will Call you!</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <input placeholder="Enter Name" type="text" id="name" name="name" required=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <div class="styled-select">
                                            <select id="car_select" name="car_select" class="form-control" required="">
                                                <option value="">- Select Your Vehicle Model -</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="Jeep">Jeep</option>
                                                <option value="Audi">Audi</option>
                                                <option value="Truck">Truck</option>
                                                <option value="Land Rover">Land Rover</option>
                                                <option value="Lexus">Lexus</option>
                                                <option value="Mazda">Mazda</option>
                                                <option value="Mercedes - Benz">Mercedes - Benz</option>
                                                <option value="Nissan">Nissan</option>
                                                <option value="Mitsubishi">Mitsubishi</option>
                                                <option value="Saab">Saab</option>
                                                <option value="Renault">Renault</option>
                                                <option value="Mercury">Mercury</option>
                                                <option value="Pontiac Porsche">Pontiac Porsche</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <input placeholder="Email" type="text" id="email" name="email"
                                            class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-30">
                                        <input placeholder="Phone" type="text" id="phone" name="phone"
                                            class="form-control" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group mb-0 mt-0">
                                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button type="submit"
                                            class="btn btn-colored btn-theme-colored btn-lg btn-flat border-left-theme-color-2-4px"
                                            data-loading-text="Please wait...">Call me Back</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Reservation Form End-->
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/stock/bonut.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-theme-colored">
        <div class="container pt-0 pb-20">
            <div class="row">
                <div class="call-to-action">
                    <div class="col-md-6">
                        <h3 class="mt-5 mb-5 text-white vertical-align-middle"><i
                                class="pe-7s-mail mr-10 font-48 vertical-align-middle"></i> SUBSCRIBE TO OUR
                            NEWSLETTER</h3>
                    </div>
                    <div class="col-md-6">
                        <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                    class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL"
                                    style="height: 45px;">
                                <span class="input-group-btn">
                                    <button data-height="45px" class="btn bg-theme-color-2 text-white btn-xs m-0 font-14"
                                        type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
