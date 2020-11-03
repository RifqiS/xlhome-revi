<?php
//  include "../../assets/config/config.php"
    $data = query("SELECT * FROM `admin` WHERE id = 'Un!X1d@4pp'")[0];
// PROSES TAMBAH
    if (isset($_POST['simpan'])) {		
        if( eAdmin($_POST) > 0 ){
            echo "<script>
                document.location.href='index.php?page=Settings';
            </script>";
        }else{
            echo "<script>
                alert('Gagal Menyimpan Data!');
            </script>";
            mysqli_error($db);	
        }
    }
?>
<div class="container mx-auto text-center">
    <h2>Setting</h2>
</div>
<div class="container">
    <div class="row justify-content-md-center mx-n1">
        <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col">
                    <h4>Data Aplikasi</h4>
                    <div class="form-group row">
                        <label for="id_aplikasi" class="col-sm-4 col-form-label">Id Aplikasi</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["id"];?>" type="text" class="form-control border-primary" name="id_aplikasi" id="id_aplikasi" placeholder="" readonly required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-4 col-form-label">Username</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["user"];?>" type="text" class="form-control border-primary" name="username" id="username" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["pass"];?>" type="password" class="form-control border-primary" name="password" id="password" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title_home" class="col-sm-4 col-form-label">Title Home</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["TitleHome"];?>" type="text" class="form-control border-primary" name="title_home" id="title_home" placeholder="" required>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Logo</label>
                        <img src="<?= base_url(); ?>assets/img/app/<?= $data["logo"];?>" alt="" width="200" height="100">
                        <input type="hidden" name="logo_lama" id="logo_lama" value="<?= $data["logo"];?>">
                        <div class="col-md">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input size="200" value="<?= $data["logo"];?>" type="file" class="form-control custom-file-input" name="logo" id="logo">
                                    <label class="custom-file-label border-primary" for="logo">Piilh Foto</label>
                                    <div class="invalid-feedback">
                                        Tidak boleh kosong!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_kantor" class="col-sm-4 col-form-label">Alamat Kantor</label>
                        <div class="col-md">
                            <textarea class="form-control border-primary" name="alamat_kantor" id="alamat_kantor" cols="30" rows="3" placeholder="Alamat Lengkap" required><?= $data["alamat"];?></textarea>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Kontak</h4>
                    <div class="form-group row">
                        <label for="media_sosial_1" class="col-sm-4 col-form-label">Sosial Media 1</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["sos1"];?>" type="text" class="form-control border-primary" name="media_sosial_1" id="media_sosial_1" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="media_sosial_2" class="col-sm-4 col-form-label">Sosial Media 2</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["sos2"];?>" type="text" class="form-control border-primary" name="media_sosial_2" id="media_sosial_2" placeholder="">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tlp" class="col-sm-4 col-form-label">No Telepon</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["tlp"];?>" type="text" class="form-control border-primary" name="tlp" id="tlp" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wa" class="col-sm-4 col-form-label">Whatsapp</label>
                        <div class="col-md">
                            <input size="200" value="<?= $data["wa"];?>" type="text" class="form-control border-primary" name="wa" id="wa" placeholder="" onkeypress="return isNumberKey(event)">
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-outline-primary" name="simpan" type="submit">Simpan</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>