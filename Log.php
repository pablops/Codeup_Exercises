<?php  
class Log{
	public $filename;
	public $handle;

	public function __construct($prefix = 'log') {
		date_default_timezone_set('America/Chicago');
		$date = date("Y-m-d");
        $this->filename = "$prefix-$date.log";
        $this->handle = fopen($this->filename, 'a+');
    }

	function logMessage($level, $message){
		date_default_timezone_set('America/Chicago');
		$timestamp = date("Y/m/d H:i:s");
		fwrite($this->handle, "[$timestamp]: [$level]: [$message]\n");
	}

	function info($message){
		$this->logMessage("INFO", $message);
	}

	function error($message){
		$this->logMessage("ERROR", $message);
	}

	public function __destruct() {
        fclose($this->handle);
    }

}

?>