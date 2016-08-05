<?php

class Log
{
    // $log-> $filename;
    // $log-> logMessage();
    // $log-> logInfo();
    // $log-> logError();

    private $filename;
    private $handle;


    public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . date('Y-m-d'). '.log';
		$this->openHandle();
	}

	protected function setFilename() {
		$this->filename = settype($filename, "string");
		
	}
	protected function setHandle() {
		$this->handle = $handle;
	}

	private function openHandle()
	{
		if(touch($this->filename) && is_writable($this->filename)){
			$this->handle = fopen($this->filename, 'a');
		}
		else {
			echo "sorry not the file you were looking for";
		}
	}

	// public function getFilename() {
	// 	return  
	// }
	


	public	function logMessage($logLevel, $message)
		{
			$formattedMessage = date('Y-m-d H:i:s') . " [$logLevel] $message" . PHP_EOL;
			fwrite($this->handle, $formattedMessage); 

		}

	public	function info($message){
			$this->logMessage('INFO', $message);
		}

	public 	function error($message){
			$this->logMessage('ERROR', $message);
		}

	public function __destruct()
	{
			fclose($this->handle);
	
	}

}

?>
