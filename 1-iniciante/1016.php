<?php

$km = (int)fgets(STDIN);

$minutos = $km * 2;
$minutos = number_format($minutos, 0, ".", "");

echo $minutos . " minutos" . PHP_EOL;

?>