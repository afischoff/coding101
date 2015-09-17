<?php
class Person
{
	public $firstName = null;
	public $lastName = null;
	public $email = null;
	public $gender = null;
	public $birthday = null;

	public function __construct($firstName, $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFullName()
	{
		return $this->firstName . " " . $this->lastName;
	}

	public function sayHello()
	{
		echo "Hello, my name is " . $this->getFullName();
	}
}
