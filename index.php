<?php

$arr = [
    0 => [
        'g',
        'h'
    ],
    1 => 'e',
    2 => [
        'o',
        'r'
    ],
    'a' => [
        5 => 'g'
    ],
    3 => 'h',
    'z' => [
        'e' => true
    ]
];

$key_e = array_keys($arr['z']);
$E = $key_e[0];
var_dump($arr[0][0].$arr[0][1].$arr[1].$arr[2][0].$arr[2][1].$arr['a'][5].$arr[3].$E);






