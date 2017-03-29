<?php
	
	$url = mysql_connect("localhost", "root", "");
	$selectdb = mysql_select_db("kuis", $url);
	
	if ($selectdb){
		//echo "SUKSES";
	} else {
		echo "Tidak dapat terhubung ke database";
	}
?>