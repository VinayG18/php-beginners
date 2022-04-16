<?php

	//The Following Example Shows How to Convert an array into JSON with PHP. 
	$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' =>5 );
	echo json_encode($arr);

	//The Following Example Shows how the PHP objects can be converted into JSON.
	class Emp{
		public $name = "";
		public $hobbies = "";
		public $birthdate = "";
	}
	$e = new Emp();
	$e->name = "Sachin";
	$e->hobbies = "Sports";
	$e->birthdate = date('m/d/y h:i:s a',"8/5/1974 12:20:03 p");
	$e->birthdate = date('m/d/y h:i:s a', strtotime("8/5/1974 12:20:03"));
	echo json_encode($e);
?>