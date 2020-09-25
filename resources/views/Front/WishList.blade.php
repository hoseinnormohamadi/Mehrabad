@extends('layouts.Front')
@section('content')
    <main class="cart-page default">
        <div class="container">
            <div class="row">
                <div class="cart-page-content col-xl-9 col-lg-8 col-md-12 order-1">
                    <div class="cart-page-title">
                        <h1>سبد خرید</h1>
                    </div>
                    <div class="table-responsive checkout-content default">
                        <table class="table">
                            <tbody>
                            @if(\App\WishList::Wishes() != null)
                                @foreach(\App\WishList::Wishes() as $product)
                                    <tr class="checkout-item">
                                        <td>
                                            <img src="{{json_decode($product->Images)[0]}}" width="150" height="150"
                                                 alt="">
                                            <a href="{{route('Buy.Remove' , $product->id)}}">
                                                <button class="checkout-btn-remove"></button>
                                            </a>
                                        </td>
                                        <td>
                                            <h3 class="checkout-title">
                                                {{$product->Name}}
                                            </h3>
                                        </td>
                                        <td>
                                            @if($product->Takhfif != null)
                                                <del>
                                                    <span> {{  number_format($product->Price, 0, ',', ',')}} تومان </span>
                                                </del><br>
                                                <span style="color: red"> {{  number_format($product->Takhfif, 0, ',', ',')}} تومان </span>
                                            @else
                                                <span style="color: red"> {{  number_format($product->Price, 0, ',', ',')}} تومان </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="?Action=AddOne&ID={{\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->where('ProductID' , $product->id)->get()[0]->id}}">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <p>
                                                {{\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->where('ProductID' , $product->id)->get()[0]->Count}}
                                            </p>
                                            <a href="?Action=RemoveOne&ID={{\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->where('ProductID' , $product->id)->get()[0]->id}}">
                                                <i class="fa fa-minus-circle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="checkout-item">
                                    <td>
                                        <h3 class="checkout-title">
                                            {!! "هنوز چیزی به سبد خرید خود اضافه نکرده اید.<br><a href='/'>خرید خود را ادامه دهید</a>" !!}
                                        </h3>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <aside class="cart-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-2">
                    <div class="checkout-aside">
                        <div class="checkout-summary">
                            <div class="checkout-summary-main">
                                <ul class="checkout-summary-summary">
                                    <li><span>مبلغ کل بدون تخفیف : </span><span>{{number_format(\App\WishList::AllPrice(), 0, ',', ',')}} تومان </span>
                                    </li>
                                </ul>
                                <div class="checkout-summary-devider">
                                    <div></div>
                                </div>
                                <div class="checkout-summary-content">
                                    <div class="checkout-summary-price-title">مبلغ قابل پرداخت:</div>
                                    <div class="checkout-summary-price-value">
                                        <span
                                            class="checkout-summary-price-value-amount">{{number_format(\App\WishList::Price(), 0, ',', ',')}}</span>تومان
                                    </div>
                                    @if(\App\WishList::where('UserID' , \Illuminate\Support\Facades\Auth::id())->count() <= 0)

                                        <a href="{{route('Index')}}" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-danger">
                                                    ادامه خرید
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>

                                    @else

                                        <a href="{{route('Buy.Buy')}}" class="selenium-next-step-shipping">
                                            <div class="parent-btn">
                                                <button class="dk-btn dk-btn-info">
                                                    ادامه ثبت سفارش
                                                    <i class="now-ui-icons shopping_basket"></i>
                                                </button>
                                            </div>
                                        </a>

                                    @endif

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


