<?php

	$time = time();
	$actual_time = date('d - M - Y @ H : i : s', $time);
	//$actual_time = date('d - M - Y @ H : i : s', $time-60);

	echo "The Current Date/Time is: " . $actual_time . "<br /><br />";
	
	
	//Modifying Timestamp
	
	$time = time();
	$time_now = date('d - M - Y @ H : i : s', $time);
	//$time_modified = date('d - M - Y @ H : i : s', $time-60);
	//$time_modified = date('d - M - Y @ H : i : s', strtotime('+1 year'));
	$time_modified = date('d - M - Y @ H : i : s', strtotime('+1 week 5 hours 30 minutes'));
	
	echo "The Time Now is: " . $time_now . "<br />";
	echo "The Time Modify is: " . $time_modified . "<br />";

?>