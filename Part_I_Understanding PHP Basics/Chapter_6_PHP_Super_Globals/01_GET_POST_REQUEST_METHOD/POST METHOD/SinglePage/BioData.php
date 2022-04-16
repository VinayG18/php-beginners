<html>
	<head>
		<title>BIO_DATA</title>
	</head>
	<body>
	<form id = "form1" name = "form1" action = "" method = "POST">
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
			<input type="radio" id="gender" name="gender" value="Male"/>Male
			<input type="radio" id="gender" name="gender" value="Female"/>Female
		</td>
	</tr>
	
	<tr>
		<td valign = "top">
			<b>City :</b>
		</td>
		<td>
			<select name="city">
				<option>Select City</option>
				<option>Bardoli</option>
				<option>Bharuch</option>
				<option>Mumbai</option>
				<option>Navsari</option>
				<option>Surat</option>
			</select>
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
	</form>
	
	<?php
	
		if(isset($_POST['btnsubmit']))
		{
			$fname = $_POST['txtfname'];
			$lname = $_POST['txtlname'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$city = $_POST['city'];
			$cno = $_POST['txtcno'];
			$email = $_POST['txtemail'];
			
			echo "<table id =tbl1 width =400 align =center border =1>";
			echo "<tr>";
				echo "<td><b>Your Name is :</b> $fname $lname </td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Your Address is :</b>  $address </td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Your are :</b>  $gender </td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Your City is :</b>  $city </td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Your Contact No. is :</b>  $cno </td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td><b>Your Email ID is :</b>  $email </td>";
			echo "</tr>";
		}
	?>
	</body>
</html>