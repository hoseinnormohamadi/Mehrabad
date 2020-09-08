@extends('layouts.app')

@section('content')

    <div class="account-box">
        <a href="#" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
        </a>
        <div class="account-box-title text-right">ورود به تاپ کالا</div>
        <div class="account-box-content">
            <form method="POST" class="form-account" action="{{ route('login') }}">
                @csrf
                <div class="form-account-title">کد ملی</div>
                <div class="form-account-row">
                    <label class="input-label"><i class="now-ui-icons users_single-02"></i></label>
                    <input class="input-field" type="text"
                           placeholder="کد ملی خود را وارد کنید" name="CodeMeli">
                </div>
                @error('CodeMeli')

                <span class="text text-danger" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>

                @enderror
                <div class="form-account-title">رمز عبور


                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="btn-link-border form-account-link">رمز
                            عبور خود را فراموش
                            کرده ام</a>
                    @endif


                </div>
                <div class="form-account-row">
                    <label class="input-label"><i
                            class="now-ui-icons ui-1_lock-circle-open"></i></label>
                    <input class="input-field" type="password"
                           placeholder="رمز عبور خود را وارد نمایید" name="password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-account-row form-account-submit">
                    <div class="parent-btn">
                        <button class="dk-btn dk-btn-info">
                            ورود
                            <i class="fa fa-sign-in"></i>
                        </button>
                    </div>
                </div>
                <div class="form-account-agree">
                    <label class="checkbox-form checkbox-primary">
                        <input type="checkbox" checked="checked" id="agree">
                        <span class="checkbox-check"></span>
                    </label>
                    <label for="agree">مرا به خاطر داشته باش</label>
                </div>
            </form>
        </div>
    </div>

@endsection

