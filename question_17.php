<?php
// Write a PHP function to check if a number is prime.



function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }

    return true; 
}
$number = 60;
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}







?>