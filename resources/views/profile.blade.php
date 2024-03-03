@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">معلوماتي الشخصية</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="index.html"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li>معلوماتي الشخصية</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Account  Area -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="register-form">
                        <form class="row" method="post" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-ln">الاسم </label>
                                    <input name="name" class="form-control" type="text" id="reg-ln"
                                        value="{{ $user->name }}" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-email"> البريد الالكتروني</label>
                                    <input name="email" class="form-control" type="email" id="reg-email"
                                        value="{{ $user->email }}" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-phone">الهاتف</label>
                                    <input name="phone" class="form-control" type="text" id="reg-phone"
                                        value="{{ $user->phone }}" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass">الرقم السري</label>
                                    <input class="form-control" name="password" type="password" id="reg-pass" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">تاكيد الرقم السري</label>
                                    <input class="form-control" name="password_confirmation" type="password"
                                        id="reg-pass-confirm" />
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">تعديل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Account  Area -->
@endsection
