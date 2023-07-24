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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}">
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
            <!-- Logo -->
            <a href="admin.html" class="logo  bg-success ">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>المركز</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg "><b>مركز الإمام عاصم</b> </span>
            </a>
            <!-- As a link -->
            <nav class="navbar navbar-dark bg-success" style="direction: rtl;">
                <button class="navbar-toggler" type="button" data-toggle="offcanvas"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <!-- Header Navbar: style can be found in header.less -->
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
                    {{-- @auth('user') --}}
                    <div class="pull-right info">
                        <p>دياب الهبيل </p>
                        {{-- <a>... مشرف </a> --}}
                    </div>
                        {{-- <div class="pull-right info"> --}}
                            {{-- <div class="ms-auto"> {{ Auth::guard('user')user()->name }} </div> --}}
                            {{-- <div class="ms-auto">دياب الهبيل</div> --}}
                        {{-- </div> --}}
                    {{-- @endauth --}}
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li class="header"> لوحة تحكم مشرف المركز</li>
                    {{-- <li>
                        <a href="{{ url('/') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-home"></i> <span>الرئيسية</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('circles.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-user"></i> <span>الحلقات</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('teachers.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-user"></i> <span>المحفظين</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('students.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-users"></i> <span>الطلاب</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('achievements.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-users"></i> <span>السجل اليومي</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ route('courses.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-file-text"></i><span>الدورات</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('divisions.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-file-text"></i><span>الشعب</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('courses_students.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-file-text"></i><span>طلاب الدورات</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-file-text"></i><span>المستخدمين</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    {{-- <li>
            <a href="AdminExams.html" class="nav-link link-body-emphasis">
              <i class="fa fa-fw fa-server"></i> <span>الإختبارات</span>
              <small class="label pull-right bg-red"></small>
            </a>
          </li> --}}
                    <li>
                        <a href="{{ route('activities.index') }}" class="nav-link link-body-emphasis">
                            <i class="fa fa-fw fa-photo"></i> <span>الأنشطة</span>
                            <small class="label pull-right bg-red"></small>
                        </a>
                    </li>
                    {{-- <li>
            <a href="{{route('')}}" class="nav-link link-body-emphasis">
              <i class="fa fa-fw fa-photo"></i> <span>المستخدمين</span>
              <small class="label pull-right bg-red"></small>
            </a>
          </li> --}}
                    {{-- <li class="header"></li> --}}
                    {{-- <li>
            <a href="AdminTeacher.html" class="nav-link link-body-emphasis">
              <i class="fa fa-fw fa-bell"></i><span>الإشعارات</span>
              <small class="label pull-right bg-red"> 3 </small>
            </a>
          </li>
          <li>
            <a href="AdminTeacher.html" class="nav-link link-body-emphasis">
              <i class="fa fa-fw fa-comments"></i> <span>الرسائل</span>
              <small class="label pull-right bg-red"> 3 </small>
            </a>
          </li> --}}
                    <li class="header"></li>
                    <li><span>تسجيل الخروج</span>
                        {{-- <a href="#"
                        onclick="document.getElementById('logout').submit()"><span>تسجيل الخروج</span></a>

                    <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                            </a> --}}
                        </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{-- <section class="p-3 text-success" style="direction: rtl;">
        <h1><i class="fa fa-fw fa-home"></i>
          الرئيسية </h1>
      </section> --}}
            <!-- Main content -->
            <section class="content container" style="direction: rtl;">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!-- ./col -->
                    {{-- <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>نسبة انجاز الاختبارات السنوية المطلوبة</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="DetailsTeacher.html" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> إطلاع على
                التفاصيل </a>
            </div>
          </div> --}}
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        {{-- <div class="small-box bg-yellow">
              <div class="inner">
                <h3>120</h3>
                <p>عدد طلاب المركز</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="DetailsStudent.html" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> إطلاع على التفاصيل </a>
            </div> --}}
                    </div>
                    <!-- ./col -->



                    <div class="m-0">
                        @yield('content')
                    </div>
                </div>







            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        {{-- <div class="control-sidebar-bg"></div> --}}
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
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
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
</body>

</html>
