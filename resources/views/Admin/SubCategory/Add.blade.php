@extends('layouts.Panel')
@section('content')
    <section class="content">

    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">افزودن زیر دسته بندی</h3>
            </div>
            <form method="post" action="{{route('SubCategory.Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام دسته بندی</label>
                        <input type="text" id="Name" class="form-control" name="Name" placeholder="نام دسته بندی">
                    </div>

                    <div class="form-group">
                        <label for="Count">دسته بندی مادر</label>
                        <select class="form-control" name="Parent">
                            <option selected disabled>دسته بندی مادر را انتحاب کنید</option>
                            @foreach($Tags as $Tag)
                                <option value="{{$Tag->id}}">{{$Tag->Name}}</option>
                            @endforeach
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
