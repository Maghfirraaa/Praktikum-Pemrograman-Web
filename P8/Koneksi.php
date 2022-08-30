<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <h1>Demo Koneksi Database MySQL</h1> 
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_akademik";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if($koneksi){
        echo "Koneksi Berhasil <br><br>";
    }else{
        echo "Server not connected";
    }
?>
</body>
</html>