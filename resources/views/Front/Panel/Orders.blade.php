@extends('layouts.Front')
@section('content')
    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-12">
                                <h1 class="title-tab-content">همه سفارش ها</h1>
                            </div>
                            <div class="content-section default">
                                <div class="table-responsive">
                                    <table class="table table-order">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">شماره سفارش</th>
                                            <th scope="col">تاریخ ثبت سفارش</th>
                                            <th scope="col">مبلغ کل</th>
                                            <th scope="col">جزئیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td class="order-code">{{$order->id}}</td>
                                            <td>{{\Hekmatinasser\Verta\Verta::instance($order->created_at)->format('%d %B  %Y')}}</td>
                                            <td>{{number_format($order->Price, 0, ',', ',')}} تومان </td>
                                            <td>
                                                @foreach(json_decode($order->ProductsID) as $item)
                                                    <img src="{{json_decode(\App\Shop::find($item)->Images)[0]}}" width="24px">
                                                    <p>{{\App\Shop::find($item)->Name}}</p>
                                                @endforeach
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
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

                                <a href="{{route('Panel.Index')}}" class="dropdown-item ">
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>

                                <a href="{{route('Panel.Orders')}}" class="dropdown-item active-menu">
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
                                <a href="{{route('Panel.Index')}}" >
                                    <i class="now-ui-icons users_single-02"></i>
                                    پروفایل
                                </a>
                            </li>
                            <li>
                                <a href="{{route('Panel.Orders')}}" class="active">
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
