<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking Covid - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/img/virus.png" rel="icon">
  <link href="frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v4.0.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">Covid-19</a></h1>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background: url(frontend/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">TRACKING <span>COVID-19</span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= DATA GLOBAL ======= -->
    <section id="featured" class="featured">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="icon-box">
            <i class="bi bi-bar-chart"></i>
            <h3><a href="">Total Positif</a></h3>
            <h2><span data-toggle="counter-up">{{ $positif }}</span></2>
            <p>ORANG</p>
            </div>
          </div>
          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="icon-box">
             <i class="bi bi-bar-chart"></i>
             <h3><a href="">Total Sembuh</a></h3>
             <h2><span data-toggle="counter-up">{{ $sembuh }}</span></h2>
             <p>ORANG</p>
            </div>
          </div>
          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="icon-box">
             <i class="bi bi-bar-chart"></i>
             <h3><a href="">Total Meninggal</a></h3>
             <h2><span data-toggle="counter-up">{{ $meninggal }}</span></h2>
             <p>ORANG</p>
            </div>
          </div>
          <div class="col-lg-3 mt-3 mt-lg-0">
            <div class="icon-box">
             <i class="bi bi-bar-chart"></i>
             <h3><a href="">Positif Indonesia</a></h3>
             <h2><span data-toggle="counter-up"><?php echo $posglobal['value'] ?></span></h2>
             <p>ORANG</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End DATA GLOBAL -->

    <!-- ======= Data Kasus Indonesia ======= -->
    <section id="provinsi" class="provinsi">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Indonesia</h2>
        </div>
        <div class="row content" data-aos="fade-up">              
            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
              <table class="table table-bordered table-striped mb-0 " width="100%">
                <thead>
                <tr>
                  <th>No</th>  
                    <th>Provinsi</th>
                    <th>Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                    </thead>
                  </tr>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                      @foreach ($provinsi as $item)
                    <tr>
                      <td>{{$no++}}</td>                               
                      <td> {{$item->nama_provinsi}} </td>
                      <td> {{$item->positif}} </td>
                      <td> {{$item->sembuh}} </td>
                      <td> {{$item->meninggal}} </td>
                    </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Data Kasus Indonesia -->

    <!-- Data Kasus Global -->
    <section id="global" class="global">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kasus Global</h2>
        </div>

        <div class="row content" data-aos="fade-up">
              
            <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">

              <table class="table table-bordered table-striped mb-0 " width="100%">
                <thead>
                  <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Negara</center></th>
                    <th scope="col"><center>Jumlah Positif</center></th>
                    <th scope="col"><center>Jumlah Sembuh</center></th>
                    <th scope="col"><center>Jumlah Meninggal</center></th>
                  </tr>
                </thead>
              <tbody>
              @php
                $no = 1;
              @endphp
                @foreach($dunia as $data)
                    <tr>
                      <td> <?php echo $no++ ?></td>
                      <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                      <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                      <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                      <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
          </div>
        </div>

      </div>
      </section>
      <!-- End Data Kasus Global -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/vendor/php-email-form/validate.js"></script>
  <script src="frontend/vendor/purecounter/purecounter.js"></script>
  <script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/js/main.js"></script>

</body>

</html>