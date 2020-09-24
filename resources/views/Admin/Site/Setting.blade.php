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

            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">تنظیمات عمومی</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">تنظیمات لوگو</a></li>
                    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">تنظیمات اجتماعی</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                        <form method="post" action="{{route('Setting.General')}}">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">
                                    <label for="Name">نام سایت</label>
                                    <input type="text" id="Name" class="form-control" name="Name"
                                           value="{{$SiteConfig->Name}}" maxlength="20">
                                </div>


                                <div class="box box-success">
                                    <div class="box-header">
                                        <h3 class="box-title">متن درباره ما</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body pad">
                                <textarea id="mytextarea"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                          name="AboutUs">{!! $SiteConfig->AboutUs !!}</textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Address">آدرس</label>
                                    <input type="text" id="Address" class="form-control" name="Address"
                                           value="{{$SiteConfig->Address}}">
                                </div>


                                <div class="form-group">
                                    <label for="PhoneNumber">شماره تماس</label>
                                    <input type="number" id="PhoneNumber" class="form-control" name="PhoneNumber"
                                           value="{{$SiteConfig->PhoneNumber}}">
                                </div>


                                <div class="form-group">
                                    <label for="Email">ایمیل</label>
                                    <input type="email" id="Email" class="form-control" name="Email"
                                           value="{{$SiteConfig->Email}}">
                                </div>


                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">بروزرسانی</button>
                            </div>
                        </form>


                    </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <form method="post" action="{{route('Setting.Logo')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">
                                    <label for="SiteIcon">لوگو سایت</label>
                                    <input type="file" name="SiteIcon" id="SiteIcon" accept="image/*"/>
                                    <img src="{{asset('assets/img/favicon.png')}}" width="250" height="250">
                                </div>



                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">بروزرسانی</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <form method="post" action="{{route('Setting.Social')}}">
                            @csrf
                            <div class="box-body">


                                <div class="form-group">
                                    <label for="Enamad">ای نماد</label>
                                    <input type="text" class="form-control" name="Enamad" id="Enamad" value="{{$SiteConfig->Enamad}}">
                                </div>



                                <div class="form-group">
                                    <label for="Samandehi">ساماندهی</label>
                                    <input type="text" class="form-control" name="Samandehi" id="Samandehi" value="{{$SiteConfig->Samandehi}}">
                                </div>



                                <div class="form-group">
                                    <label for="Facebook">فیسبوک</label>
                                    <input type="text" class="form-control" name="Facebook" id="Facebook" value="{{$SiteConfig->Facebook}}">
                                </div>




                                <div class="form-group">
                                    <label for="twitter">توییتر</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter" value="{{$SiteConfig->twitter}}">
                                </div>




                                <div class="form-group">
                                    <label for="instagram">اینستاگرام</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram" value="{{$SiteConfig->instagram}}">
                                </div>




                                <div class="form-group">
                                    <label for="Telegram">تلگرام</label>
                                    <input type="text" class="form-control" name="Telegram" id="Telegram" value="{{$SiteConfig->Telegram}}">
                                </div>



                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">بروزرسانی</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
    </section>
@endsection
