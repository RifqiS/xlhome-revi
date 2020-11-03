<?php
// Base Url
// $base_url = 'http://localhost/xlhome-revi/';
$base_url = 'http://localhost/2020/projek/xlhome-revi/';
?>

<style>
    .cnav {
        background-color: #002dbb;
        color: white;
    }
</style>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-dark cnav text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?= $base_url; ?>"><img src="<?= $base_url; ?>assets/img/app/<?= $_SESSION['logo']; ?>" alt="" style="height: 70px; weight: 100px;"></a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 cnav" href="<?= $base_url; ?>">Produk</a>
        <a class="p-2 cnav" href="<?= $base_url; ?>kontak">Kontak</a>
    </nav>
    <a class="btn btn-info" href="<?= $base_url; ?>register">Registrasi</a>
</div>
