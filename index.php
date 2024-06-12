<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
$result = $number1 + $number2; // int
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // string (int to string)
// $result = $fruit + $number2; // Error (string to int)
$result = $number1 + $bool1; // int (bool to int)
$result = $number1 + $bool2; // int (bool to int)
$result = $number1 + $null; // int (null to int)

var_dump($result);