<html>
	<head>
		<title>Example 2</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" align="center" width="400">
			<?php
			
				$answer = "";
				if(isset($_REQUEST['btnsubmit']))
				{
					$answer = GenerateRandomString();
				}
			?>
				<tr>
					<td align="center" colspan="2">
						<big>Generate Random String </big>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<big>Forgot Password </big>
					</td>
				</tr>
				<tr>
					<td>
						<code>Enter email id :</code>
					</td>
					<td>
						<input type="text" name="txteid" value="<?php $eid; ?>" placeholder="Enter Your Email ID" />
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnsubmit" value="Submit" />				
					</td>
				</tr>
				
				<tr>
					<td>
						<code>Random String</code>
					</td>
					<td>
						<input type="text" name="txtno3" value="<?php echo $answer; ?>" placeholder="Here Generate Your Random Password" size="35" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php

	function GenerateRandomString($length=10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomstring = '';
		
		for($i = 0; $i < $length; $i++)
		{
			$randomstring .= $characters[ rand(0,strlen($characters) -1)];
		}
		return $randomstring;
	}
?>