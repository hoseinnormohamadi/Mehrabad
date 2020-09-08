@extends('layouts.app')

@section('content')

    <section class="logina-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-area register-from">
                        <div class="form-content">
                            <h2>ثبت نام</h2>
                            <p>{{config('Site.Register-Text')}}</p>
                        </div>
                        <div class="form-input">
                            <h2>فرم ثبت نام</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="@error('name') border border-danger @enderror" name="FirstName" value="{{ old('name') }}" required autocomplete="name" autofocus  />
                                    <label>نام کاربری</label>
                                </div>


                                <div class="form-group">
                                    <input type="text" class="@error('name') border border-danger @enderror" name="LastName" value="{{ old('name') }}" required autocomplete="name" autofocus  />
                                    <label>نام کاربری</label>
                                </div>





                                <div class="form-group">
                                    <input type="text" class="@error('name') border border-danger @enderror" name="CodeMeli" value="{{ old('name') }}" required autocomplete="name" autofocus  />
                                    <label>نام کاربری</label>
                                </div>





                                <div class="form-group">
                                    <input type="email"  class="@error('email') border border-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label>ایمیل</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password"  class="@error('password') border border-danger @enderror"
                                                   name="password" required autocomplete="new-password">
                                            <label>کلمه عبور</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="password"  class="@error('password_confirmation') border border-danger @enderror" name="password_confirmation" required autocomplete="new-password">
                                            <label>تکرار کلمه عبور</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-text">
                                    <span>آیا قبلا ثبت نام کردید؟ <a href="/login">وارد شوید</a></span>
                                </div>
                                <div class="logina-button">
                                    <button type="submit" class="logina-btn">ثبت نام</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
