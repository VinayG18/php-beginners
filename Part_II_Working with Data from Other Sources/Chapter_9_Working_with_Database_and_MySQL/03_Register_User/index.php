<?php
	require 'core.php';
	require 'connect_db.php';
	
	if(loggedin())
	{
		$firstname = getuserfield('firstname');
		$lastname = getuserfield('lastname');
		echo 'You\'re logged in, '.$firstname.' '.$lastname.' <a href = "logout.php">Log Out</a><br />';
	}
	else
	{
		include 'login_form.php';
	}
	
	
?>