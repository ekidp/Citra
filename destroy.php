<?php

$koderuangan = intval($_REQUEST['koderuangan']);

require 'panggil.php';

$sql = "delete from masterruangan where koderuangan=$koderuangan";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>