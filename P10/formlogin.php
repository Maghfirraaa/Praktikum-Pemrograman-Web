<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .Login{
            border: 1px solid #DDDDDD;
            display: inline-block;
            font-size: 14px;
            padding: 1em 2em;
            background-color: #e6bfbf;
            align-items: center;
            margin-left: 500px;
        }
    </style>
</head>
<body>
<div class="Login">
<form action="act_login.php?op=in" method="POST">
    <fieldset>
        <Legend>Login Now!</Legend>
            <table>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="psw"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </table>
    </fieldset>
</form>
</div>
</body>
</html>
