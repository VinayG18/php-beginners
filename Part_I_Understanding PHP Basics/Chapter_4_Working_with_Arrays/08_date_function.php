<?php

	//Date Function
	echo date('d-m-y')."<br />";
	echo date('D:M:Y')."<br />";
	echo date('l/F/y')."<br />";
	
	//Time Function
	echo date('h-i-s a')."<br />";
	echo date('H-i-s A')."<br />";

	//Unix Timestamp
	$datetime =  mktime(date("h")+5,date("i")+30,date("s"),date("m"),date("d"),date("y"));
	echo date('d-m-y H:i:s A',$datetime);
	
	
?>