@extends('layouts.Front')
@section('content')
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12">
                                <h1 class="title-tab-content">ویرایش اطلاعات شخصی</h1>
                            </div>
                            <div class="content-section default">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="title-tab-content">حساب شخصی</h1>
                                    </div>
                                </div>
                                <form class="form-account" action="{{route('Panel.Update')}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">نام</div>
                                            <div class="form-account-row">
                                                <input name="FirstName" class="input-field text-right" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->FirstName}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">نام خانوادگی</div>
                                            <div class="form-account-row">
                                                <input name="LastName" class="input-field text-right" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->LastName}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">کد ملی</div>
                                            <div class="form-account-row">
                                                <input disabled class="input-field" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->CodeMeli}}">
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">شماره موبایل</div>
                                            <div class="form-account-row">
                                                <input name="PhoneNumber" class="input-field" type="text" value="{{\Illuminate\Support\Facades\Auth::user()->PhoneNumber}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-account-title">آدرس ایمیل</div>
                                            <div class="form-account-row">
                                                <input name="email" class="input-field" type="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button class="btn btn-default btn-lg">ذخیره</button>
                                    </div>
                                </form>
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
                            <a href="{{route('Panel.ChangePassword')}}" class="profile-box-tab profile-box-tab-access">
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

                                <a href="{{route('Panel.Index')}}" class="dropdown-item ">
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>

                                <a href="{{route('Panel.Orders')}}" class="dropdown-item active-menu">
                                    <i class="now-ui-icons shopping_basket"></i>
                                    همه سفارش ها
                                </a>

                                <a href="{{route('Panel.Edit')}}">
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
                                <a href="{{route('Panel.Index')}}" >
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Panel.Orders')}}" >
                                    <i class="now-ui-icons shopping_basket"></i>
                                    همه سفارش ها
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Panel.Edit')}}" class="active">
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
