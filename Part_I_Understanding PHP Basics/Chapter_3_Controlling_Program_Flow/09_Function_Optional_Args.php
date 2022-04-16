<?PHP

	function sum2() 
	{
		$numargs = func_num_args();	
		echo "Number of arguments:"." ".$numargs."<br/><br/>";
		
    	$integers = func_get_args();
		echo "<pre>";
		print_r($integers);
		echo "</pre>";
	    return array_sum($integers);
	}
		
	$sum = sum2(10, 20, 30, 40, 50,60,70,80,'Vinay');
	
	echo $sum;
?>