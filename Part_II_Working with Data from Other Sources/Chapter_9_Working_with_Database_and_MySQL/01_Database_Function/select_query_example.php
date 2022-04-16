<?php

	require 'connect_db.php';
	
?>

<form action="select_query_example.php" method="get">
	Choose a food type: 
	<select name="uh">
		<option value="u">Unhealthy</option>
		<option value="h">Healthy</option>		
	</select><br /><br />
	<input type="submit" value="Submit" />
</form>

<?php
	
if(isset($_GET['uh'])&&!empty($_GET['uh']))
{	
	$uh = strtolower($_GET['uh']);
	if($uh=='h'||$uh=='u')
	{
		$query = "SELECT food,calories FROM food WHERE healthy_unhealthy = '$uh' ORDER BY id DESC ";
		
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
			echo mysqli_error();
		}
	}
}
?>