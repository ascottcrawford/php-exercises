<?php


$a = 50;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b !==0) {
        return $a / $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}


function modulus($a, $b) {
	return $a % $b;
}

function throwErrorMessage ($a, $b) {
	return "$a and $b are not valid numbers";
}

// Add code to test your functions here

echo add($a, '4') . PHP_EOL;
echo subtract(10, true) . PHP_EOL;
echo multiply(4, 2) . PHP_EOL;
echo divide(8, 0) . PHP_EOL;
echo modulus(18, 9) . PHP_EOL;




// function compare($a, $b)
// {
// 	return $a == $b;
// }
// var_dump(compare(1, 3));


// function compare($a, $b, $strict = false)
// {
// 	if($strict == true) {
// 		return $a === $b;
// 	}
// 	return $a == $b;
// }

// var_dump(compare(1, '1'));




// function prompt($message) {
// 	fwrite(STDOUT, $message);
// 	return trim(fgets(STDIN));
// }

// function alert($message){
// 	fwrite(STDOUT, $message);
// }