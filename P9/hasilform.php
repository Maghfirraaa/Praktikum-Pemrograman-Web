<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Matakuliah</title>
</head>
<body>
    <a href="form.php"></a>
    <a href="form.php">[tambah]</a>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <td>Mata Kuliah</td>
                <td>Hari</td>
                <td>Jam</td>
                <td>Ruangan</td>
            </thead>
        </tr>
        <tbody>
            <?php
            $no=1;
            include "Koneksi.php";
            $a="SELECT * FROM jadwal inner join matkul where jadwal.id_matkul = matkul.id_matkul";
            $b= $Koneksi->query ($a);
            while ($c=$b->fetch_array()){?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $c['matakuliah']; ?></td>
                <td><?php echo $c['hari']; ?></td>
                <td><?php echo $c['jam']; ?></td>
                <td><?php echo $c['ruang']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
