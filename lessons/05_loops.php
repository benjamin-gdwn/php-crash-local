<?php 

for ($x = 0; $x <= 10; $x++) {
    echo 'Number ' . $x . '<br>';
};

$posts = ['First Post', 'Second Post', 'Third Post'];

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// };

// foreach($posts as $post) {
//     echo $post;
// }

foreach($posts as $index => $post) {
        echo $index +1 . '-' . $post . '<br>';
    };
?>