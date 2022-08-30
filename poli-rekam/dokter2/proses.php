<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;


if(isset($_POST['add'])){
	$target_dir = "gambar/";
	$target_file = $target_dir . basename($_FILES["uploadfile"]["name"]);

	move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$target_file);

	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$spes = trim(mysqli_real_escape_string($con, $_POST['spes']));
	$alm = trim(mysqli_real_escape_string($con, $_POST['alm']));
	$no = trim(mysqli_real_escape_string($con, $_POST['no']));
	$foto = "gambar/" . $_FILES["uploadfile"]["name"];

	mysqli_query($con, "INSERT INTO tb_dokter VALUES('$uuid', '$nama', '$spes', '$alm', '$no', '$foto')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){
	$target_dir = "gambar/";
	$target_file = $target_dir . basename($_FILES["upload"]["name"]);

	move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);

	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$spes = trim(mysqli_real_escape_string($con, $_POST['spes']));
	$alm = trim(mysqli_real_escape_string($con, $_POST['alm']));
	$no = trim(mysqli_real_escape_string($con, $_POST['no']));
	$foto = "gambar/" . $_FILES["upload"]["name"];

	mysqli_query($con, "UPDATE tb_dokter SET nama_dokter = '$nama', spesialis = '$spes',  alamat = '$alm', no_telp = '$no', foto = '$foto' WHERE id_dokter = '$id'") or die(mysqli_error($con));
// 	echo "<script>window.location='data.php';</script>";
}