@extends('layouts.master')
@section('content')
    <!-- Start Hero Area -->
    <section class="hero-area" style="direction: ltr">
        <div class="container">
            <div class="row">
                <div class="col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="
                background-image: url({{ asset('front/assets/images/header.jpeg') }});
              ">
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="
              background-image: url({{ asset('front/assets/images/header.jpeg') }});
              ">
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="
              background-image: url({{ asset('front/assets/images/header.jpeg') }});
              ">
                            </div>
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Trending Product Area -->
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2> المنتجات الخاصه بنا</h2>
                        <p>
                            هناك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، لكن الأغلبية
                            تم تعديلها بشكل ما.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-image">
                                <img src="{{ $product->main_image }}" alt="#" />
                                <div class="button">
                                    <a href="{{ route('add_to_cart', $product->id) }}" class="btn"><i
                                            class="lni lni-cart"></i> اضافة للسلة</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="category">تمور</span>
                                <h4 class="title">
                                    <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                </h4>
                                <ul class="review">
                                    <li><span> التقييم 4.0</span></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star"></i></li>
                                </ul>
                                <div class="price">
                                    <span>{{ $product->price }} ريال سعودي</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>ًالشحن مجانا</h5>
                        <span> للطلبات التي تزيد عن 100 دولارًا</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>دعم 24/7.</h5>
                        <span> الدردشة الحية أو الاتصال.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>الدفع الالكتروني</h5>
                        <span> خدمات الدفع الآمنة.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>سهولة العودة.</h5>
                        <span>تسوق خالي من المتاعب.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->
@endsection

@push('js')
    <script src="{{ asset('front/assets/js/tiny-slider.js') }}"></script>
    <script type="text/javascript">
        //========= Hero Slider
        tns({
            container: ".hero-slider",
            slideBy: "page",
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: [
                '<i class="lni lni-chevron-left"></i>',
                '<i class="lni lni-chevron-right"></i>',
            ],
        });

        //======== Brand Slider
        tns({
            container: ".brands-logo-carousel",
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                },
            },
        });
    </script>
@endpush
