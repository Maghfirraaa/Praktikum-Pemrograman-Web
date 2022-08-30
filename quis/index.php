<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <style>
        .tabel{
            border: 1px solid #DDDDDD;
            display: inline-block;
            font-size: 14px;
            padding: 1em 2em;
            background-color: #ddb5b5;
        }
    </style>
</head>
<body>
    <form action="aksi.php" method="post">
        <table class="tabel">
            <tr>
                <td>Masukkan Nilai</td>
                <td>:</td>
                <td><input type="text" name="nilai"></td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Lanjut"></td>
            </tr>
        </table>
    </form>
</body>
</html>