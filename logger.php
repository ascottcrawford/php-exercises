<?php

function logMessage($logLevel, $message)
{
	$filename = 'log-' . date('Y-m-d'). 'log';
	$handle = fopen($filename, 'a');
	$formattedMessage = date('Y-m-d H:i:s') . " [$logLevel] $message";
	fwrite($handle, $formattedMessage); 

}

function logInfo($message){
	logMessage('INFO', $message);
}
function logError($message){
	logMessage('ERROR', $message);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");


