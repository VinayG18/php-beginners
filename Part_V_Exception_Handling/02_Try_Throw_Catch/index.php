<?php

	$age = 13;
	
	try
	{
		if($age>18)
		{
			echo 'Old Enough.';
		}
		else
		{
			throw new Exception('Not Old Enough.');
		}
	}
	catch(Exception $ex)
	{
		echo 'Error: '.$ex->getMessage();
	}

?>