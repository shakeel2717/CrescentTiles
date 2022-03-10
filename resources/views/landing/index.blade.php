@extends('landing.layout.app')
@section('body')
    @include('inc.slider')
    <!-- About Section Start -->
    <section class="about-section pdt-110 pdb-80 pdb-lg-100 bg-center-bottom" data-background="images/bg/ac2.png">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="about-image">
                        <img class="img-full image-link mrb-lg-50 mrt-5"
                            src="{{ asset('assets/images/slides/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <h5 class="mrb-15 text-primary-color text-underline">Welcome to {{ env('APP_NAME') }}</h5>
                    <h2 class="mrb-25">Industrial City with the most Modern Manufacturing Unit..</h2>
                    <p>{{ env('APP_NAME') }} is one of the pioneers in manufacturing ceramic and porcelain
                        tiles with Grannitto as its brand name. It’s operating since 1996 and has gained high
                        goodwill in the Building Material and Construction Industry not only in UAE but worldwide.
                    </p>
                    <ul class="order-list primary-color">
                        <li>Quality Control System, 100% Satisfaction Guarantee</li>
                        <li>Expertise & Innovation from a truly global company</li>
                        <li>Leading Industrial Services Provider Company</li>
                        <li>Highly Professional Staff, Accurate Testing Processes</li>
                    </ul>
                    <a href="{{ route('about') }}" class="cs-btn-one btn-lg mrt-30">About Us</a>
                </div>
            </div>

        </div>
    </section>
    <!-- About Section End -->
    <!-- Divider Section Start -->
    <section class="bg-primary-color" data-background="{{ asset('assets/images/bg/dot-map.png') }}">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mrb-md-110 mrb-sm-110">
                        <div class="text-divider pdb-lg-105 pdb-md-45">
                            <h5 class="text-primary-color text-underline mrb-15">Best Industrial Company</h5>
                            <h2 class="mrt-0 large-text mrb-20">Why Choose Us?</h2>
                            <p class="mrb-30">To become the top name in the related industry and maintain
                                the status of a global entity that provides the best solution in manufacturing
                                ceramic and porcelain tiles, that carries the idea of quality, design, and
                                stability, embedded in our brand.</p>
                            <div class="skills">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <h6 class="skill-title">Marbels Services</h6>
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
                        <img class="img-full mrt-misus-145 mrt-lg-0 d-none d-lg-block"
                            src="{{ asset('assets/images/slides/man.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section End -->

    <section class="service-section pdt-110 pdt-lg-105 pdb-80" data-background="{{ asset('assets/images/bg/2.jpg') }}"
        data-overlay-dark="5" style="background-image: url(&quot;{{ asset('assets/images/bg/2.jpg') }}&quot;);">
        <div class="section-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color text-underline section-icon mrb-15">Services We Offer</h5>
                        <h2 class="text-white">We Provide The Best Products For Your Business</h2>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                            <div class="news-wrapper mrb-30">
                                <div class="news-thumb">
                                    <img src="{{ asset('assets/category/' . $category->picture) }}" class="img-full"
                                        alt="blog">
                                    <div class="news-date">
                                        <div class="entry-date">Category</div>
                                    </div>
                                </div>
                                <div class="news-description">
                                    <h4 class="the-title mrb-20"><a
                                            href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="project-section pdt-105 pdb-80" data-background="{{ asset('assets/images/bg/abs-bg5.png') }}"
        style="background-image: url(&quot;images/bg/abs-bg5.png&quot;);">
        <div class="section-title text-center wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-xl-6">
                        <div class="section-title-block">
                            <h5 class="text-primary-color text-underline section-icon mrb-15">Service We Provide
                            </h5>
                            <h2 class="">Let's Have a Look At Our Gallery.</h2>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row grid wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp; position: relative; height: 841.094px;">
                    <x-gallery img="1" name="Main" />
                    <x-gallery img="2" name="Main" />
                    <x-gallery img="3" name="Main" />
                    <x-gallery img="4" name="Main" />
                    <x-gallery img="5" name="Main" />
                    <x-gallery img="6" name="Main" />
                    <x-gallery img="7" name="Main" />
                    <x-gallery img="8" name="Main" />
                    <x-gallery img="9" name="Main" />
                    <x-gallery img="10" name="Main" />
                    <x-gallery img="11" name="Main" />
                    <x-gallery img="12" name="Main" />
                </div>
            </div>
        </div>
    </section>

    <!-- Project Section End -->
    <!-- Funfact Section Start -->
    <section class="pdt-120 pdb-50 pdb-sm-40 section-white-typo funfact-section"
        data-background="{{ asset('assets/images/bg/2.jpg') }}" data-overlay-dark="5">
        <img class="img-full section-object" src="{{ asset('assets/images/slides/tile_man.png') }}" alt="">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-briefcase-1"></span>
                            </div>
                            <h2 class="counter">32</h2>
                            <h5 class="title">Kinds of Tiles</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="funfact text-center mrb-md-70 mrb-60">
                            <div class="icon">
                                <span class="webexflaticon webex-flaticon-like-3"></span>
                            </div>
                            <h2 class="counter">1864</h2>
                            <h5 class="title">Peoples Likes</h5>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
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
                    <h5 class="text-primary-color text-underline section-icon mrb-15">Requst a Quote</h5>
                    <h2 class="mrb-20">Fill this Form, We will Contact Shortly!</h2>
                    <p class="mrb-30">
                        {{ env('APP_NAME') }} is one of the pioneers in manufacturing ceramic and porcelain
                        tiles with Grannitto as its brand name. It’s operating since 1996 and has gained high
                        goodwill in the Building Material and Construction Industry not only in UAE but worldwide.
                        {{ env('APP_NAME') }} is specialized in manufacturing and distributing quality ceramic
                        and porcelain tiles. We strive to produce products with distinctive quality and convey
                        high-class consumer services with the utmost professionalism.
                    </p>
                    <br>
                    <p>We are located in Dubai Industrial City with the most modern manufacturing unit. We have also
                        invested and joint ventured with top quality OEM partners around the Globe in order to cater
                        to the requirements and demands of our valuable customers. Our Complete Adress
                        {{ env('APP_ADDRESS') }}</p>
                </div>
                <div class="col-md-12 col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="request-a-call-back-form">
                        <h3 class="text-white mrt-0 mrb-15">Request a Call Back</h3>
                        <p class="text-white mrb-30">Lorem ipsum dolor sit amet, consectetur adipisicing Fuga
                            magnam
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
                                <img src="{{ asset('assets/images/clients/client1.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('assets/images/clients/client2.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('assets/images/clients/client4.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('assets/images/clients/client5.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('assets/images/clients/client1.png') }}" alt="">
                            </div>
                            <div class="client-item">
                                <img src="{{ asset('assets/images/clients/client6.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section End -->
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
                                <div class="cta-contact-number">{{ env('APP_PHONE') }}</div>
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
@endsection
