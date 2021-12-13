<?php
// Simple conditions
    $day = date("d");
    if ($day == "Monday") {
        echo "It's Monday!" . "<br>";
    }

    $month = date("month");
    if ($month == 10) {
        echo "It's October!" . "<br>";
    } else {
        echo "It's " . date("F") . "<br>";
    }
// Double condition
    $currentMinutes = date("i");
    if ($currentMinutes < 10) {
        echo "the current minute is less than 10";
    } elseif ($currentMinutes < 15) {
        echo "the current minute is less than 15";
    } else {
        echo "does not meet any conditions";
    }
// Switch
    $day = date("l");

    switch ($day) {
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "Today is Wednesday";
            break;
        case "Thursday":
            echo "Today is Thursday";
            break;
        case "Friday":
            echo "Today is Friday";
            break;
        default:
            echo "You're using a different calendar";
    }
?>