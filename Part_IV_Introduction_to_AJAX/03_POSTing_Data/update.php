<?php

	mysql_connect('localhost','root','');
	mysql_select_db('beginner_php_tutorial');
	
	if(isset($_POST['text']))
	{
		$text = $_POST['text'];
		if(!empty($text))
		{
			$query = "INSERT INTO ajax_data VALUES('','".mysql_real_escape_string($text)."')";
			if($query_run = mysql_query($query))
			{
				echo 'Data Inserted...';
			}
			else
			{
				echo 'Failed...!';
			}
		}
		else
		{
			echo 'Please type something.';
		}
	}
?>