<?php 
	$things = array('Sgt. Pepper', 
		"11", 
		null, 
		array(1,2,3), 
		3.14, 
		"12 + 7", 
		false, 
		(string) 11);
	
	foreach ($things as $thing) {
		if(is_array($thing)){
			echo "array\n";
		}
		if(is_bool($thing)){
			echo "boolean\n";
		}
		if(is_float($thing)){
			echo "float\n";
		}
		if(is_bool($integer)){
			echo "integer\n";
		}
		if(is_null($thing)){
			echo "null\n";
		}
		if(is_string($thing)){
			echo "string\n";
		}
	}	

	foreach ($things as $key => $thing) {
		if(is_scalar($thing)){
			echo "$key scalar\n";
		}
	}	


 ?>