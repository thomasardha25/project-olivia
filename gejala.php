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

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Digical</a></h1>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="berita.php">Berita</a></li>
                    <li><a class="nav-link scrollto active" href="gejala.php">Gejala</a></li>
                    <li><a class="nav-link scrollto" href="dokter.php">Dokter</a></li>
                    <li><a class="nav-link scrollto " href="tabel.php">Tabel Pasien</a></li>
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
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <main id="main">
        <!-- ======= Gejala Section ======= -->
        <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>Gejala</h2>
                    <p>Halaman ini menampilkan gejala-gejala penyakit seperti Diabetes, Flu, Covid-19, Diare, Stroke, Asam lambung, Asma, Vertigo
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Asam Lambung</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Asma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Covid-19</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Diabetes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Diare</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Flu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Stroke</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Vertigo</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">

                            <!-- ASAM LAMBUNG -->
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Asam Lambung</h3>
                                        <p>Penyakit asam lambung atau gastroesophageal reflux disease (GERD) adalah
                                            kondisi ketika asam lambung naik ke esofagus atau kerongkongan. Kondisi ini
                                            dapat menimbulkan
                                            nyeri pada ulu hati, heartburn, serta berbagai gejala lainnya pada area dada
                                            bagian bawah dan
                                            perut. </p>
                                        <h3>Gejala Asam Lambung</h3>
                                        <ol>
                                            <li>Batuk kering secara terus-menerus di malam hari</li>
                                            <li>Sakit pada bagian dada</li>
                                            <li>Kesulitan pernapasan</li>
                                            <li>Tenggorokan serak</li>
                                            <li>Bau mulut</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/asam_lambung.jpeg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- ASAM LAMBUNG END -->

                            <!-- ASMA -->
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Asma</h3>
                                        <p>Asma adalah salah satu masalah paru-paru yang membuat pengidapnya kesulitan
                                            bernapas akibat peradangan dan penyempitan pada saluran pernapasan. Tak
                                            hanya kesulitan bernapas,
                                            asma juga menyebabkan gejala lain seperti mengi, batuk-batuk, dan nyeri
                                            dada. Saluran pernapasan
                                            pada pengidap asma lebih sensitif dibandingkan dengan orang lain tanpa asma.
                                            Ketika paru-paru
                                            teriritasi akibat zat pemicu (asap rokok, debu, bulu binatang, dll.), maka
                                            otot-otot saluran
                                            pernapasan pada pengidapnya menjadi kaku dan menyempit.</p>
                                        <h3>Gejala Asma</h3>
                                        <ol>
                                            <li>Sesak dada</li>
                                            <li>Batuk</li>
                                            <li>Sesak napas</li>
                                            <li>Mengi, yang menyebabkan suara siulan saat mengeluarkan napas</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/asma.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- ASMA END -->

                            <!-- COVID -->
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Covid-19</h3>
                                        <p>Corona Virus Disease 2019 atau yang biasa disingkat COVID-19 adalah penyakit
                                            menular yang disebabkan oleh SARS-CoV-2, salah satu jenis koronavirus.
                                            Penderita COVID-19 dapat
                                            mengalami demam, batuk kering, dan kesulitan bernafas.</p>
                                        <h3>Gejala Covid-19</h3>
                                        <ol>
                                            <li>Demam </li>
                                            <li>Batuk </li>
                                            <li>Kelelahan </li>
                                            <li>Kehilangan rasa atau bau </li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/covid.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- COVID END -->

                            <!-- DIABETES -->
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Diabetes</h3>
                                        <p>Diabetes adalah penyakit kronis atau yang berlangsung jangka panjang yang
                                            ditandai dengan meningkatnya kadar gula darah (glukosa) hingga di atas nilai
                                            normal. Ada dua jenis
                                            utama diabetes, yaitu diabetes tipe 1 dan tipe 2.</p>
                                        <h3>Gejala Diabetes</h3>
                                        <ol type="1">
                                            <li>Meningkatnya frekuensi buang air kecil</li>
                                            <li>Rasa haus berlebihan</li>
                                            <li>Penurunan berat badan</li>
                                            <li>Kelaparan</li>
                                            <li>Kulit jadi bermasalah</li>
                                            <li>Penyembuhan lambat</li>
                                            <li>Infeksi jamur</li>
                                            <li>Iritasi genital</li>
                                            <li>Keletihan dan mudah tersinggung</li>
                                            <li>Pandangan yang kabur</li>
                                            <li>Kesemutan atau mati rasa</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/diabetes.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- DIABETES END -->

                            <!-- DIARE -->
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Diare</h3>
                                        <p>Diare adalah penyakit yang membuat penderitanya menjadi sering buang air
                                            besar
                                            dengan kondisi tinja yang encer atau berair. Diare umumnya terjadi akibat
                                            mengonsumsi makanan dan
                                            minuman yang terkontaminasi virus, bakteri, atau parasit.</p>
                                        <h3>Gejala Diare</h3>
                                        <ol>
                                            <li>Feses lembek dan cair </li>
                                            <li>Nyeri dan kram perut </li>
                                            <li>Mual dan muntah </li>
                                            <li>Nyeri kepala </li>
                                            <li>Kehilangan nafsu makan </li>
                                            <li>Haus terus-menerus </li>
                                            <li>Darah pada feses </li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/diare.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- DIARE END -->

                            <!-- FLU -->
                            <div class="tab-pane" id="tab-6">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Flu</h3>
                                        <p>Flu merupakan penyakit yang disebabkan oleh infeksi virus yang dapat
                                            menyerang
                                            hidung, tenggorokan, dan paru-paru. Flu atau influenza ini sangat umum
                                            terjadi di musim pancaroba.
                                            Penyakit ini sangat mudah menular ke orang lain, terutama ketika 3–4 hari
                                            pertama setelah
                                            pengidapnya terinfeksi virus flu,</p>
                                        <h3>Gejala Flu</h3>
                                        <ol>
                                            <li>Demam </li>
                                            <li>Batuk </li>
                                            <li>Sakit tenggorokan </li>
                                            <li>Hidung meler </li>
                                            <li>Nyeri otot atau tubuh </li>
                                            <li>Sakit kepala </li>
                                            <li>Kelelahan </li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/flu.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- FLU END -->

                            <!-- STROKE -->
                            <div class="tab-pane" id="tab-7">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Stroke</h3>
                                        <p>Stroke adalah kondisi yang terjadi ketika pasokan darah ke otak mengalami
                                            gangguan atau berkurang
                                            akibat penyumbatan (stroke iskemik) atau pecahnya pembuluh darah (stroke
                                            hemoragik).</p>
                                        <h3>Gejala Stroke</h3>
                                        <ol>
                                            <li>Peningkatan tekanan darah mendadak. </li>
                                            <li>Salah satu sisi mulut dan wajah penderita terlihat turun. </li>
                                            <li>Kelelahan tiba-tiba. </li>
                                            <li>Kesemutan tubuh. </li>
                                            <li>Cara bicara jadi kacau dan tidak jelas. </li>
                                            <li>Lengan atau kaki mengalami kelumpuhan atau sulit diangkat. </li>
                                            <li>Kehilangan keseimbangan atau koordinasi tubuh. </li>
                                            <li>Diplopia (pandangan ganda). </li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/stroke.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- STROKE END -->

                            <!-- VERTIGO -->
                            <div class="tab-pane" id="tab-8">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Pengertian Vertigo</h3>
                                        <p>Vertigo merupakan rasa pusing yang menimbulkan sensasi palsu bahwa seseorang
                                            atau lingkungan di sekitarnya berputar atau bergerak. Kondisi ini juga dapat
                                            terjadi secara
                                            tiba-tiba pada seseorang. Perlu diketahui bahwa vertigo bukanlah sebuah
                                            penyakit, melainkan gejala
                                            dari gangguan kesehatan yang mendasarinya. Pada kasus yang parah, kondisi
                                            ini juga dapat
                                            menghambat aktivitas sehari-hari. </p>
                                        <h3>Gejala Vertigo</h3>
                                        <ol>
                                            <li>Peningkatan keringat</li>
                                            <li>Mual</li>
                                            <li>Muntah</li>
                                            <li>Sakit kepala</li>
                                            <li>Telinga terasa berdengung</li>
                                            <li>Timbulnya gangguan pendengaran</li>
                                            <li>Kehilangan keseimbangan</li>
                                        </ol>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/vertigo.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- VERTIGO END -->


                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Gejala Section -->




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

    <script src="assets/js/main.js"></script>

</body>

</html>
