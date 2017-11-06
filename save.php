<?php

$namaruangan = htmlspecialchars($_REQUEST['namaruangan']);

require 'panggil.php';

$sql = "insert into masterruangan(namaruangan) values('$namaruangan')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'koderuangan' => mysql_insert_id(),
		'namaruangan' => $namaruangan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>