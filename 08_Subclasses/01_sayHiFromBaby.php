<?php
include('Person.php');
include('Baby.php');

$babyAndy = new Baby('Andy', 'Fischoff');
$babyAndy->gender = 'male';
$babyAndy->sayHello();

echo "<div>";
$babyAndy->drinkMilk();
echo "</div>";
