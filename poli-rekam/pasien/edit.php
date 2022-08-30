<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Pasien</h1>
	
	<h4>
		<small>Edit Data Pasien</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_pasien);
			?>

			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="identitas">Nomor KTP</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="number" name="identitas" id="identitas" class="form-control" value="<?= $data['nomor_identitas'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="nama">Nama Pasien</label>
					<input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_pasien'] ?>" required="">
				</div>
				<div class="form-group">
					<label for="jkel">Jenis Kelamin</label>
					<select name="jkel" id="jkel" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_poli = mysqli_query($con, "SELECT * FROM tb_kelamin ORDER BY jen_kel ASC") or die(mysqli_error($con));
						while($data_poli = mysqli_fetch_array($sql_poli)){
							if($data['id_kel'] == $data_poli['id_kel']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_poli['id_kel'].'">'.$data_poli['jen_kel'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $data['alamat'] ?>" required="" autofocus="">
				</div>	
				<div class="form-group">
					<label for="telp">No. Telepon</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="number" name="telp" id="telp" class="form-control" value="<?= $data['no_telp'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="telp">Status Pasien</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="text" name="sts" id="sts" class="form-control" value="<?= $data['statuss'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="umur">Umur</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="number" name="umur" id="umur" class="form-control" value="<?= $data['umur'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="telp">Tekanan Darah</label>
					<input type="hidden" name="id" value="<?= $data['id_pasien'] ?>">
					<input type="text" name="tkd" id="tkd" class="form-control" value="<?= $data['tkd'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
