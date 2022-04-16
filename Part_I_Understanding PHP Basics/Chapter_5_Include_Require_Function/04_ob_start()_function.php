<?php

	/*
		ob_start() - Turn on output buffering.
					  This function will turn output buffering on. while output buffering is active no output is sent from the script(other then headers), instead the output is stored in an internal buffer.
					  
		ob_get_contents() - The contents of this internal buffer may be copied into a string variable using ob_get_contents().
		
		ob_end_flush() - To output what is stored in the intrenal buffer, use ob_end_flush().
		
		ob_end_clean() - will silently discard the buffer content.
		
	*/
?>

<?php
	//Example - 1 user define callback function example. 
	function callback($buffer)
	{
		// replace all the apples with oranges
		
		
		return(str_replace("apples","oranges",$buffer));
	}
	
	ob_start("callback");
?>
<html>
	<body>
	<p>It's like comparing apples to oranges.</p>
	</body>
</html>
<?php
	ob_end_flush();
	//ob_end_clean();
?>