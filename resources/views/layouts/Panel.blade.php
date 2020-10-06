<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>داشبرد | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->

    <link rel="icon" type="image/png" href="{{asset(\App\Site::Icon())}}">



    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/bootstrap-theme.css')}}">
    <!-- Bootstrap rtl -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/rtl.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminAssets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('AdminAssets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('AdminAssets/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('AdminAssets/dist/css/skins/_all-skins.min.css')}}">

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
    @yield('Head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{route('Dashboard')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="{{route('Index')}}"  target="_blank">
                            مشاهده سایت
                        </a>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" class="user-image"
                                 alt="User Image">
                            <span
                                class="hidden-xs">{{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' . \Illuminate\Support\Facades\Auth::user()->LastName}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" class="img-circle"
                                     alt="User Image">

                                <p>
                                    {{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' . \Illuminate\Support\Facades\Auth::user()->LastName}}
                                    <small>{{__('message.'.\Illuminate\Support\Facades\Auth::user()->Rule)}}</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{route('MyProfile.MyProfile')}}" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-left">

                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="btn btn-default btn-flat">خروج</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </nav>
    </header>
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->Image}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-right info">
                    <p>{{\Illuminate\Support\Facades\Auth::user()->FirstName . ' ' . \Illuminate\Support\Facades\Auth::user()->LastName}}</p>
                    <a><i class="fa fa-circle text-success"></i> آنلاین</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">

                <li class="header">منو</li>
                <li class="@if(request()->segment(2) == ''){{__('active')}}@endif">
                    <a href="{{route('Dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>داشبرد</span>
                    </a>
                </li>



                <li class="treeview @if(request()->segment(2) == 'Order' ) active @endif">
                    <a href="#">
                        <i class="fa fa-first-order"></i>
                        <span>سفارشات</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Order.All')}}"><i class="fa fa-circle-o"></i>مدیریت</a>
                        </li>
                        <li><a href="{{route('Order.Filter')}}"><i class="fa fa-circle-o"></i>فیلتر</a>
                        </li>
                    </ul>
                </li>


                <li class="treeview @if(request()->segment(2) == 'Shop' ) active @endif">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>محصولات</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Shop.All')}}"><i class="fa fa-circle-o"></i>مدیریت</a>
                        <li><a href="{{route('Shop.Add')}}"><i class="fa fa-circle-o"></i>افزودن</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview @if(request()->segment(2) == 'Category' || request()->segment(2) == 'SubCategory') active @endif">
                    <a href="#">
                        <i class="fa fa-list-alt"></i>
                        <span>دسته بندی ها</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Category.All')}}"><i class="fa fa-circle-o"></i> مدیریت</a></li>
                        <li><a href="{{route('Category.Add')}}"><i class="fa fa-circle-o"></i> افزودن</a></li>
                        <li><a href="{{route('SubCategory.All')}}"><i class="fa fa-circle-o"></i>مدیریت زیر دسته بندی ها</a></li>
                        <li><a href="{{route('SubCategory.Add')}}"><i class="fa fa-circle-o"></i> افزودن زیر دسته بندی</a></li>
                    </ul>
                </li>
                <li class="treeview @if(request()->segment(2) == 'Brands' ) active @endif">
                    <a href="#">
                        <i class="fa fa-codepen"></i>
                        <span>برند ها</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Brand.All')}}"><i class="fa fa-circle-o"></i> مدیریت</a></li>
                        <li><a href="{{route('Brand.Add')}}"><i class="fa fa-circle-o"></i> افزودن</a></li>
                    </ul>
                </li>



                <li class="treeview @if(request()->segment(2) == 'Pages' ) active @endif">
                    <a href="#">
                        <i class="fa fa-pagelines"></i>
                        <span>صفحات</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Pages.Details' , 'HowToBuy')}}"><i class="fa fa-circle-o"></i> نحوه ثبت سفارش</a></li>
                        <li><a href="{{route('Pages.Details' , 'SendProduct')}}"><i class="fa fa-circle-o"></i>رویه ارسال سفارش</a></li>
                        <li><a href="{{route('Pages.Details' , 'PaymentMethod')}}"><i class="fa fa-circle-o"></i>شیوه‌های پرداخت</a></li>
                        <li><a href="{{route('Pages.Details' , 'Questions')}}"><i class="fa fa-circle-o"></i>پاسخ به پرسش‌های متداول</a></li>
                        <li><a href="{{route('Pages.Details' , 'UseSite')}}"><i class="fa fa-circle-o"></i>شرایط استفاده</a></li>
                        <li><a href="{{route('Pages.Details' , 'Privacy')}}"><i class="fa fa-circle-o"></i>حریم خصوصی</a></li>
                        <li><a href="{{route('Pages.Details' , 'WorkWithCompany')}}"><i class="fa fa-circle-o"></i>همکاری با سازمان‌ها</a></li>
                        <li><a href="{{route('Pages.Details' , 'Jobs')}}"><i class="fa fa-circle-o"></i>فرصت‌های شغلی</a></li>
                        <li><a href="{{route('Pages.Details' , 'CallUs')}}"><i class="fa fa-circle-o"></i>تماس با ما</a></li>
                        <li><a href="{{route('Pages.Details' , 'AboutUs')}}"><i class="fa fa-circle-o"></i>درباره ما</a></li>
                    </ul>
                </li>


                <li class="treeview @if(request()->segment(2) == 'Slider' ) active @endif">
                    <a href="#">
                        <i class="fa fa-sliders"></i>
                        <span>اسلایدر</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Slider.All')}}"><i class="fa fa-circle-o"></i> مدیریت</a></li>
                        <li><a href="{{route('Slider.Add')}}"><i class="fa fa-circle-o"></i> افزودن</a></li>
                    </ul>
                </li>
                <li class="treeview @if(request()->segment(2) == 'Ads' ) active @endif">
                    <a href="#">
                        <i class="fa fa-bullhorn"></i>
                        <span>تبلیغات</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Ad.All')}}"><i class="fa fa-circle-o"></i> مدیریت</a></li>
                        <li><a href="{{route('Ad.Add')}}"><i class="fa fa-circle-o"></i> افزودن</a></li>
                    </ul>
                </li>


                <li class="treeview @if(request()->segment(2) == 'Users' ) active @endif">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>کاربران</span>
                        <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('Users.All')}}"><i class="fa fa-circle-o"></i> مدیریت</a></li>
                        <li><a href="{{route('Users.Add')}}"><i class="fa fa-circle-o"></i> افزودن</a></li>
                        <li><a href="{{route('Users.Import')}}"><i class="fa fa-circle-o"></i> درون ریزی</a></li>
                    </ul>
                </li>


                <li class="@if(request()->segment(2) == 'MyProfile'){{__('active')}}@endif">
                    <a href="{{route('MyProfile.MyProfile')}}">
                        <i class="fa fa-user"></i> <span>حساب کاربری</span>
                    </a>
                </li>

                <li class="@if(request()->segment(2) == 'Setting'){{__('active')}}@endif">
                    <a href="{{route('Setting.Setting')}}">
                        <i class="fa fa-cogs"></i> <span>تنظیمات سایت</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبرد
            </h1>
        </section>

        <div class="main-content">

            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">پیام سایت</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div
                            class="modal-body">


                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                    <br>
                                @endforeach

                            @elseif(session('errors'))
                                {{session('errors')->first('msg')}}
                            @endif


                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">متوجه شدم</button>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">فعالیت ها</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">تولد غلوم</h4>

                                    <p>۲۴ مرداد</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">آپدیت پروفایل سجاد</h4>

                                    <p>تلفن جدید (800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">نورا به خبرنامه پیوست</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">کرون جابز اجرا شد</h4>

                                    <p>۵ ثانیه پیش</p>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">وضعیت</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                گزارش کنترلر پنل
                                <input type="checkbox" class="pull-left" checked>
                            </label>

                            <p>
                                ثبت تمامی فعالیت های مدیران
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                ایمیل مارکتینگ
                                <input type="checkbox" class="pull-left" checked>
                            </label>

                            <p>
                                اجازه به کاربران برای ارسال ایمیل
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                در دست تعمیرات
                                <input type="checkbox" class="pull-left" checked>
                            </label>

                            <p>
                                قرار دادن سایت در حالت در دست تعمیرات
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">تنظیمات گفتگوها</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                آنلاین بودن من را نشان نده
                                <input type="checkbox" class="pull-left" checked>
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                اعلان ها
                                <input type="checkbox" class="pull-left">
                            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                حذف تاریخته گفتگوهای من
                                <a href="javascript:void(0)" class="text-red pull-left"><i
                                        class="fa fa-trash-o"></i></a>
                            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('AdminAssets/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('AdminAssets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('AdminAssets/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminAssets/dist/js/adminlte.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('AdminAssets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap  -->
    <script src="{{asset('AdminAssets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('AdminAssets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('AdminAssets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('AdminAssets/bower_components/chart.js/Chart.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('AdminAssets/dist/js/pages/dashboard2.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('AdminAssets/dist/js/demo.js')}}"></script>

    @yield('js')

    @if(session('errors'))
        <script type="text/javascript">
            $(window).on('load', function () {
                $('#myModal').modal('show');
            });
        </script>
    @endif
</body>

</html>
