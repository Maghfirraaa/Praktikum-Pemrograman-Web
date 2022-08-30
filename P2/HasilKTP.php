<?php
$a=$_POST['nama'];
$b=$_POST['ttl'];
$c=$_POST['JK'];
$d=$_POST['alamat'];
$e=$_POST['agama'];
$f=$_POST['SP'];
$g=$_POST['pekerjaan'];
$h=$_POST['kwn'];
$i=$_POST['kadaluarsa'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login KTP</title>
</head>
<body>
    <table border="1">
    <tr>
        <thead>
            <th>Nama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Status Perkawinan</th>
            <th>Pekerjaan</th>
            <th>Kewarganegaraan</th>
            <th>Berlaku Hingga</th>
        </thead>
    </tr>
    <tr>
        <tbody>
            <th><?php echo $a; ?></th>
            <th><?php echo $b; ?></th>
            <th><?php echo $c; ?></th>
            <th><?php echo $d; ?></th>
            <th><?php echo $e; ?></th>
            <th><?php echo $f; ?></th>
            <th><?php echo $g; ?></th>
            <th><?php echo $h; ?></th>
            <th><?php echo $i; ?></th>
        </tbody>
    </tr>
    </table>
</body>
</html>
