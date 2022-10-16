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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                    <li><a class="nav-link scrollto" href="index.php#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="berita.php">Berita</a></li>
                    <li><a class="nav-link scrollto" href="gejala.php">Gejala</a></li>
                    <li><a class="nav-link scrollto active" href="dokter.php">Dokter</a></li>
                    <li><a class="nav-link scrollto" href="tabel.php">Tabel Pasien</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

          <?php
            session_start();
            if(!isset($_SESSION['username'])) {
          ?>
          <a href="loginphp/index.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>
          <?php } else { ?>
          <a href="loginphp/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</a>
          <?php } ?>
        </div>
    </header><!-- End Header -->


    <main id="main">

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Dokter</h2>
                    <p>Konsultasi Dengan Dokter Siaga Kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/abdullah.jpeg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Muhammad Abdullah Alwahdi</h4>
                                <span>Dokter Umum</span>
                                <p>Dokter umum adalah seorang dokter yang berfokus untuk menangani gejala dan penyakit pada pasien secara umum</p>
                                <div class="social">
                                    <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/timothy.jpeg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Timothy Andeswara</h4>
                                <span>Dokter Gigi</span>
                                <p>Dokter gigi adalah seorang dokter yang khusus mempelajari ilmu kesehatan dan penyakit pada gigi dan mulut</p>
                                <div class="social">
                                    <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 offset-lg-3">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="assets/img/doctors/subkhan.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Subhan Avina Dewanto</h4>
                                <span>Dokter saraf</span>
                                <p>Dokter saraf atau neurologis adalah dokter spesialis yang mendiagnosis dan mengobati masalah yang berkaitan dengan otak dan sistem saraf</p>
                                <div class="social">
                                    <a href="https://wa.me/082112459616"><i class="ri-whatsapp-fill"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
