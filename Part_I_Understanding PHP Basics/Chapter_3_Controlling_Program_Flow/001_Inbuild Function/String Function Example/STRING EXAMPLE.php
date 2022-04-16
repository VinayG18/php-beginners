<html>
	<head>
		<title>STRING EXAMPLE</title>
	</head>
	<body>
	<form action="" method="POST">
	<table width="600" align="center" border="1">
	<?php
		$answer = "";
		if(isset($_POST['replace']))
		{
			$str1 = $_POST['txtstr1'];
			$str2 = $_POST['txtstr2'];
			$str3 = $_POST['txtstr3'];
			$answer = str_replace($str2,$str3,$str1); 
		}
		
		if(isset($_POST['position']))
		{
			$str1 = $_POST['txtstr1'];
			$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = strpos($str1,$str2); 
		}
		
		if(isset($_POST['substring']))
		{
			if(isset($_POST['txtstr1']) && isset($_POST['txtstr2']) && ($_POST['txtstr3']))
			{
				$str1 = $_POST['txtstr1'];
				$str2 = $_POST['txtstr2'];
				$str3 = $_POST['txtstr3'];
				$answer = substr($str1,$str2,$str3);
			}
			else
			{
				$str1 = $_POST['txtstr1'];
				$str2 = $_POST['txtstr2'];
				//$str3 = $_POST['txtstr3'];
				$answer = substr($str1,$str2);
			}
		}
		
		if(isset($_POST['reverse']))
		{
			$str1 = $_POST['txtstr1'];
			//$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = strrev($str1); 
		}
		
		if(isset($_POST['ascii']))
		{
			$str1 = $_POST['txtstr1'];
			//$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = chr($str1); 
		}
		
		if(isset($_POST['length']))
		{
			$str1 = $_POST['txtstr1'];
			//$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = strlen($str1); 
		}
		
		if(isset($_POST['uppercase']))
		{
			$str1 = $_POST['txtstr1'];
			//$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = strtoupper($str1); 
		}
		
		if(isset($_POST['lowercase']))
		{
			$str1 = $_POST['txtstr1'];
			//$str2 = $_POST['txtstr2'];
			//$str3 = $_POST['txtstr3'];
			$answer = strtolower($str1);  
		}
	?>
	<tr>
		<td>
			<code>Enter First String:</code>
		</td>
		<td>
			<input type="text" name="txtstr1" value="<?php $str1; ?>" width="200" />
		</td>
		<td>&nbsp;
			
		</td>
	</tr>	
	
	<tr>
		<td>
			<code>Enter Second String:</code>
		</td>
		<td>
			<input type="text" name="txtstr2" value="<?php $str2; ?>" width="200" />
		</td>
		<td>&nbsp;
			
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Enter Third String:</code>
		</td>
		<td>
			<input type="text" name="txtstr3" value="<?php $str3; ?>" width="200" />
		</td>
		<td>&nbsp;
			
		</td>
	</tr>	
	<tr>
		<td colspan="3" align="center">
			<input type="submit" name="replace" value="Replace" />
			<input type="submit" name="position" value="Position" />
			<input type="submit" name="substring" value="SubString" />
			<input type="submit" name="reverse" value="Reverse" /><br />
			<input type="submit" name="ascii" value="Find Character" />
			<input type="submit" name="length" value="Length" />
			<input type="submit" name="uppercase" value="UpperCase" />
			<input type="submit" name="lowercase" value="LowerCase" />
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Answer :</code>
		</td>
		<td>
			<input type="text" name="txtstr4" value="<?php echo $answer; ?>" width="200" />
		</td>
		<td>&nbsp;
			
		</td>
	</tr>
	</table>
	</form>
	</body>
</html>