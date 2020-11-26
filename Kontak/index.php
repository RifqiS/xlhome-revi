<?php
    require "../assets/config/config.php";
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XL Home Bandung</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/app/xlhome-logo.png">

    <!-- Bikin Icon di Tab -->
    <link rel="shortcut icon" href="<?= $base_url; ?>assets/img/app/<?= $data['logo']; ?>">
    
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
        <h1 class="display-6 tfon">Silahkan Hubungi Kami</h1>
    </div>

    <!-- Kontak -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-5">
                <div class="row">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="https://facebook.com/" target="_BLANK" class="text-decoration-none text-muted">
                                        <div class="row">
                                            <div class="p-2 my-auto"><img src="<?= $base_url; ?>assets/img/fb-icon.png" alt="" style="height: 50px; weight: 50px;"></div>
                                            <div class="p-2 my-auto"><i class="fa fa-facebook"></i><?= $data['sos1'] ?></div>
                                            <div class="ml-auto p-2 my-auto"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://instagram.com/" target="_BLANK" class="text-decoration-none text-muted">
                                        <div class="row">
                                            <div class="p-2 my-auto"><img src="<?= $base_url; ?>assets/img/ig-icon.png" alt="" style="height: 50px; weight: 50px;"></div>
                                            <div class="p-2 my-auto"><i class="fa fa-instagram"></i><?= $data['sos2'] ?></div>
                                            <div class="ml-auto p-2 my-auto"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="https://api.whatsapp.com/send?phone=+62<?= $data['wa'] ?>" target="_BLANK" class="text-decoration-none text-muted">
                                        <div class="row">
                                            <div class="p-2 my-auto"><img src="<?= $base_url; ?>assets/img/wa-icon.png" alt="" style="height: 50px; weight: 50px;"></div>
                                            <div class="p-2 my-auto">
                                                <div class="flex-column">
                                                    <!-- <div class="p-2 my-auto">Agen 1 </div> -->
                                                    <div class="p-2 my-auto"><i class="fa fa-whatsapp"></i>0<?= $data['wa'] ?></div>
                                                </div>
                                            </div>
                                            <div class="ml-auto p-2 my-auto"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="tel:+62<?= $data['tlp'] ?>" target="_BLANK" class="text-decoration-none text-muted">
                                        <div class="row">
                                            <div class="p-2 my-auto"><img src="<?= $base_url; ?>assets/img/telpon-icon.png" alt="" style="height: 50px; weight: 50px;"></div>
                                            <div class="p-2 my-auto">
                                                <div class="flex-column">
                                                    <!-- <div class="p-2 my-auto">Agen 1 </div> -->
                                                    <div class="p-2 my-auto"><i class="fa fa-phone-square"></i>0<?= $data['tlp'] ?></div>
                                                </div>
                                            </div>
                                            <div class="ml-auto p-2 my-auto"><i class="fa fa-chevron-right"></i></div>
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h4 class="display-6 tfon">Atau Langsung Mendatangi Kantor Kami Di</h4>
    </div>

    <!-- Alamat -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="p-2 my-auto">
                    <iframe src="<?= $data['alamat'] ?>" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../footer.php');
    ?>
</body>

</html>