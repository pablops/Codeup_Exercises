<?php

$a = 5;
$b = 10;
$c = 10;

 // Shorten the next 2 statements into an if/else
 if ($a < $b) {
     echo "$a is less than $b\n";
 } else {
     echo "$b is greater than $a\n";
 }

 // Shorten the next 2 statements into an if/else
 if ($b >= $c) {
     // output the appropriate result
     echo "$b is GREATER OR EQUAL TO $c\n";
 } else {
 	echo "$b is NOT GREATER OR EQUAL TO $c\n";
 }

 // if ($b <= $c) {
 //     // output the appropriate result
 //     echo "$b is ____ $c\n";
 // }

 // combine the next 4 conditionals into
 // one if/else/elseif block that checks in order for:
 // identical, equal, not identical, not equal
 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 } elseif ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c\n";
 } elseif ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c\n";
 } else {
     // output the appropriate result
     echo "$b is not identical to $c\n";
 }


?>