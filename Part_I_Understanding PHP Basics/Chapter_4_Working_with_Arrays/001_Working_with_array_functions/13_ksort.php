<?php
// define array
//ksort() Sorts an associative array by key
$profile = array(
"fname" => "Susan",
"lname" => "Doe",
"sex" => "female",
"sector" => "Asset Management"
);
print_r($profile);
echo "<br />";
// sort by key
// output: ('fname' => 'Susan','lname' => 'Doe','sector' => 'Asset Management','sex' => 'female')
ksort($profile);
print_r($profile);
echo "<br />";

//krsort() Reverse-sorts an associative array by value
krsort($profile);
print_r($profile);
?>