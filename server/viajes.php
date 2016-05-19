<?php
	require('mysql.php');
	$main = new mysql();
	//$consult = "SELECT fecha, curp, nombres, email FROM respondents";
	$consult = "SELECT * FROM getclientes";
	echo json_encode($main->query_row($consult));
?>