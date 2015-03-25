<?php 

require_once 'Log.php';

$firstInstance = new Log('cli');

date_default_timezone_set('America/Chicago');
$date = date("Y-m-d");
// $firstInstance->filename = "log-$date.txt";
$firstInstance->info("Info message");
$firstInstance->error("ERRORmessage");

// $secondInstance = new Log();
// $date = date("Y/m/d");
// $secondInstance->filename = 'log-' . $date . '.txt';
// $secondInstance->info("Second instance info message");
// $secondInstance->error("Second instance error message");



?>