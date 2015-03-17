<?php 

$filename = 'monthly_sales_report.txt';
$handle = fopen($filename, 'r');
$stringWithTitles = fread($handle, filesize($filename));
//Output ordered in descending
// Columns in the following format
// UNITS | FULL NAME    | EMPLOYEE NUMBER
// 5       BOB BOBERSON   2
$explodedAtNewLine = explode("\n", $stringWithTitles);
// print_r($explodedAtNewLine);
$arrayWithItems = [];

foreach($explodedAtNewLine as $key => $item){
	$explodedAtNewLine[$key] = explode(", ", $item);
}

// print_r($explodedAtNewLine);

echo $explodedAtNewLine[2][0], "  |  ", $explodedAtNewLine[1][0], "  |  ", $explodedAtNewLine[0][0],  PHP_EOL;
echo "==================================================================================================\n";
echo $explodedAtNewLine[4][0], "  |   ", $explodedAtNewLine[4][1], "  |  ", $explodedAtNewLine[4][2], "  |  ", $explodedAtNewLine[4][3], $explodedAtNewLine[4][4], PHP_EOL;

for($i = 6; $i < 13; $i++){
	$x = 0;
	echo $explodedAtNewLine[$i][$x], "                   ", $explodedAtNewLine[$i][$x + 1], "             ", $explodedAtNewLine[$i][$x + 2], "             ", $explodedAtNewLine[$i][$x + 3],  PHP_EOL;
}