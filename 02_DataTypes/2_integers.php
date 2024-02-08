<?php
/* Integers are numbers without decimal points.
    * Length/size of integers depends on the type of platform. (size can be checked with PHP 
      constants like PHP_INT_MAX or PHP_INT_MIN)
    * Integers can be defined as base 2, 8, 10, 16. But at the end, they will be compiled to 
      base 10 integer
 */
// max int value
echo PHP_INT_MAX . "\n";
// simple or base 10 integers
$number = 20;
echo "Integer: " . $number . "\n";
// binary integer, base 2
$binaryInteger = 0b11;
echo "Binary Integer: " . $binaryInteger . "\n";
// octal integer, base 8
$octalInteger = 055;
echo "Octal Integer: " . $octalInteger . "\n";
// hexadecimal integer, base 16
$hexadecimalInt = 0x3A;
echo "Hexadecimal Integer: " . $hexadecimalInt . "\n";

// What if we add 1 to Max value of integer
var_dump(PHP_INT_MAX);
$maxNumber = PHP_INT_MAX + 1;
var_dump($maxNumber); // it is a float now

// type casting
// float
$x = (int) 2.56; // will be converted to 2
var_dump($x);

// string
$test = (int) "test";  // will be converted to 0
var_dump($test);

// string with number and characters
$test1 = (int) "90abc87ouy"; // converted to 90, rest will be removed
var_dump($test1);

//null type
$testnull = (int) null;  // converted to 0
var_dump($testnull);

// arrays
$array1 = (int) [1, 2, 4, true, "hello", 7.8];  // converted to 1
$array2 = (int) []; // converted to 0
var_dump($array1);
var_dump($array2);

// checking int type
$z = 24;
echo is_int($z) . "\n"; // return 1
var_dump(is_int($z));
