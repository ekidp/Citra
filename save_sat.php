<?php

$namasatuan = htmlspecialchars($_REQUEST['namasatuan']);

require 'panggil.php';

$sql = "insert into mastersat(namasatuan) values('$namasatuan')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodesatuan' => mysql_insert_id(),
		'namasatuan' => $namasatuan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>