<?php
session_start();

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "profider_db";
$db = mysqli_connect($server, $user, $password, $nama_database);
if (!$db) {
    die("Error" . mysqli_connect_error());
}

function base_url()
{
    // return 'http://localhost/xlhome-revi/';
    return 'http://localhost/2020/projek/xlhome-revi/';
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// APP
$c_d = query("SELECT * FROM admin WHERE id = 'Un!X1d@4pp'")[0];
$_SESSION['title_page'] = $c_d['TitleHome'];
$_SESSION['logo'] = $c_d['logo'];


// Funtion CRUD

function login($ilog){
$user = htmlspecialchars($ilog['username']);
$pass = htmlspecialchars($ilog['password']);
$cek = query("SELECT * FROM admin WHERE id = 'Un!X1d@4pp'")[0];
if($cek['user'] === $user && $cek['pass'] === $pass){
   $_SESSION['inapp'] = 1;
   return true;
}
    return false;
}

function logout(){
    $_SESSION['inapp'] = 0;
    session_destroy();
   return true;
}

function upload($foto, $tem)
{
    // return false;
    $namafile   = $_FILES[$foto]['name'];
    $ukuranfile = $_FILES[$foto]['size'];
    $error      = $_FILES[$foto]['error'];
    $tmpname    = $_FILES[$foto]['tmp_name'];
    $lokasi     = "../assets/img/$tem/";
    // var_dump($_POST);
    // var_dump($_FILES);
    // var_dump($ukuranfile);
    // die;

    // cek apakah tidak ada foto yang di upload
    if ($error === 4) {
        echo "
				<script>
					alert('masukkan foto terlebih dahulu!');
				</script>
			";
        return false;
    }

    // cek valid gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo "
				<script>
					alert('yang anda masukkan bukan gambar!');
				</script>
			";
        return false;
    }


    // batas ukuran file
    if ($ukuranfile > 1050000) {
        echo "
				<script>
					alert('ukuran gambar terlalu besar!');
				</script>
			";
        return false;
    }

    // lolos pengecekan
    // generate nama baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    if (move_uploaded_file($tmpname, $lokasi . $namafilebaru)) {
        // echo "The file ". htmlspecialchars(basename($namafilebaru). " has been uploaded.";
    } else {
        echo "
				<script>
					alert('Upload gambar gagal!');
				</script>
			";
        return false;
    }

    return $namafilebaru;
}

function iRegistrasi($iRegistrasi)
{
    global $db;
    $id         = $iRegistrasi['id'];
    $alamat     = htmlspecialchars($iRegistrasi['alamat']);
    $kecamatan     = htmlspecialchars($iRegistrasi['kecamatan']);
    $kota     = htmlspecialchars($iRegistrasi['kota']);
    $desa     = htmlspecialchars($iRegistrasi['desa']);
    $kodepos     = htmlspecialchars($iRegistrasi['kodepos']);
    $paket      = htmlspecialchars($iRegistrasi['paket']);
    $nama       = htmlspecialchars($iRegistrasi['nama']);
    $email      = htmlspecialchars($iRegistrasi['email']);
    $noHp       = htmlspecialchars($iRegistrasi['noHp']);
    $tlp        = htmlspecialchars($iRegistrasi['tlp']);
    // $fotoKtp    = htmlspecialchars($iRegistrasi['fotoKtp']);
    // $fotoSelfie = htmlspecialchars($iRegistrasi['fotoSelfie']);
    $timeStamp = "";
    $statusRead = 0;

    // upload("nama_input","Nama_input(dalam folder img)");
    $fotoKtp = upload("fotoKtp", "register");
    if (!$fotoKtp) {
        return false;
    }
    $fotoSelfie = upload("fotoSelfie", "register");
    if (!$fotoSelfie) {
        return false;
    }

    $query      = "INSERT INTO registrasi VALUES('$id','$alamat','$kecamatan','$kota','$desa','$kodepos','$paket','$nama','$email','$noHp','$tlp','$fotoKtp','$fotoSelfie','$timeStamp','$statusRead')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function iContent($iContent)
{
    global $db;
    $id_content = $iContent['id_content'];
    $judul      = htmlspecialchars($iContent['judul']);
    $harga      = htmlspecialchars($iContent['harga']);
    $sub_judul  = htmlspecialchars($iContent['sub_judul']);
    $fitur_1    = htmlspecialchars($iContent['fitur_1']);
    $fitur_2    = htmlspecialchars($iContent['fitur_2']);
    $fitur_3    = htmlspecialchars($iContent['fitur_3']);
    $fitur_4    = htmlspecialchars($iContent['fitur_4']);
    $fitur_5    = htmlspecialchars($iContent['fitur_5']);
    $fitur_6    = htmlspecialchars($iContent['fitur_6']);
    // $logo_content    = $_FILES['logo_content']['name'];
    // upload("nama_input","Nama_input(dalam folder img)");
    $logo_content = upload("logo_content", "content");
    if (!$logo_content) {
        return false;
    }
    $query = "INSERT INTO content VALUES('$id_content','$judul','$logo_content','$harga','$sub_judul','$fitur_1','$fitur_2','$fitur_3','$fitur_4','$fitur_5','$fitur_6')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function eContent($eContent)
{
    global $db;
    $id_content = $eContent['id_content'];
    $judul      = htmlspecialchars($eContent['judul']);
    $logo_lama  = htmlspecialchars($eContent['logo_lama']);
    $harga      = htmlspecialchars($eContent['harga']);
    $sub_Judul   = htmlspecialchars($eContent['sub_judul']);
    $fitur1     = htmlspecialchars($eContent['fitur_1']);
    $fitur2     = htmlspecialchars($eContent['fitur_2']);
    $fitur3     = htmlspecialchars($eContent['fitur_3']);
    $fitur4     = htmlspecialchars($eContent['fitur_4']);
    $fitur5     = htmlspecialchars($eContent['fitur_5']);
    $fitur6     = htmlspecialchars($eContent['fitur_6']);
    // cek upload gambar
    if ($_FILES["logo_content"]["error"] === 4) {
        $logo_baru = $logo_lama;
    } else {
        $file_dir = "../assets/img/content/";
        unlink($file_dir . $logo_lama);

        // upload("nama_input","Nama_input(dalam folder img)");
        $logo_baru = upload("logo_content", "content");
        if (!$logo_baru) {
            return false;
        }
    }

    $query = "UPDATE content SET judul = '$judul',logo = '$logo_baru',harga = '$harga',sub_Judul = '$sub_Judul',cont_1 = '$fitur1',cont_2 = '$fitur2',cont_3 = '$fitur3',cont_4 = '$fitur4',cont_5 = '$fitur5',cont_6 = '$fitur6' WHERE id = '$id_content'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hContent($hContent)
{
    global $db;

    $id      = $hContent['hapus'];

    $file_dir = "../assets/img/content/";
    $cari = query("SELECT * FROM content WHERE id = '$id'");
    $file = $cari[0]['logo'];
    unlink($file_dir . $file);

    $query = "DELETE FROM content WHERE id = '$id'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function eAdmin($eAdmin)
{
    global $db;
    $id        = $eAdmin['id_aplikasi'];
    $user      = htmlspecialchars($eAdmin['username']);
    $pass      = htmlspecialchars($eAdmin['password']);
    $TitleHome = htmlspecialchars($eAdmin['title_home']);
    $sos1      = htmlspecialchars($eAdmin['media_sosial_1']);
    $sos2      = htmlspecialchars($eAdmin['media_sosial_2']);
    $tlp       = htmlspecialchars($eAdmin['tlp']);
    $wa        = htmlspecialchars($eAdmin['wa']);
    $alamat    = htmlspecialchars($eAdmin['alamat_kantor']);
    $logo_lama = htmlspecialchars($eAdmin['logo_lama']);


    // cek upload gambar
    if ($_FILES["logo"]["error"] === 4) {
        $logo_baru = $logo_lama;
    } else {
        $file_dir = "../assets/img/app/";
        unlink($file_dir . $logo_lama);

        // upload("nama_input","Nama_input(dalam folder img)");
        $logo_baru = upload("logo", "app");
        if (!$logo_baru) {
            return false;
        }
    }
    
    $query = "UPDATE admin SET user = '$user',pass = '$pass',TitleHome = '$TitleHome',logo = '$logo_baru',sos1 = '$sos1',sos2 = '$sos2',tlp = '$tlp',wa = '$wa',alamat = '$alamat' WHERE id = 'Un!X1d@4pp'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
