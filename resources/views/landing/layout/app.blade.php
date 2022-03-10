<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Loxicat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Loxicat Construction & Industrial HTML5 Template">
    <meta name="keywords"
        content="construction, industry, industrial, factory, business, material,  mechanical,  engineering, gas, chemical" />
    <title>Loxicat || Construction & Industrial HTML5 Template</title>
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    {{-- <div class="preloader"></div> --}}
    <header class="header-style-two">
        <div class="header-wrapper">
            <div class="header-top-area bg-secondary-color d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 header-top-left-part">
                            <span class="address"><i class="webexflaticon webex-flaticon-placeholder-1"></i>
                                {{ env('APP_ADDRESS') }}</span>
                            <span class="phone"><i class="webexflaticon webex-flaticon-send"></i>
                                {{ env('APP_EMAIL') }}</span>
                        </div>
                        <div class="col-lg-6 header-top-right-part text-right">
                            <ul class="social-links">
                                @include('inc.social')
                            </ul>
                            <div class="language">
                                <a class="" href="#"><i class="fa fa-phone"></i>
                                    {{ env('APP_PHONE') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between">
                            <a class="navbar-brand logo" href="index.html">
                                <img id="logo-image" class="img-center"
                                    src="{{ asset('assets/images/brand/logo-dark.svg') }}" alt="">
                            </a>
                            <div class="topbar-info-area d-none d-sm-flex align-items-center justify-content-between">
                                <div class="d-none d-md-flex align-items-center mr-3">
                                    <i class="webexflaticon webex-flaticon-globe-1 text-primary-color"></i>
                                    <div>
                                        <h6>Address</h6>
                                        <a class="text-gray"
                                            href="mailto:{{ env('APP_ADDRESS') }}">{{ env('APP_ADDRESS') }}</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mr-3">
                                    <i class="webexflaticon webex-flaticon-mail-1 text-primary-color"></i>
                                    <div>
                                        <h6>Email Us</h6>
                                        <a class="text-gray"
                                            href="mailto:{{ env('APP_EMAIL') }}">{{ env('APP_EMAIL') }}</a>
                                    </div>
                                </div>
                                <div class="d-none d-lg-flex align-items-center">
                                    <i class="webexflaticon webex-flaticon-phone-1 text-primary-color"></i>
                                    <div>
                                        <h6>Call Us</h6>
                                        <a class="text-gray" href="tel:{{ env('APP_PHONE') }}">
                                            {{ env('APP_PHONE') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-navigation-area three-layers-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="header-searchbox-style-two">
                                <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                    <span class="bar1"></span>
                                    <span class="bar2"></span>
                                    <span class="bar3"></span>
                                </div>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a
                                                href="https://web.whatsapp.com/send?phone={{ env('APP_WHATSAPP') }}">Whatsapp</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="side-panel-content">
                                <div class="close-icon">
                                    <button><i class="webex-icon-cross"></i></button>
                                </div>
                                <div class="side-panel-logo mrb-30">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/brand/logo-dark.svg') }}" alt="" />
                                    </a>
                                </div>
                                <div class="side-info mrb-30">
                                    <div class="side-panel-element mrb-25">
                                        <h4 class="mrb-10">Office Address</h4>
                                        <ul class="list-items">
                                            <li><span
                                                    class="fa fa-globe mrr-10 text-primary-color"></span>{{ env('APP_ADDRESS') }}
                                            </li>
                                            <li><span
                                                    class="fa fa-envelope-o mrr-10 text-primary-color"></span>{{ env('APP_EMAIL') }}
                                            </li>
                                            <li><span
                                                    class="fa fa-phone mrr-10 text-primary-color"></span>{{ env('APP_PHONE') }}
                                            </li>
                                            <li><span
                                                    class="fa fa-phone mrr-10 text-primary-color"></span>{{ env('APP_PHONE2') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h4 class="mrb-15">Social List</h4>
                                <ul class="social-list">
                                    @include('inc.social')
                                </ul>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header End -->
    <!-- START REVOLUTION SLIDER 5.4.2 -->
    <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export"
        data-source="gallery"
        style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        @yield('body')
        <!-- Call to Action End -->
        <!-- Footer Area Start -->
        <footer class="footer">
            <div class="footer-main-area" data-background="images/bg/footer-bg.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <img src="{{ asset('assets/images/brand/logo-light.svg') }}" alt="" class="mrb-20">
                                <address class="mrb-25">
                                    <p class="text-light-gray">{{ env('APP_ADDRESS') }}</p>
                                    <div class="display-inline-block mrb-10">
                                        <a href="#" class="text-light-gray"><i
                                                class="fa fa-phone mrr-10"></i>{{ env('APP_PHONE') }}
                                        </a>
                                    </div><br>
                                    <div class="display-inline-block mrb-10">
                                        <a href="#" class="text-light-gray"><i
                                                class="fa fa-envelope-o mrr-10"></i>{{ env('APP_EMAIL') }}
                                        </a>
                                    </div>
                                    <div class="display-inline-block"><a href="#" class="text-light-gray"><i
                                                class="fa fa-globe mrr-10"></i>{{ route('index') }}
                                        </a>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Recent News</h5>
                                <div class="single-post media mrb-20">
                                    <div class="post-image mrr-20">
                                        <img src="images/footer/recent-post_01.jpg" alt="">
                                    </div>
                                    <div class="post-content media-body align-self-center">
                                        <h5 class="text-light-gray mrb-10"><a href="#">Industrial Service</a></h5>
                                    </div>
                                </div>
                                <div class="single-post media mrb-20">
                                    <div class="post-image mrr-20">
                                        <img src="images/footer/recent-post_02.jpg" alt="">
                                    </div>
                                    <div class="post-content media-body align-self-center">
                                        <h5 class="text-light-gray mrb-10"><a href="#">Industrial Service</a></h5>
                                    </div>
                                </div>
                                <div class="single-post media">
                                    <div class="post-image mrr-20">
                                        <img src="images/footer/recent-post_03.jpg" alt="">
                                    </div>
                                    <div class="post-content media-body align-self-center">
                                        <h5 class="text-light-gray mrb-10"><a href="#">Industrial Service</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Whatsapp</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Support</h5>
                                <ul class="opening-hours">
                                    <li>
                                        <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Mon - Tue
                                        </p>
                                        <p>9:30 am - 6.00 pm</p>
                                    </li>
                                    <li>
                                        <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Sunday</p>
                                        <p>9:30 am - 6.00 pm</p>
                                    </li>
                                </ul>
                                <ul class="social-list list-primary-color">
                                    @include('inc.social')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-center">
                                <span class="text-light-gray">Copyright © {{ date('Y') }} by
                                    {{ env('APP_NAME') }} |
                                    All
                                    rights reserved </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
        <!-- BACK TO TOP SECTION -->
        <div class="back-to-top bg-gradient-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- Integrated important scripts here -->
        <script src="{{ asset('assets/js/jquery.v1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-core-plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- Revolution Slider -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/slider_v1.js') }}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
        </script>
        <script type="text/javascript"
                src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}">
        </script>
</body>

</html>
