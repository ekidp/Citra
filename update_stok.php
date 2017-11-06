<?php

$kodebarang = intval($_REQUEST['kodebarang']);
$namabarang = htmlspecialchars($_REQUEST['namabarang']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);

require 'panggil.php';

$sql = "update stok set kodebarang='$kodebarang',namabarang='$namabarang',jumlah='$jumlah' where kodebarang=$kodebarang";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodebarang' => $kodebarang,
		'namabarang' => $namabarang,
		'jumlah' => $jumlah
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>