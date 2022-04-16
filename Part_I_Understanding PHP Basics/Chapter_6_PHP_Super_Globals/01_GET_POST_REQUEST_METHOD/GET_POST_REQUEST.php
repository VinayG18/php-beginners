<html>
	<head>
		<title>BIO_DATA</title>
	</head>
	<body>
	<form id = "form1" name = "form1" action = "Server.php" method = "POST">
	<table id = "tbl1" width = "400" align = "center" border = "1">
	<tr>
		<td colspan = "2" align = "center">
			<b>PERSONEL INFORMATION</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>First Name :</b>
		</td>
		<td>
			<input type="text" id="txtfname" name="txtfname" />
		</td>
	</tr>
	
	<tr>
		<td>
			<b>Last Name :</b>
		</td>
		<td>
			<input type="text" id="txtlname" name="txtlname" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Address :</b>
		</td>
		<td>
			<textarea rows="4" cols="20" name="address"></textarea>
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Gender :</b>
		</td>
		<td>
			<input type="text" id="txtgender" name="txtgender" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>City :</b>
		</td>
		<td>
			<input type="text" id="txtcity" name="txtcity" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Contact No. :</b>
		</td>
		<td>
			<input type="text" id="txtcno" name="txtcno" maxlength="10"/>
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Email :</b>
		</td>
		<td>
			<input type="text" id="txtemail" name="txtemail" />
		</td>
	</tr>
	
	<tr>
		<td colspan ="2" align = "center">
			<input type="submit" id="btnsubmit" name="btnsubmit" value = "Submit" /> &nbsp;&nbsp;
			<input type="reset" id="btnreset" name="btnreset" value = "Reset" />
		</td>
	</tr>	
	</table>
	<br /><br />
		<center>
		<a href = "Server.php?txtfname=Arti&txtlname=Patel&address=Pinjrat">Data Send Using GET METHOD</a> </center>
	</form>
	
	</body>
</html>