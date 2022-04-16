<?php
	
	class Example
	{
		public function __construct($something)	// add double underscore(__)for constructor
		{
			$this->Saysomething($something);
		}
		
		public function Saysomething($something)
		{
			echo $something;
		}
	}

	$example = new Example('SOME TEXT');
?>