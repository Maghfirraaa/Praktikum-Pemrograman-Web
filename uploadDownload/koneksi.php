<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
</head>
<body>
<?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "web";
            $koneksi = mysqli_connect($host, $username, $password, $database);
            if ($koneksi) {
                echo "";
            }else{
                echo "Server not Connected";
            }

            //fungsi untuk mengkonversi size file
    function formatBytes($bytes, $precision = 2) { 
         $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1); 
        $bytes /= pow(1024, $pow); 
        return round($bytes, $precision) . ' ' . $units[$pow]; 
        } 
?>
</body>
</html>