<?php
require "../assets/config/config.php";
$kode    = mysqli_query($db, "select max(id) as KODE from registrasi");
$ar      = mysqli_fetch_array($kode);
$id_kode = $ar['KODE'];
$urut    = substr($id_kode, 6, 2);
$urut++;
$id_baru = date('dmy') . sprintf("%02s", $urut);

// PROSES TAMBAH
if (isset($_POST['kirim'])) {
    // var_dump($_FILES['logo_content']);
    // die;
    if (iRegistrasi($_POST) > 0) {
        echo "<script>
			document.location.href='';
		</script>";
    } else {
        echo "<script>
            alert('Gagal Menambah Data!');
            document.location.href='';
		</script>";
        mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XL Home Bandung</title>

    <!-- Bikin Icon di Tab -->
    <link rel="shortcut icon" href="<?= $base_url; ?>/assets/img/app/<?= $data['logo']; ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-webfont.ttf">
    <!-- END CSS -->

    <!-- ICON -->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- END ICON -->

    <!-- JS -->
    <script src="../assets/jQuery/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- END JS -->
</head>

<body>
    <?php
    include "../nav.php";
    ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 text-primary">Formulir Registrasi</h1>
        <p class="lead">Silahkan isi formulir di bawah ini dengan lengkap</p>
    </div>

    <!-- Form Register -->
    <div class="container">
        <div class="row justify-content-md-center mx-n1">
            <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <input type="hidden" name="id" id="id" value="<?= $id_baru ?>">

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="paket">Paket</label>
                        <!-- <input type="text" class="form-control border-primary" name="paket" id="paket" placeholder="" required> -->
                        <select class="form-control border-primary" name="paket" id="paket" required>
                            <option value="">Pilih Paket</option>
                            <?php
                            $paket = query("SELECT * FROM content");
                            foreach ($paket as $dat) :
                            ?>
                                <option value="<?= $dat['id'] ?>"><?= $dat['judul'] ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md mb-3">
                        <label for="alamat">Alamat Lengkap</label>
                        <!-- <textarea class="form-control border-primary" name="alamat" id="alamat" cols="30" rows="1" placeholder="Alamat Lengkap" required></textarea> -->
                        <input class="form-control border-primary" type="text" name="alamat" id="alamat" placeholder="Ex : Jl. Primukti II No. 99 Rt. 001/ Rw. 006" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control border-primary" name="kota" id="kota" placeholder="Ex: Bandung / Kab. Bandung Barat" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control border-primary" name="kecamatan" id="kecamatan" placeholder="Ex: Arcamanik" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="desa">Desa</label>
                        <input type="text" class="form-control border-primary" name="desa" id="desa" placeholder="Ex: Muarajaya" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" class="form-control border-primary" name="kodepos" id="kodepos" placeholder="Ex: 40696" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control border-primary" name="nama" id="nama" placeholder="Nama Lengkap" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control border-primary" name="email" id="email" placeholder="alamat@contoh.com" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="noHp">No. Handphone</label>
                        <input type="text" class="form-control border-primary" name="noHp" id="noHp" placeholder="08xxx" onkeypress="return isNumberKey(event)" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tlp">Telephone Rumah</label>
                        <input type="text" class="form-control border-primary" name="tlp" id="tlp" placeholder="x2xxx" onkeypress="return isNumberKey(event)" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="">Upload Foto KTP</label>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" name="fotoKtp" id="fotoKtp" required>
                                <label class="custom-file-label border-primary" for="fotoKtp">Piilh Foto</label>
                                <div class="invalid-feedback">
                                    Tidak boleh kosong!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Upload Foto Selfie Dengan KTP</label>
                        <div class="custom-file">
                            <input type="file" class="form-control custom-file-input" name="fotoSelfie" id="fotoSelfie" required>
                            <label class="custom-file-label border-primary" for="fotoSelfie">Piilh Foto</label>
                            <div class="invalid-feedback">
                                Tidak boleh kosong!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="setuju" id="setuju" required>
                        <label class="form-check-label" for="setuju">
                            Setuju dengan <a href="<?= $base_url; ?>TermofService.php">Syarat & Ketentuan</a>.
                        </label>
                        <div class="invalid-feedback">
                            Anda harus setuju dengan Syarat & Ketentuan terlebih dahulu.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" name="kirim" type="submit">Kirim</button>

            </form>
        </div>
    </div>


    <?php
    include('../footer.php');
    ?>

    <!-- Number only -->
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

    <!-- Desain Form -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>