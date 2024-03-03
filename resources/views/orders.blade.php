@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">طلباتي</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li><a href="{{ route('products') }}">المنتجات</a></li>
                        <li>طلباتي</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Shopping Cart -->

    @if (count($orders))
        <div class="shopping-cart section">
            <div class="container">
                <div class="cart-list-head">
                    <table class="table">
                        <thead class="thead-dark text-light bg-dark" style="background-color: #853b21 !important">
                            <tr>
                                <th scope="col">رقم الطلب</th>
                                <th scope="col">التاريخ</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">التكلفة</th>
                                <th scope="col">المنتجات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{ $order->id }}</th>
                                    <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                                    <td> مكتمل</td>
                                    <td>{{ $order->total }}</td>
                                    <td>
                                        @foreach ($order->products as $product)
                                            <p>
                                                <span>{{ $product->name }}</span>
                                                {{ $product->pivot->price }}
                                                <span>X</span>
                                                {{ $product->pivot->qty }}
                                            </p>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ End Shopping Cart -->
    @else
        <div class="shopping-cart section" style="    text-align: center;
font-size: 30px;">لايوجد طلبات لديك</div>
    @endif
@endsection
