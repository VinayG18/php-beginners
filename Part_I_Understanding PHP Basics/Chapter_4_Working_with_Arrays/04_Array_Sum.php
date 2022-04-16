<?PHP

		$Array1 = array(10,20,30,40,50);
		$Array2 = array(50,40,30,20,10);
		
		function Sum($arr1,$arr2)
		{
			$ArrayAns = array();
			
			for($i = 0; $i < count($arr1);$i++)
			{
				$ArrayAns[] = $arr1[$i] + $arr2[$i];
			} 
			return $ArrayAns;
		}
	
		
		$TempArr = Sum($Array1,$Array2);
		
		print_r($TempArr);
				

?>