<?php
//implode() Joins array elements into a string
// define array
$arr = array('one', 'two', 'three', 'four');
// convert array to string
// output: 'one and two and three and four'
$str = implode(' and ', $arr);
print_r($str);
?>