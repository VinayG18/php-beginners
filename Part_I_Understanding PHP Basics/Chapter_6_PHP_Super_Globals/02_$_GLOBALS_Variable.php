<?php

	//$GLOBALS: Contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the names of the global variables. $GLOBALS has existed since PHP3.
	
	$user_ip = $_SERVER['REMOTE_ADDR'];
	function echo_ip()
	{
	
		global $user_ip;
		$string = "Your IP Address is: ". $user_ip;
		echo $string;
	}
	echo_ip();
	
?>