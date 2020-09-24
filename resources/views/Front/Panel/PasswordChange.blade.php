@extends('layouts.app')
@section('content')
    <div class="account-box">
        <a href="#" class="logo">
            <img src="{{asset(\App\Site::Icon())}}" alt="">
        </a>
        <div class="account-box-title">تغییر رمز عبور</div>
        <div class="account-box-content">
            <form class="form-account" method="post" action="{{route('Panel.ChangePassword')}}">
                @csrf
                <div class="form-account-title">رمز عبور قبلی</div>
                <div class="form-account-row">
                    <label class="input-label"><i
                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                    <input class="input-field" type="password"
                           placeholder="رمز عبور قبلی خود را وارد نمایید" name="OldPassword">
                </div>
                <div class="form-account-title">رمز عبور جدید</div>
                <div class="form-account-row">
                    <label class="input-label"><i
                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                    <input class="input-field" type="password"
                           placeholder="رمز عبور جدید خود را وارد نمایید" name="password">
                </div>
                <div class="form-account-title">تکرار رمز عبور جدید</div>
                <div class="form-account-row">
                    <label class="input-label"><i
                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                    <input class="input-field" type="password"
                           placeholder="رمز عبور جدید خود را مجددا وارد نمایید" name="password_confirmation">
                </div>
                <div class="form-account-row form-account-submit">
                    <div class="parent-btn">
                        <button class="dk-btn dk-btn-info" type="submit">
                            تغییر رمز عبور
                            <i class="now-ui-icons arrows-1_refresh-69"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
