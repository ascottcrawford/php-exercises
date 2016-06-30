<?php

$firstName = "Scott";
$lastName = "Crawford";

echo "Hello, my name is " . $firstName . " " . $lastName;
echo "Hello, my name is $firstName $lastName";

$itsHot = false;
$outsite = false;

if ($itsHot && $Outside) {
	echo 'Swear' . PHP_EOL;
} elseif (!$itsHot && !$Outside){
	echo 'Enjoy heater' . PHP_EOL;
} else {
	echo 'Enjoy AC' . PHP_EOL;
}

$a = 42;
$b = '42';

if ($a == $b) {
	echo 'a and b are equal' . PHP_EOL;
}
if ($a === $b) {
	echo 'a and b are identical' . PHP_EOL;
}
if ($a != $b) {
	echo 'a and b are not equal' . PHP_EOL;
}
if ($a !== $b) {
	echo 'a and b are not identical' . PHP_EOL;
}

var_dump( (true || false) ? 'It was true' : 'It was false');

