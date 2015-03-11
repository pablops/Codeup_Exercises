<?php 

for ($i=99; $i >= 0; $i--) { 

if($i != 0 && $i!= 1){
	echo "$i bottles of beer on the wall \n
$i bottles of beer\n
take one down and pass it around\n
$i bottles of beer on the wall\n";
}

elseif($i == 1){
	echo "1 bottle of beer on the wall \n
1 bottle of beer\n
take one down and pass it around\n
1 bottle of beer on the wall\n";
}
else{
	echo "No more bottles of beer on the wall\n
no more bottles of beer\n
go to the store and buy some more\n
99 bottles of beer on the wall\n";
}
}

?>