<?php

$input = explode(" ", fgets(STDIN));

$x = $input[0];
$y = $input[1];

switch (true) {    
    case ($x > 0 && $y > 0):
        echo "Q1" . PHP_EOL;
        break;    

    case ($x < 0 && $y > 0):
        echo "Q2" . PHP_EOL;
        break;

    case ($x < 0 && $y < 0):
        echo "Q3" . PHP_EOL;
        break;

    case ($x > 0 && $y < 0):
        echo "Q4" . PHP_EOL;
        break;

    case ($x == 0 && $y != 0):
        echo "Eixo Y" . PHP_EOL;
        break;

    case ($x != 0 && $y == 0):
        echo "Eixo X" . PHP_EOL;
        break;

    default:
        echo "Origem" . PHP_EOL;
        break;
}

?>