<?php

$a = 300;
$b = 121;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)){
    	return $a + $b . PHP_EOL;
	} else {
		errorMessage($a,$b);
	}	
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b . PHP_EOL;
    } else {
    	errorMessage($a,$b);
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b . PHP_EOL;
    } else {
    	errorMessage($a,$b);
    }
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if($a !== 0){
    		return $a / $b;
		}
		else{
			return false;
		}
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		errorMessage($a,$b);
	}
}

function errorMessage($a){
	echo "input error {$a}, {$b}" . PHP_EOL;
}

add(1, 7);
subtract(9,"constrictor");
multiply(98,321);
divide(0,54);
modulus(900, 65);

echo "=================
/\/\/\/\/\/\/\/\/
=================" . PHP_EOL;

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);


?>