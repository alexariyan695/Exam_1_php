<?php
// Create a PHP script to find the sum of all elements in an array.

$arr = [10, 20, 30, 40, 50, 60];


$sum = 0;

for ($i = 0; $i < sizeof($arr); $i++) {
    $sum += $arr[$i];
}


echo "Sum of Array Values:" . $sum;

























?>