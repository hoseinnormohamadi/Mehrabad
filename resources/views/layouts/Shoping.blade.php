<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset(\App\Site::Icon())}}">
    <link rel="icon" type="image/png" href="{{asset(\App\Site::Icon())}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport' />
    <title>{{\App\Site::Name()}}</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/now-ui-kit.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" />
    @yield('Head')
</head>

<body>

<div class="wrapper default shopping-page">
    <!-- header-shopping -->
    <header class="header-shopping default">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-2">
                    <div class="header-shopping-logo default">
                        <a href="{{route('Index')}}">
                            <img src="{{asset(\App\Site::Icon())}}" alt=""  height="24px">
                        </a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <ul class="checkout-steps">
                        <li>
                            <a class="@if(request()->segment(2) == 'Buy') active @endif">
                                <span>بررسی خرید</span>
                            </a>
                        </li>
                        <li>
                            <a class="@if(request()->segment(2) == 'Completed') active @endif">
                                <span>اتمام خرید و ارسال</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header-shopping -->

    <!-- main-shopping -->
    @yield('content')
    <!-- main-shopping -->

    <!-- footer -->
    <footer class="main-footer default">
        <div class="back-to-top">
            <a href="#"><span class="icon"><i class="now-ui-icons arrows-1_minimal-up"></i></span> <span>بازگشت به
                        بالا</span></a>
        </div>
        <div class="container">
            <div class="footer-services">
                <div class="row">
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{asset('assets/img/svg/delivery.svg')}}">
                        </a>
                        <p>تحویل اکسپرس</p>
                    </div>
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{asset('assets/img/svg/contact-us.svg')}}">
                        </a>
                        <p>پشتیبانی 24 ساعته</p>
                    </div>
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{asset('assets/img/svg/payment-terms.svg')}}">
                        </a>
                        <p>پرداخت درمحل</p>
                    </div>
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{asset('assets/img/svg/return-policy.svg')}}">
                        </a>
                        <p>۷ روز ضمانت بازگشت</p>
                    </div>
                    <div class="service-item col">
                        <a href="#" target="_blank">
                            <img src="{{asset('assets/img/svg/origin-guarantee.svg')}}">
                        </a>
                        <p>ضمانت اصل بودن کالا</p>
                    </div>
                </div>
            </div>
            <div class="footer-widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">راهنمای خرید</h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">نحوه ثبت سفارش</a>
                                </li>
                                <li>
                                    <a href="#">رویه ارسال سفارش</a>
                                </li>
                                <li>
                                    <a href="#">شیوه‌های پرداخت</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">خدمات مشتریان</h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">پاسخ به پرسش‌های متداول</a>
                                </li>
                                <li>
                                    <a href="#">رویه‌های بازگرداندن کالا</a>
                                </li>
                                <li>
                                    <a href="#">شرایط استفاده</a>
                                </li>
                                <li>
                                    <a href="#">حریم خصوصی</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <header class="card-header">
                                <h3 class="card-title">با </h3>
                            </header>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">همکاری با سازمان‌ها</a>
                                </li>
                                <li>
                                    <a href="#">فرصت‌های شغلی</a>
                                </li>
                                <li>
                                    <a href="#">تماس با ما</a>
                                </li>
                                <li>
                                    <a href="#">درباره ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="socials">
                            <p>ما را در شبکه های اجتماعی دنبال کنید.</p>
                            <div class="footer-social">
                                <a href="{{\App\Site::find(1)->instagram}}" target="_blank"><i
                                        class="fa fa-instagram"></i>اینستاگرام ما</a>
                            </div>
                            <div class="footer-social">
                                <a href="{{\App\Site::find(1)->Telegram}}" target="_blank"><i
                                        class="fa fa-telegram"></i>تلگرام ما</a>
                            </div>
                            <div class="footer-social">
                                <a href="{{\App\Site::find(1)->Facebook}}" target="_blank"><i
                                        class="fa fa-facebook"></i>فیسبوک ما</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <span>هفت روز هفته ، 24 ساعت شبانه‌روز پاسخگوی شما هستیم.</span>
                    </div>
                    <div class="col-12 col-lg-2"><a href="tell:{{\App\Site::PhoneNumber()}}">شماره
                            تماس: {{\App\Site::PhoneNumber()}}</a></div>
                    <div class="col-12 col-lg-2">آدرس ایمیل:<a
                            href="mailto:{{\App\Site::Email()}}">{{\App\Site::Email()}}</a></div>

                </div>
            </div>
        </div>
        <div class="description">
            <div class="container">
                <div class="row">
                    <div class="site-description col-12 col-lg-7">
                        <h1 class="site-title">فروشگاه اینترنتی {{\App\Site::Name()}}، بررسی، انتخاب و خرید آنلاین</h1>
                        {!! \App\Site::AboutUs() !!}
                    </div>
                    <div class="symbol col-12 col-lg-5">
                        <a href="#" target="_blank"><img src="{{asset('assets/img/symbol-01.png')}}" alt=""></a>
                        <a href="#" target="_blank"><img src="{{asset('assets/img/symbol-02.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>
                    <a href="https://sitico.ir/">گروه برنامه نویسی سایتیکو | 2020</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer -->
</div>

</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="{{asset('assets/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/now-ui-kit.js')}}" type="text/javascript"></script>
<!--  CountDown -->
<script src="{{asset('assets/js/plugins/countdown.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Sliders -->
<script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}" type="text/javascript"></script>
<!--  Jquery easing -->
<script src="{{asset('assets/js/plugins/jquery.easing.1.3.min.js')}}" type="text/javascript"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>


@yield('js')
</html>

