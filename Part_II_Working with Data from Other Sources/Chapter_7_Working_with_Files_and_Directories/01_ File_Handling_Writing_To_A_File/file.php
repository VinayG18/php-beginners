<?php

	$handle = fopen('name.txt','w');
	
	fwrite($handle,'Anushka'."\n");
	fwrite($handle,'Virat'."\n");
	fwrite($handle,'Vamika');
	
	fclose($handle);
?>