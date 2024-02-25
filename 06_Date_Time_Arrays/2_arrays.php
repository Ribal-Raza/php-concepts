<?php

/** Array Methods: Working with Arrays */

// The array_chunk() function is used to split an array into chunks of specified size.
// It returns a new array containing the chunks.
/*
    array_chunk() arguments:
    1. array: The input array to be split into chunks.
    2. size: The size of each chunk. The last chunk may contain fewer elements.
    3. preserve_keys (optional): A boolean value indicating whether to preserve 
    the keys of the original array in the resulting chunks. Default is false.
*/
// Example 1: Splitting a simple array into chunks
$simpleArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$chunkedSimpleArray = array_chunk($simpleArray, 3);
print_r($chunkedSimpleArray);

// Example 2: Splitting an associative array into chunks
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
$chunkedAssociativeArray = array_chunk($associativeArray, 2, true);
print_r($chunkedAssociativeArray);

// array_combine() function is used to create a new array by using one array for keys and another for its values.
// It returns a new array containing elements from both arrays.
/*
    array_combine() arguments:
    1. keys: The array containing keys.
    2. values: The array containing values.
*/
// Combining two arrays into a new array
$keys = ['name', 'age', 'city', 'country', 'occupation'];
$values = ['John', 30, 'New York', 'USA', 'Developer'];
$combinedArray = array_combine($keys, $values);
print_r($combinedArray);

// array_filter() function is used to filter the elements of an array using a callback function.
// It returns a new array containing the filtered elements.
/*
    array_filter() arguments:
    1. array: The input array to be filtered.
    2. callback (optional): The callback function to use for filtering the array.
    If no callback is provided, all the elements of the array that are equal to false will be removed.
*/
// Filtering an array using a callback function
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filteredNumbers = array_filter($numbers, function ($number) {
    return $number % 2 === 0;
}); // returns an array containing only the even numbers
print_r($filteredNumbers);

// array_values() function is used to get all the values of an array and return them in a new array.
// It returns a new array containing the values of the input array.
/*
    array_values() arguments:
    1. array: The input array whose values are to be returned.
*/
// Getting the values of an associative array
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
$valuesArray = array_values($associativeArray);
print_r($valuesArray); // returns an array containing the values of the input array

// Filter array with no callback - array_filter
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$filteredNumbers = array_filter($numbers);
print_r($filteredNumbers); // returns an array containing all the elements of the input array

// array_keys() function is used to get all the keys of an array and return them in a new array.
// It returns a new array containing the keys of the input array.
/*
    array_keys() arguments:
    1. array: The input array whose keys are to be returned.
    2. search_value (optional): The value to search for in the array. If specified, only the keys with this value will be returned.
    3. strict (optional): A boolean value indicating whether to perform a strict comparison when searching for the value. Default is false.
*/
// Getting the keys of an associative array
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
$keysArray = array_keys($associativeArray);
print_r($keysArray); // returns an array containing the keys of the input array
// array_keys() with search_value 
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
$keysArray = array_keys($associativeArray, 'USA');
print_r($keysArray); // returns an array containing the keys with the value 'USA'

// array_map() function is used to apply a callback function to the elements of an array.
// It returns a new array containing the modified elements.
/*
    array_map() arguments:
    1. callback: The callback function to apply to the elements of the array.
    2. array1: The input array to be modified.
    3. array2 (optional): Additional input arrays to be modified.
*/
// Applying a callback function to the elements of an array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
print_r($squaredNumbers); // returns an array containing the squared elements of the input array
// array_map() with multiple arrays
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [6, 7, 8, 9, 10];
$sum = array_map(fn ($a, $b) => $a + $b, $numbers1, $numbers2);
print_r($sum); // returns an array containing the sum of the elements of the input arrays

//array_merge() function is used to merge two or more arrays into a single array.
// It returns a new array containing the merged elements.
/*
    array_merge() arguments:
    1. array1: The first array to be merged.
    2. array2: The second array to be merged.
    3. ...: Additional arrays to be merged.
*/
// Merging two arrays into a single array
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [6, 7, 8, 9, 10];
$mergedArray = array_merge($numbers1, $numbers2);
print_r($mergedArray); // returns an array containing the merged elements of the input arrays

// merging two associative arrays
$associativeArray1 = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$associativeArray2 = [
    'country' => 'USA',
    'occupation' => 'Developer'
];
$mergedArray = array_merge($associativeArray1, $associativeArray2);
print_r($mergedArray); // returns an array containing the merged elements of the input arrays

// difference between array_merge() and the + operator
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [3, 4, 5, 6, 7];
$mergedArray = array_merge($numbers1, $numbers2);
print_r($mergedArray); // returns an array containing the merged elements of the input arrays
$mergedArray = $numbers1 + $numbers2;
print_r($mergedArray); // returns an array containing the elements of the first array and the unique elements of the second array

// array_merge_recursive() function is used to merge two or more arrays into a single array recursively.
// It returns a new array containing the merged elements.
/*
    array_merge_recursive() arguments:
    1. array1: The first array to be merged.
    2. array2: The second array to be merged.
    3. ...: Additional arrays to be merged.
*/
// Merging two arrays into a single array recursively
$associativeArray1 = [
    'name' => 'John',
    'age' => 30,
    'address' => [
        'city' => 'New York',
        'country' => 'USA'
    ]
];
$associativeArray2 = [
    'address' => [
        'country' => 'Canada'
    ]
];
$mergedArray = array_merge_recursive($associativeArray1, $associativeArray2);
print_r($mergedArray); // returns an array containing the merged elements of the input arrays

// array_reduce() function is used to reduce an array to a single value using a callback function.
// It returns a single value after applying the callback function to the elements of the array.
/*
    array_reduce() arguments:
    1. array: The input array to be reduced.
    2. callback: The callback function to apply to the elements of the array.
    3. initial (optional): The initial value to use for the reduction. If not specified, the first element of the array will be used.
*/
// Reducing an array to a single value using a callback function
$numbers = [1, 2, 3, 4, 5];
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
echo $sum . "\n"; // returns the sum of the elements of the input array

// reducing an array to a single value with an initial value
$numbers = [1, 2, 3, 4, 5];
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number, 10);
echo $sum . "\n"; // returns the sum of the elements of the input array plus the initial value

//  array_search() function is used to search for a value in an array and return its corresponding key.
// It returns the key of the value if found, or false otherwise.
/*
    array_search() arguments:
    1. needle: The value to search for in the array.
    2. haystack: The input array to search in.
    3. strict (optional): A boolean value indicating whether to perform a strict comparison when searching for the value. Default is false.
*/
// Searching for a value in an array
$numbers = [1, 2, 3, 4, 5];
$key = array_search(3, $numbers);
echo $key . "\n"; // returns the key of the value 3 in the input array

// in_array() function is used to check if a value exists in an array.
// It returns true if the value is found, or false otherwise.
/*
    in_array() arguments:
    1. needle: The value to search for in the array.
    2. haystack: The input array to search in.
    3. strict (optional): A boolean value indicating whether to perform a strict comparison when searching for the value. Default is false.
*/
// Checking if a value exists in an array
$numbers = [1, 2, 3, 4, 5];
$exists = in_array(3, $numbers);
var_dump($exists); // returns true if the value exists in the input array, or false otherwise

// array_diff() function is used to compute the difference between two or more arrays.
// It returns a new array containing the elements that are present in the first array but not in the other arrays.
/*
    array_diff() arguments:
    1. array1: The first array to compare.
    2. array2: The second array to compare.
    3. ...: Additional arrays to compare.
*/
// Computing the difference between two arrays
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [3, 4, 5, 6, 7];
$difference = array_diff($numbers1, $numbers2);
print_r($difference); // returns an array containing the elements that are present in the first array but not in the second array

// array_diff_assoc() function is used to compute the difference between two or more arrays with additional index check.
// It returns a new array containing the elements that are present in the first array but not in the other arrays, including their keys.
/*
    array_diff_assoc() arguments:
    1. array1: The first array to compare.
    2. array2: The second array to compare.
    3. ...: Additional arrays to compare.
*/
// Computing the difference between two arrays with additional index check
$associativeArray1 = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$associativeArray2 = [
    'name' => 'John',
    'age' => 30,
    'country' => 'USA'
];
$difference = array_diff_assoc($associativeArray1, $associativeArray2);
print_r($difference); // returns an array containing the elements that are present in the first array but not in the second array, including their keys

// array_diff_key() function is used to compute the difference between two or more arrays using keys for comparison.
// It returns a new array containing the elements that are present in the first array but not in the other arrays, based on their keys.
/*
    array_diff_key() arguments:
    1. array1: The first array to compare.
    2. array2: The second array to compare.
    3. ...: Additional arrays to compare.
*/
// Computing the difference between two arrays using keys for comparison
$associativeArray1 = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$associativeArray2 = [
    'name' => 'John',
    'age' => 30,
    'country' => 'USA'
];
$difference = array_diff_key($associativeArray1, $associativeArray2);
print_r($difference); // returns an array containing the elements that are present in the first array but not in the second array, based on their keys

// array_diff_uassoc() function is used to compute the difference between two or more arrays using a user-defined comparison function for the indices.
// It returns a new array containing the elements that are present in the first array but not in the other arrays, based on the user-defined comparison function.
/*
    array_diff_uassoc() arguments:
    1. array1: The first array to compare.
    2. array2: The second array to compare.
    3. ...: Additional arrays to compare.
    4. callback: The user-defined comparison function to use for comparing the indices.
*/
// Computing the difference between two arrays using a user-defined comparison function for the indices
$associativeArray1 = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];
$associativeArray2 = [
    'name' => 'John',
    'age' => 30,
    'country' => 'USA'
];
$difference = array_diff_uassoc($associativeArray1, $associativeArray2, fn ($a, $b) => $a <=> $b);
print_r($difference); // returns an array containing the elements that are present in the first array but not in the second array, based on the user-defined comparison function

// asort() function is used to sort an array in ascending order, according to the values.
// It returns true on success, or false on failure.
/*
    asort() arguments:
    1. array: The input array to be sorted.
    2. sort_flags (optional): The sorting behavior to use. Default is SORT_REGULAR.
*/
// Sorting a simple array in ascending order
$simpleArray = [5, 3, 8, 2, 9, 1, 6, 4, 7];
asort($simpleArray);
print_r($simpleArray); // returns the sorted array
// Sorting an associative array in ascending order according to the values
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
asort($associativeArray);
print_r($associativeArray); // returns the sorted associative array

// arsort() function is used to sort an array in descending order, according to the values.
// It returns true on success, or false on failure.
/*
    arsort() arguments:
    1. array: The input array to be sorted.
    2. sort_flags (optional): The sorting behavior to use. Default is SORT_REGULAR.
*/
// Sorting a simple array in descending order
$simpleArray = [5, 3, 8, 2, 9, 1, 6, 4, 7];
arsort($simpleArray);
print_r($simpleArray); // returns the sorted array

// ksort() function is used to sort an array in ascending order, according to the keys.
// It returns true on success, or false on failure.
/*
    ksort() arguments:
    1. array: The input array to be sorted.
    2. sort_flags (optional): The sorting behavior to use. Default is SORT_REGULAR.
*/
// Sorting an associative array in ascending order according to the keys
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => 'USA',
    'occupation' => 'Developer'
];
ksort($associativeArray);
print_r($associativeArray); // returns the sorted associative array

// usort() function is used to sort an array using a user-defined comparison function.
// It returns true on success, or false on failure.
/*
    usort() arguments:
    1. array: The input array to be sorted.
    2. callback: The user-defined comparison function to use for sorting the array.
*/
// Sorting a simple array using a user-defined comparison function
$simpleArray = [5, 3, 8, 2, 9, 1, 6, 4, 7];
usort($simpleArray, fn ($a, $b) => $a <=> $b);
print_r($simpleArray); // returns the sorted array

// Array destructuring
// Array destructuring is a feature that allows you to unpack the values of an array into individual variables.
// It can be used to assign the values of an array to multiple variables in a single statement.
// Example 1: Assigning the values of an array to multiple variables
$person = ['John', 30, 'New York', 'USA'];
[$name, $age, $city, $country] = $person;
echo $name . "\n"; // John
echo $age . "\n"; // 30

// Example 2: Swapping the values of two variables using array destructuring
$a = 10;
$b = 20;
[$a, $b] = [$b, $a];
echo $a . "\n"; // 20
echo $b . "\n"; // 10

// Array destructuring with list() function
// The list() function is used to assign the values of an array to multiple variables in a single statement.
// It can be used to unpack the values of an array into individual variables.
// Example 1: Assigning the values of an array to multiple variables using list() function
$person = ['John', 30, 'New York', 'USA'];
list($name, $age, $city, $country) = $person;
echo $name . "\n"; // John
echo $city . "\n"; // 30

// destructuring nested arrays
// Example 1: Destructuring a nested array
$person = ['John', 30, ['city' => 'New York', 'country' => 'USA']];
[$name, $age, ['city' => $city, 'country' => $country]] = $person;
echo $name . "\n"; // John
echo $city . "\n"; // New York
echo $country . "\n"; // USA
