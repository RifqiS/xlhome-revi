<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "profider_db";
    $db = mysqli_connect($server, $user, $password, $nama_database);
    if(!$db){
        die("Error".mysql_connect_error());
    }	
	
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row;
        }
    return $rows;
 
}
        
// Funtion CRUD
       
function iRegistrasi($iRegistrasi){
    global $db;
    $id=$iRegistrasi['id'];
    $alamat=htmlspecialchars($iRegistrasi['alamat']);
    $paket=htmlspecialchars($iRegistrasi['paket']);
    $nama=htmlspecialchars($iRegistrasi['nama']);
    $email=htmlspecialchars($iRegistrasi['email']);
    $noHp=htmlspecialchars($iRegistrasi['noHp']);
    $tlp=htmlspecialchars($iRegistrasi['tlp']);
    $fotoKtp=htmlspecialchars($iRegistrasi['fotoKtp']);
    $fotoSelfie=htmlspecialchars($iRegistrasi['fotoSelfie']);
    $query = "INSERT INTO spp VALUES('$id','$alamat','$paket','$nama','$email','$noHp','$tlp','$fotoKtp','$fotoSelfie','',0)";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function e_spp($e_spp){
    global $db;
    $id_spp=$e_spp['id_spp'];
    $tahun=htmlspecialchars($e_spp['tahun']);
    $nominal=htmlspecialchars($e_spp['nominal']);

    $query="UPDATE spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp='$id_spp'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function h_spp($h_spp){
    global $db;
    $id_spp=$h_spp['id_spp'];

    $query="DELETE FROM spp WHERE id_spp = '$id_spp'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function i_kelas($i_kelas){
    global $db;
    $id_kelas=$i_kelas['id_kelas'];
    $nama_kelas=htmlspecialchars($i_kelas['nama_kelas']);
    $kompetensi_keahlian=htmlspecialchars($i_kelas['kompetensi_keahlian']);

    $query = "INSERT INTO kelas VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function e_kelas($e_kelas){
    global $db;
    $id_kelas=$e_kelas['id_kelas'];
    $nama_kelas=htmlspecialchars($e_kelas['nama_kelas']);
    $kompetensi_keahlian=htmlspecialchars($e_kelas['kompetensi_keahlian']);

    $query="UPDATE kelas SET nama_kelas='$nama_kelas',kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function h_kelas($h_kelas){
    global $db;
    $id_kelas=$h_kelas['id_kelas'];

    $query="DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function i_petugas($i_petugas){
    global $db;
    $id_petugas=$i_petugas['id_petugas'];
    $username=htmlspecialchars($i_petugas['username']);
    $password=htmlspecialchars($i_petugas['password']);
    $nama_petugas=htmlspecialchars($i_petugas['nama_petugas']);
    $level=htmlspecialchars($i_petugas['level']);

    $query = "INSERT INTO petugas VALUES('$id_petugas','$username','$password','$nama_petugas','$level')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function e_petugas($e_petugas){
    global $db;
    $id_petugas=$e_petugas['id_petugas'];
    $username=htmlspecialchars($e_petugas['username']);
    $password=htmlspecialchars($e_petugas['password']);
    $nama_petugas=htmlspecialchars($e_petugas['nama_petugas']);
    $level=htmlspecialchars($e_petugas['level']);

    $query="UPDATE petugas SET username='$username',password='$password',nama_petugas = '$nama_petugas', level = '$level' WHERE id_petugas='$id_petugas'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function h_petugas($h_petugas){
    global $db;
    $id_petugas=$h_petugas['id_petugas'];

    $query="DELETE FROM petugas WHERE id_petugas = '$id_petugas'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function i_siswa($i_siswa){
    global $db;
    $nisn=$i_siswa['nisn'];
    $nis=htmlspecialchars($i_siswa['nis']);
    $nama=htmlspecialchars($i_siswa['nama']);
    $id_kelas=htmlspecialchars($i_siswa['id_kelas']);
    $alamat=htmlspecialchars($i_siswa['alamat']);
    $no_telp=htmlspecialchars($i_siswa['no_telp']);
    $id_spp=htmlspecialchars($i_siswa['id_spp']);
    
    $query = "INSERT INTO siswa VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp',0)";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function e_siswa($e_siswa){
    global $db;
    $nisn=$e_siswa['nisn'];
    $nis=htmlspecialchars($e_siswa['nis']);
    $nama=htmlspecialchars($e_siswa['nama']);
    $id_kelas=htmlspecialchars($e_siswa['id_kelas']);
    $alamat=htmlspecialchars($e_siswa['alamat']);
    $no_telp=htmlspecialchars($e_siswa['no_telp']);
    $id_spp=htmlspecialchars($e_siswa['id_spp']);

    $query="UPDATE siswa SET nis='$nis',nama='$nama',id_kelas = '$id_kelas', alamat = '$alamat', no_telp = '$no_telp', id_spp = '$id_spp' WHERE nisn='$nisn'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function h_siswa($h_siswa){
    global $db;
    $nisn=$h_siswa['nisn'];

    $query="DELETE FROM siswa WHERE nisn = '$nisn'";
    mysqli_query($db, $query); 
    return mysqli_affected_rows($db);
}

function bayar_spp($bayar_spp){
    global $db;
    $id_pembayaran=$bayar_spp['id_pembayaran'];
    $id_petugas=htmlspecialchars($bayar_spp['id_petugas']);
    $nisn=htmlspecialchars($bayar_spp['nisn']);
    $tgl_bayar=htmlspecialchars($bayar_spp['tgl_bayar']);
    $bulan_bayar=htmlspecialchars($bayar_spp['bulan_bayar']);
    $tahun_bayar=htmlspecialchars($bayar_spp['tahun_bayar']);
    $id_spp=htmlspecialchars($bayar_spp['id_spp']);
    $jumlah_bayar=htmlspecialchars($bayar_spp['jumlah_bayar']);

    $query = "INSERT INTO pembayaran VALUES('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_bayar','$tahun_bayar','$id_spp','$jumlah_bayar')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>