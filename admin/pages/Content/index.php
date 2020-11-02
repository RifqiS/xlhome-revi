<?php
//  include "../../assets/config/config.php"
    $data = query("SELECT * FROM content WHERE id = 'Un!X1d@4pp'");
?>
<div class="container mx-auto text-center">
    <h2>Content</h2>
</div>
<div class="container">
    <div class="row justify-content-md-center mx-n1">
        <div class="row">
            <div class="col">
                <table class="table table-responesive">
                    <thead>
                        <tr>Judul</tr>
                        <tr>Logo</tr>
                        <tr>Harga</tr>
                        <tr>Sub Judul</tr>
                        <tr>Fitur 1</tr>
                        <tr>Fitur 2</tr>
                        <tr>Fitur 3</tr>
                        <tr>Fitur 4</tr>
                        <tr>Fitur 5</tr>
                        <tr>Fitur 6</tr>
                    </thead>
                    <tbody>
                       <?php foreach ( $data as $rows ) : ?>

                        <td><?= $rows['judul']; ?></td>
                        <td><?= $rows['logo']; ?></td>
                        <td><?= $rows['harga']; ?></td>
                        <td><?= $rows['sub_judul']; ?></td>
                        <td><?= $rows['cont_1']; ?></td>
                        <td><?= $rows['cont_2']; ?></td>
                        <td><?= $rows['cont_3']; ?></td>
                        <td><?= $rows['cont_4']; ?></td>
                        <td><?= $rows['cont_5']; ?></td>
                        <td><?= $rows['cont_6']; ?></td>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>