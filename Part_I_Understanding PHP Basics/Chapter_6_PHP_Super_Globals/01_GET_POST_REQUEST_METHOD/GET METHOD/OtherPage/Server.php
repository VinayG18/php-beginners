<?php
	
		if(isset($_GET['btnsubmit']))
		{
			
			$bookname = $_GET['txtbookname'];
			$authorname = $_GET['txtauthor'];
			$Edition = $_GET['txtedition'];
			$Publication = $_GET['txtpublication'];
			$ISBN = $_GET['txtisbn'];
			$Price = $_GET['txtprice'];
			
			echo "<table id = tbl1 width = 400 align = center border = 1>";
			echo "<tr>";
					echo "<td colspan =2 align=center> BOOK DETAILS </td> ";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>Book Name :</b></td>";
					echo "<td> $bookname </td>";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>Author Name :</b></td>";
					echo "<td> $authorname </td>";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>Edition :</b></td>";
					echo "<td> $Edition </td>";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>Publication :</b></td>";
					echo "<td> $Publication </td>";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>ISBN No. :</b></td>";
					echo "<td> $ISBN </td>";
			echo "</tr>";
			echo "<tr>";
					echo "<td><b>Price :</b></td>";
					echo "<td> Rs.$Price </td>";
			echo "</tr>";
			echo "</table>";
		}
?>