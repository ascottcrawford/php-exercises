<?php

//counters
//accumulators

$sum = 0;

for ($i=0; $i < 10; $i++) {
	fwrite(STDOUT, "Enter a number: \n");
	$number = trim(fgets(STDIN));
	$sum += $number;
}

fwrite(STDOUT, "the sum of your numbers is $sum \n");





