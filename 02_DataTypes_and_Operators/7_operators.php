<?php

/**
 * This code demonstrates various PHP operators, showcasing their types and applications.
 * It aims to be well-structured, commented, and easy to understand, adhering to procedural programming principles.
 */

// **1. Operator Types:**

// **Unary Operators:** Increment/Decrement operators (++, --) and logical NOT (!) operator.
$x = 5;
echo "Unary Increment: " . $x++ . "\n";  // Output: 5
echo "Unary Decrement: " . $x-- . "\n";  // Output: 6
echo "Logical NOT: " . !true . "\n";     // Output: 1 (because !true is false)

// **Binary Operators:** Arithmetic, comparison, logical, string, assignment, null coalescing, etc.
$y = 3;
$z = 2;
echo "Addition: " . ($x + $y) . "\n";         // Output: 9
echo "Comparison (loose): " . ($x == $y) . "\n";  // Output: 1 (true)
echo "Comparison (strict): " . ($x === $y) . "\n"; // Output: 0 (false)
echo "String Concatenation: " . ($x . " + " . $y) . "\n"; // Output: 6 + 2

// **Ternary Operators:** Conditional expressions with three operands.
// (condition) ? (if true) : (if false)

$age = 18;
$adult = ($age >= 18) ? "adult" : "minor";
echo "Ternary Operator: " . $adult . "\n";    // Output: adult
// This expression is equivalent to:
// if ($age >= 18) {
//     echo "adult";
// } else {
//     echo "minor";
// }


// **2. Arithmetic Operators:** Perform mathematical calculations.
echo "Multiplication: " . ($x * $y) . "\n";     // Output: 18
echo "Division: " . ($x / $y) . "\n";           // Output: 3
echo "Modulo: " . ($x % $z) . "\n";               // Output: 2 (remainder of 6 / 2)
echo "Exponentiation: " . ($x ** $z) . "\n";      // Output: 81 (5 raised to the power of 2)

// **3. Assignment Operators:** Assign values to variables and perform combined operations.
$a = 10;
$a += 5; // Equivalent to $a = $a + 5
echo "Assignment (+): " . $a . "\n";             // Output: 15
$b = 20;
$b *= 2; // Equivalent to $b = $b * 2
echo "Assignment (*): " . $b . "\n";             // Output: 40

// **4. String Operators:** Concatenate or modify strings.
$name = "John";
$greeting = "Hello, " . $name . "!";
echo "String Concatenation: " . $greeting . "\n"; // Output: Hello, John!

// **5. Comparison Operators:** Check relationships between values.
$number1 = 123;
$number2 = "123";
echo "Loose Comparison: " . ($number1 == $number2) . "\n"; // Output: 1 (true)
echo "Strict Comparison: " . ($number1 === $number2) . "\n"; // Output: 0 (false)
echo "Nullish Coalescing: " . ($value ?? "default") . "\n";  // Example if $value is null

// **6. Error Control Operator (@):** AVOID using this in production (suppresses non-fatal errors).

// **7. Increment/Decrement Operators:** Increase or decrease values by 1.
$count = 0;
echo "Pre-increment: " . ++$count . "\n";         // Output: 1 (increments before use)
echo "Post-decrement: " . $count-- . "\n";       // Output: 1 (uses current value and then decrements)

// **8. Logical Operators:** Evaluate truth values for conditional logic.
$isPositive = $number1 > 0;
$isMultipleOf10 = ($number1 % 10) === 0;
echo "AND Operator: " . ($isPositive && $isMultipleOf10) . "\n";   // Output: 0 (false)
echo "OR Operator: " . ($isPositive || !$isMultipleOf10) . "\n";
// **9. Bitwise Operators:** Perform operations on individual bits within integers.
$x = 5; // Binary representation: 0101
$y = 3; // Binary representation: 0011
echo "Bitwise AND: " . ($x & $y) . "\n";           // Output: 1 (Binary: 0001)
echo "Bitwise OR: " . ($x | $y) . "\n";            // Output: 7 (Binary: 0111)
echo "Bitwise XOR: " . ($x ^ $y) . "\n";            // Output: 6 (Binary: 0110)

// **10. Array Operators:** Work with arrays (caution with loose comparisons due to reference).
$arr1 = [1, 2, 3];
$arr2 = [1, 4, 5];
echo "Array Merging: " . print_r(array_merge($arr1, $arr2), true) . "\n";
// Output: Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )
echo "Loose Comparison (reference): " . ($arr1 == $arr2) . "\n";   // Output: 1 (true)
echo "Strict Comparison (value): " . ($arr1 === $arr2) . "\n";      // Output: 0 (false)

// **11. Execution Operators (``):** AVOID using this for security reasons (executes arbitrary string as PHP code).

// **12. Type Operators:** Check the type of a variable.
$obj = new StdClass();
echo "Instanceof: " . ($obj instanceof StdClass) . "\n"; // Output: 1 (true)
