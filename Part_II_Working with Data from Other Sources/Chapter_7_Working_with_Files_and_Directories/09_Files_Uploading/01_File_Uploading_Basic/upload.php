<?php
	
	$name = $_FILES['file']['name'];
	//$size = $_FILES['file']['size'].'<br />';
	//$type = $_FILES['file']['type'].'<br />';	
	$tmp_name =$_FILES['file']['tmp_name'];
	
	
	if(isset($name))
	{
		if(!empty($name))
		{
			$location = 'uploads/';
			if(move_uploaded_file($tmp_name, $location.$name))
			{
				echo 'Uploaded...!!';
			}
			else
			{
				echo 'There was an error..';
			}
		}
		else
		{
			echo 'Please choose a file.';
		}
	}

?>

<form method="post" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="file" /><br /><br />
	<input type="submit" value="Submit" />
</form>