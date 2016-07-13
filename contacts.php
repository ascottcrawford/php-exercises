<?php

$filename = '/vagrant/sites/exercises/contacts.txt';

function addContact($nameNumber, $filename) {
	$current = file_get_contents($filename);
	// Append a new person to the file
	$current .= trim("$nameNumber\n") . PHP_EOL;
	// Write the contents back to the file
	file_put_contents($filename, $current);
}

$selector = 0;
do {
	fwrite(STDOUT, "1. View Contacts\n 2. Add a new contact\n 3. Search a contact by name\n 4. Delete an existing contact\n 5. Exit\n Enter an option(1, 2, 3, 4, or 5): ") . PHP_EOL;
	$selected = trim(fgets(STDIN));
	if ($selected == 1) {
		$filename = '/vagrant/sites/exercises/contacts.txt';
		$handle = fopen($filename, 'r');
		$contents = trim(fread($handle, filesize($filename)));
		var_dump($contents);
		fclose($handle);
	} elseif ($selected == 2) {
		fwrite(STDOUT, 'Add a name | number: ') . PHP_EOL;
		$nameNumber = trim(fgets(STDIN));
		addContact($nameNumber, $filename);
		$contactsArray[] = $nameNumber;
	} elseif ($selected == 3) {
		fwrite(STDOUT, 'Enter a name | number to search: ') . PHP_EOL;
		$nameSearch = trim(fgets(STDIN));
		$filename = '/vagrant/sites/exercises/contacts.txt';
		$handle = fopen($filename, 'r');
		$contents = trim(fread($handle, filesize($filename)));
		$contactsArray = explode("\n", $contents);
		fclose($handle);
		$nameResult = array_search($nameSearch, $contactsArray, false);
			if ($nameResult === false) {
			echo 'Cannot find the contact', PHP_EOL;
			} else {
			echo 'Yes, ' . $contactsArray[$nameResult] . ' is in the database.', PHP_EOL;
			}				
	} elseif ($selected == 4) {
		fwrite(STDOUT, 'Please enter a name | number to delete: ') . PHP_EOL;
		$deleteNameNumber = trim(fgets(STDIN));
		$filename = '/vagrant/sites/exercises/contacts.txt';
		$handle = fopen($filename, 'r');
		$contents = trim(fread($handle, filesize($filename)));
		$contactsArray = explode("\n", $contents);
		fclose($handle);
		foreach ($contactsArray as $index => $contact) {
			if (strpos($contact, $deleteNameNumber) !== false)  {
				unset($contactsArray[$index]);
			} 
		}
		var_dump($contactsArray);
		file_put_contents($filename, implode("\n", $contactsArray));		
	} elseif ($selected == 5) {
		exit();
	}

} while ($selector !=5);
exit();



// fwrite(STDOUT, 'Add a name | number: ') . PHP_EOL;
// $nameNumber = trim(fgets(STDIN));

// $filename = '/vagrant/sites/exercises/contacts.txt';
// $handle = fopen($filename, 'r');
// $contents = trim(fread($handle, filesize($filename)));
// $contactsArray = explode("\n", $contents);
// fclose($handle);

// addContact($nameNumber, $filename);
// $contactsArray[] = $nameNumber;

// // Search Contacts
// fwrite(STDOUT, 'Search for a name: ') . PHP_EOL;
// $nameSearch = trim(fgets(STDIN));

// $nameResult = array_search($nameSearch, $contactsArray, false);

// if ($nameResult === false) {
// 	echo 'Cannot find the contact', PHP_EOL;
// } else {
// 	echo $contactsArray[$nameResult], PHP_EOL;
// }	
















// function addContacts($name, $number)
// {
// 	$newContacts = [];
// 	$filename = '/vagrant/sites/exercises/contacts.txt';
// 	$handle = fopen($filename, 'a');
// 	foreach ($newContacts as $contact) {
// 	    fwrite($handle, $contact . PHP_EOL);
// 	    $newContact += $contact;
// 	}
// 	fclose($handle);

// }
// addContacts('Scott Crawford', '2223334444');

// $contacts += $newContacts;
// var_dump($contacts);



// $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

// $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $find = ;

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

