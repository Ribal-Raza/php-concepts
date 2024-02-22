# Basics of PHP

### Table of Contents

- [Naming Conventions and Rules for PHP Files](#naming-conventions-and-rules-for-php-files)
- [Hello World Program](#hello-world-program)
  - [`echo` and `print`](#echo-and-print)
- [Variables](#variables)
  - [Concept of Variables](#concept-of-variables-in-programming)
  - [Initialization vs Declaration](#initialization-vs-declaration)
  - [Writing Variables in PHP](#writing-variables-in-php)
  - [Variable Naming Rules and Conventions in PHP](#variable-naming-rules-and-conventions)
  - [Tips related to Variables](#additional-tips-related-to-variables)
- [Commenting in PHP](#commenting-in-php-your-guide-to-clarity-and-organization)
  - [Single Line Comments](#single-line-comments)
  - [Multi-line Comments](#multiline-comments)
  - [PHP DocBlocks](#php-doc-blocks)
    - [PHP DocBlocks Conventions](#php-doc-blocks-conventions-and-rules)
- [Constants and Variable Variables](#constants-and-variable-variables)
  - [Defining Constants](#defining-constants-in-php)
  - [Built-in/Pre-defined Constansts](#built-in-constants)
  - [Variable Variables](#variable-variables-in-php)
- [Data Types](#data-types)
  - [Data Types in PHP](#data-types-in-php)
  - [Type Hinting](#type-hinting-adding-explicitness)
  - [Type Coercion](#type-coercion)
  - [Strict Types](#strict-types)
  - [Type Casting](#type-casting)

### **Naming Conventions and Rules for PHP Files:**

- **Extension:** PHP files must have the `.php` extension to be recognized and parsed by the server.
- **Case Sensitivity:** Filenames are case-sensitive. `hello_world.php` is different from `Hello_World.php`.
- **Allowed Characters:** Stick to letters, numbers, underscores (`_`), and hyphens (`-`). Avoid spaces and special characters.
- **Best Practices:**
  - Use descriptive and meaningful names that reflect the file's content.
  - Follow common conventions like lowercase letters for filenames and camelCase for class names.
  - Avoid excessive length or abbreviations that might hinder readability.

### Hello, World! Program

```php
<?php
    echo "Hello, World!";
    // or
    echo("Hello, World!");
?>
// OR
<?php
    print "Hello, World!";
    // or
    print("Hello, World!");
?>
```

1.  **Opening and Closing PHP Tags:**

    - The code is enclosed within `<?php` and `?>` tags, indicating to the server that it's PHP code to be executed.

2.  **Outputting Text:**

    - The `echo` statement is used to display the text "Hello, World!" in the console. It sends the text to the standard output stream, which is usually the console in a web development environment.

#### `echo` and `print`

**echo:**

- Primarily used for displaying output.
- Can output multiple arguments separated by commas (e.g., `echo "Hello", "World!";`).
- **No return value**, so it can't be used in expressions.
- Generally **slightly faster** than `print`.

**print:**

- Primarily used for displaying output, just like `echo`.
- Can only output **one argument at a time**.
- **Returns an integer value of 1**, so it can be used in expressions if needed.
- Generally **slower** than `echo`.

## Variables

### **Concept of Variables in Programming:**

- Variables act as named containers that store data within a program.
- They allow you to dynamically hold and manipulate information during execution.
- Think of them as labels for memory locations where data resides.

### **Initialization vs. Declaration:**

- **Declaration:** Introduces a variable to the program, specifying its name but not necessarily assigning a value.
- **Example:** `$name;` (declares a variable named $name without value)
- **Initialization:** Assigns a specific value to a previously declared variable.
- **Example:** `$name = "John";` (declares and initializes $name with the value "John")
- You can combine both in one statement: `$age = 30;` (declares and initializes $age with value 30)

### **Writing Variables in PHP:**

- All PHP variables start with a dollar sign `$`.
- Variable names can contain letters, numbers, and underscores, but must begin with a letter or underscore.
- Case-sensitive: `$age` and `$Age` are different variables.
- Cannot start with numbers or special characters.

### **Variable Naming Rules and Conventions:**

- Use descriptive and meaningful names that reflect the variable's purpose.
- Lowercase with word separation (e.g., `firstName`, `totalCost`).
- Use camelCase for class names (e.g., `Product`, `ShoppingCart`).
- Avoid underscores for variable names (except where necessary).
- Maintain consistency within your code for better readability.

### **Additional Tips related to Variables:**

- Choose appropriate data types (e.g., string, integer, float) based on the stored data.
- Use `var_dump($variable)` to inspect variable content and type.
- Declare variables before using them to avoid undefined variable errors.

## Commenting in PHP: Your Guide to Clarity and Organization

### **Single-Line Comments:**

There are two ways to write single-line comments in PHP:

- **Using double forward slashes (//):**

  - Everything from // to the end of the line is ignored.
  - Example: `$number = 10; // Store a value in $number`

- **Using a hash symbol (#):**

  - Less common, but valid syntax.
  - Example: `# This is also a comment`

### **Multiline Comments:**

Use block comments for longer explanations or to comment out code blocks.

- **Syntax:**

  ```php
  /* This is a multiline comment
  It can span multiple lines
  */

  ```

### **PHP Doc Blocks:**

DocBlocks are special comments used to document functions, classes, variables, and constants. They are crucial for code clarity and can be used by tools like code generators and IDEs.

- **Syntax:**

  ```php
  /**
   * This is a function DocBlock
   * @param integer $x The first number
   * @param integer $y The second number
   * @return integer The sum of $x and $y
   */
  function add($x, $y) {
      return $x + $y;
  }

  ```

#### **PHP Doc Blocks Conventions and Rules:**

- DocBlocks start with /\*_ and end with _/.
- Use @tags to describe different aspects like parameters, return types, and exceptions.
- Follow PSR-5 standard for consistent formatting.
- Write clear and concise descriptions.

## Constants and Variable Variables

- Constants are named data containers whose values **cannot be changed** during program execution.
- They provide **fixed values**, often representing universal or unchanging quantities, like mathematical constants (e.g., π), application paths, or configuration settings.
- Constants enhance code reliability, readability, and maintainability.

### **Defining Constants in PHP:**

- **`define()` function:**
  ```php
  define('PI', 3.14159); // Defines PI as a constant
  echo PI; // Output: 3.14159
  ```
- **`const` keyword (PHP 5.3+):**
  ```php
  const TAX_RATE = 0.07; // Defines TAX_RATE as a constant
  echo TAX_RATE; // Output: 0.07
  ```

**Differences between `define` and `const`:**

- `define()` can be used inside or outside functions, while `const` is only used within classes or namespaces.
- `const` provides type checking and can be accessed without the dollar sign ($).

### **Built-in Constants:**

- PHP offers various built-in constants like `PHP_VERSION`, `DIRECTORY_SEPARATOR`, and mathematical constants like `M_PI`.
- Access them directly without defining:
  `php
    echo PHP_VERSION; // Output: Current PHP version    
    `
  **Examples:**

- **Define application paths:**
  ```php
  define('BASE_DIR', __DIR__); // Base directory path
  $image_path = BASE_DIR . '/images/logo.png';
  ```
- **Set configuration values:**
  ```php
  const DEBUG_MODE = true;
  if (DEBUG_MODE) {
      error_reporting(E_ALL);
  }
  ```

### **Variable Variables in PHP:**

- These are variables whose names are stored in other variables.
- Used for dynamic variable manipulation or accessing variables based on user input.
- Syntax: `${$variableName}`

**Reasons to use Variable Variables**

- Dynamically access properties based on user input (e.g., form data).
- Implement features like data binding in frameworks.
- Create arrays with variables as keys.

**Example:**

```php
$username = "john";
$property = "age";
echo ${$username}[$property]; // Access variable ${$username}[$property]
```

**Caution:**

- Use cautiously to avoid security vulnerabilities like code injection.
- Ensure proper input validation and sanitation.

## Data Types

PHP is **dynamically typed**: Type determination happens **at runtime**, not during compilation.

- **Runtime Type Checking:** The interpreter verifies types during execution, potentially leading to errors if mismatches occur.
- **Compiled Languages (Static Typing):** Types are declared beforehand and checked during compilation, catching errors earlier.

### **Data Types in PHP**

There are three major data types in PHP and they have their subtypes.

1. **Scalar Types:** Basic data types holding single values:
   - `integer`: Whole numbers (e.g., 10, -2).
   - `float`: Decimal numbers (e.g., 3.14159, 0.001).
   - `string`: Sequence of characters (e.g., "Hello", "John Doe").
   - `boolean`: True or False values (e.g., true, false).
2. **Compound Types:** Complex data structures holding multiple values:
   - `array`: Ordered collection of key-value pairs (e.g., `["name" => "Alice", "age" => 30]`).
   - `object`: Instance of a class, encapsulating data and behavior.
3. **Special Types:** Built-in data types with unique behaviors:
   - `resource`: Represents external resources like files or database connections.
   - `null`: Represents the absence of a value.

### **Type Hinting: Adding Explicitness**

- You can **hint** at the expected type of variables or function arguments using comments (PHP 5.3+) or declarations (PHP 7+).
- This enhances code clarity and helps IDEs provide better code completion and type checking.
- Syntax: `function add(int $x, int $y): int { ... }` (hinting for function arguments and return type).

### **Type Coercion**

- In certain situations, PHP automatically converts values between types (coercion).
- This can be convenient but also lead to unexpected behavior if not well understood.
- Common scenarios:
  - Numeric strings converted to numbers (e.g., "10" becomes 10).
  - Booleans converted to integers (e.g., true becomes 1, false becomes 0).
  - Implicit array creation when adding numeric strings (e.g., "1" + "2" creates an array).

### **Strict Types**

- **Declare `declare(strict_types=1);`** at the beginning of a file or script to enable strict type checking.
- This enforces type compatibility more rigorously, helping to catch potential errors early.
- It's recommended for larger projects or when type safety is crucial.

### **Type Casting**

- You can explicitly convert values between types using functions like `intval()`, `floatval()`, `strval()`, etc.
- Be mindful of potential data loss or unexpected behavior during casting.
- Always document your casting logic for clarity and maintainability.
