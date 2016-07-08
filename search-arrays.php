<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


$result = array_search('Tina', $names, true);
var_dump($result);

$result = array_search('Tina', $names, false);
var_dump($result);


$result = array_search('Bob', $names, true);
var_dump($result);

$result = array_search('Bob', $names, false);
var_dump($result);

$intersect = array_intersect($names , $compare);
var_dump($intersect);

