<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
    	<div id="header">
    		<h1>Simple Upload dan Download File</h1>
        	<span>Dibuat oleh maghfiraimroatus10@gmail.com</span>
        </div>
        
        <div id="menu">
        	<a href="iAndex.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
        </div>
        
        <div id="content">
        	<h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download 
                Anda bisa mengklik Judul file yang di inginkan.</p>
            
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">Kode_doc</th>
                    <th width="80">Tgl</th>
                    <th>deskripsi</th>
                    <th>File</th>
                    <th>Nama File</th>
                    <th width="70">Tipe</th>
                    <th width="70">Ukuran</th>
                </tr>
                <?php
				include('koneksi.php');
				// $sql = "SELECT * FROM download ORDER BY id DESC";
                // $a=$koneksi->query($sql);
                $sql = mysqli_query($koneksi,"SELECT * FROM document ORDER BY kode_doc DESC");
				if(mysqli_num_rows($sql)>0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['tgl'].'</td>
                            <td align="center">'.$data['deskripsi'].'</td>
                            <td align="center">'.$data['nama_file'].'</td>
							<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
            <!-- <td><a href="download1.php?file='.$data['file'].'">'.$data['file'].'</a></td> -->
            </p>
        </div>
    </div>

</body>
</html>