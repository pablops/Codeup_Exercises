<?php 

$x = 1;

do{
	if($x % 3 === 0 && $x % 5 === 0){
		echo "fizzbuzz" . PHP_EOL; 
	} 
	elseif($x % 3 === 0){
		echo "fizz" . PHP_EOL;
	}
	elseif($x % 5 === 0){
		echo "buzz" . PHP_EOL;
	}
	else{
		echo $x . PHP_EOL;
	}
$x++;
}while($x < 101);

?>