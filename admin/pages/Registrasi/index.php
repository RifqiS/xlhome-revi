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
                <a class="btn btn-success text-decoration-none" target="_blank" href="pages/registrasi/export_excel.php"><i class="fa fa-floppy-o"></i> EXPORT KE EXCEL</a>
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
                            $st = $rows['statusRead'];
                            if ($st == 0) {
                                echo "<tr style='background-color: #ff5b5b'>";
                                $str = "Not Read";
                            }elseif($st == 1){
                                echo "<tr style='background-color: #0080ff'>";
                                $str = "Readed";
                            }elseif($st == 2){
                                echo "<tr style='background-color: #c0c0c0'>";
                                $str = "Export";
                            }
                        ?>
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
                                <td class="align-middle"><?= $str; ?></td>
                                <td class="align-middle">
                                    <form action="" method="POST">
                                        <!-- <button class="btn btn-warning" name="edit" id="edit" value="<?= $rows['regid']; ?>"><i class="fa fa-pencil-square-o"></i></button> -->
                                        <!-- <button class="btn btn-danger" name="hapus" id="hapus" value="<?= $rows['regid']; ?>"><i class="fa fa-trash"></i></button> -->
                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regis_detail" data-id="<?= $rows['regid']; ?>">
                                            <i class="fa fa-info-circle"></i>
                                        </button>
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

<!-- Modal -->
<div class="modal fade" id="regis_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title id=" exampleModalLabel"">Detail</h5>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="fetched-data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href = '';">Keluar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#regis_detail').on('show.bs.modal', function(e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type: 'post',
                url: 'pages/registrasi/detail.php',
                data: 'rowid=' + rowid,
                success: function(data) {
                    $('.fetched-data').html(data); //menampilkan data ke dalam modal
                }
            });
        });
    });
</script>