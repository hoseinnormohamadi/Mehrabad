@extends('layouts.Panel')
@section('content')
    <section class="content">
    {{-- <div class="row">
         <div class="col-md-12">
             <div class="box">
                 <div class="box-header with-border">
                     <h3 class="box-title">گزارش ماهانه</h3>
                     <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                 class="fa fa-minus"></i>
                         </button>
                         <div class="btn-group">
                             <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                 <i class="fa fa-wrench"></i></button>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">منوی ۱</a></li>
                                 <li><a href="#">منوی ۲</a></li>
                                 <li><a href="#">منو ۳</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">لینک</a></li>
                             </ul>
                         </div>
                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                 class="fa fa-times"></i></button>
                     </div>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                     <div class="row">
                         <div class="col-md-8">
                             <p class="text-center">
                                 <strong>فروش ۳ مرداد ۱۳۹۶</strong>
                             </p>

                             <div class="chart">
                                 <!-- Sales Chart Canvas -->
                                 <canvas id="salesChart" style="height: 180px;"></canvas>
                             </div>
                             <!-- /.chart-responsive -->
                         </div>
                         <!-- /.col -->
                         <div class="col-md-4">
                             <p class="text-center">
                                 <strong>میزان پیشرفت اهداف</strong>
                             </p>

                             <div class="progress-group">
                                 <span class="progress-text">سفارش در ماه</span>
                                 <span class="progress-number"><b>160</b>/200</span>

                                 <div class="progress sm">
                                     <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                 </div>
                             </div>
                             <!-- /.progress-group -->
                             <div class="progress-group">
                                 <span class="progress-text">محصول</span>
                                 <span class="progress-number"><b>310</b>/400</span>

                                 <div class="progress sm">
                                     <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                 </div>
                             </div>
                             <!-- /.progress-group -->
                             <div class="progress-group">
                                 <span class="progress-text">مشتری جدید</span>
                                 <span class="progress-number"><b>480</b>/800</span>

                                 <div class="progress sm">
                                     <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                 </div>
                             </div>
                             <!-- /.progress-group -->
                             <div class="progress-group">
                                 <span class="progress-text">بازدید جدید</span>
                                 <span class="progress-number"><b>250</b>/500</span>

                                 <div class="progress sm">
                                     <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                 </div>
                             </div>
                             <!-- /.progress-group -->
                         </div>
                         <!-- /.col -->
                     </div>
                     <!-- /.row -->
                 </div>
                 <!-- ./box-body -->
                 <div class="box-footer">
                     <div class="row">
                         <div class="col-sm-3 col-xs-6">
                             <div class="description-block border-right">
                                 <span class="description-percentage text-green"><i
                                         class="fa fa-caret-up"></i> 17%</span>
                                 <h5 class="description-header"> 35,210.43 تومان</h5>
                                 <span class="description-text">کل گردش حساب</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-3 col-xs-6">
                             <div class="description-block border-right">
                                 <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                 <h5 class="description-header">10,390.90 تومان</h5>
                                 <span class="description-text">فروش کل</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-3 col-xs-6">
                             <div class="description-block border-right">
                                 <span class="description-percentage text-green"><i
                                         class="fa fa-caret-up"></i> 20%</span>
                                 <h5 class="description-header">24,813.53 تومان</h5>
                                 <span class="description-text">سود کل</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                         <!-- /.col -->
                         <div class="col-sm-3 col-xs-6">
                             <div class="description-block">
                                 <span class="description-percentage text-red"><i
                                         class="fa fa-caret-down"></i> 18%</span>
                                 <h5 class="description-header">1200</h5>
                                 <span class="description-text">اهداف</span>
                             </div>
                             <!-- /.description-block -->
                         </div>
                     </div>
                     <!-- /.row -->
                 </div>
                 <!-- /.box-footer -->
             </div>
             <!-- /.box -->
         </div>
         <!-- /.col -->
     </div>--}}
    <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->

                <!-- /.box -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- DIRECT CHAT -->

                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->

                    <div class="col-md-12">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">کاربران</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    @foreach(\App\User::limit(8)->get() as $User)
                                        <li>
                                            <img src="{{$User->Image}}" alt="User Image" width="50">
                                            <a class="users-list-name"
                                               href="#">{{$User->FirstName .' ' . $User->LastName}}</a>
                                            <small>تعداد خرید</small>
                                            <span
                                                class="users-list-date">{{\App\Order::where('UserID' , $User->id)->count()}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="{{route('Users.All')}}" class="uppercase">نمایش همه کاربران</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!--/.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">آخرین سفارشات</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>شماره</th>
                                    <th>کد ملی</th>
                                    <th>محصول</th>
                                    <th>تاریخ ثبت سفارش</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(\App\Order::latest()->limit(8)->get() as $order )
                                    <tr>
                                        <td><a href="{{route('Order.Pdf' , $order->id)}}">{{$order->id}}</a></td>
                                        <td>
                                            <a href="{{route('Users.Edit' , $order->User->id)}}">{{$order->User->CodeMeli }}</a>
                                        </td>
                                        <td>
                                            @foreach(json_decode($order->ProductsID) as $product)

                                                <a target="_blank"
                                                   href="{{route('Product' , \App\Shop::find($product->Product)->id)}}">{{\App\Shop::find($product->Product)->Name }}</a>
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{\Hekmatinasser\Verta\Verta::instance($order->created_at)->format('Y-m-d')}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <a href="{{route('Order.All')}}" class="btn btn-sm btn-default btn-flat pull-right">نمایش
                            همه</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">محصولات</span>
                        <span class="info-box-number">{{\App\Shop::count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="ion ion-ios-paper-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">فاکتور ها</span>
                        <span class="info-box-number">{{\App\Order::count()}}</span>

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">کاربران</span>
                        <span class="info-box-number">{{\App\User::count()}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->

                <!-- /.info-box -->


                <!-- /.box -->

                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">آخرین محصولات</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box">
                            @foreach(\App\Shop::latest()->limit(5)->get() as $item)
                                <li class="item">

                                        <div class="product-img">
                                            <a href="{{route('Product' , $item->id)}}" target="_blank">
                                            <img src="{{json_decode($item->Images)[0]}}" alt="Product Image">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a  href="{{route('Product' , $item->id)}}" class="product-title">
                                                {{$item->Name}}
                                                <span class="label label-warning pull-left">
                                                    @if($item->Takhfif != null)
                                                        <span> {{  number_format($item->Takhfif, 0, ',', ',')}} تومان </span>
                                                    @else
                                                        <span> {{  number_format($item->Price, 0, ',', ',')}} تومان </span>

                                                    @endif
                                                </span>
                                            </a>
                                            <span class="product-description">
                                                <a href="{{route('Brands' ,\App\Brands::find($item->Brand)->id )}}">{{\App\Brands::find($item->Brand)->Name}}</a>
                                            </span>
                                        </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center">
                        <a href="{{route('Shop.All')}}" class="uppercase">نمایش همه</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection
