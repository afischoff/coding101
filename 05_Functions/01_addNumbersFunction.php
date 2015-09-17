<?php
// make a function which makes an addition equation
function addNumbers($num1, $num2)
{
	return $num1 . " + " . $num2 . " = " . ($num1 + $num2);
}

// write out a few simple problems
echo addNumbers(3, 5) . "<br>";
echo addNumbers(10, 20) . "<br>";
echo addNumbers(800, 200) . "<br>";
echo addNumbers(600, -200) . "<br>";
