@extends('layouts.Panel')
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">افزودن کاربر</h3>
            </div>
            <form method="post" action="{{route('Users.Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="FirstName">نام</label>
                        <input type="text" id="FirstName" class="form-control" name="FirstName" >
                    </div>







                    <div class="form-group">
                        <label for="LastName">نام خانوادگی</label>
                        <input type="text" id="LastName" class="form-control" name="LastName" >
                    </div>





                    <div class="form-group">
                        <label for="PhoneNumber">شماره تماس</label>
                        <input type="number" id="PhoneNumber" class="form-control" name="PhoneNumber" >
                    </div>



                    <div class="form-group">
                        <label for="CodeMeli">کد ملی</label>
                        <input type="number" id="CodeMeli" class="form-control" name="CodeMeli" >
                    </div>



                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <input type="password" id="password" class="form-control" name="password" >
                    </div>


                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="email" id="email" class="form-control" name="email" >
                    </div>








                    <div class="form-group">
                        <label for="Count" >وضعیت کاربر</label>
                        <select class="form-control" name="AccountStatus">
                            <option selected disabled>وضعیت کاربر را انتحاب کنید</option>
                            <option value="Active">فعال</option>
                            <option value="DeActive">غیر فعال</option>
                        </select>
                    </div>




                    <div class="form-group">
                        <label for="Image">تصویر کاربر</label>
                        <input type="file" name="Image" id="Image" accept="image/*" multiple/>
                    </div>



                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ایجاد کاربر</button>
                </div>
            </form>



        </div>

    </section>

@endsection

