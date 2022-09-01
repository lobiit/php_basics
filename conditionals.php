<?php
$age = 20;

if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}

$t = date('H');

if ($t < 6){
    echo 'Good morning';
} elseif ($t <16 and $t >= 6 ){
    echo 'Good afternoon';
} else{
    echo 'Good evening';
}

$posts = ['First post', 'secondPost'];

if (!empty($posts)){
    echo ' '. $posts[0];
} else {
    echo 'No Posts';
}

// Ternary operator
echo !empty($posts) ? $posts[0] : 'No posts';
$first_post = !empty($posts) ? $posts[0] : 'No posts';
echo $first_post;
$second_post = $posts[1] ?? null;
echo $second_post;