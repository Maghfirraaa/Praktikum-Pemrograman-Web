<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "cp1011";
            $koneksi = mysqli_connect($host, $username, $password, $database);
            if ($koneksi) {
                echo "";
            }else{
                echo "Server not Connected";
            }
        ?>
</body>
</html>