<?PHP

	function Increment()		
	{
		static $a =10;		
		$a = $a + 1; // $a++
		
		echo $a."<br/>";
	}
	
	Increment();
	Increment();
	Increment();
	
	
	function Simple()
		{
			 $a=10;			
			 $a++;			
			echo "Simple :".$a."<br>";

		}
		
		function staticvar()
		{
			static $a=10;			
			 $a++;			
			echo "Statick :".$a."<br>";

		}
		
		Simple();
		Simple();
		Simple();
		
		staticvar();
		staticvar();
		staticvar();





?>