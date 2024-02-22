<?php
// FILEPATH: /E:/RibalStudyandPractice/Practice/PHP/php-concepts/04_Importing_Code/1_import1.php

// Example 1: Syntax of include and require
// Include example
include '2_import_example.php'; // Includes the contents of '2_import_example.php' file
echo $x; // Outputs the value of $x from '2_import_example.php'

// Require example
require '2_import_example.php'; // Requires the contents of '2_import_example.php' file
echo $x; // Outputs the value of $x from '2_import_example.php'

// Example 2: Difference between include and require
// Include example
include 'non_existing_file.php'; // Includes a non-existing file
echo "This line will be executed even if the file is not found.";

// Require example
require 'non_existing_file.php'; // Requires a non-existing file
echo "This line will not be executed if the file is not found.";

// Example 3: How files are located/loaded
// Include example
include 'folder/file.php'; // Includes the file located in the 'folder' directory

// Require example
require 'folder/file.php'; // Requires the file located in the 'folder' directory

// Example 4: Difference between include_once, require_once, include, and require
// include_once example
include_once './2_import_example.php'; // Includes the file only once, even if it is included multiple times

// require_once example
require_once './2_import_example.php'; // Requires the file only once, even if it is required multiple times

// include example
include './2_import_example.php'; // Includes the file, can be included multiple times

// require example
require './2_import_example.php'; // Requires the file, can be required multiple times
