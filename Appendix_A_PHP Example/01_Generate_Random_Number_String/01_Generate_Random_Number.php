<html>
	<head>
		<title>Example 2</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" align="center" width="300">
			<?php
			
				$answer = "";
				if(isset($_REQUEST['btnsubmit']))
				{
					$eid = $_REQUEST['txteid'];
					$answer = rand(1,25);
				}
			?>
				<tr>
					<td align="center" colspan="2">
						<big>Generate Random Number </big>
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
						<code>Random Number</code>
					</td>
					<td>
						<input type="text" name="txtno3" value="<?php echo $answer; ?>" placeholder="Here Generate Your Random Password" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>