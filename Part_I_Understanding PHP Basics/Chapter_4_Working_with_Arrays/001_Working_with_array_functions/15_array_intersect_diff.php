<?php
// define arrays
$orange = array('red', 'yellow');
$green = array('yellow', 'blue');
// find common elements
// output: ('yellow')
$common = array_intersect($orange, $green);
print_r($common);
echo "<br />";
// find elements in first array but not in second
// output: ('red')
$unique = array_diff($orange, $green);
print_r($unique);


/*
You can also compare arrays with PHP’s equality (==) operator, in much the same way
as you would compare other variables.
*/
?>

