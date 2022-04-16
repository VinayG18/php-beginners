<html>
	<head>
		<title>Example 2</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" align="center" width="300">
			<?php
			
				$answer = "";
				if(isset($_REQUEST['btnabs']))
				{
					$no1 = $_REQUEST['txtno1'];
					$answer = abs($no1);
				}
				
				if(isset($_REQUEST['btnceil']))
				{
					$no1 = $_REQUEST['txtno1'];
					$answer = ceil($no1);
				}
				
				if(isset($_REQUEST['btnfloor']))
				{
					$no1 = $_REQUEST['txtno1'];
					$answer = floor($no1);
				}
				
				if(isset($_REQUEST['btnround']))
				{
					$no1 = $_REQUEST['txtno1'];
					$answer = round($no1);
				}
				
				if(isset($_REQUEST['btnsqrt']))
				{
					$no1 = $_REQUEST['txtno1'];
					$answer = sqrt($no1);
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
					<td colspan="2" align="center">
						<input type="submit" name="btnabs" value="abs()" />				
						<input type="submit" name="btnceil" value="ceil()" />					
						<input type="submit" name="btnfloor" value="floor()" />
						<input type="submit" name="btnround" value="round()" />
						<input type="submit" name="btnsqrt" value="sqrt()" />
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