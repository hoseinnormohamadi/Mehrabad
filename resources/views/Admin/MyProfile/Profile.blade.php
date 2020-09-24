@extends('layouts.Panel')
@section('content')
    <section class="content">

        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">تنظیمات عمومی</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">تنظیمات امنیتی</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                    <form method="post" action="{{route('MyProfile.General')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">


                            <div class="form-group">
                                <label for="Name">نام</label>
                                <input type="text" id="Name" class="form-control" name="FirstName"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->FirstName}}" >
                            </div>

                            <div class="form-group">
                                <label for="LastName">نام خانوادگی</label>
                                <input type="text" id="LastName" class="form-control" name="LastName"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->LastName}}" >
                            </div>




                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="text" id="email" class="form-control" name="email"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                            </div>


                            <div class="form-group">
                                <label for="PhoneNumber">شماره تماس</label>
                                <input type="number" id="PhoneNumber" class="form-control" name="PhoneNumber"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->PhoneNumber}}">
                            </div>




                            <div class="form-group">
                                <label for="Image">عکس پروفایل</label>
                                <input type="file" name="Image" id="Image" accept="image/*"/>
                                <img src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" width="250" height="250">
                            </div>



                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">بروزرسانی</button>
                        </div>
                    </form>


                </div>

                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    <form method="post" action="{{route('MyProfile.Security')}}">
                        @csrf
                        <div class="box-body">


                            <div class="form-group">
                                <label for="OldPassword">کلمه عبور فعلی</label>
                                <input type="password" id="OldPassword" class="form-control" name="OldPassword">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">کلمه عبور جدید</label>
                                    <input type="password" class="form-control @error('password') border border-danger @enderror" id="password" name="password" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">تکرار کلمه عبور جدید</label>
                                    <input type="password" class="form-control @error('password_confirmation') border border-danger @enderror" id="password_confirmation" name="password_confirmation" required>
                                </div>
                            </div>


                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">بروزرسانی</button>
                        </div>
                    </form>


                </div>

            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </section>



@endsection

