<?php

// create an array which contains other arrays
$myFood = array(
    "breakfast" => array(
            "main" => "toast",
            "drink" => "coffee",
            "side" => "fruit"
        ),
    "lunch" => array(
            "main" => "sandwich",
            "drink" => "coke",
            "side" => "chips"
        ),
    "dinner" => array(
            "main" => "pizza",
            "drink" => "water",
            "side" => "salad",
            "dessert" => "cake"
        )
);

// write out a few lines from my meals today
echo "With lunch, I drank " . $myFood["lunch"]["drink"] . "<br>"; // coke
echo "For breakfast, I ate " . $myFood["breakfast"]["main"]; // toast