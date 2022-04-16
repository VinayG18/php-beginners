<html>
	<head>
		<title>Calculator</title>
	</head>
	<body>
	<form id = "form1" name = "form1" action = "" method = "POST">
		<table border = "1" width = "450" align = "center">
		<?php
			
			$answer = 0;
			if(isset($_POST['txtno1']) || isset($_POST['txtno2']))
			{
				$firstNumber = $_POST['txtno1'];
				$secondNumber = $_POST['txtno2'];
			}
			if(isset($_POST['btnplus']))
			{
				$answer = $firstNumber + $secondNumber;
			}
			
			if(isset($_POST['btnminus']))
			{
				$answer = $firstNumber - $secondNumber;
			}
			
			if(isset($_POST['btnmul']))
			{
				$answer = $firstNumber * $secondNumber;
			}
			
			if(isset($_POST['btndiv']))
			{
				$answer = $firstNumber / $secondNumber;
			}
			
			if(isset($_POST['btnmod']))
			{
				$answer = $firstNumber % $secondNumber;
			}
			
			if(isset($_POST['btnclear']))
			{
				$answer = " ";
				$firstNumber = " ";
				$secondNumber = " ";
			}
		?>
		
		<tr>
			<td align = "center" colspan = "2">
				<b>Simple Calculator in PHP</b>
			</td>
		</tr>
		<tr>
			<td align = "right">
				<b>Enter No.1 :</b>
			</td>
			<td>
				<input type = "text" id = "txtno1" name = "txtno1" value = "<?php $firstNumber; ?>">
			</td>
		</tr>
		<tr>
			<td align = "right">
				<b>Enter No.2 :</b>
			</td>
			<td>
				<input type = "text" id = "txtno2" name = "txtno2" value = "<?php $secondNumber; ?>">
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">&nbsp;&nbsp;
			<input type = "submit" id = "btnplus" name = "btnplus" value = "+">&nbsp;&nbsp;
			<input type = "submit" id = "btnminus" name = "btnminus" value = "-">&nbsp;&nbsp;
			<input type = "submit" id = "btnmul" name = "btnmul" value = "*">&nbsp;&nbsp;
			<input type = "submit" id = "btndiv" name = "btndiv" value = "/">&nbsp;&nbsp;
			<input type = "submit" id = "btnmod" name = "btnmod" value = "%">&nbsp;&nbsp;
			<input type = "submit" id = "btnclear" name = "btnclear" value = "C">&nbsp;&nbsp;
			</td>
		</tr>
		<tr>
			<td align = "right">
				<b>Answer :</b>
			</td>
			<td>
				<input type = "text" id = "answer" name = "answer" value = "<?php echo $answer; ?>">
			</td>
		</tr>
		</table>
	</form>
	</body>
</html>