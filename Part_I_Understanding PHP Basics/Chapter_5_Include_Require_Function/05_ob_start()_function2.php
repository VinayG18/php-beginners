<?php

	/*
		Example - 2 Creating an uneraseable output buffer in a way compatible with both PHP 5.3 and 5.4	
	*/
	
	if(version_compare(PHP_VERSION,'5.4.0','>='))
	{
		ob_start(null,0,PHP_OUTPUT_HANDLER_STDFLAGS ^ PHP_OUTPUT_HANDLER_REMOVABLE);
		echo "VERSION COMPARE....";
	}
	else
	{
		ob_start(null,0,false);
		echo "VERSION NOT COMPARE...........";
	}

?>