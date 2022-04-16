<?php

	//$number = 654;
	$number = 999.999;
	
	$upper = 1000;
	$lower = 500;
	
	if($number>=$lower && $number<=$upper)
	{
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br />";
	
	$number1 = 3;
	$a = 2;
	$b = 4;
	
	if($number1==$a || $number1==$b)
	{
		echo "Ok...";
	}
	else
	{
		echo "Not Ok...";
	}

	echo "<br />";
	
	$size = 15;
	$size1 = 15;
	$size2 = 10;
	
	if(!($size==$size1) && ($size>=$size2))
	{
		echo "Ok...";
	}
	else
	{
		echo "Not Ok...";
	}
?>