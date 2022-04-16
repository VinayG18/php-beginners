<?php
// define array
//shuffle() Randomly rearranges the sequence of elements in an array
//array_reverse() Reverses the sequence of elements in an array


$rainbow = array('violet', 'indigo', 'blue', 'green', 'yellow','orange', 'red');
print_r($rainbow);
echo "<br />";
// randomize array
shuffle($rainbow);
print_r($rainbow);
echo "<br />";
// reverse array
// output: ('red', 'orange', 'yellow', 'green', 'blue','indigo', 'violet')
$arr = array_reverse($rainbow);
print_r($arr);
?>