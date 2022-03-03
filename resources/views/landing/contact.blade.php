@extends('landing.layout.app')
@section('body')
    <!-- Section: About -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5"
        data-bg-img="{{ asset('assets/images/bg/bg6.jpg') }}"
        style="background-image: url(&quot;images/bg/bg6.jpg&quot;); background-position: 50% 89px;">
        <div class="container pt-90 pb-50">
            <!-- Section Content -->
            <div class="section-content pt-100">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title text-white">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                                    <p>{{ env('APP_ADDRESS') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                    <p>{{ env('APP_PHONE') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#">
                                    <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                                    <p>{{ env('APP_EMAIL') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#">
                                    <i class="pe-facebook text-theme-colored"></i></a>
                                <div class="media-body"> <strong>Follow us On Facebook</strong>
                                    <p>{{ env('APP_NAME') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
                    <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia
                        ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam
                        officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</p>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class=""
                        action="http://html.kodesolution.live/s/workshop/v3.0/demo/includes/sendmail.php" method="post"
                        novalidate="novalidate">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name"
                                        required="" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="form_email" class="form-control required email" type="email"
                                        placeholder="Enter Email" aria-required="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="form_subject" class="form-control required" type="text"
                                        placeholder="Enter Subject" aria-required="true">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"
                                aria-required="true"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="">
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                data-loading-text="Please wait...">Send your message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <!-- Google Map HTML Codes --><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3634.946041546629!2d54.51535161499292!3d24.34837218429794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67fd18c8a154af83!2zMjTCsDIwJzU0LjEiTiA1NMKwMzEnMDMuMiJF!5e0!3m2!1sen!2s!4v1646280477908!5m2!1sen!2s"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    </div>
    <!-- end main-content -->



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
