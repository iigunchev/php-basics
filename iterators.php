<?php
// for loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
// foreach loop
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
// while loop
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
    $x++;
    } 
// do while loop
    $y = 1;

    do {
        echo "The number is: $y <br>";
    $y++;
    } while ($y <= 5);
?> 