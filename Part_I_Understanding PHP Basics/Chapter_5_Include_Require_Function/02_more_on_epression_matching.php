<?php

	function has_space($str)
	{
		if(preg_match('/ /',$str))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	

	
	$str = 'This doesn\'t have space';
	
	if(has_space($str))
	{
		echo 'Has at least one space';
	}
	else
	{
		echo 'Has no space';
	}

?>