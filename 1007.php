<?php

$A = (int)fgets(STDIN);
$B = (int)fgets(STDIN);
$C = (int)fgets(STDIN);
$D = (int)fgets(STDIN);

$DIFERENCA = ($A * $B - $C * $D);

echo "DIFERENCA = " . $DIFERENCA . PHP_EOL;

?>