<?php

	//Simple use for chr()
	
	echo chr(65);
	echo chr(114);
	echo chr(116);
	echo chr(105);
	echo "&nbsp;&nbsp;";
	echo chr(73);
	echo chr(46);
	echo "&nbsp;&nbsp;";
	echo chr(80);
	echo chr(97);
	echo chr(116);
	echo chr(101);
	echo chr(108);
	echo "<br />";
	
	// Display Ascii Table
	
	/*for($i=65; $i<=90; $i++)
	{
		for($j=$i; $j<=$i; $j++)
		{
			echo "<pre>";
			echo "Ascii of  ". chr($i) . " is :  " . $i .  "<br />";
			echo "</pre>";
		}
	}*/
	
	for($m=33; $m<=255; $m++)
	{
		for($n=$m; $n<=$m; $n++)
		{
			echo "<pre>";
			echo "Ascii of  ". chr($n) . " is :  " . $n ;
			echo "</pre>";
		}
	}
?>