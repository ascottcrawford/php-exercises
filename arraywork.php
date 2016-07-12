<?php



// asort($lettersArray);

// var_dump($lettersArray);
$letters = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function alphabetize($letters) {
	for ($j = 0; $j < count($letters) - 1; $j++) {
	for ($i = $j + 1; $i < count($letters) - 1; $i++) {
		
		if ($letters[$j] > $letters[$i]) {
			$temp = $letters[$i];
			$letters[$i] = $letters[$j];
			$letters[$j] = $temp;
		} 
	};	

	};
	var_dump($letters);
}
alphabetize($letters);


$unsorted = $letters;
$sorted = [];
foreach ($letters as $i => $letter) {
	$min = min($unsorted);
	$sorted[] = $min;
	$index = array_search($min, $unsorted);
	unset($unsorted[$index]);
}
print_r($sorted);


