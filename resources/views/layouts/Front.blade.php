<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset(\App\Site::Icon())}}">
    <link rel="icon" type="image/png" href="{{asset(\App\Site::Icon())}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>{{\App\Site::Name()}}</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}"/>
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/now-ui-kit.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/plugins/owl.carousel.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/plugins/owl.theme.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"/>
</head>

<body class="index-page sidebar-collapse">

<!-- responsive-header -->
<nav class="navbar direction-ltr fixed-top header-responsive">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="#pablo">
                <img src="{{asset(\App\Site::Icon())}}" height="24px" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <div class="search-nav default">
                <form action="">
                    <input type="text" placeholder="جستجو ...">
                    <button type="submit"><img src="{{asset('assets/img/search.png')}}" alt=""></button>
                </form>
                <ul>
                    <li><a href="#"><i class="now-ui-icons users_single-02"></i></a></li>
                    <li><a href="#"><i class="now-ui-icons shopping_basket"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="logo-nav-res default text-center">
                <a href="#">
                    <img src="{{asset(\App\Site::Icon())}}" height="36px" alt="">
                </a>
            </div>
            <ul class="navbar-nav default">
                <li class="sub-menu">
                    <a href="#">کالای دیجیتال</a>
                    <ul>
                        <li class="sub-menu">
                            <a href="#">لوازم جانبی گوشی</a>
                            <ul>
                                <li>
                                    <a href="#">کیف و کاور گوشی</a>
                                </li>
                                <li>
                                    <a href="#">پاور بانک</a>
                                </li>
                                <li>
                                    <a href="#">هندزفری،هدفون</a>
                                </li>
                                <li>
                                    <a href="#">پایه نگهدارنده گوشی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">گوشی موبایل</a>
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#">آیفون اپل</a>
                                </li>
                                <li>
                                    <a href="#">هوآوی</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ساعت هوشمند</a>
                        </li>
                        <li>
                            <a href="#">اسپیکر بلوتوث و با سیم</a>
                        </li>
                        <li class="sub-menu">
                            <a href="#">موبایل</a>
                            <ul>
                                <li>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <a href="#">Asus</a>
                                </li>
                                <li>
                                    <a href="#">HTC</a>
                                </li>
                                <li>
                                    <a href="#">LG</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#">آرایشی،بهداشت</a>
                    <ul>
                        <li class="sub-menu">
                            <a href="#">لوازم جانبی گوشی</a>
                            <ul>
                                <li>
                                    <a href="#">کیف و کاور گوشی</a>
                                </li>
                                <li>
                                    <a href="#">پاور بانک</a>
                                </li>
                                <li>
                                    <a href="#">هندزفری،هدفون</a>
                                </li>
                                <li>
                                    <a href="#">پایه نگهدارنده گوشی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">گوشی موبایل</a>
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#">آیفون اپل</a>
                                </li>
                                <li>
                                    <a href="#">هوآوی</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ساعت هوشمند</a>
                        </li>
                        <li>
                            <a href="#">اسپیکر بلوتوث و با سیم</a>
                        </li>
                        <li class="sub-menu">
                            <a href="#">موبایل</a>
                            <ul>
                                <li>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <a href="#">Asus</a>
                                </li>
                                <li>
                                    <a href="#">HTC</a>
                                </li>
                                <li>
                                    <a href="#">LG</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="#">خودرو،ابزار و اداری</a>
                    <ul>
                        <li class="sub-menu">
                            <a href="#">لوازم جانبی گوشی</a>
                            <ul>
                                <li>
                                    <a href="#">کیف و کاور گوشی</a>
                                </li>
                                <li>
                                    <a href="#">پاور بانک</a>
                                </li>
                                <li>
                                    <a href="#">هندزفری،هدفون</a>
                                </li>
                                <li>
                                    <a href="#">پایه نگهدارنده گوشی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#">گوشی موبایل</a>
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <a href="#">آیفون اپل</a>
                                </li>
                                <li>
                                    <a href="#">هوآوی</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">ساعت هوشمند</a>
                        </li>
                        <li>
                            <a href="#">اسپیکر بلوتوث و با سیم</a>
                        </li>
                        <li class="sub-menu">
                            <a href="#">موبایل</a>
                            <ul>
                                <li>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <a href="#">Asus</a>
                                </li>
                                <li>
                                    <a href="#">HTC</a>
                                </li>
                                <li>
                                    <a href="#">LG</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">مد و پوشاک</a>
                </li>
                <li>
                    <a href="#">خانه و آشپزخانه</a>
                </li>
                <li>
                    <a href="#">کتاب،لوازم تحریر</a>
                </li>
                <li>
                    <a href="#">ورزش و سفر</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- responsive-header -->

<div class="wrapper default">

    <!-- header -->
    <header class="main-header default">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-5">
                    <div class="logo-area default">
                        <a href="#">

                            <img src="{{asset(\App\Site::Icon())}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-8 col-7">
                    <div class="search-area default">
                        <form action="" class="search">
                            <input type="text" id="gsearchsimple"
                                   placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                            <ul class="list-group search-box-list">
                                <li class="list-group-item contsearch">
                                    <a href="#" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        گوشی موبایل
                                    </a>
                                </li>
                                <li class="list-group-item contsearch">
                                    <a href="#" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        لپ تاپ
                                    </a>
                                </li>
                                <li class="list-group-item contsearch">
                                    <a href="#" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        کفش
                                    </a>
                                </li>
                                <li class="list-group-item contsearch">
                                    <a href="#" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        مانتو
                                    </a>
                                </li>
                                <li class="list-group-item contsearch">
                                    <a href="#" class="gsearch">
                                        <i class="fa fa-clock-o"></i>
                                        لباس ورزشی
                                    </a>
                                </li>
                            </ul>
                            <div class="localSearchSimple"></div>
                            <button type="submit"><img src="{{asset('assets/img/search.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="user-login dropdown">
                        <a href="#" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown"
                           id="navbarDropdownMenuLink1">
                            @guest()
                                ورود
                            @endguest
                            @auth()
                                <img class="user-image" src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" width="40" height="40">
                                پنل کاربری
                            @endauth
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            @guest()
                                <div class="dropdown-item">
                                    <a class="btn btn-info" href="{{route('login')}}">ورود</a>
                                </div>
                            @endguest
                            @auth()
                                <div class="dropdown-item">
                                    <a href="#" class="dropdown-item-link">
                                        <i class="fa fa-user"></i>
                                        پروفایل
                                    </a>
                                </div>



                                <div class="dropdown-item">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="dropdown-item-link">
                                        <i class="fa fa-power-off"></i>

                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            @endauth
                        </ul>
                    </div>
                    <div class="cart dropdown">
                        <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" id="navbarDropdownMenuLink1">
                            <i class="fa fa-shopping-cart"></i>
                            سبد خرید
                            <span class="count-cart">{{\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->count()}}</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="basket-header">
                                <div class="basket-total">
                                    <span>مبلغ کل خرید:</span>
                                    <span> {{number_format(\App\WishList::Price(), 0, ',', ',')}}</span>
                                    <span> تومان</span>
                                </div>
                                <a href="{{route('Buy.WishListShow')}}" class="basket-link">
                                    <span>مشاهده سبد خرید</span>
                                    <div class="basket-arrow"></div>
                                </a>
                            </div>
                            <ul class="basket-list">
                                @foreach(\App\WishList::where('UserID' , Auth::id())->get() as $item)
                                <li>
                                    <a href="#" class="basket-item">
                                        <button class="basket-item-remove"></button>
                                        <div class="basket-item-content">
                                            <div class="basket-item-image">
                                                <img alt="" src="{{asset('assets/img/cart/2324935.jpg')}}">
                                            </div>
                                            <div class="basket-item-details">
                                                <div class="basket-item-title">هندزفری بلوتوث مدل S530
                                                </div>
                                                <div class="basket-item-params">
                                                    <div class="basket-item-props">
                                                        <span> ۱ عدد</span>
                                                        <span>رنگ مشکی</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <a href="#" class="basket-submit">ورود و ثبت سفارش</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-menu">
            <div class="container">
                <ul class="list float-right">
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="#">کالای دیجیتال</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">گوشی موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">ساعت هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">اسپیکر بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">کامپیوتر و
                                    تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="assets/img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="#">آرایشی،بهداشت و سلامت</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">گوشی
                                            موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">ساعت
                                            هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">اسپیکر
                                            بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">کامپیوتر و
                                    تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="assets/img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item list-item-has-children mega-menu mega-menu-col-5">
                        <a class="nav-link" href="">خودرو،ابزار و اداری</a>
                        <ul class="sub-menu nav">
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">لوازم
                                    جانبی گوشی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کیف و کاور گوشی</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پاور بانک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هندزفری،هدفون</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پایه نگهدارنده گوشی</a>
                                    </li>
                                    <li class="list-item list-item-has-children">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">گوشی
                                            موبایل</a>
                                        <ul class="sub-menu nav">
                                            <li class="list-item">
                                                <a class="nav-link" href="#">آیفون اپل</a>
                                            </li>
                                            <li class="list-item">
                                                <a class="nav-link" href="#">هوآوی</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">ساعت
                                            هوشمند</a>
                                    </li>
                                    <li class="list-item">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i><a
                                            class="main-list-item nav-link" href="#">اسپیکر
                                            بلوتوث و با سیم</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="main-list-item nav-link"
                                                                                     href="#">موبایل</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">LG</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nokia</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link" href="#">تبلت
                                    و کتابخوان</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Acer</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Amazon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Apple</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">ASUS</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">HTC</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Samsung</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">دوربین</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Canon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Casio</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Nikon</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">Sony</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-item list-item-has-children">
                                <i class="now-ui-icons arrows-1_minimal-left"></i><a class="nav-link"
                                                                                     href="#">کامپیوتر و
                                    تجهیزات
                                    جانبی</a>
                                <ul class="sub-menu nav">
                                    <li class="list-item">
                                        <a class="nav-link" href="#">هارد دیسک</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">نمایشگر</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">مادر بورد</a></li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">پردازنده</a>
                                    </li>
                                    <li class="list-item">
                                        <a class="nav-link" href="#">کارت گرافیک</a>
                                    </li>
                                </ul>
                            </li>
                            <img src="assets/img/1636.png" alt="">
                        </ul>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">مد و پوشاک</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">خانه و آشپزخانه</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">کتاب،لوازم تحریر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">ورزش و سفر</a>
                    </li>
                    <li class="list-item">
                        <a class="nav-link" href="#">وسایل نقلیه و صنعتی</a>
                    </li>
                    <li class="list-item amazing-item">
                        <a class="nav-link" href="#" target="_blank">شگفت‌انگیزها</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="overlay-search-box"></div>
    <!-- header -->


    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">پیام سایت</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div
                    class="modal-body">


                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                            <br>
                        @endforeach

                    @elseif(session('errors'))
                        {{session('errors')->first('msg')}}
                    @endif


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">متوجه شدم</button>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

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
<!--  LocalSearch -->
<script src="{{asset('assets/js/plugins/JsLocalSearch.js')}}" type="text/javascript"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/main.js')}}" type="text/javascript"></script>
@yield('js')
@if(session('errors'))
    <script type="text/javascript">
        $(window).on('load', function () {
            $('#myModal').modal('show');
        });
    </script>
@endif
</html>
