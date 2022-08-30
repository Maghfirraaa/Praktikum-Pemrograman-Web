<?php 
    session_start();
    include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if (!isset($_SESSION['username'])) {
        die("Anda belum login");
    }
    $username=$_SESSION['username'];
    $level=$_SESSION['level'];

    $query_1="SELECT*from register where username='$user' and password='$psw'";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pengguna</title>
    <style>
        h1{
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            font-style: bold;
            /* margin-left: 10px; */
            text-align: center;
        }
        .pengguna{
            border: 1px ;
            margin: 10px;
            padding: 10px;
            height: 150px;
            margin-left: auto;
            margin-right: auto;
        }
        fieldset{
            height: 125px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ddb5b5;

        }
       
    </style>
</head>
<body>
    <h1>INPUT PEMBELIAN</h1>
    <div class="pengguna">
        <form action="action_penjualan.php" method="POST">
            <fieldset>
            <table>
                <legend align="center">Halaman Milik Pengguna</legend>
                <tr>
                    <td>Nama Barang :</td>
                    <td><select name="nama" required=""> 
                    <?php 
                include "koneksi.php";
                $a = "SELECT*from barang";
                $b=$koneksi->query($a);
                while ($c = $b->fetch_array()) {
            ?>
            <option value=<?php echo $c['namabarang'];?>><?php echo $c['namabarang'];?></option>
            <?php 
            }
            ?>                
                </select></td>
                </tr>
                <tr>
                    <td>Jumlah :</td>
                    <td><input type="number" name="jumlahbarang"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </table>
            </fieldset>
        </form>
        </div>
</body>
</html>