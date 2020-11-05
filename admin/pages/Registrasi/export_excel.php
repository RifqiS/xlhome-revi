<?php    
 include "../../../assets/config/config.php";
$reg = query("SELECT *, registrasi.id AS regid, content.id AS conid FROM registrasi LEFT JOIN content ON registrasi.paket = content.id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Daftar Registrasi.xls");
    ?>
    
    <center>
        <h1>Daftar Registrasi</h1>
    </center>

    <table border="1" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">id</th>
                            <th scope="col">kecamatan</th>
                            <th scope="col">kota</th>
                            <th scope="col">desa</th>
                            <th scope="col">kodepos</th>
                            <th scope="col">alamat</th>
                            <th scope="col">nama</th>
                            <th>email</th>
                            <th>noHp</th>
                            <th>tlp</th>
                            <th>judul</th>
                            <th>harga</th>
                            <th>statusRead</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($reg as $rows) :
                        ?>
                            <tr>
                                <td class="align-middle"><?= $no++; ?></td>
                                <td class="align-middle"><?= $rows['id']; ?></td>
                                <td class="align-left"><?= $rows['kecamatan']; ?></td>
                                <td class="align-left"><?= $rows['kota']; ?></td>
                                <td class="align-left"><?= $rows['desa']; ?></td>
                                <td class="align-left"><?= $rows['kodepos']; ?></td>
                                <td class="align-left"><?= $rows['alamat']; ?></td>
                                <td class="align-left"><?= $rows['nama']; ?></td>
                                <td class="align-left"><?= $rows['email']; ?></td>
                                <td class="align-left"><?= $rows['noHp']; ?></td>
                                <td class="align-left"><?= $rows['tlp']; ?></td>
                                <td class="align-left"><?= $rows['judul']; ?></td>
                                <td class="align-right"><?= $rows['harga']; ?></td>
                                <td class="align-middle"><?= $rows['statusRead']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
</body>

</html>