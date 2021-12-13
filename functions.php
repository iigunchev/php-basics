<?php
// Create a function that given two numbers returns the sum of both
    function addNumbers($a, $b) {
        return $a + $b;
    }
    echo addNumbers(2, 4);
    echo "<br>";
// Create a function that given two numbers returns the multiplication of both
    function multiplyNumbers($a, $b) {
        return $a * $b;
    }
    echo multiplyNumbers(2, 4);
    echo "<br>";
// Create a function that given two numbers returns the division of both
    function divideNumbers($a, $b) {
        return $a / $b;
    }
    echo divideNumbers(2, 4);
    echo "<br>";
// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.

// Depending on the type of operation received by parameter, the function will execute the function responsible for performing the operation, since you have previously implemented the function for each operation separately.
    function mathOperation($a, $b, $c) {
        if ($c == "+") return addNumbers($a, $b);
        elseif ($c == "*") return multiplyNumbers($a, $b);
        elseif ($c == "/") return divideNumbers($a, $b);
    }
    echo mathOperation(2, 4, "*");
    echo "<br>";
?>