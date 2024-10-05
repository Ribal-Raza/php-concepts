<?php

/**
 * This script demonstrates the usage of floats (floating-point numbers) in PHP.
 * It covers various aspects including declaration, type casting, 
 * exponential form, precision limitations, and special values like NAN and INF.
 */

// Declare a float variable and display its value using var_dump.
$floatNum = 14.2;
var_dump($floatNum); 


// Type Casting to Float:

// Casting an integer to float using (float) and floatval().
$x = (float) 5;
$y = floatval(8);
var_dump($x, $y);

// Casting a string to float using floatval() and (float).
// Note: Non-numeric strings will be converted to 0.
$stringexample = floatval("Hello");  // Output: 0
$stringNumber = (float) "20.34";    // Output: 20.34
var_dump($stringexample, $stringNumber);

// Float in Exponential Form:

// Representing a float in exponential form with a positive exponent.
$expNum = 14.672e3;  // Equivalent to 14.672 * 10^3
var_dump($expNum);

// Representing a float in exponential form with a negative exponent.
$expNum1 = 14.22e-2; // Equivalent to 14.22 * 10^-2
var_dump($expNum1);

// Float Size and Limits:

// Maximum float value supported by the system.
echo "\n" . PHP_FLOAT_MAX . "\n"; 

// Minimum positive float value supported by the system.
echo PHP_FLOAT_MIN . "\n";

// Rounding Off Floating Points:

// Using floor() to round down to the nearest integer.
$float1 = 2.789;
echo floor($float1) . "\n"; // Output: 2

// Floating-Point Precision Issues:

// Demonstrating potential precision loss due to binary representation.
$float2 = floor((0.7 + 0.1) * 10.0); 
// Expected: 8, Actual: 7 (due to precision loss)
echo $float2 . "\n";

// Using ceil() to round up to the nearest integer.
$float3 = ceil((0.7 + 0.1) * 10.0); // Output: 8
echo $float3 . "\n";

// Another example of precision issues with ceil().
$float4 = ceil((0.1 + 0.2) * 10); 
// Expected: 3, Actual: 4 (due to precision loss)
echo $float4 . "\n";


// Comparing Floats:

// Important: Avoid direct comparison of floats due to potential precision issues.
$float5 = 0.3;
$float6 = 1 - 0.7;
// Although seemingly equal, $float5 and $float6 might differ slightly due to precision.

if ($float5 == $float6) {
    echo "Equal!"; 
} else {
    echo "Not Equal"; // This will likely be the output.
}

// Special Float Values: NAN and INF

// NAN (Not a Number) is produced by invalid mathematical operations.
echo "\n" . log(-1) . "\n"; // Output: NAN

// INF (Infinity) represents a value beyond the maximum float value.
echo INF . "\n";
echo PHP_FLOAT_MAX + PHP_FLOAT_MAX . "\n"; // Output: INF

// Checking for NAN and INF:

// Use is_nan() and is_infinite() to check for these special values.
echo is_nan(log(-1)) . "\n";      // Output: 1 (true)
echo is_infinite(PHP_FLOAT_MAX * 2); // Output: 1 (true) 


