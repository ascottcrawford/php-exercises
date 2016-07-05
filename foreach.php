<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $item) {
	if (is_int($item)) {
		echo "{$item} is an integer\n";
	} elseif (is_float($item)) {
		echo "{$item} is float\n";
	} elseif (is_bool($item)) {
		echo "{$item} is boolean\n";
	} elseif (is_array($item)) {
		var_dump($item);
	} elseif (is_null($item)) {
		echo "{$item} is null\n";
	} elseif (is_string($item)) {
		echo "{$item} is string\n";
	}
}


foreach ($things as $item) {
	if (is_scalar($item)) {
		echo "{$item} is scalar\n";
	}
}


foreach ($things as $item) {
	if (is_array($item)) {
		foreach ($item as $number) {
			echo "{$number} is number\n";
		}
	} else {
		echo "{$item}\n";
	}
}

