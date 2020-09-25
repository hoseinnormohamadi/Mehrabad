@extends('layouts.Panel')
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
                                <form method="GET" action="{{route('Order.All')}}">
                                    <label>جست و جو: <input type="text" class="form-control input-sm" placeholder="" aria-controls="example1" name="SearchTerm"></label>
                                    <input class="btn btn-info" type="submit" value="جست و جو">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="#: activate to sort column descending">#
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="نام: activate to sort column ascending">نام
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="کد ملی: activate to sort column ascending">کد ملی
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="تاریخ فاکتور: activate to sort column ascending">تاریخ فاکتور

                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="محصولات: activate to sort column ascending">محصولات
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="عملیات: activate to sort column ascending">عملیات
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Orders as $Order)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$Order->id}}</td>
                                    <td>{{$Order->User->FirstName . ' ' . $Order->User->LastName}}</td>
                                    <td>{{$Order->CodeMeli}}</td>
                                    <td>{{\Hekmatinasser\Verta\Verta::instance($Order->created_at)->format('Y/m/d')}}</td>
                                    <td>
                                        @foreach(json_decode($Order->ProductsID) as $Product)
                                            {{\App\Shop::find($Product->Product)->Name}}
                                        <img src="{{json_decode(\App\Shop::find($Product->Product)->Images)[0]}}" width="50px">
                                            <br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{route('Order.Exel' , $Order->id)}}">فاکتور اکسل</a> |
                                        <a href="{{route('Order.Pdf' , $Order->id)}}">فاکتور Pdf</a> |
                                        <a href="{{route('Order.Mali' , $Order->id)}}">فاکتور مالی</a>
                                    </td>
                                </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">#</th>
                                    <th rowspan="1" colspan="1">نام</th>
                                    <th rowspan="1" colspan="1">کد ملی</th>
                                    <th rowspan="1" colspan="1">تاریخ فاکتور</th>
                                    <th rowspan="1" colspan="1">محصولات</th>
                                    <th rowspan="1" colspan="1">عملیات</th>
                                </tr>
                                </tfoot>
                            </table>

                            {!! $Orders->links() !!}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

    </div>
    </section>
@endsection
