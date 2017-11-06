<?php

$kodesatuan = intval($_REQUEST['kodesatuan']);
$namasatuan = htmlspecialchars($_REQUEST['namasatuan']);

require 'panggil.php';

$sql = "update mastersat set namasatuan='$namasatuan' where kodesatuan=$kodesatuan";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array(
		'kodesatuan' => $kodesatuan,
		'namasatuan' => $namasatuan
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>