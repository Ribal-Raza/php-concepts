<?php

/** Function Parameters and Arguments
 * Parameters and arguments are used to pass information.
 * Parameters are the names used in the function definition.
 * Arguments are the real values passed to (and received by) the function.
 * Parameter names should be unique within the same function.
 * Parameter names should be meaningful and descriptive.
 */

// Function definition
function greet($name)
{
    echo "Hello, $name!";
}
greet('John'); // Output: Hello, John!

// Parameters type hinting
// Just like with return type hinting, you can also specify the type of the parameter.
function add(int $a, int $b)
{
    return $a + $b;
}
echo "\n" . add(5, 10); // Output: 15
// but there are edge cases where type hinting can be bypassed
echo "\n" . add('5', 10.0); // Output: 15
// to avoid this, you can use strict mode at the top of the file
// declare(strict_types=1);

// parameters with union types
function displayAge($name, int|float $age)
{
    echo "Name: $name, Age: $age years old\n";
}
displayAge('John', 30); // Output: Name: John, Age: 30
displayAge('Jane', 30.5); // Output: Name: Jane, Age: 30.5

// It is recommeded to use strict mode to avoid edge cases espacially with type hinting

// Default parameters
// You can specify a default value for a parameter if no argument is passed.
function greet2($name = 'John')
{
    echo "Hello, $name!";
}
greet2(); // Output: Hello, John!

// Optional parameters
// You can also make a parameter optional by setting it to null.
function greet3($name = null)
{
    if ($name) {
        echo "\nHello, $name!\n";
    } else {
        echo "\nHello, there!\n";
    }
}
greet3(); // Output: Hello, there!

// when there are multiple parameters, optional parameters should be at the end
// otherwise, you will get an error
function greet4($greeting, $name = null)
{
    if ($name) {
        echo "$greeting, $name!\n";
    } else {
        echo "$greeting, there!\n";
    }
}
greet4('Hi', 'John'); // Output: Hello, there!

/** Passing arguments with values vs references
 * By default, arguments are passed by value (the value is copied).
 * You can pass arguments by reference using the & symbol.
 * Passing by reference means the function works with the original value.
 * which means that any changes made to the parameter inside the function will affect the original value. 
 */
// Passing by reference
function addOne(&$number)
{
    return $number += 1;
}
$value = 10;
echo addOne($value) . "\n"; // Output: 11
echo $value . "\n"; // Output: 11

// Variadic functions
// A variadic function is a function that accepts a variable number of arguments.
// Splat operators ... is used to indicate that a function accepts a variable number of arguments.
// ... is also called three-dots or ellipsis. But in PHP, it is called the splat operator.
function sum(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}
echo sum(1, 2, 3, 4, 5) . "\n"; // Output: 15

// splat operator captures all the arguments stores them in an array.
// which means that array functions can be used on the arguments
function sum2(...$numbers)
{
    return array_sum($numbers); // array_sum() sums all the values in an array
}
echo sum2(1, 2, 3, 4, 5) . "\n"; // Output: 15

// you can also specify required parameters before the variadic parameter or splat operator
function sum3($initial, ...$numbers)
{
    $result = $initial;
    foreach ($numbers as $number) {
        $result += $number;
    }
    return $result;
}
echo sum3(10, 1, 2, 3, 4, 5) . "\n"; // Output: 25

// you can also use the splat operator to pass an array to a function as arguments
function sum4($a, $b, $c)
{
    return $a + $b + $c;
}
$numbers = [1, 2, 3];
echo sum4(...$numbers) . "\n"; // Output: 6

// positional and named arguments
// Positional arguments are the default way of passing arguments to a function.
// Named arguments are a new way of passing arguments to a function in PHP 8.
// Named arguments allow you to pass arguments to a function based on the parameter name.
// This way you no longer need to worry about the order of the arguments.
function greet5($greeting, $name)
{
    echo "$greeting, $name!\n";
}
greet5(name: 'John', greeting: 'Hey there'); // Output: Hi, John!

// if an associative array is passed to a function, it can be unpacked using the splat operator
// and the named arguments can be used. In this case, names of the keys in the array must match the parameter names.
function greet6($greeting, $name, $question)
{
    echo "$greeting, $name! $question\n";
}
$arguments = ['name' => 'John', 'greeting' => 'Hey there', 'question' => 'How are you?'];
greet6(...$arguments); // Output: Hey there, John! How are you?
