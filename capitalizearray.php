<?php

$uncapitalized = ['arches', 'badlands', 'carlsbad', 'denali'];
// to_capitalize = [denali, badlands]
$to_capitalize = ['denali', 'badlands'];

foreach ($uncapitalized as $key => $word) {
	foreach($to_capitalize as $cap) {
		if ($word == $cap) {
			$uncapitalized[$key] = ucfirst($word);
		}
	}
}
print_r($uncapitalized);


// if $uncapitalized == $capitalize {
// 	ucfirst($capitalize);
// }


// foreach ($uncapitalized as $value) {
// 		$value = implode(",", $uncapitalized);
// 		$cap = ucfirst($value);
	
// }
// echo $value;




