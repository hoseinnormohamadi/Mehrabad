@extends('layouts.Front')
@section('content')
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="col-12">
                                <h1 class="title-tab-content">اطلاعات شخصی</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p>
                                            <span class="title">نام و نام خانوادگی :</span>
                                            <span>{{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' .  \Illuminate\Support\Facades\Auth::user()->LastName}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p>
                                            <span class="title">پست الکترونیک :</span>
                                            <span>{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p>
                                            <span class="title">شماره تلفن همراه:</span>
                                            <span>{{\Illuminate\Support\Facades\Auth::user()->PhoneNumber}}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p>
                                            <span class="title">کد ملی :</span>
                                            <span>{{\Illuminate\Support\Facades\Auth::user()->CodeMeli}}</span>
                                        </p>
                                    </div>
                                    <div class="col-12 text-center">
                                        <a href="{{route('Panel.Edit')}}" class="btn-link-border form-account-link">
                                            ویرایش اطلاعات شخصی
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-12">
                                <h1 class="title-tab-content">لیست آخرین محصولات در سبد خرید</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        @if(count(\App\WishList::Wishes()) > 0)
                                        @foreach(\App\WishList::Wishes() as $wish)
                                        <div class="profile-recent-fav-row">
                                            <a href="#" class="profile-recent-fav-col profile-recent-fav-col-thumb">
                                                <img src="{{json_decode($wish->Images)[0]}}"></a>
                                            <div class="profile-recent-fav-col profile-recent-fav-col-title">
                                                <a href="#">
                                                    <h4 class="profile-recent-fav-name">
                                                        {{$wish->Name}}
                                                    </h4>
                                                </a>
                                                <div class="profile-recent-fav-price">
                                                    @if($wish->Count <= 0)
                                                        ناموجود
                                                    @else
                                                        {{number_format($wish->Price, 0, ',', ',')}} تومان
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="profile-recent-fav-col profile-recent-fav-col-actions">
                                                <a href="{{route('Buy.Remove' , $wish->id)}}">
                                                <button class="btn-action btn-action-remove">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                            محصولی در سبد خرید شما موجود نمیباشد
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="profile-page-aside col-xl-3 col-lg-4 col-md-6 center-section order-1">
                    <div class="profile-box">
                        <div class="profile-box-header">
                            <div class="profile-box-avatar">
                                <img src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" alt="">
                            </div>
                        </div>
                        <div class="profile-box-username">{{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' .  \Illuminate\Support\Facades\Auth::user()->LastName}}</div>
                        <div class="profile-box-tabs">
                            <a href="{{route('Panel.Password')}}" class="profile-box-tab profile-box-tab-access">
                                <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                تغییر رمز
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="profile-box-tab profile-box-tab--sign-out">
                                <i class="now-ui-icons media-1_button-power"></i>
                                خروج از حساب
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="responsive-profile-menu show-md">
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-navicon"></i>
                                حساب کاربری شما
                            </button>
                            <div class="dropdown-menu dropdown-menu-right text-right">
                                <a href="{{route('Panel.Index')}}" class="dropdown-item active-menu">
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>
                                <a href="{{route('Panel.Orders')}}" class="dropdown-item">
                                    <i class="now-ui-icons shopping_basket"></i>
                                    همه سفارش ها
                                </a>
                                <a href="{{route('Panel.Edit')}}" class="dropdown-item">
                                    <i class="now-ui-icons business_badge"></i>
                                    اطلاعات شخصی
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu hidden-md">
                        <div class="profile-menu-header">حساب کاربری شما</div>
                        <ul class="profile-menu-items">
                            <li>
                                <a href="{{route('Panel.Index')}}" class="active">
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Panel.Orders')}}">
                                    <i class="now-ui-icons shopping_basket"></i>
                                    همه سفارش ها
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Panel.Edit')}}">
                                    <i class="now-ui-icons business_badge"></i>
                                    اطلاعات شخصی
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
