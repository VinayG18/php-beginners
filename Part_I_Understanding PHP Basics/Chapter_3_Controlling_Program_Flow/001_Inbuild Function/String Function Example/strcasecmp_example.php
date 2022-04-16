<html>
	<head>
		<title>STRING EXAMPLE</title>
	</head>
	<body>
	<form action="" method="POST">
	<table width="600" align="center" border="1">
	<tr>
		<td>
			<code>Enter Old Password:</code>
		</td>
		<td>
			<input type="password" name="txtstr1" value="<?php $str1; ?>" width="200" />
		</td>
	</tr>	
	
	<tr>
		<td>
			<code>Enter New Password:</code>
		</td>
		<td>
			<input type="password" name="txtstr2" value="<?php $str2; ?>" width="200" />
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Re-type New Password:</code>
		</td>
		<td>
			<input type="password" name="txtstr3" value="<?php $str3; ?>" width="200" />
		</td>
	</tr>	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="submit" value="Submit" />
			<input type="reset" name="reset" value="Reset" />

		</td>
	</tr>
	</table>
	</form>
	</body>
</html>
	<?php
		$answer = "";
		if(isset($_POST['submit']))
		{
			$str1 = $_POST['txtstr1'];
			$str2 = $_POST['txtstr2'];
			$str3 = $_POST['txtstr3'];
			if (strcasecmp($str2,$str3) == 0)
			{
				echo "<center><font color=red>Your Password Successfully Change...</font></center>";
			}
			else
			{
				echo "<center><font color=red>You Enter wrong Passwod...</font></center>";
			}
		}
	?>