<?php
//explode() Splits a string into array elements
// define string
$str = 'tinker,tailor,soldier,spy';
// convert string to array
// output: ('tinker', 'tailor', 'soldier, 'spy')
$arr = explode(',', $str);
print_r($arr);
?>