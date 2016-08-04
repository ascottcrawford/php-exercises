<?php

class Person
{
    public $firstName;
    public $lastName;

	public function __construct($firstName, $lastName)
	{
		echo 'New Person was constructed!' . PHP_EOL;
		$this->firstName = $firstName;
		$this->lastName = $lastName;

	}
	public function fullName()
	{
		echo $this->firstName . ' ' . $this->lastName . PHP_EOL;
	}

	public function __destruct()
	{
		echo $this->fullName() . ' just died' . PHP_EOL;
	}
}

	$person1 = new Person('John', 'Doe');
	$person2 = new Person('Jane', 'Doe');
	$person3 = new Person('Joe', 'Doe');

	var_dump($person1);
	var_dump($person2);
	var_dump($person3);

	unset($person2);

?>