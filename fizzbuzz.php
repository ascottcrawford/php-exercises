<?php

//counters
//accumulators



for ($number=1; $number <= 100; $number++) {
	if ($number % 3 == 0 && $number % 5 != 0) {
		fwrite(STDOUT, "Fizz\n");
	}  elseif ($number % 5 == 0 && $number % 3 != 0) {
		fwrite(STDOUT, "Buzz\n");
	}  elseif ($number % 3 == 0 && $number % 5 == 0) {
		fwrite(STDOUT, "FizzBuzz\n");
	} else {
		fwrite(STDOUT, "$number\n");
	}
}


