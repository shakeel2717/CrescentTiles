@extends('landing.layout.app')
@section('body')
    <section class="page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="text-uppercase text-white mrb-10">{{ $product->name }} Product Details</h2>
                    <ul class="mb-0 justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item text-primary-color">{{ $product->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="project-details-page pdt-110 pdb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-standared-img slider-blog w-25 mx-auto">
                        <img class="img-full" src="{{ asset('assets/products/' . $product->picture) }}" alt="">
                    </div>
                    <div class="project-detail-text">
                        <h3 class="project-details-title mrt-30 mrb-15">Project Description</h3>
                        <div class="project-details-content">
                            <div class="row mrb-10">
                                <div class="col-lg-12">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="project-details-content">
                            <div class="row mrb-10">
                                @forelse ($productImages as $productimage)
                                    <div class="col-lg-4">
                                        <img src="{{ asset('assets/products/products_images/' . $productimage->image) }}"
                                            alt="">
                                    </div>
                                @empty
                                    <div class="col-lg-12">
                                        <h2>This Product have no Extra Images</h2>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
