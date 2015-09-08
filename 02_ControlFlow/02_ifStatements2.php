<?php

// set the current temp variable
$theCurrentTemp = 30;

// set $iThink to a message based on the current temp
if ($theCurrentTemp <= 32) {
    $iThink = "It's freezing outside!";

} else if ($theCurrentTemp <= 70) {
    $iThink = "Perfect! I love it!";

} else {
    $iThink = "Break out the shorts!";
}

// output the final message
echo "The current temp is: " . $theCurrentTemp . " I'm thinking... " . $iThink;
