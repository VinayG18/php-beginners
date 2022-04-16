<?php


	//Simple User Define fuction without parameter
	

	function add()
	{
		$a = 10;
		$b = 20;
		$ans = $a + $b ;
		return $ans;
	}
	echo "Addition of 10 and 20 is : " . add();
	echo "<br /><br />";
	// User Define Function with Parameter
	
	$x = "";
	$y = "";
	function concate($x, $y)
	{
		$z = $x . $y;
		echo "<b>" . $x . "</b>  concate with " . "<b>" . $y . "</b> = ";
		return "<b>" . $z ;
		
	}
	echo concate("Vinay", "Ghael");
	
	echo "<br /><br />";
	
	// UserDefine Function with Default Value
	
	$a = 0;
	$b = 0;
	function mul($a, $b, $c="")
	{
		$answer = $a * $b * $c;
		
		return $answer;
	}
		echo " Multiplication of 20 * 20 * 10 = " .  mul(20,20,10) . "<br />";	//take value 10 for $c
		echo " Multiplication of 20 * 20 * 0 = " . mul(20,20) . "<br />";	//take default value for $c
?>