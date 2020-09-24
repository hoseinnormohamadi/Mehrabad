@extends('layouts.Panel')
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ویرایش برند</h3>
            </div>
            <form method="post" action="{{route('Brand.Update' , $Brands->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام برند</label>
                        <input type="text" id="Name" class="form-control" name="Name" value="{{$Brands->Name}}">
                    </div>


                    <div class="form-group">
                        <label for="Image">تصویر برند</label>
                        <input type="file" name="Image" id="Image" accept="image/*" multiple/>
                        <img src="{{$Brands->Image}}" width="250" height="250">
                    </div>



                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">بروزرسانی تبلیغ</button>
                </div>
            </form>



        </div>

    </section>

@endsection

