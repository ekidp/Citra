<?php

$kodesatuan = intval($_REQUEST['kodesatuan']);

require 'panggil.php';

$sql = "delete from mastersat where kodesatuan=$kodesatuan";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>