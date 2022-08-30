<?php 
    session_start();
    include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if (!isset($_SESSION['username'])) {
        die("Anda belum login");
    }
    $username=$_SESSION['username'];
    $level=$_SESSION['level'];

    $query_1="select * from register where username='$user' and password='$psw'";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .tabel1{
            background-color: #ddb5b5;
            border: 1px solid;
            margin: 10px;
            padding: 10px;
            height: 150px;
            margin-left: auto;
            margin-right: auto;
        }
        .tabel2{
            background-color: #ddb5b5;
            border: 1px solid;
            margin: 10px;
            padding: 10px;
            height: 150px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }
        h1{
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            /* margin-left: 10px; */
            text-align: center;
        }
        h2{
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            font-style: oblique;
            /* margin-left: 10px; */
            text-align: center;
            margin-top: 5px;
        }
        fieldset{
            height: 500px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <fieldset>
    <legend align="center">Halaman Milik Admin</legend>
    <h1>Input Data Barang</h1>
    <form action="action_barang.php" method="POST">
        <table class="tabel1">
                <tr>
                    <td>Nama Barang :</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>Stok Awal :</td>
                    <td><input type="number" name="jumlahbarang"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </table>
    </form>
    <br>
    <h2>Input Data Pembelian</h2>
    <form action="action_pembelian.php" method="POST">
            <table class="tabel2">
                <tr>
                    <td>Nama Barang :</td>
                    <td><select name="namabarang" required=""> 
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
                <tr>
                    <td></td>
                    <td><input type="submit" value="Input Data"></td>
                </tr>
            </table>
    </form>
    </fieldset>
</body>
</html>