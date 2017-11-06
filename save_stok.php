<?php

$kodebarang = htmlspecialchars($_REQUEST['kodebarang']);
$namabarang = htmlspecialchars($_REQUEST['namabarang']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);


require 'panggil.php';

$sql = "insert into stok(kodebarang,namabarang,jumlah) values('$kodebarang','$namabarang','$jumlah')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodebarang' => mysql_insert_id(),
		'namabarang' => $namabarang,
		'jumlah' => $jumlah
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>