<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: loginphp/index.php');
  exit();
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digical</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Digical</a></h1>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
          <li><a class="nav-link scrollto" href="berita.php">Berita</a></li>
          <li><a class="nav-link scrollto" href="gejala.php">Gejala</a></li>
          <li><a class="nav-link scrollto" href="dokter.php">Dokter</a></li>
          <li><a class="nav-link scrollto" href="tabel.php">Data</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php
      if (!isset($_SESSION['username'])) {
      ?>
      <?php } else { ?>
        <a href="loginphp/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</a>
      <?php } ?>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Selamat datang di Digical</h1>
      <h2>Informasi Kesahatan Terlengkap</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Kenapa Memilih Digical?</h3>
              <p>
                Digital Medical Information merupakan sebuah website yang memberikan informasi mengenai kesehatan,
                berita seputar kesehatan dan juga informasi terkait gejala–gejala penyakit dan cara mencegah agar tidak
                terkena penyakit tersebut.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-newspaper"></i>
                    <h4>Berita</h4>
                    <p>Bacalah berita-berita terkini mengenai dunia kesehatan</p>
                    <div class="text-center">
                      <a href="tabel.php" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-list-ol"></i>
                    <h4>Gejala</h4>
                    <p>Ketahuilah gejala-gejala dari penyakit-penyakit yang ada</p>
                    <div class="text-center">
                      <a href="gejala.php" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bi bi-person-fill"></i>
                    <h4>Dokter</h4>
                    <p>Konsultasikan dirimu ke dokter-dokter siaga kami</p>
                    <div class="text-center">
                      <a href="dokter.php" class="more-btn">Lanjut Baca <i class="bx bx-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/images/faces/face2.jpg" class="testimonial-img" alt="">
                  <h3>Dewi</h3>
                  <h4>Pengunjung</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Website nya sangat membantu dalam mencari informasi seputar kesehatan!!
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/images/faces/face10.jpg" class="testimonial-img" alt="">
                  <h3>Sarah</h3>
                  <h4>Pengunjung</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Website ini membuat saya menjadi tidak tertinggal berita tentang kesehatan saat ini, cool!
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena</h3>
                  <h4>Pengunjung</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Beritanya sangat up to date!!
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Budi</h3>
                  <h4>Pengujung</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Websitenya sangat user friendly, kerennn
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/images/faces/face6.jpg" class="testimonial-img" alt="">
                  <h3>Toni</h3>
                  <h4>Pengunjung</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Website ini mempunyai tampilan yang menarik sehingga kami sebagai pengunjung
                    nyaman untuk menjelajahi website ini.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact offset-lg-3">
            <h3>Digical</h3>
            <p>
              IPB University <br>
              Bogor, Jawa Barat<br>
              Indonesia <br><br>
              <strong>Phone:</strong> 081398232696<br>
              <strong>Email:</strong> abdullah@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links offset-lg-1">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="berita.php">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gejala.php">Gejala</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="dokter.php">Dokter</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container  py-4">

      <div class="text-center">
        <div class="copyright text-center">
          &copy; Copyright <strong><span>Digical</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>