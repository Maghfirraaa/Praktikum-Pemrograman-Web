<?php
include_once('../_header.php');
?>

<div class="box">
	<h1>Rekam Medis</h1>
	<h4>
		<small>Edit Data Rekam Medis</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_rekammedis = mysqli_query($con, "SELECT * FROM tb_rekammedis INNER JOIN tb_poliklinik ON tb_rekammedis.id_poli = tb_poliklinik.id_poli INNER JOIN tb_pasien ON tb_rekammedis.id_pasien = tb_pasien.id_pasien INNER JOIN tb_dokter ON tb_rekammedis.id_dokter = tb_dokter.id_dokter WHERE id_rm ='$id'") or die(mysqli_error($con));
			$data = mysqli_fetch_array($sql_rekammedis);
			?>
			<form action="proses.php" method="post">
				<input type="hidden" name="id" value="<?= $data['id_rm'] ?>">
				<div class="form-group">
					<label for="tgl">Tanggal Periksa</label>
					<input type="date" name="tgl" id="tgl" class="form-control" value="<?= $data['tgl_periksa'] ?>" required="" autofocus="">
				</div>
				<div class="form-group">
					<label for="jpoli">Jenis Poli</label>
					<select name="jpoli" id="jpoli" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_poli = mysqli_query($con, "SELECT * FROM tb_jenispoli ORDER BY jenis_poli ASC") or die(mysqli_error($con));
						while($data_poli = mysqli_fetch_array($sql_poli)){
							if($data['id_pol'] == $data_poli['id_pol']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_poli['id_pol'].'">'.$data_poli['jenis_poli'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="poli">Nama Poli</label>
					<select name="poli" id="poli" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_poli = mysqli_query($con, "SELECT * FROM tb_poliklinik ORDER BY nama_poli ASC") or die(mysqli_error($con));
						while($data_poli = mysqli_fetch_array($sql_poli)){
							if($data['id_poli'] == $data_poli['id_poli']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_poli['id_poli'].'">'.$data_poli['nama_poli'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="pasien">Nama Pasien</label>
					<select name="pasien" id="pasien" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien") or die(mysqli_error($con));
						while($data_pasien = mysqli_fetch_array($sql_pasien)){
							if($data['id_pasien'] == $data_pasien['id_pasien']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="keluhan">Keluhan</label>
					<textarea name="keluhan" id="keluhan" class="form-control" required=""><?= $data['keluhan']; ?></textarea>
				</div>
				<div class="form-group">
					<label for="dokter">Nama Dokter</label>
					<select name="dokter" id="dokter" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter") or die(mysqli_error($con));
						while($data_dokter = mysqli_fetch_array($sql_dokter)){
							if($data['id_dokter'] == $data_dokter['id_dokter']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_dokter['id_dokter'].'">'.$data_dokter['nama_dokter'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="tindakan">Tindakan</label>
					<select name="tindakan" id="tindakan" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_obat = mysqli_query($con, "SELECT * FROM tb_tindakan") or die(mysqli_error($con));
						while($data_obat = mysqli_fetch_array($sql_obat)){
							if($data['id_tindakan'] == $data_obat['id_tindakan']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_obat['id_tindakan'].'">'.$data_obat['jenis'].'</option>';
						} ?>
					</select>
				</div>
				<div class="form-group">
					<label for="obat">Data Obat</label>
					<select name="obat" id="obat" class="form-control" required="">
						<option value="">- Pilih -</option>
						<?php
						$sql_obat = mysqli_query($con, "SELECT * FROM tb_obat") or die(mysqli_error($con));
						while($data_obat = mysqli_fetch_array($sql_obat)){
							if($data['id_obat'] == $data_obat['id_obat']){
								$select = "selected";
							}
							else{
								$select = "";
							}
							echo '<option '.$select.' value="'.$data_obat['id_obat'].'">'.$data_obat['nama_obat'].'</option>';
						} ?>
					</select>
				</div>
				

					</select>
				</div>
				<div class="form-group">
					<input type="reset" name="reset" value="Reset" class="btn btn-default">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace( 'keluhan' );
</script>



<?php include_once('../_footer.php'); ?>
