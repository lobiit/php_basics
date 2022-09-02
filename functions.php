<?php
function registerUser($name) {
    echo $name . ' registered';
}
registerUser('john');

function sum($n1, $n2) {
    return $n1 + $n2;
}
$result = sum(34, 12);
echo $result;
// Arrow functions
$sutract =  fn($n1, $n2)=> $n1-$n2;

echo $sutract(45, 5);

