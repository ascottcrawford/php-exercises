<?php

require_once 'Log.php';


// logMessage(); 
// info(); 
// error();

$log = new Log;

// var_dump($log->filename);
// var_dump($log->handle);

// $log->logMessage();
$log->info('INFO Message');
$log->error('ERROR Message');