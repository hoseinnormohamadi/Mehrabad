<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پرینت فاکتور</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/bootstrap-theme.css')}}">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/rtl.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminAssets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('AdminAssets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/AdminLTE.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- customize adminlte -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/customize-adminlte.css')}}">
</head>

<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <img src="{{asset(\App\Site::Icon())}}" width="24px">
                    {{\App\Site::Name()}}
                    <small class="pull-left">{{\Hekmatinasser\Verta\Verta::instance($Orders->created_at)->format('Y/m/d')}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                از
                <address>
                    <strong>{{\App\Site::Name()}}</strong>
                    <br>
                    {{\App\Site::PhoneNumber()}}
                    <br>
                    {{\App\Site::Email()}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                به
                <address>
                    <strong>{{$Orders->User->FirstName . ' ' . $Orders->User->LastName}}</strong><br>

                    @if($Orders->User->PhoneNumber != null)
                        شماره تماس :
                        {{$Orders->User->PhoneNumber}}
                        <br>
                    @endif
                    @if($Orders->User->email != null)
                        ایمیل :
                        {{$Orders->User->email}}
                        <br>
                    @endif
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>سفارش #{{$Orders->id}}</b><br>
                <br>
                <b>کد سفارش : </b> {{$Orders->id}}<br>
                <b>تاریخ سفارش : </b> {{\Hekmatinasser\Verta\Verta::instance($Orders->created_at)->format('Y/m/d')}} <br>
                <b>کد ملی : </b> {{$Orders->CodeMeli}}
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>محصول</th>
                        <th>مبلغ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(json_decode($Orders->ProductsID) as $order)
                    <tr>
                        <td>{{\App\Shop::find($order)->Name}}</td>
                        <td>{{number_format(\App\Shop::find($order)->Price, 0, ',', ',')}} تومان</td>


                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- /.col -->
            <div class="col-xs-6">

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">مبلغ کل:</th>
                            <td>{{number_format($Orders->Price, 0, ',', ',')}} تومان</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->

    </section>
    <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>

</html>
