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

    <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src=" https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

</head>

<style>
    .section-title {
        margin-top: 50px;
    }

    .btn-simpan,
    .btn-import {
        background: #1fac96;
        color: white;
    }

    .btn-simpan:hover,
    .btn-import:hover {
        background: #178171;
        color: white;
    }
</style>

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
                    <li><a class="nav-link scrollto" href="dokter.php">Dokter</a></li>
                    <li><a class="nav-link scrollto active" href="tabel.php">Data</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <?php
            session_start();
            if (!isset($_SESSION['username'])) {
            ?>
                <a href="loginphp/index.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>
            <?php } else { ?>
                <a href="loginphp/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Logout</a>
            <?php } ?>

        </div>
    </header><!-- End Header -->

    <?php
    $host       = "localhost";
    $user       = "root";
    $pass       = "";
    $db         = "digical_pabweb";

    $koneksi    = mysqli_connect($host, $user, $pass, $db);
    if (!$koneksi) { //cek koneksi
        die("Tidak bisa terkoneksi ke database");
    }
    $nama_penyakit       = "";
    $nama_obat       = "";
    $jenis_obat     = "";
    $sukses     = "";
    $error      = "";

    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    } else {
        $op = "";
    }
    if ($op == 'delete') {
        $id         = $_GET['id'];
        $sql1       = "delete from pasien where id = '$id'";
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses = "Berhasil hapus data";
        } else {
            $error  = "Gagal melakukan delete data";
        }
    }
    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql1       = "select * from pasien where id = '$id'";
        $q1         = mysqli_query($koneksi, $sql1);
        $r1         = mysqli_fetch_array($q1);
        $nama_penyakit       = $r1['nama_penyakit'];
        $nama_obat       = $r1['nama_obat'];
        $jenis_obat     = $r1['jenis_obat'];

        if ($nama_penyakit == '') {
            $error = "Data tidak ditemukan";
        }
    }
    if (isset($_POST['simpan'])) { //untuk create
        $nama_penyakit       = $_POST['nama_penyakit'];
        $nama_obat       = $_POST['nama_obat'];
        $jenis_obat     = $_POST['jenis_obat'];

        if ($nama_penyakit && $nama_obat && $jenis_obat) {
            if ($op == 'edit') { //untuk update
                $sql1       = "update pasien set nama_penyakit = '$nama_penyakit',nama_obat='$nama_obat',jenis_obat = '$jenis_obat' where id = '$id'";
                $q1         = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error  = "Data gagal diupdate";
                }
            } else { //untuk insert
                $sql1   = "insert into pasien(nama_penyakit,nama_obat,jenis_obat) values ('$nama_penyakit','$nama_obat','$jenis_obat')";
                $q1     = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    $sukses     = "Berhasil memasukkan data baru";
                } else {
                    $error      = "Gagal memasukkan data";
                }
            }
        } else {
            $error = "Silakan masukkan semua data";
        }
    }
    ?>

    <main id="main">

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Data</h2>
                </div>

                <!-- CRUD Start -->
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- untuk memasukkan data -->
                            <div class="card">
                                <div class="card-header">
                                    Create / Edit Data
                                </div>
                                <div class="card-body">
                                    <?php
                                    if ($error) {
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $error ?>
                                        </div>
                                    <?php
                                        header("refresh:5;url=tabel.php"); //5 : detik
                                    }
                                    ?>
                                    <?php
                                    if ($sukses) {
                                    ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo $sukses ?>
                                        </div>
                                    <?php
                                        header("refresh:5;url=tabel.php");
                                    }
                                    ?>
                                    <form action="" method="POST">
                                        <div class="mb-3 row">
                                            <label for="nama_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" value="<?php echo $nama_penyakit ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nama_obat" class="col-sm-2 col-form-label">Nama Obat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?php echo $nama_obat ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jenis_obat" class="col-sm-2 col-form-label">Jenis Obat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="<?php echo $jenis_obat ?>">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-12 m-2">
                                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-simpan" />
                                </div>
                                </form>

                                <div class="container mt-3">
                                    <h5 class="my-3">Import File Excel</h5>
                                    <form method="post" enctype="multipart/form-data" action="proses.php">
                                        <div class="form-group">
                                            <input type="file" name="berkas_excel" class="form-control" id="exampleInputFile" required>
                                        </div>
                                        <button type="submit" class="btn btn-import my-3">Import</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- CRUD End -->

                <!-- Tabel Start -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <!-- untuk mengeluarkan data -->
                            <div class="card">
                                <div class="card-header text-white bg-secondary">
                                    Data Obat
                                </div>
                                <div class="card-body">
                                    <table class="table" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Penyakit</th>
                                                <th scope="col">Nama Obat</th>
                                                <th scope="col">Jenis Obat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql2   = "select * from pasien order by id desc";
                                            $q2     = mysqli_query($koneksi, $sql2);
                                            $urut   = 1;
                                            while ($r2 = mysqli_fetch_array($q2)) {
                                                $id = $r2['id'];
                                                $nama_penyakit = $r2['nama_penyakit'];
                                                $nama_obat = $r2['nama_obat'];
                                                $jenis_obat = $r2['jenis_obat'];

                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $urut++ ?></th>
                                                    <td scope="row"><?php echo $nama_penyakit ?></td>
                                                    <td scope="row"><?php echo $nama_obat ?></td>
                                                    <td scope="row"><?php echo $jenis_obat ?></td>
                                                    <td scope="row">
                                                        <a href="tabel.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                        <a href="tabel.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tabel End -->

                <!-- Grafik Start -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    Grafik Jenis Obat
                                </div>
                                <div class="card-body">
                                    <?php
                                    include('vendor\fusioncharts\integrations\php\samples\includes\fusioncharts.php');

                                    $sql3   = "SELECT *, COUNT(id) AS jumlah FROM pasien GROUP BY(jenis_obat)";
                                    $q3     = mysqli_query($koneksi, $sql3);

                                    if ($q3) {

                                        $arrData = array(
                                            "chart" => array(
                                                "caption" => "Pembagian Jenis Obat",
                                                "showValues" => "0",
                                                "theme" => "fusion"
                                            )
                                        );

                                        $arrData["data"] = array();

                                        while ($row = mysqli_fetch_array($q3)) {
                                            array_push(
                                                $arrData["data"],
                                                array(
                                                    "label" => $row["jenis_obat"],
                                                    "value" => $row["jumlah"]
                                                )
                                            );
                                        }

                                        $jsonEncodedData = json_encode($arrData);

                                        $columnChart = new FusionCharts("column2D", "myFirstChart", 700, 400, "chart-1", "json", $jsonEncodedData);

                                        $columnChart->render();
                                    }
                                    ?>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 offset-lg-2">
                                                <div id="chart-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grafik End -->

            </div>
        </section>
    </main>

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

    <!-- Data Table Script -->
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="./data-table/dataTable.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>