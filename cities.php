<?php

$filename = 'cities.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
print_r(explode("\n", trim($contents)));
echo $contents;
fclose($handle);