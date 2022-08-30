<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    
</head>
<body>
<?php
$nik=$_POST['NIK'];
$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$jk=$_POST['JK'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$SP=$_POST['SP'];
$goldar=$_POST['goldar'];
$pekerjaan=$_POST['pekerjaan'];
$kwn=$_POST['kwn'];
?>
    <table border="1">
    <tr>
        <th colspan="2" align="center">Biodata Diri</th>
    </tr>
    <tr>
            <th>NIK</th>
            <td><?php echo $nik; ?></td>
    </tr>
    <tr>
            <th>Nama</th>
            <td><?php echo $nama; ?></td>
    </tr>
    <tr>
            <th>TTL</th>  
            <td><?php echo $ttl; ?></td>  
    </tr>
   <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $jk; ?></td>  
   </tr>
    <tr>
            <th>Alamat</th>
            <td><?php echo $alamat; ?></td>  
    </tr>
    <tr>
            <th>Agama</th>
            <td><?php echo $agama; ?></td>
    </tr>
    <tr>
            <th>Status Perkawinan</th>
            <td><?php echo $SP; ?></td>
    </tr>
    <tr>
            <th>Golongan Darah</th>
            <td><?php echo $goldar; ?></td>
    </tr>
    <tr>
            <th>Pekerjaan</th>
            <td><?php echo $pekerjaan; ?></td>
    </tr>
    <tr>
            <th>Kewarganegaraan</th>
            <td><?php echo $kwn; ?></td>
    </tr>
    </table>
</body>
</html>