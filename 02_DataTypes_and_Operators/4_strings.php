<?php

/**
 * Strings in PHP
 *
 * Strings are sequences of characters enclosed in single or double quotes.
 * The main difference between single and double quotes is that variables can be 
 * embedded directly within double-quoted strings, while they cannot be embedded 
 * directly within single-quoted strings.
 */


// Declare and initialize string variables
$firstName = 'Ribal'; 
$lastName = "Raza";  

// String Interpolation (using variables inside double quotes)
// Curly braces {} are used for readability and to avoid ambiguity.
$fullName = "{$firstName} {$lastName}"; 

// Output: Ribal Raza
echo "$firstName $lastName\n"; 


// String Concatenation
// Method 1: Using interpolation (as shown above with $fullName)
// Method 2: Using the concatenation operator (.)
$name = $firstName . " " . $lastName;  

// Output: Ribal Raza
// \n is an escape sequence for a new line.
echo $name . "\n"; 


/**
 * Accessing String Characters
 *
 * PHP uses 0-based indexing for strings.
 * - The first character has an index of 0.
 * - The second character has an index of 1, and so on.
 * 
 * To access a specific character, use square brackets [] with the index.
 */
// Output: R a
echo $name[0] . " " . $name[5] . "\n"; 

// Negative indexes access characters from the end of the string.
// Output: a
echo $name[-1];  

// Modifying String Characters
// This assigns "B" to the character at index 2 (the third character).
$name[2] = "B"; 
// Output: RiBal Raza
echo "\n" . $name . "\n";  

/**
 * Handling Indexes Beyond String Length
 *
 * If the specified index is greater than the length of the string, 
 * spaces will be added before that value in the string.
 */
$name[15] = "D";  
var_dump($name); // Outputs the string's internal representation


/**
 * Nowdoc (for multiline strings)
 *
 * Nowdocs are used for multiline strings enclosed in single quotes.
 * Variables cannot be embedded directly within a Nowdoc.
 */
$x = <<<'TEXT'
I am Ribal
I am a Software developer

TEXT;

// Output: I am Ribal<br />
//         I am a Software developer<br />
// nl2br() adds HTML line breaks (<br />) to a multiline string.
echo nl2br($x);  


/**
 * Heredoc (for multiline strings)
 *
 * Heredocs are used for multiline strings enclosed in double quotes.
 * Variables can be embedded directly within a Heredoc.
 */
$y = <<<TEXT
I am {$fullName}.
I am a software developer.

TEXT;

// Output: I am Ribal Raza.<br />
//         I am a software developer.<br />
echo nl2br($y); 


// Some built-in functions/methods for string manipulation
$myString = "Hello, world!";
// strlen(): Returns the length of a string
echo strlen($myString) . "\n"; // Output: 13
// str_word_count(): Counts the number of words in a string
echo str_word_count($myString) . "\n"; // Output: 2
// strrev(): Reverses a string
echo strrev($myString) . "\n"; // Output: !dlrow ,olleH
// strpos(): Finds the position of the first occurrence of a substring
echo strpos($myString, "world") . "\n"; // Output: 7
// str_replace(): Replaces some characters with some other characters in a string
echo str_replace("world", "PHP", $myString) . "\n"; // Output: Hello, PHP!
// substr() function returns a part of a string.
echo substr($myString, 7) . "\n";  // Output: world!
echo substr($myString, 7, 3) . "\n"; // Output: wor


