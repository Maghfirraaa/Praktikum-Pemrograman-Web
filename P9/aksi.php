<?php
include "koneksi.php";

$hari=$_POST ['hari'];
$jam=$_POST ['jam'];
$ruangan=$_POST ['ruang'];
$Matkul=$_POST['matkul'];

$sql="INSERT INTO jadwal(id_matkul,hari,jam,ruang)VALUES(".$Matkul.",'".$hari."','".$jam."','".$ruangan."')";
$a=$Koneksi->query($sql);
    if($a === true){
        header('location: hasilform.php');
    }else{
        echo "error";
    }
?>

