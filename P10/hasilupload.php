<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered">
			<tr>
				<th width="20%">Deskripsi</th>
				<th width="20%">File</th>
			</tr>
			<?php 
			$data = mysqli_query($koneksi,"SELECT*from document");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['deskripsi']; ?></td>
					<td><img src="pdf/<?php echo $d['file'] ?>" width="35" height="40"></td>
				</tr>
				<?php
			}
 
			?>
		</table>
</body>
</html>