<?php

	$date = 28;
	$month = 2;
	$year = 2015;
	
	echo "Today Date is: ".$date."<br />";
	echo "Month is: ".$month."<br />";
	echo "Year is: ".$year."<br />";
	
	
	if($date>=31)
	{
		$date = 1;
		$month++;
	}
	else
	{
		$date++;
	}
	
	
	
	if($month>=12)
	{
		$month = 1;
		$year++;
	}
	
	echo "Tommorow Date is: ".$date."<br />";
	echo "Month is: ".$month."<br />";
	echo "Year is: ".$year."<br />";
?>
