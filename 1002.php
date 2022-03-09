<?php

$n = (double)3.14159;

$raio = (double)fgets(STDIN);

(double)$area = $n * pow($raio, 2);
(double)$area = number_format($area, 4, ".", "");

echo "A=" . $area . PHP_EOL;

?>