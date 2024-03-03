@extends('layouts.master')
@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">من نحن</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="{{ route('home') }}"><i class="lni lni-home"></i> الرئيسيه</a>
                        </li>
                        <li>من نحن</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Start About Area -->
    <section class="about-us section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="content-left">
                        <img src="{{ asset('front/assets/images/header.jpeg') }}" alt="#" />
                        <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                            class="glightbox video"><i class="lni lni-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- content-1 start -->
                    <div class="content-right">
                        <h2>تمور العلي</h2>
                        <p>
                            تمور العلي هو متجر متخصص في بيع التمور عالية الجودة، حيث نسعى
                            جاهدين لتقديم تجربة تسوق استثنائية لعملائنا. نحن نفخر بتقديم
                            مجموعة متنوعة من أفضل أصناف التمور المحلية والعالمية، مما يضمن
                            أن تكون تجربة تناول التمور لدينا لا تضاهى. بريدنا الإلكتروني:
                            tmouralali@gmail.com رقم الهاتف: 0532085958 العنوان: المملكة
                            العربية السعودية - حفر الباطن نحن نؤمن بأهمية جودة المنتج ورضا
                            العملاء، لذا نحرص على تقديم تمور طازجة وذات مذاق رائع، بالإضافة
                            إلى خدمة عملاء ممتازة تضمن راحتك ورضاك التام. تسوق معنا اليوم
                            واستمتع بتجربة فريدة ومميزة في عالم التمور. تمور العلي - تمتع
                            بأفضل التمور، وابدأ يومك بطاقة ونشاط!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
@endsection
