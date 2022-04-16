<?php
	
	session_start();
	
	$_SESSION['userinformation'] = 'Anushka';
	$_SESSION['age'] = '21';

?>

<form action="view.php" method="post">
	<h1>SESSION SET PAGE</h1>
	<br />
	<input type="submit" value="Go to View Page" />
	
</form>