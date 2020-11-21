<?php
include "assets/config/config.php";
$data = query("SELECT * FROM admin")[0];
$content = query("SELECT * FROM content");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['TitleHome']; ?></title>

    <!-- Bikin Icon di Tab -->
    <!-- <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/app/<?= $data['logo']; ?>"> -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/app/xlhome-logo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-webfont.ttf">
    <!-- /CSS -->

    <!-- ICON -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- END ICON -->

    <!-- JS -->
    <script src="assets/jQuery/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- /JS -->
</head>

<body class="font-weight-bold">
    <!-- Navigasi -->
    <?php
    include "nav.php";
    ?>

    <div class="" style="background-color: #00d2a0;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <img class="d-block w-100" height="350" src="<?= base_url(); ?>assets/img/banner/Banner-XL-HomeDesktop-new.png" alt="slide">
                        </div>
                        <div class="col col-6 d-none d-md-block">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col">
                                    <h2 class="font-weight-bold tfon">Hiburan Tanpa Batas</h2>
                                    <p class="font-weight-bold tfon">Bisa Nonton Video Original Series</p>
                                    <a href="<?= base_url(); ?>register" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <img class="d-block w-100" height="350" src="<?= base_url(); ?>assets/img/banner/izi-desktop.png" alt="slide">
                        </div>
                        <div class="col col-6 d-none d-md-block">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col">
                                    <h2 class="font-weight-bold tfon">XL HOME Izi, Solusi Praktis Koneksi Super Cepat</h2>
                                    <p class="font-weight-bold tfon">Nikmati Kecepatan 4G LTE Di Rumah, Tempat Kost Atau Apartement Anda #takeltIZi</p>
                                    <a href="<?= base_url(); ?>register" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <img class="d-block w-100" height="350" src="<?= base_url(); ?>assets/img/banner/Image-banner-webDesktop.png" alt="slide">
                        </div>
                        <div class="col col-6 d-none d-md-block">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col">
                                    <h2 class="font-weight-bold tfon">Promo Terbaru</h2>
                                    <h1 class="font-weight-bold tfon">Super Booster !</h1>
                                    <a href="<?= base_url(); ?>register" class="btn btn-primary">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- /Navigasi -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 font-weight-bold tfon">Paket Fiber XL</h1>
        <p class="lead font-weight-bold">Fiber Internet + TV Entertainment Box</p>
    </div>


    <!-- Top Produk Desktop -->
    <section class="d-none d-md-block">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <?php
                foreach ($content as $rows1) :
                ?>
                    <div class="card shadow" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title tfon"><?= $rows1['judul']; ?></h3>
                            <h2 class="card-subtitle"><img src="<?= base_url(); ?>assets/img/content/<?= $rows1['logo']; ?>" alt="" srcset="" width="186" height="155"></h2>
                            <h2 class="card-subtitle mb-2"><sup>Rp</sup><?= number_format($rows1['harga']); ?><small class="text-muted">/ bulan</small></h2>
                            <p class="card-text"><?= $rows1['sub_judul']; ?></p>
                            <p class="card-text"><?= $rows1['cont_1']; ?></p>
                            <p class="card-text"><?= $rows1['cont_2']; ?></p>
                            <a href="<?= base_url(); ?>register" class="btn btn-outline-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /Top Produk Desktop -->

    <!-- Top Produk Mobile -->
    <section class="d-block d-md-none">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <?php
                foreach ($content as $rows1) :
                ?>
                    <div class="card shadow mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title"><?= $rows1['judul']; ?></h3>
                            <h2 class="card-subtitle"><img src="<?= base_url(); ?>assets/img/content/<?= $rows1['logo']; ?>" alt="" srcset="" width="186" height="155"></h2>
                            <h2 class="card-subtitle mb-2"><sup>Rp</sup><?= number_format($rows1['harga']); ?><small class="text-muted">/ bulan</small></h2>
                            <p class="card-text"><?= $rows1['sub_judul']; ?></p>
                            <p class="card-text"><?= $rows1['cont_1']; ?></p>
                            <p class="card-text"><?= $rows1['cont_2']; ?></p>
                            <a href="<?= base_url(); ?>register" class="btn btn-outline-primary">Daftar Sekarang</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /Top Produk Mobile -->

    <section class="pt-3">
        <div class="container">
            <div class="mb-3 text-center w-auto">
                <div class="row mx-5">
                    <img src="<?= base_url(); ?>assets/img/banner/plan-info-homepage.png" width="100%" alt="">
                </div>
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h3 class="font-weight-bold text-primary">AKSES HIBURAN TANPA BATAS!</h3>
                </div>
                <div class="row mx-5">
                    <img src="<?= base_url(); ?>assets/img/banner/logo-product-xlhome-new-1.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="fixed-bottom mb-5">
        <a class="text-decoration-none float-right" href="https://api.whatsapp.com/send?phone=<?= $data['wa'] ?>"><img src="<?= base_url(); ?>assets/img/WhatsApp-icon-PNG.png" height="60" width="60" alt=""></a>
    </div>


    <?php
    include('footer.php');
    ?>
</body>

</html>