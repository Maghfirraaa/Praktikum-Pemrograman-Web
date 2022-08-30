<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Pasien</h1>
	<h4>
		<small>Tambah Data Pasien</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="identitas">Nomor Identitas</label>
					<input type="number" name="identitas" id="identitas" class="form-control" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="nama">Nama Pasien</label>
					<input type="text" name="nama" id="nama" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="jkel">Jenis Kelamin</label>
					<select name="jkel" id="jkel" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_kel = mysqli_query($con, "SELECT * FROM tb_kelamin ORDER BY jen_kel ASC") or die(mysqli_error($con));
						while($data_kel = mysqli_fetch_array($sql_kel)){
							echo '<option value="'.$data_kel['id_kel'].'">'.$data_kel['jen_kel'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" id="alamat" class="form-control" required=""></textarea>
				</div>	
				<div class="form-group">
					<label for="telp">No. Telepon</label>
					<input type="number" name="telp" id="telp" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="telp">Status Pasien</label>
					<input type="text" name="sts" id="sts" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="umur">Umur</label>
					<input type="number" name="umur" id="umur" class="form-control" required="">
				</div>
				<div class="form-group">
					<label for="telp">Tekanan Darah</label>
					<input type="number" name="tkd" id="tkd" class="form-control" required="">
				</div>
				<div class="form-group">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('../_footer.php'); ?>
