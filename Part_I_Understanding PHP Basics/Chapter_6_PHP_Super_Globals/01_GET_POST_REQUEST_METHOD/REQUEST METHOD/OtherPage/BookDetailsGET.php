<html>
	<head>
		<title>BOOK DETAILS</title>
	</head>
	<body>
	<form id = "form1" name = "form1" action = "ServerGET.php" method = "GET">
	<table id = "tbl1" width = "400" align = "center" border = "1">
	<tr>
		<td colspan = "2" align = "center">
			<b>BOOK DETAILS</b>
		</td>
	</tr>
	<tr>
		<td>
			<b>Book Name :</b>
		</td>
		<td>
			<input type="text" id="txtbookname" name="txtbookname" />
		</td>
	</tr>
	
	<tr>
		<td>
			<b>Author Name :</b>
		</td>
		<td>
			<input type="text" id="txtauthor" name="txtauthor" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Edition</b>
		</td>
		<td>
			<input type="text" id="txtedition" name="txtedition" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Publication :</b>
		</td>
		<td>
			<input type="text" id="txtpublication" name="txtpublication" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>ISBN No. :</b>
		</td>
		<td>
			<input type="text" id="txtisbn" name="txtisbn" />
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>Price :</b>
		</td>
		<td>
			<input type="text" id="txtprice" name="txtprice" />
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
	</form>
	</body>
</html>