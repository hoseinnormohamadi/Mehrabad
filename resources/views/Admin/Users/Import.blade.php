@extends('layouts.Panel')
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">افزودن کاربر</h3>
            </div>
            <form method="post" action="{{route('Users.ImportExel')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label for="Exel">فایل اکسل کاربران</label>
                        <input type="file" name="Exel" id="Exel" />
                    </div>


                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ایجاد کاربر</button>
                </div>
            </form>



        </div>

    </section>

@endsection

