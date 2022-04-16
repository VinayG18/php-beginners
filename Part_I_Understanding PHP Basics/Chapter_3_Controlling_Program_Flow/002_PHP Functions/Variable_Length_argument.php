<?php

/*************************************************************************

func_num_args(): This function returns number of arguments passed to 
				the function while calling the function.

func_get_args(position): This function returns the value of specific 
						argument specified in the position. Position 
						indicates the index position of the argument.
						if you pass three args to the function then 
						the position of 1st args is 0, 2nd args is 1
						and 3rd args is 2.
						
func_get_args(): This function return an array which contains value of
 				all the args passed to the function.
				
*************************************************************************/

	function concate()
	{
		echo func_num_args() . " Arguments passed to the function<br />";
		$message = "";
		$arg = func_get_args();
		
		foreach($arg as $item)
		
			$message = $message . $item;
			return $message;
		
	
	
	}
	echo concate(" Hi... ", " Anushka ", " How ", " Are ", " You??? ");
?>