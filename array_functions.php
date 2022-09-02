<?php
$fruits = ['apple', 'orange', 'lemon', 'mango'];

// Get length
echo count($fruits);

// Search array
var_dump(in_array('apple', $fruits));

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'oat', 'grapes');
array_unshift($fruits, 'oat');
unset($fruits[1]);

// Remove from array
array_pop($fruits);
array_shift($fruits);

// Split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

// print_r($fruits);
// print_r($chunked_array);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1,...$arr2];
print_r($arr3);
print_r($arr4);

$numbers = range(1, 20);
$newNumbers = array_map(function ($number){
    return 'Number ${number}';
}, $numbers);

print_r($newNumbers);

$sum = array_reduce($numbers, fn($carry, $numbers) => $carry + $numbers );


var_dump($sum);
