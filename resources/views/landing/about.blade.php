@extends('landing.layout.app')
@section('body')
    <!-- Section: About -->
    <section>
        <div class="container pb-0">
            <section class="inner-header divider parallax layer-overlay overlay-dark-5"
                data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}"
                style="background-image: url(&quot;images/bg/bg6.jpg&quot;); background-position: 50% 89px;">
                <div class="container pt-90 pb-50">
                    <!-- Section Content -->
                    <div class="section-content pt-100">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title text-white">About</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
