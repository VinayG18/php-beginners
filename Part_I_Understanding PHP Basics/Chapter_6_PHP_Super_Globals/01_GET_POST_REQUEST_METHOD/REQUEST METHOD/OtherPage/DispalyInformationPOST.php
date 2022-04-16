<?php
	$surname = $_REQUEST['txtsurname'];
	$name = $_REQUEST['txtname'];
	$fathername = $_REQUEST['txtfather'];
	$qualification = $_REQUEST['txtqualification'];
	$Branch = $_REQUEST['txtbranch'];
	$passmonth = $_REQUEST['txtmonth'];
	$passyear = $_REQUEST['txtyear'];
	$institute = $_REQUEST['institute'];
	$category = $_REQUEST['category'];
	$eid = $_REQUEST['txteid'];
	$dd = $_REQUEST['txtdate'];
	$mm = $_REQUEST['txtmonth'];
	$yyyy = $_REQUEST['txtyear'];
	$gender = $_REQUEST['Gender'];

	$str = "";
	if(isset($_REQUEST["Hobbies"]))
	{
		$str = $_REQUEST["Hobbies"] . ",";
	}
	
	if(isset($_REQUEST["Hobbies1"]))
	{
		$str = $str . $_REQUEST["Hobbies1"] . ",";
	}
	
	if(isset($_REQUEST["Hobbies2"]))
	{
		$str = $str . $_REQUEST["Hobbies2"] . ",";
	}
	
	if(isset($_REQUEST["Hobbies3"]))
	{
		$str = $str . $_REQUEST["Hobbies3"] . ",";
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
		echo"<td>";
			echo $str;
		echo"</td>";
	echo"</tr>";
	echo "</table>";
	
?>