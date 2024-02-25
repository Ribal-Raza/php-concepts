<?php

/** Variable Scopes
 * There are two types of variable scopes in PHP: local and global.
 * Local Scope means that a variable is only available within the function where it is defined.
 * Global Scope means that a variable is available anywhere in the script. 
 * Global scope variables are also available in included or required files.
 */
// global scope
$number = 10;
// $number variable can be accessed anywhere in the script. and also available in "include" and "require" files.

// to access the variables in the global scope from within a function, we have three options:
// 1. Pass the variable as an argument to the function.
function addOne($number)
{
    return $number + 1;
}
echo addOne($number) . "\n"; // Output: 11
// 2. Use the global keyword to access the variable from within the function.
function addOne2()
{
    global $number;
    return $number + 1;
}
echo addOne2() . "\n"; // Output: 11
// 3. Use the $GLOBALS superglobal array to access the variable from within the function.
function addOne3()
{
    return $GLOBALS['number'] + 1;
}
echo addOne3() . "\n"; // Output: 11

// but you should avoid the 'global' and '$GLOBALS' methods as much as possible because it makes the code harder to read and maintain. 
// Instead, you should pass the variable as an argument to the function.

// local scope
function addOne4()
{
    $number2 = 10;
    return $number2 + 1;
}
echo addOne4() . "\n"; // Output: 11
// $number2 variable is only available within the addOne4() function.
// If you try to access $number2 outside the function, you will get an error.

// Static variables
// A static variable is a variable that is only initialized once and retains its value between function calls.
// A local variable gets destroyed when the function call ends, but a static variable does not.
// You can define a static variable using the static keyword.
function increment()
{
    static $counter = 5;
    $counter++;
    return $counter;
}
echo increment() . "\n"; // Output: 6
echo increment() . "\n"; // Output: 7