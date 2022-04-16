<?php

	class Circle
	{
		const pi = 3.141;
		
		public function area($redius)
		{
			return self::pi * ($redius * $redius);
		}
	}

	$Circle = new Circle;
	echo $Circle->area(100);

?>