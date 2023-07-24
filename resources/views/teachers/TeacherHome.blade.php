<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>مركز الإمام عاصم</title>
    <link href="../assets/img/logo.jpg" rel="icon">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style4.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}"> --}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <div class=" bg-success " style="direction: trl;">
                <div class=" bg-success  text-success ">
                    <nav>
                        <a href="admin.html" class="logo  bg-success " type="button" data-toggle="offcanvas"
                            data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <!-- mini logo for sidebar mini 50x50 pixels -->
                            <span class="logo-mini"><b>الصفا</b></span>
                            <!-- logo for regular state and mobile devices -->
                            <span class="logo-lg "><b>مركز الإمام عاصم</b> </span>
                        </a>
                    </nav>
                </div>
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg bg-success navbar-dark">
                    <!-- Container wrapper -->
                    <div class="container-fluid p-2">
                        <!-- Navbar brand -->
                        <!-- Notifications -->
                        <ul class="navbar-nav d-flex flex-row me-1">
                            <li class="nav-item me-3 me-lg-0">
                                <div class="dropdown">
                                    <a class="me-3 dropdown-toggle hidden-arrow" href="#"
                                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-fw fa-comments"></i> <span>الرسائل</span>
                                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#">Some news</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another news</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item me-3 me-lg-0">
                                <div class="dropdown">
                                    <a class="me-3 dropdown-toggle hidden-arrow" href="#"
                                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-fw fa-bell"></i> <span
                                            class="badge rounded-pill badge-notification bg-danger">1</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#">Some news</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another news</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul> <!-- Icons -->
                    </div>
                    <!-- Container wrapper -->
                </nav>
                <!-- Navbar -->
            </div>
            <!-- end  Header Navbar -->
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar direction" style="direction: rtl;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-right image">
                        <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-right info">
                        <p>دياب الهبيل </p>
                        {{-- <a>... محفظ </a> --}}
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li class="header"> لوحة تحكم المحفظ </li>
                    <li>
                        <a href="{{ url('/home') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-home"></i> <span>الرئيسية</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teachers.students.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-users"></i> <span>الطلاب</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teachers.achievements.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-users"></i> <span>السجل اليومي</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="TeacherCorse.html" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-file-text"></i><span>الدورات</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teachers.activities.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-photo"></i> <span>الأنشطة</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li class="header"></li>
                    <li><a href="../index.html" class="nav-link link-body-emphasis"><i
                                class="fa fa-circle-o text-red"></i>
                            <span>تسجيل الخروج</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="p-3 text-success" style="direction: rtl;">
                <h1><i class="fa fa-fw fa-home"></i>
                    الرئيسية </h1>
            </section>
            <!-- Main content -->
            <section class="content container" style="direction: rtl;">
                <!-- Small boxes (Stat box) -->
                <div class="m-0">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js"') }}></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/plugins/fastclick/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
