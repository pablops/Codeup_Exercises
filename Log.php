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
		// $this->handle = fopen($this->filename, 'a+');
		date_default_timezone_set('America/Chicago');
		$timestamp = date("Y/m/d H:i:s");
		fwrite($this->handle, "[$timestamp]: [$level]: [$message]\n");
		// fclose($this->handle);
		// open file stored in filename for appending;
		// output the message in the same format as before, and then close the handle.
	}
	// Methods info() and error() that will take in a message and forward 
	// it on to logMessage() along with the relevant log level.
	function info($message){
		// take in a message and forward it on to logMessage() 
		// along with the relevant log level.
		$this->logMessage("INFO", $message);
	}

	function error($message){
		// take in a message and forward it on to logMessage() 
		// along with the relevant log level.
		$this->logMessage("ERROR", $message);
	}
// method is function inside objec
	public function __destruct() {
        fclose($this->handle);
    }

}

?>