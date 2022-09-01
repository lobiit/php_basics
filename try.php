
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$name = 'loto'; //str
$age = 40;
$has_kids = false; //bool

echo $name;

// simple Array
$numbers = [1,23,45,6,90];
$fruits = array('apple', 'mango', 'orange', 'lemon');

print_r($fruits);
echo $numbers[3];

// associative array
$people = [
        [
        'first_name' => 'Jon',
        'last_name' => 'Lobi',
        'email' => 'joh@gmail.com'
    ],
    [
    'first_name' => 'Jonte',
    'last_name' => 'Lose',
    'email' => 'johnte@gmail.com'
    ],
    [
        'first_name' => 'Jowy',
        'last_name' => 'Marle',
        'email' => 'jowy@gmail.com'
        ],
    [
        'first_name' => 'Jacky',
        'last_name' => 'Lesa',
        'email' => 'jacky@gmail.com'
    ]
];
// echo  $people[2]['email'];
var_dump(json_encode($people[1]));
?>
</body>
