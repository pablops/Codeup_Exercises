
<?php 
// Prompt user for a starting number and ending number, then display 
// all the numbers from the starting to ending using a for loop.

$starter;
$ender;
$incrementer;

fwrite(STDOUT, 'input a starting number: ');
$starter = trim(fgets(STDIN));
fwrite(STDOUT, 'input an ending number: ');
$ender = trim(fgets(STDIN));
fwrite(STDOUT, 'input an increment: ');
$incrementer = trim(fgets(STDIN));

for($i=$starter; $i < $ender + 1; $i += $incrementer){
	if (!is_numeric($incrementer) || $incrementer < 1){
			$incrementer = 1;
		}
	echo "$i\n";
}



