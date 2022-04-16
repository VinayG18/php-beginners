<h1>SET COOKIE PAGE</h1>

<?php

	setcookie('username','anushka',time()+10);
	
	//setcookie('username','anushka',time()-10);	//Unset Cookie

?>
<form action="view.php" method="post">
	<input type="submit" value="Go to View Page" />

</form>