<?php


// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// $physicistsArray = explode(', ', $physicistsString);

// print_r($physicistsArray);

// $productsString = "eggs,3\nbeer,10\nbaking soda,5\ngold,100\nshampoo,300";

// $rows = explode("\n", $productsString);
// $products = [];
// foreach ($rows as $productRow) {
// 	$product = explode(',', $productRow);
// 	$products[] = [
// 		'name' => $product[0],
// 		'price' => $product[1],
// 	];
// }
// // print_r($products);

// // echo $products[1]['name'], PHP_EOL;
// // echo "$", $products[1]['price'], PHP_EOL;

// $rows = [];
// foreach($products as $product) {
// 	$rows[] = implode(',', $product);
// }
// $productsString = implode("\n", $rows);
// var_dump($productsString);


$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(',', $famousFakePhysicists);
print_r($physicistsArray);
array_pop($physicistsArray);
print_r($physicistsArray);
array_push($physicistsArray, " and Tony Stark");
print_r($physicistsArray);

$famousString = implode(',', $physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousString}." . PHP_EOL;

// Humanize Part 2
PHP_EOL;


$famousFakePhysicists = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($famousFakePhysicists) {
	$physicistsArray = explode(', ', $famousFakePhysicists);
	array_pop($physicistsArray);
	array_push($physicistsArray, "Tony Stark");
	sort($physicistsArray);
	$famousString = implode(', ', $physicistsArray);
	return $famousString;
}
humanizedList($famousFakePhysicists);
print_r(humanizedList($famousFakePhysicists));





