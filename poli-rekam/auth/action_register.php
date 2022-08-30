<?php
    require_once"../_config/config.php";
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ulangpassword = $_POST['ulangpassword'];
    $level = $_POST['level'];

    // var_dump($name,$username,$password,$level);
    if ($password != $ulangpassword) {
    ?>
        <script type="text/javascript">
            window.alert("Ulangi. Password Tidak sama!")
            history.back();
        </script>
        <?php
    } else {
        $newPass = md5($password);
        $sql = "INSERT INTO `prak-web`.`tb_user` ( `nama_user`, `username`, `password`, `level`) VALUES ( '$name', '$username', '$newPass', '$level');";
        $a = $con->query($sql);
        
        if ($a === true) {
        ?>
            <script type="text/javascript">
                window.alert("Daftar Berhasil!");
                location.replace('register.php');
            </script>
    <?php
        } else {
            echo "Error";
        }
    }
    ?>
