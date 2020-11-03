<?php
$c_a_f = query("SELECT * FROM admin")[0];
?>

<div class="d-flex-column flex-md-row px-md-4 mt-4 align-items-center navbar-dark cnav text-white border-bottom shadow-sm">
    <footer>
        <div class="pt-4 my-md pt-md-5">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-4 col-md">
                        <ul class="list-unstyled">
                            <li><a class="text-decoration-none text-white" href="TermofService.php"> Syarat & Ketentuan</a></li>
                            <br>
                            <li><a class="text-decoration-none text-white" href="cookie.php"> Privasi</a></li>
                        </ul>
                    </div>
                    <div class="col-4 col-md">
                        <ul class="list-unstyled">
                            <li><a class="text-decoration-none text-white" href=""> <i class="fa fa-whatsapp"></i> <?= $c_a_f['wa']; ?></a></li>
                            <br>
                            <li><a class="text-decoration-none text-white" href=""> <i class="fa fa-phone-square"></i> <?= $c_a_f['tlp']; ?></a></li>
                        </ul>
                    </div>
                    <div class="col-4 col-md">
                        <ul class="list-unstyled">
                            <li><a class="text-decoration-none text-white" href=""> <i class="fa fa-facebook"></i> <?= $c_a_f['sos1']; ?></a></li>
                            <br>
                            <li><a class="text-decoration-none text-white" href=""> <i class="fa fa-instagram"></i> <?= $c_a_f['sos2']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-top">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-12 col-md">
                        <small class="d-block mb-3 text-white">
                            &copy; 2020 - 2021 XLHOME Bandung. All Rights Reserved.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>