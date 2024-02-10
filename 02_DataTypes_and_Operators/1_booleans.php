<?php
/* Booleans have two possible values, true or false. They can be written in upper or lower case.
Choose whatever case you prefer, true or TRUE, false or FALSE. But be consistent throught the 
project to avoid confusions
*/
$isCompleted = true;

// Booleans are useful in control flows like loops or conditional statements like if-else or switch.

if ($isCompleted) {
    echo "Completed! \n";
} else {
    echo "Not completed \n";
}

/* So in type casting or coersion, boolean values get converted into other data type
integers 0 , -0 = false
floats 0.0 , -0.0 = false
empty string '', "" = false
zero in string '0' = false
empty array [] = false
null = false
Other than the values above, every data is true, even negative integers and floats or string
with space. */
$stringWithSpace = " ";
if ($stringWithSpace) {
    echo "Not false string \n";
} else {
    echo "false string";
};
$hobbies = [];
if ($hobbies) {
    echo "Not false array \n";
} else {
    echo "false array \n";
};

// When echoing or printing boolean value
// true will get printed as 1
// false will get printed as empty string
// this is because PHP tries to type cast booleans into string. 
echo true;
echo false;

// other ways to check boolean value are
echo "\n" .  is_bool($isCompleted) . "\n";
echo var_dump($isCompleted) . "\n";

echo var_dump(is_bool($isCompleted));
