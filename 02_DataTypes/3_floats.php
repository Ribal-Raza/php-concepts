<?php
/*
    Floats are numbers with point/floating value. 
     */

$floatNum = 14.2;
var_dump($floatNum);

// type casting to float
// integer
$x = (float) 5;
$y = floatval(8);
var_dump($x, $y);
// string
$stringexample = floatval("Hello"); //output: 0
$stringNumber = (float) "20.34"; // output: 20.34
var_dump($stringexample, $stringNumber);

// float in exponential form
// positive exp
$expNum = 14.672e3;
var_dump($expNum);
// negative exp
$expNum1 = 14.22e-2;
var_dump($expNum1);

// size of floats depends on the system. PHP constant can be used to find the size.
//max float size
echo "\n" . PHP_FLOAT_MAX . "\n";

// min float size
echo PHP_FLOAT_MIN . "\n";

// rounding off floating points
$float1 = 2.789;
echo floor($float1) . "\n"; // output: 2

// exceptions
$float2 = floor((0.7 + 0.1) * 10.0);
// now the result should be 8. Becase 0.7 + 0.1 = 0.8 and 0.8 * 10 = 8. But the answer is 7
// reason for this PHP behaviour is that PHP stores every number in binary. 0.1 or 0.7 don't have
// an exact binary representation. So PHP tries to type cast them but in this process 0.1 and 0.7
// loose their precision and the whole result of (0.7 + 0.1) * 10 = 7.999999999...
// so the floor() converts it 7.
echo $float2 . "\n";

// ceil method, it rounds off the floating value and return the upper value possible
$float3 = ceil((0.7 + 0.1) * 10.0); // output: 8
echo $float3 . "\n";

$float4 = ceil((0.1 + 0.2) * 10);
// now the result should be 3. 0.1 + 0.2 = 0.3 and 0.3 * 10 = 3. But in actual 
// 0.1 + 0.2 = 0.30000..004 and 0.3000..04 * 10 = 3.00...04. Then the ceil method
// rounds 3.00..004 to 4
echo $float4 . "\n";

// Now there is important thing to remember. Two floating number should never be compared directly.
// for example
$float5 = 0.3;
$float6 = 1 - 0.7;
// Apparantly $float5 and $float6 are equal. But when we compare them, they are not equal
// Because $float6 = 1 - 0.7 = 0.30000..4 so it is not equal to $float5= 0.3
if ($float5 == $float6) {
    echo "Equal!";
} else {
    echo "Not Equal";
}

// During some operations or calculations, if everything does not go well, the result would
// be NAN (Not A Number). NAN is a constant in PHP. For example:
echo "\n" . log(-1) . "\n";
// There is another constant for infinite value in PHP. It is INF
echo INF . "\n";
echo PHP_FLOAT_MAX + PHP_FLOAT_MAX . "\n"; // output: INF

// Another important thing is, don't directly compare a number or float with NAN or INF. Instead
// use Built-in PHP function like:
echo is_nan(log(-1)) . "\n"; // output: 1 (true)
echo is_infinite(PHP_FLOAT_MAX * 2); // output: 1 (true )