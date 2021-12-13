<?php
// Define a simple array composed of text strings
    $cars = array("Volvo", "BMW", "Toyota");

// Define a simple array consisting of whole numbers and decimal numbers
    $numbers = array(1, 1.5, 2, 2.5, 3);

// Define a multidimensional array
    $cars2 = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

// Execute the function that allows to obtain the length of an array
    echo count($cars2);
    echo "<br>";

// Execute the function that allows to obtain the combination of two arrays
    $fname=array("Peter","Ben","Joe");
    $age=array("35","37","43");
    // array_combine(keys, values)
    $c=array_combine($fname,$age);
    print_r($c);
    echo "<br>";

// Execute the function that once is given an array return the last element of it
    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    echo end($people) . "<br>";

// Execute the function that once is given an array add a new element to the array in question
    $a=array("red","green");
    array_unshift($a,"blue");
    print_r($a); // outputs Array ( [0] => blue [1] => red [2] => green ) 
?>