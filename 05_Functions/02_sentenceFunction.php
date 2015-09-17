<?php
// make a function which outputs a sentence
function howIFeel($timeOfDay, $food, $weather = "sunny")
{
    return "This " . $timeOfDay . " I'm eating " . $food . " and the weather is " . $weather . ".";
}

// pass a few different variables to the function to make different sentences
echo howIFeel("morning", "toast", "rainy") . "<br>";
echo howIFeel("afternoon", "salad");
