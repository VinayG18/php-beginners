<?PHP

	$a = 10;	//Global Variable
	$b = 20;	//Global Variable
	
	function Sum()
	{
		//global $a,$b;
		//echo "Sum". ($a + $b);
		echo $GLOBALS['a'] + $GLOBALS['b'];
	}
	
	function Sub()
	{
		global $a,$b;
		echo "Sub".($a-$b);
	}
	
	Sum();
	Sub();
	
	/*$no1 = 10;
	
	function Add()
	{		
		global $no1;
		echo  $GLOBALS['no1'];
	}
	
	Add();
	*/

?>