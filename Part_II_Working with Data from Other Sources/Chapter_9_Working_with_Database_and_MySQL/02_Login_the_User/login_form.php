<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$password_hash = md5($password);
		
		if(!empty($username) && !empty($password))
		{
			$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password_hash'";
			if($query_run = mysqli_query($conn, $query))
			{
				$query_num_rows = mysqli_num_rows($conn, $query_run);
				if($query_num_rows==0)
				{
					echo 'Invalid Username/Password Combination.';
				}
				else
				{
					$user_id = mysqli_result($query_run, 0, 'id');
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php');
				}
			}
		}
		else
		{
			echo 'You must supply a username and password.';
		}
	}
?>

<form action="<?php echo $current_file; ?>" method="post">
	User Name: <input type="text" name="username" /> Password: <input type="password" name="password" />
	<input type="submit" value="LogIn" />
</form>