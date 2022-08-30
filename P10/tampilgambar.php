<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="8">
            <tr>
            <th>File</th>
            <th>Nama File</th>
            <th>Tipe File</th>
            <th>Ukuran File</th>
        </tr>
            <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
            $tampil = mysqli_query($mysqli,"SELECT*from document");
            $sql = mysqli_num_rows($tampil);
                while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><img width="50" height="50" src="<?php echo "files/".$hasil['nama'];?>"></td>
            <td><?php echo $hasil['nama'];?></td>
            <td><?php echo $hasil['tipe'];?></td>
            <td><?php echo $hasil['ukuran'];?></td>
            </tr>
            <?php
                
                }
            ?>
        </table>
</body>
</html>