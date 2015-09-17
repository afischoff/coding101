<?php
// make an address book entry array
$myInfo = array(
    "firstName" => "Andy",
    "lastName" => "Fischoff",
    "email" => "andy@fischoff.com",
    "phone" => "847-687-2418",
    "title" => "Software Engineer"
);

// loop out all the fields in my array
foreach ($myInfo as $field => $value) {
    echo $field . ": " . $value . "<br>";
}
