<?php
$_SESSION['CREATE_URI'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['idctn'])) {
    echo "<script>
			document.location.href='index.php?page=Content';
		</script>";
}

$id_content = $_SESSION['idctn'];

$data = query("SELECT * FROM `content` WHERE id = $id_content")[0];



// PROSES edit
if (isset($_POST['simpan'])) {
    // var_dump($_POST);
    // die;
    if (eContent($_POST) > 0) {
        echo "<script>
			document.location.href='index.php?page=Content';
		</script>";
    } else {
        echo "<script>
			alert('Gagal Menyimpan Data!');
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
        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col">
                    <h4>Data Aplikasi</h4>
                    <div class="form-group row">
                        <label for="id_content" class="col-sm-4 col-form-label">Id Content</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="id_content" id="id_content" value="<?= $id_content;?>" placeholder="" readonly required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="judul" id="judul" placeholder="" value="<?= $data["judul"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Logo</label>
                        <img src="<?= base_url(); ?>assets/img/upload/<?= $data["logo"];?>" alt="" width="100" height="100">
                        <input type="hidden" name="logo_lama" id="logo_lama" value="<?= $data["logo"];?>">
                        <div class="col-md">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input size="200" type="file" class="form-control custom-file-input" name="logo_content" id="logo_content">
                                    <label class="custom-file-label border-primary" for="foto_ktp">Piilh Foto</label>
                                    <div class="invalid-feedback">
                                        Tidak boleh kosong!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-4 col-form-label">Harga</label>
                        <div class="col-md">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp.</div>
                                </div>
                                <input size="200" type="text" class="form-control border-primary" name="harga" id="harga" placeholder="" onkeypress="return isNumberKey(event)" value="<?= $data["harga"];?>" required>
                                <div class="invalid-feedback">
                                    Tidak boleh kosong!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub_judul" class="col-sm-4 col-form-label">Sub Judul</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="sub_judul" id="sub_judul" placeholder="" value="<?= $data["sub_judul"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <h4>Fitur</h4>
                    <div class="form-group row">
                        <label for="fitur_1" class="col-sm-4 col-form-label">Fitur 1</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_1" id="fitur_1" placeholder="" value="<?= $data["cont_1"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_2" class="col-sm-4 col-form-label">Fitur 2</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_2" id="fitur_2" placeholder="" value="<?= $data["cont_2"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_3" class="col-sm-4 col-form-label">Fitur 3</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_3" id="fitur_3" placeholder="" value="<?= $data["cont_3"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_4" class="col-sm-4 col-form-label">Fitur 4</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_4" id="fitur_4" placeholder="" value="<?= $data["cont_4"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_5" class="col-sm-4 col-form-label">Fitur 5</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_5" id="fitur_5" placeholder="" value="<?= $data["cont_5"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_6" class="col-sm-4 col-form-label">Fitur 6</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_6" id="fitur_6" placeholder="" value="<?= $data["cont_6"];?>" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-outline-primary" name="simpan" id="simpan" type="submit">Simpan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>