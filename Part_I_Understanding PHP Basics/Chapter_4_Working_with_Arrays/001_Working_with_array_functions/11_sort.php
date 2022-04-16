<?php
// define array
$data = array(15,81,14,74,2);
print_r($data);
echo "<br />";
// sort and print array
// output: (2,14,15,74,81)
sort($data);
print_r($data);
echo "<br />";

//rsort() Reverse-sorts an array
rsort($data);
print_r($data);
?>