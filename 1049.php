<?php

$input[0] = trim(fgets(STDIN));
$input[1] = trim(fgets(STDIN));
$input[2] = trim(fgets(STDIN));

$animal = [
    "vertebrado" => [
        "ave" => [
            "carnivoro" => "aguia",
            "onivoro" => "pomba"
        ],
        "mamifero" => [
            "onivoro" => "homem",
            "herbivoro" => "vaca"
        ]
    ],
    "invertebrado" => [
        "inseto" => [
            "hematofago" => "pulga",
            "herbivoro" => "lagarta"
        ],
        "anelideo" => [
            "hematofago" => "sanguessuga",
            "onivoro" => "minhoca"
        ]
    ],
];

echo $animal[$input[0]][$input[1]][$input[2]] . PHP_EOL;

?>