<?php

$koderuangan = intval($_REQUEST['koderuangan']);
$namaruangan = htmlspecialchars($_REQUEST['namaruangan']);

require 'panggil.php';

$sql = "update masterruangan set namaruangan='$namaruangan' where koderuangan=$koderuangan";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'koderuangan' => $koderuangan,
		'namaruangan' => $namaruangan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>