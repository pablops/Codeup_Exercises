<?php

$a = 300;
$b = 121;

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo $a % $b . PHP_EOL;
}

add(1, 7);
subtract(9,2);
multiply(98,321);
divide(98,54);
modulus(900, 65);

echo "=================
=================" . PHP_EOL;

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);


?>