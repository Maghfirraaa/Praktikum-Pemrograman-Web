<?php 
$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["name"], $target_file)){
    echo "File ".htmlspecialchars(basename($_FILES["file"]["name"])) . 
    "berhasil diunggah";
    echo "<br>";
    echo "<img src='target_file' width='250'>";
}
else{
    echo "File gagal di unggah";
}

?>