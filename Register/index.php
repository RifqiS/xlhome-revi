<?php
    $kode    = mysqli_query($db, "select max(id) as KODE from registrasi");
    $ar      = mysqli_fetch_array($kode);
    $id_kode = $ar['KODE'];
    $urut    = substr($id_kode, 4,2);
    $urut++;
    $id_baru = date('md').sprintf("%02s", $urut);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XL Home Bandung</title>

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
        <h1 class="display-4">Paket Fiber XL</h1>
        <p class="lead">Fiber Internet + TV Entertainment Box</p>
    </div>

    <!-- Form Register -->
    <div class="container">
        <div class="row justify-content-md-center">
            <form class="needs-validation" novalidate>
                <input type="hidden" name="id" id="id" value="<?= $id_baru?>">
                <div class="form-row">
                    <div class="col-md mb-3">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea class="form-control btn-outline-primary" name="alamat" id="" cols="30" rows="3" placeholder="Alamat Lengkap" required></textarea>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control btn-outline-primary" name="nama" id="nama" placeholder="Nama Lengkap" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control btn-outline-primary" name="email" id="email" placeholder="alamat@contoh.com" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="no_hp">No. Handphone</label>
                        <input type="text" class="form-control btn-outline-primary" name="no_hp" id="no_hp" placeholder="08xxx" onkeypress="return isNumberKey(event)" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="no_telp">Telephone Rumah</label>
                        <input type="text" class="form-control btn-outline-primary" name="no_telp" id="no_telp" placeholder="x2xxx" onkeypress="return isNumberKey(event)" required>
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
                                <input type="file" class="form-control custom-file-input" name="foto_ktp" id="foto_ktp" required>
                                <label class="custom-file-label btn-outline-primary" for="foto_ktp">Piilh Foto</label>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Upload Foto Selfie Dengan KTP</label>
                        <div class="custom-file">
                            <input type="file" class="form-control custom-file-input" name="foto_wajah" id="foto_wajah" required>
                            <label class="custom-file-label btn-outline-primary" for="foto_wajah">Piilh Foto</label>
                        </div>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="alamat" id="setuju" required>
                        <label class="form-check-label" for="setuju">
                            Setuju dengan Syarat & Ketentuan.
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

    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">&copy; 2020 - 2021 XLHOME Bandung. All Rights Reserved. <a href=""> Syarat & Ketentuan</a></small>
                </div>
            </div>
        </footer>
    </div>

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