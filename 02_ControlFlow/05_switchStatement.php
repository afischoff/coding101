<?php

// set the dinner variable
$dinner = "pizza";

// output a message based on the value of $dinner
switch ($dinner) {
    case "steak":
        echo "I love steak!";
        break;
        
    case "tacos":
        echo "Fantastico!";
        break;
        
    case "pizza":
        echo "Yes please!";
        break;
        
    default:
        echo "Eh, I think I'll pass.";
        break;
}
