<?php

/**
 * ksort() - sort associative arrays in ascending order, according to the key
 * The array_values() function returns an array containing all the values of an array
 */

$newArray = [];

$input = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

ksort($input);
print_r(array_values($input));

// the output is the values of ksort($input)
// Array ( [0] => 37 [1] => 43 [2] => 35 )