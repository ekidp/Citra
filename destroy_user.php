<?php

$kodebarang = intval($_REQUEST['kodebarang']);

require 'panggil.php';

$sql = "delete from masterbarang where kodebarang=$kodebarang";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>