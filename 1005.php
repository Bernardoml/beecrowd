<?php

$A = (double)fgets(STDIN);
$B = (double)fgets(STDIN);

(double)$MEDIA = (($A * 3.5) + ($B * 7.5)) / 11;
(double)$MEDIA = number_format($MEDIA, 5, ".", "");

echo "MEDIA = " . $MEDIA . PHP_EOL;

?>