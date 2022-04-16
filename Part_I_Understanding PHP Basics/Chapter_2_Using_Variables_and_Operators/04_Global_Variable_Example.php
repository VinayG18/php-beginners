<?php

	
	$user_ip = $_SERVER['REMOTE_ADDR'];
	function echo_ip()
	{
	
		global $user_ip;
		$string = "Your IP Address is: ". $user_ip;
		echo $string;
	}
	echo_ip();
	
?>