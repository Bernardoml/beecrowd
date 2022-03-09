<?php

$raio = (double)fgets(STDIN);
$pi = (double)3.14159;


$volume = (4 / 3.0) * $pi * pow($raio, 3);
var_dump($raio, $pi);
$volume = number_format($volume, 3, ".", "");

echo "VOLUME = " . $volume . PHP_EOL;

?>