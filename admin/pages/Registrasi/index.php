<?php
//  include "../../assets/config/config.php"
$reg = query("SELECT *, registrasi.id AS regid, content.id AS conid FROM registrasi LEFT JOIN content ON registrasi.paket = content.id");
?>
<div class="container mx-auto text-center">
    <h2>Content</h2>
</div>
<div class="container">
    <div class="row justify-content-md-center mx-n1">
        <div class="row">
            <div class="col">
                <a class="btn btn-primary text-decoration-none" href="?page=AddContent"><i class="fa fa-plus"></i> Tambah Data</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th>Email</th>
                            <th>Paket</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($reg as $rows) :
                        ?>
                            <tr>
                                <td class="align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $rows['nama']; ?></td>
                                <td class="align-middle"><?= $rows['email']; ?></td>
                                <td class="align-middle"><?= $rows['judul']; ?></td>
                                <td class="align-middle">
                                    <?= $rows['kecamatan']; ?>
                                    <?= $rows['kota']; ?>
                                    <?= $rows['desa']; ?>
                                    <?= $rows['kodepos']; ?>
                                    <?= $rows['alamat']; ?>
                                </td>
                                <td class="align-middle"><?= $rows['statusRead']; ?></td>
                                <td class="align-middle">
                                    <form action="" method="POST">
                                        <button class="btn btn-warning" name="edit" id="edit" value="<?= $rows['regid']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" name="hapus" id="hapus" value="<?= $rows['regid']; ?>"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>