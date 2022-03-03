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
                                    src="{{ asset('assets/images/logo.png') }}" alt="">
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
                                            href="mailto:{{ env('APP_ADDRESS') }}">{{ env('APP_ADDRESS') }}</a>
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
                                <div class="show-searchbox">
                                    <a href="#"><i class="webex-icon-Search"></i></a>
                                </div>
                                <div class="toggle-searchbox">
                                    <form action="#" id="searchform-all" method="get">
                                        <div>
                                            <input type="text" id="s" class="form-control" placeholder="Search...">
                                            <div class="input-box">
                                                <input type="submit" value="" id="searchsubmit"><i
                                                    class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </form>
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
                                        <img src="{{ asset('assets/images/logo-sidebar-dark.png') }}" alt="" />
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
        <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
        <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <div class="slotholder"></div>
            <ul>
                <!-- SLIDE  -->
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                    data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Ken Burns"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/bg/2.jpg" alt="" data-bgposition="center center" data-kenburns="off"
                        data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                        data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                        class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption title-slide color-white" id="slide-01-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-105','-65','-77','-90']"
                        data-fontsize="['55','52','45','35']" data-lineheight="['64','57','50','40']"
                        data-fontweight="['800','800','800','800']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]"
                        style="z-index: 16; white-space: nowrap;">We <span class="text-primary-color">Provide</span> The
                        Best <br> Industrial Solution
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sub-title color-white" id="slide-01-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['37','37','37','37']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','0']"
                        data-fontsize="['20',18','18','18']" data-lineheight="['30','30','30','24']"
                        data-fontweight="['400','400','400','400']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 17; white-space: nowrap;">We have almost 35+ years of experience for helping
                        <br>industrial services and business solutions
                    </div>
                    <a href="#" target="_self" class="tp-caption cs-btn-one btn-primary-color"
                        data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']"
                        data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Our Company
                    </a>
                    <!-- END LAYER LINK -->
                    <a href="#" target="_self" class="tp-caption cs-btn-one border btn-transparent"
                        data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-x="['left','left','left','left']" data-hoffset="['250','250','250','245']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']"
                        data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Contact Us
                    </a>
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="random-static" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                    data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="HTML5 Video"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/bg/1.jpg" alt="img3" data-bgposition="center center" data-bgfit="cover"
                        class="rev-slidebg" data-no-retina>
                    <div class="tp-caption title-slide color-white" id="slide-02-layer-1"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-120','-33','-90','-90']"
                        data-fontsize="['58','55','45','38']" data-lineheight="['65','57','55','45']"
                        data-fontweight="['800','800','800','800']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]"
                        style="z-index: 16; white-space: nowrap;">We <span class="text-primary-color">Ensure</span>
                        Quality <br> Industrial Solution
                    </div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sub-title color-white" id="slide-02-layer-4"
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['15','0','10','10']"
                        data-fontsize="['20',18','18','17']" data-lineheight="['30','28','28','28']"
                        data-fontweight="['400','400','400','400']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 17; white-space: nowrap;">We have almost 35+ years of experience for helping
                        <br> industrial services and business solutions
                    </div>
                    <a href="#" target="_self" class="tp-caption cs-btn-one btn-primary-color"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":400,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['120','90','90','90']"
                        data-fontsize="['14',14','14','14']" data-width="['auto']" data-height="['auto']">Purchase Theme
                    </a><!-- END LAYER LINK -->
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                    data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Ken Burns"
                    data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="images/bg/2.jpg" alt="" data-bgposition="center center" data-kenburns="off"
                        data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                        data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                        class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption title-slide color-white" id="slide-03-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-105','-65','-77','-90']"
                        data-fontsize="['55','52','45','35']" data-lineheight="['64','57','50','40']"
                        data-fontweight="['800','800','800','800']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0" data-paddingleft="[0,0,0,0]"
                        style="z-index: 16; white-space: nowrap;">We <span class="text-primary-color">Provide</span>
                        The Best <br> Industrial Solution
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sub-title color-white" id="slide-03-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['37','37','37','37']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','0']"
                        data-fontsize="['20',18','18','18']" data-lineheight="['30','30','30','24']"
                        data-fontweight="['400','400','400','400']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":700,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 17; white-space: nowrap;">We have almost 35+ years of experience for helping
                        <br>industrial services and business solutions
                    </div>
                    <a href="#" target="_self" class="tp-caption cs-btn-one btn-primary-color"
                        data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']"
                        data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Our Company
                    </a>
                    <!-- END LAYER LINK -->
                    <a href="#" target="_self" class="tp-caption cs-btn-one border btn-transparent"
                        data-frames='[{"delay":1500,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']"
                        data-x="['left','left','left','left']" data-hoffset="['250','250','250','245']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['130','130','120','80']"
                        data-fontsize="['14','14','14','14']" data-width="['auto']" data-height="['auto']">Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-80 pdb-lg-100 bg-center-bottom" data-background="images/bg/ac2.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="about-image">
                        <img class="img-full image-link mrb-lg-50 mrt-5" src="images/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h5 class="mrb-15 text-primary-color text-underline">Welcome to Loxicat Industry</h5>
                    <h2 class="mrb-25">Most Leading Industrial Service Provider.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eaque, maxime aliquam cum
                        odio aut ex, et blanditiis corporis rerum unde vitae nihil. Eius porro sunt temporibus soluta
                        libero voluptatum.</p>
                    <ul class="order-list primary-color">
                        <li>Quality Control System, 100% Satisfaction Guarantee</li>
                        <li>Expertise & Innovation from a truly global company</li>
                        <li>Leading Industrial Services Provider Company</li>
                        <li>Highly Professional Staff, Accurate Testing Processes</li>
                    </ul>
                    <a href="#" class="cs-btn-one btn-lg mrt-30">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Team Section Start -->
    <section class="section-team pdt-105 pdb-215" data-background="images/bg/pattern3.png">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-xl-6">
                        <div class="section-title-block">
                            <h5 class="text-primary-color text-underline section-icon mrb-15">Meet Our Team</h5>
                            <h2>We Have a Professional Engineering Team</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="500ms">
                        <div class="team-block mrb-60 mrb-lg-70 mrb-sm-90">
                            <div class="team-upper-part">
                                <img class="img-full" src="images/team/team1.jpg" alt="">
                                <div class="overlay">
                                    <ul class="social-list vertical-style list-sm">
                                        @include('inc.social')
                                    </ul>
                                </div>
                            </div>
                            <div class="team-bottom-part text-center">
                                <h4 class="team-title mrb-5"><a href="page-single-team.html">Jack Mehoff</a></h4>
                                <h6 class="designation">Engineer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="500ms">
                        <div class="team-block mrb-60 mrb-lg-70 mrb-sm-90">
                            <div class="team-upper-part">
                                <img class="img-full" src="images/team/team2.jpg" alt="">
                                <div class="overlay">
                                    <ul class="social-list vertical-style list-sm">
                                        @include('inc.social')
                                    </ul>
                                </div>
                            </div>
                            <div class="team-bottom-part text-center">
                                <h4 class="team-title mrb-5"><a href="page-single-team.html">Sebastian Turner</a></h4>
                                <h6 class="designation">Engineer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="500ms">
                        <div class="team-block mrb-60 mrb-lg-70 mrb-sm-90">
                            <div class="team-upper-part">
                                <img class="img-full" src="images/team/team3.jpg" alt="">
                                <div class="overlay">
                                    <ul class="social-list vertical-style list-sm">
                                        @include('inc.social')
                                    </ul>
                                </div>
                            </div>
                            <div class="team-bottom-part text-center">
                                <h4 class="team-title mrb-5"><a href="page-single-team.html">George Wilson</a></h4>
                                <h6 class="designation">Engineer</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="500ms">
                        <div class="team-block mrb-60 mrb-lg-70">
                            <div class="team-upper-part">
                                <img class="img-full" src="images/team/team4.jpg" alt="">
                                <div class="overlay">
                                    <ul class="social-list vertical-style list-sm">
                                        @include('inc.social')
                                    </ul>
                                </div>
                            </div>
                            <div class="team-bottom-part text-center">
                                <h4 class="team-title mrb-5"><a href="page-single-team.html">Holden McGroin</a></h4>
                                <h6 class="designation">Engineer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
    <!-- Divider Section Start -->
    <section class="bg-primary-color" data-background="images/bg/dot-map.png">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mrb-md-110 mrb-sm-110">
                        <div class="text-divider pdb-lg-105 pdb-md-45">
                            <h5 class="text-primary-color text-underline mrb-15">Best Industrial Company</h5>
                            <h2 class="mrt-0 large-text mrb-20">Why Choose Us?</h2>
                            <p class="mrb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Deserunt rem sunt odit, cupiditate, ratione, praesentium minima, obcaecati eos vel
                                voluptatem ipsa necessitatibus eius. Repellat.</p>
                            <div class="skills">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Welding Services</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2100"
                                                    data-stop="95">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="95"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Industrial Service</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="1900"
                                                    data-stop="96">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="96"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Construction Works</h6>
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="1800"
                                                    data-stop="90">0</span>%</div>
                                        </div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="90"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-full mrt-misus-145 mrt-lg-0 d-none d-lg-block" src="images/about/person.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section End -->
    <!-- Project Section Start -->
    <section class="project-section pdt-105 pdb-80" data-background="images/bg/abs-bg5.png">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-xl-6">
                        <div class="section-title-block">
                            <h5 class="text-primary-color text-underline section-icon mrb-15">Service We Provide</h5>
                            <h2 class="">Let's Have a Look At Our Latest Projects.</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="50ms" data-wow-duration="1500ms">
                        <div class="project-filter text-center mrb-50">
                            <ul>
                                <li data-filter="*" class="active">All</li>
                                <li data-filter=".industry">Industry</li>
                                <li data-filter=".construction">Construction</li>
                                <li data-filter=".manufacturing">Manufacturing</li>
                                <li data-filter=".chemical">Chemical</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row grid wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="col-lg-4 col-md-6 grid-item industry manufacturing">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_01.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Building Construction</a></h4>
                                <h6>- Construction</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item business chemical">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_02.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Metal Industry</a></h4>
                                <h6>- Industry</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item industry construction">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_03.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Bridge Construction</a></h4>
                                <h6>- Building</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item construction business">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_04.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Car Manufacturing</a></h4>
                                <h6>- Manufacturing</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item industry manufacturing">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_05.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Metal Industry</a></h4>
                                <h6>- Industry</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item industry manufacturing">
                        <div class="project-item mrb-30">
                            <div class="project-thumb">
                                <img class="img-full" src="images/project/project_06.jpg" alt="">
                                <div class="link-single-page">
                                    <a href="#"><i class="webex-icon-attachment1"></i></a>
                                </div>
                            </div>
                            <div class="project-content">
                                <h4><a href="#">Building Construction</a></h4>
                                <h6>- Construction</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->
    <!-- Funfact Section Start -->
    <section class="pdt-120 pdb-50 pdb-sm-40 section-white-typo funfact-section" data-background="images/bg/2.jpg"
        data-overlay-dark="5">
        <img class="img-full section-object" src="images/object2.png" alt="">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-briefcase-1"></span>
                            </div>
                            <h2 class="counter">1450</h2>
                            <h5 class="title">Projects Succeed</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-like-3"></span>
                            </div>
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-trophy-1"></span>
                            </div>
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp d-xl-none" data-wow-delay="600ms"
                        data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-trophy-1"></span>
                            </div>
                            <h2 class="counter">1280</h2>
                            <h5 class="title">Awards Achieved</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact Section End -->
    <!-- Request A Call Back Section Start -->
    <section class="request-a-call-back pdt-110 pdb-80 pdb-md-110" data-background="images/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-xl-7 wow fadeInLeft mrb-md-60" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <h5 class="text-primary-color text-underline section-icon mrb-15">See Some Important FAQs</h5>
                    <h2 class="mrb-20">Common Frequently Asked Questions</h2>
                    <p class="mrb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat earum
                        laboriosam reiciendis numquam error impedit quod, obcaecati ullam.</p>
                    <div class="faq-block">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header active">
                                    <h5 class="title">Q: What does Loxicat industrial do?</h5>
                                    <span class="fa fa-plus"></span>
                                </div>
                                <div class="accordion-body">
                                    <p>A: Leverage agile frameworks to provide a robust synopsis for high level
                                        overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. Organically grow the holistic
                                        world view of disruptive innovation via workplace diversity and empowerment.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h5 class="title">Q: How much cost for industrial service?</h5>
                                    <span class="fa fa-plus"></span>
                                </div>
                                <div class="accordion-body">
                                    <p>A: Leverage agile frameworks to provide a robust synopsis for high level
                                        overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. Organically grow the holistic
                                        world view of disruptive innovation via workplace diversity and empowerment.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h5 class="title">Q: How does the industrial process work?</h5>
                                    <span class="fa fa-plus"></span>
                                </div>
                                <div class="accordion-body">
                                    <p>A: Leverage agile frameworks to provide a robust synopsis for high level
                                        overviews. Iterative approaches to corporate strategy foster collaborative
                                        thinking to further the overall value proposition. Organically grow the holistic
                                        world view of disruptive innovation via workplace diversity and empowerment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0ms"
                    data-wow-duration="1000ms">
                    <div class="request-a-call-back-form">
                        <h3 class="text-white mrt-0 mrb-15">Request a Call Back</h3>
                        <p class="text-white mrb-30">Lorem ipsum dolor sit amet, consectetur adipisicing Fuga magnam
                            maxime ea adipisci iusto.</p>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select name="categories" class="custom-select-categories" required>
                                            <option value="">- Choose Service -</option>
                                            <option>Building Construction</option>
                                            <option>Metal Industry</option>
                                            <option>Oil & Gas</option>
                                            <option>Lather Factory</option>
                                            <option>Hard Metal</option>
                                            <option>Manufacturing</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mrb-0">
                                        <button type="submit"
                                            class="cs-btn-one btn-primary-color hover-white btn-md btn-block">Request
                                            Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Request A Call Back Section End -->
    <!-- Clients Section Start -->
    <section class="pdt-70 pdb-70 bg-primary-color" data-background="images/bg/abs-bg4.png">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel client-items">
                            <div class="client-item">
                                <img src="images/clients/client1.png" alt="">
                            </div>
                            <div class="client-item">
                                <img src="images/clients/client2.png" alt="">
                            </div>
                            <div class="client-item">
                                <img src="images/clients/client4.png" alt="">
                            </div>
                            <div class="client-item">
                                <img src="images/clients/client5.png" alt="">
                            </div>
                            <div class="client-item">
                                <img src="images/clients/client1.png" alt="">
                            </div>
                            <div class="client-item">
                                <img src="images/clients/client6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->
    <!-- News Section Start -->
    <section class="pdt-105 pdb-45 pdb-md-0" data-background="images/bg/ac3.png" data-overlay-dark="0">
        <div class="section-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="section-title-block dot-pattern-bg mrb-md-30">
                            <h5 class="text-primary-color text-underline mrb-15">News And Updates</h5>
                            <h2 class="">Let's Checkout our All Current News.</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
                        <a href="#" class="cs-btn-one btn-primary-color btn-md">All News</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30">
                            <div class="news-thumb">
                                <img src="images/news/01.jpg" class="img-full" alt="blog">
                                <div class="news-date">
                                    <div class="entry-date">01 Jan, 2020</div>
                                </div>
                            </div>
                            <div class="news-description">
                                <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For
                                        Success</a></h4>
                                <p class="the-content mrb-0">There are many variations of passages of Lorem that
                                    available but majority have suffered dumm alteration</p>
                            </div>
                            <div class="news-bottom-part">
                                <div class="post-author">
                                    <div class="author-img">
                                        <a href="blog-single.html">
                                            <img src="images/testimonials/testimonial-img1.jpg" class="rounded-circle"
                                                alt="#">
                                        </a>
                                    </div>
                                    <span>By <a href="blog-single.html" class="text-primary-color">Admin</a></span>
                                </div>
                                <div class="post-link">
                                    <a href="blog-single.html" class="link-btn text-primary-color">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30">
                            <div class="news-thumb">
                                <img src="images/news/02.jpg" class="img-full" alt="blog">
                                <div class="news-date">
                                    <div class="entry-date">01 Jan, 2020</div>
                                </div>
                            </div>
                            <div class="news-description">
                                <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For
                                        Success</a></h4>
                                <p class="the-content mrb-0">There are many variations of passages of Lorem that
                                    available but majority have suffered dumm alteration</p>
                            </div>
                            <div class="news-bottom-part">
                                <div class="post-author">
                                    <div class="author-img">
                                        <a href="blog-single.html">
                                            <img src="images/testimonials/testimonial-img2.jpg" class="rounded-circle"
                                                alt="#">
                                        </a>
                                    </div>
                                    <span>By <a href="blog-single.html" class="text-primary-color">Admin</a></span>
                                </div>
                                <div class="post-link">
                                    <a href="blog-single.html" class="link-btn text-primary-color">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="news-wrapper mrb-30">
                            <div class="news-thumb">
                                <img src="images/news/03.jpg" class="img-full" alt="blog">
                                <div class="news-date">
                                    <div class="entry-date">01 Jan, 2020</div>
                                </div>
                            </div>
                            <div class="news-description">
                                <h4 class="the-title mrb-20"><a href="#">Tech Entrepreneur Credits Paper For
                                        Success</a></h4>
                                <p class="the-content mrb-0">There are many variations of passages of Lorem that
                                    available but majority have suffered dumm alteration</p>
                            </div>
                            <div class="news-bottom-part">
                                <div class="post-author">
                                    <div class="author-img">
                                        <a href="blog-single.html">
                                            <img src="images/testimonials/testimonial-img3.jpg" class="rounded-circle"
                                                alt="#">
                                        </a>
                                    </div>
                                    <span>By <a href="blog-single.html" class="text-primary-color">Admin</a></span>
                                </div>
                                <div class="post-link">
                                    <a href="blog-single.html" class="link-btn text-primary-color">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Section End -->
    <!-- Call to Action Start -->
    <section class="call-to-action">
        <div class="container">
            <div class="cta-bg bg-primary-color">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="contact-info">
                            <div class="cta-contact-icon">
                                <i class="webexflaticon webex-flaticon-call"></i>
                            </div>
                            <div class="cta-contact-content">
                                <div class="cta-contact-text">Call Us Now</div>
                                <div class="cta-contact-number">(+2)-522-441-332</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="newsletter-form mrt-md-40">
                            <form method="post">
                                <div class="form-group clearfix">
                                    <input type="email" name="email" value="" placeholder="Email address" required="">
                                    <button type="submit" class="newsletter-btn"><span
                                            class="icon fa fa-paper-plane"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->
    <!-- Footer Area Start -->
    <footer class="footer">
        <div class="footer-main-area" data-background="images/bg/footer-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="widget footer-widget">
                            <img src="images/logo-footer.png" alt="" class="mrb-20">
                            <address class="mrb-25">
                                <p class="text-light-gray">32 Dora Creek Western Park Avenue, tuntable creek, New South
                                    Wales 2480, Australia</p>
                                <div class="display-inline-block mrb-10"><a href="#" class="text-light-gray"><i
                                            class="fa fa-phone mrr-10"></i>+088 234 432 15565</a></div>
                                <div class="display-inline-block mrb-10"><a href="#" class="text-light-gray"><i
                                            class="fa fa-envelope-o mrr-10"></i>sample@yourdomain.com</a></div>
                                <div class="display-inline-block"><a href="#" class="text-light-gray"><i
                                            class="fa fa-globe mrr-10"></i>www.domainname.com</a></div>
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
                                    <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>22
                                        Nov, 2019</h6>
                                </div>
                            </div>
                            <div class="single-post media mrb-20">
                                <div class="post-image mrr-20">
                                    <img src="images/footer/recent-post_02.jpg" alt="">
                                </div>
                                <div class="post-content media-body align-self-center">
                                    <h5 class="text-light-gray mrb-10"><a href="#">Industrial Service</a></h5>
                                    <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>22
                                        Nov, 2019</h6>
                                </div>
                            </div>
                            <div class="single-post media">
                                <div class="post-image mrr-20">
                                    <img src="images/footer/recent-post_03.jpg" alt="">
                                </div>
                                <div class="post-content media-body align-self-center">
                                    <h5 class="text-light-gray mrb-10"><a href="#">Industrial Service</a></h5>
                                    <h6 class="text-dark-light f-weight-500"><i class="fa fa-clock-o mrr-5"></i>22
                                        Nov, 2019</h6>
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
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="widget footer-widget">
                            <h5 class="widget-title text-white mrb-30">Support</h5>
                            <ul class="opening-hours">
                                <li>
                                    <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Mon - Tue</p>
                                    <p>9:30 am - 6.00 pm</p>
                                </li>
                                <li>
                                    <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Wed - Thur</p>
                                    <p>9:30 am - 6.00 pm</p>
                                </li>
                                <li>
                                    <p><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Fri - Sat</p>
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
                            <span class="text-light-gray">Copyright © 2020 by <a class="text-primary-color"
                                    target="_blank" href="https://themeforest.net/user/webextheme"> WebexTheme</a> | All
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
