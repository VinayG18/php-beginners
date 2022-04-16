<html>
	<head>
		<title>Escaping Special Characters</title>		
	</head>
	<body>
		<table border="1">
			<tr>
				<td colspan="2" align="center"><b>Escaping Special Character</b></td>
			</tr>
			<tr>
				<td>Sequence</td>
				<td>What It Represents</td>
			</tr>
			<tr>
				<td>\n</td>
				<td>a line feed character</td>
			</tr>
			<tr>
				<td>\t</td>
				<td>a tab</td>
			</tr>
			<tr>
				<td>\r</td>
				<td>a carriage return</td>
			</tr>
			<tr>
				<td>\"</td>
				<td>a double quotation mark</td>
			</tr>
			<tr>
				<td>\'</td>
				<td>a single quotation mark</td>
			</tr>
		</table>
		<br />
		<?php
			echo "Beginner PHP Tutorial";
			echo "<br />";
			echo "Welcome\nto\nPHP";
			echo "<br />";
			echo "Welcome	\t\tto	\t\tPHP";
		
		//echo "<input type="text" name="txtname">";
		echo "<br />";
		echo "<input type=\"password\" name=\"txtname\">";
		echo "<br />";
		echo "<input type=\'password\' name=\'txtname\'>";
		
		?>
	
	</body>


</html>
