<?php
$age = 20;

if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry not old enough to vote';
};

$t = date("H");

if($t < 12) {
    echo 'good morning';
} else if ($t > 12 && $t < 17) {
    echo 'good afternoon';
} else {
    echo 'good evening';
};

$posts = 'first post';

if(empty(!$posts)){
    echo 'not empty';
};

// Switch

$favcolour = 'pink';

switch($favcolour) {
    case 'red';
    echo "Your fave colour is red";
    break;
    case 'blue';
    echo "Your fave colour is blue";
    break;
    case 'yellow';
    echo "Your fave colour is yellow";
    default;
    echo 'Your fave colour is not determined';
};
?>