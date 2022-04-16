<?php
	
	$str = 'This is a string.';
	
	if(preg_match('/This/',$str))
	{
		echo 'Match Found';
	}
	else
	{
		echo 'Match not found';
	}

?>