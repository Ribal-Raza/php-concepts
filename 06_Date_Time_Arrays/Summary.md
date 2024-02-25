## Table of Contents

- [Working with Date & Time](#working-with-date--time)
  - [Understanding the `date()` & `time()` Functions](#understanding-the-date--time-functions)
    - [Formatting Date and Time Strings](#formatting-date-and-time-strings)
  - [Date and Time Manipulation](#date-and-time-manipulation)
    - [Adding and Subtracting Days, Months, and Years](#adding-and-subtracting-days-months-and-years)
    - [Modifying Specific Date and Time Components](#modifying-specific-date-and-time-components)
    - [Comparing Dates and Times](#comparing-dates-and-times)
    - [Finding the Difference Between Two Dates](#finding-the-difference-between-two-dates)
  - [Timezones and DST](#timezones-and-dst)
    - [Setting the Default Timezone](#setting-the-default-timezone)
    - [Converting Between Timezones](#converting-between-timezones)
    - [Handling Daylight Saving Time (DST)](#handling-daylight-saving-time-dst)

## Working with Date & Time

### Understanding the `date()` & `time()` Functions

- The `date()` function in PHP formats a timestamp according to a specified format string.
- Arguments:
  - `format` string: Specifies the desired output format (e.g., `Y-m-d H:i:s`).
  - `timestamp` (optional): Defaults to the current time.
- Returns: A formatted date and time string.
- Use `time()` function to get the current Unix timestamp (seconds since January 1, 1970).
- Format the timestamp using `date()`.

#### Formatting Date and Time Strings

- Use `date()` with various format characters:
  - `Y`: Year (4 digits)
  - `y`: Year (2 digits)
  - `m`: Month (numeric)
  - `M`: Month (3-letter abbreviation)
  - `F`: Month (full name)
  - `d`: Day of the month (numeric)
  - `D`: Day of the week (3-letter abbreviation)
  - `l`: Day of the week (full name)
  - `H`: Hour (24-hour format)
  - `h`: Hour (12-hour format)
  - `i`: Minutes
  - `s`: Seconds
  - `A`: AM/PM indicator
  - `z`: Timezone offset
  - Many more!
  ```php
  $timestamp = time();
  $formattedDate = date('Y-m-d H:i:s', $timestamp); // Example: 2024-02-27 07:39:00
  $formattedTime = date('h:i A', $timestamp); // Example: 07:39 AM
  ```

**Converting Timestamps to Date and Time:**

- Use `date()` on a Unix timestamp to get the formatted date and time.

### Date and Time Manipulation

#### Adding and Subtracting Days, Months, and Years

- Use `strtotime()` to convert a date and time string to a Unix timestamp.
- Use arithmetic operators (`+`, `-`) on timestamps to add or subtract time.
- Convert the modified timestamp back to a string using `date()`.
  ```php
  $dateString = '2024-02-27';
  $timestamp = strtotime($dateString);
  $tomorrow = date('Y-m-d', $timestamp + 86400); // 2024-02-28
  $nextMonth = date('Y-m-d', strtotime('+1 month', $timestamp)); // 2024-03-27
  ```

#### Modifying Specific Date and Time Components

- Use functions like `mktime()` or `date_create()` to create a DateTime object.
- Modify specific components (year, month, day, hour, minute, second) using methods like `add()` or `sub()`.
- Format the modified DateTime object using its `format()` method.
  ```php
  $dateTime = new DateTime('2024-02-27 12:30:00');
  $dateTime->add(new DateInterval('P2D')); // Add 2 days
  $oneWeekLater = $dateTime->format('Y-m-d H:i:s'); // 2024-02-29 12:30:00
  ```

#### Comparing Dates and Times

- Use comparison operators (`>`, `<`, `==`, etc.) on Unix timestamps or DateTime objects.
- Use `strtotime()` to convert strings to timestamps before comparison if needed.
  ```php
  $timestamp1 = strtotime('2024-02-27');
  $timestamp2 = strtotime('2024-02-28');
  if ($timestamp1 < $timestamp2) {
      echo "2024-02-27 is earlier than 2024-02-28";
  }
  ```

#### Finding the Difference Between Two Dates

- Calculate the difference between timestamps using arithmetic operators (`-`).
- Use `date_diff()` with DateTime objects for more advanced time calculations.

### Timezones and DST

#### Setting the Default Timezone

- Use `date_default_timezone_set()` to set the default timezone for your PHP environment.
- Example: `date_default_timezone_set('America/Los_Angeles');`

#### Converting Between Timezones

- Use the `DateTime` object's `setTimezone()` method to change its timezone.
- Example: `$dateTime->setTimezone(new DateTimeZone('Europe/Paris'));`

#### Handling Daylight Saving Time (DST)

- Be aware of DST rules and their potential impact on date and time calculations.
- Use functions like `DateTimeZone::getTransitions()` to retrieve DST information for a specific timezone.

### Working with UNIX Timestamps

#### Converting UNIX Timestamps to Date and Time

- Use `date()` on a Unix timestamp to get the formatted date and time.

#### Converting Date and Time to UNIX Timestamps

- Use `strtotime()` to convert a date and time string to a Unix timestamp.

#### Performing Calculations with UNIX Timestamps

- Treat Unix timestamps as integers and perform arithmetic operations on them.
- Remember that these operations represent time intervals.
  ```php
  $timestamp = time();
  $oneHourLater = $timestamp + 3600;
  $oneDayEarlier = $timestamp - 86400;
  ```

### Date and Time Formatting

#### Customizing Date and Time Formats

- Use a variety of format characters and modifiers with `date()`.
  ```php
  $dateString = '2024-02-27';
  $formattedLong = date('l, F jS Y',strtotime($dateString)); // Tuesday, February 27th 2024
  $formattedShort = date('d/m/Y H:i', strtotime($dateString)); // 27/02/2024 00:00
  ```

#### Using Format Characters and Modifiers

- Explore options like `a` for AM/PM, `e` for day of the month as a numerical day suffix, `U` for Unix timestamp, and many more.
- Use modifiers like `-` to show negative values, `+` for timezones, and `l` for localized weekday names.

#### Localizing Date and Time Formats

- Use the `setlocale()` function to set the locale for date and time formatting.
- This enables localized formatting based on user preferences or language settings.
  ```php
  setlocale(LC_ALL, 'fr_FR'); // Set locale to French (France)
  $formattedDate = date('d F Y'); // Output: 27 février 2024
  ```

### Working With Arrays

| Method             | Description                                                  | Arguments                                              |
| ------------------ | ------------------------------------------------------------ | ------------------------------------------------------ |
| `array_filter`     | Filters elements of an array using a callback function       | `array_filter($array, $callback)`                      |
| `array_map`        | Applies a callback function to each element of an array      | `array_map($callback, $array)`                         |
| `array_reduce`     | Reduces an array to a single value using a callback function | `array_reduce($array, $callback, $initial)`            |
| `array_search`     | Searches for a value in an array and returns its key         | `array_search($value, $array)`                         |
| `array_sort`       | Sorts an array in ascending order                            | `array_sort($array)`                                   |
| `array_reverse`    | Reverses the order of elements in an array                   | `array_reverse($array)`                                |
| `array_keys`       | Returns all the keys of an array                             | `array_keys($array)`                                   |
| `array_values`     | Returns all the values of an array                           | `array_values($array)`                                 |
| `array_merge`      | Merges two or more arrays into a single array                | `array_merge($array1, $array2, ...)`                   |
| `array_push`       | Pushes one or more elements onto the end of an array         | `array_push($array, $value1, $value2, ...)`            |
| `array_pop`        | Removes and returns the last element of an array             | `array_pop($array)`                                    |
| `array_shift`      | Removes and returns the first element of an array            | `array_shift($array)`                                  |
| `array_unshift`    | Adds one or more elements to the beginning of an array       | `array_unshift($array, $value1, $value2, ...)`         |
| `array_slice`      | Extracts a slice of an array                                 | `array_slice($array, $offset, $length)`                |
| `array_splice`     | Removes and replaces elements from an array                  | `array_splice($array, $offset, $length, $replacement)` |
| `array_unique`     | Removes duplicate values from an array                       | `array_unique($array)`                                 |
| `array_key_exists` | Checks if a specified key exists in an array                 | `array_key_exists($key, $array)`                       |
| `in_array`         | Checks if a value exists in an array                         | `in_array($value, $array)`                             |
