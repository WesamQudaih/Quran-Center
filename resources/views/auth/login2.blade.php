<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Connect Plus</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
  <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin>
  <link
    href="{{ asset('https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=El+Messiri:wght@400;700&family=IBM+Plex+Sans+Arabic&family=Lemonada:wght@500&family=Mada:wght@600&display=swap')}}"
    rel="stylesheet">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/style1.css')}}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css')}}">
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <style>
    .d1 {
      background-color: rgb(203, 231, 169);
    }

    .d2 {
      color: rgb(36, 133, 21);
    }
    .navbar{
      background-color: rgb(203, 231, 169);
      padding-right: 15px;
      padding-top: 10px;
    }
  </style>
</head>

<body class="d1 ">
  <nav id="navbar" class="navbar">
    <ul>

      <li><a class="btn btn-outline-danger "  href="index.html" >رجوع</a></li>
    </ul>
  </nav><!-- .navbar -->

  <div class="container-scroller  ">
    <div class="content-wrapper d-flex align-items-center auth d1  ">
      <div class="row flex-grow ">
        <div class="col-lg-5 mx-auto  ">
          <div class="d2 auth-form-light text-left p-5  ">
            <h4 class="d2 h1 text-center">أهلاً بكم في مركز الإمام عاصم</h4>
            <form class="pt-3">
              <h6 class="font-weight-light text-success ">سجل دخول للاستمرار من فضلك</h6>
              <div class="form-group">
                <input type="number" class="form-control form-control-lg" id="exampleInputEmail1"
                  placeholder="رقم المستخدم">
                <p></p>
                <input type="password" class="form-control form-control-lg " id="exampleInputEmail1"
                  placeholder="كلمة المرور">
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div>
                  <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter" />
                  <label class="form-check-label text-muted" for="subscribeNews">أبقني في وضع تسجيل الدخول</label>
                </div>
                <button type="button" class="btn btn-outline-success">دخول</button>
              </div>
            </form>
          </div>
        </div>

      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>
