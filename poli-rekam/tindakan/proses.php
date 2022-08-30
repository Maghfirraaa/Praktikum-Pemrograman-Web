<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	mysqli_query($con, "INSERT INTO tb_tindakan VALUES('$uuid', '$nama')") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));

	mysqli_query($con, "UPDATE tb_tindakan SET jenis = '$nama' WHERE id_tindakan = '$id'") or die(mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}