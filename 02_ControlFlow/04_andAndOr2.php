<?php

// set dinner & dessert
$dinner = "pizza";
$dessert = "cake";

// display a message based on dinner and dessert
if ($dinner == "pizza" && ($dessert == "ice cream" || $dessert == "cake")) {
    echo "I'm a happy camper!";

} else if ($dinner == "steak" && $dessert == "pie") {
    echo "Oh yeah, it's good eatin' tonight!";
    
} else {
    echo "Ugh, I'm not hungry anymore.";
}
