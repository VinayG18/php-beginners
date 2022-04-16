<?php

	$str1 = "AXAR";
	$str2 = "Axar";
	
	echo $str1;
	echo "<br />";
	echo $str2;
	echo "<br />";
	
	echo strcmp($str1,$str2);
	echo "<br />";
	if(strcmp($str1,$str2) == 0)
	{
		echo "String is Match....";
	}
	else
	{
		echo "String is Not Match....";
	}
?>