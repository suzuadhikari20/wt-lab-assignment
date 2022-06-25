<?php

//multi dimensional numeric array
$names = [["Nishal",1],["Anil",2],["Rohit",4]];

echo $names[0][0];
echo $names[0][1];
echo $names[1][0];
echo $names[1][1];
echo $names[2][0];
echo $names[2][1];

//multi dimensional associative array
$persons = [
    [
        "name" => "Nishal",
        "roll" => 1
    ],
    [
        "name" => "Anil",
        "roll" => 2
    ],
    [
        "name" => "Rohit",
        "roll" => 4
    ]
];
echo "<br/";
echo $persons[0];


?>