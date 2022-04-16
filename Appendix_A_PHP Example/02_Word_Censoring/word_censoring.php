<?php

	$find = array('virat','vinay','umesh');
	$replace = array('v***t','v***y','u***h');
	
	$user_input = '';
	if(isset($_POST['user_input']) && !empty($_POST['user_input']))
	{
		$user_input = $_POST['user_input'];
		$user_input_new = str_ireplace($find, $replace, $user_input);
		
		echo $user_input_new;
	}


?>

<hr />

<form method="post" action="word_censoring.php">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br /><br />
	<input type="submit" value="Submit" />
	
</form>