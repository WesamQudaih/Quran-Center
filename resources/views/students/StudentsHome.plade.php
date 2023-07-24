<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>مركز الإمام عاصم </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <    <!-- Tell the browser to be responsive to screen width -->
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

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Laura
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex justify-content-center align-items-center header-transparent">

    <nav id="navbar" class="navbar">
      <ul>
        <li> <a class="nav-link scrollto active" href="#hero"> <img src="../assets/img/logo.jpg" class="img-thumbnail"
              style="width: 60px;"> </a> </li>
        <li><a class="nav-link scrollto" href="#"></a></li>
        <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
        <li><a class="nav-link scrollto active" href="#TheDay">التسميع اليومي</a></li>
        <li><a class="nav-link scrollto" href="#Exam">الإختبارات</a></li>
        <li><a class="nav-link scrollto" href="#Corse">الدورات</a></li>
        <li><a class="nav-link scrollto " href="#corse">الأنشطة</a></li>
        <li><a class="nav-link scrollto" href="#"></a></li>
        <li><a class=" btn btn-danger" href="../index.html">تسجيل الخروج</a></li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1 class="p-3 mb-2  text-white  border border-success">مركزُ الإِمام عاصمْ</h1>
      <h3 class="text-light">عن النبي -صلى الله عليه وسلم قال: خَيرُكُم من تعلَّمَ القرآنَ وعلَّمَهُ</h3>
      <a href="#TheDay" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= TheDay Me Section ======= -->
    <section id="TheDay" class="about">
      <div class="container">
        <div class="section-title">
          <h1>التسميع</h1>
          <p>عرض إنجاز وتسميع الطالب خلال :: الـيـوم -الأسـبـوع _الـشهـر</p>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex flex-column align-items-stretch">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item box ">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="text-success"> تسيمع اليوم </h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body container">
                    <table class="table table-light table-striped table-bordered border-dark">
                      <thead>
                        <tr>
                          <th scope="col">السورة</th>
                          <th scope="col">من-الى </th>
                          <th scope="col">التقييم</th>
                          <th scope="col">عدد الصفحات</th>
                          <th scope="col">ملاحظة من المحفظ</th>
                        </tr>
                      </thead>
                      <tbody class="table-group-divider">
                        <tr>
                          <th>الملك</th>
                          <td>15-30</td>
                          <td>5/5</td>
                          <td>1</td>
                         </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="accordion-item box">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h6 class="text-success"> بيانات التسميع خلال الأسبوع الفائت </h6>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                  <div class="accordion-body container ">
                    <table class="table table-light table-striped table-bordered border-dark">
                      <thead>
                        <tr>
                          <th scope="col">اليوم</th>
                          <th scope="col">التاريخ</th>
                          <th scope="col">السورة</th>
                          <th scope="col">من-إلى</th>
                          <th scope="col">عدد الصفحات</th>
                          <th scope="col">تقييم</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th> السبت </th>
                          <th> 30/5 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                        </tr>
                        <tr>
                          <th> أحد </th>
                          <th> 31/5 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                        </tr>
                        <tr>
                          <th> اثنين </th>
                          <th> 1/6 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                        </tr>
                        <tr>
                          <th> ثلاثاء </th>
                          <th> 2/6 </th>
                          <td> التحريم </td>
                          <td>5-30</td>
                          <td>2</td>
                          <td>5/5</td>
                        </tr>
                        <tr>
                          <th> اربعاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="accordion-item box">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h6 class="text-success"> بيانات تسميع الشهر الفائت </h6>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body container">
                    <table class="table table-light table-striped table-bordered border-dark">
                      <thead>
                        <tr>
                          <th scope="col">اليوم</th>
                          <th scope="col">التاريخ</th>
                          <th scope="col">السورة</th>
                          <th scope="col">من-إلى</th>
                          <th scope="col">عدد الصفحات</th>
                          <th scope="col">تقييم</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th> السبت </th>
                          <th> 30/5 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> أحد </th>
                          <th> 31/5 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اثنين </th>
                          <th> 1/6 </th>
                          <td> الملك </td>
                          <td>5-30</td>
                          <td>1</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> ثلاثاء </th>
                          <th> 2/6 </th>
                          <td> التحريم </td>
                          <td>5-30</td>
                          <td>2</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اربعاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>

                        <tr>
                          <th> سبت </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> أحد </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> إثنين </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> ثلاثاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اربعاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>

                        <tr>
                          <th> سبت </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> أحد </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> إثنين </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> ثلاثاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اربعاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>

                        <tr>
                          <th> سبت </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> احد </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اثنين </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> ثلاثاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>
                        <tr>
                          <th> اربعاء </th>
                          <th> 3/6 </th>
                          <td> التحريم </td>
                          <td>30-40</td>
                          <td>1.5</td>
                          <td>5/5</td>
                         </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End TheDay Me Section -->

    <!-- ======= My Exam Section ======= -->
    <section id="Exam" class="resume ">
      <div class="container">

        <div class="section-title">
          <h1>إختبارات قادمة</h1>
        </div>

        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">اليوم</th>
                <th scope="col">التاريخ</th>
                <th scope="col">اسم المختبر</th>
                <th scope="col">المكان</th>
                <th scope="col">نوع الإختبار</th>
                <th scope="col">من-إلى</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>السبت</th>
                <td>30/5/2023</td>
                <td>محمد محمود</td>
                <td>المسجد الأبيض</td>
                <td>مجتمع</td>
                <td>5-10</td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="col-lg-12 d-flex flex-column align-items-stretch">
          <div class="section-title">
            <h1>إختبارات سابقة</h1>
          </div>
          <div class="accordion" id="accordionExample1">
            <div class="accordion-item ">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">
                  <h3 class="text-success"> إختبارات سابقة </h3>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                <div class="accordion-body container">
                  <table class="table table-light table-striped table-bordered border-dark">
                    <thead>
                      <tr>
                        <th scope="col">اليوم</th>
                        <th scope="col">التاريخ </th>
                        <th scope="col"> نوع الاختبار </th>
                        <th scope="col"> من-الى الجزء </th>
                        <th scope="col"> الدرجة </th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th>الأحد</th>
                        <td>26/4/2023</td>
                        <td>مجتمع</td>
                        <td>1-5</td>
                        <td>86</td>
                      </tr>
                      <tr>
                        <th>الأربعاء</th>
                        <td>10/4/2023</td>
                        <td>منفرد</td>
                        <td>5</td>
                        <td>92</td>
                      </tr>
                      <tr>
                        <th>الجمعة</th>
                        <td>30/3/2023</td>
                        <td>مجتمع</td>
                        <td>1-3</td>
                        <td>89</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End My Exam Section -->


    <!-- ======= My Corse Section ======= -->
    <section id="Corse" class="services ">
      <div class="container">

        <div class="section-title">
          <span>أنشطة المركز</span>
          <h2>أنشطة المركز </h2>
          <h4>آخر الأنشطة التي قام بها مركز الإمام عاصم </h4>
        </div>


        <div class="row Corse-container">

          <div class="col-lg-4 col-md-6 Corse-item filter-app">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4> نشاط رحلة ترفيهية </h4>
              <p>نشاط رحلة ترفيهية على مدينة النور الترفيهية </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-web">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-app">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="App 2"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-card">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-web">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-app">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="App 3"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-card">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-card">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 Corse-item filter-web">
            <div class="Corse-img"><img src="assets/img/Corse/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="Corse-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/Corse/Activ-1.jpg" data-gallery="CorseGallery" class="Corse-lightbox preview-link"
                title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="Corse-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Corse Section -->


    <section id="Corse" class="portfolio ">
      <div class="container">

        <div class="section-title">
          <span>أنشطة المركز</span>
          <h2>أنشطة المركز </h2>
          <h4>آخر الأنشطة التي قام بها مركز الإمام عاصم </h4>
        </div>


        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4> نشاط رحلة ترفيهية </h4>
              <p>نشاط رحلة ترفيهية على مدينة النور الترفيهية </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/Activ-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/Activ-1.jpg" data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End My Portfolio Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>مركز الإمام عاصم</h3>
      <h4>نحو جيل واعد و حافظ لكتاب الله</h4>
      <div class="social-links">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
