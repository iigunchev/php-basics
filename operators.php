<?php
// Arithmetic operators
    var_dump(1+1);
    var_dump(5-2);
    var_dump(3*3);
    var_dump(20/4);
    var_dump(9%4);

// Comparison operators
    var_dump(1==1);
    var_dump(4!=5);
    var_dump(4>5);
    var_dump(4<5);
    var_dump(7>=5);
    var_dump(4<=5);

// Logical operators
    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
    if ($x == 100 or $y == 20) {
        echo "Hello world!";
    }
    // true if either $x or $y is true, but not both.
    if ($x == 100 xor $y == 50) {
        echo "Hello world!";
    }
    if (!$x) {
        echo "Hello world!";
    }
?>