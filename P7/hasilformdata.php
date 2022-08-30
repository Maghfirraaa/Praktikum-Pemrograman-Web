<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$JK=$_POST['JK'];
$email=$_POST['email'];
$jawab=$_POST['jawab'];


function salah(){
    $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
     
    echo "Maaf Jawaban Anda Salah<br>";
    echo "<a href='$url' onclick=history.back>Ulang</a>";
}

if($jawab=="9"){
?>
 <h2>Hasil Input Data </h2>
 <table border="1">
    <tr>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>Email</td>
        <td>Jawaban</td>
    </tr>
    <tr>
        <td><?php echo $nama?></td>
        <td><?php echo $alamat?></td>
        <td><?php echo $JK?></td>
        <td><?php echo $email?></td>
        <td>Benar</td>
    </tr>
 </table>
 <?php
}else{
    salah();
}