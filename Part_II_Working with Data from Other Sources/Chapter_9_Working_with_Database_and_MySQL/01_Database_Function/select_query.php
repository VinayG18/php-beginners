<?php

	require 'connect_db.php';
	
?>


<?php
	
	$query = "SELECT food,calories FROM food WHERE healthy_unhealthy = 'h' AND calories = '200' ORDER BY id DESC ";
	
	if($query_run = mysqli_query($conn, $query))
	{
		if(mysqli_num_rows($conn, $query_run)<=0)	//if(mysql_num_rows($query_run)==NULL)
		{
			echo 'No Result Found.';
		}
		else
		{
			while($query_row = mysqli_fetch_assoc($conn, $query_run))
			{
				$food = $query_row['food'];
				$calories = $query_row['calories'];
				
				echo $food.' has '.$calories.' calories.<br />';
			}
		}
	}
	else
	{
		echo mysql_error();
	}
?>