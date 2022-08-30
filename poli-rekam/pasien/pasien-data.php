<?php
// SQL server connection information
include_once "../_config/conn.php";
 
// DB table to use
$table = 'tb_pasien';
 
// Table's primary key
$primaryKey = 'id_pasien';
 
// indexes
$columns = array(
    array( 'db' => 'nomor_identitas', 'dt' => 0 ),
    array( 'db' => 'nama_pasien',  'dt' => 1 ),
    array( 'db' => 'id_kel',  'dt' => 2),
    array( 'db' => 'alamat',     'dt' => 3 ),
    array( 'db' => 'no_telp',     'dt' => 4 ),
    array( 'db' => 'statuss',     'dt' => 5 ),
    array( 'db' => 'umur',     'dt' => 6 ),
    array( 'db' => 'tkd',     'dt' => 7 ),
    array( 'db' => 'id_pasien',     'dt' => 8 )
);
 

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require('../_assets/libs/DataTables/ssp.class.php');
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);