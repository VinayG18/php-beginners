<?php
// define array
//asort() Sorts an associative array by value
$profile = array(
"fname" => "Susan",
"lname" => "Doe",
"sex" => "female",
"sector" => "Asset Management"
);
print_r($profile);
echo "<br />";
// sort by value
// output: ('sector' => 'Asset Management','lname' => 'Doe','fname' => 'Susan','sex' => 'female')
asort($profile);
print_r($profile);
echo "<br />";

//arsort() Reverse-sorts an associative array by key
arsort($profile);
print_r($profile);
?>