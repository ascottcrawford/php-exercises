<?php

function parseContacts($filename)
{
    $contacts = [];
    $thisfilename = "{$filename}";
    // $contents = trim(file_get_contents($filename));
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($thisfilename));
	$person = explode("\n", trim($contents));
	fclose($handle);
	$count = 0;
	foreach ($person as $key => $contact) {
		var_dump("loop number: " . $count);
		$count++;
		var_dump($person);
		var_dump($key);
		var_dump($contact);
		$info = explode("|", $contact);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
		$eachContact = [
			'name' => $info[0],
			'number' => $info[1]
		];
		$contacts[] = $eachContact;
	};
    
    return $contacts;
    
}

// var_dump(parseContacts('contacts.txt'));

// $key_test = array(

// 	'key1' => 'value1',
// 	'key2' => 'value2',
// 	'key3' => 'value3'

// );

$key_test = array(

	'value1',
	'value2',
	'value3'

);

var_dump($key_test);
$count = 0;
foreach ($key_test as $key => $value) {
	var_dump("loop number: " . $count);
	$count++;
	var_dump($key_test);
	var_dump($key);
	var_dump($value);
}
