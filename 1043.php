<?php

$input = explode(" ", trim(fgets(STDIN)));

$a = (float)$input[0];
$b = (float)$input[1];
$c = (float)$input[2];

if ($a >= $b + $c || $b >= $a + $c || $c >= $a + $b)
{
    echo "Area = " . number_format(($a + $b) * $c / 2, 1) . PHP_EOL;
} 
else 
{
    echo "Perimetro = " . number_format(($a + $b + $c), 1) . PHP_EOL;
}

?>