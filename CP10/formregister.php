<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        h1{
            font-size: 14px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>
    <h1>REGISTER</h1>
    <form action="act_register.php" method="post">
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" required=""></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" id="" required=""></td>
            </tr>
            <tr>
                <td>Ulangi Password :</td>
                <td><input type="password" name="ulangpassword" id="" required=""></td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td><input type="text" name="namalengkap" required=""></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" required=""></td>
            </tr>
            <tr>
                <td>Level :</td>
                <td>
                    <select name="level" id="">
                        <option value="admin">Admin</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>