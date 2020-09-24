@extends('layouts.Panel')
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ویرایش تبلیغات</h3>
            </div>
            <form method="post" action="{{route('Ad.Update' , $Ads->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام تلبیغ</label>
                        <input type="text" id="Name" class="form-control" name="Name" value="{{$Ads->Name}}">
                    </div>



                    <div class="form-group">
                        <label for="Link">لینک تلبیغ</label>
                        <input type="text" id="Link" class="form-control" name="Link" value="{{$Ads->Link}}">
                    </div>





                    <div class="form-group">
                        <label for="Image">تصویر تلبیغ</label>
                        <input type="file" name="Image" id="Image" accept="image/*" multiple/>
                        <img src="{{$Ads->Image}}" width="250" height="250">

                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">بروزرسانی تبلیغ</button>
                </div>
            </form>



        </div>

    </section>

@endsection

