@extends('landing.layout.app')
@section('body')
    <section class="service-section pdt-110 pdt-lg-105 pdb-80" data-background="{{ asset('assets/images/bg/2.jpg') }}"
        data-overlay-dark="5" style="background-image: url(&quot;{{ asset('assets/images/bg/2.jpg') }}&quot;);">
        <div class="section-title text-center">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-lg-6 wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <h5 class="text-primary-color text-underline section-icon mrb-15">{{ $category->name }}</h5>
                        <h2 class="text-white">We Provide The Best {{ $category->name }} Products</h2>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="section-content">
            <div class="container">
                <div class="row">
                    @foreach ($category->products as $product)
                        <div class="col-md-4">
                            <div class="news-wrapper mrb-30">
                                <div class="news-thumb">
                                    <img src="{{ asset('assets/products/' . $product->picture) }}" class="img-full"
                                        alt="blog">
                                    <div class="news-date">
                                        <div class="entry-date">Product</div>
                                    </div>
                                </div>
                                <div class="news-description">
                                    <h4 class="the-title mrb-20"><a
                                            href="{{ route('product.show', ['product' => $product->id]) }}">{{ $product->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
