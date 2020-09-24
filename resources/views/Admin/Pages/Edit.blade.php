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
                <h3 class="box-title">{{config('Pages.'.$Name)}}</h3>
            </div>
            <form method="post" action="{{route('Pages.DetailsPost' , $Name)}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">توضیحات {{config('Pages.'.$Name)}}</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                                <textarea id="mytextarea"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="{{$Name}}">{!! $Data !!}</textarea>
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">بروزرسانی</button>
                </div>
            </form>



        </div>

    </section>

@endsection

