<?php
// count backward from 100 to 0 by 5s
$i = 100;
do {
    echo $i . "<br>";
    $i = $i - 5;
} while ($i >= 0);
