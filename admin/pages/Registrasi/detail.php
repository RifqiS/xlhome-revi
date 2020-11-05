<?php
include "../../../assets/config/config.php";
if (isset($_POST['rowid'])) {
    $id = $_POST['rowid'];
    $cari = query("SELECT *, registrasi.id AS regid, content.id AS conid FROM registrasi LEFT JOIN content ON registrasi.paket = content.id WHERE registrasi.id = '$id'")[0];
}
?>

<h4>Identitas</h4>
<table class="table">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $cari['nama']; ?></td>
    </tr>
    <tr>
        <td>email</td>
        <td>:</td>
        <td><?= $cari['email']; ?></td>
    </tr>
    <tr>
        <td>No HandPhone</td>
        <td>:</td>
        <td><?= $cari['noHp']; ?></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><?= $cari['tlp']; ?></td>
    </tr>
    <tr>
        <td rowspan="2" class="align-middle">Alamat</td>
        <td rowspan="2" class="align-middle">:</td>
        <td>
            Kecamatan <?= $cari['kecamatan']; ?>
            Kota <?= $cari['kota']; ?>
            Desa <?= $cari['desa']; ?>
            Kode Pos <?= $cari['kodepos']; ?>
        </td>
    </tr>
    <tr>
        <td><?= $cari['alamat']; ?></td>
    </tr>
    <tr>
        <td rowspan="2" class="align-middle">#</td>
        <td rowspan="2" class="align-middle">:</td>
        <td>
            <img src="<?= base_url(); ?>assets/img/register/<?= $cari['fotoSelfie']; ?>" alt="" width="200" height="100">
        </td>
    </tr>
    <tr>
        <td>
            <img src="<?= base_url(); ?>assets/img/register/<?= $cari['fotoKtp']; ?>" alt="" width="200" height="100">
        </td>
    </tr>
</table>

<h4>Pemesanan</h4>
<table class="table">
    <tr>
        <td>Paket</td>
        <td>:</td>
        <td><?= $cari['judul']; ?></td>
    </tr>
    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><?= number_format($cari['harga']); ?></td>
    </tr>
</table>