<html>
<head>
<title>My First Page </title>
</head>

<body>

<?php

		$Name = $_POST['uname'];
		$Address = $_POST['address'];
		$phno = $_POST['phno'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];

		echo "Your Name is : " . $Name;
		echo "<br>Your Address is : " . $Address;
		echo "<br>Your Phone no is : " . $phno;
		echo "<br>Your Email is : " . $email;
		echo "<br>Your Gender is : " . $gender;

?>
<br><br><br><br><br><br><br>

		<TABLE border="1">
		<TR>
				<TD>Name</TD>
				<TD>Address</TD>
				<TD>Phone No</TD>
				<TD>EMail</TD>
				<TD>Gender</TD>
		</TR>
		<TR>
				<TD><?php echo $Name ?>  </TD>
				<TD><?php echo $Address ?> </TD>
				<TD><?php echo $phno ?> </TD>
				<TD><?php echo $email ?> </TD>
				<TD><?php echo $gender ?> </TD>
		</TR>
		
	</TABLE>



</body>


</html>