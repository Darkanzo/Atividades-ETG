<?php

$num1 = 22;
$num2 = 13;

$soma = $num1 + $num2;

if ($soma > 20) {
    $resultado = $soma + 8;
} else {
    $resultado = $soma - 5;
}

echo "O resultado é: " . $resultado . "\n";