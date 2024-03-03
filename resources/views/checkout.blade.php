@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">الدفع</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li><a href="{{ route('products') }}">المنتجات</a></li>
                        <li>الدفع</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!--====== Checkout Form Steps Part Start ======-->

    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                <h6 class="title" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="true" aria-controls="collapseThree">
                                    البيانات الشخصية
                                </h6>
                                <section class="checkout-steps-form-content collapse show" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <form action="{{ route('completeCheckout') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>الاسم</label>
                                                    <div class="row">
                                                        <div class="col-md-12 form-input form">
                                                            <input name="name" type="text" placeholder="الاسم " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>البريد الالكتروني</label>
                                                    <div class="form-input form">
                                                        <input type="text" name="email"
                                                            placeholder="البريد الالكتروني" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>الهاتف</label>
                                                    <div class="form-input form">
                                                        <input name="phone" type="text" placeholder="الهاتف" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>عنوان التوصيل</label>
                                                    <div class="form-input form">
                                                        <input name="address" type="text" placeholder="عنوان التوصيل" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form button">
                                                    <button class="btn" type="submit" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        اكمال الطلب
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <div class="checkout-sidebar-price-table mt-30">
                            <h5 class="title">معلومات الطلب</h5>
                            <div class="sub-total-price">
                                <div class="total-price">
                                    <p class="value">السعر :</p>
                                    <p class="price">{{ Cart::instance('cart')->total() }} ريال سعودي</p>
                                </div>
                                <div class="total-price shipping">
                                    <p class="value">خدمة توصيل :</p>
                                    <p class="price">0.00 ريال سعودي</p>
                                </div>
                                <div class="total-price discount">
                                    <p class="value">التخفيض :</p>
                                    <p class="price">0.00 ريال سعودي</p>
                                </div>
                            </div>

                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">السعر الكلي :</p>
                                    <p class="price">{{ Cart::instance('cart')->total() }} ريال سعودي</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="checkout-sidebar-coupon">
                            <p>كود الخصم</p>
                            <form action="#">
                                <div class="single-form form-default">
                                    <div class="form-input form">
                                        <input type="text" placeholder="كود الخصم" />
                                    </div>
                                    <div class="button">
                                        <button class="btn">تفعيل</button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Checkout Form Steps Part Ends ======-->
@endsection
