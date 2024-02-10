### Table of Contents

- [Expressions](#expressions)
  - [Understanding Expressions](#understanding-expressions)
  - [Types of Expressions](#types-of-expressions)
  - [Why Everything is an Expression?](#why-everything-is-an-expression)
- [**Data Types**](#data-types)
  - [Booleans](#1-booleans)
    - [Case Insensitive](#case-insensitive-nature)
    - [Booleans in Control Flows and Looping Statements](#booleans-in-control-flows-and-looping-statements)
    - [Truthy and Falsy Values](#truthy-and-falsy-values)
    - [Built-In Functions related to Booleans](#php-built-in-functions-related-to-booleans)
  - [Integers](#2-integers)
    - [Integer Size](#integers-size)
    - [Integers Type Casting](#integers-type-casting)
    - [Checking Integer Type](#checking-integer-type)
  - [Floats](#3-floats)
    - [Floats Size, Accuracy, and Special Values](#floats-size-accuracy-and-special-values)
    - [Floats Rounding (floor and ceil)](#floats-rounding-floor-and-ceil)
    - [Floats Equality Traps](#floats-equality-traps)
    - [Floats Type Casting](#floats-type-casting)
    - [Verification Methods for Floats](#verification-methods-for-floats)
  - [Strings](#4-strings)
    - [Single vs. Double Quotes](#single-vs-double-quotes)
    - [String Concatenation](#string-concatenation)
    - [Indexes: Accessing String Characters](#indexes-accessing-string-characters)
    - [Heredocs and Nowdocs](#heredocs-and-nowdocs)
  - [null / NULL](#5-null--null)
    - [Null Common and Uncommon Edge cases](#null-common-and-uncommon-cases)
    - [Detecting Null](#detecting-null)
  - [Arrays](#arrays)
    - [Array Initialization](#array-initialization-methods)
    - [Indexed Arrays](#indexed-arrays)
    - [Undefined Keys and Existance Checks](#undefined-keys-and-existence-checks)
    - [Array Mutation](#array-mutation-dynamic-updates)
    - [Associative Arrays](#associative-arrays)
    - [Multi-dimensional Arrays](#multidimensional-arrays-nested-data-structures)
    - [Removing Elements from Arrays](#removing-elements-from-arrays)
    - [Automatic Key and Indexing](#automatic-key-and-indexing-in-php-arrays)

## Expressions

Expressions are fundamental units of code that evaluate to a single value. They combine variables, literals, operators, and function calls to perform calculations, manipulate data, and produce results.

- **Prevalence:** PHP embraces expression-oriented programming, where nearly everything you write (except statements and control structures) can be considered an expression. This enables a flexible and concise coding style.

### Understanding Expressions

- **Evaluating to a Value:** Every expression returns a value after computation, which can be used further in assignments, function calls, or other expressions.
- **Elements:**

  - **Variables:** Represent named containers that hold values during program execution.
  - **Literals:** Constant values directly embedded in the code (e.g., numbers, strings, booleans).
  - **Operators:** Symbols that perform operations on values (e.g., arithmetic, comparison, logical).
  - **Function Calls:** Invoke functions to execute specific tasks and often return values.

- **Examples:**

  - `$sum = 2 + 3;` (Expression evaluating to 5)
  - `$name = "John";` (Assigning string literal to a variable)
  - `if ($age >= 18) { ...; }` (Conditional expression within an `if` statement)
  - `$result = abs(-5);` (Function call `abs()` returning the absolute value of -5)

### Types of Expressions

- **Arithmetic:** Perform mathematical calculations (`+`, `-`, `*`, `/`, `%`, etc.).
- **Comparison:** Evaluate relationships between values (`==`, `!=`, `<`, `>`, etc.).
- **Logical:** Combine truth values (`&&`, `||`, `!`).
- **Assignment:** Assign values to variables (`=`, `+=`, `-=`, `*=`, etc.).
- **Other:** Casting, increment/decrement, string operations, function calls, and more.

### Why Everything is an Expression?

- **Readability:** Simple expressions contribute to cleaner code.
- **Flexibility:** Expressions can be embedded in various contexts, enabling versatile syntax.
- **Chaining:** Multiple expressions can be chained together through their return values.
- **Functional Programming:** PHP supports functional programming paradigms where expressions hold values and can be passed to functions.

## Data types

## 1. Booleans

Booleans represent logical truth values: **true** or **false**.

- **In Programming:** They serve as fundamental building blocks for decision-making and controlling program flow.
- **In PHP:** Used for conditional statements, loops, function return values, and various comparisons.

### Case-Insensitive Nature

- PHP treats boolean values **case-insensitively**.
- `TRUE`, `True`, `true`, and `tRuE` are all recognized as true.
- This can be convenient but requires caution to avoid unintended behavior due to miscapitalization.

### Booleans in Control Flows and Looping Statements

Booleans shine in Control Flows and Looping statements

- **Control Flow:** Use boolean expressions to determine which code blocks to execute based on conditions.

  - `if ($age >= 18) { echo "Welcome!"; }`

- **Looping:** Define conditional loops that continue as long as a boolean expression remains true.
  - `while ($counter < 10) { ... }`

### Truthy and Falsy Values

PHP automatically converts some values to booleans for comparisons. This behviour is called **Type Coercion OR Type Juggling**

- **Truthy Values:** Evaluate to true: anything except `"0"`, `""`, `"null"`, `"false"`, `false`, `[]`, and scalar type casted to `false`.
- **Falsy Values:** Evaluate to false: `"0"`, `""`, `"null"`, `"false"`, `false`, `[]`, and scalar type casted to `false`.

### PHP Built-In Functions related to Booleans

- **`is_bool()`:** Explicitly checks if a value is a boolean data type.
- **`empty()`:** Checks if a variable is empty (no value, including 0, "", and "0").
- **`isset()`:** Checks if a variable is set and has a value (useful for avoiding undefined variable errors).

## 2. Integers

Integers represent whole numbers without decimal points (negative number, positive number and zero). They are essential for calculations, counting, indexing, storing numerical data, and performing mathematical operations. They can be defined as simple numbers, binary numbers, hexadecimal numbers and octal numbers. For example:

```php
$number =  20; // base 10 or decimal
$binaryInteger =  0b11; // binary integer
$octalInteger =  055; // octal
$hexadecimalInt =  0x3A; // hexa-decimal
```

Use prefixes: `0b` for binary, `0o` for octal, `0x` for hexadecimal.

### Integers Size

In PHP, Size of Integers depends on the system architecture (32-bit: ~2 billion, 64-bit: ~9 quintillion).

- **PHP Constants:**
  - `PHP_INT_SIZE`: Maximum value an integer can hold on the system.
  - `PHP_INT_MIN`: Minimum value an integer can hold.
  - `PHP_INT_MAX`: Maximum positive value an integer can hold.
- **Overflow:** Adding beyond the limit results in type casting to floats (e.g., adding 1 to PHP_INT_MAX results in float value).

### Integers Type Casting

- **`intval()`:** Converts various data types to integer, using base 10 by default.
- `(int) 24`: (int) before a value also converts it to integers
- **Specific functions:** Use for specific bases: `octdec()`, `bindec()`, `hexdec()`.
- **Examples:**
  - `intval("10", 2)` converts "10" (binary) to 2.
  - `hexdec("FF")` converts "FF" (hexadecimal) to 255.
  - **Casting strings:** Numeric characters are converted, non-numeric characters are ignored. `$empty = (int) "" \\ converted to 0`, `$string = (int) "24" \\ converted to 24`

### **Checking Integer Type**

- **`is_int()`:** Explicitly checks if a value is of type integer.
- **`gettype()`:** Returns the data type of a variable (including "integer").
- **`var_dump()`:** Provides detailed information about a variable, including its type.

## 3. Floats

Floats (floating-point numbers) approximate real numbers with decimals, enabling calculations beyond integers. In PHP, Floats are standard data type for representing real numbers with decimal components.
example: `$decimalNumber = 2.67`

- **Exponential Form:** Can be expressed in scientific notation for compact representation (e.g., 3.14159e+003 = 3141.59).

### Floats Size, Accuracy, and Special Values

- **Float Size:** Depends on system architecture (32-bit: ~7 digits precision, 64-bit: ~15-17 digits).
- **PHP Constants:**

  - `PHP_FLOAT_MAX`: Maximum positive float value on the system.
  - `PHP_FLOAT_MIN`: Minimum positive float value on the system.
  - `NAN`: Represents "Not a Number" (e.g., division by zero).
  - `INF`: Represents positive or negative infinity.

- **Precision:** Limited decimal places due to internal binary representation. Rounding errors can occur.
- **Overflow/Underflow:** Exceeding limits results in INF or 0, respectively.

### Floats Rounding (floor and ceil)

- **`floor()`:** Rounds down to the nearest integer (towards negative infinity).
- **`ceil()`:** Rounds up to the nearest integer (towards positive infinity).
- **Exceptions:** Binary representation can lead to unexpected results:

  - `ceil((0.1 + 0.2) * 10)` returns 4 (Internally 0.1+0.3 becomes 0.300000004 and when is multiplied by 10, it rounds off to 4).
  - `floor((0.7  +  0.1)  *  10.0)` returns 7 (Internally 0.7+0.1 becomes 0.7999999 and when is multiplied by 10, it rounds off to 7).

- **Alternatives:** Use `round()` for general rounding or consider specialized rounding functions for specific contexts.

### Floats Equality Traps

- **Direct Comparison:** Don't compare two floating values directly. It Can be misleading due to limited precision.
  - `0.3 == (1 - 0.7)` might not be true due to rounding errors.

Instead, use following approaches.

- **Epsilon-Based Comparison:** Use a small tolerance value (e.g., `abs($a - $b) < 0.0001`) to account for errors.
- **Specialized Libraries:** Consider libraries like `GMP` for high-precision arithmetic when needed.

### Floats Type Casting

- **`floatval()`:** Converts various data types to float.
- **Specific functions:** Use for currency or formatting: `money_format()`, `number_format()`.
- **Examples:**
  - `floatval("3.14")` converts the string "3.14" to a float.
  - `money_format("%.2n", 12.3456)` formats the float 12.3456 as currency.

### Verification Methods for Floats

- **`is_float()`:** Explicitly checks if a value is of type float.
- **`gettype()`:** Returns the data type of a variable (including "double").
- **`var_dump()`:** Provides detailed information about a variable, including its type and value.

## 4. Strings

Strings are sequences of characters used to represent text, names, labels, and various textual data. In PHP, strings are Variable-length data type, allowing strings of any size.

### Single vs. Double Quotes

- **Single Quotes (' '):**

  - Literal interpretation, no variable or escape sequence evaluation within the string.
  - Useful for short strings or those containing special characters without escaping.

- **Double Quotes (" "):**
  - Can include variables, escape sequences (e.g., `\n` for newline), and embedded expressions.
  - More flexible for complex strings involving dynamic content or formatting.

### String Concatenation

There are following ways to concatinate strings:

- **Dot (.) operator:** Concatenates two strings directly (e.g., `$name = "John" . " Doe";`).
- **`.=` operator:** Appends a string to an existing variable (e.g., `$greeting .= " Welcome!";`).
- **`sprintf()` function:** Powerful formatting with placeholders (e.g., `sprintf("Hello, %s!", $name);`).

### Indexes: Accessing String Characters

- **Indexes:** Start from 0, represent positions of characters.
- **Accessing:** Use square brackets with the index (e.g., `$firstChar = $name[0];`).
- **Modifying:** Assign a new value within square brackets (e.g., `$name[0] = 'J';`).
- **Negative Indexes:** Count from the end (e.g., `$lastChar = $name[-1];`).

### Heredocs and Nowdocs

- **Heredocs:**

  - Start with `<<<`, end with delimiter (e.g., `<<<EOT\nThis is a \nheredoc string.\nEOT;`).
  - Preserve newlines and whitespace within the string.

- **Nowdocs:**

  - Start with `<<<`, end with non-word delimiter (e.g., `<<<NOWDOC\nThis is a \nnowdoc string.\nNOWDOC;`).
  - Interprets newlines literally, ignores other escape sequences.

**`nl2br()` Function**: Converts newlines (`\n`) within a string to HTML `<br>` tags. - **Syntax:** `nl2br($string);` - **Use case:** Formatting multiline text for web output.

## 5. null / NULL

In programming, null signifies the **absence of a value**. It represents no data being assigned to a variable. **In PHP** `null` is a special case data type, distinct from other types like strings or integers.

### Null Common and Uncommon Cases

- **Explicit Assignment:** `$variable = null;`
- **Function Return:** Functions returning no value implicitly return `null`.
- **Variable Not Yet Defined:** Accessing an undeclared variable results in `null`.
- **Empty Arrays:** Empty arrays evaluate to `null` in some contexts.
- **Unpacking Arrays:** Missing elements in array unpacking become `null`.
- **Non-Existent Properties:** Accessing non-existent object properties leads to `null`.

### Detecting Null

- **`is_null($value)`:** Returns true if the value is `null`, false otherwise.
- **Strict Comparisons:** Use `$value === null` or `$value !== null` for exact null checks.
- **Loose Comparisons:** Avoid `$value == null` or `$value != null` due to potential type juggling.
- **Null Coalescing Operator (PHP 7.0+):** `$value ?? $default` returns $default if $value is null, otherwise $value.

## 6. Arrays

Arrays are ordered collections of values, storing multiple data items under a single variable name. Arrays are useful in storing lists, managing multiple related values, representing datasets, implementing data structures like stacks and queues, and various other purposes.

### Array Initialization Methods

- **`array()`:** Explicitly declare elements (e.g., `$colors = array("red", "green", "blue");`).
- **Square brackets:** Shorthand syntax (e.g., `$fruits = ["apple", "banana", "orange"];`).
- **`range()` function:** Generate numbered sequences (e.g., `$numbers = range(1, 5);`).
- **Type casts:** Convert other data types (e.g., `$string_array = (array) "hello";`).

### Indexed Arrays

PHP arrays follow 0 based index, means the first item of array has index 0. In indexed arrays, elements are identified by numerical indices/values starting from 0.

- By index directly (e.g., `$firstColor = $colors[0];`).
- Looping through all elements (e.g., `foreach ($fruits as $fruit) { echo "$fruit "; }`).
- String interpolation for key access (e.g., `echo "The second fruit is {$fruits[1]}";`).

### Undefined Keys and Existence Checks

- **Automatic Indexing:** When you assign a value without a specific index, PHP assigns the next available integer index.
- **Checking Key/Item Existence:**
  - `array_key_exists($key, $array)`: True if the key exists, even if its value is `null`.
  - `isset($array[$key])`: True if the key exists and has a value (not `null`).
  - Negative indices are not supported for direct access; use modulo (`%`) to calculate equivalent positive indices.

### Array Mutation: Dynamic Updates

- **Adding New Elements:**
  - Using square brackets and an index (e.g., `$colors[] = "purple";`).
  - `array_push()` function to append to the end (e.g., `array_push($fruits, "mango");`).
  - `array_unshift()` function to insert at the beginning (e.g., `array_unshift($fruits, "kiwi");`).
- **Re-assigning:** Assign a new array value to an existing index (e.g., `$fruits[2] = "pineapple";`).

### Associative Arrays

Associative Arrays have their keys defined explicitly.

- **Defining Keys:** Use strings or integers (e.g., `$person = array("name" => "John", "age" => 30);`).
  - **Key data type:** Strings are recommended for better readability and flexibility.
- **Accessing Elements:** Use the key directly within square brackets (e.g., `$age = $person["age"];`).
  - Duplicate keys: The last assigned value for a key is used (`$person["1"] = "one"; $person[1] = "two"; // Only "two" exists`).
- **Modifying:** Same principles as indexed arrays, but use keys instead of indices.

### Multidimensional Arrays: Nested Data Structures

- **Indexed Multidimensional:** Arrays within arrays, accessed using nested indices (e.g., `$data[0][1]`).Example:
  ```php
  $data = [
  			[1, 2, 3],
  			[4, 5, 6],
  			["apple", "banana", "orange"],
  		];
  ```
- **Associative Multidimensional:** Arrays with associative keys within, accessed using nested keys (e.g., `$data["person"]["name"]`). Example:

  ```php
  	$users = [
  	    "john" => [
  	        "name" => "John Doe",
  	        "age" => 30,
  	        "city" => "New York",
  		    ],
  	    "jane" => [
  	        "name" => "Jane Smith",
  	        "age" => 25,
  	        "city" => "Los Angeles",
  		    ],
  		];

  ```

- **Modification:** Similar to regular arrays, but apply nested indexing/keys appropriately.

### Removing Elements from Arrays

- **`array_pop()`:** Removes and returns the last element (e.g., `$lastFruit = array_pop($fruits);`).
- **`array_shift()`:** Removes and returns the first element (e.g., `$firstColor = array_shift($colors);`).
- **`unset($array[$key])`:** Removes the element with the specified key (e.g., `unset($person["age"]);`).
- **`array_splice()`:** Versatile function for removing, replacing, or inserting elements at specific positions.

### Automatic Key and Indexing in PHP Arrays

In PHP, arrays can have both numeric and associative keys (strings or integers). When you add elements to an array, there are two ways keys are assigned:

#### Numeric Keys

- If you don't explicitly specify a key when adding an element, PHP assigns the next available **integer index** starting from 0.
- This leads to **sequential indexing**, where elements are listed in the order they were added.

#### Associative Keys

- You can also use **explicit keys** (strings or integers) to assign elements.
- In this case, the chosen key determines the specific position of the element in the array.

#### Case 1: ["a", "b", 50 => "c", "d", "e"]

In this case:

- `"a"` and `"b"` are assigned numeric keys 0 and 1, respectively, due to automatic indexing.
- `"50 => "c"` explicitly assigns the element `"c"` to the key `50`. This breaks the automatic integer indexing sequence.
- `"d"` and `"e"` are then assigned numeric keys 51 and 52, continuing the sequence starting from the next available index after 50.

#### Case 2: ["a", "b", "third" => "c", "d", "e"]

Here:

- `"a"` and `"b"` are automatically assigned keys 0 and 1.
- `"third" => "c"` creates an association with the string `"third"` as the key, interrupting the numeric sequence.
- `"d"` and `"e"` receive keys 3 and 4 based on the next available indexes after `2` (index assigned to `"third"`).

### Alternative Key Existence Checks

- **`array_key_exists($key, $array)`:** True if the key exists, even if its value is `null`.
- **`isset($array[$key])`:** True if the key exists and has a value (not `null`).
- **Choice:** Use `array_key_exists()` for stricter key existence checks, `isset()` for checking both existence and value presence.
