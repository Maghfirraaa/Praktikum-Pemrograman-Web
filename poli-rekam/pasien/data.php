<?php include_once('../_header.php'); ?>
	<div class="box">
		<h1>Pasien</h1>

		

		<div class="table-responsive">
		<h4>
			<small>Data Pasien</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Pasien</a>
			</div>
		</h4>
			<table class="table table-bordered table-striped table-hover" id="pasien">
				<thead>
					<tr>
						<th>NO. KTP</th>
						<th>Nama Pasien</th>
						<th>Jenis Kelamin </th>
						<th>Alamat Pasien</th>
						<th>No. Telepon </th>
						<th>Status Pasien</th>
						<th>Umur Pasien</th>
						<th>Tekanan Darah Pasien</th>
						<th> </th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function(){
		    $('#pasien').DataTable({
		        "processing": true,
		        "serverSide": true,
		        "ajax": "pasien-data.php",
		        scrollY : '250px',
		        dom: 'Bfrtip',
		        buttons: [
		            
		            {
		                extend: 'excel',
		            },
		           
		            {
		                extend: 'pdfHtml5',
		                download: 'open',
		                messageBottom: null
		            }
		        ],
		        columnDefs:[{
		        	"searchable": false,
		        	"orderable": false,
		        	"targets": 8,
		        	"render": function(data, type, row){
		        		var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin menghapus data?');\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
		        		return btn;
						// scrollY : '250px'
		        	}
		        }]
		    });
		} );
	</script>

<?php include_once('../_footer.php'); ?>                                                       