<?php

$kodetransaksi = intval($_REQUEST['kodetransaksi']);
$kodebarang = htmlspecialchars($_REQUEST['kodebarang']);
$kodesatuan = htmlspecialchars($_REQUEST['kodesatuan']);
$namabarang = htmlspecialchars($_REQUEST['namabarang']);
$jumlah = htmlspecialchars($_REQUEST['jumlah']);
$catatan = htmlspecialchars($_REQUEST['catatan']);

require 'panggil.php';

$sql = "update barang set kodebarang='$kodebarang',kodesatuan='$kodesatuan',namabarang='$namabarang',jumlah='$jumlah',catatan='$catatan' where kodetransaksi=$kodetransaksi";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodetransaksi' => $kodetransaksi,
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