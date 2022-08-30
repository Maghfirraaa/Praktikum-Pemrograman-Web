<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
	$uuid = Uuid::uuid4()->toString();
	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$jpoli = trim(mysqli_real_escape_string($con, $_POST['jpoli']));
	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
	$tindakan = trim(mysqli_real_escape_string($con, $_POST['tindakan']));
	$obat = trim(mysqli_real_escape_string($con, $_POST['obat']));

	// insert ke tb_rekammedis
	mysqli_query($con, "INSERT INTO tb_rekammedis VALUES('$uuid', '$tgl', '$jpoli', '$poli', '$pasien', '$keluhan', '$dokter',  '$tindakan', '$obat')") or die(mysqli_error($con));


	echo "<script>alert('Data berhasil ditambahkan'); window.location='data.php';</script>";
}
else if(isset($_POST['edit'])){

	$id = $_POST['id'];
	$tgl = trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$jpoli = trim(mysqli_real_escape_string($con, $_POST['jpoli']));
	$poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
	$pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
	$keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
	$dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
	$tindakan = trim(mysqli_real_escape_string($con, $_POST['tindakan']));
	$obat = trim(mysqli_real_escape_string($con, $_POST['obat']));


	//update ke tabel rekammedis
	mysqli_query($con, "UPDATE tb_rekammedis SET tgl_periksa = '$tgl', id_pol = '$jpoli', id_poli = '$poli', id_pasien = '$pasien', keluhan = '$keluhan', id_dokter = '$dokter', id_tindakan = '$tindakan', id_obat = '$obat' WHERE id_rm = '$id'") or die(mysqli_error($con));

	// mendeklarasikan obat
	echo "<script>alert('Data berhasil diubah'); window.location='data.php';</script>";
}