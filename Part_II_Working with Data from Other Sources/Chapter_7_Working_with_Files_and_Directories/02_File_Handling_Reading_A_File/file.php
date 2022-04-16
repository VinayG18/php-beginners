<?php

	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		if(!empty($name))
		{
			$handle = fopen('names.txt','a');
			fwrite($handle,$name."\n");
			fclose($handle);
			
			echo 'Current Names in File: ';
			
			$count = 1;
			$readin = file('names.txt');
			$readin_count = count($readin);
			foreach($readin as $fname)
			{
				echo trim($fname);
				if($count < $readin_count)
				{
					echo ", ";
				}
				$count++;
			}
		}
		else
		{
			echo 'Please type a name...';
		}
	}

?>

<form method="post" action="file.php">
	<input type="text" name="name" />
	<input type="submit" value="Submit" />
</form>