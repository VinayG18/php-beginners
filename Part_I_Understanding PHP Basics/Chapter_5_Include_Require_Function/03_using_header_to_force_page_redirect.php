
<h1> MY PAGE </h1>

<?php

	//$redirect_page = 'https://google.co.uk';
	$redirect_page = '01_expression_matching.php';
	$redirect = false;
	
	if ($redirect == true)
	{
		header('Location: ' .$redirect_page);
	}

?>