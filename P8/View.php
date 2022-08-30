<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<table border="1">
        <tr>
            <thead>
                <th>Id_bukutamu</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
            </thead>
        </tr>
        <tbody>
            <?php
            $no=1;
            include "Koneksi.php";
            $a="SELECT * FROM bukutamu";
            $b= $koneksi -> query ($a);
            while ($c=$b -> fetch_array()){?>
            <tr>
                <td><?php echo $c['id_bukutamu']; ?></td>
                <td><?php echo $c['nama']; ?></td>
                <td><?php echo $c['email']; ?></td>
                <td><?php echo $c['komentar']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>