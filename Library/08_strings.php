<?php
// Print a text string
    echo "This is a string. <br>";

// Print a text string that interpret variables
    $a = "This is another string. <br>";
    echo $a;

// Concatenate a previously declared variable in a text string
    echo "The previous echo was  " . $a . "<br>";

// Execute the function that allows you to replace text in a string (case sensitive)
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    echo "<br>";

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
    echo str_ireplace("WORLD", "Dolly", "Hello world!"); // outputs Hello Dolly!
    echo "<br>";

// Execute the function that allows you to write a text N times
    echo str_repeat("Wow <br>",13);

// Execute the function that allows to obtain the length of a text string
    echo strlen("Hello"); // outputs 5
    echo "<br>";

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
    echo stripos("I love php, I love php too!","PHP"); //outputs 7
    echo "<br>";

// Execute the function that allows a text string to be capitalized
    echo ucfirst("hello world!"); // outputs "Hello world!"
    echo "<br>"; 

// Execute the function that allows you to transform a text string to lowercase
    echo strtolower("Hello WORLD."); // outputs "hello world!"
    echo "<br>"; 
// Execute the function that allows to obtain a text substring from a given position
    echo substr("Hello world",6); // outputs "world"
    echo "<br>"; 
?>