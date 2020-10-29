<?php 
    include 'assets/config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SPP Payment</title>
        
        <!-- Bikin Icon di Tab -->
        <link rel="shortcut icon" href="assets/img/logo.png">
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="assets/css/timeline.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/startmin.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="assets/css/morris.css" rel="stylesheet">
        <!-- jQuery -->
        <script type="text/javascript" src="assets/vendor/jquery/jquery.js"></script>
        <script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core CSS -->
        <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!-- DataTables CSS -->
        <link href="assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
        <!-- Bootstrap Core JavaScript -->
        <script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables JavaScript -->
        <script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
        <!-- Custom Fonts -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
		.side{
			font-size: 15px;
			background-color: rgba(80,82,78);
			bottom: 0;
			left: 0;
			top: 0;
			position: fixed;
			margin-top: 50px;
			width: 200px;	
		}
        input, select, textarea,span{
	        margin-bottom:5px;
	        margin-top:5px;
        }
	</style>
    </head>
    <body>
            <?php include 'pages/nav.php';?>

            <div id="page-wrapper">
	<div class="container" >

<?php 

if (isset($_GET['page'])) {

	$page = $_GET['page'];

	switch ($page) {

		case 'form_spp':
			include 'pages/form/spp.php';
        break;	
        
        case 'form_kelas':
			include 'pages/form/kelas.php';
		break;

        case 'form_petugas':
			include 'pages/form/petugas.php';
        break;
        
        case 'form_siswa':
			include 'pages/form/siswa.php';
		break;

		default:
      				echo "<center><h1>Maaf Halaman Tidak Ditemukan</h1></center>";
			break;
	}

}else{
    echo "<h1>Selamat Datang</h1>";
}

 ?>

</div>







</div>











</div>
        <script>
            $(document).ready(function(){
                $('#tbl_poli').DataTable({
                    responsive: true
                });
            });
        </script>

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="assets/js/raphael.min.js"></script>
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="assets/js/startmin.js"></script>

    </body>
</html>