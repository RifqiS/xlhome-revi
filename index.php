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
                <?php
                    foreach ($content as $rows1) :
                ?>
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title"><?= $rows1['judul'];?></h3>
                        <h2 class="card-subtitle"><img src="<?= base_url();?>assets/img/content<?= $rows1['logo'];?>" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup><?= number_format($rows1['harga']);?><small class="text-muted">/ bulan</small></h2>
                        <p class="card-text"><?= $rows1['sub_judul'];?></p>
                        <p class="card-text"><?= $rows1['cont_1'];?></p>
                        <p class="card-text"><?= $rows1['cont_2'];?></p>
                        <a href="<?= base_url();?>register" class="btn btn-outline-primary">Daftar Sekarang</a>
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
                        <h3 class="card-title"><?= $rows1['judul'];?></h3>
                        <h2 class="card-subtitle"><img src="<?= base_url();?>assets/img/content/<?= $rows1['logo'];?>" alt="" srcset=""></h2>
                        <h2 class="card-subtitle mb-2"><sup>Rp</sup><?= number_format($rows1['harga']);?><small class="text-muted">/ bulan</small></h2>
                        <p class="card-text"><?= $rows1['sub_judul'];?></p>
                        <p class="card-text"><?= $rows1['cont_1'];?></p>
                        <p class="card-text"><?= $rows1['cont_2'];?></p>
                        <a href="<?= base_url();?>register" class="btn btn-outline-primary">Daftar Sekarang</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /Top Produk Mobile -->

    <?php
        include('footer.php');
    ?>
</body>

</html>