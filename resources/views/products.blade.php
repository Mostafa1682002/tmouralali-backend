@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">قائمة المنتجات</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li>قائمة المنتجات</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Start Product Grids -->
    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-grids-head">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                aria-labelledby="nav-grid-tab">
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
                                                        <a
                                                            href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
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
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Pagination -->
                                        <div class="pagination left">
                                            <ul class="pagination-list">
                                                <li>
                                                    <a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                                                </li>
                                                <li><a href="javascript:void(0)">1</a></li>
                                                <li class="active">
                                                    <a href="javascript:void(0)">2</a>
                                                </li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a href="javascript:void(0)">4</a></li>
                                                <li>
                                                    <a href="javascript:void(0)"><i class="lni lni-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--/ End Pagination -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Grids -->
@endsection
