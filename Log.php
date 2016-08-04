<?php

class Log
{
    // $log-> $filename;
    // $log-> logMessage();
    // $log-> logInfo();
    // $log-> logError();

    public $filename;
    public $handle;


    public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . date('Y-m-d'). '.log';
		$this->handle = fopen($this->filename, 'a');
	}

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
