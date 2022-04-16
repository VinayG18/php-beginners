<h1>VIEW PAGE</h1>
<?php

	session_start();
	
	//if(isset($_SESSION['userinformation']) && isset($_SESSION['age']))
	//{
		echo 'Welcome: '.$_SESSION['userinformation'].' '.'<br />Your Age is: '.$_SESSION['age'];
	//}
	///else
	//{
	//	echo 'Please Log In........';
	//}

?>
<br /><br />

<form action="unset.php" method="post">
	
	<input type="submit" value="Go to Session Unset Page" />
	<br /><br />
	<a href="set.php">Go to Session set Page</a>
	
	
	
</form>