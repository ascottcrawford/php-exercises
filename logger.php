<?php

function logMessage($logLevel, $message)
{
    $log = [];
    $filename = '/vagrant/sites/exercises/log-YYYY-MM-DD.log';
	$handle = fopen($filename, 'a');
	foreach ($log as $message) {
    fwrite($handle, PHP_EOL . $message);
    $log = $message;
	}
	fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
var_dump($log);

