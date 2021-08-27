<?php
	$conn=@mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("bd_sortie",$conn)or die(mysql_error());
?>