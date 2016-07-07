<?php


fwrite(STDOUT, "Enter a starting number\n");
$start =  trim(fgets(STDIN));
if (!is_numeric($start)) {
	$start = 1;
}
fwrite(STDOUT, "Enter an ending number\n");
$end = trim(fgets(STDIN));
if (!is_numeric($end)) {
	$end = 100;
}
fwrite(STDOUT, "Enter an incrementer\n");
$increment = trim(fgets(STDIN));
if (!is_numeric($increment)) {
	$increment = 1;
}

		for ($i = $start; $i <= $end; $i+=$increment) {
		fwrite(STDOUT, "$i\n"); 
		}



	// for ($i = $start; $i <= $end; $i++) {
	// 	fwrite(STDOUT, "$i\n"); 
	// 	}


$array = [2, 35, 6, 7, 10];

foreach ($array as $key => $value) {
	echo "\$key's value is $key" . PHP_EOL;
	echo "\$"
}