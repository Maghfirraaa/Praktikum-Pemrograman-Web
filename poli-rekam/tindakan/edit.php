<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Jenis Tindakan</h1>
	<h4>
		<small>Edit Jenis Tindakan</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
				$id = @$_GET['id'];
				$sql_obat = mysqli_query($con, "SELECT * FROM tb_tindakan WHERE id_tindakan = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_obat);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Jenis Tindakan</label>
					<input type="hidden" name="id" value="<?= $data['id_tindakan'] ?>">
					<input type="text" name="nama" value="<?= $data['jenis'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
