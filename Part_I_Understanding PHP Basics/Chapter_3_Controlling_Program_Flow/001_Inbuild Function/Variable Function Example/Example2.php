<html>
	<head>
		<title>Example 2</title>
	</head>
	<body>
	<form action="" method="POST">
		<table border="1" width="500" align="center">
		<tr>
			<td>
				<b>Enter $a DataType :</b>
			</td>
			<td>
				<input type="text" name="txtdatatype" />
			</td>
		</tr>
		
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="btnsubmit" value="Submit" />
				<input type="reset" name="btnreset" value="Reset" />
			</td>
		</tr>		
		</table>
	</form>
	</body>
</html>
<?php
	
	if(isset($_POST['btnsubmit']))
	{
		$a = $_POST['txtdatatype'];
		if($a == "Integer" || $a == "integer")
		{
			settype($a,"Integer");
			echo 'Variable <font color = red>$a </font> Data Type is : ' . gettype($a);
		}
		
		else if($a == "Float" || $a == "float")
		{
			settype($a,"Float");
			echo 'Variable <font color = red>$a </font> Data Type is : ' . gettype($a);
		}
		
		else if($a == "String" || $a == "string")
		{
			settype($a,"String");
			echo 'Variable <font color = red>$a </font> Data Type is : ' . gettype($a);
		}
		
		else if($a == "Boolean" || $a == "boolean")
		{
			settype($a,"Boolean");
			echo 'Variable <font color = red>$a </font> Data Type is : ' . gettype($a);
		}
		else
		{
			echo "Please Enter Correct Data  Type........";
		}
	}


?>