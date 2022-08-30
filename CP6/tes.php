<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
  Cek Kelulusan Ujian <br>
  Nilai Ujian : <input type="text" name="nilai">
  <input type="submit" value="Hasil">
</form>

<?php
    $nilai = $_POST['nilai'];
  
    if ($nilai >= 90)
    {
      $grade = "A+";
      $keterangan = "LULUS";
    }
    elseif ($nilai >= 80)
    {
      $grade = "A";
      $keterangan = "LULUS";
    }
    elseif ($nilai >= 70)
    {
      $grade = "B";
      $keterangan = "LULUS";
    }
    elseif ($nilai >= 60)
    {
      $grade = "C";
      $keterangan = "LULUS";
    }
    else
    {
      $grade = "D";
      $keterangan = "TIDAK LULUS";
    }
?>

</body>
</html>