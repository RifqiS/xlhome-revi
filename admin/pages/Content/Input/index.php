<?php
$kode    = mysqli_query($db, "select max(id) as KODE from content");
$ar      = mysqli_fetch_array($kode);
$id_kode = $ar['KODE'];
$urut    = substr($id_kode, 6,2);
$urut++;
$id_baru = date('dmy').sprintf("%02s", $urut);

// PROSES TAMBAH
if (isset($_POST['tambah'])) {
    // var_dump($_FILES['logo_content']);
    // die;
	if( iContent($_POST) > 0 ){
		echo "<script>
			document.location.href='index.php?page=Content';
		</script>";
	}else{
		echo "<script>
            alert('Gagal Menambah Data!');
            document.location.href='?page=AddContent';
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
                            <input size="200" value="<?= $id_baru;?>" type="text" class="form-control border-primary" name="id_content" id="id_content" placeholder="" readonly required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="judul" id="judul" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="logo_content" class="col-sm-4 col-form-label">Logo</label>
                        <div class="col-md">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input size="200" type="file" class="form-control custom-file-input" name="logo_content" id="logo_content" required>
                                    <label class="custom-file-label border-primary" for="logo_content">Piilh Foto</label>
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
                                <input size="200" type="text" class="form-control border-primary" name="harga" id="harga" placeholder="" onkeypress="return isNumberKey(event)" required>
                                <div class="invalid-feedback">
                                    Tidak boleh kosong!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub_judul" class="col-sm-4 col-form-label">Sub Judul</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="sub_judul" id="sub_judul" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <h4>Fitur</h4>
                    <div class="form-group row">
                        <label for="fitur_1" class="col-sm-4 col-form-label">Fitur 1</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_1" id="fitur_1" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_2" class="col-sm-4 col-form-label">Fitur 2</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_2" id="fitur_2" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_3" class="col-sm-4 col-form-label">Fitur 3</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_3" id="fitur_3" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_4" class="col-sm-4 col-form-label">Fitur 4</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_4" id="fitur_4" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_5" class="col-sm-4 col-form-label">Fitur 5</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_5" id="fitur_5" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fitur_6" class="col-sm-4 col-form-label">Fitur 6</label>
                        <div class="col-md">
                            <input size="200" type="text" class="form-control border-primary" name="fitur_6" id="fitur_6" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-outline-primary" name="tambah" type="submit">Simpan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>