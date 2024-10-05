<?php

/**
 * This script demonstrates various array operations in PHP, 
 * including initialization, accessing elements, 
 * manipulating arrays, and checking for key existence.
 */
// ---------------------------------------------------------------------
// 1. Array Initialization
// ---------------------------------------------------------------------
// Creating an array using the explicit 'array()' construct
$colors = array("red", "green", "blue");

// Creating an array using the shorthand square bracket syntax
$fruits = ["apple", "banana", "orange"];

// Creating an array using the 'range()' function to generate a sequence of numbers
// This creates an array [1, 2, 3, 4, 5]
$numbers = range(1, 5);

// Casting a string to an array (creates an array with one element containing the string)
$string_array = (array) "hello";

// ---------------------------------------------------------------------
// 2. Indexed Arrays
// ---------------------------------------------------------------------
// Accessing an element by its index (0-based)
$first_color = $colors[0];

// Iterating through all elements of an array using a 'foreach' loop
foreach ($fruits as $fruit) {
    echo "$fruit "; // Outputs: apple banana orange 
}

// Accessing an element using string interpolation within a string
echo "The second fruit is {$fruits[1]}"; // Outputs: The second fruit is banana
// ---------------------------------------------------------------------
// 3. Undefined Keys and Existence Checks
// ---------------------------------------------------------------------
// Automatic indexing: PHP assigns numeric keys when not explicitly defined
$mixed_array = ["a", "b", 50 => "c", "d", "e"]; 
// Keys: 0, 1, 50, 51, 52
// Checking if a specific key exists in the array using 'array_key_exists()'
if (array_key_exists(50, $mixed_array)) {
    echo "Key 50 exists."; // This will be executed
}
// Checking if an element with a specific key exists and is not null using 'isset()'
if (isset($mixed_array["1"])) { // Note: "1" is treated as a string key here
    echo "Value with key '1' exists."; // This will be executed
}
// Negative indexes are not supported in PHP arrays
// $element = $mixed_array[-1]; // This would throw an error
// ---------------------------------------------------------------------
// 4. Array Mutation (Adding, Modifying)
// ---------------------------------------------------------------------
// Adding a new element to the end of the array
$mixed_array[] = "f"; // Appends "f" to the array
// Using 'array_push()' to add an element to the end
array_push($mixed_array, "g"); // Appends "g" to the array
// Using 'array_unshift()' to add an element to the beginning
array_unshift($mixed_array, "z"); // Inserts "z" at the beginning
// Re-assigning a value to an existing element using its index
$mixed_array[2] = "new_value"; // Changes the value at index 2
// ---------------------------------------------------------------------
// 5. Associative Arrays (Key-Value Pairs)
// ---------------------------------------------------------------------
// Defining an associative array with string keys and various data types as values
$person = ["name" => "John", "age" => 30, "active" => true]; 
// Accessing an element by its key
$age = $person["age"]; // $age will be 30
// Adding a new key-value pair to the array
$person["city"] = "New York"; 
// Duplicate keys: the last value assigned to a key overwrites previous values
$dup_array = ["one" => 1, "1" => "two", true => "three"]; 
echo $dup_array["1"]; // Outputs: "two" (string key "1")
// ---------------------------------------------------------------------
// 6. Mixed Key Types and Automatic Indexing
// ---------------------------------------------------------------------
// Array with mixed numeric and string keys
$mixed_array2 = ["a", "b", "third" => "c", "d", "e"]; 
// Keys: 0, 1, "third", 3, 4

// Array with all string keys (no automatic numeric indexing)
$all_strings = ["name" => "Jane", 50 => "city", "address" => "Main Street"]; // No automatic indexing

// ---------------------------------------------------------------------
// 7. Multidimensional Arrays (Arrays within Arrays)
// ---------------------------------------------------------------------
// Indexed multidimensional array
$data = [
    [1, 2, 3],
    [4, 5, 6],
    ["apple", "banana", "orange"],
];
$second_element_first_array = $data[1][0]; // Accessing element at index 0 of the second sub-array (value: 4)

// Associative multidimensional array
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

// Mixed Multi-dimensional Array
$programmingLanguages = [
    "Python" => [
        "creator" => "Guido van Rossum",
        "year" => 1991,
        "type" => "interpreted",
        "frameworks" => [
            "Django",
            "Flask",
        ],
        "versions"=>[
            ['version'=> '3.11.10', "release"=>'Sept. 7, 2024'],
            ['version'=>'3.12.7',"release"=>'Oct. 1, 2024']
        ]
    ],
    "JavaScript" => [
        "creator" => "Brendan Eich",
        "year" => 1995,
        "type" => "interpreted",
        "frameworks" => [
            "React",
            "Angular",
        ],
        "versions" => [
            ['version'=>'ECMAScript 2023', 'release'=>'June 2023'],
            ['version'=>'ECMAScript 2024', 'release'=>'June 2024'],
            
        ]
    ],
];
$python_creator = $programmingLanguages["Python"]["creator"]; // Accessing element in nested associative array
$javascript_version = $programmingLanguages["JavaScript"]["versions"][0]["version"]; // Accessing element in nested associative array

// ---------------------------------------------------------------------
// 8. Removing Elements from Arrays
// ---------------------------------------------------------------------
// Using 'array_pop()' to remove and return the last element
$last_fruit = array_pop($fruits); // Removes "orange" from $fruits and assigns it to $last_fruit
// Using 'array_shift()' to remove and return the first element
$first_color = array_shift($colors); // Removes "red" from $colors and assigns it to $first_color
// Using 'unset()' to remove an element by its key
unset($person["active"]); // Removes the "active" key-value pair from $person
// Re-indexing an array using 'array_values()' to create a new array with numeric keys starting from 0
$reindexed_array = array_values($mixed_array); 
// ---------------------------------------------------------------------
// 9. Key Existence Checks
// ---------------------------------------------------------------------
// Using 'array_key_exists()' to check if a specific key exists in the array
if (array_key_exists("city", $person)) {
    echo "Key 'city' exists."; // This will be executed
}
// Using 'isset()' to check if a key exists and its value is not null
if (isset($person["age"])) {
    echo "Value with key 'age' exists and is not null."; // This will be executed
}
// ---------------------------------------------------------------------
// 10. Casting to Arrays
// ---------------------------------------------------------------------
// Casting a string to an array 
// (creates an array with one element containing the string)
$string_as_array = (array) "hello world"; 
print_r($string_as_array);

// ---------------------------------------------------------------------
// 11. Duplicate Keys & Overwriting
// ---------------------------------------------------------------------
// PHP does a loose comparison of keys. If duplicate keys are found, PHP overwrites the value of the first key with the value of the second key.

$sample_array = [0=>'foo',1=>'bar','1'=>'baz']; 
print_r($sample_array); 
// logically 1 and '1' are different, but in the case of $sample_array
// php will try to convert the keys and overwrite this assignment
// In this case, '1' will get overwrite by 1, and the output will be ([0] => foo [1] => baz)

$sample_array2 = [true=>'a', 1 => 'b', '1'=>'c', 1.8=>'d'];
print_r($sample_array2); 
// Breakdown:
// true=>'a' : true is converted to the integer key 1, and 'a' is assigned to it.
// 1 => 'b' : The key 1 already exists, so 'b' overwrites 'a'.
// '1'=>'c' : The string key '1' is converted to the integer key 1. 'c' overwrites 'b'.
// 1.8=>'d' : 1.8 is converted to the integer key 1. 'd' overwrites 'c'.
// Therefore, the final array contains only one element with the key 1 and the value d.