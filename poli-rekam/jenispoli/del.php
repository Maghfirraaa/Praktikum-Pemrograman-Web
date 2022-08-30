<?php
require_once"../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

mysqli_query($con, "DELETE FROM tb_jenispoli WHERE id_pol = '$_GET[id]'") or die(mysqli_error($con));
echo "<script>alert('Data berhasil dihapus');window.location='data.php';</script>";