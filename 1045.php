<?php

$input = explode(" ", trim(fgets(STDIN)));

rsort($input);

$a = $input[0];
$b = $input[1];
$c = $input[2];


if ($a < $b + $c)
{
    if ($a * $a == $b * $b + $c * $c)
    {
        echo "TRIANGULO RETANGULO" . PHP_EOL;
    }

    if ($a * $a > $b * $b + $c * $c)
    {
        echo "TRIANGULO OBTUSANGULO" . PHP_EOL;
    }

    if ($a * $a < $b * $b + $c * $c)
    {
        echo "TRIANGULO ACUTANGULO" . PHP_EOL;
    }

    if ($a == $b && $b == $c)
    {
        echo "TRIANGULO EQUILATERO" . PHP_EOL;
    }
    
    if (($a == $b && $a != $c) || ($c == $b && $c != $a))
    {
        echo "TRIANGULO ISOSCELES" . PHP_EOL;
    }
}
else {
    echo "NAO FORMA TRIANGULO" . PHP_EOL;    
}

?>