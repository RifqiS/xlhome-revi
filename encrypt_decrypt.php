<?php
function my_simple_crypt($string, $action = 'e')
{
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'e') {
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    } else if ($action == 'd') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

// $encrypted = my_simple_crypt('Hello World!', 'e');
// $decrypted = my_simple_crypt('RTlOMytOZStXdjdHbDZtamNDWFpGdz09', 'd');

?>

<form action="" method="POST">
    <input type="text" name="isi" id="isi" placeholder="text string">
    <button name="encrypt" id="encrypt">encrypt</button>

    <?php
    if (isset($_POST['encrypt'])) {
        $isi = $_POST['isi'];
        $encrypted = my_simple_crypt($isi, 'e');
        echo "<br>";
        echo "Hasil : " . $encrypted;
        echo "<br>";
    }
    ?>

    <br>

    <input type="text" name="isi2" id="isi2" placeholder="text hasil decrypt">
    <button name="decrypt" id="decrypt">decrypt</button>

    
    <?php
    if (isset($_POST['decrypt'])) {
        $isi2 = $_POST['isi2'];
        $decrypted = my_simple_crypt($isi2, 'd');
        echo "<br>";
        echo "Hasil : " . $decrypted;
        echo "<br>";
    }
    ?>

</form>