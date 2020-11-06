<?php
    if (isset($_SESSION['CREATE_URI']) && $_SESSION['CREATE_URI'] !== $_SERVER['REQUEST_URI']) {
        unset($_SESSION['CREATE_URI']);
        unset($_SESSION['idctn']);
     }
    include "../assets/config/config.php";
    $app = query("SELECT * FROM admin")[0];
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XL Home Bandung</title>
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
    include "pages/nav.php";
    ?>
    <div id="page-wrapper">
        <div class="container">

            <?php

            if (isset($_GET['page'])) {

                $page = $_GET['page'];

                switch ($page) {

                    case 'Registrasi':
                        include 'pages/registrasi/index.php';
                        break;

                    case 'Content':
                        include 'pages/content/index.php';
                        break;

                    case 'AddContent':
                        include 'pages/content/input/index.php';
                        break;

                    case 'EditContent':
                        include 'pages/content/edit/index.php';
                        break;

                    case 'Settings':
                        include 'pages/settings/index.php';
                        break;

                    case 'Logout':
                        include 'pages/Logout.php';
                        break;

                    default:
            ?>
                        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                            <h1 class="display-4">Error 404</h1>
                            <p class="lead">Halaman Tidak Di Temukan Silahkan Kembali</p>
                        </div>
                <?php
                        break;
                }
            } else {
                ?>
                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Paket Fiber XLHome</h1>
                    <p class="lead">Fiber Internet + TV Entertainment Box</p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#tbl_poli').DataTable({
                responsive: true
            });
        });
    </script>

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

    <!-- jQuery -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../assets/js/raphael.min.js"></script>
    <script src="../assets/js/morris.min.js"></script>
    <script src="../assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/js/startmin.js"></script>

</body>

</html>