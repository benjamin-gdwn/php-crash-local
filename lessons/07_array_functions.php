<?php
$fruits = ['apple', 'orange', 'pear'];
// length
echo count($fruits);
// search
echo in_array('apple', $fruits);
//  add to array
$fruits[] = 'grape';
// add to end
array_push($fruits, 'blueberry', 'strawberry');
// add to start
array_unshift($fruits, 'mango');
// remove last
array_pop($fruits);
// remove first
array_shift($fruits);
// specific element
// break into chunks
$chuncked_Array = array_chunk($fruits, 2);
// print_r($chuncked_Array);
// print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// combine arrays
$new_array = array_merge($arr1, $arr2);


$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
// combines arrays as key value pairs
$c = array_combine($a, $b);

// set a range
$numbers = range(1,20);

// print_r($numbers);

$newNumbers = array_map(function($number) {
    return "Number ${number}";
}, $numbers);

// print_r($newNumbers);
// filtering an array
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

// print_r($lessThan10);
// reduce the array to the total amount
$summ = array_reduce($numbers, fn($carry, $number) => $carry + $number);

var_dump($summ);


// print_r($new_array);
?>