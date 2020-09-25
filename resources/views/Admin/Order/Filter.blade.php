@extends('layouts.Panel')
@section('Head')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/Plugin/PersianDate/PersianDate.css')}}"/>
@endsection
@section('content')
    <section class="content">

    <div class="box">
            <div class="box-header">
                <h3 class="box-title">سفارشات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">

                        <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                                <form method="GET" action="{{route('Order.FilterPost')}}">
                                    @csrf
                                    <div class="col col-lg12">
                                    <label>کد ملی : </label>
                                    <input type="text" class="form-control input-sm" placeholder="" aria-controls="example1" name="CodeMeli">
                                    </div>

                                    <div class="col col-lg12">
                                    <label>تاریخ شروع</label>
                                    <input type="text" class="form-control input-sm" placeholder="" aria-controls="example1" id="StartDate" name="StartDate">
                                    </div>


                                    <div class="col col-lg12">
                                    <label>تاریخ پایان</label>
                                    <input type="text" class="form-control input-sm" placeholder="" aria-controls="example1" id="EndDate" name="FinishDate">
                                    </div>

                                    <div class="col col-lg12">

                                    <input class="btn btn-info" type="submit" value="جست و جو">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.box-body -->
            </div>

    </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('assets/Plugin/PersianDate/PersianDate.min.js')}}"></script>
    <script>
        var p = new persianDate();
        $("#StartDate , #EndDate").persianDatepicker();

    </script>
@endsection
