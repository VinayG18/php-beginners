<html>
	<head>
		<title>Example 1</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" align="center" width="300">
			<?php
			
				$answer = "";
				if(isset($_REQUEST['btnmin']))
				{
					$no1 = $_REQUEST['txtno1'];
					$no2 = $_REQUEST['txtno2'];
					$answer = min($no1,$no2);
				}
				
				if(isset($_REQUEST['btnmax']))
				{
					$no1 = $_REQUEST['txtno1'];
					$no2 = $_REQUEST['txtno2'];
					$answer = max($no1,$no2);
				}
				
				if(isset($_REQUEST['btnfmod']))
				{
					$no1 = $_REQUEST['txtno1'];
					$no2 = $_REQUEST['txtno2'];
					$answer = fmod($no1,$no2);
				}
				
				if(isset($_REQUEST['btnpow']))
				{
					$no1 = $_REQUEST['txtno1'];
					$no2 = $_REQUEST['txtno2'];
					$answer = pow($no1,$no2);
				}
			?>
				<tr>
					<td>
						<code>Enter No.1</code>
					</td>
					<td>
						<input type="text" name="txtno1" value="<?php $no1; ?>" />
					</td>
				</tr>
				
				<tr>
					<td>
						<code>Enter No.2</code>
					</td>
					<td>
						<input type="text" name="txtno2" value="<?php $no2; ?>" />
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnmin" value="min()" />				
						<input type="submit" name="btnmax" value="max()" />					
						<input type="submit" name="btnfmod" value="fmod()" />
						<input type="submit" name="btnpow" value="pow()" />
					</td>
				</tr>
				
				<tr>
					<td>
						<code>Answer</code>
					</td>
					<td>
						<input type="text" name="txtno3" value="<?php echo $answer; ?>" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>