<?php

//Note: include(): Takes all the text in a specified file and copies it into the file that uses the include function.
//		require(): Syntax and uses is as same as include() but the difference is that, if the file is not found the remaining script is also not executed.

	//include 'header_inc.php';
	
	//include 'page_not_exists.php';
	
	require 'page_not_exists.php';
	
	//require 'header_inc.php';

	//$var = 'String';
	
	//echo $var;
	
	echo 'Var1 is: ' . $var1;


?>