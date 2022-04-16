<?php
	
	$mysql_error = 'Could not Connect.';
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_password = '';
	
	$mysql_db = 'beginner_php_tutorial';
	
	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	if(!mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db))
	{
		die($mysqli_error);
	}

?>