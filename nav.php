<?php
// include "assets/config/config.php";
$data = query("SELECT * FROM admin")[0];
?>

<style>
    .cnav {
        background-color: #002dbb;
        color: white;
    }

    .tfon {
        color: #002dbb;
    }
</style>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-dark cnav text-white border-bottom shadow-sm">
    <h5 class="my-0"><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/app/<?= $data['logo']; ?>" style="height: 70px; weight: 100px;"> </h5>
    <h5 class="my-0 mr-md-auto"><a href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>assets/img/app/<?= $data['logo2']; ?>" style="height: 40px; weight: 100px;"> </h5>
    <a class="p-2 cnav" href="<?= base_url(); ?>">Produk</a>
    <a class="p-2 cnav" href="<?= base_url(); ?>kontak">Kontak</a>
    </nav>
    <a class="btn btn-info" href="<?= base_url(); ?>register">Registrasi</a>
</div>