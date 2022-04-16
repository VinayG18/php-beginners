<?PHP

		function Displayaddress()
		{
			echo "<h1>Simple function in PHP.</h1><br/>";
			echo "Anushka Kohli,<br/> ";
			echo "1, Ayodhya Nagari,<br/>";
			echo "Adajan,Surat.<br/>";
			echo "Pin Code: 395009";
		}
		//Displayaddress();
	
		// Simple Parameters.
		function Display()
		{
			echo "Hi I am Anil Sharma.";
		}
		//Display();

		// Function with Parameters and Return Value.
		function Sum($a,$b)
		{
			return $a + $b ;
		}
		
		//$ans = Sum(10,20);
		
		//echo $ans;


		// Optional Parameters.
		function Sum1($a,$b,$c='')
		{
			return $a + $b + $c;
		}
		
		$ans = Sum1(20,10);
		
		echo $ans;
?>