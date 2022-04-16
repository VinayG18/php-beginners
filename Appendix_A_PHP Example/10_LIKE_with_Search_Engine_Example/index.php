<?php

	require 'connect_db.php';
	
	if(isset($_POST['search_name']))
	{
		$search_name = $_POST['search_name'];
		if(!empty($search_name))
		{
			if(strlen($search_name)>=4)
			{
				$query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysqli_real_escape_string($conn, $search_name)."%'";
				$query_run = mysqli_query($conn, $query);
				
				$query_num_rows = mysqli_num_rows($query_run);
				if($query_num_rows>=1)
				{
					echo $query_num_rows.' Result Found:<br />';
					while($query_row = mysqli_fetch_assoc($query_run))
					{
						echo $query_row['name'].'<br />';
					}
				}
				else
				{
					echo 'No Result Found.';
				}
			}
			else
			{
				echo 'Your Keyword must be 5 characters or more.';
			}
		}
	}

?>

<form action="index.php" method="post">
	Name: <input type="text" name="search_name" /> <input type="submit" value="Search" />

</form>