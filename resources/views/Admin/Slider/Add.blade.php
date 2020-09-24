@extends('layouts.Panel')
@section('content')
    <section class="content">

    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">افزودن دسته بندی</h3>
            </div>
            <form method="post" action="{{route('Slider.Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام اسلایدر</label>
                        <input type="text" id="Name" class="form-control" name="Name" >
                    </div>




                    <div class="form-group">
                        <label for="Image">تصاویر اسلایدر</label>
                        <input type="file" name="Image" id="Image" accept="image/*"/>
                    </div>




                    <div class="form-group">
                        <label for="Count" >وضعیت اسلایدر</label>
                        <select class="form-control" name="Status">
                            <option selected disabled>وضعیت محصول را انتحاب کنید</option>
                            <option value="Active">موجود</option>
                            <option value="DeActive">نا موجود</option>
                        </select>
                    </div>




                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ایجاد دسته بندی</button>
                </div>
            </form>
        </div>

    </div>
    </section>
@endsection
