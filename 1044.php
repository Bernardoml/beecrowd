<?php

$input = explode(" ", trim(fgets(STDIN)));

$a = (int)$input[0];
$b = (int)$input[1];

if ($a % $b == 0 || $b % $a ==0)
{
    echo "Sao Multiplos" . PHP_EOL;
} 
else 
{
    echo "Nao sao Multiplos" . PHP_EOL;
}

?>