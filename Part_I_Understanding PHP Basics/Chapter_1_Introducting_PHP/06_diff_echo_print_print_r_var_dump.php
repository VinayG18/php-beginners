<?php

	$a = array("Virat", "ABD", "Maxxwell");
		
	echo "Using echo() function" . "<br />";
	//echo ($a);	/*Give Notice*/
	echo "<pre>";
	echo $a[0] . "<br />";
	echo $a[1] . "<br />";
	echo $a[2] . "<br />";
	echo "</pre>";
	
	/* ---------------------------------------*/
	
	echo "Using print() function" . "<br />";
	//print ($a);	/*Give Notice*/
	print "<pre>";
	print $a[0] . "<br />";
	print $a[1] . "<br />";
	print $a[2] . "<br />";
	print "</pre>";
	
	/* ---------------------------------------*/
	
	echo "Using print_r() function" . "<br />";
	print "<pre>";
	print_r($a);
	print "</pre>";
	
	/* ---------------------------------------*/
	
	echo "Using var_dump() function" . "<br />";
	print "<pre>";
	var_dump($a);
	print "</pre>";
?>