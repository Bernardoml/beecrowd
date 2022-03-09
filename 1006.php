<?php

$A = (double)fgets(STDIN);
$B = (double)fgets(STDIN);
$C = (double)fgets(STDIN);

(double)$MEDIA = (($A * 2) + ($B * 3) + ($C * 5)) / 10;
(double)$MEDIA = number_format($MEDIA, 1, ".", "");

echo "MEDIA = " . $MEDIA . PHP_EOL;

?>