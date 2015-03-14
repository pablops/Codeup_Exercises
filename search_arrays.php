 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



 function searchIt($n,$h){
 	if(is_numeric(array_search($n,$h)) == true){
 		return "FOUND!\n";
 	} else {
 		return "NO!\n";
 	}

 }

 function compareIt($arrayfirst,$arraysecond){
 $count = 0;
 	foreach($arrayfirst as $value){
 		if(is_numeric(array_search($value, $arraysecond))){
 			$count++;
 		}
 	}
 return $count;
 }

 echo searchIt('Tina', $names);
 echo " ==============================
 /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
 ==============================\n";
 echo compareIt($names, $compare);
 echo "\n ==============================
 /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
 ==============================\n";
 echo searchIt('BobLaw', $names);
 


