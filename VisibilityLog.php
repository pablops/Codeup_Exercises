<?php 
class Log{
	private $filename;
	private $handle;

	public function getFilename() {
		return $this->filename;
	}

	public function setFilename($filename) {
		if(is_string($filename)){
			return $this->filename = trim($filename);
		} else {
			return $this->filename = (string)$filename;  
		}
	}

	function logMessage($level, $message){
		date_default_timezone_set('America/Chicago');
		$timestamp = date("Y/m/d H:i:s");
		$this->handle = fopen($this->filename, 'a+');
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