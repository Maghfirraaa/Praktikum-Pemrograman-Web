<html>
<head>
    <title>Tutorial Cara Membuat Upload File Dengan PHP MySQL</title>
</head>
<body>
    <h1>Form Upload File Dengan PHP</h1>
    <?php 
    include "koneksi.php";
    if (isset($_POST['upload'])){
    $deskripsi   = $_POST['deskripsi'];
    $rand=rand();
    $ekstensi    = array('pdf','docx','png');
        $filename    = $_FILES['file']['name'];
        // $x        = explode('.',$nama);
        $tipe_file = $_FILES['file']['type'];
        $ukuran        = $_FILES['file']['size'];
        $file_tmp    = $_FILES['file']['tmp_name']; 
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$ekstensi) ) {
            header("location:upload.html?alert=gagal_ekstensi");
        }else{
            if($ukuran < 1044070){		
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['file']['tmp_name'], 'pdf/'.$rand.'_'.$filename);
                mysqli_query($koneksi, "INSERT INTO document VALUES(NULL,'NOW()'.'$deskripsi','$xx','$filename','$tipe_file','$ukuran')");
                header("location:hasilupload.php?alert=berhasil");
            }else{
                header("location:hasilupload.php?alert=gagal_ukuran");
            }
        }
    } 
    ?>
    </table>
</body>
</html>