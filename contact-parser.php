<?php

function parseContacts($filename)
{
    $contacts = [];
    $thisfilename = "{$filename}";
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($thisfilename));
	$person = explode("\n", trim($contents));
	foreach ($person as $contact) {
		$info = explode("|", $contact);
		$info[1] = substr($info[1], 0, 3) . "-" . substr($info[1], 3, 3) . "-" . substr($info[1], 6);
		$eachContact = [
			'name' => $info[0],
			'number' => $info[1]
		];
		$contacts[] = $eachContact;
	};
    fclose($handle);
    return $contacts;
    
}

var_dump(parseContacts('contacts.txt'));


