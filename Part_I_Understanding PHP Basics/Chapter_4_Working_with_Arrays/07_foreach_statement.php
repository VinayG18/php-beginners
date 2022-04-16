<?php

	$a = array('Anushka','Virat','Vamika');
	foreach($a as $b)
	{
		echo $b . "<br />";
	}
	
	echo "<br />";
	
	/*------------------------------------------*/
	
	$x = array(11,22,33);
	foreach($x as $y)
	{
		echo $y . "<br />";
	}
	
	echo "<br />";
	
	/*------------------------------------------*/
	
	foreach($a as $z)
	{
		echo $y . " . "  . $z . "<br />";
	}
	
	echo "<br />";
	
	/*------------------------------------------*/
	
	foreach($a as $z)
	{
		foreach($x as $y)
		{
			echo $y . " . "  . $z . "<br />";
		}
	}
	
	echo "<br />";
	
?>