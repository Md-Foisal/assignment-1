<?php
// Define the three numbers
$num1 = 4;
$num2 = 5;
$num3 = 6;

// Compare the first number with the other two
if ($num1 >= $num2 && $num1 >= $num3) {
    // If $num1 is greater than or equal to both $num2 and $num3, it is the largest
    echo "The largest number is: $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    // If $num1 is not the largest, compare $num2 with $num1 and $num3
    // If $num2 is greater than or equal to both $num1 and $num3, it is the largest
    echo "The largest number is: $num2";
} else {
    // If neither $num1 nor $num2 is the largest, then $num3 must be the largest
    echo "The largest number is: $num3";
}
