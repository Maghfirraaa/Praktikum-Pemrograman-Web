<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_akademik";
    $Koneksi = mysqli_connect($host, $username, $password, $database);

    if($Koneksi){
        echo "";
    }else{
        echo "Server not connected";
    }
?>
