<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Jenis Poli</h1>
	<h4>
		<small>Edit Data Poli</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
				$id = @$_GET['id'];
				$sql_pol = mysqli_query($con, "SELECT * FROM tb_jenispoli WHERE id_pol = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_pol);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="nama">Jenis Poliklinik</label>
					<input type="hidden" name="id" value="<?= $data['id_pol'] ?>">
					<input type="text" name="nama" value="<?= $data['jenis_poli'] ?>" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="ket">Keterangan</label>
					<textarea name="ket" id="ket" class="form-control" required=""><?= $data['keterangan'] ?></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
