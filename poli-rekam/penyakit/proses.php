<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "INSERT INTO tb_penyakit VALUES('$uuid', '$nama', '$ket')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "UPDATE tb_penyakit SET nm_penyakit = '$nama', keterangan = '$ket' WHERE id_penyakit = '$id'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}