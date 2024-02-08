<?php
// Scalar types
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

// Compound types
// array
$hobbies = ["coding", "gardening", "movies", true];
print_r($hobbies); // print_r return displays arrays. echo doesnot displays arrays

// type hinting
function greet(string $x)
{
    return "Hello {$x}";
};

echo greet("Raza") . "\n";

// type casting

$randomNumber = 566012;
echo $randomNumber . "\t" . gettype($randomNumber) . "\t";

$numberString = strval($randomNumber);
echo $numberString . "\t" . gettype($numberString) . "\n";

// other way to type cast
$number2 = (int) "2222";
var_dump($number2);