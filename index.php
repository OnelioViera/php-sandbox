<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';

// Implicit conversion
$result = $number1 + $number2;
$result = $number1 + $number3; // int (string to int)

var_dump($result);