@extends('layouts.Front')
@section('content')
    <main class="main default">
        <div class="container">
            <!-- banner -->
            <div class="row banner-ads">
                <div class="col-12">
                    <section class="banner">
                        <a href="#">
                            <img src="assets/img/banner/banner.jpg" alt="">
                        </a>
                    </section>
                </div>
            </div>
            <!-- banner -->
            <div class="row">
                <aside class="sidebar col-12 col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-inner default">
                        <div class="widget-banner widget card">
                            <a href="#" target="_top">
                                <img class="img-fluid" src="assets/img/banner/1455.jpg" alt="">
                            </a>
                        </div>
                        <div class="widget-services widget card">
                            <div class="row">
                                <div class="feature-item col-12">
                                    <a href="#" target="_blank">
                                        <img src="assets/img/svg/return-policy.svg">
                                    </a>
                                    <p>ضمانت برگشت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="assets/img/svg/payment-terms.svg">
                                    </a>
                                    <p>پرداخت درمحل</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="assets/img/svg/delivery.svg">
                                    </a>
                                    <p>تحویل اکسپرس</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="assets/img/svg/origin-guarantee.svg">
                                    </a>
                                    <p>تضمین بهترین قیمت</p>
                                </div>
                                <div class="feature-item col-6">
                                    <a href="#" target="_blank">
                                        <img src="assets/img/svg/contact-us.svg">
                                    </a>
                                    <p>پشتیبانی 24 ساعته</p>
                                </div>
                            </div>
                        </div>
                        <div class="widget-suggestion widget card">
                            <header class="card-header">
                                <h3 class="card-title">پیشنهاد لحظه ای</h3>
                            </header>
                            <div id="progressBar">
                                <div class="slide-progress"></div>
                            </div>
                            <div id="suggestion-slider" class="owl-carousel owl-theme">
                                @foreach(\App\Shop::inRandomOrder()->limit(5)->get() as $item)

                                    <div class="item">
                                        <a href="#">
                                            <img src="{{json_decode($item->Images)[0]}}" class="w-100" alt="">
                                        </a>
                                        <h3 class="product-title">
                                            <a href="#">{{$item->Name}}</a>
                                        </h3>
                                        <div class="price">
                                            <span class="amount">{{number_format($item->Price, 0, ',', ',')}}<span>تومان</span></span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>





                        <div class="widget-suggestion widget card">
                            <header class="card-header">
                                <h3 class="card-title">پیشنهاد برای شما</h3>
                            </header>

                           @php
                            $Data = \App\Shop::inRandomOrder()->limit(1)->get();
                            @endphp

                            <div class="item">
                                <a href="{{route('Product' , $Data[0]->id)}}">
                                    <img src="{{json_decode($Data[0]->Images)[0]}}" class="w-100" alt="">
                                </a>
                                <h3 class="product-title">
                                    <a href="{{route('Product' , $Data[0]->id)}}">{{$Data[0]->Name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="amount">{{number_format($Data[0]->Price, 0, ',', ',')}}<span>تومان</span></span>
                                </div>
                            </div>



                        </div>
                    </div>
                </aside>
                <div class="col-12 col-lg-9 order-1 order-lg-2">

                    {{--

                    <section id="main-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                        <ol class="carousel-indicators">

                            @for($i = 0;$i < \App\Slider::all()->count();$i++)
                                <li data-target="#main-slider" data-slide-to="{{$i}}"
                                    @if($i == 0) class="active" @endif></li>
                            @endfor
                        </ol>
                        <div class="carousel-inner">
                            @foreach(\App\Slider::all() as $slider)
                                <div class="carousel-item active">
                                    <a class="d-block" href="#">
                                        <img src="{{$slider->Image}}"
                                             class="d-block w-100" alt="" height="500">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                            <i class="now-ui-icons arrows-1_minimal-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider" data-slide="next">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>
                        </a>
                    </section>

                   --}}


                    <section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                        <div class="row m-0">
                            <ol class="carousel-indicators pr-0 d-flex flex-column col-lg-3">
                                @foreach(\App\Shop::where('Amazing' , 'Yes')->limit(8)->get() as $shop)
                                    <li @if($shop->id == 1)class="active" @endif data-target="#amazing-slider"
                                        data-slide-to="{{$shop->id}}">
                                        <span>{{$shop->Name}}</span>
                                    </li>
                                @endforeach


                                <li class="view-all">
                                    <a href="{{route('Amazing')}}" class="btn btn-primary btn-block hvr-sweep-to-left">
                                        <i class="fa fa-arrow-left"></i>مشاهده همه شگفت انگیزها
                                    </a>
                                </li>
                            </ol>
                            <div class="carousel-inner p-0 col-12 col-lg-9">
                                <img class="amazing-title" src="{{asset('assets/img/amazing-slider/amazing-title-01.png')}}"
                                     alt="">
                                @foreach(\App\Shop::where('Amazing' , 'Yes')->limit(8)->get() as $shop)
                                    <div class="carousel-item @if($shop->id == 1) active @endif">
                                        <div class="row m-0">
                                            <div class="right-col col-5 d-flex align-items-center">
                                                <a class="w-100 text-center" href="{{route('Product' , $shop->id)}}">
                                                    <img src="{{json_decode($shop->Images)[0]}}"
                                                         class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="left-col col-7">
                                                <div class="price">
                                                    @if($shop->Takhfif != null)
                                                        <small>قبل تخفیف</small>
                                                        <del><span> {{  number_format($shop->Price, 0, ',', ',')}} تومان </span></del>
                                                        <br>
                                                        <small>بعد از تخفیف</small>
                                                        <span class="price-currency"> {{  number_format($shop->Takhfif, 0, ',', ',')}} تومان </span>
                                                    @else
                                                        <span class="price-currency"> {{  number_format($shop->Price, 0, ',', ',')}} تومان </span>

                                                    @endif

                                                </div>
                                                <h2 class="product-title">
                                                    <a href="{{route('Product' , $shop->id)}}">{{$shop->Name}}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    {{--<div class="row" id="amazing-slider-responsive">
                        <div class="col-12">
                            <div class="widget widget-product card">
                                <header class="card-header">
                                    <img src="assets/img/amazing-slider/amazing-title-01.png" width="150px" alt="">
                                    <a href="#" class="view-all">مشاهده همه</a>
                                </header>
                                <div class="product-carousel owl-carousel owl-theme">
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,180,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>6,580,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,699,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>2,780,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>8,899,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>4,279,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                                 class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                        </h2>
                                        <div class="price">
                                            <ins><span>18,450,000<span>تومان</span></span></ins>
                                        </div>
                                        <hr>
                                        <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                            <span data-days>0</span>:
                                            <span data-hours>0</span>:
                                            <span data-minutes>0</span>:
                                            <span data-seconds>0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}



                    <div class="row banner-ads">
                        <div class="col-12">
                            <div class="row">
                                @foreach(\App\Ads::inRandomOrder()->limit(4)->get() as $ad)
                                <div class="col-6 col-lg-3">
                                    <div class="widget-banner card">
                                        <a href="{{$ad->Link}}" target="_blank">
                                            <img class="img-fluid" src="{{$ad->Image}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    @foreach(\App\ShopCategory::inRandomOrder()->limit(4)->get() as $category)
                        <div class="row">
                            <div class="col-12">
                                <div class="widget widget-product card">
                                    <header class="card-header">
                                        <h3 class="card-title">
                                            <span>{{$category->Name}}</span>
                                        </h3>
                                        <a href="{{route('Category' , $category->id)}}" class="view-all">مشاهده همه</a>
                                    </header>
                                    <div class="product-carousel owl-carousel owl-theme">
                                        @foreach(\App\Shop::where('Category',$category->id)->inRandomOrder()->limit(6)->get() as $item)
                                            <div class="item">
                                                <a href="{{route('Product' , $item->id)}}">
                                                    <img src="{{json_decode($item->Images)[0]}}"
                                                         class="img-fluid" alt="">
                                                </a>
                                                <h2 class="post-title">
                                                    <a href="{{route('Product' , $item->id)}}">{{$item->Name}}</a>
                                                </h2>
                                                <div class="price">
                                                    <div class="text-center">
                                                        @if($item->Takhfif != null)
                                                            <del><span> {{  number_format($item->Price, 0, ',', ',')}} تومان </span></del>
                                                            <span> {{  number_format($item->Takhfif, 0, ',', ',')}} تومان </span>
                                                        @else
                                                            <span> {{  number_format($item->Price, 0, ',', ',')}} تومان </span>

                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="brand-slider card">
                        <header class="card-header">
                            <h3 class="card-title"><span>برندهای ویژه</span></h3>
                        </header>
                        <div class="owl-carousel">
                            @foreach(\App\Brands::all() as $brands)
                            <div class="item">
                                <a>
                                    <img src="{{$brands->Image}}" alt="Brand" >
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
