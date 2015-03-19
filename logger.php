<?php

function logMessage($logLevel, $message) {
    $date = date('Y-d-m');
    $time = date('g:i:s');
	$filename = "log-$date.txt";
	$handle = fopen($filename, 'a+');
	fwrite($handle, $date . " " . $time . " [" . $logLevel . "] " . $message . PHP_EOL);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");