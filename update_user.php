<?php

$kodebarang = intval($_REQUEST['kodebarang']);
$namabarang = htmlspecialchars($_REQUEST['namabarang']);

require 'panggil.php';

$sql = "update masterbarang set namabarang='$namabarang' where kodebarang=$kodebarang";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodebarang' => $kodebarang,
		'namabarang' => $namabarang
	
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>