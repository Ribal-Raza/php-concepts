<?php
// Example usage of require_once with the variable being overwritten if the file is included more than once
require_once '2_import_example.php';
echo "Value of x: $x\n"; // Output: Value of x: 5

require_once '2_import_example.php';
$x = 10; // Overwriting the value of x
echo "Value of x: $x\n"; // Output: Value of x: 10

// Bad practice
include '2_import_example.php'; // Including the file
echo "Value of x: $x\n"; // Output: Value of x: 10 (value of x is not updated)

// Return value of include & using return within the included file
$returnValue = include '2_import_example.php'; // Including the file and capturing the return value
echo "Return value: $returnValue\n"; // Output: Return value: 15

// Using include within HTML for code re-usability
?>
<html>

<head>
    <title>Include Example</title>
</head>

<body>
    <h1>Welcome to my website!</h1>
    <p><?php include '2_import_example.php'; ?></p>
</body>

</html>

<?php
// Including file into a string using output control functions
ob_start(); // Start output buffering
include '2_import_example.php'; // Including the file
$html = ob_get_clean(); // Get the buffered output and store it in a variable
echo "HTML: $html\n"; // Output: HTML: <p>Value of x: 15</p>
?>