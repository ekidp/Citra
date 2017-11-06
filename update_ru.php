<?php

$koderuangan = intval($_REQUEST['koderuangan']);
$kodebarang = htmlspecialchars($_REQUEST['kodebarang']);
$tanggal = htmlspecialchars($_REQUEST['tanggal']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);
$catatan = htmlspecialchars($_REQUEST['catatan']);

require 'panggil.php';

$sql = "update ruangan set koderuangan='$koderuangan',kodebarang='$kodebarang',tanggal='$tanggal',jumlah='$jumlah',catatan='$catatan' where koderuangan=$koderuangan";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'koderuangan' => $koderuangan,
		'kodebarang' => $kodebarang,
		'tanggal' => $tanggal,
		'jumlah' => $jumlah,
		'catatan' => $catatan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>