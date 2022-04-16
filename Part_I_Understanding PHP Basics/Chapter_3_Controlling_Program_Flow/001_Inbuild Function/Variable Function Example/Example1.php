<html>
	<head>
		<title>Example 1</title>
	</head>
	<body>
	<form action="" method="POST">
		<table border="1" width="500" align="center">
		<tr>
			<td>
				<b>Enter Integer Value :</b>
			</td>
			<td>
				<input type="text" name="txtinteger" />
			</td>
		</tr>
		
		<tr>
			<td>
				<b>Enter Float Value :</b>
			</td>
			<td>
				<input type="text" name="txtfloat" />
			</td>
		</tr>
		
		<tr>
			<td>
				<b>Enter String :</b>
			</td>
			<td>
				<input type="text" name="txtstring" />
			</td>
		</tr>
		
		<tr>
			<td valign="top">
				<b>Enter Boolean Value :</b>
			</td>
			<td>
				<input type="text" name="txtboolean" /><br />
				<font color="gray">Enter Only True or False</font>
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
		$integer = $_POST['txtinteger'];
		$float = $_POST['txtfloat'];
		$string = $_POST['txtstring'];
		$boolean = $_POST['txtboolean'];
		
		settype($integer,"integer");
		settype($float,"float");
		settype($string,"string");
		settype($boolean,"boolean");
		
		echo "$integer is a : " . gettype($integer) . "<br />";
		echo "$float is a : " . gettype($float) . "<br />";
		echo "$string is a : " . gettype($string) . "<br />";
		echo "$boolean is a : " . gettype($boolean) . "<br />";
	}


?>