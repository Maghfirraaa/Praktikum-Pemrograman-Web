<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Luas Persegi Panjang</title>
</head>
<body>
    <?php
    $panjang    = $_POST['panjang'];
    $lebar      = $_POST['lebar'];
    $luas       = $panjang*$lebar; 
    echo "Hasil dari $panjang*$lebar adalah : $luas "; echo "<br>";
    echo "Jadi, Luas dari persegi panjang adalah $luas";
    ?>
</body>
</html>