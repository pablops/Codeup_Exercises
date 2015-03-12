<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function setEmpty($a){
	if(empty($a)){
		return "empty";
	} else {
		return "SET";
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'


// TEST: If var $nothing is empty, display '$nothing is EMPTY'
echo "\$nothing is " . setEmpty($nothing) . PHP_EOL;


// TEST: If var $something is set, display '$something is SET'
$nothing = 12;
echo "\$nothing is " . setEmpty($nothing) . PHP_EOL;

// Serialize the array $array, and output the results

$array =  serialize($array);
echo $array;
var_dump($array);
$array = unserialize($array);
print_r($array);
var_dump($array);


// Unserialize the array $array, and output the results

