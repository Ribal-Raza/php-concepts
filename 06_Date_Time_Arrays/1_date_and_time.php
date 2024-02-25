<?php

/** Basic Working with Date and Time
 * Date and Time in PHP can be manipulated in many ways.
 * We can use the date() function to get the current date and time in the required format.
 * We can also use the time() function to get the current time in seconds since the Unix epoch.
 * Unix epoch is the number of seconds that have elapsed since January 1, 1970.
 */

echo "Current Time in seconds since Unix Epoch (Jan 1, 1970): " . time() . "\n"; // returns the current time in seconds since the Unix epoch

// we can add or subtract seconds from the current time to get the desired time
// for example, to get the time after 1 week from now
echo "Time after 1 week from now since Unix Epoch: " . time() + (7 * 24 * 60 * 60) . "\n"; // returns the time after 1 week from now
// 7 days * 24 hours * 60 minutes * 60 seconds

// similarly, to get the time before 1 week from now
echo "Time before 1 week from now since Unix Epoch: " . time() - (7 * 24 * 60 * 60) . "\n"; // returns the time before 1 week from now

// formatting the date and time
// we can use date() function to format the date and time
// first argument is the format and the second argument is the timestamp
echo "Current Date and Time: " . date("Y-m-d H:i:s") . "\n"; // returns the current date and time in the format Year-Month-Day Hour:Minute:Second

// time zone can also be set using the date_default_timezone_set() function
date_default_timezone_set("Asia/Karachi"); // setting the time zone to Asia/Karachi
// there are many other formats that can be used with the date() function
// for example, to get the current date in the format Day-Month-Year and time in 12-hour format
echo "Current Date and Time: " . date("d-m-Y h:i:s A") . "\n"; // returns the current date and time in the format Day-Month-Year Hour:Minute:Second AM/PM.  A - returns AM or PM
// another time format g:ia
echo "Current Date and Time: " . date("d-m-Y g:ia") . "\n"; // returns the current date and time in the format Day-Month-Year Hour:Minute AM/PM.  g - returns hour in 12-hour format, i - returns minutes, a - returns AM or PM
// for more formats, visit: https://www.php.net/manual/en/function.date.php

// Now in order to get 1 week before and after the current date and time, 
echo "Date and Time after 1 week from now: " . date("Y-m-d H:i:s", time() + (7 * 24 * 60 * 60)) . "\n"; // returns the date and time after 1 week from now

// we can check current time zone using the date_default_timezone_get() function
echo "Current Time Zone: " . date_default_timezone_get() . "\n"; // returns the current time zone

// mktime() function can also be used to get the time in seconds since the Unix epoch
// mktime() function takes 6 arguments: hour, minute, second, month, day, year
// for example, to get the time in seconds since the Unix epoch for 1 week from now
echo "Time after 1 week from now since Unix Epoch: " . mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 7, date("Y")) . "\n"; // returns the time after 1 week from now
// date("H") - returns the current hour, 
// date("i") - returns the current minute,
// date("s") - returns the current second, 
// date("m") - returns the current month, 
// date("d") - returns the current day, 
// date("Y") - returns the current year

// to convert output of mktime() function to the date and time format, we can use the date() function . For example, to get date and time before 3 days from now
echo "Date and Time before 3 days from now: " . date("D-M-Y g:ia", mktime(date("H"), date("i"), date("s"), date("m"), date("d") - 3, date("Y"))) . "\n"; // returns the date and time before 3 days from now

// strtotime() function can also be used to get the time in seconds since the Unix epoch
echo "Time in seconds at Jan 20 2022 since Unix Epoch: " . strtotime("2022-01-20 08:30:00") . "\n";
// similary strtotime() output can be converted to the date and time format using the date() function
echo "Date and Time at Jan 20 2022: " . date("Y-m-d H:i:s", strtotime("2022-01-20 08:30:00")) . "\n"; // returns the date and time at Jan 20 2022

// we can use some predefined reference strings with the strtotime() function
echo "Current Date and Time: " . date("Y-m-d H:i:s", strtotime("now")) . "\n"; // returns the current date and time
echo "Tommorow's Date and Time: " . date("Y-m-d H:i:s", strtotime("tomorrow")) . "\n"; // returns tommorow's date and time
echo "Last Date of the month: " . date("Y-m-d H:i:s", strtotime("last day of this month")) . "\n"; // returns the last date of the month

// date parsing can also be done using the date_parse() function
print_r(date_parse("2022-01-20 08:30:00")); // returns the parsed date and time
$date = date("Y-m-d H:i:s", strtotime("First day of this month"));
print_r(date_parse($date)); // returns the parsed date and time
// date_parse_from_format() function can also be used to parse the date and time from a string
print_r(date_parse_from_format("Y-m-d H:i:s", "2022-01-20 08:30:00")); // returns the parsed date and time