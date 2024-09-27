<?php
// 1- Scalar types
// int
$age = 24;
// float
$height = 5.7;
// string
$name = "Raza";
// boolean
$isAdult = true;  // type coercion to 1

echo $age . "\t" . $name . "\t" . $isAdult . "\t" . $height . "\t";

echo var_dump($height, $isAdult, $name); // var_dump returns the data-type
echo gettype($age); // gettype also returns type, but only takes one argument

// 2- Compound types
// array
$hobbies = ["coding", "gardening", "movies", true];
// echoing out an array in php will cause error, because echo doesnot display arrays.
print_r($hobbies); // print_r return displays arrays. echo doesnot displays arrays

// type hinting
function greet(string $x)
{
    return "Hello {$x}";
};

echo greet("Raza") . "\n";

/** Type Juggling
 * PHP dynamically assigns types to variables based on their value. This is called type juggling. 
 *  Key contexts for automatic type conversion include:
 * Numeric Contexts: Operands are converted to either int or float in arithmetic.
 * String Contexts: Values are converted to string for functions like echo.
 * Logical Contexts: Values are converted to bool for logical operations.
 * omparative Contexts: Conversion happens during comparisons based on the involved types. 
*/
$var = "10 apples" + 20; // It will throw a warning, but it will convert 10 apples to int 10 and then add it to 20.
echo $var . "\t" . gettype($var) . "\n";

// $var = "apples 10" + 20; It will throw an error, as the string is not starting from a character that can be converted into integer
// echo $var . "\t" . gettype($var) . "\n";

$var = true . " test";
echo $var . "\t" . gettype($var) . "\n"; // Output: "1 test"

$var = "0";
if ($var) {
    echo "True \n";
} else {
    echo "False \n"; 
}
// Output will be true because, even though there is 0 in string, which means the string contains something, and that results to true

// type casting

$randomNumber = 566012;
echo $randomNumber . "\t" . gettype($randomNumber) . "\t";

$numberString = strval($randomNumber);
echo $numberString . "\t" . gettype($numberString) . "\n";

// other way to type cast
$number2 = (int) "2222";
var_dump($number2);