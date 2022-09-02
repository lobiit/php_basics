<?php
// For Loop

for ($x = 0; $x <= 10; $x++) {
    echo 'Number'. $x . '<br>';
}

$x = 1;
while ($x<= 5) {
    echo 'Number ' . $x . '<br>';
    $x++;
}

// Do While Loop
$x = 1;

do {
    echo 'Number ' . $x . '<br>';
    $x++;
}
while ($x<15);

// For each loop
$posts = ['sam', 'smith', 'fire', 'on'];
for ($x=0 ; $x<count($posts); $x++){
    echo $posts[$x] . '<br>';
}

foreach ($posts as $index => $post) {
    echo $index . '-' . $post . '<br>';
}