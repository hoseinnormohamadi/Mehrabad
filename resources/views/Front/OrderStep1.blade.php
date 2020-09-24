@extends('layouts.Shoping')
@section('content')
    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">
                    <div class="cart-page-title">
                        <h1>تایید سفارش</h1>
                    </div>
                    <section class="page-content default">
                        <div class="address-section">
                            <div class="checkout-contact">
                                <div class="checkout-contact-content">
                                    <ul class="checkout-contact-items">
                                        <li class="checkout-contact-item">
                                            گیرنده:
                                            <span class="full-name">{{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' . \Illuminate\Support\Facades\Auth::user()->LastName}}</span>
                                        </li>
                                        <li class="checkout-contact-item">
                                            <div class="checkout-contact-item checkout-contact-item-mobile">
                                                شماره تماس:
                                                <span class="mobile-phone">{{\Illuminate\Support\Facades\Auth::user()->PhoneNumber}}</span>
                                            </div>
                                            <div class="checkout-contact-item-message">
                                                کد ملی:
                                                <span class="post-code">{{\Illuminate\Support\Facades\Auth::user()->CodeMeli}}</span>
                                            </div>
                                            <br>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <form method="post" id="shipping-data-form">
                            <div class="checkout-pack">
                                <section class="products-compact">
                                    <div class="box">
                                        <div class="row">
                                            @if(\App\WishList::Wishes() != null)
                                                @foreach(\App\WishList::Wishes() as $product)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="product-box-container">
                                                    <div class="product-box product-box-compact">
                                                        <a class="product-box-img">
                                                            <img src="{{json_decode($product->Images)[0]}}">
                                                        </a>
                                                        <div class="product-box-title"> {{$product->Name}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @else
                                                {!! "هنوز چیزی به سبد خرید خود اضافه نکرده اید.<br><a href='/'>خرید خود را ادامه دهید</a>" !!}
                                            @endif
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </form>
                    </section>
                </div>

                <aside class="cart-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-2">
                    <div class="checkout-aside">
                        <div class="checkout-summary">
                            <div class="checkout-summary-main">
                                <ul class="checkout-summary-summary">
                                    <li><span>مبلغ کل بدون تخفیف : </span><span>{{number_format(\App\WishList::AllPrice(), 0, ',', ',')}} تومان </span></li>
                                </ul>
                                <div class="checkout-summary-devider">
                                    <div></div>
                                </div>
                                <div class="checkout-summary-content">
                                    <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                    <div class="checkout-summary-price-value">
                                        <span class="checkout-summary-price-value-amount">{{number_format(\App\WishList::Price(), 0, ',', ',')}}</span>تومان
                                    </div>
                                    <form method="get" action="{{route('Buy.Complete')}}">
                                        <div class="parent-btn">
                                            <label>زمان تحویل کالا :‌</label>
                                            <input class="form-control" type="date" name="OrderDate">
                                        </div>
                                        <div class="parent-btn">
                                            <button type="submit" class="dk-btn @if(\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->count() <= 0) dk-btn-danger @else dk-btn-info @endif" @if(\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->count() <= 0) disabled @endif>
                                                خرید
                                                <i class="now-ui-icons shopping_basket"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <div>
                                            <span>
                                                کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی
                                                را تکمیل
                                                کنید.
                                            </span>
                                        <span class="wiki wiki-holder"><span class="wiki-sign"></span>
                                                <div class="wiki-container is-right">
                                                    <div class="wiki-arrow"></div>
                                                    <p class="wiki-text">
                                                        محصولات موجود در سبد خرید شما تنها در صورت ثبت و پرداخت سفارش
                                                        برای شما رزرو
                                                        می‌شوند. در
                                                        صورت عدم ثبت سفارش، تاپ کالا هیچگونه مسئولیتی در قبال تغییر
                                                        قیمت یا موجودی
                                                        این کالاها
                                                        ندارد.
                                                    </p>
                                                </div>
                                            </span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="checkout-feature-aside">
                            <ul>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-guarantee">
                                    هفت روز
                                    ضمانت تعویض
                                </li>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-cash">
                                    پرداخت در محل با
                                    کارت بانکی
                                </li>
                                <li class="checkout-feature-aside-item checkout-feature-aside-item-express">
                                    تحویل اکسپرس
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>


            </div>
        </div>
    </main>

@endsection
