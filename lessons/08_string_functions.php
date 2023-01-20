<?php

$string = 'Hello World';

// string length 
// echo strlen($string);

// find position of first occurence of sub string in a string

echo strpos($string, 'l');

// find position of last occurance

echo strrpos($string, 'l');

// reverse a string

echo strrev($string);

// convert all characters to lower case

echo strtolower($string);

// convert to uppercase

echo ucwords($string);

// string replace

echo str_replace('World', 'Everyone', $string);

// replace string specified by the offset and length

echo substr($string, 0, 5);
echo substr($string, 5);

// starts with
if(str_starts_with($string, 'Hello')) {
    echo 'YES';
};

// ends with

if(str_ends_with($string, 'ld')) {
    echo 'YES';
};

$string2 = '<h1>Hello</h1>';
// prevents browser parsing scripts

echo htmlspecialchars($string2);

// 

printf('%s likes to %s', 'Brad', 'code');
printf('1+1=%s', 1+1);

?>