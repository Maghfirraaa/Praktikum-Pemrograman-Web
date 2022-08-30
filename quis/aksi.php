<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
<?php
include "koneksi.php";

$nilai = $_POST['nilai'];
if(empty($nilai) != true){
    // $proses= $nilai/2;
    if($nilai%2 == 0){
        $hasil =$nilai/2;
    }else{
        $hasil = $nilai;
    }
    $sql= "INSERT INTO `quiz`.`hasil` (`nilai`, `hasil`, `tanggal`, `pukul`) VALUES 
          ('".$nilai."','".$hasil."', NOW(), NOW());";
    $a=$koneksi->query($sql);

    if($a === true){
            echo "<script>alert('Hasilnya adalah ".$hasil."');</script>";
            echo "<script>alert('Berhasil Disimpan!')</script>";
            echo "<a href= hasil.php>Klik disini</a>";
    }else{
        echo "error";
    }
}else{
    echo "Inputkan angka terlebih dahulu";
}
?>
</body>
</html>