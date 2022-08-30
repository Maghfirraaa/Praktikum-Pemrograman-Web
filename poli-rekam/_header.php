<?php
require_once"_config/config.php";
require "_assets/libs/vendor/autoload.php";

if(!isset($_SESSION['user'])){
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Polilinik Sehat</title>
    <link rel="shortcut icon" type="image/icon" href="hospital.png"/>

    
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- load DataTables -->
    <link href="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
    <!-- load jquery online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <!-- load ckeditor -->
    <script src="<?= base_url(); ?>/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->
    

</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="<?= base_url('dashboard/index.php') ?>">Poliklinik Sehat</a>
            <?php
                    $level = $_SESSION['level'];
                    if ($level  == '1') {
                ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">  
                <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
              
                    <a class="nav-link" href="<?= base_url('dashboard/index.php') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kelola Data
                    </a>
                    <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('pasien/data.php') ?>">Pasien </a>
                    <a class="dropdown-item" href="<?= base_url('dokter/data.php') ?>">Dokter</a>
                    <a class="dropdown-item" href="<?= base_url('poliklinik/data.php') ?>">Poliklinik</a>
                    <a class="dropdown-item" href="<?= base_url('jenispoli/data.php') ?>">Jenis Poliklinik</a>
                    <a class="dropdown-item" href="<?= base_url('penyakit/data.php') ?>">Data Penyakit</a>
                    <a class="dropdown-item" href="<?= base_url('obat/data.php') ?>">Data Obat</a>
                    <a class="dropdown-item" href="<?= base_url('tindakan/data.php') ?>">Jenis Tindakan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekammedis/data.php') ?>">Rekam Medis</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout.php') ?>">Log Out</a>
                </li>
                <!-- Navbar untuk level 2 sebagai petugas -->
                <?php } elseif ($level == '2') { ?> 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kelola Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?= base_url('pasien/data.php') ?>">Pasien </a>
                    <a class="dropdown-item" href="<?= base_url('dokter2/data.php') ?>">Dokter</a>

                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('rekammedis/data.php') ?>">Rekam Medis</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout.php') ?>">Log Out</a>
                </li>
                <?php } ?>
                </ul>
            </div>
            </nav>
    
      

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>  
</html>