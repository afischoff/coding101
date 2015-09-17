<?php
// make a function which returns the day of the week
function getDayOfWeek($dayAsInteger)
{
    // build days array
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    
    // if $daysAsInteger is between 0 and 6, return the day, otherwise return false
    if ($dayAsInteger >= 0 && $dayAsInteger <= 6) {
        return $days[$dayAsInteger];
    } else {
        return false;
    }
}

// get day 4
echo getDayOfWeek(4); // Thursday