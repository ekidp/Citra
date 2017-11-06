<?php

$kodetransaksi = intval($_REQUEST['kodetransaksi']);

require 'panggil.php';

$sql = "delete from barang where kodetransaksi=$kodetransaksi";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>