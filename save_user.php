<?php

$namabarang = htmlspecialchars($_REQUEST['namabarang']);

require 'panggil.php';

$sql = "insert into masterbarang(namabarang) values('$namabarang')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodebarang' => mysql_insert_id(),
		'namabarang' => $namabarang
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>