@extends('layouts.Panel')
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">افزودن برند</h3>
            </div>
            <form method="post" action="{{route('Brand.Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام برند</label>
                        <input type="text" id="Name" class="form-control" name="Name" >
                    </div>


                    <div class="form-group">
                        <label for="Image">تصویر برند</label>
                        <input type="file" name="Image" id="Image" accept="image/*" multiple/>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ایجاد برند</button>
                </div>
            </form>



        </div>

    </section>

@endsection

