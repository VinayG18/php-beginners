<?php
	require 'core.php';
	require 'connect_db.php';
	
	if (!loggedin())
	{
		if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['password_again'])&& isset($_POST['firstname'])&& isset($_POST['lastname']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_again = $_POST['password_again'];
			$password_hash = md5($password);
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			
			if(!empty($username)&& !empty($password)&& !empty($password_again)&& !empty($firstname)&& !empty($lastname))
			{
				if($password!=$password_again)
				{
					echo 'Password do not match.';
				}
				else
				{
					$query = "SELECT username FROM users WHERE username = '$username'";
					$query_run = mysqli_query($conn, $query);
					
					if(mysqli_num_rows($conn, $query_run)==1)
					{
						echo 'The username '.$username.' already exists.';
					}
					else
					{
						$query = "INSERT INTO users VALUES('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."')";
						
						if($query_run = mysqli_query($conn, $query))
						{
							header('Location: register_success.php');
						}
						else
						{
							echo 'Sorry we couldn\'t register you at this time. Try again leter.';
						}
					}
				}
			}
			else
			{
				echo 'All fields are required.';
			}
		}

?>
<form action="register.php" method="post">
Username: <br /><input type="text" name="username" value="<?php if(isset($username)) { echo $username; } ?>"/><br /><br />
Password: <br /><input type="password" name="password" /><br /><br />
Password_Agian: <br /><input type="password" name="password_again" /><br /><br />
First Name: <br /><input type="text" name="firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>" /><br /><br />
Last Name: <br /><input type="text" name="lastname" value="<?php if(isset($lastname)) { echo $lastname; } ?>" /><br /><br />
<input type="submit" name="submit" value="Register" />
</form>
<?php
	}
	else if(loggedin())
	{
		echo 'You\'re already register and logged in.';
	}
?>