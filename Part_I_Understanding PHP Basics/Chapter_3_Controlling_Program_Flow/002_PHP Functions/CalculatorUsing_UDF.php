<html>
	<head>
		<title> Calculator using User Defined Function</title>
	</head>
	<body>
	<form name="form1" action="" method="POST">
	
	
	<?php
		$answer = 0;
		if(isset($_POST['txtno1']) || isset($_POST['txtno2']) || isset($_POST['txtno3']))
		{
				$firstNumber = $_POST['txtno1'];
				$secondNumber = $_POST['txtno2'];
				$thirdNumber = $_POST['txtno3'];
				
				function add($firstNumber, $secondNumber, $thirdNumber = "")
				{
				
					$answer = $firstNumber + $secondNumber + $thirdNumber;
					return $answer;
				}
				
				function minus($firstNumber, $secondNumber, $thirdNumber = "")
				{
				
					$answer = $firstNumber - $secondNumber - $thirdNumber;
					return $answer;
				}
				
				function mul($firstNumber, $secondNumber, $thirdNumber = "")
				{
				
					$answer = $firstNumber * $secondNumber * $thirdNumber;
					return $answer;
				}
				
				function div($firstNumber, $secondNumber, $thirdNumber = "")
				{
				
					$answer = $firstNumber / $secondNumber / $thirdNumber;
					return $answer;
				}
				
				function clear($firstNumber, $secondNumber, $thirdNumber = "")
				{
				
					$answer = "";
					$firstNumber = "";
					$secondNumber = "";
					$thirdNumber = "";
					//return $answer;
				}
				
		}
		if(isset($_POST['btnplus']))
		{
			$answer = add($firstNumber, $secondNumber, $thirdNumber);
			//echo $answer;
		}
		if(isset($_POST['btnminus']))
		{
			$answer = minus($firstNumber, $secondNumber, $thirdNumber);
			//echo $answer;
		}
		if(isset($_POST['btnmul']))
		{
			$answer = mul($firstNumber, $secondNumber, $thirdNumber);
			//echo $answer;
		}
		if(isset($_POST['btndiv']))
		{
			$answer = div($firstNumber, $secondNumber, $thirdNumber);
			//echo $answer;
		}
		if(isset($_POST['btnclear']))
		{
			$answer = clear($firstNumber, $secondNumber, $thirdNumber);
			//echo $answer;
		}

	?>


	<table border="1" width="300" align="center">
	<br /><br /><br />
	<tr>
		<td align = "center" colspan = "2">
			<code><big><b>Simple Calculator in PHP</b></big></code>
		</td>
	</tr>
	<tr>
		<td>
			<code>Enter No.1 :</code>
		</td>
		<td>
			<input type="text" name="txtno1" value = "<?php $firstNumber; ?>">
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Enter No.2 :</code>
		</td>
		<td>
			<input type="text" name="txtno2" value = "<?php $secondNumber; ?>">
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Enter No.3 :</code>
		</td>
		<td>
			<input type="text" name="txtno3" value = "<?php $thirdNumber; ?>">
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Operation :</code>
		</td>
		<td colspan = "2" align = "center">
			<input type="submit" name="btnplus" value="+" />
			<input type="submit" name="btnminus" value="-" />
			<input type="submit" name="btnmul" value="*" />
			<input type="submit" name="btndiv" value="/" />
			<input type="submit" name="btnclear" value="C" />
		</td>
	</tr>
	
	<tr>
		<td>
			<code>Answer :</code>
		</td>
		<td>
			<input type="text" name="txtanswer" value = "<?php echo $answer; ?>">
		</td>
	</tr>
	</table>
	</form>
	</body>
</html>