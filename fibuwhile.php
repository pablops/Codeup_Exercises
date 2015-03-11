<?php 

$r = 1;

while($r < 101){
	if($r % 3 === 0 && $r % 5 === 0){
		echo "fizzbuzz" . PHP_EOL;
	}
	elseif($r % 3 === 0){
		echo "fizz" . PHP_EOL;
	}
	elseif($r % 5 === 0){
		echo "buzz" . PHP_EOL;
	}
	else{
		echo $r . PHP_EOL;
	}
$r = $r + 1;
}


?>