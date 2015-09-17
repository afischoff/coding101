<?php
include('Person.php');

$andy = new Person('Andy', 'Fischoff');
$andy->email = 'andy@fischoff.com';
$andy->gender = 'male';
$andy->sayHello();

echo "<br><br>";

$bobby = new Person('Bobby', 'Brown');
$bobby->email = 'bobby@brown.com';
$bobby->gender = 'male';

echo $bobby->getFullName() . '<br>';
$bobby->sayHello();
