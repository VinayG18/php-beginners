<?php
if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$extension = strtolower(substr($name,strpos($name,'.') + 1));
	$type = $_FILES['file']['type'];
	
	$size = $_FILES['file']['size'];
	//$max_size = 2097152;
	$max_size = 100000;
	
	$tmp_name = $_FILES['file']['tmp_name'];
	
	if(isset($name))
	{
		if(!empty($name))
		{
			if(($extension=='jpg'||$extension=='jpeg') && $type=='image/jpeg' && $size<=$max_size)
			{
				$location = 'uploads/';
				
				if(move_uploaded_file($tmp_name, $location.$name))
				{
					echo 'Uploaded..!';
				}
				else
				{
					echo 'There was an Error';
				}
			}
			else
			{
				echo 'File must be jpg/jpeg and must be 2mb or less.';
			}
		}
		else
		{
			echo 'Please choose a file';
		}
	}
}
?>

<form method="post" action="upload.php" enctype="multipart/form-data">
	<input type="file" name="file" /><br /><br />
	<input type="submit" value="Submit" name="submit" />
</form>