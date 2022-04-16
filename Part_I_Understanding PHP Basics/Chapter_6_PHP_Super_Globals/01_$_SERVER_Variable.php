<?php

	//$_SERVER: Variables set by the web server or otherwise directly related to the execution environment of the current script. Analogous to the old $HTTP_SERVER_VARS array.
	
	echo "DOCUMENT_ROOT: ". $_SERVER['DOCUMENT_ROOT'] . "<br /><br />";
	echo "GATEWAY_INTERFACE: ".$_SERVER['GATEWAY_INTERFACE'] . "<br /><br />";
	echo "HTTP_ACCEPT: ".$_SERVER['HTTP_ACCEPT'] . "<br /><br />";
	//echo $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br /><br />";
	echo "HTTP_ACCEPT_ENCODING: ".$_SERVER['HTTP_ACCEPT_ENCODING'] . "<br /><br />";
	echo "HTTP_ACCEPT_LANGUAGE: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br /><br />";
	echo "HTTP_CONNECTION: ".$_SERVER['HTTP_CONNECTION'] . "<br /><br />";
	echo "HTTP_HOST: ".$_SERVER['HTTP_HOST'] . "<br /><br />";
	echo "HTTP_REFERER: ".$_SERVER['HTTP_REFERER'] . "<br /><br />";
	echo "HTTP_USER_AGENT: ".$_SERVER['HTTP_USER_AGENT'] . "<br /><br />";
	//echo $_SERVER['PATH_TRANSLATED'] . "<br /><br />";
	echo "PHP_SELF: ".$_SERVER['PHP_SELF'] . "<br /><br />";
	echo "QUERY_STRING: ".$_SERVER['QUERY_STRING'] . "<br /><br />";
	echo "REMOTE_ADDR: ".$_SERVER['REMOTE_ADDR'] . "<br /><br />";
	echo "REMOTE_PORT: ".$_SERVER['REMOTE_PORT'] . "<br /><br />";
	echo "REQUEST_METHOD: ".$_SERVER['REQUEST_METHOD'] . "<br /><br />";
	echo "REQUEST_URI: ".$_SERVER['REQUEST_URI'] . "<br /><br />";
	echo "SCRIPT_FILENAME: ".$_SERVER['SCRIPT_FILENAME'] . "<br /><br />";
	echo "SCRIPT_NAME: ".$_SERVER['SCRIPT_NAME'] . "<br /><br />";
	echo "SERVER_ADMIN: ".$_SERVER['SERVER_ADMIN'] . "<br /><br />";
	echo "SERVER_NAME: ".$_SERVER['SERVER_NAME'] . "<br /><br />";
	echo "SERVER_PORT: ".$_SERVER['SERVER_PORT'] . "<br /><br />";
	echo "SERVER_PROTOCOL: ".$_SERVER['SERVER_PROTOCOL'] . "<br /><br />";
	echo "SERVER_SIGNATURE: ".$_SERVER['SERVER_SIGNATURE'] . "<br /><br />";
	echo "SERVER_SOFTWARE: ".$_SERVER['SERVER_SOFTWARE'] . "<br /><br />";
	

?>