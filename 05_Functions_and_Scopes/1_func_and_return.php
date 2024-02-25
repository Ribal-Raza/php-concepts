<?php

/** functions 
 * function are a block of code that can be called and executed at any point in the program
 * creating a basic function
 * starts with the keyword function, followed by the function name
 * arguments are passed in the parenthesis (optional)
 */
function foo()
{
    echo "Hello World\n";
}

// calling or invoking a function


// returning a value from a function
function foo1()
{
    return "Hello World!";
}

// a function without return statement returns null
var_dump(foo()); //output: NULL
var_dump(foo1()); //output: string(13) "Hello World"


// functions can be called before they are defined
foo2(); //output: Hello World
function foo2()
{
    echo "Hello World\n";
}

// declaring functions conditionally
if (true) {
    function foo3()
    {
        echo "Hello World!!\n";
    }
}
foo3(); //output: Hello World!!

// functions withing functions
function foo4()
{
    echo "Hello World!!!\n";
    function bar()
    {
        echo "Hello World!!!!\n";
    }
}

// now the bar() function will only be available after foo4() is called. 
// otherwise, it will throw an error
foo4(); //output: Hello World!!!
bar(); //output: Hello World!!!!

// return types and strict types
// we can hint the return type of a function using the colon followed by the type
// we can also use the strict_types directive to enforce the return type
function foo5(): int
{
    return 2;
}
// the return statement doesnot prints the returned value until it is echoed
echo (foo5()); //output: 2

// we can also use the strict_types directive to enforce the return type
// strict_types directive is declared at the top of the file

// if a function is not expected to return anything, we can use the void type
function foo6(): void
{
    echo "\nHello World!!!!\n";
}
foo6(); //output: Hello World!!!!

// but it will throw an error if we try to return anything, even null
// function foo7(): void
// {
//     return null;
// }

// nullable return types
// we can also use the nullable return types by using the ? before the type
// this means that the function can return the type or null
function foo8(): ?int
{
    return null;
}
var_dump(foo8()); //output: NULL

// union types
// we can specify multiple return types using the pipe symbol
function foo9(): int|float
{
    return 2.5;
}
var_dump(foo9()); //output: float(2.5)

// if you want to return a value of a specific type, you can use the match expression
function foo10(): int
{
    return match (2) {
        1 => 1,
        2 => 2,
        3 => 3,
    };
    // match expression is similar to switch statement
}
var_dump(foo10()); //output: int(2)

// mixed return type
// we can use the mixed type to specify that the function can return any type
function foo11(): mixed
{
    return [1, 2, 3];
}
var_dump(foo11()); //output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
