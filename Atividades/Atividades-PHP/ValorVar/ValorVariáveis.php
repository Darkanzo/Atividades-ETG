<?php
$a = 2;
$b = 4;
$c = 6;

$x = --$c + $b;
$y = $b++ + $a;
$z = $a - $b--;

echo "Valores após a execução do programa:\n";
echo "\$a = $a\n";
echo "\$b = $b\n";
echo "\$c = $c\n";
echo "\$x = $x\n";
echo "\$y = $y\n";
echo "\$z = $z\n";