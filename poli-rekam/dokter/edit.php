<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Dokter</h1>
	<h4>
		<small>Edit Data Dokter</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
				$id = @$_GET['id'];
				$sql_pol = mysqli_query($con, "SELECT * FROM tb_dokter WHERE id_dokter = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_pol);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Nama Dokter</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" name="nama" value="<?= $data['nama_dokter'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">spesialis</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" name="nama" value="<?= $data['spesialis'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">Alamat</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" name="nama" value="<?= $data['alamat'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">No. Telp</label>
					<input type="hidden" name="id" value="<?= $data['id_dokter'] ?>">
					<input type="text" name="nama" value="<?= $data['no_telp'] ?>" class="form-control" required="" autofocus="">
				<div class="form-group">
					<label for="upload">Tambah Foto</label>
					<input type="file" name="upload" id="upload" class="form-control" required=""></input>
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
