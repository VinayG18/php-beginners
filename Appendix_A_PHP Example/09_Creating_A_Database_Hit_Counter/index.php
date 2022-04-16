<?php

	// @$query_run = mysqli_query($query); - if you add @ sign befor variable then it's doesn't display error if any occur
	// $query_run = mysqli_query($query); - without @ sign it's display error if any occur

	require 'connect_db.php';

	$user_ip = $_SERVER['REMOTE_ADDR'];
	
	function ip_exists($ip, $conn)
	{
		global $user_ip;
		$query = "SELECT ip FROM hits_ip WHERE ip = '$user_ip'";
		$query_run = mysqli_query($conn, $query);
		$query_num_rows = mysqli_num_rows($query_run);
		if($query_num_rows==0)
		{
			return false;
		}
		else if(mysqli_num_rows($query_run)>=1)
		{
			return true;
		}
	}
	function ip_add($ip, $conn)
	{
		$query = "INSERT INTO hits_ip VALUES ('$ip')";
		$query_run = mysqli_query($conn, $query);
	}
	
	function update_count($conn)
	{
		$query = "SELECT count FROM hits_count";
		if($query_run = mysqli_query($conn, $query))
		{
			$count = mysqli_result($query_run, 0,'count');
			$count_inc = $count + 1;
			
			$query_update = "UPDATE hits_count SET count = $count_inc";
			$query_update_run = mysqli_query($conn, $query_update);
		}
	}
	
	if(!ip_exists($user_ip, $conn))
	{
		update_count($conn);
		ip_add($user_ip, $conn);
	}
?>
<h1>My Page</h1>