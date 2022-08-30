<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<a href="index.php">tambah</a>
<body>
    <table border="1">
        <tr>
        <thead>
            <th>ID</th>
            <th>nilai</th>
            <th>hasil</th>
            <th>tanggal</th>
            <th>pukul</th>
        </thead>
        </tr>
        <tbody>
            <?php
            $no=1;
            include "Koneksi.php";
            $a="SELECT * FROM hasil";
            $b= $koneksi -> query ($a);
            while ($c=$b -> fetch_array()){?>
         <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $c['nilai']; ?></td>
                <td><?php echo $c['hasil']; ?></td>
                <td><?php echo $c['tanggal']; ?></td>
                <td><?php echo $c['pukul']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>