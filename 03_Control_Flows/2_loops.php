<?php
// Loops are control structures that repeatedly execute a block of code until a condition is met.
// They allow for efficient repetition and modularity.

// 1- While loop
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "\n";
// if the codition is always true, the loop becomes infinite and never stops
// here comes break statements
$running = true;
$a = 0;
while ($running) {
    if ($a === 7) {
        break;
    }
    echo $a . "\t";
    $a++;
    // Loop body
}
echo "\n";
// Break Out of Multiple Levels of Nested Loops
while (true) {
    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            break 2;  // 2 represents 2 levels of loops
        }
        // Inner loop body
        echo "{$i} ";
    }
    // Outer loop body
}
echo "\n";
//Continue Statement
// Skips the remaining code in the current iteration and jumps to the next.
// Example: Skip even numbers
$i = 0;
while ($i < 10) {
    if ($i % 2 == 0) {
        $i++;
        continue;
    }
    // Process odd numbers
    echo "{$i} ";
    $i++;
}
echo "\n";

//Do-While Loop
$printed = 0;
do {
    echo "{$printed} ";
    $printed++;
} while ($printed <= 10);
echo "\n";
//for loop
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}
echo "\n";
// for loop with multiple expressions
// for ($i = 0; $i < count($numbers); $i++, $num = $numbers[$i]) {
//     echo $num . " "; // Example: Output: 1 2 3 4 5
// }

echo "\n";
// Iterate Over Strings
$str = "Hello World!";
for ($i = 0; $i < strlen($str); $i++) {
    echo strtoupper($str[$i]) . "\t"; // Example: Output: HELLO WORLD!
}
echo "\n";
// Iterate over arrays
$numbers = [1, 2, 3, 4, 5];
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] * $numbers[$i] . " "; // Example: Output: 1 4 9 16 25
}
echo "\n";

// for each loop
// Iterating over associative array
$person = ["name" => "John", "age" => 30];
foreach ($person as $key => $value) {
    echo "$key: $value\n"; // Example: Output: name: John, age: 30
}
echo "\n";

// Overwriting array with for each loop
// Example: Modify fruits in-place by adding " pie"
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as &$fruit) {
    $fruit .= " pie"; // Modifies fruits directly
}
print_r($fruits);
echo "\n";
// Alternative syntax
// foreach
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $num) {
    echo $num * $num . " "; // Example: Output: 1 4 9 16 25
}
echo "\n";
// for
for ($i = 1; $i <= 5; $i++) echo $i . " "; // Output: 1 2 3 4 5