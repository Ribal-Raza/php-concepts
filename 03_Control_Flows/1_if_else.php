<?php
// If/else statements are called conditional statements. The code inside these statements only executes
// when the defined condition is met.
$score = 95;
if ($score > 90) {
    // score > 90 is a conditional statement, if it is true then the following code will execute
    echo "Excellent🏆! You have Scored 90%+ marks";
} else if ($score < 90 && $score > 80) {
    echo "Good 👌! You have scored 80%+ marks";
} elseif ($score < 80 && $score > 70) {
    echo "Nice 👍! You have scored 70%+ marks";
} elseif ($score < 70 && $score > 60) {
    echo "You have passed the exams successfully ✅";
} else {
    echo "Unfortunatly You have not scored enough marks to pass!";
}
