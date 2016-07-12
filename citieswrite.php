<?php
$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$filename = '/vagrant/sites/exercises/cities.txt';
$handle = fopen($filename, 'a');
foreach ($newCities as $city) {
    fwrite($handle, $city . PHP_EOL);
}
fclose($handle);