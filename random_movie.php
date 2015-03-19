<?php

$inputFile  = 'movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, return contents as an array
 **/
function readLines($inputFile) {
	$handle = fopen($inputFile, 'r');
	$contents = fread($handle, filesize($inputFile));
	$explodedList = explode("\n", $contents);
	return $explodedList;

}


$oldList = readLines($inputFile);
// print_r($oldList);

// /**
//  * Write contents of an array to a file
//  **/
function writeLines($outputFile, $oldList) {
	$handle = fopen($outputFile, 'a+');
	sort($oldList);
	$newSortedString = implode("\n", $oldList);
	// print_r($newSortedString);
	fwrite($handle, $newSortedString);
}

function randomNumber($movies) {
		$x = rand(0, sizeof($movies));
		return $x;
}


$theChosenMovie = randomNumber($oldList);

echo "Let's watch \"" . $oldList[$theChosenMovie] . "\"!\n";
echo "But \"" . $oldList[$theChosenMovie + 5] . "\" really sucks!\n";

writeLines($outputFile, $oldList);


