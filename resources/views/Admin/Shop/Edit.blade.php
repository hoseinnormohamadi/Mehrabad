@extends('layouts.Panel')
@section('Head')

    <script src="{{asset('AdminAssets/bower_components/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'advlist autolink link lists preview table code pagebreak',
            menubar: false,
            language: 'fa',
            height: 300,
            relative_urls: false,
            toolbar: 'undo redo | removeformat preview code | fontsizeselect bullist numlist | alignleft aligncenter alignright alignjustify | bold italic | pagebreak table link',
        });

    </script>


@endsection
@section('content')
    <section class="content">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ویرایش محصول</h3>
            </div>
            <form method="post" action="{{route('Shop.Update' , $Item->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام محصول</label>
                        <input type="text" id="Name" class="form-control" name="Name" placeholder="نام دسته بندی" value="{{$Item->Name}}">
                    </div>


                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">توضیحات محصول</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                                <textarea id="mytextarea"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="Description">{{$Item->Description}}</textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="Images">تصاویر محصول</label>
                        <input type="file" name="Images[]" id="Images" accept="image/*" multiple/>
                    </div>




                    <div class="form-group">
                        <label for="Price">قیمت محصول</label>
                        <div class="input-group">
                            <input type="number" name="Price" id="Price" class="form-control" value="{{$Item->Price}}">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="Takhfif">قیمت محصول بعد از تخفیف</label>
                        <div class="input-group">
                            <input type="number" name="Takhfif" id="Takhfif" class="form-control"  value="{{$Item->Takhfif}}">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="Count">موجودی محصول</label>
                        <div class="input-group">
                            <input type="number" name="Count" id="Count" class="form-control" value="{{$Item->Count}}">
                            <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="Count" >وضعیت محصول</label>
                        <select class="form-control" name="Status">
                            <option selected disabled>وضعیت محصول را انتحاب کنید</option>
                            <option value="Available" @if($Item->Status == 'Available') selected @endif>موجود</option>
                            <option value="UnAvailable" @if($Item->Status == 'UnAvailable') selected @endif>نا موجود</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="Count">دسته بندی محصول</label>
                        <select class="form-control" name="Category">
                            <option selected disabled>دسته بندی محصول را انتحاب کنید</option>
                            @foreach($Tags as $Tag)
                            <option value="{{$Tag->id}}" @if($Item->Category == $Tag->id) selected @endif>{{$Tag->Name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="Count">زیر دسته بندی محصول</label>
                        <select class="form-control" name="SubCategory">
                            <option selected disabled>زیر دسته بندی محصول را انتحاب کنید</option>
                            @foreach($SubTag as $Tag)
                                <option value="{{$Tag->id}}" @if($Item->SubCategory == $Tag->id) selected @endif>{{$Tag->Name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Count">برند محصول</label>
                        <select class="form-control" name="Brand">
                            <option selected disabled>برند محصول را انتحاب کنید</option>
                            @foreach($Brands as $Brand)
                                <option value="{{$Brand->id}}" @if($Brand->id == $Item->Brand) selected @endif>{{$Brand->Name}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <div class="input-group">
                            <label for="Amazing"> محصول ویژه </label>
                            <input type="checkbox" @if($Item->Amazing == 'Yes') checked @endif name="Amazing" id="Amazing" >
                        </div>
                    </div>


{{--
                    <div class="form-group">
                        <label for="Count">برند محصول</label>
                        <select class="form-control" name="Brand">
                            <option selected disabled>برند محصول را انتحاب کنید</option>
                            @foreach($Brands as $brand)
                                <option value="{{$brand->id}}" @if($Item->Brand == $brand->id) selected @endif>{{$brand->Name}}</option>
                            @endforeach
                        </select>
                    </div>--}}





                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">بروزرسانی کالا</button>
                </div>
            </form>



        </div>

    </section>

@endsection

