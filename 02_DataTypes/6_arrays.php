<?php

// 1. Array initialization:

// Explicit array():
$colors = array("red", "green", "blue");

// Square brackets shorthand:
$fruits = ["apple", "banana", "orange"];

// range() function:
$numbers = range(1, 5);

// Casting from string:
$string_array = (array) "hello";

// 2. Indexed arrays:

// Accessing elements:
$first_color = $colors[0];

// Looping through all elements:
foreach ($fruits as $fruit) {
    echo "$fruit ";
}

// String interpolation for key access:
echo "The second fruit is {$fruits[1]}";

// 3. Undefined keys and existence checks:

// Automatic indexing:
$mixed_array = ["a", "b", 50 => "c", "d", "e"];

// Checking key existence:
if (array_key_exists(50, $mixed_array)) {
    echo "Key 50 exists.";
}

// Checking item existence:
if (isset($mixed_array["1"])) { // Note: "1" is a string key here
    echo "Value with key '1' exists.";
}

// Negative indexes are not supported:
// $element = $mixed_array[-1]; // Will throw an error

// 4. Array mutation:

// Adding new elements:
$mixed_array[] = "f"; // Append to the end
array_push($mixed_array, "g"); // Also append to the end
array_unshift($mixed_array, "z"); // Insert at the beginning

// Re-assigning:
$mixed_array[2] = "new_value";

// 5. Associative arrays:

// Defining keys with various data types:
$person = ["name" => "John", "age" => 30, "active" => true];

// Accessing elements:
$age = $person["age"];

// Modifying:
$person["city"] = "New York";

// Duplicate keys:
$dup_array = ["one" => 1, "1" => "two", true => "three"]; // Last value for each key wins
echo $dup_array["1"]; // Output: "two"

// 6. Mixed key types and automatic indexing:

// Numeric and string keys:
$mixed_array2 = ["a", "b", "third" => "c", "d", "e"]; // Numeric indexing takes precedence for mixed keys

// All string keys:
$all_strings = ["name" => "Jane", 50 => "city", "address" => "Main Street"]; // No automatic indexing

// 7. Multidimensional arrays:

// Indexed multidimensional:
$data = [
    [1, 2, 3],
    [4, 5, 6],
    ["apple", "banana", "orange"],
];
$second_element_first_array = $data[1][0]; // Accessing specific element

// Associative multidimensional:
$users = [
    "john" => [
        "name" => "John Doe",
        "age" => 30,
    ],
    "jane" => [
        "name" => "Jane Smith",
        "age" => 25,
    ],
];
$jane_age = $users["jane"]["age"]; // Accessing element in nested associative array

// 8. Removing elements:

// pop():
$last_fruit = array_pop($fruits);

// shift():
$first_color = array_shift($colors);

// unset():
unset($person["active"]);

// Array re-indexing:
$reindexed_array = array_values($mixed_array); // Creates a new array with numeric keys starting from 0

// 9. Key existence checks:

// array_key_exists():
if (array_key_exists("city", $person)) {
    echo "Key 'city' exists.";
}

// isset():
if (isset($person["age"])) {
    echo "Value with key 'age' exists and is not null.";
}

// 10. Casting to arrays:

// Casting a string:
$string_as_array = (array) "hello world";
