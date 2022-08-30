<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
</head>
<body>
<?php
    session_start();
    include "koneksi.php";
    $nama = $_POST['namabarang'];
    $jumlah = $_POST['jumlahbarang'];
    $operator = $_SESSION['username'];
    $sql="INSERT INTO pembelian (namabarang, jumlah, tanggal, username) VALUES ('" . $nama . "', '" . $jumlah . "', NOW() , '" . $operator . "')";
        $a=$koneksi->query($sql);
        if ($a===true) {
        ?>
            <script type="text/javascript">
                window.alert("Masukkan Data Berhasil!");
                location.replace('admin.php');
            </script>
    <?php
        } else {
            echo "Error";
        }
    ?>
</body>
</html>