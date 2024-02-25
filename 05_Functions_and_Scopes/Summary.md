### Table of Contents

- [Functions](#functions)
  - [Function Structure](#function-structure)
    - [Creating a Function](#creating-a-function)
    - [Return Types and Strict Types](#return-types-and-strict-types)
  - [Parameters and Arguments](#parameters-and-arguments)
    - [Parameters Types](#parameters-types)
    - [Passing by Value vs. Reference](#passing-by-value-vs-reference)
  - [Variable Scope](#variable-scope)
    - [Local Scope](#local-scope)
    - [Global Scope](#global-scope)
    - [Static Scope](#static-scope)
- [Some Important Types of Functions](#some-important-types-of-functions)
  - [Variable Functions](#variable-functions)
  - [Anonymous Functions](#anonymous-functions)
  - [Closures and Accessing Parent Scope](#closures-and-accessing-parent-scope)
  - [Callable Data Type and Callback Functions](#callable-data-type-and-callback-functions)
  - [Higher-Order Functions](#higher-order-functions)
  - [Closures vs. Callables](#closures-vs-callables)
  - [Arrow Functions (PHP 7.4+)](#arrow-functions-php-74)

# Functions

A function is a block of reusable code that performs a specific task. It's defined using the `function` keyword, followed by the function name, parentheses for arguments, and curly braces for the code block.

## Function Structure

### Creating a Function:

To create a function, start with **`function`** keyword. It indicates the beginning of a function definition. Then specify the function name.

```php
function example(parameters) : returnType
	{
	// Function body (code to be executed)
	return value; // Optional return statement
	}

// calling function
example(arguments);
```

- **Return Values:** Functions can optionally return a value using the `return` statement. If no return statement is present, the function implicitly returns `null`.
- **Calling:** Functions are executed by calling their names, followed by parentheses that may contain arguments.
- **Declaring Before Defining:** Functions can be called before they're defined, as long as the definition is accessible before the call. This behavior might change in future PHP versions, so it's recommended to define functions before calling them.
- **Conditional Declaration:** Functions can be declared within conditional statements (like `if` blocks), limiting their scope to the conditional block.
- **Nested Functions:** Functions can be defined within other functions, creating a hierarchy of scope. Inner functions can access variables and functions from outer functions, but not vice versa.

### Return Types and Strict Types

- **Return Type Hints:** You can hint the expected return type of a function using a colon and the type name. This doesn't enforce type checking by default.
- **`strict_types` Directive:** To enforce type checking based on return type hints, enable the `strict_types` directive at the top of your file. This can help catch potential type-related errors.
- **`void` Return Type:** Use `void` when a function doesn't explicitly return a value. Trying to return anything (even `null`) in a `void` function will cause an error under strict types.
- **Nullable Return Types:** Use `?` before the return type to indicate that the function might return `null` or the specified type. This is useful when a function's logic might sometimes not have a valid value to return.
- **Union Types:** Use the pipe symbol (`|`) to specify multiple possible return types. The function's return value must match one of the listed types.
- **Match Expression:** Use the `match` expression (similar to a `switch` statement) to return a specific value based on conditions. This can be more concise and readable than multiple `if` statements.
- **`mixed` Return Type:** Use `mixed` to indicate that the function can return any type, but this should be used cautiously as it bypasses type checking.

## Parameters and Arguments

**Parameters** are the variable names used in the function definition.
**Arguments** are the actual values passed to the function when called.

- Parameter names should be descriptive and unique within the function.
- You can specify the expected type of a parameter using `type hinting`.
- Strict types can be enforced using `declare(strict_types=1)`.

### Parameters Types

- **Default parameters:** You can set a default value for a parameter in case no argument is provided.
- **Optional parameters:** Parameters can be made optional by setting them to `null`.
- **Variadic functions:** These can accept a variable number of arguments using the `...` operator.

### Passing by Value vs. Reference

- By default, arguments are passed by **value**, meaning a copy is used within the function. Changes made inside the function don't affect the original variable.
- Use `&` to pass by **reference**, allowing changes within the function to affect the original variable.

**Other Concepts:**

- **Splat operator (`...`)**: Used in variadic functions and to unpack arrays into named arguments.
- **Named arguments (PHP 8+)**: Allow passing arguments based on parameter names, regardless of order.
- **Associative arrays**: Key-value pairs, useful for passing named arguments using the splat operator.

**Remember:**

- Use meaningful parameter names.
- Consider using type hinting for better type safety.
- Choose between passing by value or reference based on your needs.
- Explore variadic functions and named arguments for flexibility.

## Variable Scope

Variable scope refers to the **visibility and accessibility** of a variable within your PHP code. It determines where you can reference and modify a variable's value. In PHP, there are three main types of scope:

### **1. Local Scope:**

- Variables declared inside a function are **local** to that function. They are only accessible within the curly braces `{}` of the function and cannot be accessed from outside.
- Example:

```php
function greet($name) {
  $message = "Hello, $name!"; // Local variable
  echo $message; // This works
}

greet("Alice"); // This throws an error: $message is not defined
```

### **2. Global Scope:**

- Variables declared **outside** any function are **global**. They are accessible from anywhere in your script. However, overuse of global variables can lead to messy and unmaintainable code.
- Example:

```php
$username = "guest"; // Global variable

function showUsername() {
  global $username; // Accessing global variable
  echo "Username: $username";
}
showUsername();
```

### **3. Static Scope:**

- Variables declared within a function with the `static` keyword retain their values between function calls. This is useful for keeping track of state within a function without creating a new variable each time it's called.
- Example:

```php
function counter() {
  static $count = 0; // Static variable
  $count++;
  echo "Count: $count";
}
counter(); // Output: Count: 1
counter(); // Output: Count: 2
```

### **Accessing Global Variables from Functions:**

- **Preferred Method:** Pass as arguments for better readability and maintainability.
  ```php
  function addOne($number) {
    // Access $number as an argument
    return $number + 1;
  }
  ```
- **Alternative Methods (Use Cautiously):**

  - `global` keyword: Declares a variable as global within a function.

```php
function addOne2() {
global $number;
// Access $number as global
return $number + 1;
}
```

- `$GLOBALS` superglobal array: Accesses all global variables.

```php
        function addOne3() {
          return $GLOBALS['number'] + 1;
        }

```

## Some Important Types of Functions

### Variable Functions

Functions which are stored in variables, allowing dynamic function calls.
Variable Functions are used to pass functions as arguments, create function pointers, or for metaprogramming.

```php
function sayHello() {
    return "Hello, World!";
}

$functionName = "sayHello";
echo $functionName(); // Output: Hello, World!

```

### Anonymous Functions

These are functions without names. They are often assigned to variables or used as arguments.
Anonymous functions are used to pass functions on the fly, create closures, or for concise code.

```php
$greet = function ($name) {
    return "Hello, $name!";
};
echo $greet("John"); // Output: Hello, John!
```

### Closures and Accessing Parent Scope

Closures are Anonymous functions that capture variables from the surrounding scope. They are used to create stateful functions, manage callback functions, or access outer scope data.

```php
$x = 1;
$increment = function ($number) use ($x) {
    return $number + $x;
};
echo $increment(5); // Output: 7
```

### Callable Data Type and Callback Functions:

A data type that can be called dynamically (e.g., functions, closures, strings) are callables. They are used to pass and call functions dynamically, create flexible function-like interfaces.

```php
function sayHello2($name, $callback) {
    $greeting = "Hello, $name!";
    call_user_func($callback, $greeting);
}

sayHello2("John", function ($greeting) {
    echo $greeting . "\n"; // Output: Hello, John!
});

```

### Higher-Order Functions

HOCs are built-in functions that accept functions as arguments (e.g., `array_map`, `array_reduce`). They can also be created depending upon the use cases.
They are used to perform operations on data using functions, manipulate data structures.

```php
$numbers = [1, 2, 3, 4, 5];

// Using an anonymous function with array_map()
$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);
print_r($squaredNumbers); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

```

### Closures vs. Callables

- **Key Difference:** Closures capture variables, callables don't (although they can capture values passed by reference).
- **Similarities:** Both can be called dynamically, used as callback functions.

### Arrow Functions (PHP 7.4+)

Arrow functions provide concise syntax for anonymous functions using `fn (parameters) => expression;`. Their use case is Similar to anonymous functions, but potentially more readable for simple cases.

```php
$greet3 = fn ($name) => "Hello, $name!";
echo $greet3("Alice"); // Output: Hello, Alice!

```

**Important Notes:**

- Use variable functions cautiously to avoid unintended side effects.
- Consider readability and maintainability when choosing function types.
- Closures offer flexibility but can introduce complexity.
- Arrow functions are a convenient option for simple anonymous functions in PHP 7.4+.
