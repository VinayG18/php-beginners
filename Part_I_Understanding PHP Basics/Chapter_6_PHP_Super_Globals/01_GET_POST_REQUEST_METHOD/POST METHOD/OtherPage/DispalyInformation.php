<?php
	$surname = $_POST['txtsurname'];
	$name = $_POST['txtname'];
	$fathername = $_POST['txtfather'];
	$qualification = $_POST['txtqualification'];
	$Branch = $_POST['txtbranch'];
	$passmonth = $_POST['txtmonth'];
	$passyear = $_POST['txtyear'];
	$institute = $_POST['institute'];
	$category = $_POST['category'];
	$eid = $_POST['txteid'];
	$dd = $_POST['txtdate'];
	$mm = $_POST['txtmonth'];
	$yyyy = $_POST['txtyear'];
	$gender = $_POST['Gender'];
	
	$str = "";
	if(isset($_POST["Hobbies"]))
	{
		$str = $_POST["Hobbies"] . ",";
	}
	
	if(isset($_POST["Hobbies1"]))
	{
		$str = $str . $_POST["Hobbies1"] . ",";
	}
	
	if(isset($_POST["Hobbies2"]))
	{
		$str = $str . $_POST["Hobbies2"] . ",";
	}
	
	if(isset($_POST["Hobbies3"]))
	{
		$str = $str . $_POST["Hobbies3"] . ",";
	}
	
	
	echo "<br /><br /><br />";
	echo "<table width=400 border=0 align =center>";
	echo "<tr>";
		echo "<td  colspan=2 align=center> <b> View Information </b></td>";
	echo "</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Name is :</b></td>";
		echo"<td>$surname  $name  $fathername</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Qualification is:</b></td>";
		echo"<td>$qualification</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Branch is:</b></td>";
		echo"<td>$Branch</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Passing Year is :</b></td>";
		echo"<td>$passmonth, $passyear</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Institute & University is :</b></td>";
		echo"<td>$institute</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Category is :</b></td>";
		echo"<td>$category</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Email ID is :</b></td>";
		echo"<td>$eid</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Date of Birth is :</b></td>";
		echo"<td>$dd - $mm - $yyyy</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your are :</b></td>";
		echo"<td>$gender</td>";
	echo"</tr>";
	
	echo"<tr>";
		echo"<td><b>Your Hobbies is :</b></td>";
		echo"<td> $str </td>";
	echo"</tr>";
	echo "</table>";
	
?>