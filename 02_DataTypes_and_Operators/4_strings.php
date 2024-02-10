<?php
/* Strings
    String are basically a character or character enclosed in single or double quotes.
    Main difference between single and double quotes is that variables can be passed in
    double quotes strings while they can't be passed in single quotes strings.
     */

$firstName = 'Ribal';
$lastName = "Raza";
// Inside double quotes, variables can be passed directly or inside {} curly braces.
// curly braces {} provides readilbility
$fullName = "{$firstName} {$lastName}";
echo "$firstName $lastName\n";

// string concatenation
// first method of string concatenation is discussed in $fullName example code
// other way is use . (dot)
$name = $firstName . " " . $lastName;
// here '\n' is escape character escapes to next line. '\t' is used for tab space.
echo $name . "\n";

/*accessing characters of string
PHP uses 0 based index for strings. It means the index of first character of a string is 0.
Second character has index 1, third character has index 2 and so on.
To access any character in a string, specify the index of that character in square braces []
after the variable name
*/
echo $name[0] . " " . $name[5] . "\n";
// Negative indexes are also useable, they start from the end of string
echo $name[-1];

// Modifying strings at specific index
$name[2] = "B"; //It assings B to second index (third value) of the string $name
echo "\n" . $name . "\n";

// If the specified index is greater than the length of string, the spaces will be added before
// that value in the string
$name[15] = "D";
var_dump($name);

// Nowdoc: These are used for multiline strings enclosed in single quotes. I means variables cannot
// be passed in it
$x = <<<'TEXT'
I am Ribal
I am a Software developer

TEXT;
echo nl2br($x); // nl2br() adds line breaks to multi-line strings

// Heredoc: These are used for multiline strings enclosed in double quotes. It means variables can
// be passed in it.
$y = <<<TEXT
I am {$fullName}.
I am a software developer.

TEXT;
echo nl2br($y);
