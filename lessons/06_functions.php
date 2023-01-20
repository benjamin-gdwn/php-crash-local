<?php

function registerUser($email) {
    echo $email . 'user registered';
};

registerUser('tst@test.com');

function sum ($n1 = 1, $n2 = 9) {
    return $n1 + $n2;
};

$number = sum();

echo $number;

$subtract = function($n1, $n2) {
    return $n1 - $n2;
};
// arrow function 
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(100, 46);
?>