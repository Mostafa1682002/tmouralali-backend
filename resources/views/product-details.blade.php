@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">تفاصيل المنتج</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li><a href="{{ route('products') }}">المنتجات</a></li>
                        <li>تفاصيل المنتج</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="{{ $product->main_image }}" id="current" alt="#" />
                                </div>
                                <div class="images">
                                    <img src="{{ $product->main_image }}" class="img" alt="#" />
                                    @foreach ($product->images as $image)
                                        <img src="{{ $image->image }}" class="img" alt="#" />
                                    @endforeach
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $product->name }}</h2>
                            <p class="category">
                                <i class="lni lni-tag"></i> تمور:<a href="javascript:void(0)"></a>
                            </p>
                            <h3 class="price">{{ $product->price }} ريال سعودي</h3>
                            <p class="info-text">منتج لذيذ وشهي يقدم مذاقًا رائعًا</p>
                            {{-- <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">الكميه</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="button cart-button">
                                            <form action="{{ route('add_to_cart', $product->id) }}" method="GET">
                                                <button class="btn" type="submit" style="width: 100%">
                                                    اضافة للسله
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="wish-button">
                                            @if ($wishlists->contains($product->id))
                                                <form action="{{ route('delete_wishlist', $product->id) }}" method="GET">
                                                    <button class="btn" type="submit"
                                                        style="color: #fff;
                                                background-color: var(--main-background-color);
                                                border-color: transparent;">
                                                        <i class="lni lni-heart"></i> حذف من المفضل
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('add_to_wishlist', $product->id) }}" method="GET">
                                                    <button class="btn" type="submit">
                                                        <i class="lni lni-heart"></i> اضافة للمفضل
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info">
                <div class="single-block">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>التفاصيل</h4>
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="single-block give-review">
                            <h4>(التقيم الكلي) 4.5</h4>
                            <ul>
                                <li>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <span>5 نجوم - 20 </span>
                                </li>
                                <li>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <span>4 نجوم - 20 </span>
                                </li>
                                <li>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <span>3 نجوم - 20 </span>
                                </li>
                                <li>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <span>2 نجوم - 20 </span>
                                </li>
                                <li>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <span>1 نجوم - 20 </span>
                                </li>
                            </ul>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn review-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                اترك لنا تعليق
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="single-block">
                            <div class="reviews">
                                <h4 class="title">اخر التعليقات</h4>
                                <!-- Start Single Review -->
                                <div class="single-review">
                                    <img src="{{ asset('front/assets/images/profile.jpg') }}" alt="#" />
                                    <div class="review-info">
                                        <h4>
                                            جودة رائعة بالنسبة للسعر
                                            <span>حماده </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <p>لوريم إيبسوم دولور سيت أميت</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="single-review">
                                    <img src="{{ asset('front/assets/images/profile.jpg') }}" alt="#" />
                                    <div class="review-info">
                                        <h4>
                                            جودة رائعة بالنسبة للسعر
                                            <span>حماده </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <p>لوريم إيبسوم دولور سيت أميت</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                                <!-- Start Single Review -->
                                <div class="single-review">
                                    <img src="{{ asset('front/assets/images/profile.jpg') }}" alt="#" />
                                    <div class="review-info">
                                        <h4>
                                            جودة رائعة بالنسبة للسعر
                                            <span>حماده </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <p>لوريم إيبسوم دولور سيت أميت</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
