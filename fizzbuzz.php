<?php 

for ($i = 0; $i < 101; $i++) {if($i % 3 == 0 && $i % 5 == 0) {
		echo "fizzbuzz\n";
	} if($i % 3 == 0){
		echo "fizz\n";
	} if($i % 5 == 0){
		echo "buzz\n";
	} else{
		echo "$i\n";}
}