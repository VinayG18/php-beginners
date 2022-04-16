<?php
	function hit_counter()
	{
		$filename = 'counter.txt';
		
		$handle = fopen($filename,'r');
		$current = fread($handle,filesize($filename));
		fclose($handle);
		
		$current_inc = $current + 1;
		
		$handle = fopen($filename,'w');
		fwrite($handle,$current_inc);
		fclose($handle);
	}

?>