<html>
	<head>
		<title>About My Self</title>
	</head>
	<body>
	<form id="form1" name="form1" action="DispalyInformation.php" method="POST">
	<table width="650" border="0" align = "center">
	<br /><br /><br />
	<tr>
		<td colspan="4">
			<big><i><center>About My Self</center></i></big>
		</td>
	</tr>
	<tr>
		<td>
			<code><b>Name :</b></code>
		</td>
		<td>
			<input type="text" name="txtsurname" placeholder="Enter Your Surname"/>
		</td>
		<td>
			<input type="text" name="txtname" placeholder="Enter Your Name"/>
		</td>
		<td>
			<input type="text" name="txtfather" placeholder="Enter Your Father's Name"/>
		</td>
	</tr>
	
	<tr>
		<td>
			<code><b>Qualification :</b></code>
		</td>
		<td>
			<input type="text" name="txtqualification" placeholder="Enter Your Qualification"/>
		</td>
		<td align="right">
			<code><b>Branch :</b></code>
		</td>
		<td>
			<input type="text" name="txtbranch" placeholder="Enter Your Branch"/>
		</td>
	</tr>
	
	<tr>
		<td>
			<code><b>Passing Year :</b></code>
		</td>
		<td>
			<input type="text" name="txtmonth" placeholder="Enter Month"/>
		</td>
		<td>
			<input type="text" name="txtyear" placeholder="Enter Year"/>
		</td>
		<td>&nbsp;</td>
	</tr>
	
	<tr>
		<td>
			<code><b>Institute and University :</b></code>
		</td>
		<td colspan="3">
			<select name="institute">
				<option>Select Institute</option>
				<option>Government of Engineering College, Modasa</option>
				<option>L.D.Engineering College</option>
				<option>Vishwakarma Govt. Engg. College</option>
				<option>Bhagwan Mahavir College Institute of Technology,Surat</option>
				<option>Chhotubhai Gopalbhai Patel Institute of Technology</option>
				<option>Faculty of Engineering, Technology & Research</option>
				<option>Laxmi Institute of Technology</option>				
				<option>Sarvjanik College of Engineering & Technology,Surat</option>
				<option>Vadodara Institute of Engineering</option>
				<option>Institute of Technology, Nirma University</option>
			</select>				
		</td>
	</tr>
	<tr>
		<td>
			<code><b>Category :</b></code>
		</td>
		<td colspan="3">
			<input type="radio" name="category" value="Open" checked="checked">Open
			<input type="radio" name="category" value="SC">SC
			<input type="radio" name="category" value="ST">ST
			<input type="radio" name="category" value="SEBC">SEBC
			<input type="radio" name="category" value="Ex.Serviceman">Ex.Serviceman
		</td>
	</tr>
	<tr>
		<td>
			<code><b>Email ID :</b></code>
		</td>
		<td colspan="3">
			<input type="text" name="txteid" placeholder="Enter Your Email ID"/>
		</td>
	</tr>
	<tr>
		<td>
			<code><b>Date of Birth :</b></code>
		</td>
		<td colspan="3">
			<input type="text" name="txtdate" placeholder="DD" maxlength="2" size="1"/>
			<input type="text" name="txtmonth" placeholder="MM" maxlength="2" size="1"/>
			<input type="text" name="txtyear" placeholder="YYYY" maxlength="4" size="1"/>
		</td>
	</tr>
	
		<tr>
		<td>
			<code><b>Gender :</b></code>
		</td>
		<td colspan="3">
			<input type="radio" name="Gender" value="Male" checked="checked">Male
			<input type="radio" name="Gender" value="Female">Female
		</td>
	</tr>
	
	<tr>
		<td>
			<code><b>Hobbies :</b></code>
		</td>
		<td colspan="3">
			<input type="checkbox" name="Hobbies" value="Cricket">Cricket
			<input type="checkbox" name="Hobbies1" value="Music">Music
			<input type="checkbox" name="Hobbies2" value="Reading">Reading
			<input type="checkbox" name="Hobbies3" value="Travelling">Travelling
		</td>
	</tr>
	<tr>
		<td colspan = "5"><center>
			<input type="submit" name="submit" value="Submit">
			<input type="reset" name="reset" value="Reset"></center>
		</td>
	</tr>
	</table>
	</form>
	</body>
</html>