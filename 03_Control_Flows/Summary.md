### Table of Contents

- [Control Structures OR Control Flows](#control-structures-or-control-flows)
  - [Conditional Flow Statements in PHP](#conditional-flow-statements-in-php)
    - [`if` statement](#if-statement)
    - [else statement](#else-statement)
    - [`else..if` and `elseif`](#elseif-and-elseif)
  - [Loops](#loops)
    - [While Loop](#while-loop)
      - [Infinite Loops](#infinite-loops)
      - [Break Statement](#break-statement)
      - [Nested Loops and breaking out of Nested Loops](#nested-loops-and-breaking-out-of-nested-loops)
      - [Continue Statement in PHP and While Loop Use Case](#continue-statement-in-php-and-while-loop-use-case)
    - [Do-While Loop](#do-while-loop)
    - [For Loop](#for-loop)
      - [Multiple expressions within for loop](#multiple-expressions-within-for-loop)
      - [Iterate over strings](#iterate-over-strings)
      - [Iterate over arrays](#iterate-over-arrays)
      - [Performance concerns (for vs while vs do..while loops)](#performance-concerns-for-vs-while-vs-dowhile-loops)
    - [Foreach Loop](#foreach-loop)
      - [Overwriting array elements using assignment by reference](#overwriting-array-elements-using-assignment-by-reference)
      - [Iterate over associative arrays](#iterate-over-associative-arrays)
    - [Alternative Foreach & For Loop Syntax](#alternative-foreach--for-loop-syntax)

# Control Structures OR Control Flows

In programming, control structures provide a means to direct the flow of execution based on various conditions. They allow you to create more flexible and dynamic programs by making decisions and executing different code blocks depending on specific circumstances. In PHP, there are following control structures

- **Conditional statements:** `if`, `else`, `elseif`, `switch`
- **Looping statements:** `while`, `do...while`, `for`, `foreach`
- **Other structures:** `break`, `continue`, `goto` (use with caution)

### Conditional Flow Statements in PHP

#### `if` statement

Executes a block of code only if a specified condition evaluates to `true`.

- **Example:** Check if a number is positive:
  ```php
  $number = 5;
  if ($number > 0) {
      echo "$number is positive.";
  }
  ```

#### else statement

Provides an alternative block of code to execute if the condition in the `if` statement is `false`.

- **Example:** Check if a number is even or odd:
  ```php
  $number = 7;
  if ($number % 2 == 0) {
      echo "$number is even.";
  } else {
      echo "$number is odd.";
  }
  ```

#### `else..if` and `elseif`

- **else..if:** Allows chaining multiple conditions after an `if` statement, executing the first matching code block.
- **elseif:** Similar to `else..if` but more concise, directly using `elseif` for additional conditions.
- **Example:** Check if a grade falls into different categories:
  ```php
  $grade = 85;
  if ($grade >= 90) {
      echo "Excellent!";
  } elseif ($grade >= 80) {
      echo "Very good.";
  } elseif ($grade >= 70) {
      echo "Good.";
  } else {
      echo "Needs improvement.";
  }
  ```

## Loops

In computer programming, **loops** are control structures that allow for code repetition until a specified condition is met. PHP offers various loop types:

- **`while`:** Executes code repeatedly as long as a condition is true.
- **`do...while`:** Executes code at least once, then repeatedly as long as a condition is true.
- **`for`:** More structured with an initialization, condition, and increment/decrement expression.
- **`foreach`:** Designed to iterate over elements in arrays or objects.

### While Loop

```php
while (condition) {
    // Code to be executed repeatedly
}
```

- **How it works:**
  1.  **Condition check:** The condition is evaluated.
  2.  **Code execution:** If the condition is true, the code block is executed.
  3.  **Condition check again:** The condition is checked again.
  4.  **Loop continues:** If the condition is true again, steps 2 and 3 repeat.
  5.  **Loop ends:** The loop stops when the condition becomes false.

#### Infinite Loops

Infinite loops occur when the loop condition never becomes false, causing the loop to execute indefinitely.

#### Break Statement

- The `break` statement exits the current loop immediately.
- **Use case:** Create an infinite loop that can be manually terminated:

```php
while (true) {
    // User input to continue or break
    $choice = readline("Continue (y/n)? ");
    if (strtolower($choice) !== 'y') {
        break;
    }
    // Loop body
}
```

#### Nested Loops and breaking out of Nested Loops

Loop Within a loop is called nested loop. To break out of Nested loops, Use multiple `break` statements with labels to specify which loop to exit:

```php
//outer:
while (true) {
    while ($i<=10) {
        if ($i == 3) {
            break 2; // Exit both "outer" and "inner" loops
        }
        // Inner loop body
        $i++;
    }
    // Outer loop body
}
```

#### Continue Statement in PHP and While Loop Use Case

- The `continue` statement skips the remaining code in the current iteration and jumps to the next iteration.
- **Use case:** Skip specific iterations based on a condition:

```php
$i = 0;
while ($i < 10) {
    if ($i % 2 == 0) { // Skip even numbers
        $i++;
        continue;
    }
    // Process odd numbers
    $i++;
}
```

### Do-While Loop

```php
do {
    // Code to be executed at least once
} while (condition);

```

- **Functionality:**
  1.  The code block is executed **at least once**.
  2.  Then, the `condition` is evaluated.
  3.  If the condition is true, the code block is executed again.
  4.  Steps 2 and 3 repeat until the condition becomes false.

### For Loop

```php
for (initialization; condition; increment/decrement) {
    // Code to be executed repeatedly
}
```

- **How it works:**
  1.  **Initialization:** The `initialization` expression is executed once at the beginning.
  2.  **Condition check:** The `condition` is evaluated.
  3.  **Code execution:** If the condition is true, the code block is executed.
  4.  **Increment/decrement:** The `increment/decrement` expression is executed, typically updating a loop counter.
  5.  **Condition check again:** Steps 2-4 repeat until the condition becomes false.

#### Multiple expressions within for loop

You can have multiple expressions separated by semicolons in each part of the `for` loop:

```php
for ($i = 0; $i < 10; $i += 2, echo $i . " ") {
    // Executes for even numbers from 0 to 8
}
```

#### Iterate over strings

Use string functions like `strlen()` and `substr()` to access individual characters:

```php
$name = "Alice";
for ($i = 0; $i < strlen($name); $i++) {
    echo $name[$i] . " "; // Output: A l i c e
}
```

#### Iterate over arrays

Access array elements directly using their index:

```php
$numbers = [1, 2, 3, 4, 5];
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " "; // Output: 1 2 3 4 5
}

```

#### Performance concerns (for vs while vs do..while loops)

- **`for` loop:** Generally efficient for well-defined iterations with clear initialization, condition, and update.
- **`while` loop:** Similar to `for` but less explicit, might be slightly less efficient if the condition needs complex calculations.
- **`do...while` loop:** Guaranteed at least one execution, might be less efficient due to the extra check before the loop.

### Foreach Loop

```php
foreach ($array as $key => $value) {
    // Code to be executed for each element
}
```

- **How it works:**

  1.  The loop iterates over each element in the `array`.
  2.  For each element:
      - If `$key` is provided, it represents the element's key (index or name).
      - `$value` represents the element's value.
      - The code block is executed with these variables accessible.

#### Overwriting array elements using assignment by reference

If the `array` is passed by reference (using `&`), changes to `$value` within the loop will modify the original array elements:

```php
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as &$fruit) {
    $fruit .= " pie"; // Modifies fruits in-place
}
print_r($fruits); // Output: Array ( [0] => apple pie [1] => banana pie [2] => orange pie )
```

**b. Something to be aware of - variable within the foreach loop is not destroyed:**

The `$key` and `$value` variables are created for each iteration, but they are not automatically destroyed upon loop completion. If you need to use variables outside the loop with different meanings, create separate ones.

#### Iterate over associative arrays

Access keys and values directly using `$key` and `$value`:

```php
$person = ["name" => "John", "age" => 30];
foreach ($person as $key => $value) {
    echo "$key: $value\n"; // Output: name: John, age: 30
}
```

### Alternative Foreach & For Loop Syntax

- **Foreach:**

  - You can iterate over objects with custom iteration methods that use `foreach`.
  - Short form `foreach ($array as $value)` omits the key variable:

  ```php
  $numbers = [1, 2, 3];
  foreach ($numbers as $num) {
      echo $num * 2 . " "; // Output: 2 4 6
  }
  ```

- **For:**
  - The `for` loop can be written in "old-style" syntax without braces after the condition:
  ```php
  for ($i = 0; $i < 5; $i++) echo $i . " "; // Output: 0 1 2 3 4
  ```
