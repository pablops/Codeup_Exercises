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

$maxValueSales = 12;

for($i = 6; $i < 39; $i++){
	$x = 0;	
	echo "max v sales is  $maxValueSales\n";
	if ($explodedAtNewLine[$i][$x + 3] == $maxValueSales){
		$maxValueSales = $maxValueSales - 1;
		echo "the thing i'm measuring is ", $explodedAtNewLine[$i][$x + 3] . PHP_EOL;
		echo $explodedAtNewLine[$i][$x + 3], "                   ", $explodedAtNewLine[$i][$x + 1], "             ", $explodedAtNewLine[$i][$x + 2], "             ", $explodedAtNewLine[$i][$x + 0],  PHP_EOL;
		// $maxValueSales = $explodedAtNewLine[$i][$x + 3];
		$maxValueSales = $maxValueSales - 1;
		echo "i is $i";
		echo "max value sales at end of loop is  $maxValueSales\n"; 
	} else {
		$maxValueSales = $maxValueSales - 1;
	}
}