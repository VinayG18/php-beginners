<h1>SESSSION UNSET PAGE</h1>
<?php

//unset()	-	function is used to free specific session variable.
//session_destroy()	-	function is used to completely destroy the session.

session_start();

unset($_SESSION['userinformation']);
//session_destroy();

?>

<form action="view.php" method="post">
	<br /><br />
	<input type="submit" value="Go to View Page" />
	
</form>