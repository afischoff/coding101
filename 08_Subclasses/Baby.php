<?php
class Baby extends Person
{
	public function sayHello()
	{
		echo "Goo-goo gaa-gaa. " . $this->getFullName();
	}

	public function drinkMilk()
	{
		echo "Yummy!";
	}
}
