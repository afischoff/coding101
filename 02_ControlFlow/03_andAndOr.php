<?php

// set the current temp
$theCurrentTemp = 30;

// set the current season
$theCurrentSeason = "Summer";

// display a message based on temp and season
if ($theCurrentTemp < 50 && $theCurrentSeason == "Summer") {
    echo "Yup, I must be in Chicago!";
}
