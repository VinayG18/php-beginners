<h1>VIEW PAGE</h1>
<br /><br />
<?php

echo $_COOKIE['username'];

?>
<br /><br />
<form action="set.php" method="post">
	<input type="submit" value="Go to Set Cookie Page" />

</form>