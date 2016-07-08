<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $merge = array_merge($names, $compare);
// var_dump($merge);
// $unique = array_unique($merge);
// var_dump($unique);

$i=0; 

function combine_arrays ($array1, $array2) {
	$newArray = [];
	for ($i=0; $i<count($array1); $i++) {
		if ($array1[$i] === $array2[$i]) {
			$newArray[] = $array1[$i];
		} else {
			$newArray[] = $array1[$i];
			$newArray[] = $array2[$i];
		} 
	}
	return $newArray;

}
var_dump(combine_arrays($names, $compare));




// function combine_arrays($names) {

// }
// $result = array_search('Tina', $names, true);
// var_dump($result);

// $result = array_search('Tina', $names, false);
// var_dump($result);

// $result = array_search('Bob', $names, true);
// var_dump($result);

// $result = array_search('Bob', $names, false);
// var_dump($result);

// $intersect = array_intersect($names , $compare);
// var_dump($intersect);

// $find = 'Amy';

// function inArray ($find, $names) {
// 	if (array_search($find, $names) === false) {
// 		echo "False\n";
// 	} else {
// 		echo "True\n";
// 	}
// }
// inArray($find, $names);

// $i=0;
// $count = 0;
// foreach($names as $name){
// 	if(array_search($name, $compare) !== false) {
// 		$count++;
// 	}

// };
// echo "$count\n";

