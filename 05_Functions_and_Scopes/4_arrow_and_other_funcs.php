<?php

/** Arrow, Anonymous, Variable, Callable, Closure Functions
 * Anonymouse functions or Lambda functions are functions without a name.These are useful when you need to pass a function as an argument to another function. or when you need to define a function on the fly.
 * Arrow functions are a more concise way to write anonymous functions. They were introduced in PHP 7.4.
 * Variable functions are functions that are called based on the value of a variable. For example, you can use a variable to call a function.
 * Callable functions are functions that can be called dynamically based on the value of a variable.
 * Difference between Variable and Callable functions is that a variable function is called based on the value of a variable, whereas a callable function is called based on the value of a variable or an expression.
 * Closures are anonymous functions that can capture variables from the parent scope. They are useful for creating callback functions and for passing functions as arguments to other functions.
 * Callback functions are functions that are passed as arguments to other functions.
 */

// Variable functions
function sayHello()
{
    return "Hello, World!\n";
}
$functionName = "sayHello";
echo $functionName(); // Output: Hello, World!
// PHP will call the function whose name is stored in the $functionName variable.
// If no function with the name stored in the variable exists, PHP will throw an error.

// Anonymous functions
// Anonymous functions are functions without a name. But in order to use them, you need to assign them to a variable or pass them as an argument to another function.
$greet = function ($name) {
    return "Hello, $name!\n";
};
echo $greet("John"); // Output: Hello, John!

// Closures and Accessing Parent Scope
// Closures are anonymous functions that can capture variables from the parent scope. They are useful for creating callback functions and for passing functions as arguments to other functions.
// A closure is a function that has access to its own scope, the scope of the parent function, and the global scope.
$x = 1;
$increment = function ($number) use ($x) {
    return $number + $x;
};
echo $increment(5) . "\n"; // Output: 7

// Callable data type and Callback functions
// A callable is a data type that can be called dynamically based on the value of a variable or an expression. In easier terms, a callable is a variable that can be called as a function.
// A callback function is a function that is passed as an argument to another function.
function sayHello2($name, $callback)
{
    $greeting = "Hello, $name!";
    call_user_func($callback, $greeting);
}
sayHello2("John", function ($greeting) {
    echo $greeting . "\n"; // Output: Hello, John!
});
// Working of above code:
// The sayHello2() function takes two arguments: $name and $callback.
// The $callback argument is a callable function that takes one argument.
// The call_user_func() function is used to call the $callback function.
// The call_user_func() function takes two arguments: the $callback function and the $greeting variable.
// The sayHello2() function calls the $callback function and passes the $greeting variable as an argument.


// There are built-in functions in PHP that accepts a function as an argument. These functions are called higher-order functions.
// Some of the built-in higher-order functions in PHP are array_map(), array_filter(), array_reduce(), usort(), uasort(), uksort(), array_walk(), array_walk_recursive(), array_filter(), array_reduce(), array_map(), array_walk(), array_walk_recursive(), usort(), uasort(), uksort(), and usort().
// Let's see an example of using the array_map() function.
$numbers = [1, 2, 3, 4, 5];
// Now there are different ways to pass a function as an argument to the array_map() function.
// 1. Using a named function
function square($number)
{
    return $number * $number;
}
$squaredNumbers = array_map('square', $numbers);
print_r($squaredNumbers); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// 2. Using an anonymous function
$squaredNumbers2 = array_map(function ($number) {
    return $number * $number;
}, $numbers);
print_r($squaredNumbers2); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
// 3. Using a closure
$x = 10;
$squaredNumbers3 = array_map(function ($number) use ($x) {
    return $number * $number + $x;
}, $numbers);
print_r($squaredNumbers3); // Output: Array ( [0] => 11 [1] => 14 [2] => 19 [3] => 26 [4] => 35 )
// 4. Using a variable function
function square2($number)
{
    return $number * $number;
}
$functionName2 = 'square2';
$squaredNumbers4 = array_map($functionName2, $numbers);
print_r($squaredNumbers4); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// Closure vs Callable
// Main difference between a closure and a callable is that a closure can capture variables from the parent scope, whereas a callable cannot.
// Other than that, a closure is a type of callable.
// A closure is a function that has access to its own scope, the scope of the parent function, and the global scope.
// A callable is a data type that can be called dynamically based on the value of a variable or an expression.


// Arrow functions
// Arrow functions are a more concise way to write anonymous functions. They were introduced in PHP 7.4.
// Arrow functions are useful when you need to pass a function as an argument to another function or when you need to define a function on the fly.
// Syntax: fn (parameters) => expression;
$greet2 = fn ($name) => "Hello, $name!\n";
echo $greet2("John"); // Output: Hello, John!
// Arrow functions can be passed as arguments to other functions.
$numbers2 = [1, 2, 3, 4, 5];
$squaredNumbers5 = array_map(fn ($number) => $number * $number, $numbers2);
print_r($squaredNumbers5); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )