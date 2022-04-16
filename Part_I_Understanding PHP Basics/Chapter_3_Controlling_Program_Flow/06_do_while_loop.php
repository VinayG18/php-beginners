<?php

	$n = "1234321";
	$reverse = "0";
	$number = "0";
	$l_digit = "0";
	
	echo "Unsigned Integer :" . $n ."<br />";
	$number = $n;
	//echo $number;
	do
	{
		$l_digit = $n % 10;
		$reverse = ($reverse * 10) + $l_digit;
		$n = $n /10;
	}
	while ($n > 10);
	echo "Reverse number :" . $reverse ."<br /><br />";
	
	if($number == $reverse)
	{
		echo "It is Palindrom" ."<br /><br />";
	}
	else
	{
		echo "It is not Palindrom" ."<br /><br />";
	}
	
	
	// SECOND EXAMPLE
	echo "This is Second Example" ."<br /><br />";
	$i = 1;
	do
	{
		echo $i;
		$i++;
	}
	while($i <= 5);


?>