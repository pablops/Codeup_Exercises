<?php 

$theString = '';
 // Converts array into list n1, n2, ..., and n3
 function humanizedList($array) {
 	asort($array);
 	var_dump($array);
 	foreach ($array as $key => $name){
 		if($key < 5){
 			$theString = $theString . $name . ",";
 			// print_r($theString);
 		}
 		else{
 			$theString = $theString . " and " . $name . PHP_EOL;
 		}
 	}
 return $theString;
    
}
   // Your solution goes here!

 // List of famous peeps
 $physicistsString = ' Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
 $physicistsArray = [];
 $physicistsArray = explode(',', $physicistsString);
 // print_r($physicistsArray);

 // Humanize that list
 $famousFakePhysicists = humanizedList($physicistsArray);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>