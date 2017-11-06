<?php

$kodebarang = htmlspecialchars($_REQUEST['kodebarang']);
$kodesatuan = htmlspecialchars($_REQUEST['kodesatuan']);
$namabarang = htmlspecialchars($_REQUEST['namabarang']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);
$catatan = htmlspecialchars($_REQUEST['catatan']);

require 'panggil.php';

$sql = "insert into barang(kodebarang,kodesatuan,namabarang,jumlah,catatan) values('$kodebarang','$kodesatuan','$namabarang','$jumlah','$catatan')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodetransaksi' => mysql_insert_id(),
		'kodebarang' => $kodebarang,
		'kodesatuan' => $kodesatuan,
		'namabarang' => $namabarang,
		'jumlah' => $jumlah,
		'catatan' => $catatan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>