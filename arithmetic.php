<?php

$a = 50;

function add($a, $b)
{
    
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b) {
	return $a % $b;
}

// Add code to test your functions here

echo add($a, 6) . PHP_EOL;
echo subtract(10, 4) . PHP_EOL;
echo multiply(4, 2) . PHP_EOL;
echo divide(8, 8) . PHP_EOL;
echo modulus(18, 9) . PHP_EOL;




// function prompt($message) {
// 	fwrite(STDOUT, $message);
// 	return trim(fgets(STDIN));
// }

// function alert($message){
// 	fwrite(STDOUT, $message);
// }