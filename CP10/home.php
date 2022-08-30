<?php
session_start();
include "koneksi.php";
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if(!isset($_SESSION['username'])){
    die("Anda belum login");
}
$username=$_SESSION['username'];
$level=$_SESSION['level'];
if($level=='admin'){
    echo "Anda sebagai ".$level;
}else if($level=='mahasiswa'){
    echo "Anda sebagai ".$level;
}else if($level=='dosen'){
    echo "Anda sebagai ".$level;
}
?>