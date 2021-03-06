<?php

/*NOTE
The array_unshift(), array_shift(), array_push(), and array_pop()
functions should be used only with numerically indexed arrays and not with associative
arrays. Each of these functions automatically re-indexes the array to account for the
value(s) added or removed during its operation.*/



// define array
$movies = array('The Lion King', 'Cars', 'A Bug\'s Life');
// remove element from beginning of array
array_shift($movies);
// remove element from end of array
array_pop($movies);
// add element to end of array
array_push($movies, 'Ratatouille');
// add element to beginning of array
array_unshift($movies, 'The Incredibles');
// print array
// output: ('The Incredibles', 'Cars', 'Ratatouille')
print_r($movies);
?>