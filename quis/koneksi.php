<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz";
    $koneksi = mysqli_connect($hostname, $username, $password, $dbname);

    if($koneksi){
        echo "";
    }else{
        echo "Server not connected";
    }
?>