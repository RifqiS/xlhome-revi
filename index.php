<?php
require "assets/config/config.php";
$data = query("SELECT * FROM admin")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['TitleHome']; ?></title>

    <!-- Bikin Icon di Tab -->
    <link rel="shortcut icon" href="<?= $base_url; ?>assets/img/app/<?= $data['logo']; ?>">

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

<body>
    <!-- Navigasi -->
    <?php
    include "nav.php";
    ?>
    <!-- /Navigasi -->
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 text-primary">Paket Fiber XL</h1>
        <p class="lead">Fiber Internet + TV Entertainment Box</p>
    </div>


    <!-- Top Produk Desktop -->
    <section class="d-none d-md-block">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">FAMILY</h3>
                        <h2 class="card-subtitle"><img src="assets/img/family-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>349.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 1-10 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">SUPER USERS</h3>
                        <h2 class="card-subtitle"><img src="assets/img/super-users-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>499.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 11-20 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">ULTIMATE</h3>
                        <h2 class="card-subtitle"><img src="assets/img/ultimate-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>999.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 21-30 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Top Produk Desktop -->

    <!-- Top Produk Mobile -->
    <section class="d-block d-md-none">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card shadow mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">FAMILY</h3>
                        <h2 class="card-subtitle"><img src="assets/img/family-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>349.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 1-10 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card shadow mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">SUPER USERS</h3>
                        <h2 class="card-subtitle"><img src="assets/img/super-users-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>499.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 11-20 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="card shadow mx-auto" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title">ULTIMATE</h3>
                        <h2 class="card-subtitle"><img src="assets/img/ultimate-speed.png" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup>999.000<small class="text-muted">/ bulan</small></h2>
                        <p class="card-text">Baik digunakan untuk 21-30 komputer atau gadget.</p>
                        <p class="card-text">Wi-Fi Fiber Modem</p>
                        <p class="card-text">IP Dynamic Private</p>
                        <a href="#" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Top Produk Mobile -->

    <?php
        include('footer.php');
    ?>
</body>

</html>