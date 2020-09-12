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
                <h3 class="box-title">افزودن محصول</h3>
            </div>
            <form method="post" action="{{route('Shop.Create')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">


                    <div class="form-group">
                        <label for="Name">نام محصول</label>
                        <input type="text" id="Name" class="form-control" name="Name" placeholder="نام دسته بندی">
                    </div>


                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">توضیحات محصول</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                                <textarea id="mytextarea"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="Description"></textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="Images">تصاویر محصول</label>
                        <input type="file" name="Images[]" id="Images" accept="image/*" multiple/>
                    </div>




                    <div class="form-group">
                        <label for="Price">قیمت محصول</label>
                        <div class="input-group">
                            <input type="number" name="Price" id="Price" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="Count">موجودی محصول</label>
                        <div class="input-group">
                            <input type="number" name="Count" id="Count" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        </div>
                    </div>






                    <div class="form-group">
                        <label for="Count" >وضعیت محصول</label>
                        <select class="form-control" name="Status">
                            <option selected disabled>وضعیت محصول را انتحاب کنید</option>
                            <option value="Available">موجود</option>
                            <option value="UnAvailable">نا موجود</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="Count">دسته بندی محصول</label>
                        <select class="form-control" name="Category">
                            <option selected disabled>دسته بندی محصول را انتحاب کنید</option>
                            @foreach($Tags as $Tag)
                            <option value="{{$Tag->id}}">{{$Tag->Name}}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="form-group">
                        <label for="Count">زیر دسته بندی محصول</label>
                        <select class="form-control" name="SubCategory">
                            <option selected disabled>زیر دسته بندی محصول را انتحاب کنید</option>
                            @foreach($SubTag as $Tag)
                            <option value="{{$Tag->id}}">{{$Tag->Name}}</option>
                            @endforeach
                        </select>
                    </div>





                    <div class="form-group">
                        <label for="Count">برند محصول</label>
                        <select class="form-control" name="Brand">
                            <option selected disabled>برند محصول را انتحاب کنید</option>
                            @foreach($Brands as $Brand)
                            <option value="{{$Brand->id}}">{{$Brand->Name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <label for="Amazing"> محصول ویژه </label>
                            <input type="checkbox" name="Amazing" id="Amazing" >
                        </div>
                    </div>

                    {{--


                                        <div class="form-group">
                                            <label for="Count">برند محصول</label>
                                            <select class="form-control" name="Brand">
                                                <option selected disabled>برند محصول را انتحاب کنید</option>
                                                @foreach($Brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                    --}}




                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ایجاد کالا</button>
                </div>
            </form>



        </div>

    </section>

@endsection

