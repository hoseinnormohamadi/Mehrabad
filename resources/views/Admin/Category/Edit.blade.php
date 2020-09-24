@extends('layouts.Panel')
@section('content')
    <section class="content">

    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ویرایش دسته بندی</h3>
            </div>
            <form method="POST" action="/Dashboard/Category/Update/{{$Category->id}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام دسته بندی</label>
                        <input type="text" id="Name" class="form-control" name="Name" placeholder="نام دسته بندی" value="{{$Category->Name}}">
                    </div>





                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">بروزرسانی دسته بندی</button>
                </div>
            </form>
        </div>

    </div>
    </section>
@endsection
