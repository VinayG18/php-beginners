<html>
	<head>
		<title>Example 3</title>
	</head>
	<body>
	<form action="" method="POST">
		<table border="1" width="500" align="center">
		<tr>
			<td>
				<b>Enter Any Value :</b>
			</td>
			<td>
				<input type="text" name="txtisset" value="<?php $a; ?>" />
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
		$a = $_POST['txtisset'];;
		if($a == "")
		{
			echo "Your Text Box Value is Not Set..." . "<br />";			
		}
		else
		{
			echo "Your Text Box Value is Set..." . "<br />";
			echo "Your Text Box Value is : " . $a . "<br />";
		}
	}	
?>