<!DOCTYPE html>
<html class="no-js" lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> متجر تمور العلي</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/0-04.png') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}" />
    <style>
        .tns-visually-hidden {
            position: absolute;
            left: 1000em !important;
        }
    </style>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    {{-- Toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>


    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Start Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12">
                        <div class="text-center text-white">
                            مرحبا بكم في متجر تمور العلي لدينا اجود انواع التمور
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="top-end text-center">
                            @auth
                                <!-- I'm a member -->
                                <div class="member">
                                    <i class="lni lni-user xc"></i>
                                    <p class="welcome">مرحباً بك</p>
                                    <div class="dropdown">
                                        {{-- <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            {{ auth()->user()->name }}
                                            <i class="lni lni-chevron-down"></i>
                                        </button> --}}
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="xbx">
                                            {{ auth()->user()->name }}
                                            <i class="lni lni-chevron-down"></i>
                                        </button>
                                        <script>
                                            document.getElementById('xbx').addEventListener('click', () => {
                                                document.getElementById('menu').classList.toggle('show')
                                                document.getElementById('menu').style = "left: 0px"
                                            })
                                        </script>
                                        <div class="dropdown-menu" id="menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('profile') }}">
                                                <i class="lni lni-user"></i>
                                                معلوماتى
                                            </a>
                                            <a class="dropdown-item" href="{{ route('wishlist') }}">
                                                <i class="lni lni-heart"></i>
                                                المفضلة
                                            </a>
                                            <a class="dropdown-item" href="{{ route('orders') }}">
                                                <i class="lni lni-restaurant"></i>
                                                طلباتي
                                            </a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="dropdown-item" type="submit"><i class="lni lni-exit"></i>
                                                    تسجيل الخروج</button>
                                                {{-- <a class="dropdown-item" href="#">
                                                    <i class="lni lni-exit"></i>
                                                    تسجيل الخروج
                                                </a> --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- I'm not member  -->
                                <ul class="user-login">
                                    <li>
                                        <a href="{{ route('login') }}">تسجيل الدخول</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">انشاء حساب</a>
                                    </li>
                                </ul>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <!-- Start Header Middle -->
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-lg-4 col-md-3">
                        <!-- Start Header Logo -->
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('front/assets/images/10-05.png') }}" alt="Logo" />
                        </a>
                        <!-- End Header Logo -->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-md-3">
                        <!-- Start Main Menu Search -->
                        <div class="main-menu-search">
                            <!-- navbar search start -->
                            <div class="navbar-search search-style-5">
                                <div class="search-input">
                                    <input type="text" placeholder=" بحث ......" />
                                </div>
                                <div class="search-btn">
                                    <button><i class="lni lni-search-alt"></i></button>
                                </div>
                            </div>
                            <!-- navbar search Ends -->
                        </div>
                        <!-- End Main Menu Search -->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-md-5 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <h3>
                                    الهاتف
                                    <span style="direction: ltr">0532085958</span>
                                </h3>
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="{{ route('wishlist') }}">
                                        <i class="lni lni-heart"></i>
                                        <span class="total-items">{{ Cart::instance('wishlist')->count() }}</span>
                                    </a>
                                </div>
                                <div class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items">{{ Cart::instance('cart')->count() }}</span>
                                    </a>
                                    <!-- Shopping Item -->
                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <a href="{{ route('cart') }}">السلة</a>
                                            <span>{{ Cart::instance('cart')->count() }} منتج</span>
                                        </div>
                                        <ul class="shopping-list">
                                            @foreach (Cart::instance('cart')->content() as $item)
                                                <li>
                                                    <a href="{{ route('delete_cart', $item->id) }}" class="remove"
                                                        title="Remove this item"><i class="lni lni-close"></i></a>
                                                    <div class="cart-img-head">
                                                        <a href="{{ route('product', $item->id) }}"><img
                                                                src="{{ $item->model->main_image }}"
                                                                alt="#" /></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4>
                                                            <a
                                                                href="{{ route('product', $item->id) }}">{{ $item->name }}</a>
                                                        </h4>
                                                        <p class="quantity">
                                                            {{ $item->qty }} x <span
                                                                class="amount">{{ $item->price }}</span>
                                                        </p>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span class="total-amount">{{ Cart::instance('cart')->total() }} ريال
                                                    سعودي</span>
                                                <span>السعر الكلي</span>
                                            </div>
                                            @if (Cart::instance('cart')->count())
                                                <div class="button">
                                                    <a href="{{ route('checkout') }}" class="btn animate"> الدفع</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--/ End Shopping Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Middle -->
        <!-- Start Header Bottom -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">

                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" aria-label="Toggle navigation">الرئيسيه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('products') }}" aria-label="Toggle navigation">المنتجات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('cart') }}" aria-label="Toggle navigation">السلة</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" aria-label="Toggle navigation">من نحن</a>
                                    </li>
                                    <li class="nav-item">
                                        <!-- class="active" -->
                                        <a href="{{ route('contact') }}" aria-label="Toggle navigation">تواصل
                                            معنا</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Nav Social -->
                    <div class="nav-social">
                        <h5 class="title">تابعنا :</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Nav Social -->
                </div>
            </div>
        </div>
        <!-- End Header Bottom -->
    </header>
    <!-- End Header Area -->

    @yield('content')
    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Middle -->
        <div class="footer-middle">
            <div class="container">
                <div class="bottom-inner">
                    <div class="row" style="text-align: center">
                        <div class=" col-md-4 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-contact">
                                <h3>اتصل بنا</h3>
                                <p class="phone">الهاتف : 0532085958</p>
                                <p class="mail">
                                <p class="phone">البريد الالكتروني : </p>
                                <a style="color: #9e9e9e;" href="mailto:tmouralali@gmail.com">tmouralali@gmail.com</a>
                                </p>
                                <p class="mail">
                                <p class="phone">العنوان : </p>
                                <a style="color: #9e9e9e;" href="#">المملكة العربيه السعوديه- حفر الباطن</a>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class=" col-md-4 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>من نحن</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">من نحن</a></li>
                                    <li><a href="javascript:void(0)">تواصل معنا</a></li>
                                    <li><a href="javascript:void(0)">الشروط والأحكام</a></li>
                                    <li><a href="javascript:void(0)">سياسة الخصوصية</a></li>
                                    <li><a href="javascript:void(0)">سياسة التوصيل</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="logo">
                                <a class="navbar-brand" href="{{ route('home') }}">
                                    <img src="{{ asset('front/assets/images/0-05.png') }}" alt="Logo" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner-content">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>حقوق النشر محفوظة © متجر تمور العلي</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>




    <!-- ========================= JS here ========================= -->
    {{-- Toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>




    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif

    <script src="{{ asset('front/assets/js/slim.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('front/assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

    @stack('js')
</body>

</html>
