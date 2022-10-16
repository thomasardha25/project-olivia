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

    <!-- Template Main CSS File -->
    <link href="assets/css/berita.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Digical</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto active" href="#services">Berita</a></li>
                    <li><a class="nav-link scrollto" href="gejala.php">Gejala</a></li>
                    <li><a class="nav-link scrollto" href="dokter.php">Dokter</a></li>
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

    <div class="content-wrapper">
        <div class="container">


            <div class="row">
                <div class="col-xl-8 stretch-card grid-margin">
                    <div class="position-relative">
                        <img src="assets/images/dashboard/banner.jpg" alt="banner" class="img-fluid" />
                        <div class="banner-content">
                            <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                Berita Dunia
                            </div>
                            <h2 class="mb-0">GLOBAL PANDEMIC</h2>
                            <h2 class="mb-2">
                                WHO Tetapkan Cacar Monyet Darurat Kesehatan Global
                            </h2>
                            <div class="fs-12">
                                <span class="mr-2">Photo </span>10 Minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 stretch-card grid-margin">
                    <div class="card text-dark">
                        <div class="card-body">
                            <h2>Berita Terkini</h2>

                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h6>WHO Catat Lebih dari 6.000 Kasus Cacar Monyet</h6>
                                    <div class="fs-12">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                </div>
                                <div class="rotate-img">
                                    <img src="assets/images/dashboard/home_1.jpg" alt="thumb"
                                        class="img-fluid img-lg" />
                                </div>
                            </div>

                            <div class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h6>Kasus Covid-19 di Yogyakarta Melandai</h6>
                                    <div class="fs-12">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                </div>
                                <div class="rotate-img">
                                    <img src="assets/images/dashboard/home_2.jpg" alt="thumb"
                                        class="img-fluid img-lg" />
                                </div>
                            </div>

                            <div class="d-flex pt-4 align-items-center justify-content-between">
                                <div class="pr-3">
                                    <h6>WHO Sebut Akhir Pandemi COVID Depan Mata</h6>
                                    <div class="fs-12">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                </div>
                                <div class="rotate-img">
                                    <img src="assets/images/dashboard/home_3.jpg" alt="thumb"
                                        class="img-fluid img-lg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="assets/images/dashboard/home_4.jpg" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Flash news</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        Indonesia Bersiap Menuju Endemi
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                    <p class="mb-0">
                                        Indonesia saat ini sedang bersiap untuk menuju endemi, hal ini didasarkan pada
                                        parameter penilaian COVID-19 yang terus melandai. Meskipun demikian kewaspadaan
                                        terhadap adanya kemungkinan mutasi virus tetap dilakukan.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 grid-margin">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="assets/images/dashboard/home_5.jpg" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Flash news</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8  grid-margin">
                                    <h2 class="mb-2 font-weight-600">
                                        Kasus Monkeypox Mulai Melandai
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                    <p class="mb-0">
                                        Pemerintah kembali memperbarui data perkembangan Monkeypox di Indonesia. Per
                                        tanggal 28 September 2022, akumulasi dugaan kasus Monkeypox tercatat sekitar 75
                                        kasus, terdiri dari 1 kasus konfirmasi, 1 kasus suspek, dan 73 kasus discarded.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="position-relative">
                                        <div class="rotate-img">
                                            <img src="assets/images/dashboard/home_6.jpg" alt="thumb"
                                                class="img-fluid" />
                                        </div>
                                        <div class="badge-positioned">
                                            <span class="badge badge-danger font-weight-bold">Flash news</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h2 class="mb-2 font-weight-600">
                                        Kasus Probable Hepatitis Akut Bertambah 3 Orang, Total 99 Kasus
                                    </h2>
                                    <div class="fs-13 mb-2">
                                        <span class="mr-2">Photo </span>10 Minutes ago
                                    </div>
                                    <p class="mb-0">
                                        Kasus baru Hepatitis Akut yang belum diketahui penyebabnya bertambah. Data per
                                        29 September 2022 pukul 16.00 WIB, kasus probable Hepatitis Akut bertambah 3
                                        kasus sehingga totalnya menjadi 38 orang, kasus pending bertambah 5 orang total
                                        12 orang, sementara kasus discarded tetap di 49 kasus. Dengan demikian total
                                        kasus Hepatitis Akut di Indonesia menjadi 99 kasus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-title">
                                        Video
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="assets/images/dashboard/home_7.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="badge badge-danger font-weight-bold">Berita
                                                            Dunia</span>
                                                        <div class="video-icon">
                                                            <i class="bi-play-btn-fill align-self-center"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="assets/images/dashboard/home_8.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="badge badge-danger font-weight-bold">Berita
                                                            Nasional</span>
                                                        <div class="video-icon">
                                                            <i class="bi-play-btn-fill align-self-center"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="assets/images/dashboard/home_9.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="badge badge-danger font-weight-bold">Berita
                                                            Dunia</span>
                                                        <div class="video-icon">
                                                            <i class="bi-play-btn-fill align-self-center"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="assets/images/dashboard/home_10.jpg" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="badge badge-danger font-weight-bold">Berita
                                                            Nasional</span>
                                                        <div class="video-icon">
                                                            <i class="bi-play-btn-fill align-self-center"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">
                                            Latest Video
                                        </div>
                                        <p class="mb-3">See all</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_11.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600 mb-0">
                                            Kenali Gejala-Gejala Sinusitis
                                        </h6>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_12.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600 mb-0">
                                            Pengendalian Penularan Rabies
                                        </h6>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_13.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600 mb-0">
                                            Pandemi Semakin Melandai
                                        </h6>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_14.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600">
                                            Deteksi Dini Penyakit Jantung
                                        </h6>
                                    </div>
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_16.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600">
                                            Kesehatan Mental Saat Pandemi
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-3">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img src="assets/images/dashboard/home_15.jpg" alt="thumb"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <h6 class="font-weight-600 mb-0">
                                            Hepatitis Akut Masuk Indonesia
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <main id="main">

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
