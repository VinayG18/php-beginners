<?php

	$a = 10;
	echo gettype($a) . "<br />";
	$a = strval($a);
	echo gettype($a) . "<br />";
	echo "<br />";
	
	$a = "Axar";
	echo gettype($a) . "<br />";	
	$a = strval($a);
	echo gettype($a) . "<br />";
	echo "<br />";
	
	$a = 10.17;
	echo gettype($a) . "<br />";	
	$a = strval($a);
	echo gettype($a) . "<br />";
	echo "<br />";
	
	$a = true;
	echo gettype($a) . "<br />";	
	$a = strval($a);
	echo gettype($a) . "<br />";
	echo "<br />";
?>