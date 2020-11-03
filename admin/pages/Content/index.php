<?php
//  include "../../assets/config/config.php"
$data = query("SELECT * FROM content");

// FORM EDIT
if (isset($_POST['edit'])) {
    echo "<script>
			document.location.href='index.php?page=EditContent';
		</script>";
    $_SESSION['idctn'] = $_POST['edit'];
}

// PROSES HAPUS
if (isset($_POST['hapus'])) {
	if( hContent($_POST) > 0 ){
		echo "<script>
			document.location.href='index.php?page=Content';
		</script>";
	}else{
		echo "<script>
            alert('Gagal Menghapus!');
            // document.location.href='?page=Content';
		</script>";
		mysqli_error($db);	
	}
}
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
                            <th scope="col">Judul</th>
                            <th>Logo</th>
                            <th>Harga</th>
                            <th>Sub Judul</th>
                            <th>Fitur 1</th>
                            <th>Fitur 2</th>
                            <th>Fitur 3</th>
                            <th>Fitur 4</th>
                            <th>Fitur 5</th>
                            <th>Fitur 6</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $rows) :
                        ?>
                            <tr>
                                <td class="align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $rows['judul']; ?></td>
                                <td class="align-middle"><img src="<?= base_url(); ?>assets/img/content/<?= $rows['logo']; ?>" alt="" width="100" height="100"></td>
                                <td class="align-middle"><?= $rows['harga']; ?></td>
                                <td class="align-middle"><?= $rows['sub_judul']; ?></td>
                                <td class="align-middle"><?= $rows['cont_1']; ?></td>
                                <td class="align-middle"><?= $rows['cont_2']; ?></td>
                                <td class="align-middle"><?= $rows['cont_3']; ?></td>
                                <td class="align-middle"><?= $rows['cont_4']; ?></td>
                                <td class="align-middle"><?= $rows['cont_5']; ?></td>
                                <td class="align-middle"><?= $rows['cont_6']; ?></td>
                                <td class="align-middle">
                                    <form action="" method="POST">
                                        <button class="btn btn-warning" name="edit" id="edit" value="<?= $rows['id']; ?>"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" name="hapus" id="hapus" value="<?= $rows['id']; ?>"><i class="fa fa-trash"></i></button>
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