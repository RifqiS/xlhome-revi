<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "profider_db";
    $db = mysqli_connect($server, $user, $password, $nama_database);
    if(!$db){
        die("Error".mysql_conne`ct_error());
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
    $id         =$iRegistrasi['id'];
    $alamat     =htmlspecialchars($iRegistrasi['alamat']);
    $paket      =htmlspecialchars($iRegistrasi['paket']);
    $nama       =htmlspecialchars($iRegistrasi['nama']);
    $email      =htmlspecialchars($iRegistrasi['email']);
    $noHp       =htmlspecialchars($iRegistrasi['noHp']);
    $tlp        =htmlspecialchars($iRegistrasi['tlp']);
    $fotoKtp    =htmlspecialchars($iRegistrasi['fotoKtp']);
    $fotoSelfie =htmlspecialchars($iRegistrasi['fotoSelfie']);
    $query      = "INSERT INTO registrasi VALUES('$id','$alamat','$paket','$nama','$email','$noHp','$tlp','$fotoKtp','$fotoSelfie','',0)";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function iContent($iContent){
    global $db;
    $id         =$iContent['id'];
    $judul      =htmlspecialchars($iContent['judul']);
    $logo       =htmlspecialchars($iContent['logo']);
    $harga      =htmlspecialchars($iContent['harga']);
    $subJudul   =htmlspecialchars($iContent['subJudul']);
    $fitur1     =htmlspecialchars($iContent['fitur1']);
    $fitur2     =htmlspecialchars($iContent['fitur2']);
    $fitur3     =htmlspecialchars($iContent['fitur3']);
    $fitur4     =htmlspecialchars($iContent['fitur4']);
    $fitur5     =htmlspecialchars($iContent['fitur5']);
    $fitur6     =htmlspecialchars($iContent['fitur6']);
    $query      = "INSERT INTO content VALUES('$id','$judul','$logo','$harga','$subJudul','$fitur1','$fitur2','$fitur3','$fitur4','$fitur5','$fitur6',0)";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function eAdmin($eAdmin){
    global $db;
    $id         =$eAdmin['id'];
    $user       =htmlspecialchars($eAdmin['user']);
    $pass       =htmlspecialchars($eAdmin['pass']);
    $TitleHome  =htmlspecialchars($eAdmin['TitleHome']);
    $logo       =htmlspecialchars($eAdmin['logo']);
    $sos1       =htmlspecialchars($eAdmin['sos1']);
    $sos2       =htmlspecialchars($eAdmin['sos2']);
    $agen       =htmlspecialchars($eAdmin['agen']);
    $agen1      =htmlspecialchars($eAdmin['agen1']);
    $agen2      =htmlspecialchars($eAdmin['agen2']);
    $tlp        =htmlspecialchars($eAdmin['tlp']);
    $tlp1       =htmlspecialchars($eAdmin['tlp1']);
    $tlp2       =htmlspecialchars($eAdmin['tlp2']);
    $wa         =htmlspecialchars($eAdmin['wa']);
    $wa1        =htmlspecialchars($eAdmin['wa1']);
    $wa2        =htmlspecialchars($eAdmin['wa2']);
    $alamat     =htmlspecialchars($eAdmin['alamat']);

    $query      ="UPDATE 'admin' SET user='$user',pass='$pass',TitleHome='$TitleHome',logo='$logo',sos1='$sos1',sos2='$sos2',agen='$agen',agen1='$agen1',agen2='$agen2',tlp='$tlp',tlp1='$tlp1',tlp2='$tlp2',wa='$wa',wa1='$wa1',wa2='$wa2',alamat='$alamat' WHERE id='Un!X1d@4pp'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function eContent($eContent){
    global $db;
    $id         =$eContent['id'];
    $judul      =htmlspecialchars($eContent['judul']);
    $logo       =htmlspecialchars($eContent['logo']);
    $harga      =htmlspecialchars($eContent['harga']);
    $subJudul   =htmlspecialchars($eContent['subJudul']);
    $fitur1     =htmlspecialchars($eContent['fitur1']);
    $fitur2     =htmlspecialchars($eContent['fitur2']);
    $fitur3     =htmlspecialchars($eContent['fitur3']);
    $fitur4     =htmlspecialchars($eContent['fitur4']);
    $fitur5     =htmlspecialchars($eContent['fitur5']);
    $fitur6     =htmlspecialchars($eContent['fitur6']);

    $query      ="UPDATE content SET judul='$judul',logo='$logo',harga='$harga',subJudul='$subJudul',fitur1='$fitur1',fitur2='$fitur2',fitur3='$fitur3',fitur4='$fitur4',fitur5='$fitur5',fitur6='$fitur6' WHERE id='$id'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hContent($hContent){
    global $db;
    $id=$hContent['id'];
    $query="DELETE FROM content WHERE id = '$id'";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
?>