@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">السلة</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li><a href="{{ route('products') }}">المنتجات</a></li>
                        <li>السلة</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    @if (Cart::instance('cart')->count() == 0)
        <div class="shopping-cart section" style="    text-align: center;
    font-size: 30px;">السلة فارغة</div>
    @else
        <!-- Shopping Cart -->
        <div class="shopping-cart section">
            <div class="container">
                <div class="cart-list-head">
                    <!-- Cart List Title -->
                    <div class="cart-list-title">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-12"></div>
                            <div class="col-lg-4 col-md-3 col-12">
                                <p>اسم المنتج</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>السعر</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>الكميه</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p>الاجمالي</p>
                            </div>
                            <div class="col-lg-1 col-md-2 col-12">
                                <p>حذف</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Cart List Title -->
                    @foreach (Cart::instance('cart')->content() as $item)
                        <!-- Cart Single List list -->
                        <div class="cart-single-list">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1 col-12">
                                    <a href="{{ route('product', $item->id) }}"><img src="{{ $item->model->main_image }}"
                                            alt="#" /></a>
                                </div>
                                <div class="col-lg-4 col-md-3 col-12">
                                    <h5 class="product-name">
                                        <a href="{{ route('product', $item->id) }}">{{ $item->name }}</a>
                                    </h5>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{ $item->price }}</p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    {{-- <div class="count-input">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div> --}}
                                    <form action="{{ route('update_cart', $item->rowId) }}" method="post" id="form_update">
                                        @csrf
                                        <input
                                            style="width: 60px;
                                        border: 1px solid #853b21;
                                        padding: 5px 10px 5px 2px;"
                                            class="count-input" type="number" name="qty" min="1" id=""
                                            value="{{ $item->qty }}"
                                            onchange="document.getElementById('form_update').submit()">
                                    </form>
                                </div>
                                <div class="col-lg-2 col-md-2 col-12">
                                    <p>{{ $item->subtotal }}</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-12">
                                    <a class="remove-item" href="{{ route('delete_cart', $item->id) }}"><i
                                            class="lni lni-close"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single List list -->
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Total Amount -->
                        <div class="total-amount">
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-12">
                                    {{-- <div class="left">
                                        <div class="coupon">
                                            <form action="#" target="_blank">
                                                <input name="Coupon" placeholder="ادخل كود الخصم...." />
                                                <div class="button">
                                                    <button class="btn">تطبيق الكود</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="right">
                                        <ul>
                                            <li>المجموع <span>{{ Cart::instance('cart')->total() }} ريال </span></li>
                                            <li>شحن<span>مجاني</span></li>
                                            <li>ضريبه<span>{{ Cart::instance('cart')->tax() }}</span></li>
                                            <li class="last">
                                                المجموع الكلي<span>{{ Cart::instance('cart')->total() }} ريال </span>
                                            </li>
                                        </ul>
                                        <div class="button">
                                            <a href="{{ route('checkout') }}" style="margin-right: 0"
                                                class="btn">الدفع</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Total Amount -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Shopping Cart -->
    @endif

    <script>
        toastr.error("1111111111");
    </script>
@endsection
