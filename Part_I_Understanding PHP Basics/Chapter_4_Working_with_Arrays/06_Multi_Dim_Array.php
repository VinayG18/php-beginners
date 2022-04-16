<?php
$Student = array(
					'Standard'=>array(									
										'10th'=> array(
													'Vasu Rane'=>array(	'Subjetc 1'=>80,
																		'Subjetc 2'=>50,
																		'Subjetc 3'=>70,
																		'Subjetc 4'=>10,																																																						
																		),
													'Nilesh Patel'=>array(
																		'Subjetc 1'=>80,
																		'Subjetc 2'=>50,
																		'Subjetc 3'=>70,
																		'Subjetc 4'=>10,																																																						
																		),
													'Jitesh Parmar'=>array(
																		'Subjetc 1'=>80,
																		'Subjetc 2'=>50,
																		'Subjetc 3'=>70,
																		'Subjetc 4'=>10,																		
																		),
													),
										'12th'=> array(
													'Swapnil tandel'=>array(
																		'Maths'	=>50,
																		'Sciece'=>25,
																		'P.T'	=>40,
																		'Gujarati'=>10,																																																																			
																		),
													'Umesh Gamit'=>array(
																		'Maths'	=>50,
																		'Sciece'=>10,
																		'P.T'	=>40,
																		'Gujarati'=>10,															
																		),										
													'Dhaval Akbari'=>array(
																		'Maths'	=>50,
																		'Sciece'=>80,
																		'P.T'	=>40,
																		'Gujarati'=>10,															
																		),													
													'Amit Tailor'=>array(
																		'Maths'	=>50,
																		'Sciece'=>05,
																		'P.T'	=>40,
																		'Gujarati'=>10,															
																		),																										
													),						
										),
					
				);


foreach($Student as $key => $value)
{
	//echo $key;
	foreach($value as $v1 => $val)
	{
		//echo $v1.$val;
			foreach($val as $k1 => $va2)
			{
				echo($k1."==>".$v1." Result"."<br/>");
				var_dump($va2);
			}

	}
}
/*
echo"<br />FIRST ARRAY ";
	echo"<pre>";
		print_r($Student);
	echo"</pre>";

echo"<br />SECOND ARRAY ";
 	echo"<pre>";
		print_r($StudentAnother);
	echo"</pre>";

 
 echo"<br />MEARGE ARRAY "; 
	echo"<pre>";
		print_r($Student.$StudentAnother));
	echo"</pre>";
*/

//$value_1 = 132;
//$value_2 = "200";

//echo $value_1+$value_2;

?>