<?php    
    include "../../assets/config/config.php";
    $app = query("SELECT * FROM admin")[0];
    
if (isset($_POST['login'])) {
    // var_dump($_FILES['logo_content']);
    // die;
    if (login($_POST) > 0) {
        echo "<script>
			document.location.href='../';
		</script>";
    } else {
        echo "<script>
            alert('Username atau Password salah!');
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
    <title>XL - HOME</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/app/xlhome-logo.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="<?= base_url(); ?>assets/img/app/<?= $app['logo']; ?>" id="icon" alt="User Icon" />
                    <!-- <h3>Welcome</h3> -->
                </div>

                <!-- Login Form -->
                <form method="post" class="needs-validation" novalidate>
                    <div class="form-group">
                        <input type="text" id="username" class="form-control fadeIn second" name="username" placeholder="username" required>
                        <div class="invalid-feedback">
                            Tidak boleh kosong!
                        </div>
                    </div>
                    <input type="password" id="password" class="form-control fadeIn third" name="password" placeholder="password" required>
                    <input type="submit" class="fadeIn fourth" name="login" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
                    <small>
                        &copy; <?= date("Y"); ?> XLHOME Bandung. All Rights Reserved.
                    </small>
                </div>

            </div>
        </div>
    </div>

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