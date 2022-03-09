<?php

$NUMBER = (int)fgets(STDIN);
$HOURS = (int)fgets(STDIN);
$RATE = (double)fgets(STDIN);

(double)$SALARY = $HOURS * $RATE;
(double)$SALARY = number_format($SALARY, 2, ".", "");

echo "NUMBER = " . $NUMBER . PHP_EOL;
echo "SALARY = U$ " . $SALARY . PHP_EOL;

?>