<?php

// 1. Switch statement in PHP

// a. Default case
$day = "Sunday";
switch ($day) {
    case "Monday":
        echo "It is Monday.";
        break;
    case "Tuesday":
        echo "It is Tuesday.";
        break;
        // Default case used when none of the above cases match
    default:
        echo "It might be a weekend day.";
}

echo "\n";

// b. Break statement within switch & how does switch statement work
$fruit = "Apple";
switch ($fruit) {
    case "Apple":
        echo "Apple pie";
        // Break stops the execution here and exits the switch
        break;
    case "Banana":
        echo "Banana bread";
        break;
}

echo "\n";

// c. Fall-through strategy & use-case of omitting the break statement
$number = 2;
switch ($number) {
    case 1:
        echo "One ";
        // Notice no break; execution will continue into the next case
    case 2:
        echo "or Two";
        // This demonstrates the fall-through strategy
        break;
}

echo "\n";

// d. Loose comparison
$age = "30"; // String
switch ($age) {
    case 30: // Integer
        echo "Age is 30.";
        // PHP switch does loose comparison
        break;
}

echo "\n";

// 2. Switch statement within loops & using break

for ($i = 0; $i < 3; $i++) {
    switch ($i) {
        case 0:
            echo "i equals 0\n";
            break;
        case 1:
            // a. Using continue statement within the switch statement that's within loop
            // In a loop, continue behaves like break in a switch
            continue 2;
        case 2:
            echo "i equals 2\n";
            break;
    }
}

echo "\n";

// 3. Difference between switch statement & series of if statements (switch vs if)

// Demonstration of switch vs if in terms of performance is theoretical here, as actual performance measurement
// would require more complex and extensive testing.

// Example using switch
$color = "blue";
$start_time = microtime(true);
switch ($color) {
    case "red":
        echo "Color is red.";
        break;
    case "green":
        echo "Color is green.";
        break;
    case "blue":
        echo "Color is blue.";
        break;
}
$end_time = microtime(true);
echo "Switch execution time: " . ($end_time - $start_time) . "\n";

// Example using if
$start_time = microtime(true);
if ($color == "red") {
    echo "Color is red.";
} elseif ($color == "green") {
    echo "Color is green.";
} elseif ($color == "blue") {
    echo "Color is blue.";
}
$end_time = microtime(true);
echo "If execution time: " . ($end_time - $start_time) . "\n";

// Note: In practice, the difference in execution time between switch and if statements for such simple cases
// is minimal and often negligible. The choice between using a switch or a series of if statements should be
// based on readability and the nature of the condition being tested.
