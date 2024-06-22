<?php

$num1 = 99;
$num2 = 1000;
$num3 = 0.01;

$numeros = array($num1, $num2, $num3);

rsort($numeros);

echo "Números em ordem decrescente: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";
