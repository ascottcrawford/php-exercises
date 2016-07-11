<?php
$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$filename = '/cities.txt';
$handle = fopen($filename, 'a');
foreach ($newCities as $city) {
    fwrite($handle, PHP_EOL . $city);
}
fclose($handle);