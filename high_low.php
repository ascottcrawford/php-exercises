<?php

$min = 1;
$max = 100;


if ($argc === 3 && is_numeric) {

	$correctNumber = mt_rand($argv[1], $argv[2]);
	$min = $argv[1];
	$max = $argv[2];
	$counter = 0;

} else {
	fwrite(STDERR, "You need to pass 2 numeric values");
	exit(1); 

}

	fwrite(STDOUT, "Please guess a number between 1 and 100: ") . PHP_EOL;

	do {
		$guessNumber = trim(fgets(STDIN));
		$counter++;

		if ($guessNumber == $correctNumber) {
		    fwrite(STDOUT, $guessNumber . " is correct. Great Guess!" . " It took you " . $counter . " guesses.") . PHP_EOL;
		}

		elseif ($guessNumber < $correctNumber) {
		    fwrite(STDOUT, $guessNumber . " is too low. ") . PHP_EOL;
		}

		else {
			fwrite(STDOUT, $guessNumber . " is too High. ") . PHP_EOL;
		}

	} while	($guessNumber !== $correctNumber);

	exit(0);




