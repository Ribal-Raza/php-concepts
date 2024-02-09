<?php
// null is a special data type. It refers to absence of a value
// In PHP there is constant for null which is case-insensetive i.e. null, NULL
$x = null;
var_dump($x);

// If a variable is unset, it's value becomes null
$y = 1234;
var_dump($y);
unset($y); // now value of $y is null
// var_dump($y);  It will give error because $y is unset and is undefined

// checking if a variable is null
$isNull = null;
$notNull = 1234;
var_dump(is_null($isNull), is_null($notNull));
