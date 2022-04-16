<?php

	$a = 10;
	if(isset($a))
	{
		echo '$a is set';
	}
	else
	{
		echo '$a is not set';
	}
	echo "<br />";
	
	/*---------------------------------------------------------------*/
	
	$b = "Axar";
	if(isset($b))
	{
		echo '$b is set';
	}
	else
	{
		echo '$b is not set';
	}
	echo "<br />";
	
	/*---------------------------------------------------------------*/
	
	$c;
	if(isset($c))
	{
		echo '$c is set';
	}
	else
	{
		echo '$c is not set';
	}
	echo "<br />";
?>