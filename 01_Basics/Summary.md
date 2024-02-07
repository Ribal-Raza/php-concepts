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
