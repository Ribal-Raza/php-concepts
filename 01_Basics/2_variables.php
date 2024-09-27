<?php
$greeting = "Hello";
echo $greeting . " World!"; // string concatination
echo "\n"; // escape character
echo "{$greeting} World!\n"; // putting variables inside strings
// assigning variables by value
$x = 1;
$y = $x;
$x = 2;
echo "Assigning variables by value\n";
echo "x = ",$x,"\n"; // Output: 2
echo "y = ",$y; // Output: 1
echo "\n \n";

// assigning variables by reference
echo "Assigning variables by reference\n";
$x1 = 2;
$y1 = &$x1;
echo "x1 = ",$x1,"\n"; // Output: 2
echo "y1 = ",$y1; // Output: 2


?>