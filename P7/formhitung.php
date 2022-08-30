<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hitung</title>
    <style>
        form {
            border: 1px  black;
            display: inline-block;
            font-size: 14px;
            padding: 1em 2em;
            background-color: #e6bfbf;
            align-items: center;
            margin-left: 455px;
        }
        .hasil{
            margin-top: 40px;
            margin-left: 455px;
        }
    </style>
</head>

<body>
    <?php
    	if(isset($_POST['hitung'])){
            $bil1 = $_POST['value1'];
            $bil2 = $_POST['value2'];
            $operasi = $_POST['operator'];
            switch ($operasi) {
                case 'tambah':
                    $hasil = $bil1+$bil2;
                break;
                case 'kurang':
                    $hasil = $bil1-$bil2;
                break;
                case 'kali':
                    $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                    $hasil = $bil1/$bil2;
                break;			
                case 'modulo':
                    $hasil = $bil1%$bil2;
                break;			
            }
        }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Form Hitung</legend>
            <table>
                <tr>
                    <td>Value 1</td>
                    <td><input type="text" name="value1" placeholder="Masukkan Value 1" required></td>
                </tr>
                <tr>
                    <td>Value 2</td>
                    <td><input type="text" name="value2" placeholder="Masukkan Value 2" required></td>
                </tr>
                <tr>
                    <td>Operator</td>
                    <td>
                        <select name="operator">
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            <option value="bagi">:</option>
                            <option value="kali">x</option>
                            <option value="modulo">%</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="hitung" value="Hasil">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <div class="hasil">
    <?php 
    if(isset($_POST['hitung'])){
        echo "Hasil Operator ".$operasi." adalah ".$hasil;
    }else{
        echo "0";
    }
	?>
    </div>
</body>

</html>