<?php
	$host 			= "localhost";
	$user 			= "burngeek_admin";
	$pw 			= "w8uiq9da";
	$db 			= "burngeek_desarrollo";
	$con = mysql_connect($host,$user,$pw)
	or die("problemas al conectar con el servidor");
	mysql_select_db($db,$con)
	or die("problemas al conectar db");
	
?>