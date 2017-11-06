<?php

$koderuangan = htmlspecialchars($_REQUEST['koderuangan']);
$kodebarang = htmlspecialchars($_REQUEST['kodebarang']);
$tanggal = htmlspecialchars($_REQUEST['tanggal']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);
$catatan = htmlspecialchars($_REQUEST['catatan']);

require 'panggil.php';

$sql = "insert into ruangan(koderuangan,kodebarang,tanggal,jumlah,catatan) values('$koderuangan','$kodebarang','$tanggal','$jumlah','$catatan')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'koderuangan' => mysql_insert_id(),
		'kodebarang' => $kodebarang,
		'tanggal' => $tanggal,
		'jumlah' => $jumlah,
		'catatan' => $catatan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>