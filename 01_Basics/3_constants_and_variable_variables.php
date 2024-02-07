<?php
// Defining constants
// 1- With defination
define('USER_NAME', 'Raza'); //constant defined with 'define' can be used anywhere
echo USER_NAME . "\n";

// 2- With const keyword
const USER_AGE = 24;
echo USER_AGE . "\n";

// Buil-in constants
echo PHP_VERSION . "\n";
echo PHP_OS_FAMILY . "\n";
echo M_PI . "\n";

// Variable Variables
$property = "age";
$age = 24;

echo $property . "\n";
echo $$property . "\n";
