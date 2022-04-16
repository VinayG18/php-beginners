<?php

		$ar=array(
					"Dhaval Jadav"	=>	78,
					"Shanker Gamit"	=>	81,
					"Fenil Gandhi "	=>	60,
					"Hitesh Raval"	=>	70,
					"Diya Patel"	=>	72,
					"Saloni Pandya"	=>	65,
					"Nikita Patel"	=>	63,
					"Ganrsh Raval"	=>	70,
					"Suman Shrma"	=>	75);
		
		echo"<table align=center cellpadding=3 border=2 width=20%>";
		echo "<caption><h3 align=center>Student Information</h3></caption>";
		echo"<tr>";
		echo"<th>Student Name</th><th>ACPC CPI</th>";
		echo"</tr>";


		foreach($ar as $key => $value)
				
				{
				echo "<tr>";
				echo "<td>".$key." : </td><td>".$value."</td>";
				echo "</tr>";
				}
				
				echo "</table>";


?>
